<?php
session_start();
ob_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once "vendor/autoload.php";

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

if (isset ($_GET['url'])) {
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
        default:
            break;
    }
} else {
    include "./resources/home/home.php";
}
include "./includes/footer.php";
