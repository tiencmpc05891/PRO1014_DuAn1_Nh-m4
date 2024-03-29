<?php

namespace dao;

use dao\Connect;

class Cart
{
    private $database;


    public function __construct()
    {
        $this->database = new Connect();
    }
    public function showcart($del, $isCheckout = false)
    {
        global $img_path;
        $tong = 0;
        $i = 0;
        if ($del == 1) {
            $xoasp_th = '<th>Thao tác</th>';
            $xoasp_td2 = '<td></td>';
        } else {
            $xoasp_th = '';
            $xoasp_td2 = '';
        }
        if ($isCheckout) {
            echo '<div class="order_box">';
            echo '<h2>Hóa đơn của bạn</h2>';
            // Hiển thị danh sách sản phẩm với số lượng và tổng tiền
            echo '<ul class="list">';
            foreach ($_SESSION['mycart'] as $cart) {
                $price = floatval($cart['price']);
                $quantity = intval($cart['quantity']);
                $total_amount = $price * $quantity;
                $tong += $total_amount;
                echo '<li>' . $cart['product_name'] . '<span class="middle">x ' . $quantity . '</span> <span class="last">' . number_format($total_amount, 0, '.', '.') . 'đ</span></li>';
            }
            echo '</ul>';

            // Hiển thị tổng tiền và phí ship

            echo '<ul class="list list_2">
                    <li>Phí ship <span>0đ</span></li>
                    <li>Tổng cộng <span>' . number_format($tong, 0, '.', '.') . 'đ</span></li>
                </ul>';
            echo '<hr>';
            // Hiển thị phương thức thanh toán
            echo '<h2>Phương thức thanh toán</h2>';
            echo '<div class="bg-light p-30">';
            echo '<div class="form-group">';
            echo '<div class="custom-control custom-radio">';
            echo '   <div class="payment_item">
            <div class="radion_btn">
                <input type="radio" id="f-option5" name="payment_method"
                value="Thanh toán khi nhận hàng" ">
                <label for="f-option5">Thanh toán khi nhận hàng</label>
                <div class="check"></div>
            </div>

            </div>
        
            <div class="radion_btn">
                <input type="radio" id="f-option6" name="payment_method"
                value="Thanh toán VN PAY" >
                <label for="f-option6">VNPAY </label>
                <img src="" width="50px" alt="">
                <div class="check"></div>
            </div>
      
            ';

            echo '</div>';
            echo '</div>';
            echo '</div>';

            // Nút đặt hàng
            echo '<input type="submit" class="btn btn-block btn-primary font-weight-bold py-3" name="xacnhandathang" value="Đặt hàng">';
            echo '</div>';
        }
        if (!$isCheckout) {
            echo '<section class="cart_area">
    <div class="container">
        <div class="cart_inner">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Hình</th>
                            <th scope="col">Sản Phẩm</th>
                            <th scope="col">Đơn giá</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Thành tiền</th>
                            ' . $xoasp_th . '
                        </tr>
                    </thead>
                    <tbody>';

            foreach ($_SESSION['mycart'] as $cart) {
                $price = floatval($cart['price']);
                $quantity = intval($cart['quantity']);
                $total_amount = $price * $quantity;
                $tong += $total_amount;

                if ($del == 1) {
                    $xoasp_td = '<td><a href="index.php?url=delcart&cart_id=' . $i . '"><input type="button"  class="btn btn-danger" value="Xóa"></a></td>';
                } else {
                    $xoasp_td = '';
                }

                echo '<tr>';
                echo '    <td><img src="' . $cart['img'] . '" alt="" width="80px"></td>';
                echo '    <td>' . $cart['product_name'] . '</td>';
                echo '    <td>' . $cart['price'] . '<sup>đ</sup></td>';
                echo '    <td>
            <div class="product_count">
                <input type="text" name="qty" id="sst" maxlength="12" value="' . $cart['quantity'] . '" title="Quantity:" class="input-text qty">
                <button class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
                <button class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
            </div>
        </td>';
                echo '    <td>' . number_format($total_amount, 0, '.', '.') . '<sup>đ</sup></td>';
                echo '    ' . $xoasp_td;
                echo '</tr>';

                $i += 1;
            }

            echo '</tbody>';

            echo '      <tfoot>
            <tr>
                <td colspan="4"><h5>Tổng đơn hàng</h5></td>
                <td><h5>' . number_format($tong, 0, '.', '.') . '<sup>đ</sup></h5></td>
                ' . $xoasp_td2 . '
            </tr>
        </tfoot>';

            echo '      </table>
        </div>
    </div>';
        }


        if (!$isCheckout) {
            echo '<div class="bg-light p-3 mb-3">
                <div class="border-bottom pb-2">
                    <div class="d-flex justify-confullnamet-between mb-3">
                        <h6 class="font-weight-medium">Tổng đơn hàng:</h6>
                        <h6 class="font-weight-medium">' . number_format($tong, 0, '.', '.') . '<sup>đ</sup></h6>
                    </div>
                    <div class="d-flex justify-confullnamet-between">
                        <h6 class="font-weight-medium">Phí ship</h6>
                        <h6 class="font-weight-medium">0đ</h6>
                    </div>
                </div>
                <div class="pt-2">
                    <div class="d-flex justify-confullnamet-between mt-2">
                        <h5>Thành tiền:</h5>
                        <h5>' . number_format($tong, 0, '.', '.') . '<sup>đ</sup></h5>
                    </div>
                    <a href="index.php?url=checkout">
                        <button class="btn btn-block btn-primary font-weight-bold my-3 py-3">Tiếp tục thanh toán</button>
                    </a>
                </div>
            </div>';
        }

        echo '    </div>
        </div>
    </section>';
    }


