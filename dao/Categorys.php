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

    public function insert_danhmuc($tendanhmuc)
    {
        $sql = "INSERT INTO categories (category_name) VALUES (?)";
        $this->database->pdo_execute($sql, $tendanhmuc);
    }

    public function delete_danhmuc($category_id)
    {
        $sqlCheck = "SELECT COUNT(*) as count FROM products WHERE category_id = ?";
        $result = $this->database->pdo_query_one($sqlCheck, $category_id);

        if ($result['count'] > 0) {
            return false;
        }

        $sql = "DELETE FROM categories WHERE category_id = ?";
        $this->database->pdo_execute($sql, $category_id);

        return true;
    }

    public function loadall_danhmuc()
    {
        $sql = "SELECT * FROM categories ORDER BY category_id DESC";
        $listdanhmuc = $this->database->pdo_query($sql);
        return $listdanhmuc;
    }

    public function loadone_danhmuc($madanhmuc)
    {
        $sql = "SELECT * FROM danhmuc WHERE madanhmuc = ?";
        $dm = $this->database->pdo_query_one($sql, $madanhmuc);
        return $dm;
    }

    public function update_danhmuc($madanhmuc, $tendanhmuc)
    {
        $sql = "UPDATE danhmuc SET tendanhmuc = ? WHERE madanhmuc = ?";
        $this->database->pdo_execute($sql, $tendanhmuc, $madanhmuc);
    }

    public function showdm($dsdm)
    {
        $html_dm = '';
        foreach ($dsdm as $dm) {
            extract($dm);
            $link = 'index.php?act=sanpham&madanhmuc=' . $madanhmuc;
            $html_dm .= '<a href="' . $link . '">' . $tendanhmuc . '</a>';
        }

        return $html_dm;
    }
}
