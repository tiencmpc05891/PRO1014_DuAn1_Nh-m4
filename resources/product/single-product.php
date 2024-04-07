<!-- file single-product -->

<?php
if (isset($_GET['product_id']) && ($_GET['product_id'] > 0)) {
	$product_id = $_GET['product_id'];
	$onesp = $sanpham->loadone_sanpham($product_id);
	extract($onesp);
	$sp_cung_loai = $sanpham->load_sanpham_cungloai($product_id, $category_id);
}

if (isset($titlepage) && $titlepage != "") {
	$title = $titlepage;
} else {
	$title = "Sản Phẩm";
}

$category_id = isset($_GET['category_id']) ? $_GET['category_id'] : 1;
$dssp = $sanpham->loadall_sanpham("", $category_id);


?>
<style>
	/* CSS */
	.star-rating {
		list-style: none;
		padding: 0;
		margin: 0;
	}

	.star {
		display: inline-block;
		font-size: 24px;
		color: #ddd;
		/* Màu trắng mặc định */
		cursor: pointer;
	}

	.star.selected {
		color: gold;
		/* Màu vàng cho các ô đã chọn */
	}
</style>
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

						<form action="index.php?url=addcart" method="post">
							<!-- nữa làm giỏ hàng -->
							<input type="hidden" name="cart_id" value="<?= $cart_id ?>">
							<input type="hidden" name="product_name"
								value="<?= isset($product_name) ? $product_name : '' ?>">
							<input type="hidden" name="img" value="<?= isset($img) ? $img : '' ?>">
							<input type="hidden" name="price" value="<?= isset($price) ? $price : '' ?>">
							<!-- <input type="hidden" name="quantity" value="1"> -->
							<label for="qty">Số lượng:</label>

							<input type="number" name="quantity" min="1" max="10" value="1">

							<input type="hidden" name="product_id" value="<?= isset($product_id) ? $product_id : '' ?>">

					</div>
					<input class="btn btn-primary" type="submit" name="addcart" value="Thêm vào giỏ hàng">
					</form>
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
					aria-controls="review" aria-selected="false">Đánh giá</a>
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
							$all_comments = $comments->get_comments($product_id);

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
								id="commentForm" novalidate="novalidate">
								<div class="col-md-12">
									<div class="form-group">
										<input type="hidden" name="customer_id"
											value="<?php echo isset($_SESSION['user_id']) ? $_SESSION['user_id'] : ''; ?>">
										<input type="hidden" name="customer_id"
											value="<?php echo isset($_SESSION['user_id']) ? $_SESSION['user_id'] : (isset($_SESSION['user']['customer_id']) ? $_SESSION['user']['customer_id'] : ''); ?>">
										<input type="hidden" name="product_id"
											value="<?php echo isset($_REQUEST['product_id']) ? $_REQUEST['product_id'] : ''; ?>">
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
						<?php
						$all_ratings = $ratings->get_rating($product_id);
						$rating_stats = $ratings->calculateRatingStats($all_ratings);
						?>
						<div class="row total_rate">
							<div class="col-6">
								<div class="box_total">
									<h5>Tổng</h5>
									<h4>
										<?php echo $rating_stats['average_rating']; ?>
									</h4>
									<h6>(
										<?php echo $rating_stats['total_reviews']; ?> Đánh giá)
									</h6>
								</div>
							</div>
							<div class="col-6">
								<div class="rating_list">
									<h3>Dựa trên
										<?php echo $rating_stats['total_reviews']; ?> đánh giá
									</h3>
									<ul class="list">
										<?php foreach ($rating_stats['rating_counts'] as $rating_value => $count): ?>
											<li>
												<a href="#">
													<?php echo $rating_value; ?> Sao
													<?php for ($i = 0; $i < $rating_value; $i++): ?>
														<i class="fa fa-star"></i>
													<?php endfor; ?>
													<?php echo $count; ?>
												</a>
											</li>
										<?php endforeach; ?>
									</ul>
								</div>
							</div>
						</div>
						<?php
						$all_ratings = $ratings->get_rating($product_id);
						if ($all_ratings) {
							foreach ($all_ratings as $rating) {
								$namerating = $ratings->get_name_by_id($rating['customer_id']);

								// Tính toán số sao dựa trên đánh giá
								$rating_value = $rating['rating'];
								$stars_html = '';
								for ($i = 0; $i < $rating_value; $i++) {
									$stars_html .= '<i class="fa fa-star"></i>';
								}

								?>
								<div class="review_list">
									<div class="review_item">
										<div class="media">
											<div class="d-flex">
												<img src="public/img/5e67fa0bcd0230fb933e9c7a6169e953.jpg" alt="User Avatar"
													width="40px">
											</div>
											<div class="media-body">
												<h4>
													<?php echo $namerating['customer_name']; ?>
												</h4>
												<!-- Hiển thị số sao -->
												<?php echo $stars_html; ?>
											</div>
										</div>
										<p>
											<?php echo $rating['review']; ?>
										</p>
									</div>
								</div>
								<?php
							}
						} else {
							// Hiển thị thông báo nếu không có bình luận
							echo "<p>Không có đánh giá nào cho sản phẩm này.</p>";
						}
						?>

					</div>
					<div class="col-lg-6">
						<div class="review_box">
							<h4>Thêm đánh giá</h4>
							<p>Đánh giá của bạn:</p>
							<!-- HTML -->
							<ul class="star-rating">
								<li class="star" data-rating="1">&#9733;</li>
								<li class="star" data-rating="2">&#9733;</li>
								<li class="star" data-rating="3">&#9733;</li>
								<li class="star" data-rating="4">&#9733;</li>
								<li class="star" data-rating="5">&#9733;</li>
							</ul>

							<p id="ratingText">Số sao:</p>
							<form action="index.php?url=ratings" method="post" class="form-contact form-review mt-3">
								<input type="hidden" id="rating" name="rating" value="0">
								<input type="hidden" name="customer_id"
									value="<?php echo isset($_SESSION['user_id']) ? $_SESSION['user_id'] : ''; ?>">

								<input type="hidden" name="customer_id"
									value="<?php echo isset($_SESSION['user_id']) ? $_SESSION['user_id'] : (isset($_SESSION['user']['customer_id']) ? $_SESSION['user']['customer_id'] : ''); ?>">
								<input type="hidden" name="product_id"
									value="<?php echo isset($_REQUEST['product_id']) ? $_REQUEST['product_id'] : ''; ?>">
								<div class="form-group">
									<textarea class="form-control different-control w-100" name="review" id="review"
										cols="30" rows="5" placeholder="Nhập đánh giá"></textarea>
								</div>
								<div class="form-group text-center text-md-right mt-3">
									<button type="submit" class="button button--active button-review">Gửi</button>
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
<section class="section-margin calc-60px">
	<div class="container">
		<div class="section-intro pb-60px">
			<p>Sản phẩm bán chạy</p>
			<h2>Trending <span class="section-intro__style">Product</span></h2>
		</div>
		<div class="row">
			<?php foreach ($sp_cung_loai as $spcl): ?>
				<?php
				extract($spcl);
				$linksp = "index.php?url=single-product&product_id=" . $spcl['product_id'];
				$img = '../../public/uploads/images/' . $img;
				$product_id = $spcl['product_id'];
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
							<form action="index.php?url=addcart" method="post">
								<!-- nữa làm giỏ hàng -->
								<input type="hidden" name="cart_id" value="<?= $cart_id ?>">
								<input type="hidden" name="product_name"
									value="<?= isset($product_name) ? $product_name : '' ?>">
								<input type="hidden" name="img" value="<?= isset($img) ? $img : '' ?>">
								<input type="hidden" name="price" value="<?= isset($price) ? $price : '' ?>">
								<input type="hidden" name="quantity" value="1">
								<input type="hidden" name="product_id" value="<?= isset($product_id) ? $product_id : '' ?>">
								<input class="btn btn-primary add-to-cart-btn" type="submit" name="addcart"
									value="Thêm vào giỏ hàng">
							</form>
						</div>
					</div>
				</div>
			<?php endforeach; ?>

		</div>
	</div>
