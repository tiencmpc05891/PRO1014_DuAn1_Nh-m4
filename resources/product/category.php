<!-- file category sản phẩm -->
<?php
$dsdm = $danhmuc->loadall_danhmuc();
if (!isset ($_SESSION['mycart']))
  $_SESSION['mycart'] = [];
if (isset ($_POST['kyw']) && ($_POST['kyw'] != "")) {
  $kyw = $_POST['kyw'];
} else {
  $kyw = "";
}

//tìm kiếm sản phẩm

if (isset ($_POST['category_id']) && ($_POST['category_id'] > 0)) {
  $category_id = $_POST['category_id'];
} else {
  $category_id = 0;
  $loi = "Không có sản phẩm nào khớp!";
}
$html_dm = $danhmuc->showdm($dsdm);

if (isset ($titlepage) && $titlepage != "") {
  $title = $titlepage;
} else {
  $title = "Sản Phẩm";
}

$category_id = isset ($_GET['category_id']) ? $_GET['category_id'] : 0;
$dssp = $sanpham->loadall_sanpham($kyw, $category_id);

// $page = isset($_GET['page']) ? $_GET['page'] : 1;

$tendm = $sanpham->load_ten_dm($category_id);
?>


<!-- ================ start banner area ================= -->
<section class="blog-banner-area" id="category">
  <div class="container h-100">
    <div class="blog-banner">
      <div class="text-center">
        <h1>Sản phẩm</h1>
        <nav aria-label="breadcrumb" class="banner-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page">Sản phẩm</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>
<!-- ================ end banner area ================= -->


<!-- ================ category section start ================= -->
<section class="section-margin--small mb-5">
  <div class="container">
    <div class="row">
      <div class="col-xl-3 col-lg-4 col-md-5">
        <div class="sidebar-categories">
          <div class="head">
            Duyệt danh mục</div>
          <ul class="main-categories">

            <li class="common-filter">
              <?php foreach ($dsdm as $dm): ?>
                <div class="mb-2">
                  <a class="text-dark text-decoration-none d-block py-2 px-3"
                    href="index.php?url=category&category_id=<?php echo $dm['category_id']; ?>">
                    <?php echo $dm['category_name']; ?>
                  </a>
                </div>
              <?php endforeach; ?>
            </li>
          </ul>
        </div>
        <div class="sidebar-filter">
          <div class="top-filter-head">Bộ lọc sản phẩm</div>
          <div class="common-filter">
            <div class="head">Thương hiệu</div>
            <form action="#">
              <ul>
                <li class="filter-list"><input class="pixel-radio" type="radio" id="apple" name="brand"><label
                    for="apple">Bodegas Verduguez<span>(29)</span></label></li>
                <li class="filter-list"><input class="pixel-radio" type="radio" id="asus" name="brand"><label
                    for="asus">Concha y toro<span>(29)</span></label></li>
                <li class="filter-list"><input class="pixel-radio" type="radio" id="gionee" name="brand"><label
                    for="gionee">Valdivieso<span>(19)</span></label></li>
                <li class="filter-list"><input class="pixel-radio" type="radio" id="micromax" name="brand"><label
                    for="micromax">Collefrisio <span>(19)</span></label></li>
                <li class="filter-list"><input class="pixel-radio" type="radio" id="samsung" name="brand"><label
                    for="samsung">San Marzano<span>(19)</span></label></li>
              </ul>
            </form>
          </div>

          <div class="common-filter">
            <div class="head">Giá</div>
            <div class="price-range-area">
              <div id="price-range"></div>
              <div class="value-wrapper d-flex">
                <div class="price">Giá:</div>
                <span>đ</span>
                <div id="lower-value"></div>
                <div class="to">đến</div>
                <span>đ</span>
                <div id="upper-value"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-9 col-lg-8 col-md-7">
        <!-- Start Filter Bar -->
        <div class="filter-bar d-flex flex-wrap align-items-center">
          <div class="sorting">
            <select>
              <option value="1">Mặc định phân loại</option>
              <option value="1">Mặc định phân loại</option>
              <option value="1">Mặc định phân loại</option>
            </select>
          </div>
          <div class="sorting mr-auto">
            <select>
              <option value="1">Show 12</option>
              <option value="1">Show 12</option>
              <option value="1">Show 12</option>
            </select>
          </div>
          <div>
            <div class="input-group filter-bar-search">
              <input type="text" placeholder="Search">
              <div class="input-group-append">
                <button type="button"><i class="ti-search"></i></button>
              </div>
            </div>
          </div>
        </div>
        <!-- End Filter Bar -->
        <!-- Start Best Seller -->
        <section class="lattest-product-area pb-40 category-list">
          <div class="container">
            <div class="row">
              <?php foreach ($dssp as $index => $sp): ?>
                <?php
                extract($sp);
                $linksp = "index.php?url=single-product&product_id=" . $sp['product_id'];
                $img = '../../../public/uploads/images/' . $img;
                $product_id = $sp['product_id'];
                ?>
                <div class="col-md-6 col-lg-4">
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
                      <form action="index.php?act=addtocart" method="post">
                        <!-- nữa làm giỏ hàng -->
                        <!-- <input type="hidden" name="magiohang" value="<?= $magiohang ?>">
                        <input type="hidden" name="tensanpham" value="<?= isset ($tensanpham) ? $tensanpham : '' ?>">
                        <input type="hidden" name="img" value="<?= isset ($img) ? $img : '' ?>">
                        <input type="hidden" name="gia" value="<?= isset ($gia) ? $gia : '' ?>">
                        <input type="hidden" name="soluong" value="1">
                        <input type="hidden" name="product_id" value="<?= isset ($product_id) ? $product_id : '' ?>"> -->
                        <input class="btn btn-primary add-to-cart-btn" type="submit" name="addtocart"
                          value="Thêm vào giỏ hàng">
                      </form>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </section>

      </div>
    </div>





  </div>

  <!-- End Best Seller -->
  </div>
  </div>
  </div>
