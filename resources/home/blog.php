<?php 
$blogs = $blog->get_all_blog();
?>
 <!-- ================ start banner area ================= -->	
 <section class="blog-banner-area" id="blog">
    <div class="container h-100">
      <div class="blog-banner">
        <div class="text-center">
          <h1>Our Blog</h1>
          <nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Blog</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ end banner area ================= -->


  <!--================Blog Categorie Area =================-->

  <!--================Blog Categorie Area =================-->

  <!--================Blog Area =================-->
  <section class="blog_area mt-4">
      <div class="container">
          <div class="row">
              <div class="col-lg-8">
                  <div class="blog_left_sidebar">
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
                      <article class="row blog_item">
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
                          <div class="col-md-9">
                              <div class="blog_post">
                                  <img src="<?= $img ?>" alt="">
                                  <div class="blog_details">
                                      <a href="single-blog.html">
                                          <h2><?= $title ?></h2>
                                      </a>
                                      
                                      <p><?= $content ?><p></p>
                                      <a href="<?= $linksp ?>" class="button button-blog">Đọc ngay</a>
                                  </div>
                              </div>
                          </div>
                      </article>
                      <?php endforeach; ?>
              <?php endif; ?>   

                      <nav class="blog-pagination justify-content-center d-flex">
                          <ul class="pagination">
                              <li class="page-item">
                                  <a href="#" class="page-link" aria-label="Previous">
                                      <span aria-hidden="true">
                                          <span class="lnr lnr-chevron-left"></span>
                                      </span>
                                  </a>
                              </li>
                              <li class="page-item">
                                  <a href="#" class="page-link">01</a>
                              </li>
                              <li class="page-item active">
                                  <a href="#" class="page-link">02</a>
                              </li>
                              <li class="page-item">
                                  <a href="#" class="page-link">03</a>
                              </li>
                              <li class="page-item">
                                  <a href="#" class="page-link">04</a>
                              </li>
                              <li class="page-item">
                                  <a href="#" class="page-link">09</a>
                              </li>
                              <li class="page-item">
                                  <a href="#" class="page-link" aria-label="Next">
                                      <span aria-hidden="true">
                                          <span class="lnr lnr-chevron-right"></span>
                                      </span>
                                  </a>
                              </li>
                          </ul>
                      </nav>
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

  <!--================Instagram Area =================-->
 
  <!--================End Instagram Area =================-->
  

  <!--================ Start footer Area  =================-->	