<?php
session_start();
ob_start();
include 'dist/header.php';
include 'dist/slidebar.php';

if (isset($_GET['url'])) {
    switch ($_GET['url']) {
        case 'home':
            include 'dist/home.php';
            break;
        case 'listcate':
            include 'dist/categorys/category.php';
            break;
        case 'listproducts':
            include 'dist/products/product.php';
            break;
        case 'listbill':
            include 'dist/bill/bill.php';
            break;
        case 'listcomment':
            include 'dist/comment/comment.php';
            break;
        case 'listnews':
            include 'dist/news/new.php';
            break;
        case 'listusers':
            include 'dist/user/user.php';
            break;
        default:
            break;
    }
} else {
    include "dist/home.php";
}
include "dist/footer.php";