</section>
<!-- ================ category section end ================= -->

<!-- ================ top product area start ================= -->
<section class="related-product-area">
  <div class="container">
    <div class="section-intro pb-60px">
      <p>Phổ biến trên shop</p>
      <h2>Top <span class="section-intro__style">Sản phẩm</span></h2>
    </div>
    <div class="row mt-30">
      <div class="col-sm-6 col-xl-3 mb-4 mb-xl-0">
        <div class="single-search-product-wrapper">
          <div class="single-search-product d-flex">
            <a href="#"><img src="public/img/product/product2/ro.webp" alt=""></a>
            <div class="desc">
              <a href="#" class="title">Rượu vang đỏ</a>
              <div class="price">999.000đ</div>
            </div>
          </div>
          <div class="single-search-product d-flex">
            <a href="#"><img src="public/img/product/product2/ro.webp" alt=""></a>
            <div class="desc">
              <a href="#" class="title">Rượu vang đỏ</a>
              <div class="price">999.000đ</div>
            </div>
          </div>
          <div class="single-search-product d-flex">
            <a href="#"><img src="public/img/product/product2/ro.webp" alt=""></a>
            <div class="desc">
              <a href="#" class="title">Rượu vang đỏ</a>
              <div class="price">999.000đ</div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-xl-3 mb-4 mb-xl-0">
        <div class="single-search-product-wrapper">
          <div class="single-search-product d-flex">
            <a href="#"><img src="public/img/product/product2/ro.webp" alt=""></a>
            <div class="desc">
              <a href="#" class="title">Rượu vang đỏ</a>
              <div class="price">999.000đ</div>
            </div>
          </div>
          <div class="single-search-product d-flex">
            <a href="#"><img src="public/img/product/product2/ro.webp" alt=""></a>
            <div class="desc">
              <a href="#" class="title">Rượu vang đỏ</a>
              <div class="price">999.000đ</div>
            </div>
          </div>
          <div class="single-search-product d-flex">
            <a href="#"><img src="public/img/product/product2/ro.webp" alt=""></a>
            <div class="desc">
              <a href="#" class="title">Rượu vang đỏ</a>
              <div class="price">999.000đ</div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-xl-3 mb-4 mb-xl-0">
        <div class="single-search-product-wrapper">
          <div class="single-search-product d-flex">
            <a href="#"><img src="public/img/product/product2/ro.webp" alt=""></a>
            <div class="desc">
              <a href="#" class="title">Rượu vang đỏ</a>
              <div class="price">999.000đ</div>
            </div>
          </div>
          <div class="single-search-product d-flex">
            <a href="#"><img src="public/img/product/product2/ro.webp" alt=""></a>
            <div class="desc">
              <a href="#" class="title">Rượu vang đỏ</a>
              <div class="price">999.000đ</div>
            </div>
          </div>
          <div class="single-search-product d-flex">
            <a href="#"><img src="public/img/product/product2/ro.webp" alt=""></a>
            <div class="desc">
              <a href="#" class="title">Rượu vang đỏ</a>
              <div class="price">999.000đ</div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-xl-3 mb-4 mb-xl-0">
        <div class="single-search-product-wrapper">
          <div class="single-search-product d-flex">
            <a href="#"><img src="public/img/product/product2/ro.webp" alt=""></a>
            <div class="desc">
              <a href="#" class="title">Rượu vang đỏ</a>
              <div class="price">999.000đ</div>
            </div>
          </div>
          <div class="single-search-product d-flex">
            <a href="#"><img src="public/img/product/product2/ro.webp" alt=""></a>
            <div class="desc">
              <a href="#" class="title">Rượu vang đỏ</a>
              <div class="price">999.000đ</div>
            </div>
          </div>
          <div class="single-search-product d-flex">
            <a href="#"><img src="public/img/product/product2/ro.webp" alt=""></a>
            <div class="desc">
              <a href="#" class="title">Rượu vang đỏ</a>
              <div class="price">999.000đ</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ================ top product area end ================= -->

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