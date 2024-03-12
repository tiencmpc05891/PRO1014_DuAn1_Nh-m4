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
                    <h3>Chi tiết thanh toán</h3>
                    <form class="row contact_form" action="#" method="post" novalidate="novalidate">
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" id="first" name="name" placeholder="Họ">
                            <span class="placeholder" data-placeholder="Họ"></span>
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" id="last" name="name" placeholder="Tên">
                            <span class="placeholder" data-placeholder="Tên"></span>
                        </div>

                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" id="number" name="number"
                                placeholder="Số điện thoại">
                            <span class="placeholder" data-placeholder="Số điện thoại"></span>
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" id="email" name="compemailany"
                                placeholder=" Địa chỉ Email ">
                            <span class="placeholder" data-placeholder=" Địa chỉ Email "></span>
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <select class="country_select">
                                <option value="1">Country</option>
                                <option value="2">Country</option>
                                <option value="4">Country</option>
                            </select>
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" id="add1" name="add1" placeholder="Địa chỉ">
                            <span class="placeholder" data-placeholder="Địa chỉ"></span>
                        </div>
                        <div class="col-md-12 form-group mb-0">
                            <div class="creat_account">
                                <h3>Chi tiết vận chuyển</h3>
                                <input type="checkbox" id="f-option3" name="selector">
                                <label for="f-option3">Giao đến địa chỉ khác?</label>
                            </div>
                            <textarea class="form-control" name="message" id="message" rows="1"
                                placeholder="Ghi chú"></textarea>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="order_box">
                        <h2>Your Order</h2>
                        <ul class="list">
                            <li><a href="#">
                                    <h4>Sản phẩm <span>Tổng cộng</span></h4>
                                </a></li>
                            <li><a href="#">Rượu vang đỏ <span class="middle">x 01</span> <span
                                        class="last">999,000đ</span></a></li>

                        </ul>
                        <ul class="list list_2">
                            <li><a href="#">Tổng phụ <span>999,000đ</span></a></li>
                            <li><a href="#">Phí ship <span>0đ</span></a></li>
                            <li><a href="#">Tổng cộng <span>999,000đ</span></a></li>
                        </ul>
                        <div class="payment_item">
                            <div class="radion_btn">
                                <input type="radio" id="f-option5" name="selector">
                                <label for="f-option5">Thanh toán khi nhận hàng</label>
                                <div class="check"></div>
                            </div>

                        </div>
                        <div class="payment_item active">
                            <div class="radion_btn">
                                <input type="radio" id="f-option6" name="selector">
                                <label for="f-option6">VNPAY </label>
                                <img src="" width="50px" alt="">
                                <div class="check"></div>
                            </div>
                            <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal
                                account.</p>
                        </div>
                        <div class="creat_account">
                            <input type="checkbox" id="f-option4" name="selector">
                            <label for="f-option4">Tôi đã đọc và chấp nhận </label>
                            <a href="#">điều khoản & điều kiện*</a>
                        </div>
                        <div class="text-center">
                            <a class="button button-paypal" href="#">Tiếp tục thanh toán</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Checkout Area =================-->