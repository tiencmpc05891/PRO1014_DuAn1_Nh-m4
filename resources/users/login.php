<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$email = $_POST['email'];
	$password = $_POST['password'];
	$user = $users->sign_in($email);
	if ($user && isset($password, $user['password'])) { 
		unset($user['password']); 
		$_SESSION['user'] = $user; 
		header("Location: index.php");
		exit(); 
	} else {
		$error = "Email hoặc mật khẩu không hợp lệ";
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
						<h4>New to our website?</h4>
						<p>There are advances being made in science and technology everyday, and a good example of this
							is the</p>
						<a class="button button-account" href="register.html">Create an Account</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="login_form_inner">
					<h3>Log in to enter</h3>
					<form class="row login_form" action="index.php?url=login" id="contactForm" method="post">
						<div class="col-md-12 form-group">
							<input type="text" class="form-control" id="email" name="email" placeholder="Email"
								onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" required>
						</div>
						<div class="col-md-12 form-group">
							<input type="password" class="form-control" id="password" name="password"
								placeholder="Password" onfocus="this.placeholder = ''"
								onblur="this.placeholder = 'Password'" required>
						</div>
						<div class="col-md-12 form-group">
							<button type="submit" value="submit" class="button button-login w-100">Log In</button>
						</div>
						<?php if (isset ($error)): ?>
							<div class="col-md-12 form-group">
								<p class="text-danger">
									<?php echo $error; ?>
								</p>
							</div>
						<?php endif; ?>
						<a href="index.php?url=forgotpassword">quên mật khẩu</a>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================End Login Box Area =================-->