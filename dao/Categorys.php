<?php

namespace dao;

use dao\Connect;

class Categorys
{
    private $database;

    public function __construct()
    {
        $this->database = new Connect();
    }

    public function insert_danhmuc($category_name)
    {
        $sql = "INSERT INTO categories (category_name) VALUES (?)";
        $params = array($category_name); // Chuyển biến $category_name thành một mảng
        $this->database->pdo_execute($sql, $params);
    }


    public function delete_danhmuc($category_id)
    {
        // Thực hiện xóa mềm danh mục
        $sql = "UPDATE categories SET deleted_at = NOW() WHERE category_id = ?";
        $this->database->pdo_execute($sql, [$category_id]);

        return true; // Trả về true nếu xóa mềm thành công
    }

    public function restore_danhmuc($category_id)
    {
        // Thực hiện khôi phục danh mục bằng cách cập nhật cột deleted_at thành NULL
        $sql = "UPDATE categories SET deleted_at = NULL WHERE category_id = ?";
        $this->database->pdo_execute($sql, [$category_id]);
    }

    public function update_created_at($created_at)
    {
        $sql = "UPDATE categories SET created_at = :created_at ORDER BY category_id DESC LIMIT 1";
        $conn = $this->database->pdo_get_connection(); // Lấy kết nối từ lớp Connect
        $stmt = $conn->prepare($sql); // Sử dụng prepare từ PDO
        $stmt->bindParam(':created_at', $created_at);
        $stmt->execute();
    }
    public function show_deleted_categories()
    {
        $sql = "SELECT * FROM categories WHERE deleted_at IS NOT NULL"; // Lấy tất cả các bản ghi có deleted_at khác NULL
        $deleted_categories = $this->database->pdo_query($sql);
        return $deleted_categories;
    }
    
    public function loadall_danhmuc()
    {
        $sql = "SELECT * FROM categories WHERE deleted_at IS NULL ORDER BY category_id DESC";
        $listdanhmuc = $this->database->pdo_query($sql);
        return $listdanhmuc;
    }


    public function loadone_danhmuc($category_id)
    {
        $sql = "SELECT * FROM categories WHERE category_id = " . $category_id;
        $params = array($category_id);
        $dm = $this->database->pdo_query_one($sql, $params);
        return $dm;
    }

    public function update_danhmuc($category_id, $category_name)
    {
        $sql = "UPDATE categories SET category_name = ? WHERE category_id = ?";
        $params = array($category_name, $category_id);
        $this->database->pdo_execute($sql, $params);
    }

    public function showdm($dsdm)
    {
        $html_dm = '';
        foreach ($dsdm as $dm) {
            extract($dm);
            $link = 'index.php?url=products&category_id=' . $category_id;
            $html_dm .= '<a href="' . $link . '">' . $category_name . '</a>';
        }

        return $html_dm;
    }
}
