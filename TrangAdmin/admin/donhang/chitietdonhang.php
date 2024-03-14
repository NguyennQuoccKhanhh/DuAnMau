<section class="main_content dashboard_part">
    <div class="main_content_iner ">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="dashboard_header mb_50">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="dashboard_header_title">
                                    <h3>Chi Tiết Đơn Hàng</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="white_box mb_30">
                        <div class="box_header ">
                            <div class="main-title">
                                <?php
                                if (!empty($list_orderdetail)) {
                                    $firstOrderDetail = reset($list_orderdetail);
                                    $code_order = $firstOrderDetail['code_order'];
                                ?>
                                    <h3 class="mb-0">Mã Đơn Hàng: <?= $code_order ?></h3>
                                <?php } ?>
                            </div>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Ảnh Sản Phẩm</th>
                                    <th scope="col">Tên Sản Phẩm</th>
                                    <th scope="col">Màu</th>
                                    <th scope="col">Size</th>
                                    <th scope="col">Giá Sản Phẩm</th>
                                    <th scope="col">Số Lượng</th>
                                    <th scope="col">Tổng Giá Trị Đơn Hàng</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($list_orderdetail as $orderdetail) {
                                    extract($orderdetail);?>
                                    <tr>
                                        <td><img style="height: 150px; width: 250px" src="<?= $image_product ?>" alt=""></td>
                                        <td><?= $name_product ?></td>
                                        <td><?= $color?></td>
                                        <td><?= $size ?></td>
                                        <td><?=number_format($price_product,0,",",".") ?>VND</td>
                                        <td><?= $quantity ?></td>
                                        <td><?=number_format($unit_price,0,",",".") ?>VND</td>
                                    </tr>
                                <?php }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>