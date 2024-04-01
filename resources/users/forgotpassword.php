<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $error = array();
    $email = $_POST['email'];
    if ($email == '') {
        $error['email'] = 'Không được để trống';
    }
    if (empty ($error)) {
        $users->checkemail($email);
        $code = substr(rand(0, 999999), 0, 6);
        $title = "Forgot Password";
        $content = "Mã xác nhận của bạn là: <span style='color:green'>" . $code . "<span>";
        $mail->sendMail($title, $content, $email);
        $_SESSION['mail'] = $email;
        $_SESSION['code'] = $code;
        header('location: index.php?url=verifycation');
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
                    <h3>Quên mật khẩu</h3>
                    <form class="row login_form" action="index.php?url=forgotpassword" id="contactForm" method="post">
                        <div class="col-md-12 form-group">
                            <label for="">Nhập email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Nhập email"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" required>
                        </div>
                        <span class="error-message">
                            <?php if (isset ($error['email']))
                                echo $error['email'] ?>
                            </span>
                            <div class="col-md-12 form-group">
                                <button type="submit" value="submit" class="button button-login w-100">Gửi</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>