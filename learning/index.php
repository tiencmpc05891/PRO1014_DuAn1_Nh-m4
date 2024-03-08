<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <div class="container">


        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><i class="fas fa-home"></i>&nbsp;Trang chủ</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarScroll">
                        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#"><i
                                        class="fas fa-list"></i>&nbsp;Giới thiệu
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fas fa-phone"></i>&nbsp;Liên hệ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fas fa-envelope"></i>&nbsp;Góp ý</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fas fa-question-circle"></i>&nbsp;Hỏi đáp</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-user"></i>&nbsp;Tài khoản
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                    <li><a class="dropdown-item" href="#">Đăng nhập</a></li>
                                    <li><a class="dropdown-item" href="#">Quên mật khẩu</a></li>
                                    <li>
                                        <a class="dropdown-item" href="#">Đăng ký thành viên</a>
                                    </li>

                                    <li>
                                        <hr class="dropdown-divider" />
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">Đăng xuất</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Đổi mật khẩu</a></li>
                                    <li><a class="dropdown-item" href="#">Cập nhật hồ sơ</a></li>
                                    <li>
                                        <hr class="dropdown-divider" />
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">Đơn hàng</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">Hàng đã mua</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
        </header>
        <main>
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="slide3.webp" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="slide2.webp" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="slide3.webp" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="text-danger py-2 mt-2">
                <h4>Sản phẩm nổi bật</h4>
            </div>

            <div class="row mt-2">
                <?php for ($i = 0; $i < 12; $i++): ?>
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                        <div class="card mb-4">
                            <img src="sanpham1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                    of
                                    the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>

        </main>
        <footer id="footer" class="bg-warning py-3">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                        <ul>
                            <li class="list-group-item"><a href=""></a>Về chúng tôi</li>
                            <li class="list-group-item"><a href=""></a>Liên hệ</li>
                            <li class="list-group-item"><a href=""></a>Hồ sơ năng lực</li>
                            <li class="list-group-item"><a href=""></a>Tìm hiểu về trả góp</li>
                            <li class="list-group-item"><a href=""></a>Xem thêm</li>
                        </ul>
                    </div>


                    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                        <ul class="menu-footer">
                            <li class="list-group-item"><a href=""></a>Về chúng tôi</li>
                            <li class="list-group-item" ><a href=""></a>Liên hệ</li>
                            <li class="list-group-item"><a href=""></a>Hồ sơ năng lực</li>
                            <li class="list-group-item"><a href=""></a>Tìm hiểu về trả góp</li>
                            <li class="list-group-item"><a href=""></a>Xem thêm</li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.420494742044!2d105.7556524747934!3d9.982081490122432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a08906415c355f%3A0x416815a99ebd841e!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEZQVCBQb2x5dGVjaG5pYw!5e0!3m2!1svi!2s!4v1709816270359!5m2!1svi!2s"
                            width="100%" height="120" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                        <ul class="menu-footer">
                            <li class="list-group-item"><a href=""></a>Về chúng tôi</li>
                            <li class="list-group-item"><a href=""></a>Liên hệ</li>
                            <li class="list-group-item"><a href=""></a>Hồ sơ năng lực</li>
                            <li class="list-group-item"><a href=""></a>Tìm hiểu về trả góp</li>
                            <li class="list-group-item"><a href=""></a>Xem thêm</li>
                        </ul>
                    </div>

                </div>
            </div>
        </footer>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>