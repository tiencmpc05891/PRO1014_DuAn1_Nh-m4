<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$customer_name = $_POST['customer_name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	if (empty ($customer_name) || empty ($email) || empty ($password)) {
		$loi = "Vui lòng điền đầy đủ thông tin!";
	} else {
		$users->insert_nguoidung($customer_name, $email, $password);

		if ($users) {
			$thongbao = "Đăng ký thành công!";
		} else {
			$loi = "Đã xảy ra lỗi khi đăng ký!";
		}
	}
}
?>


<!--================Login Box Area =================-->
<section class="login_box_area section-margin mt-4">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="login_box_img">
					<div class="hover">
						<h4>Bạn có sẵn sàng để tạo một khoản?</h4>
						<p>Có những tiến bộ đang được thực hiện hàng ngày trong khoa học và công nghệ, và một ví dụ điển
							hình về điều này
							là</p>
						<a class="button button-account" href="index.php?url=login">Đăng nhập ngay</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="login_form_inner register_form_inner">
					<h3>Create an account</h3>
					<form class="row login_form" action="" id="register_form" method="post">
						<div class="col-md-12 form-group">
							
							<input type="text" class="form-control" id="name" name="customer_name"
								placeholder="Username" onfocus="this.placeholder = ''"
								onblur="this.placeholder = 'Username'">
						</div>
						<div class="col-md-12 form-group">
							
							<input type="text" class="form-control" id="email" name="email" placeholder="Email Address"
								onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'">
						</div>
						<div class="col-md-12 form-group">
							
							<input type="password" class="form-control" id="password" name="password"
								placeholder="Password" onfocus="this.placeholder = ''"
								onblur="this.placeholder = 'Password'">
						</div>

						<div class="col-md-12 form-group">
							<div class="creat_account">
								<input type="checkbox" id="f-option2" name="selector">
								<label for="f-option2">Nhớ tôi</label>
							</div>
						</div>
						<div class="col-md-12 form-group">
							<button type="submit" value="submit" class="button button-register w-100">Đăng ký</button>
						</div>
						<?php
						if (isset ($thongbao) && $thongbao != "") {
							echo '   <div  class="mb-1 text-success" role="alert">
                    <i  class=" mdi mdi-checkbox-marked-outline mr-1"></i>
                   ' . $thongbao . '
                  </div>';
						}

						if (isset ($loi) && $loi != "") {
							echo '   <div class="mb-1 text-danger" role="alert">
                    <i class=" mdi mdi-close-circle-outline mr-1"></i>
                   ' . $loi . '
                  </div>';
						}
						?>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================End Login Box Area =================-->



<!--================ Start footer Area  =================-->
<footer>
	<div class="footer-area footer-only">
		<div class="container">
			<div class="row section_gap">
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-footer-widget tp_widgets ">
						<h4 class="footer_title large_title">Our Mission</h4>
						<p>
							So seed seed green that winged cattle in. Gathering thing made fly you're no
							divided deep moved us lan Gathering thing us land years living.
						</p>
						<p>
							So seed seed green that winged cattle in. Gathering thing made fly you're no divided deep
							moved
						</p>
					</div>
				</div>
				<div class="offset-lg-1 col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget tp_widgets">
						<h4 class="footer_title">Quick Links</h4>
						<ul class="list">
							<li><a href="#">Home</a></li>
							<li><a href="#">Shop</a></li>
							<li><a href="#">Blog</a></li>
							<li><a href="#">Product</a></li>
							<li><a href="#">Brand</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget instafeed">
						<h4 class="footer_title">Gallery</h4>
						<ul class="list instafeed d-flex flex-wrap">
							<li><img src="img/gallery/r1.jpg" alt=""></li>
							<li><img src="img/gallery/r2.jpg" alt=""></li>
							<li><img src="img/gallery/r3.jpg" alt=""></li>
							<li><img src="img/gallery/r5.jpg" alt=""></li>
							<li><img src="img/gallery/r7.jpg" alt=""></li>
							<li><img src="img/gallery/r8.jpg" alt=""></li>
						</ul>
					</div>
				</div>
				<div class="offset-lg-1 col-lg-3 col-md-6 col-sm-6">
					<div class="single-footer-widget tp_widgets">
						<h4 class="footer_title">Contact Us</h4>
						<div class="ml-40">
							<p class="sm-head">
								<span class="fa fa-location-arrow"></span>
								Head Office
							</p>
							<p>123, Main Street, Your City</p>

							<p class="sm-head">
								<span class="fa fa-phone"></span>
								Phone Number
							</p>
							<p>
								+123 456 7890 <br>
								+123 456 7890
							</p>

							<p class="sm-head">
								<span class="fa fa-envelope"></span>
								Email
							</p>
							<p>
								free@infoexample.com <br>
								www.infoexample.com
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="footer-bottom">
		<div class="container">
			<div class="row d-flex">
				<p class="col-lg-12 footer-text text-center">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Copyright &copy;
					<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is
					made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
						target="_blank">Colorlib</a>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</p>
			</div>
		</div>
	</div>
</footer>
<!--================ End footer Area  =================-->


<script src="vendors/jquery/jquery-3.2.1.min.js"></script>
<script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
<script src="vendors/skrollr.min.js"></script>
<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="vendors/nice-select/jquery.nice-select.min.js"></script>
<script src="vendors/jquery.ajaxchimp.min.js"></script>
<script src="vendors/mail-script.js"></script>
<script src="js/main.js"></script>
</body>

</html>