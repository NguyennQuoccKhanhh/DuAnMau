<?php
ob_start();
?>
<!-- breadcrumbs-area-start -->
<div class="breadcrumbs-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content text-center">
                    <h2>Thanh Toán</h2>
                    <ul>
                        <li><a href="#">Trang Chủ /</a></li>
                        <li class="active"><a href="#">Thanh toán</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumbs-area-end -->
<!-- shop-main-area-start -->
<div class="shop-main-area">
    <!-- checkout-area-start -->
    <div class="checkout-area">
        <div class="container">
            <form action="index.php?act=dathang" method="post">
                <div class="row">
                    <div class="checkbox-form">
                        <h3>Sản Phẩm Bạn Mua</h3>
                        <div class="table-content table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="product-thumbnail">STT</th>
                                        <th class="product-thumbnail">Ảnh</th>
                                        <th class="product-name">Tên sản phẩm</th>
                                        <th class="product-name">Size</th>
                                        <th class="product-name">Màu</th>
                                        <th class="product-price">Giá</th>
                                        <th class="product-quantity">Số lượng</th>
                                        <th class="product-subtotal">Tổng Giá</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ((isset($_SESSION['giohang'])) && (count($_SESSION['giohang']) > 0)) { ?>
                                        <?php
                                        $stt = 1;
                                        $total_amount = 0;

                                        foreach ($_SESSION['giohang'] as $item) {
                                            $total = $item[6] * $item[3];
                                            $total_amount += $total  ?>
                                            <tr>
                                                <td class="product-name"><?= $stt ?></td>
                                                <td class="product-thumbnail"><a href="#"><img style="height: 100px" style="width;: 100px" src="<?= $item[1] ?>" alt="man" /></a></td>
                                                <td class="product-name"><a href="#"><?= $item[2] ?></a></td>
                                                <td class="product-size"><?php $listonesizes = loadone_sizes($item[4]);
                                                                            echo $listonesizes['size']; ?></td>
                                                <td class="product-color"><?php $listonecolors = loadone_colors($item[5]);
                                                                            echo $listonecolors['color']; ?></td>
                                                <td class="product-price"><span class="amount"><?= number_format($item[3], 0, ",", ".") ?>VND</span></td>
                                                <td class="product-quantity"><?= $item[6] ?></td>
                                                <td class="product-subtotal"><?= number_format($total, 0, ",", ".") ?>VND</td>
                                            </tr>
                                        <?php
                                            $stt++;
                                        } ?>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <input type="hidden" name="total_amount" value="<?= $total_amount ?>">
                    <div class="your-order">
                        <h3>Hóa Đơn</h3>
                        <div class="col-xl-12">
                            <?php
                            if (isset($_SESSION['name_user'])) {
                                $name_user = $_SESSION['name_user']['name_user'];
                                $id_user = $_SESSION['name_user']['id_user'];
                            } else {
                                $name = "";
                            }
                            ?>
                            <div class="col-xl-6">
                                <div class="checkout-form-list">
                                    <label>Tài Khoản Đặt Hàng Hàng</label>
                                    <div style="margin-left: 20px;" class="col-xl-6 col-lg-6 col-md-12 col-12 ">
                                        <label>ID Tài Khoản: <span class="required">*</span></label>
                                        <!-- <input type="text" name="id_user" value=""> -->
                                        <a href="#" style="color: black; margin-left: 20px"><?= $id_user ?></a>
                                    </div>
                                    <div style="margin-left: 20px;" class="col-xl-6 col-lg-6 col-md-12 col-12 ">
                                        <label>Tên Tài Khoản Đặt Hàng: <span class="required">*</span></label>
                                        <!-- <input type="text" name="name_user" value=""> -->
                                        <a href="#" style="color: black; margin-left: 20px"><?= $name_user ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="checkout-form-list">
                                <label>Tên Người Nhận Hàng:</label>
                                <input type="text" name="name" placeholder="Nhập tên người nhận">
                                <?php if (isset($errorName)) { ?>
                                    <span style="color: red;"><?= $errorName ?></span>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="checkout-form-list">
                                <label>Số Điện Thoại Người Nhận:</label>
                                <input type="text" name="phone_user_setting" placeholder="Số điện thoại nhận hàng">
                                <?php if (isset($errorPhone)) { ?>
                                    <span style="color: red;"><?= $errorPhone ?></span>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="checkout-form-list">
                                <label>Địa chỉ giao hàng<span class="required">*</span></label>
                                <input type="text" name="address_user_setting" placeholder="Địa chỉ giao hàng">
                                <?php if (isset($errorAddress)) { ?>
                                    <span style="color: red;"><?= $errorAddress ?></span>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="your-order-table table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th style="font-size: 30px;" class="product-name">Sản Phẩm</th>
                                        <th style="font-size: 30px;" class="product-total">Thành Tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($_SESSION['giohang'] as $item) {
                                        $total = $item[6] * $item[3]; ?>
                                        <tr class="cart_item">
                                            <td class="product-name">
                                                <?= $item[2] ?> <strong class="product-quantity"> × <?= $item[6] ?></strong>
                                            </td>
                                            <td class="product-total">
                                                <span class="amount"><?= number_format($total, 0, ",", ".") ?>VND</span>
                                            </td>
                                        </tr>
                                    <?php }  ?>
                                </tbody>
                                <tfoot>
                                    <tr class="shipping">
                                        <th>Phương thức thanh toán</th>
                                        <td>
                                            <ul id="shipping_method">
                                                <li>
                                                    <input type="radio" name="payment_methods" value="Thanh toán khi nhận hàng">
                                                    <label>
                                                        Thanh toán khi nhận hàng
                                                    </label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="payment_methods" value="Thanh toán online">
                                                    <label>Thanh toán online </label>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr class="order-total">
                                        <th>Tổng Tiền</th>
                                        <td><strong><span class="amount"><?= number_format($total_amount, 0, ",", ".") ?>VND</span></strong>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="payment-method">
                            <div class="order-button-payment">
                                <input type="submit" name="dathang" value="Đặt Hàng">
                            </div>
                        </div>
                    </div>

                </div>
                <input type="hidden" name="id_order" value="<?= $id_order ?>">
            </form>
        </div>
    </div>
    <!-- checkout-area-end -->
</div>
<!-- shop-main-area-end -->