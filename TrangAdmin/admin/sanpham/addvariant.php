<?php if (is_array($product)) {
    extract($product);
} ?>
<section class="main_content dashboard_part">
    <div class="main_content_iner ">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="dashboard_header mb_50">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="dashboard_header_title">
                                    <h3>Thêm Mới Chi Tiết Sản Phẩm</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="white_box mb_30">
                        <div class="main-title">
                            <h3 class="mb-0">Size, Màu, Số Lượng</h3>
                        </div>
                        <div class="modal-body ">
                            <form action="index.php?act=addsanphambienthe" method="post" enctype="multipart/form-data">
                                <div class="mb_10">
                                        <label for="">
                                            <div class="main-title">
                                                <h5 class="mb-0">ID Sản Phẩm:</h5>
                                            </div>
                                        </label>
                                        <input type="text" class="form-control" name="id_product" value="<?= $id_product ?>">
                                </div>
                                <div class="mb_10">
                                    <label for="">
                                        <div class="main-title">
                                            <h5 class="mb-0">Size Quần:</h5>
                                        </div>
                                    </label>
                                    <select name="size" class="form-control" id="">
                                        <?php
                                        foreach ($listsizes as $sizes) {
                                            extract($sizes); ?>
                                            <option value="<?= $id_size ?>">
                                                <?= $size ?>
                                            </option>;
                                        <?php   }
                                        ?>
                                    </select>
                                </div>

                                <div class="mb_10">
                                    <label for="">
                                        <div class="main-title">
                                            <h5 class="mb-0">Màu Quần:</h5>
                                        </div>
                                    </label>
                                    <select name="color" class="form-control" id="">
                                        <?php
                                        foreach ($listcolors as $colors) {
                                            extract($colors); ?>
                                            <option value="<?= $id_color ?>">
                                                <?= $color ?>
                                            </option>;
                                        <?php   }
                                        ?>
                                    </select>
                                </div>
                                <div class="mb_10">
                                    <label for="">
                                        <div class="main-title">
                                            <h5 class="mb-0">Số Lượng:</h5>
                                        </div>
                                    </label>
                                    <input type="number" class="form-control" name="quanity" placeholder="Số Lượng">
                                </div>
                                <div class>
                                    <div class="add_button">
                                       
                                        <input type="submit" name="themmoi" class="btn_1" value="Thêm Mới">
                                        <input type="reset" class="btn_1" value="Nhập Lại">
                                    </div>
                                </div>
                            </form>
                            <?php
                            if (isset($thongBao) && ($thongBao != "")) {
                                echo $thongBao;
                            }

                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>