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
    public function insert_blog($title, $content, $author, $img)
    {
        $sql = "INSERT INTO news (title, content, author,img) VALUES (?, ?, ?,?)";
        $params = array($title, $content, $author, $img);
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
    public function update_blog($news_id, $title, $content, $author, $img)
    {
        if (isset($_POST['news_id'])) {
            $news_id = $_POST['news_id'];

            if ($img != "") {
                $sql = "UPDATE news SET title=?, content=?, author=?, img=? WHERE news_id=?";
                $params = array($title, $content, $author, $img, $news_id);
            } else {
                $sql = "UPDATE news SET title=?, content=?, author=?, img=? WHERE news_id=?";
                $params = array($title, $content, $author, $img, $news_id);
            }
            $this->database->pdo_execute($sql, $params);
        }
    }


    public function getone_blog($news_id)
    {
        $sql = "SELECT * FROM news WHERE news_id = " . $news_id;
        $params = array($news_id);
        $result = $this->database->pdo_query_one($sql, $params);
        return $result;
    }
}
