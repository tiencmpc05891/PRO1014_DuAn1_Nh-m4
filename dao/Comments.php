<?php

namespace dao;

use dao\Connect;

class Comments
{
    private $database;

    public function __construct()
    {
        $this->database = new Connect();
    }
    public function insert_comment($product_id, $customer_id, $comment, $comment_date)
    {
        $sql = "INSERT INTO comments (product_id, customer_id, comment,comment_date ) VALUES (?, ?, ?, ?)";
        $params = array($product_id, $customer_id, $comment, $comment_date);
        $this->database->pdo_execute($sql, $params);

    }
    public function get_all_comments($product_id)
    {
        $sql = "SELECT * FROM comments WHERE product_id = ?";
        $params = array($product_id);
        $result = $this->database->pdo_query($sql, $params);
        return $result;
    }

    public function get_name_by_id($comment_id)
    {
        $sql = "SELECT customer_name FROM customers WHERE customer_id = ?";
        $params = array($comment_id);
        $result = $this->database->pdo_query_one($sql, $params);
        return $result;
    }

}
