<?php
namespace dao;

use PDO;

class Connect
{


    // Connection CSDL
    public function pdo_get_connection()
    {
        $servername = 'localhost';
        $dbname = 'wineshop';
        $username = 'root';
        $password = 'mysql';
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }

    public function pdo_execute($sql, $params)
    {
        try {
            $conn = $this->pdo_get_connection();
            $stmt = $conn->prepare($sql);
            $stmt->execute($params); // Truyền danh sách tham số vào execute()
        } catch (\PDOException $e) {
            throw $e;
        } finally {
            unset($conn);
        }
    }


    public function pdo_query($sql, $params = [])
    {
        try {
            $conn = $this->pdo_get_connection();
            $stmt = $conn->prepare($sql);
            $stmt->execute($params); // Thay đổi ở đây
            $rows = $stmt->fetchAll();
            return $rows;
        } catch (\PDOException $e) {
            throw $e;
        } finally {
            unset($conn);
        }
    }


    public function pdo_query_one($sql, $params = [])
    {
        try {
            $conn = $this->pdo_get_connection();
            $stmt = $conn->prepare($sql);
            $stmt->execute($params);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            return $row;
        } catch (\PDOException $e) {
            throw $e;
        } finally {
            unset($conn);
        }
    }

    public function pdo_query_value($sql, $params = [])
    {
        try {
            $conn = $this->pdo_get_connection();
            $stmt = $conn->prepare($sql);
            $stmt->execute($params);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            return array_values($row)[0];
        } catch (\PDOException $e) {
            $e;
        } finally {
            unset($conn);
        }
    }
}
