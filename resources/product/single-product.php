<!-- file single-product -->

<?php
if (isset ($_GET['product_id']) && ($_GET['product_id'] > 0)) {
	$product_id = $_GET['product_id'];
	$onesp = $sanpham->loadone_sanpham($product_id);
	extract($onesp);
	$sp_cung_loai = $sanpham->load_sanpham_cungloai($product_id, $category_id);
}

if (isset ($titlepage) && $titlepage != "") {
	$title = $titlepage;
} else {
	$title = "Sản Phẩm";
}

$category_id = isset ($_GET['category_id']) ? $_GET['category_id'] : 1;
$dssp = $sanpham->loadall_sanpham("", $category_id);


?>

<!-- ================ start banner area ================= -->
<section class="blog-banner-area" id="blog">
	<div class="container h-100">
		<div class="blog-banner">
			<div class="text-center">
				<h1>Chi tiết sản phẩm</h1>
				<nav aria-label="breadcrumb" class="banner-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#"> Trang chủ</a></li>
						<li class="breadcrumb-item active" aria-current="page">Chi tiết sản phẩm</li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
</section>
<!-- ================ end banner area ================= -->


<!--================Single Product Area =================-->
<div class="product_image_area">
	<div class="container">
		<div class="row s_product_inner">
			<div class="col-lg-6">
				<div class="owl-carousel owl-theme s_Product_carousel">
					<?php
					extract($onesp);
					$img = '../../../public/uploads/images/' . $img;

					?>
					<div class="single-prd-item">
						<img class="img-fluid" src="<?= $img ?>" alt="">
					</div>

				</div>
			</div>
			<div class="col-lg-5 offset-lg-1">
				<div class="s_product_text">
					<h3>
						<?= $product_name ?>
					</h3>
					<h2>
						<?= number_format($price, 0, '.', '.'); ?><sup>đ</sup>
					</h2>
					<ul class="list">
						<li><a class="active" href="#"><span>Loại</span> : Rượu vang đỏ</a></li>
						<li><a href="#"><span>Tình trạng</span> : còn hàng</a></li>
					</ul>
					<p>
						<?= $description ?>


						.
					</p>
					<div class="product_count">
						<label for="qty">Số lượng:</label>
						<button onclick="" class="increase items-count" type="button"><i
								class="ti-angle-left"></i></button>
						<input type="text" name="qty" id="sst" size="2" maxlength="12" value="1" title="Quantity:"
							class="input-text qty">
						<button onclick="" class="reduced items-count" type="button"><i
								class="ti-angle-right"></i></button>
						<a class="button primary-btn" href="#">Thêm vào giỏ hàng</a>
					</div>
					<div class="card_area d-flex align-items-center">
						<a class="icon_btn" href="#"><i class="lnr lnr lnr-diamond"></i></a>
						<a class="icon_btn" href="#"><i class="lnr lnr lnr-heart"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--================End Single Product Area =================-->

