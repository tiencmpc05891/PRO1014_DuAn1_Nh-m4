<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Wine Shop </title>
  <link rel="icon" href="public/img/home/logo-no-background.png" type="png">
  <link rel="stylesheet" href="./public/vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="./public/vendors/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="./public/vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="./public/vendors/nice-select/nice-select.css">
  <link rel="stylesheet" href="./public/vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="./public/vendors/owl-carousel/owl.carousel.min.css">

  <link rel="stylesheet" href="./public/css/style.css">
  <link rel="stylesheet" href="./public/css/css.css">
</head>

<body>
  <!--================ Start Header Menu Area =================-->
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a class="navbar-brand logo_h" href="index.php?url=home"><img src="public/img/home/logo-no-background.png"
              style="width: 70px;" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
              <li class="nav-item active"><a class="nav-link" href="index.php?url=home">Trang chủ </a></li>
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Sản phẩm</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="index.php?url=category">Sản phẩm</a></li>

                  <li class="nav-item"><a class="nav-link" href="index.php?url=checkout">Product Checkout</a></li>
                  <li class="nav-item"><a class="nav-link" href="index.php?url=confirmation">Confirmation</a></li>
                  <li class="nav-item"><a class="nav-link" href="index.php?url=cart">Shopping Cart</a></li>
                </ul>
              </li>
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Blog</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="index.php?url=blog">Bài viết</a></li>
                  <li class="nav-item"><a class="nav-link" href="index.php?url=single-blog">Blog Details</a></li>
                </ul>
              </li>
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Trang</a>
                <ul class="dropdown-menu">
                  <li class="nav-item" id="loginNavItem"><a class="nav-link" href="index.php?url=login"
                      id="loginLink">Đăng nhập</a></li>
                  <li class="nav-item" id="registerNavItem"><a class="nav-link" href="index.php?url=register"
                      id="registerLink">Đăng ký</a></li>
                  <li class="nav-item"><a class="nav-link" href="index.php?url=profile">Hồ sơ</a></li>
                  <li class="nav-item"><a class="nav-link" href="index.php?url=mybill">Đơn hàng của tôi</a></li>
                  <li class="nav-item"><a class="nav-link" href="index.php?url=logout">Đăng xuất</a></li>
                </ul>
              </li>
              <li class="nav-item"><a class="nav-link" href="index.php?url=contact">Liên hệ</a></li>
              <?php
              // Kiểm tra nếu người dùng đã đăng nhập và có vai trò là admin
              if (isset($_SESSION['admin_id']) && $_SESSION['admin_id'] !== "") {
                echo '<li class="nav-item"><a class="nav-link" href="../admin/index.php">Đăng nhập Admin</a></li>';
              }
              ?>
            </ul>

            <ul class="nav-shop">
              <li class="nav-item"><button><i class="ti-search"></i></button></li>
              <a href="index.php?url=cart">
                <li class="nav-item"><button><i class="ti-shopping-cart"></i><span
                      class="nav-shop__circle">3</span></button> </li>
              </a>

              <li class="nav-item"><a class="button button-header" href="#">Mua ngay</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <script>
    var isLoggedIn = <?php echo isset($_SESSION['user']) ? 'true' : 'false'; ?>;
    var loginNavItem = document.getElementById("loginNavItem");
    var registerNavItem = document.getElementById("registerNavItem");

    if (isLoggedIn) {
      loginNavItem.style.display = "none";
      registerNavItem.style.display = "none";
    }
  </script>