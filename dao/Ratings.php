<?php
namespace dao;

use Exception;
use dao\Connect;

class Ratings
{ 
    private $database;

    public function __construct()
    {
        $this->database = new Connect();
    }

    public function insert_rating($product_id, $customer_id, $rating_date, $rating, $review)
    {
        $sql = "INSERT INTO ratings (product_id, customer_id, rating_date, rating, review) VALUES (?,?,?,?,?)";
        $params = array($product_id, $customer_id, $rating_date, $rating, $review);
        $this->database->pdo_execute($sql, $params);
    }
    public function update_rating_date($rating_date)
    {
        $sql = "UPDATE ratings SET rating_date = :rating_date ORDER BY rating_id DESC LIMIT 1";
        $conn = $this->database->pdo_get_connection(); // Lấy kết nối từ lớp Connect
        $stmt = $conn->prepare($sql); // Sử dụng prepare từ PDO
        $stmt->bindParam(':rating_date', $rating_date);
        $stmt->execute();
    }
    public function get_rating($product_id)
    {
        $sql = "SELECT * FROM ratings WHERE product_id = ?";
        $params = array($product_id);
        $result = $this->database->pdo_query($sql, $params);
        return $result;
    }
    public function get_name_by_id($rating_id)
    {
        $sql = "SELECT customer_name FROM customers WHERE customer_id = ?";
        $params = array($rating_id);
        $result = $this->database->pdo_query_one($sql, $params);
        return $result;
    }
    public function calculateRatingStats($all_ratings) {
        $total_reviews = count($all_ratings);
        $total_rating = 0;
        $rating_counts = array(1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0);
    
        foreach ($all_ratings as $rating) {
            $total_rating += $rating['rating'];
            $rating_counts[$rating['rating']]++;
        }
    
        $average_rating = ($total_reviews > 0) ? round($total_rating / $total_reviews, 1) : 0;
    
        return array(
            'total_reviews' => $total_reviews,
            'average_rating' => $average_rating,
            'rating_counts' => $rating_counts
        );
    }
    
}