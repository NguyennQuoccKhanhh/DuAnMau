<section class="main_content dashboard_part">
    <div class="main_content_iner ">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="dashboard_header mb_50">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="dashboard_header_title">
                                    <h3>Danh Sách Đơn Hàng</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="white_box mb_30">
                        <div class="box_header ">
                            <div class="main-title">
                                <h3 class="mb-0">Danh Sách</h3>
                            </div>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">ID Đơn Hàng </th>
                                    <th scope="col">Tên Khách Hàng</th>
                                    <th scope="col">Tên Người Nhận</th>
                                    <th scope="col">SĐT Người Nhận</th>
                                    <th scope="col">Địa Chỉ Người Nhận</th>
                                    <th scope="col">Tổng Giá Trị Đơn Hàng</th>
                                    <th scope="col">Phương Thức Thanh Toán</th>
                                    <th scope="col">Mã Đơn Hàng</th>
                                    <th scope="col">Trạng Thái</th>
                                    <th scope="col">Cập Nhật Trạng Thái</th>
                                    <th scope="col">Tùy Chọn</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($listorders as $orders) {
                                    extract($orders);
                                    $xemctdonhang = "index.php?act=xemctdonhang&id_order=" . $id_order; ?>
                                    <tr>
                                        <th scope="row"><?= $id_order ?></th>
                                        <td><?= $name_user ?></td>
                                        <td><?= $name ?></td>
                                        <td><?= $phone_user_setting ?></td>
                                        <td><?= $address_user_setting ?></td>
                                        <td><?=number_format($total_amount,0,",",".") ?>VND</td>
                                        <td><?= $payment_methods ?></td>
                                        <td><?= $code_order ?></td>
                                        <td>
                                            <?php if ($status == 0) { ?>
                                                <button type="button" class="add_button btn_1">Chờ Xác Nhận</button>
                                            <?php } else if ($status == 1) { ?>
                                                <button type="button" class="add_button btn_1 bg-success">Đang Giao</button>
                                            <?php } else if ($status == 2 ) { ?>
                                                <button type="button" class="add_button btn_1 bg-primary">Giao Thành Công</button>
                                            <?php } else { ?>
                                                <button type="button" class="add_button btn_1 bg-danger">Đơn Hàng Đã Hủy</button>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <form action="index.php?act=listorders&id_order=<?= $id_order ?>" method="post">
                                                <?php if ($status == 0) { ?>
                                                    <button type="submit" name="xacnhandonhang" class="add_button btn_1 bg-info mb_10 ">Xác Nhận</button>
                                                    <button type="submit" name="huydonhang" class="add_button btn_1 bg-danger">Hủy</button>
                                                <?php } else if ($status == 1) { ?>
                                                    <button type="submit" name="xacnhandonhang" class="add_button btn_1 bg-info mb_10">Hoàn thành</button>
                                                    <button type="submit" name="huydonhang" class="add_button btn_1 bg-danger">Hủy</button>
                                                <?php } ?>
                                            </form>
                                        </td>
                                        <td>
                                            <div class="add_button">
                                                <a href="<?=$xemctdonhang?>"> <input type="button" class="btn_1" value="Xem Chi Tiết Đơn Hàng"></a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>