<?php
namespace dao;

use Exception;
use dao\Connect;

class Products
{
    private $database;

    public function __construct()
    {
        $this->database = new Connect();
    }

    public function insert_sanpham($product_name, $price, $img, $description, $stock_quantity, $category_id)
    {
        $sql = "INSERT INTO products (product_name, price, img, description, stock_quantity, category_id) VALUES (?, ?, ?, ?, ?, ?)";
        $params = array($product_name, $price, $img, $description, $stock_quantity, $category_id);
        $this->database->pdo_execute($sql, $params);

    }

    public function getproduct_id($product_name)
    {
        $sql = "SELECT product_id FROM products WHERE product_name = ?";
        $params = array($product_name);
        $result = $this->database->pdo_query_one($sql, $params);

        if ($result && isset ($result['product_id'])) {
            return $result['product_id'];
        } else {
            return null;
        }
    }

    public function delete_sanpham($product_id)
    {
        $sql = "DELETE FROM products  WHERE product_id = ?";
        $params = array($product_id);
        $this->database->pdo_execute($sql, $params);
    }

    public function loadall_sanpham_home()
    {
        $sql = "SELECT * FROM products ORDER BY product_id DESC LIMIT 0,3";
        $listsanpham = $this->database->pdo_query($sql);
        return $listsanpham;
    }

    public function loadall_sanpham_home_small()
    {
        $sql = "SELECT * FROM products ORDER BY product_id ASC LIMIT 0,3";
        $listsanpham = $this->database->pdo_query($sql);
        return $listsanpham;
    }

    public function loadone_sanpham($product_id)
    {
        $sql = "SELECT * FROM products WHERE product_id=" . $product_id;
        $params = array($product_id);
        $sp = $this->database->pdo_query_one($sql, $params);
        return $sp;

    }

    public function load_sanpham_cungloai($product_id, $category_id)
    {
        $sql = "SELECT * FROM products WHERE category_id=? AND product_id <> ?";
        $params = array($category_id, $product_id);
        $listsanpham = $this->database->pdo_query($sql, $params);
        return $listsanpham;
    }

    public function update_sanpham($product_id, $category_id, $product_name, $price, $description, $stock_quantity, $img)
    {
        if (isset ($_POST['product_id'])) {
            $product_id = $_POST['product_id'];

            if ($img != "") {
                $sql = "UPDATE products SET category_id=?, product_name=?, price=?, description=?, img=?, stock_quantity=? WHERE product_id=?";
                $params = array($category_id, $product_name, $price, $description, $img, $stock_quantity, $product_id);
            } else {
                $sql = "UPDATE products SET category_id=?, product_name=?, price=?, description=?, stock_quantity=? WHERE product_id=?";
                $params = array($category_id, $product_name, $price, $description, $stock_quantity, $product_id);
            }
            $this->database->pdo_execute($sql, $params);
        }
    }


    public function loadall_sanpham($kyw = "", $category_id = 0)
    {
        $sql = "SELECT p.*, c.category_name FROM products p LEFT JOIN categories c ON p.category_id = c.category_id WHERE 1";
        $params = array();
        if ($kyw != "") {
            $sql .= " AND p.name LIKE ?";
            $params[] = "%" . $kyw . "%";
        }
        if ($category_id > 0) {
            $sql .= " AND p.category_id = ?";
            $params[] = $category_id;
        }
        $sql .= " ORDER BY p.category_id ASC";
        $listsanpham = $this->database->pdo_query($sql, $params);
        return $listsanpham;
    }

    public function load_ten_dm($category_id)
    {
        if ($category_id > 0) {
            $sql = "SELECT * FROM categories WHERE category_id=?";
            $params = array($category_id);
            $dm = $this->database->pdo_query_one($sql, $params);
            if ($dm && isset ($dm['name'])) {
                return $dm['name'];
            }
        }
        return "";
    }

    public function loadallThongKe()
    {
        $sql = "SELECT danhmuc.category_id AS category_id, danhmuc.tendanhmuc AS tendanhmuc, COUNT(sanpham.product_id) AS countsp, MIN(sanpham.price) AS minprice, MAX(sanpham.price) AS maxprice, AVG(sanpham.price) AS avgprice ";
        $sql .= "FROM sanpham LEFT JOIN danhmuc ON danhmuc.category_id = sanpham.category_id ";
        $sql .= "GROUP BY danhmuc.category_id ORDER BY danhmuc.category_id ASC";

        $listtk = $this->database->pdo_query($sql);
        return $listtk;
    }
}
