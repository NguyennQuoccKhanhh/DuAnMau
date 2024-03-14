<section class="main_content dashboard_part">
    <div class="main_content_iner ">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="dashboard_header mb_50">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="dashboard_header_title">
                                    <h3>Khôi Phục Loại Hàng</h3>
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
                                    <th scope="col">ID Loại Quần </th>
                                    <th scope="col">Tên Quần</th>
                                    <th scope="col">Tùy Chọn</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($listcategories_restore as $category) {
                                    extract($category);
                                    $khoiphucdm = "index.php?act=khoiphucdm&id=" . $id_category;
                                    // if ($softdelete == 0) {
                                        echo '
                                            <tr>
                                            <th scope="row">' . $id_category . '</th>
                                            <td>' . $name_category . '</td>
                                            <td>
                                                <div class="add_button">
                                                    <a href="' . $khoiphucdm . '"> <input type="button"  class="btn_1" value="Khôi Phục"></a>
                                                </div>
                                            </td>
                                        </tr>
                                            ';
                                    // }
                                }   
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>