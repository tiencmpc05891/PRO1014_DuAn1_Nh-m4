<?php

if (isset($_GET['order_id'])) {
    $order_id = $_GET['order_id'];

 
    $bill = $cart->loadoneBill($order_id);

  
    if ($bill) {
?>
        <div class="container">
            <div class="text-center mt-2 mb-4">
                <h2>Cảm ơn quý khách đã đặt hàng!</h2>
            </div>
            <div class="row mb-5">
                <div class="col-lg-6">
                    <div class="border p-4">
                        <h3>Thông tin đơn hàng</h3>
                        <p>ID Đơn hàng: <?= $bill['order_id'] ?></p>
                        <p>Tên người đặt: <?= $bill['fullname'] ?></p>
                        <p>Tổng tiền: <?= number_format($bill['total_amount'], 0, '.', '.') ?>đ</p>
                        <p>Phương thức thanh toán: <?= $bill['payment_method'] ?></p>
                        <p>Địa chỉ: <?= $bill['address'] ?></p>
                        <p>Ngày đặt hàng: <?= $bill['order_date'] ?></p>
                        <p>Số điện thoại: <?= $bill['phone'] ?></p>
                        <p>Email: <?= $bill['email'] ?></p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <?php
                    // Hiển thị chi tiết sản phẩm trong đơn hàng từ giỏ hàng
                    $listCart = $cart->loadallCart($order_id);

                    if ($listCart) {
                    ?>
                        <div class="border p-4">
                            <h3 class="text-center mb-4">Chi tiết đơn hàng</h3>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">Hình ảnh</th>
                                            <th scope="col">Sản phẩm</th>
                                            <th scope="col">Đơn giá</th>
                                            <th scope="col">Số lượng</th>
                                            <th scope="col">Thành tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($listCart as $item) {
                                        ?>
                                            <tr>
                                                <td><img src="<?= $item['img'] ?>" alt="" width="80px"></td>
                                                <td><?= $item['product_name'] ?></td>
                                                <td><?= number_format($item['price'], 0, '.', '.') ?>đ</td>
                                                <td><?= $item['quantity'] ?></td>
                                                <td><?= number_format($item['total_amount'], 0, '.', '.') ?>đ</td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    <?php
                    } else {
                        echo "<p class='text-center'>Không có sản phẩm nào trong đơn hàng.</p>";
                    }
                    ?>
                </div>
            </div>
        </div>
<?php
    } else {
        echo "<p class='text-center'>Không tìm thấy đơn hàng.</p>";
    }
} else {
    echo "<p class='text-center'>Không có thông tin đơn hàng được cung cấp.</p>";
}
?>
