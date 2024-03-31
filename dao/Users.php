<?php
namespace dao;

use Exception;
use dao\Connect;

class Users
{
    private $database;

    public function __construct()
    {
        $this->database = new Connect();
    }

    public function insert_nguoidung($customer_name, $email, $password)
    {
        $sql = "INSERT INTO customers (customer_name, email, password) VALUES (?, ?, ?)";
        $params = array($customer_name, $email, $password);
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


    public function get_user_by_id($customer_id)
    {
        $sql = "SELECT * FROM customers WHERE customer_id = ?";
        $params = array($customer_id);
        return $this->database->pdo_query_one($sql, $params);
    }

    public function get_user_by_email($email)
    {
        $sql = "SELECT * FROM customers WHERE email = ?";
        $params = array($email);
        return $this->database->pdo_query_one($sql, $params);
    }
    public function getone_user($customer_id)
    {
        $sql = "SELECT * FROM customers WHERE customer_id=" . $customer_id;
        $params = array($customer_id);
        $sp = $this->database->pdo_query_one($sql, $params);
        return $sp;

    }
    public function update_user($customer_id, $customer_name, $email, $phone, $address, $password)
    {
        if ($password !== null) {
            $sql = "UPDATE customers SET customer_name = ?, email = ?, phone = ?, address = ?, password = ? WHERE customer_id = ?";
            $params = array($customer_name, $email, $phone, $address, $password, $customer_id);
        } else {
            $sql = "UPDATE customers SET customer_name = ?, email = ?, phone = ?, address = ? WHERE customer_id = ?";
            $params = array($customer_name, $email, $phone, $address, $customer_id);
        }
        $this->database->pdo_execute($sql, $params);
    }
    public function checkemail($email)
    {
        $sql = "SELECT * FROM customers WHERE email='" . $email . "'";
        $params = array($email);
        $sp = $this->database->pdo_query_one($sql, $params);
        return $sp;
    }
    public function reset_pass($password, $email)
    {
        $sql = "UPDATE customers SET password = ? WHERE email = ?";
        $params = array($password, $email);
        $this->database->pdo_execute($sql, $params);
    }
    public function get_all_user()
    {
        $sql = "SELECT * FROM customers";
        $params = array();
        $result = $this->database->pdo_query($sql, $params);
        return $result;
    }
}

   