    public function billChiTiet($listbill)
    {
        global $img_path;
        $tong = 0;
        $i = 0;

        echo '
    <div class="table-responsive">
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Hình ảnh</th>
                    <th scope="col">Sản phẩm</th>
                    <th scope="col">Đơn giá</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Thành tiền</th>
                </tr>
            </thead>
            <tbody>';

        foreach ($listbill as $cart) {
            $img = $cart['img']; // Sử dụng $cart['img'] để truy cập URL hình ảnh
            $tong += $cart['total_amount'];

            echo '
        <tr>
            <td><img src="' . $img . '" alt="" height="80px"></td>
            <td>' . (isset($cart['product_name']) ? $cart['product_name'] : '') . '</td>
            <td>' . number_format($cart['price'], 0, '.', '.') . '<sup>đ</sup></td>
            <td>' . $cart['quantity'] . '</td>
            <td>' . number_format($cart['total_amount'], 0, '.', '.') . '<sup>đ</sup></td>
        </tr>';
            $i += 1;
        }

        echo '
            <tr>
                <td colspan="4">Tổng đơn hàng</td>
                <td>' . number_format($tong, 0, '.', '.') . ' <sup>đ</sup></td>
            </tr>
        </tbody>
    </table>
</div>';
    }

    public function tongDonHang()
    {
        $tong = 0;
        if (isset($_SESSION['mycart']) && is_array($_SESSION['mycart'])) {
            foreach ($_SESSION['mycart'] as $cart) {
                // Kiểm tra xem giá và số lượng có tồn tại và hợp lệ không
                if (isset($cart['price']) && isset($cart['quantity']) && is_numeric($cart['price']) && is_numeric($cart['quantity']) && $cart['price'] > 0 && $cart['quantity'] > 0) {
                    // Tính tổng tiền của từng sản phẩm và cộng vào tổng đơn hàng
                    $total_amount = $cart['price'] * $cart['quantity'];
                    $tong += $total_amount;
                } else {
                    // Nếu giá hoặc số lượng không hợp lệ, bỏ qua sản phẩm này và thông báo lỗi
                    echo "Sản phẩm không hợp lệ trong giỏ hàng.";
                }
            }
        }
        return $tong;
    }

    public function insertCart($customer_id, $product_id, $order_id, $img, $product_name, $price, $quantity, $total_amount)
    {
        // Thêm thông tin sản phẩm vào giỏ hàng của người dùng đã đăng nhập
        $sql = "INSERT INTO cart (customer_id, product_id, order_id,img, product_name, price, quantity, total_amount) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $params = array($customer_id, $product_id, $order_id, $img, $product_name, $price, $quantity, $total_amount);
        return $this->database->pdo_execute($sql, $params);
    }



    public function insertBill($customer_id, $order_date, $fullname, $total_amount, $payment_method, $phone, $email, $address)
    {
        // Thêm thông tin đơn hàng mới vào cơ sở dữ liệu
        $sql = "INSERT INTO orders(customer_id, order_date,fullname, total_amount, payment_method, phone, email, address, trangthai) 
        VALUES ('$customer_id', '$order_date','$fullname', '$total_amount', '$payment_method', '$phone', '$email', '$address', 'Đơn hàng mới')";
        return $this->database->pdo_execute_return_lastInsertId($sql);
    }