</section>
<!--================ end related Product area =================-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

	// Định nghĩa hàm setRating trước khi sử dụng nó
	function setRating(rating) {
		var stars = document.getElementsByClassName('star');
		var ratingInput = document.getElementById('rating');
		ratingInput.value = rating;

		for (var i = 0; i < stars.length; i++) {
			if (i < rating) {
				stars[i].classList.add('selected'); // Thêm lớp selected cho các ô đã chọn
			} else {
				stars[i].classList.remove('selected'); // Loại bỏ lớp selected cho các ô không được chọn
			}
		}
	}

	$(document).ready(function () {
		$('.star-rating .star').click(function () {
			var rating = $(this).attr('data-rating');
			$('#rating').val(rating);
			$('#ratingText').text('Số sao: ' + rating);

			setRating(rating);
		});

		// Xử lý sự kiện khi submit form đánh giá
		$('.form-review').submit(function (event) {
			event.preventDefault();

			var rating = $('#rating').val();
			var review = $('#review').val();

			console.log('Rating:', rating);
			console.log('Review:', review);

			if (rating === '0') {
				alert('Vui lòng nhập đánh giá.');
				return;
			}
			$.ajax({
				type: $(this).attr('method'),
				url: $(this).attr('action'),
				data: $(this).serialize(),
				success: function (response) {
					console.log(response);
					location.reload();
				},
				error: function (xhr, status, error) {
					console.error('There was an error!', error);
				}
			});
		});

	});
	
	//xử lý bình luận
	$(document).ready(function () {
		$('#commentForm').submit(function (event) {
			event.preventDefault();
			var loggedIn = checkLoginStatus();

			if (loggedIn) {
				$.ajax({
					type: $(this).attr('method'),
					url: $(this).attr('action'),
					data: $(this).serialize(),
					success: function (response) {
						console.log(response);
						location.reload();
					},
					error: function (xhr, status, error) {
						console.error('There was an error!', error);
					}
				});
			} else {
				alert("Vui lòng đăng nhập để bình luận.");
			}
		});
	});

	function checkLoginStatus() {
		return <?php echo isset($_SESSION['user']) ? 'true' : 'false'; ?>;
	}


</script>