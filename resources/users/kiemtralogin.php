<?php
// Kiểm tra xem người dùng đã đăng nhập chưa
session_start();
if (isset($_SESSION['username'])) {
    // Nếu đã đăng nhập, chuyển hướng đến trang chính
    header('Location: home.php');
    exit();
}

// Kiểm tra xem người dùng đã nhập thông tin đăng nhập chưa
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy thông tin đăng nhập từ biểu mẫu
    $username = $_POST['Username'];
    $password = $_POST['Password'];

    // Kiểm tra thông tin đăng nhập
    if ($username === 'admin' && $password === 'password') {
        // Nếu thông tin đăng nhập hợp lệ, lưu trạng thái đăng nhập vào session
        $_SESSION['username'] = $username;
        // Chuyển hướng đến trang chính
        header('Location: home.php');
        exit();
    } else {
        // Nếu thông tin đăng nhập không hợp lệ, hiển thị thông báo lỗi
        echo "Invalid username or password!";
    }
}
?>
