<?php
session_start();
ob_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once "../vendor/autoload.php";

include 'dist/header.php';
include 'dist/slidebar.php';



use dao\Connect;
use dao\Categorys;

$database = new Connect();
$danhmuc = new Categorys;
if (isset($_GET['url']) && ($_GET['url'] != "") ) {
    switch ($_GET['url']) {
        case 'home':
            include 'dist/home.php';
            break;
        case 'listcate':
            include 'dist/categorys/listcate.php';
            break;
        case 'addcate':
            if (!empty($_POST['add'])) {
                $tendanhmuc = $_POST['tendanhmuc'];
                if (empty($tendanhmuc)) {
                    $loi = "Vui lòng điền tên danh mục sản phẩm!";
                } else {
                    $thongbao = "Thêm danh mục thành công";
                    $danhmuc->insert_danhmuc($tendanhmuc);
                }
            }
            include 'dist/categorys/addcate.php';
            break;
        case 'listproducts':
            include 'dist/products/listproducts.php';
            break;
        case 'addproducts':
            include 'dist/products/addproducts.php';
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
