<?php
// Kiểm tra xem người dùng đã đăng nhập hay chưa
if (!isset($_SESSION['user'])) {
  header("Location: index.php?url=login");
  exit();
}

// Lấy thông tin người dùng từ session
$user = $_SESSION['user'];

// Kiểm tra xem có tham số customer_id trên URL không
if (isset($_GET['customer_id'])) {
  $customer_id = $_GET['customer_id'];
} else {
  // Nếu không có tham số customer_id, sử dụng customer_id từ session
  $customer_id = $user['customer_id'];
}

// Lấy thông tin người dùng từ cơ sở dữ liệu
$user_info = $users->getone_user($customer_id);

// Kiểm tra xem có thông tin người dùng hay không
if ($user_info) {
  // Gán thông tin người dùng từ cơ sở dữ liệu vào biến $user để hiển thị trên trang
  $user = $user_info;
}
?>

<section class="vh-100" style="background-color: #f4f5f7;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-6 mb-4 mb-lg-0">
        <div class="card mb-3" style="border-radius: .5rem;">
          <div class="row g-0">
            <div class="col-md-4 gradient-custom text-center text-white"
              style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
              <img src="public/img/5e67fa0bcd0230fb933e9c7a6169e953.jpg" alt="Avatar"
                class="img-fluid my-5 rounded-circle" style="width: 80px;" />
              <h5>
                <?php echo $user['customer_name']; ?>
              </h5>

              <a class="far fa-edit mb-5"
                href="index.php?url=editprofile&customer_id=<?php echo $user['customer_id']; ?>"></a>
            </div>
            <div class="col-md-8">
              <div class="card-body p-4">
                <h6>Thông tin</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-8 mb-3">
                    <h6>Email</h6>
                    <p class="text-muted">
                      <?php echo $user['email']; ?>
                    </p>
                  </div>
                  <div class="col-4 mb-3">
                    <h6>Địa chỉ</h6>
                    <p class="text-muted"><?php echo $user['address']; ?>
             
                    </p>
                  </div>
                </div>
                <h6>Số điện thoại</h6>
                 <?php echo $user['phone']; ?>
                <hr class="mt-0 mb-4">
                
                <div class="d-flex justify-content-start">
                  <a href="#!"><i class="fab fa-facebook-f fa-lg me-5"></i></a>
                  &nbsp; &nbsp;
                  <a href="#!"><i class="fab fa-twitter fa-lg me-5"></i></a>
                  &nbsp; &nbsp;
                  <a href="#!"><i class="fab fa-instagram fa-lg"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
