<?php
namespace dao;

use Exception;
use dao\Connect;

class Admin
{
    private $database;

    public function __construct()
    {
        $this->database = new Connect();
    }

    public function insert_admin($username, $email, $role)
    {

        $sql = "INSERT INTO admins (username, email, role) VALUES (?, ?, ?)";
        $params = array($username, $email, $role);
        $this->database->pdo_execute($sql, $params);
    }


    public function sign_in($email)
    {

        $sql_customer = "SELECT * FROM customers WHERE email = ?";
        $params = array($email);
        $customer = $this->database->pdo_query_one($sql_customer, $params);

        if ($customer) {
            $customer['role'] = 'user';
            return $customer;
        } else {
            $sql_admin = "SELECT * FROM admins WHERE email = ?";
            $admin = $this->database->pdo_query_one($sql_admin, $params);
            if ($admin) {
                $admin['role'] = 'admin';
                return $admin;
            } else {
                return null;
            }
        }
    }



    public function getone_admin($admin_id)
    {
        $sql = "SELECT * FROM admins WHERE admin_id =" . $admin_id;
        $params = array($admin_id);
        $sp = $this->database->pdo_query_one($sql, $params);
        return $sp;

    }
    public function update_admin($admin_id, $username, $password, $email, $role)
    {
        if ($password !== null) {
            $sql = "UPDATE admins SET username = ?, password = ?, email = ?, role = ? WHERE admin_id = ?";
            $params = array($username, $password, $email, $role, $admin_id);
        } else {
            $sql = "UPDATE admins SET username = ?, email = ?, role = ? WHERE admin_id = ?";
            $params = array($username, $email, $role, $admin_id);
        }
        $this->database->pdo_execute($sql, $params);
    }
    
    public function checkemail($email)
    {
        $sql = "SELECT * FROM admins WHERE email='" . $email . "'";
        $params = array($email);
        $sp = $this->database->pdo_query_one($sql, $params);
        return $sp;
    }
    public function checkname($username)
    {
        $sql = "SELECT * FROM admins WHERE username='" . $username . "'";
        $params = array($username);
        $sp = $this->database->pdo_query_one($sql, $params);
        return $sp;
    }

    public function get_all_admin()
    {
        $sql = "SELECT * FROM admins";
        $params = array();
        $result = $this->database->pdo_query($sql, $params);
        return $result;
    }
    public function delete_admin($admin_id)
    {
        $sql = "DELETE FROM admins  WHERE admin_id = ?";
        $params = array($admin_id);
        $this->database->pdo_execute($sql, $params);
    }


}
