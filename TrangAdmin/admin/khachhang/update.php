<?php
    if(is_array($suataikhoan)){
        extract($suataikhoan);
    }
?>
<section class="main_content dashboard_part">
    <div class="main_content_iner ">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="dashboard_header mb_50">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="dashboard_header_title">
                                    <h3>Cập Nhật Tài Khoản Khách Hàng</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="white_box mb_30">
                        <div class="main-title">
                            <h3 class="mb-0">Khách Hàng</h3>
                        </div>
                        <div class="modal-body ">
                            <form action="index.php?act=updatetk" method="post" >
                                <div class="mb_10">
                                    <label for="">
                                        <div class="main-title">
                                            <h5 class="mb-0">Tên Khách Hàng:</h5>
                                        </div>
                                    </label>
                                    <input type="text" class="form-control" name="name" value="<?=$name_user?>">
                                </div>
                                <div class="mb_10">
                                    <label for="">
                                        <div class="main-title">
                                            <h5 class="mb-0">Email:</h5>
                                        </div>
                                    </label>
                                    <input type="email" class="form-control" name="email" value="<?=$email?>">
                                </div>
                                <div class="mb_10">
                                    <label for="">
                                        <div class="main-title">
                                            <h5 class="mb-0">Phone:</h5>
                                        </div>
                                    </label>
                                    <input type="text" class="form-control" name="phone" value="<?=$phone?>">
                                </div>
                                <div class="mb_10">
                                    <label for="">
                                        <div class="main-title">
                                            <h5 class="mb-0">Địa chỉ:</h5>
                                        </div>
                                    </label>
                                    <input type="text" class="form-control" name="address" value="<?=$address?>">
                                </div>
                                <div class="mb_10">
                                        <label for="">
                                            <div class="main-title">
                                                <h5 class="mb-0">Password:</h5>
                                            </div>
                                        </label>
                                        <input type="text" class="form-control" name="password" value="<?=$password?>">
                                    </div>
                                <div class="mb_10">
                                        <label for="">
                                            <div class="main-title">
                                                <h5 class="mb-0">Role:</h5>
                                            </div>
                                        </label>
                                        <input type="number" class="form-control" name="role" value="<?=$role_user?>">
                                    </div>
                                <div class>
                                    <div class="add_button">
                                        <input type="hidden" name="id_user" value="<?=$id_user?>">
                                        <input type="submit" name="capnhat" class="btn_1" value="Cập Nhật">
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