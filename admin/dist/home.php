<?php
$dsdm = $danhmuc->loadall_danhmuc();
if (!isset($_SESSION['mycart']))
  $_SESSION['mycart'] = [];
if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
  $kyw = $_POST['kyw'];
} else {
  $kyw = "";
}

//tìm kiếm sản phẩm

if (isset($_POST['category_id']) && ($_POST['category_id'] > 0)) {
  $category_id = $_POST['category_id'];
} else {
  $category_id = 0;
  $loi = "Không có sản phẩm nào khớp!";
}
$html_dm = $danhmuc->showdm($dsdm);

if (isset($titlepage) && $titlepage != "") {
  $title = $titlepage;
} else {
  $title = "Sản Phẩm";
}

$category_id = isset($_GET['category_id']) ? $_GET['category_id'] : 0;
$dssp = $sanpham->loadall_sanpham($kyw, $category_id);
$sanphamhome = $sanpham->loadall_sanpham_home();
// $page = isset($_GET['page']) ? $_GET['page'] : 1;

$tendm = $sanpham->load_ten_dm($category_id);
?>
<main class="site-main">

  <!--================ Hero banner start =================-->
  <section class="hero-banner">
    <div class="container">
      <div class="row no-gutters align-items-center pt-60px">
        <div class="col-5 d-none d-sm-block">
          <div class="hero-banner__img">
            <img class="img-fluid" src="public/img/home/Leo-hong-go.png" alt="">
          </div>
        </div>
        <div class="col-sm-7 col-lg-6 offset-lg-1 pl-4 pl-md-5 pl-lg-0">
          <div class="hero-banner__content">
            <h4>WINE SHOP</h4>
            <h1>Tìm hiểu rượu vang cho người mới bắt đầu</h1>
            <p>Dù bạn mới biết đến rượu vang hay đang làm việc trong lĩnh vực rượu thì trang web này sẽ cung cấp cho bạn
              nhiều kiến thức rượu vang hữu ích. Hãy cùng bắt đầu nào!</p>
            <a class="button button-hero" href="#">Tìm hiểu ngay</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================ Hero banner start =================-->

  <!--================ Hero Carousel start =================-->
  <section class="section-margin mt-0">
    <div class="owl-carousel owl-theme hero-carousel">
      <div class="hero-carousel__slide">
        <img src="public/img/home/Urban_Grape_1920x1280.webp" width="80%" alt="" class="img-fluid">
        <a href="#" class="hero-carousel__slideOverlay">
          <h3>Rượu vang cao cấp</h3>
          <p>Rượu vang nhập khẩu từ châu âu</p>
        </a>
      </div>
      <div class="hero-carousel__slide">
        <img src="public/img/home/Store+Image+3.jpg" alt="" class="img-fluid" style="height: 333px;">
        <a href="#" class="hero-carousel__slideOverlay">
          <h3>Rượu vang cao cấp</h3>
          <p>Rượu vang nhập khẩu từ châu âu</p>
        </a>
      </div>
      <div class="hero-carousel__slide">
        <img src="public/img/home/CityCenterWines2022-11.jpg" alt="" class="img-fluid" width="80%">
        <a href="#" class="hero-carousel__slideOverlay">
          <h3>Rượu vang cao cấp</h3>
          <p>Rượu vang nhập khẩu từ châu âu</p>
        </a>
      </div>
    </div>
  </section>
  <!--================ Hero Carousel end =================-->

  <!-- ================ trending product section start ================= -->
  <section class="section-margin calc-60px">
    <div class="container">
      <div class="section-intro pb-60px">
        <p>Sản phẩm bán chạy</p>
        <h2>Trending <span class="section-intro__style">Product</span></h2>
      </div>
      <div class="row">
        <?php foreach ($sanphamhome as $index => $sp): ?>
          <?php
          extract($sp);
          $linksp = "index.php?url=single-product&product_id=" . $sp['product_id'];
          $img = '../../public/uploads/images/' . $img;
          $product_id = $sp['product_id'];
          ?>
          <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="card text-center card-product">
              <div class="card-product__img">
                <a href="<?= $linksp ?>">
                  <img class="card-img" src="<?= $img ?>">
                </a>
                <ul class="card-product__imgOverlay">
                  <a href="<?= $linksp ?>">
                    <li><button><i class="ti-search"></i></button></li>
                  </a>
                  <li><button><i class="ti-shopping-cart"></i></button></li>
                  <li><button><i class="ti-heart"></i></button></li>
                </ul>
              </div>
              <div class="card-body">
                <p>
                  <?= $product_name ?>
                </p>
                <h4 class="card-product__title"><a href="<?= $linksp ?>">
                    <?= $product_name ?>
                  </a></h4>
                <p class="card-product__price">
                  <?= number_format($price, 0, '.', '.'); ?><sup>đ</sup>
                </p>
                <form action="index.php?url=addcart" method="post">
                  <!-- nữa làm giỏ hàng -->
                  <input type="hidden" name="cart_id" value="<?= $cart_id ?>">
                  <input type="hidden" name="product_name" value="<?= isset($product_name) ? $product_name : '' ?>">
                  <input type="hidden" name="img" value="<?= isset($img) ? $img : '' ?>">
                  <input type="hidden" name="price" value="<?= isset($price) ? $price : '' ?>">
                  <input type="hidden" name="quantity" value="1">
                  <input type="hidden" name="product_id" value="<?= isset($product_id) ? $product_id : '' ?>">
                  <input class="btn btn-primary add-to-cart-btn" type="submit" name="addcart" value="Thêm vào giỏ hàng">
                </form>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="section-margin calc-60px">
    <div class="container">
      <div class="section-intro pb-60px">
        <p>Phổ biến trên shop</p>
        <h2>Best <span class="section-intro__style">Sellers</span></h2>
      </div>
      <div class="owl-carousel owl-theme" id="bestSellerCarousel">
        <?php foreach ($dssp as $index => $sp): ?>
          <?php
          extract($sp);
          $linksp = "index.php?url=single-product&product_id=" . $sp['product_id'];
          $img = '../../public/uploads/images/' . $img;
          $product_id = $sp['product_id'];
          ?>
          <div class="card text-center card-product">

            <div class="card-product__img">
              <a href="<?= $linksp ?>">
                <img class="card-img" src="<?= $img ?>">
              </a>
              <ul class="card-product__imgOverlay">
                <a href="<?= $linksp ?>">
                  <li><button><i class="ti-search"></i></button></li>
                </a>

                <li><button><i class="ti-shopping-cart"></i></button></li>


                <li><button><i class="ti-heart"></i></button></li>
              </ul>
            </div>
            <div class="card-body">
              <p>
                <?= $product_name ?>
              </p>
              <h4 class="card-product__title"><a href="<?= $linksp ?>">
                  <?= $product_name ?>
                </a></h4>
              <p class="card-product__price">
                <?= number_format($price, 0, '.', '.'); ?><sup>đ</sup>
              </p>
              <form action="index.php?url=addcart" method="post">
                <!-- nữa làm giỏ hàng -->
                <input type="hidden" name="cart_id" value="<?= $cart_id ?>">
                <input type="hidden" name="product_name" value="<?= isset($product_name) ? $product_name : '' ?>">
                <input type="hidden" name="img" value="<?= isset($img) ? $img : '' ?>">
                <input type="hidden" name="price" value="<?= isset($price) ? $price : '' ?>">
                <input type="hidden" name="quantity" value="1">
                <input type="hidden" name="product_id" value="<?= isset($product_id) ? $product_id : '' ?>">
                <input class="btn btn-primary add-to-cart-btn" type="submit" name="addcart" value="Thêm vào giỏ hàng">
              </form>
            </div>
          </div>

        <?php endforeach; ?>


      </div>
    </div>
  </section>
  <!-- ================ Best Selling item  carousel end ================= -->

  <!-- ================ Blog section start ================= -->
  <section class="blog">
    <div class="container">
      <div class="section-intro pb-60px">
        <p>Sản phẩm phổ biến trên shop</p>
        <h2>Latest <span class="section-intro__style">News</span></h2>
      </div>

      <div class="row">
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="card card-blog">
            <div class="card-blog__img">
              <img class="card-img rounded-0" src="public/img/home/Urban_Grape_1920x1280.webp" alt="">
            </div>
            <div class="card-body">
              <ul class="card-blog__info">
                <li><a href="#">Viết bởi</a></li>
                <li><a href="#"><i class="ti-comments-smiley"></i> 2 bình luận</a></li>
              </ul>
              <h4 class="card-blog__title"><a href="single-blog.html">RƯỢU VANG ĐƯỢC TIÊU THỤ Ở THÀNH PHỐ NÀO NHIỀU NHẤT
                  THẾ GIỚI ?</p>
                  <a class="card-blog__link" href="#">Xem thêm <i class="ti-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="card card-blog">
            <div class="card-blog__img">
              <img class="card-img rounded-0" src="public/img/home/Flor_Wine-Wall_Per-Anders-Jorgensen.jpg" alt="">
            </div>
            <div class="card-body">
              <ul class="card-blog__info">
                <li><a href="#">Viết bởi Admin</a></li>
                <li><a href="#"><i class="ti-comments-smiley"></i> 2 bình luận</a></li>
              </ul>
              <h4 class="card-blog__title"><a href="single-blog.html">CÁCH GỌI RƯỢU VANG NHÀ HÀNG DÀNH CHO NHỮNG NGƯỜI
                  KHÔNG SÀNH</p>
                  <a class="card-blog__link" href="#">Xem thêm <i class="ti-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="card card-blog">
            <div class="card-blog__img">
              <img class="card-img rounded-0" src="public/img/home/CityCenterWines2022-11.jpg" alt="">
            </div>
            <div class="card-body">
              <ul class="card-blog__info">
                <li><a href="#">Viết bởi</a></li>
                <li><a href="#"><i class="ti-comments-smiley"></i> 2 bình luận</a></li>
              </ul>
              <h4 class="card-blog__title"><a href="single-blog.html">UỐNG RƯỢU VANG HÀNG NGÀY KHÔNG CÒN LO BỆNH TIM
                  MẠCH NỮA</p>
                  <a class="card-blog__link" href="#">Xem thêm<i class="ti-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ Blog section end ================= -->

  <!-- ================ Subscribe section start ================= -->
  <section class="subscribe-position">
    <div class="container">
      <div class="subscribe text-center">
        <h3 class="subscribe__title">Nhận cập nhật từ mọi nơi</h3>
        <p>Nhận những thông tin mới nhất từ shop</p>
        <div id="mc_embed_signup">
          <form target="_blank"
            action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
            method="get" class="subscribe-form form-inline mt-5 pt-1">
            <div class="form-group ml-sm-auto">
              <input class="form-control mb-1" type="email" name="EMAIL" placeholder="Enter your email"
                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '">
              <div class="info"></div>
            </div>
            <button class="button button-subscribe mr-auto mb-1" type="submit">Đăng ký ngay</button>
            <div style="position: absolute; left: -5000px;">
              <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
            </div>

          </form>
        </div>

      </div>
    </div>
  </section>
  <!-- ================ Subscribe section end ================= -->



</main>


<!--================ Start footer Area  =================-->