<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $error = array();

    if ($_POST['repass'] != $_POST['newpass']) {
        $error['fail'] = 'Nhập mật khẩu không khớp!';
    } else {
        $error['success'] = 'Đổi mật khẩu thành công';
        $users->reset_pass($_POST['newpass'], $_SESSION['mail']);
        header('location: index.php?url=login');
    }
}
?>
<section class="login_box_area section-margin mt-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="login_box_img">
                    <div class="hover">
                        <h4>Mới vào trang web của chúng tôi?</h4>
                        <p>Có những tiến bộ đang được thực hiện hàng ngày trong khoa học và công nghệ, và một ví dụ điển
                            hình về điều này
                            là</p>
                        <a class="button button-account" href="index.php?url=register">Tạo tài khoản</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="login_form_inner">
                    <h3>Đổi mật khẩu</h3>
                    <form class="row login_form" action="" id="contactForm" method="post">
                        <div class="col-md-12 form-group">
                            <label for="">Nhập mật khẩu mới</label>
                            <input type="password" class="form-control" id="" name="newpass"
                                placeholder="Nhập mật khẩu mới" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = ''" value="<?php if (isset ($_POST['newpass']))
                                    echo $_POST['newpass'] ?>" required>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="">Nhập lại mật khẩu mới</label>
                                <input type="password" class="form-control" id="" name="repass"
                                    placeholder="Nhập lại mật khẩu mới" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = ''" value="<?php if (isset ($_POST['repass']))
                                    echo $_POST['repass'] ?>" required>
                            </div>

                            <div class="col-md-12 form-group">
                                <button type="submit" value="submit" class="button button-login w-100">Gửi</button>
                            </div>



                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>