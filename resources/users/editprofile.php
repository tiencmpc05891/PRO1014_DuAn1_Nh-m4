<?php



// Kiểm tra nếu có customer_id trên URL
if (isset($_GET['customer_id'])) {
  $customer_id = $_GET['customer_id'];
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

  
    // Cập nhật thông tin người dùng
    $users->update_user($customer_id, $customer_name, $email, $phone, $address, $password);

  
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
                <form id="updateForm" method="POST" action="">
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function () {
  $('#updateForm').submit(function (e) {
    e.preventDefault(); // Ngăn chặn gửi biểu mẫu mặc định
    var form = $(this);
    var url = form.attr('action');
    var username = $('#username').val();
    var email = $('#email').val();
    var phone = $('#phone').val();
    var address = $('#city').val();
    var errorMessages = []; // Mảng để lưu trữ thông báo lỗi

    // Kiểm tra trường Tên người dùng
    if (username.trim() === '') {
      errorMessages.push('Vui lòng nhập Tên người dùng.');
    }

    // Kiểm tra trường Email
    if (email.trim() === '') {
      errorMessages.push('Vui lòng nhập Email.');
    }

    // Kiểm tra trường Số điện thoại
    if (phone.trim() === '') {
      errorMessages.push('Vui lòng nhập Số điện thoại.');
    }

    // Kiểm tra trường Thành phố
    if (address.trim() === '') {
      errorMessages.push('Vui lòng nhập Thành phố.');
    }

    // Nếu có lỗi, hiển thị thông báo và không gửi biểu mẫu
    if (errorMessages.length > 0) {
      var errorMessageString = errorMessages.join('\n'); // Chuyển mảng lỗi thành chuỗi để hiển thị
      alert(errorMessageString);
      return;
    }

    // Nếu không có lỗi, gửi dữ liệu biểu mẫu
    $.ajax({
      type: 'POST',
      url: url,
      data: form.serialize(), // Chuyển đổi dữ liệu biểu mẫu thành chuỗi
      success: function (response) {
        // Hiển thị thông báo thành công
        alert('Cập nhật thông tin thành công!');
        // Chuyển hướng người dùng đến trang index.php sau khi cập nhật thành công
        window.location.href = 'index.php?url=profile';
      },
      error: function (xhr, status, error) {
        // Hiển thị thông báo lỗi
        alert('Đã xảy ra lỗi: ' + error);
      }
    });
  });
});

</script>