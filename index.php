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

$database = new Connect();
$danhmuc = new Categorys();
$sanpham = new Products();
$users = new Users();
$comments = new Comments();
$cart = new Cart;
$ratings = new Ratings();

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
                // Kiểm tra xem các trường thông tin cần thiết đã được điền đầy đủ hay không
                if (empty($_POST['fullname']) || empty($_POST['email']) || empty($_POST['address']) || empty($_POST['phone']) || empty($_POST['payment_method'])) {
                    // Nếu có bất kỳ trường nào bị bỏ trống, hiển thị thông báo lỗi và không thực hiện thêm đơn hàng
                    echo "Vui lòng điền đầy đủ thông tin để đặt hàng.";
                    // Điều hướng lại đến trang checkout và giữ lại giỏ hàng
                    header("Location: index.php?url=checkout");
                    exit();
                } else {
                    // Nếu các trường thông tin đều được điền đầy đủ, tiếp tục thực hiện thêm đơn hàng vào cơ sở dữ liệu
                    $fullname = $_POST['fullname'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $phone = $_POST['phone'];
                    $payment_method = $_POST['payment_method'];
                    $order_date = date('Y-m-d H:i:s'); // Lấy ngày giờ hiện tại theo định dạng chuẩn của PHP

                    $total_amount = $cart->tongdonhang();

                    if (isset($_SESSION['user'])) {
                        $customer_id = $_SESSION['user']['customer_id'];
                    } else {
                        $customer_id = 0; // hoặc giá trị mặc định khác tùy thuộc vào logic của bạn
                    }


                    $order_id = $cart->insertBill($customer_id, $order_date, $fullname, $total_amount, $payment_method, $phone, $email, $address);


                    // Kiểm tra và xử lý chi tiết đơn hàng
                    if (isset($_SESSION['mycart']) && !empty($_SESSION['mycart'])) {
                        foreach ($_SESSION['mycart'] as $item) {

                            $cart = new Cart;
                            $cart->insertCart($customer_id, $item['product_id'], $order_id, $item['img'], $item['product_name'], $item['price'], $item['quantity'], $item['total_amount']);
                        }

                        // Xóa giỏ hàng của người dùng
                        unset($_SESSION['mycart']);
                    }

                    // Chuyển hướng đến trang billcomform sau khi đã thêm đơn hàng vào cơ sở dữ liệu
                    header("Location: index.php?url=confirmation&order_id=$order_id");
                    exit();
                }
            }

            // $bill = $cart->loadoneBill($order_id);
            // $bill = $cart->loadallCart($customer_id);
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
        case 'forgotpassword':
            include 'resources/users/forgotpassword.php';
            break;
        case 'verifycation':


            include 'resources/users/verifycation.php';
            break;
        case 'resetpassword':


            include "resources/users/reset_password.php";
            break;
            case 'ratings':
                {
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        // Lấy dữ liệu từ form
                        $customer_id = isset($_POST['customer_id']) ? $_POST['customer_id'] : null;
                        $product_id = isset($_POST['product_id']) ? $_POST['product_id'] : null;
                        $rating_date = date('Y-m-d');
                        $rating = isset($_POST['rating']) ? $_POST['rating'] : null;
                        $review = isset($_POST['review']) ? $_POST['review'] : null;
        
                        if (empty($rating)) {
                            $error = "Bình luận không được để trống!";
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
