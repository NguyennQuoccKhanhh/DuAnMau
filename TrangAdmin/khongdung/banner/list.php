<section class="main_content dashboard_part">
    <div class="main_content_iner ">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="dashboard_header mb_50">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="dashboard_header_title">
                                    <h3>Danh Sách Banner</h3>
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
                                    <th scope="col">ID Banner </th>
                                    <th scope="col">Ảnh Banner</th>
                                    <th scope="col">Tùy Chọn</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($listbanners as $banner) {
                                    extract($banner);
                                    $suabanner = "index.php?act=suabanner&id_banner=" . $id_banner;
                                    $xoabanner = "index.php?act=xoabanner&id_banner=" . $id_banner;
                                    $khoiphucbanner = "index.php?act=khoiphucbanner&id=" . $id_banner;
                                    // is_file kiểm tra có phải là file ko
                                    $image_path = "uploadbanner/" . $image_banner;
                                    if (is_file($image_path)) {
                                        $image = "<img src='" . $image_path . "' height='80'>";
                                    } else {
                                        $image = "no photo";
                                    }
                                    echo '
                                            <tr>
                                            <th scope="row">' . $id_banner . '</th>
                                            <td>' . $image . '</td>
                                            <td>
                                                <div class="add_button">
                                                    <a href="' . $suabanner . '"> <input type="button" class="btn_1" value="Sửa"></a>
                                                    <a href="' . $xoabanner . '"> <input type="button" class="btn_1" value="Xóa"></a>
                                                    <a href="' . $khoiphucbanner . '"> <input type="button" class="btn_1" value="Khôi Phục"></a>
                                                </div>
                                            </td>
                                        </tr>
                                            ';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>