    public function loadoneBill($order_id)
    {
        $sql = "SELECT * FROM orders WHERE order_id = ?";
        $params = array($order_id);
        $bill = $this->database->pdo_query_one($sql, $params);
        return $bill;
    }


    public function loadallCart($order_id)
    {
        $sql = "SELECT * FROM cart WHERE order_id = :order_id";
        $params = array(':order_id' => $order_id);
        $bill = $this->database->pdo_query($sql, $params);
        return $bill;
    }


    public function loadallCart_count($order_id)
    {
        $sql = "select * from orders where order_id=" . $order_id;
        $bill = $this->database->pdo_query($sql);
        return sizeof($bill);
    }
    public function loadall_Bill()
    {
        $database = new Connect();
        $sql = "select * from orders order by order_id desc";
        $listbill = $database->pdo_query($sql);
        return $listbill;
    }
    public function loadallBill($customer_id = 0)
    {
        // $sql = "SELECT * FROM orders WHERE 1";
        // if ($customer_id > 0)
        //     $sql .= " AND customer_id = $customer_id";
        // $sql .= " ORDER BY trangthai ASC, ngaydathang DESC";

        // $listbill = $this->database->pdo_query($sql);
        // return $listbill;
        $sql = "SELECT * FROM orders WHERE 1";
        if ($customer_id > 0) {
            $sql .= " AND customer_id=" . $customer_id;
        }
        $sql .= " ORDER BY CASE 
                WHEN trangthai = '0' THEN 0  -- Sắp xếp đơn hàng mới lên đầu
                WHEN trangthai = '2' THEN 1  -- Sắp xếp đơn hàng đang giao hàng sau đơn hàng mới
                ELSE 2 END,
                order_date DESC";

        $listbill = $this->database->pdo_query($sql);
        return $listbill;
    }

    public function loadallCartClient($customer_id, $database)
    {
        // Khởi tạo mảng để lưu thông tin giỏ hàng
        $cartItems = array();

        // Truy vấn cơ sở dữ liệu để lấy thông tin giỏ hàng của tài khoản dựa trên mã khách hàng
        $sql = "SELECT * FROM cart WHERE customer_id = ?";
        $params = array($customer_id);
        $result = $database->pdo_query($sql, $params);

        // Kiểm tra xem có kết quả trả về không
        if (count($result) > 0) {
            // Lặp qua các hàng kết quả và lưu vào mảng giỏ hàng
            foreach ($result as $row) {
                $cartItems[] = $row;
            }
        }

        // Trả về mảng thông tin giỏ hàng
        return $cartItems;
    }



    public function deleteDonHang($order_id)
    {
        // Xóa các hàng con từ bảng cart trước
        $this->deleteCartItems($order_id);

        // Sau khi đã xóa các hàng con, thực hiện xóa đơn hàng từ bảng orders
        $sql = "DELETE FROM orders WHERE order_id = ?";
        $params = array($order_id);
        return $this->database->pdo_execute($sql, $params);
    }

    public function deleteCartItems($order_id)
    {
        // Xóa các hàng con từ bảng cart dựa trên mã đơn hàng
        $sql = "DELETE FROM cart WHERE order_id = ?";
        $params = array($order_id);
        return $this->database->pdo_execute($sql, $params);
    }



    public function updateTrangThaiDonHang($id_donhang, $trangthai_moi)
    {

        if ($trangthai_moi !== 'Đơn hàng mới' && $trangthai_moi !== 'Đang giao hàng' && $trangthai_moi !== 'Hoàn tất đơn hàng') {

            echo "Lỗi: Trạng thái mới không hợp lệ.";
            return;
        }

        $sql = "UPDATE orders SET trangthai = ? WHERE order_id = ?";
        $params = array($trangthai_moi, $id_donhang);
        $this->database->pdo_execute($sql, $params);
    }


    public function getTrangThaiDonHangByID($id_donhang)
    {

        $sql = "SELECT trangthai FROM orders WHERE order_id = ?";
        $params = array($id_donhang);
        $result = $this->database->pdo_query_one($sql, $params);

        // Kiểm tra xem có kết quả trả về không
        if ($result) {
            return $result['trangthai']; // Chỉ trả về trạng thái của đơn hàng
        } else {
            return null;
        }
    }




    public function getTTDH($ttdh)
    {
        switch ($ttdh) {
            case 'Đơn hàng mới':
            case 'Đang xử lý':
            case 'Đang giao hàng':
            case 'Hoàn tất đơn hàng':
                return $ttdh;
            default:
                return "Đơn hàng mới";
        }
    }
}
