<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $error = array();
    if (isset ($_SESSION['code']) && isset ($_POST['code']) && $_POST['code'] != $_SESSION['code']) {
        $error['fail'] = 'Mã xác nhận không hợp lệ!';
    } else {
        header('location: index.php?url=resetpassword');
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
                    <h3>Nhập code</h3>
                    <form class="row login_form" action="index.php?url=verifycation" id="contactForm" method="post">
                        <div class="col-md-12 form-group">
                            <label for="">Nhập code</label>
                            <input type="text" class="form-control" id="" name="code" placeholder="Nhập code"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = ''" required>
                        </div>
                        <?php if (isset ($error['fail'])): ?>
                            <div class="alert alert-primary" role="alert">
                                <?= $error['fail'] ?>
                            </div>
                        <?php elseif (isset ($error['success'])): ?>
                            <div class="alert alert-primary" role="alert">
                                <?= $error['success'] ?>
                            </div>
                        <?php else: ?>

                        <?php endif; ?>
                        <div class="col-md-12 form-group">
                            <button type="submit" value="submit" class="button button-login w-100">Gửi</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>