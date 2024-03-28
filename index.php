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


$database = new Connect();
$danhmuc = new Categorys();
$sanpham = new Products();
$users = new Users();
$comments = new Comments();

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
            include 'resources/product/confirmation.php';
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
