<div class="container">
    <h2 class="d-flex justify-content-center align-items-center mt-5">Thanh toán</h2>
    <div class="row">
        <div class="col-12 mb-4">
            <form class="m-5 row" method="post" action="<?=_WEB_ROOT . "/Order/order"?>">
                <div class="order-pay-user-info-wrapper col-12">
                    <h2>Thông tin khách hàng</h2>
                    <div class="order-pay-user-info-content row">
                        <input type="hidden" name="customer_id" value="<?= $user['Id'] ?>">
                        <div class="col-3 d-flex flex-column">
                            <label for="order-pay-user-info-name">Tên</label>
                            <input class="form-input" value="<?=$user['FirstName'] . " " . $user['LastName']?>" disabled>
                        </div>
                        <div class="col-3 d-flex flex-column">
                            <label for="order-pay-user-info-phone">Số điện thoại</label>
                            <input class="form-input" name="phone" value="<?=$user['Phone']?>">
                        </div>
                        <div class="col-6 d-flex flex-column">
                            <label for="order-pay-user-info-address">Địa chỉ</label>
                            <input class="form-input" name="address" value="<?=$user['Address']?>">
                        </div>
                    </div>
                </div>

                <div class="col-12 mt-4 mb-4">
                    <h2>Thông tin mua hàng</h2>
                    <?php
                        foreach($productFromCart as $prod)
                        {
                            echo '
                                <div class="d-flex justify-content-between align-items-center" style="background-color: aquamarine;">
                                    <img class="p-4" src="'. _WEB_ROOT . $prod['Img'] .'" style="width: 100px; height: 100px;">
                                    <div class="p-4">'. $prod['Title'] .'</div>
                                    <div class="p-4">Số lượng: '. $prod['cart_amount'] .'</div>
                                    <div class="p-4">Đơn giá: $'. $prod['Price'] .'</div>
                                </div>
                            ';
                        }
                    ?>
                    <div class="d-flex justify-content-end align-items-center mt-2" style="background-color: aquamarine;">
                        <?php
                            $totalPrice = 0;
                            $totalAmount = 0;
                            foreach($productFromCart as $prod)
                            {
                                $totalPrice += $prod['cart_amount'] * $prod['Price'];
                                $totalAmount += $prod['cart_amount'];
                            }
                            echo '<div class="p-4">Tổng tiền: $'. $totalPrice    .'</div>';
                            echo '<input type="hidden" name="total_value" value="'. $totalPrice .'">';
                            echo '<input type="hidden" name="total_amount" value="'. $totalAmount .'">';
                        ?>
                    </div>
                </div>

                <div class="col-12 mt-4 mb-4">
                    <h2>Hình thức thanh toán</h2>
                    <div class="d-flex justify-content-around align-items-center p-4" style="background-color:beige;">
                        <div>
                            <input type="radio" id="order-pay-payment-method-online-radio-btn" name="payment_method" value="ONLINE" checked>
                            <label for="order-pay-payment-method-online-radio-btn">ONLINE</label>
                        </div>
                        <div>
                            <input type="radio" id="order-pay-payment-method-cod-radio-btn" name="payment_method" value="COD">
                            <label for="order-pay-payment-method-cod-radio-btn">COD</label>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-end align-items-center">
                    <button class="btn btn-primary" type="submit">Đặt hàng</button>
                </div>
            </form>
        </div>
    </div>
</div>