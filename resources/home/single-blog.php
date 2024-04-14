<?php
if (isset($_GET['news_id']) && ($_GET['news_id'] > 0)) {
	$news_id = $_GET['news_id'];
	$oneblog = $blog->getone_blog($news_id);
	extract($oneblog);

}

if (isset($titlepage) && $titlepage != "") {
	$title = $titlepage;
} else {
	$title = "bài viết";
}


$blogs = $blog->get_all_blog();


?>

<!-- ================ start banner area ================= -->
<section class="blog-banner-area" id="blog">
	<div class="container h-100">
		<div class="blog-banner">
			<div class="text-center">
				<h1>Blog Details</h1>
				<nav aria-label="breadcrumb" class="banner-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">Blog Details</li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
</section>
<!-- ================ end banner area ================= -->



<!--================Blog Area =================-->
<section class="blog_area single-post-area py-80px section-margin--small">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 posts-list">
			<?php
					extract($oneblog);
					$img = '../../../public/uploads/images/' . $img;

					?>
				<div class="single-post row">
					<div class="col-lg-12">
						<div class="feature-img">
							<img class="img-fluid" src="<?= $img ?>" alt="">
						</div>
					</div>
					<div class="col-md-3">
                            <div class="blog_info text-right">
                                <div class="post_tag">
                                   
                                    <a class="active" href="#">Rượu vang</a>
                                   
                                </div>
                                <ul class="blog_meta list">
                                    <li>
                                        <a href="#"><?= $author ?>
                                            <i class="lnr lnr-user"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"><?= $created_at ?>
                                            <i class="lnr lnr-calendar-full"></i>
                                        </a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
					<div class="col-lg-9 col-md-9 blog_details">
						<h2><?= $title ?></h2>
						<p class="excert">
						<?= $content ?>
						</p>
						
						<p>
						<?= $content ?>
						</p>
					</div>
					<div class="col-lg-12">
						<div class="quotes">
						Dù bạn mới biết đến rượu vang hay đang làm việc trong lĩnh vực rượu thì trang web này sẽ cung cấp cho bạn
              nhiều kiến thức rượu vang hữu ích. Hãy cùng bắt đầu nào!
						</div>
						<div class="row">
							<div class="col-6">
								<img class="img-fluid" src="<?= $img ?>" alt="">
							</div>
							<div class="col-6">
								<img class="img-fluid" src="<?= $img ?>" alt="">
							</div>
							<div class="col-lg-12 mt-4">
								<p>
								<?= $content ?>
								</p>
								
							</div>
						</div>
					</div>
				</div>
				
				
			</div>
			<div class="col-lg-4">
				<div class="blog_right_sidebar">
					<aside class="single_sidebar_widget search_widget">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Search Posts">
							<span class="input-group-btn">
								<button class="btn btn-default" type="button">
									<i class="lnr lnr-magnifier"></i>
								</button>
							</span>
						</div>
						<!-- /input-group -->
						<div class="br"></div>
					</aside>
					
					<aside class="single_sidebar_widget popular_post_widget">
                          <h3 class="widget_title">Bài viết phổ biến</h3>
                        
                         <?php if (empty($blogs)): ?>
                <div class="col-12">
                  <div class="alert alert-warning" role="alert">
                    Không có bài viết nào.
                  </div>
                </div>
              <?php else: ?>
                <?php foreach ($blogs as $index => $all_blog): ?>
                  <?php
                  extract($all_blog);
                  $linksp = "index.php?url=single-blog&news_id=" . $all_blog['news_id'];
                  $img = '../../public/uploads/images/' . $img;
                  $news_id = $all_blog['news_id'];
                  ?>
                          <div class="media post_item">
                              <img src="<?= $img ?>" width="50px" alt="post">
                              <div class="media-body">
                                  <a href="single-blog.html">
                                      <h5><?= $title ?></h5>
                                  </a>
                                  <p><?= $created_at ?></p>
                              </div>
                          </div>
                        
                          <div class="br"></div>
                      </aside>
                      <?php endforeach; ?>
              <?php endif; ?>   
					
					
				
					
				</div>
			</div>
		</div>
	</div>
</section>
<!--================Blog Area =================-->


