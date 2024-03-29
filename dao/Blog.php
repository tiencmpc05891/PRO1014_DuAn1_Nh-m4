<?php

namespace dao;

use dao\Connect;

class Blog
{
    private $database;

    public function __construct()
    {
        $this->database = new Connect();
    }
    public function insert_baiviet($title, $content, $author, $publish_date, $created_at)
    {
        $sql = "INSERT INTO Blog (title, content, author, publish_date, created_at) VALUES (?, ?, ?, ?, ?)";
        $params = array($title, $content, $author, $publish_date, $created_at);
        $this->database->pdo_execute($sql, $params);
    }
    public function title_td($title)
    {
        $sql = "SELECT title FROM Blog WHERE title = ?";
        $params = array($title);
        $result = $this->database->pdo_query_one($sql, $params);
        return $result;
    }    
    public function content($title)
    {
        $sql = "SELECT Content FROM Blog WHERE title = ?";
        $params = array($title);
        $result = $this->database->pdo_query_one($sql, $params);
        return $result;
    }
    public function author_tg($title)
    {
        $sql = "SELECT author FROM Blog WHERE title = ?";
        $params = array($title);
        $result = $this->database->pdo_query_one($sql, $params);
        return $result;
    }
    
    public function publish_date($title)
    {
        $sql = "SELECT publish_date FROM Blog WHERE title = ?";
        $params = array($title);
        $result = $this->database->pdo_query_one($sql, $params);
        return $result;
    }
    
    public function created_at($title)
    {
        $sql = "SELECT created_at FROM Blog WHERE title = ?";
        $params = array($title);
        $result = $this->database->pdo_query_one($sql, $params);
        return $result;
    }
    

}