<div class="container mt-2 mb-2">
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <div class="text-center " style="font-size:30px; margin-top: 10px;">Đơn hàng đã đặt</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Mã đơn hàng</th>
                                    <th scope="col">Số lượng đơn hàng</th>
                                    <th scope="col">Tổng giá trị đơn hàng</th>
                                    <th scope="col">Ngày đặt đơn hàng</th>
                                    <th scope="col">Tình trạng đơn hàng</th>
                                    <th scope="col">Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($listbill as $bill): ?>
                                    <?php
                                    extract($bill);
                                    $ttdh = $cart->getTTDH($bill['order_id']);

                                    $countsp = $cart->loadallCart_count($bill['order_id']);
                                    ?>
                                    <tr>
                                        <td>CMT
                                            <?php echo $bill['order_id']; ?>
                                        </td>
                                     
                                        <td>
                                            <?php echo $countsp; ?>
                                        </td>
                                  
                                        <td>
                                            <?php echo number_format($bill['total_amount'], 0, ',', '.'); ?>
                                        </td>
                                        <td>
                                        <?php echo $bill['order_date']; ?>
                                        </td>
                                        <td>
                                            <?php echo $cart->getTTDH($bill["trangthai"]); ?>
                                        </td>
                                        <td>
                                            <?php if ($trangthai === 'Đơn hàng mới'): ?>
                                                <button class="btn btn-danger cancel-btn"
                                                    onclick="confirmCancelOrder(<?php echo $bill['order_id']; ?>)">Hủy đơn
                                                    hàng</button>
                                                <input type="hidden" name="bill_id" value="<?php echo $bill['order_id']; ?>">
                                            <?php elseif ($trangthai === 'Đang giao hàng'): ?>
                                                <span class="text-info">Đang giao hàng</span>
                                            <?php elseif ($trangthai === 'Hoàn tất đơn hàng'): ?>
                                                <span class="text-success">Đơn hàng đã hoàn tất</span>
                                            <?php endif; ?>
                                        </td>



                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Trong phần head của trang HTML -->
<script>
    function confirmCancelOrder(orderId) {
        // Hiển thị hộp thoại xác nhận
        var result = confirm("Bạn có chắc chắn muốn hủy đơn hàng không?");

        // Nếu người dùng chọn "OK" (đồng ý), chuyển hướng đến trang xử lý hủy đơn hàng
        if (result) {
            window.location.href = "index.php?url=mybill&order_id=" + orderId;
            alert("Đơn hàng đã được hủy thành công!");
        } else {
            alert("Hủy thao tác.");
        }
    }
</script>