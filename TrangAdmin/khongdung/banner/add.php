<section class="main_content dashboard_part">
        <div class="main_content_iner ">
            <div class="container-fluid p-0">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="dashboard_header mb_50">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="dashboard_header_title">
                                        <h3>Thêm Mới Banner</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="white_box mb_30">
                                <div class="main-title">
                                    <h3 class="mb-0">Banner</h3>
                                </div>
                            <div class="modal-body ">
                                <form action="index.php?act=addbanner" method="post" enctype="multipart/form-data">
                                    <div class="mb_10">
                                        <label for="">
                                            <div class="main-title">
                                                <h5 class="mb-0">ID Banner:</h5>
                                            </div>
                                        </label>
                                        <input type="text" class="form-control" name="maloai" disabled placeholder="auto number">
                                    </div>
                                    <div class="mb_10">
                                        <label for="">
                                            <div class="main-title">
                                                <h5 class="mb-0">Hình Ảnh:</h5>
                                            </div>
                                        </label>
                                        <input type="file" class="form-control" name="image">
                                    </div>
                                    <div class>
                                        <div class="add_button">
                                            <input type="submit" name="themmoi" class="btn_1" value="Thêm Mới" >
                                            <!-- <input type="reset" class="btn_1" value="Nhập Lại" > -->
                                        </div>
                                    </div>
                                </form>
                                <?php
                                    if(isset($thongBao) && ($thongBao != "")){
                                        echo $thongBao;
                                    }
                                    
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>