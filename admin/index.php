<?php
session_start();
ob_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once "../vendor/autoload.php";

include 'dist/header.php';
include 'dist/slidebar.php';


use dao\Products;
use dao\Connect;
use dao\Categorys;
use dao\Comments;

$database = new Connect();
$danhmuc = new Categorys;
$sanpham = new Products;
$comment = new Comments();

if (isset($_GET['url']) && ($_GET['url'] != "")) {
    switch ($_GET['url']) {
        case 'home':
            include 'dist/home.php';
            break;
        case 'listcate':
            $sql = "select * from categories order by category_id desc";
            $listdanhmuc = $danhmuc->loadall_danhmuc();
            include 'dist/categorys/listcate.php';
            break;
        case 'addcate':

            include 'dist/categorys/addcate.php';
            break;

        case 'editcate':
            if (isset($_GET['category_id']) && ($_GET['category_id'] > 0)) {
                $dm = $danhmuc->loadone_danhmuc($_GET['category_id']);
            }
            include 'dist/categorys/updatecate.php';
            break;

        case 'updatecate':
            if (isset($_POST['update']) && ($_POST['update'])) {
                $category_id = $_POST['category_id'];
                $category_name = $_POST['category_name'];

                if (empty($category_name)) {
                    $loi = "Tên danh mục không hợp lệ!";
                } else {
                    $danhmuc->update_danhmuc($category_id, $category_name);
                    $thongbao = "Cập nhật thành công!";
                }
            }
            $listdanhmuc = $danhmuc->loadall_danhmuc();
            include 'dist/categorys/listcate.php';
            break;
        case 'deletecate':
            if (isset($_GET['category_id']) && ($_GET['category_id'] > 0)) {
                $category_id = $_GET['category_id'];
                // Nếu có sản phẩm liên kết, không thể xóa, trả về status code 500
                if ($danhmuc->delete_danhmuc($category_id)) {
                    $thongbao = "Xóa danh mục thành công.";
                } else {
                    http_response_code(500);
                    $loi = "Không thể xóa danh mục vì có sản phẩm liên kết.";
                }
            }
            // Sau khi xóa, load lại danh sách danh mục
            $listdanhmuc = $danhmuc->loadall_danhmuc();
            include "dist/categorys/listcate.php"; // Load trang danh sách danh mục
            break;


        case 'listproducts':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $category_id = $_POST['category_id'];
            } else {
                $kyw = '';
                $category_id = 0;
            }
            $listdanhmuc = $danhmuc->loadall_danhmuc();
            $listsanpham = $sanpham->loadall_sanpham($kyw, $category_id);
            include 'dist/products/listproducts.php';
            break;
        case 'addproducts':
            if (isset($_POST['add']) && ($_POST['add'])) {
                $category_id = $_POST['category_id'];
                $product_name = $_POST['product_name'];
                $price = $_POST['price'];
                $description = $_POST['description'];
                $stock_quantity = $_POST['stock_quantity'];
                $img = $_FILES['img']['name'];
                $target_dir = "../public/uploads/images/";
                $target_file = $target_dir . basename($_FILES["img"]["name"]);
                $price = str_replace(',', '', $price); // Loại bỏ dấu phân cách
                $price = (int) $price; // Chuyển đổi thành số nguyên
                if (empty($product_name) || empty($description) || empty($stock_quantity) || empty($img) || empty($category_id)) {
                    $loi = "Vui lòng điền đầy đủ thông tin!";
                } else if (!is_numeric($price) || $price <= 0) {
                    $loi = "giá sản phẩm không hợp lệ!";
                } else {
                    if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                        $sanpham->insert_sanpham($product_name, $price, $img, $description, $stock_quantity, $category_id);
                        $thongbao = "Thêm sản phẩm thành công!";
                    } else {
                        $loi = "Lỗi khi thêm!";
                    }
                }
            }
            $listdanhmuc = $danhmuc->loadall_danhmuc();
            include 'dist/products/addproducts.php';
            break;
        case 'editproducts':
            if (isset($_GET['product_id']) && ($_GET['product_id'] > 0)) {
                $listsanpham = $sanpham->loadone_sanpham($_GET['product_id']);
            }
            $listdanhmuc = $danhmuc->loadall_danhmuc();
            include "dist/products/updateproducts.php";
            break;
        case 'updateproducts':
            if (isset($_POST['update']) && ($_POST['update'])) {
                $product_id = $_POST['product_id'];
                $category_id = $_POST['category_id'];
                $product_name = $_POST['product_name'];
                $price = $_POST['price'];
                $description = $_POST['description'];
                $stock_quantity = $_POST['stock_quantity'];
                $img = $_FILES['img']['name'];
                $target_dir = "../public/uploads/images/";
                $target_file = $target_dir . basename($_FILES["img"]["name"]);
                $price = str_replace(',', '', $price); // Loại bỏ dấu phân cách
                $price = (int) $price; // Chuyển đổi thành số nguyên
                if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                    $sanpham->update_sanpham($product_id, $category_id, $product_name, $price, $description, $stock_quantity, $img);
                    $thongbao = "Sửa sản phẩm thành công";
                } else {
                    $loi = "Vui lòng nhập đầy đủ thông tin";
                }
            }
            $listdanhmuc = $danhmuc->loadall_danhmuc();
            $listsanpham = $sanpham->loadall_sanpham();
            include "dist/products/listproducts.php";
            break;
        case 'deleteproducts':
            if (isset($_GET['product_id']) && ($_GET['product_id'] > 0)) {
                $sanpham->delete_sanpham($_GET['product_id']);
            }

            $listsanpham = $sanpham->loadall_sanpham("", 0);
            include "dist/products/listproducts.php";
            break;
        case 'listbill':
            include 'dist/bill/bill.php';
            break;
        case 'listcomment':

            $listcomment = $comment->get_all_comments() ;
            include 'dist/comment/comment.php';
            break;
        case 'deletecomment':
            
            if (isset($_GET['comment_id']) && ($_GET['comment_id'] > 0)) {
                $comment->delete_comment($_GET['comment_id']);
            }
            $listcomment = $comment->get_all_comments() ;
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
