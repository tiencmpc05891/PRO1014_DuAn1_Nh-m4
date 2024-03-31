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
    public function insert_blog($title, $content, $author)
    {
        $sql = "INSERT INTO news (title, content, author) VALUES (?, ?, ?)";
        $params = array($title, $content, $author);
        $this->database->pdo_execute($sql, $params);
    }
   
   public function get_all_blog()
    {
        $sql = "SELECT * FROM news";
        $result = $this->database->pdo_query($sql);
        return $result;
    }
    public function delete_blog($news_id)
    {
        $sql = "DELETE FROM news  WHERE news_id = ?";
        $params = array($news_id);
        $this->database->pdo_execute($sql, $params);
    }
    public function update_blog( $title, $content, $author)
    {  
        $sql = "UPDATE news SET title = ?, content = ?, author = ? WHERE news_id = ?";
        $params = array( $title, $content, $author);
    $this->database->pdo_execute($sql, $params);
    }
   
    public function getone_blog($news_id)
    {
        $sql = "SELECT * FROM news WHERE news_id = ?";
        $params = array($news_id);
        $result = $this->database->pdo_query($sql, $params);
        return $result;
    }

}