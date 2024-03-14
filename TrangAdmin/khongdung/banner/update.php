<?php
if (is_array($suabanner)) {
    extract($suabanner);
}
$image_path = "uploadbanner/" . $image_banner;
if (is_file($image_path)) {
    $image = "<img src='" . $image_path . "' height='80'>";
} else {
    $image = "no photo";
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
                                    <h3>Cập Nhật Banner</h3>
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
                            <form action="index.php?act=updatebanner" method="post" enctype="multipart/form-data">
                                <div class="mb_10">
                                    <label for="">
                                        <div class="main-title">
                                            <h5 class="mb-0">ID Banner:</h5>
                                        </div>
                                    </label>
                                    <input type="text" class="form-control" name="id_banner" disabled placeholder="auto number">
                                </div>
                                <div class="mb_10">
                                    <label for="">
                                        <div class="main-title">
                                            <h5 class="mb-0">Hình Ảnh:</h5>
                                            <?= $image ?>
                                        </div>
                                    </label>
                                    <input type="file" class="form-control" name="image">
                                </div>
                                <div class>
                                    <div class="add_button">

                                        <input type="hidden" name="id_banner" class="btn_1" value="<?= $id_banner ?>">
                                        <input type="submit" name="capnhat" class="btn_1" value="Cập Nhật">
                                        <!-- <input type="reset" class="btn_1" value="Nhập Lại" > -->
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