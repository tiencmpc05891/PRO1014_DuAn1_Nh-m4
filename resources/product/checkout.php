<!-- ================ start banner area ================= -->
<section class="blog-banner-area" id="category">
    <div class="container h-100">
        <div class="blog-banner">
            <div class="text-center">
                <h1>Thanh toán</h1>
                <nav aria-label="breadcrumb" class="banner-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Thanh toán</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- ================ end banner area ================= -->


<!--================Checkout Area =================-->
<section class="checkout_area section-margin--small">
    <div class="container">

        <div class="cupon_area">
            <div class="check_title">
                <h2>Nhập mã giảm giá của bạn </h2>
            </div>
            <input type="text" placeholder="Nhập mã giảm giá">
            <a class="button button-coupon" href="#">Xác nhận</a>
        </div>
        <div class="billing_details">
            <div class="row">
                <div class="col-lg-8">
                    <form action="index.php?url=confirmation" method="POST">

                        <h3>Chi tiết thanh toán</h3>
                        <?php
                        if (isset($_SESSION['user'])) {
                            extract($_SESSION['user']);
                            $fullname = $_SESSION['user']['fullname'];
                            $address = $_SESSION['user']['address'];
                            $email = $_SESSION['user']['email'];
                            $phone = $_SESSION['user']['phone'];
                            // $customer_id = $_SESSION['user']['customer_id'];
                        } else {
                            $fullname = "";
                            $address = "";
                            $email = "";
                            $phone = "";
                            $user = "";
                            // $customer_id = "";
                        }
                        ?>

                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" id="fullname" name="fullname"
                                value="<?= $fullname ?>">
                            <span class="placeholder"></span>
                        </div>


                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" id="phone" name="phone" value="<?= $phone ?>">
                            <span class="placeholder" data-placeholder="Số điện thoại"></span>
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" id="email" name="email" value="<?= $email ?>">
                            <span class="placeholder" data-placeholder=" Địa chỉ Email "></span>
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" id="address" name="address" value="<?= $address ?>">
                            <span class="placeholder"></span>
                        </div>
                       

                </div>
                <div class="col-lg-4">



                    <?php
                    // Kiểm tra xem giỏ hàng có sản phẩm hay không
                    if (sizeof($_SESSION['mycart']) > 0) {
                        $cart->showcart(0, true);

                    } else {
                        // Nếu không có sản phẩm trong giỏ hàng, hiển thị thông báo
                        echo '<div class="alert alert-warning" role="alert">Giỏ hàng của bạn đang trống. Vui lòng thêm sản phẩm vào giỏ hàng trước khi thanh toán.</div>';
                    }
                    ?>


                </div>
            </div>
            </form>
        </div>
    </div>
    </div>
</section>
<!--================End Checkout Area =================-->