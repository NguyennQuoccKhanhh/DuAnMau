<section class="main_content dashboard_part">
    <div class="main_content_iner ">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="dashboard_header mb_50">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="dashboard_header_title">
                                    <h3>Thêm Mới Sản Phẩm</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="white_box mb_30">
                        <div class="main-title">
                            <h3 class="mb-0">Mặt Hàng</h3>
                        </div>
                        <div class="modal-body ">
                            <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">

                                <div class="mb_10">
                                    <label for="">
                                        <div class="main-title">
                                            <h5 class="mb-0">Loại Quần:</h5>
                                        </div>
                                    </label>
                                    <select name="id_category" class="form-control" id="">
                                        <?php
                                        foreach ($listcategories as $category) {
                                            extract($category); ?>
                                            <option value="<?=$id_category?>">
                                                <?= $name_category ?>
                                            </option>;
                                        <?php   }
                                        ?>
                                    </select>
                                </div>
                                <div class="mb_10">
                                    <label for="">
                                        <div class="main-title">
                                            <h5 class="mb-0">Tên Sản Phẩm:</h5>
                                        </div>
                                    </label>
                                    <input type="text" class="form-control" name="name" placeholder="Nhập tên sản phẩm của bạn">
                                    <?=$errorName?>
                                </div>
                                <div class="mb_10">
                                    <label for="">
                                        <div class="main-title">
                                            <h5 class="mb-0">Hình Ảnh:</h5>
                                        </div>
                                    </label>
                                    <input type="file" class="form-control" name="image">
                                    <?=$errorImage?>
                                </div>
                                <div class="mb_10">
                                    <label for="">
                                        <div class="main-title">
                                            <h5 class="mb-0">Giá Sản Phẩm:</h5>
                                        </div>
                                    </label>
                                    <input type="text" class="form-control" name="price" placeholder="Giá sản phẩm phải trên 10.000VND">
                                    <?=$errorPrice?>
                                </div>
                                <div class="mb_10">
                                    <label for="">
                                        <div class="main-title">
                                            <h5 class="mb-0">Mô Tả:</h5>
                                        </div>
                                    </label>
                                    <input type="text" class="form-control" name="description" placeholder="Mô tả sản phẩm">
                                    <?=$errorDescription?>
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