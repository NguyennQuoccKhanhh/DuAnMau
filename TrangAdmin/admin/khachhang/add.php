<section class="main_content dashboard_part">
    <div class="main_content_iner ">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="dashboard_header mb_50">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="dashboard_header_title">
                                    <h3>Thêm Mới Khách Hàng</h3>
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
                            <form action="index.php?act=addtk" method="post" >
                                <div class="mb_10">
                                    <label for="">
                                        <div class="main-title">
                                            <h5 class="mb-0">Tên Khách Hàng:</h5>
                                        </div>
                                    </label>
                                    <input type="text" class="form-control" name="name" placeholder="Nhập tên đăng ký của bạn">
                                    <?=$errorName?>
                                </div>
                                <div class="mb_10">
                                    <label for="">
                                        <div class="main-title">
                                            <h5 class="mb-0">Email:</h5>
                                        </div>
                                    </label>
                                    <input type="email" class="form-control" name="email" placeholder="Nhập email đăng ký của bạn">
                                    <?=$errorEmail?>
                                </div>
                                <div class="mb_10">
                                    <label for="">
                                        <div class="main-title">
                                            <h5 class="mb-0">Phone:</h5>
                                        </div>
                                    </label>
                                    <input type="text" class="form-control" name="phone" placeholder="Nhập số điện thoại đăng ký của bạn">
                                    <?=$errorPhone?>
                                </div>
                                <div class="mb_10">
                                    <label for="">
                                        <div class="main-title">
                                            <h5 class="mb-0">Địa chỉ:</h5>
                                        </div>
                                    </label>
                                    <input type="text" class="form-control" name="address" placeholder="Nhập số địa chỉ đăng ký của bạn">
                                    <?=$errorAddress?>
                                </div>
                                <div class="mb_10">
                                        <label for="">
                                            <div class="main-title">
                                                <h5 class="mb-0">Password:</h5>
                                            </div>
                                        </label>
                                        <input type="password" class="form-control" name="password"
                                            placeholder="Nhập password đăng ký của bạn">
                                            <?=$errorPassword?>
                                    </div>
                                <div class="mb_10">
                                        <label for="">
                                            <div class="main-title">
                                                <h5 class="mb-0">Role:</h5>
                                            </div>
                                        </label>
                                        <input type="number" class="form-control" name="role"
                                            placeholder="1.Tài khoản admin 2.Tài khoản khách hàng">
                                            <?=$errorRole?>
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