<?php
if (isset($_SESSION['user']['customer_id'])) {
  $customer_id = $_SESSION['user']['customer_id'];
} else {
  $customer_id = null;
}
$user_info = $users->getone_user($customer_id);
if ($user_info) {
  $customer_name = $user_info['customer_name'];
  $email = $user_info['email'];
  $phone = $user_info['phone'];
  $address = $user_info['address'];
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $customer_name = $_POST['username'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  if (isset($_POST['password']) && !empty($_POST['password'])) {
    $password = $_POST['password'];
  } else {
    $password = null;
  }
  $users->update_user($_SESSION['user']['customer_id'], $customer_name, $email, $phone, $address, $password);
  header("Location: index.php?url=profile");
  exit();
}
?>
<section class="vh-100" style="background-color: #f4f5f7;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-6 mb-4 mb-lg-0">
        <div class="card mb-3" style="border-radius: .5rem;">
          <div class="row g-0">
            <div class="col-md-12 gradient-custom text-center text-white rounded-0"
              style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
              <img src="public/img/5e67fa0bcd0230fb933e9c7a6169e953.jpg" alt="Avatar"
                class="img-fluid my-5 rounded-circle" style="width: 80px;" />


              <label for="avatar-upload" class="far fa-edit "></label>
              <input type="file" class="d-none" id="avatar-upload">
            </div>
            <div class="col-md-12">
              <div class="card-body p-4">
                <h6>Chỉnh sửa thông tin</h6>
                <hr class="mt-0 mb-4">
                <form method="POST" action="">
                  <div class="mb-3">
                    <label for="username" class="form-label">Tên người dùng</label>
                    <input type="text" class="form-control" id="username" name="username"
                      value="<?php echo $customer_name; ?>">
                  </div>
                  <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>">
                  </div>
                  <div class="mb-3">
                    <label for="phone" class="form-label">Số điện thoại</label>
                    <input type="tel" class="form-control" id="phone" name="phone" value="<?php echo $phone; ?>">
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="city" class="form-label">Thành phố</label>
                      <input type="text" class="form-control" id="city" name="address" value="<?php echo $address; ?>">
                    </div>

                  </div>
                  <button type="submit" class="btn btn-primary">Lưu</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>