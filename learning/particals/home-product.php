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
                    <a href="./particals/single-product.php" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    <?php endfor; ?>
</div>