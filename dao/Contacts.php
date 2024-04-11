<?php
namespace dao;

use Exception;
use dao\Connect;

class Contacts
{
    private $database;

    public function __construct()
    {
        $this->database = new Connect();
    }

    public function insert_contact($name, $email, $subject, $message, $created_at)
    {
        $sql = "INSERT INTO contacts (name, email, subject, message, created_at) VALUES (?, ?, ?, ?, ?)";
        $params = array($name, $email, $subject, $message, $created_at);
        $this->database->pdo_execute($sql, $params);

    } 
    public function get_all_contact()
    {
        $sql = "SELECT * FROM contacts";
        $params = array();
        $result = $this->database->pdo_query($sql, $params);
        return $result;
    }

}