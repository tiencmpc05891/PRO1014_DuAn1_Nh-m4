<?php
//  Kết nối đến cơ sở dữ liệu MySQL
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "your_database";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Xử lý dữ liệu từ biểu mẫu và cập nhật thông tin người dùng
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $district = $_POST['district'];

// Cập nhật thông tin người dùng vào cơ sở dữ liệu
    $sql = "UPDATE users SET username='$username', email='$email', phone='$phone', city='$city', district='$district' WHERE user_id=1"; 
    if ($conn->query($sql) === TRUE) {
        echo "Thông tin đã được cập nhật thành công";
    } else {
        echo "Lỗi khi cập nhật thông tin: " . $conn->error;
    }
}
$conn->close();
?>
