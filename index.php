<?php
session_start();
ob_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once "vendor/autoload.php";
require_once "PHPMailer/sourceforgot.php";
include 'includes/header.php';

// use dao\pdo\Connect;
use dao\Products;
use dao\Connect;
use dao\Categorys;
use dao\Users;
use dao\Comments;
use dao\Cart;
use dao\Ratings;
use dao\Contacts;
use dao\Blog;

$sendmails = new Mailer();
$database = new Connect();
$danhmuc = new Categorys();
$sanpham = new Products();
$users = new Users();
$comments = new Comments();
$cart = new Cart;
$ratings = new Ratings();
$contacts = new Contacts();
$blog = new Blog();
if (!isset($_SESSION['mycart']))
    $_SESSION['mycart'] = [];
if (isset($_GET['url'])) {
    switch ($_GET['url']) {
        case 'home':

            include 'resources/home/home.php';
            break;
        case 'category':
            include 'resources/product/category.php';
            break;
        case 'contact':
            include 'resources/home/contact.php';
            break;
        case 'checkout':
            include 'resources/product/checkout.php';
            break;
        case 'cart':
            include 'resources/product/cart.php';
            break;
        case 'addcart':
            if (!isset($_SESSION['user'])) {
                header("Location: index.php?url=login");
                exit();
            }
            if (isset($_POST['addcart']) && ($_POST['addcart'])) {
                $cart_id = $_POST['cart_id'];
                $product_name = $_POST['product_name'];
                $img = $_POST['img'];
                $price = $_POST['price'];
                $quantity = $_POST['quantity'];
                $total_amount = $quantity * $price;
                $product_id = $sanpham->getproduct_id($product_name);
                if ($product_id) { // Kiểm tra nếu product_id hợp lệ
                    $spadd = [
                        'cart_id' => $cart_id,
                        'product_id' => $product_id, // Sử dụng product_id lấy được từ cơ sở dữ liệu
                        'product_name' => $product_name,
                        'img' => $img,
                        'price' => $price,
                        'quantity' => $quantity,
                        'total_amount' => $total_amount
                    ];
                    array_push($_SESSION['mycart'], $spadd);
                } else {
                    // Xử lý khi không lấy được product_id từ cơ sở dữ liệu
                    echo "Không thể thêm sản phẩm vào giỏ hàng. Vui lòng thử lại sau.";
                }
            }
            header("Location: index.php?url=cart");

            break;
        case 'delcart':
            if (isset($_GET['cart_id'])) {
                $cart_id = $_GET['cart_id'];
                // $cart->deleteCartItem($cart_id);
                if (isset($_SESSION['mycart'][$cart_id])) {
                    array_splice($_SESSION['mycart'], $cart_id, 1);
                }
            } else {
                // Nếu không có tham số cart_id, xóa toàn bộ giỏ hàng
                $_SESSION['mycart'] = [];
            }
            header('Location: index.php?url=cart');
            break;
        case 'tracking-order':
            include 'resources/product/tracking-order.php';
            break;
        case 'register':


            include 'resources/users/register.php';
            break;
        case 'single-blog':
            include 'resources/home/single-blog.php';
            break;
        case 'single-product':
            include 'resources/product/single-product.php';
            break;
        case 'confirmation':
            if (isset($_POST['xacnhandathang']) && ($_POST['xacnhandathang'])) {
                if (empty($_POST['fullname']) || empty($_POST['email']) || empty($_POST['address']) || empty($_POST['phone']) || empty($_POST['payment_method'])) {
                    header("Location: index.php?url=checkout");
                    exit();
                } else {
                    $fullname = $_POST['fullname'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $phone = $_POST['phone'];
                    $payment_method = $_POST['payment_method'];
                    $order_date = date('Y-m-d H:i:s');

                    $total_amount = $cart->tongdonhang();

                    if (isset($_SESSION['user'])) {
                        $customer_id = $_SESSION['user']['customer_id'];
                    } else {
                        $customer_id = 0;
                    }

                    $order_id = $cart->insertBill($customer_id, $order_date, $fullname, $total_amount, $payment_method, $phone, $email, $address);

                    if (isset($_SESSION['mycart']) && !empty($_SESSION['mycart'])) {
                        foreach ($_SESSION['mycart'] as $item) {

                            $cart = new Cart;
                            $cart->insertCart($customer_id, $item['product_id'], $order_id, $item['img'], $item['product_name'], $item['price'], $item['quantity'], $item['total_amount']);
                        }
                        unset($_SESSION['mycart']);
                    }
                    $thank_you_title = 'Cảm ơn bạn đã đặt hàng';
                    $thank_you_content = 'Chào ' . $fullname . ',<br><br>Cảm ơn bạn đã đặt hàng tại cửa hàng của chúng tôi. Dưới đây là chi tiết đơn hàng của bạn:<br><br>';
                    $thank_you_content .= '<strong>Thông tin đơn hàng:</strong><br>';
                    $thank_you_content .= 'Mã đơn hàng: ' . $order_id . '<br>';
                    $thank_you_content .= 'Ngày đặt hàng: ' . $order_date . '<br>';
                    $thank_you_content .= 'Tổng tiền đơn hàng: ' . $total_amount . ' VNĐ<br><br>';
                    $thank_you_content .= 'Chúng tôi sẽ xử lý đơn hàng của bạn càng sớm càng tốt.<br><br>Xin chân thành cảm ơn,<br>Đội ngũ của chúng tôi';


                    $senmail = $sendmails->sendMailContact($thank_you_title, $thank_you_content, $email);
                    header("Location: index.php?url=confirmation&order_id=$order_id");
                    exit();
                }
            }

            include 'resources/product/confirmation.php';
            break;
        case 'mybill':
            if (isset($_SESSION['user']) && isset($_SESSION['customer_id'])) {
                $customer_id = $_SESSION['customer_id'];
                if (isset($_GET['order_id']) && ($_GET['order_id'] > 0)) {
                    $cart->deleteDonHang($_GET['order_id']);
                }

                $listbill = $cart->loadallBill($customer_id);
                include 'resources/product/mybill.php';
            } else {
                // Nếu người dùng chưa đăng nhập, hiển thị thông báo yêu cầu đăng nhập
                echo "<p class='text-center'>Vui lòng đăng nhập để xem đơn hàng của bạn.</p>";
            }
            break;
      
        case 'login':
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST['email']) || empty($_POST['password'])) {
                    $error = "Vui lòng điền đầy đủ email và mật khẩu.";
                } else {
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $recaptchaResponse = $_POST['g-recaptcha-response'];
                    $secretKey = '6LcT3LQpAAAAAGm1fDRgMIvqG2TcTZabSrGFwshj';
                    $recaptchaUrl = 'https://www.google.com/recaptcha/api/siteverify?secret=' . $secretKey . '&response=' . $recaptchaResponse;
                    $recaptchaResponseData = json_decode(file_get_contents($recaptchaUrl));
            
                    if (!$recaptchaResponseData->success) {
                        $error = "Vui lòng xác nhận bạn không phải là robot.";
            
                    } else {
                        $existing_user = $users->sign_in($email);
            
                        if ($existing_user) {
                            if ($password === $existing_user['password']) {
                                $_SESSION['user'] = $existing_user;
                                $_SESSION['customer_id'] = $existing_user['customer_id'];
                                if ($existing_user['role'] === 'admin') {
                                    header("Location: ../admin/index.php");
                                    exit();
                                } else {
                                    header("Location: index.php");
                                    exit();
                                }
                            } else {
                                $error = "Mật khẩu không chính xác.";
                            }
                        } else {
                            $error = "Email không tồn tại trong hệ thống.";
                        }
                    }
                }
            }
            include 'resources/users/login.php';
            break;
        case 'blog':
           
            include 'resources/home/blog.php';
            break;
        case 'profile':
            include 'resources/users/profile.php';
            break;
        case 'editprofile':
            include 'resources/users/editprofile.php';
            break;

        case 'comments':
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Lấy dữ liệu từ form
                $customer_id = isset($_POST['customer_id']) ? $_POST['customer_id'] : null;
                $product_id = isset($_POST['product_id']) ? $_POST['product_id'] : null;
                $comment = isset($_POST['comment']) ? $_POST['comment'] : null;
                $comment_date = date('Y-m-d');

                if (empty($comment)) {
                    $error = "Bình luận không được để trống!";
                } else {
                    if (isset($_SESSION['user'])) {
                        // Nếu người dùng đã đăng nhập, thêm bình luận vào cơ sở dữ liệu
                        $comments->insert_comment($product_id, $customer_id, $comment, $comment_date);
                        date_default_timezone_set('Asia/Ho_Chi_Minh');
                        $ngay_gio_hien_tai = date('Y-m-d H:i:s');
                        $comments->update_comment_date($ngay_gio_hien_tai);
                        header("Location: index.php?url=comments&product_id=" . $product_id);
                        exit();
                    } else {
                        // Nếu người dùng chưa đăng nhập, hiển thị thông báo cảnh báo bằng mã JavaScript
                        echo "<script>";
                        echo "alert('Vui lòng đăng nhập để bình luận.');";
                        echo "</script>";
                    }
                }
            }

            include 'resources/product/single-product.php';
            break;
        case 'gg':
            if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['code'])) {
                // Lấy mã xác thực từ Google
                $code = $_GET['code'];

                // Gửi yêu cầu để đổi mã xác thực thành Access Token
                $url = 'https://oauth2.googleapis.com/token';
                $data = array(
                    'code' => $code,
                    'client_id' => '606727185499-4st803lcpbu7kaq87oo5e8or1lo17bpg.apps.googleusercontent.com',
                    'client_secret' => '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',
                    'redirect_uri' => 'http://localhost/PRO1014_DuAn1_Nhom4/',
                    'grant_type' => 'authorization_code'
                );

                $options = array(
                    'http' => array(
                        'method' => 'POST',
                        'header' => 'Content-type: application/x-www-form-urlencoded',
                        'content' => http_build_query($data)
                    )
                );

                $context = stream_context_create($options);
                $result = file_get_contents($url, false, $context);

                // Phân tích JSON để lấy Access Token
                $response = json_decode($result, true);
                $access_token = $response['access_token'];

                // Lấy thông tin người dùng từ Google
                $user_info_url = 'https://www.googleapis.com/oauth2/v1/userinfo?access_token=' . $access_token;
                $user_info_json = file_get_contents($user_info_url);
                if ($user_info_json) {
                    $user_info = json_decode($user_info_json, true);
                    if ($user_info && isset($user_info['email']) && isset($user_info['name'])) {
                        $email = $user_info['email'];
                        // Kiểm tra nếu người dùng chưa tồn tại thì thêm vào CSDL
                        $existing_user = $users->get_user_by_email($email);
                        if (!$existing_user) {
                            $name = $user_info['name'];
                            // Thêm người dùng vào CSDL
                            $users->insert_google($name, $email);
                            $existing_user = $users->get_user_by_email($email);
                        }

                        // Lưu trạng thái đăng nhập vào session
                        $_SESSION['user'] = $existing_user;
                        $_SESSION['logged_in'] = true;
                    } else {
                        // Xử lý trường hợp không có đủ thông tin người dùng từ Google hoặc dữ liệu không hợp lệ
                        echo "Không thể lấy đủ thông tin người dùng từ Google hoặc dữ liệu không hợp lệ.";
                    }
                } else {
                    // Xử lý lỗi khi không thể lấy thông tin người dùng từ Google
                    echo "Không thể kết nối đến Google để lấy thông tin người dùng.";
                }
            } else {
                // Xử lý trường hợp không có mã code được truyền vào
                // Có thể in ra thông báo hoặc chuyển hướng người dùng đến trang khác
                echo "Không có mã code được truyền vào.";
            }
            break;



        case 'forgotpassword':
            include 'resources/users/forgotpassword.php';
            break;
        case 'verifycation':


            include 'resources/users/verifycation.php';
            break;
        case 'resetpassword':


            include "resources/users/reset_password.php";
            break;
        case 'ratings': {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Lấy dữ liệu từ form
                $customer_id = isset($_POST['customer_id']) ? $_POST['customer_id'] : null;
                $product_id = isset($_POST['product_id']) ? $_POST['product_id'] : null;
                $rating_date = date('Y-m-d');
                $rating = isset($_POST['rating']) ? $_POST['rating'] : null;
                $review = isset($_POST['review']) ? $_POST['review'] : null;

                if (empty($rating)) {
                    $error = "Đánh giá hoặc bình luận không được để trống!";
                } else {
                    if (isset($_SESSION['user'])) {

                        $ratings->insert_rating($product_id, $customer_id, $rating_date, $rating, $review);
                        date_default_timezone_set('Asia/Ho_Chi_Minh');
                        $ngay_gio_hien_tai = date('Y-m-d H:i:s');
                        $ratings->update_rating_date($ngay_gio_hien_tai);
                        header("Location: index.php?url=ratings&product_id=" . $product_id);
                        exit();
                    } else {

                        echo "<script>";
                        echo "alert('Vui lòng đăng nhập để bình luận.');";
                        echo "</script>";
                    }
                }
            }
        }
            include 'resources/product/single-product.php';
            break;
        case 'logout':
            session_unset();
            session_destroy();

            header('Location: index.php?url=login');
            break;

        default:
            break;
    }
} else {
    include "./resources/home/home.php";
}
include "./includes/footer.php";