<!--================Product Description Area =================-->
<section class="product_description_area">
	<div class="container">
		<ul class="nav nav-tabs" id="myTab" role="tablist">
			<li class="nav-item">
				<a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
					aria-selected="true">Mô tả</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
					aria-controls="profile" aria-selected="false">Chi tiết</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
					aria-controls="contact" aria-selected="false">Bình luận</a>
			</li>

			<li class="nav-item">
				<a class="nav-link active" id="review-tab" data-toggle="tab" href="#review" role="tab"
					aria-controls="review" aria-selected="false">Reviews</a>
			</li>
		</ul>
		<div class="tab-content" id="myTabContent">
			<div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
				<h4>1.Giới thiệu về rượu vang Tuscany - Vùng đất lịch sử và văn hóa:</h4>
				<p>

					Việc tạo ra rượu vang ở Tuscany bắt nguồn từ nền văn minh Etruscan, những người có tay nghề cao
					trong nghệ thuật trồng nho và trồng những vườn nho khắp vùng.
					Theo thời gian, việc sản xuất rượu vang ở Tuscany đã phát triển và các giống nho mới đã được giới
					thiệu, bao gồm cả Sangaguese, loại nho này đã trở thành loại nho quan trọng nhất trong vùng. Sản
					xuất rượu vang tiếp tục phát triển mạnh trong thời kỳ Phục hưng, nhưng đã bị tàn phá bởi phylloxera
					trong thế kỷ 18 và 19.
				</p>
				<p>

					Vào thế kỷ 20, thời kỳ phục hưng của rượu vang Tuscan bắt đầu, dẫn đầu là một nhóm các nhà sản xuất
					rượu đã thử nghiệm các kỹ thuật và giống nho mới, tạo ra rượu vang Chianti và Brunello di Montalcino
					truyền thống, cũng như các loại rượu pha trộn Super Tuscan hiện đại hơn.
					Ngày nay, rượu vang Tuscan được biết đến với chất lượng, độ phức tạp và sự đa dạng, làm say lòng
					những người đam mê rượu vang trên khắp thế giới.</p>


				<p>
					Với những đồng cỏ xanh ngát, những dãy núi non cao xa xôi và những cánh đồng ô-liu đồng loạt,
					Tuscany của Ý không chỉ nổi tiếng với phong cảnh thiên nhiên tuyệt đẹp mà còn là một trong những
					vùng sản xuất rượu vang hàng đầu thế giới. Với bề dày lịch sử và truyền thống, rượu vang Tuscany đã
					nhanh chóng thu hút sự quan tâm của những người yêu vang trên toàn cầu. Khi đến với Tuscany, việc
					chọn một chai rượu vang phù hợp là một trải nghiệm thú vị.</p>
			</div>
			<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
				<div class="table-responsive">
					<table class="table">
						<tbody>
							<tr>
								<td>
									<h5>Tên sản phẩm:</h5>
								</td>
								<td>
									<h5>Montellori Toscana Gold Cuvee</h5>
								</td>
							</tr>
							<tr>
								<td>
									<h5>Nhà sản xuất:</h5>
								</td>
								<td>
									<h5>Montellori</h5>
								</td>
							</tr>
							<tr>
								<td>
									<h5>Giống nho:</h5>
								</td>
								<td>
									<h5>Sangiovese, Cabernet Sauvignon, Merlot, Syrah</h5>
								</td>
							</tr>
							<tr>
								<td>
									<h5>Nồng độ:</h5>
								</td>
								<td>
									<h5> 14%</h5>
								</td>
							</tr>

						</tbody>
					</table>
				</div>
			</div>
			<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
				<div class="row">
					<div class="col-lg-6">
						<div class="comment_list">
							<?php
							// Lấy tất cả các bình luận của sản phẩm
							$all_comments = $comments->get_all_comments($product_id);

							// Kiểm tra nếu có bình luận
							if ($all_comments) {
								foreach ($all_comments as $comment) {
									$name = $comments->get_name_by_id($comment['customer_id']);

									?>
									<div class="review_item">
										<div class="media">
											<div class="d-flex">
												<img src="public/img/5e67fa0bcd0230fb933e9c7a6169e953.jpg" alt="User Avatar"
													width="40px">
											</div>
											<div class="media-body">
												<h4>
													<?php echo $name['customer_name']; ?>
												</h4>
												<h5>
													<?php echo $comment['comment_date']; ?>
												</h5>

												<a class="reply_btn" href="#">Reply</a>
											</div>
										</div>

										<p>
											<?php echo $comment['comment']; ?>
										</p>
									</div>
									<?php
								}
							} else {
								// Hiển thị thông báo nếu không có bình luận
								echo "<p>Không có bình luận nào cho sản phẩm này.</p>";
							}
							?>



						</div>
					</div>
					<div class="col-lg-6">
						<div class="review_box">
							<h4>Bình luận</h4>
							<form class="row contact_form" action="index.php?url=comments" method="post"
								id="contactForm" novalidate="novalidate">
								<div class="col-md-12">
									<div class="form-group">
										<input type="hidden" name="customer_id"
											value="<?php echo isset ($_SESSION['user']['customer_id']) ? $_SESSION['user']['customer_id'] : ''; ?>">
										<input type="hidden" name="product_id"
											value="<?php echo isset ($_REQUEST['product_id']) ? $_REQUEST['product_id'] : ''; ?>">

										<input type="text" class="form-control" name="comment"
											placeholder="Nhập bình luận">
									</div>
								</div>
								<div class="col-md-12 text-right">
									<button type="submit" value="submit" class="btn primary-btn">Gửi</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="tab-pane fade show active" id="review" role="tabpanel" aria-labelledby="review-tab">
				<div class="row">
					<div class="col-lg-6">
						<div class="row total_rate">
							<div class="col-6">
								<div class="box_total">
									<h5>Overall</h5>
									<h4>4.0</h4>
									<h6>(03 Reviews)</h6>
								</div>
							</div>
							<div class="col-6">
								<div class="rating_list">
									<h3>Based on 3 Reviews</h3>
									<ul class="list">
										<li><a href="#">5 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i
													class="fa fa-star"></i><i class="fa fa-star"></i><i
													class="fa fa-star"></i> 01</a></li>
										<li><a href="#">4 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i
													class="fa fa-star"></i><i class="fa fa-star"></i><i
													class="fa fa-star"></i> 01</a></li>
										<li><a href="#">3 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i
													class="fa fa-star"></i><i class="fa fa-star"></i><i
													class="fa fa-star"></i> 01</a></li>
										<li><a href="#">2 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i
													class="fa fa-star"></i><i class="fa fa-star"></i><i
													class="fa fa-star"></i> 01</a></li>
										<li><a href="#">1 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i
													class="fa fa-star"></i><i class="fa fa-star"></i><i
													class="fa fa-star"></i> 01</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="review_list">
							<div class="review_item">
								<div class="media">
									<div class="d-flex">
										<img src="img/product/review-1.png" alt="">
									</div>
									<div class="media-body">
										<h4>Blake Ruiz</h4>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
									incididunt ut labore et
									dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
									laboris nisi ut aliquip ex ea
									commodo</p>
							</div>
							<div class="review_item">
								<div class="media">
									<div class="d-flex">
										<img src="img/product/review-2.png" alt="">
									</div>
									<div class="media-body">
										<h4>Blake Ruiz</h4>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
									incididunt ut labore et
									dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
									laboris nisi ut aliquip ex ea
									commodo</p>
							</div>
							<div class="review_item">
								<div class="media">
									<div class="d-flex">
										<img src="img/product/review-3.png" alt="">
									</div>
									<div class="media-body">
										<h4>Blake Ruiz</h4>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
									incididunt ut labore et
									dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
									laboris nisi ut aliquip ex ea
									commodo</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="review_box">
							<h4>Add a Review</h4>
							<p>Your Rating:</p>
							<ul class="list">
								<li><a href="#"><i class="fa fa-star"></i></a></li>
								<li><a href="#"><i class="fa fa-star"></i></a></li>
								<li><a href="#"><i class="fa fa-star"></i></a></li>
								<li><a href="#"><i class="fa fa-star"></i></a></li>
								<li><a href="#"><i class="fa fa-star"></i></a></li>
							</ul>
							<p>Outstanding</p>
							<form action="#/" class="form-contact form-review mt-3">
								<div class="form-group">
									<input class="form-control" name="name" type="text" placeholder="Enter your name"
										required>
								</div>
								<div class="form-group">
									<input class="form-control" name="email" type="email"
										placeholder="Enter email address" required>
								</div>
								<div class="form-group">
									<input class="form-control" name="subject" type="text" placeholder="Enter Subject">
								</div>
								<div class="form-group">
									<textarea class="form-control different-control w-100" name="textarea" id="textarea"
										cols="30" rows="5" placeholder="Enter Message"></textarea>
								</div>
								<div class="form-group text-center text-md-right mt-3">
									<button type="submit" class="button button--active button-review">Submit
										Now</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================End Product Description Area =================-->

<!--================ Start related Product area =================-->
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
<script>
document.getElementById("contactForm").addEventListener("submit", function(event) {
    // Ngăn chặn hành vi mặc định của form (tải lại trang)
    event.preventDefault();

    // Kiểm tra trạng thái đăng nhập
    var loggedIn = checkLoginStatus();

    if (loggedIn) {
        sendAjaxRequest();
    } else {
        localStorage.setItem("currentTab", "contact");
        alert("Vui lòng đăng nhập để bình luận.");
    }
});

function checkLoginStatus() {
    return <?php echo isset($_SESSION['user']) ? 'true' : 'false'; ?>;
}

function sendAjaxRequest() {

    var formData = new FormData(document.getElementById("contactForm"));

    // Gửi yêu cầu AJAX đến máy chủ
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "index.php?url=comments", true);
    xhr.onload = function () {
        if (xhr.status === 200) {
            console.log(xhr.responseText);
            window.location.reload();
        } else {
            console.error("Lỗi khi gửi yêu cầu AJAX: " + xhr.status);
        }
    };
    xhr.send(formData);
}

window.onload = function () {
    var currentTab = localStorage.getItem("currentTab");
    if (currentTab === "contact") {
        document.getElementById("contact-tab").click();
    }
};


</script>