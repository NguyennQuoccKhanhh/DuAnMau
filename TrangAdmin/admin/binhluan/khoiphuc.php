<section class="main_content dashboard_part">
    <div class="main_content_iner ">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="dashboard_header mb_50">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="dashboard_header_title">
                                    <h3>Danh Sách Bình Luận Đã Ẩn</h3>
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
                        <div class="row">
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">ID Bình Luận </th>
                                    <th scope="col">Tên Khách Hàng</th>
                                    <th scope="col">Nội Dung Bình Luận</th>
                                    <th scope="col">Thời Gian Bình Luận</th>
                                    <th scope="col">ID Sản Phẩm</th>
                                    <th scope="col">Tùy Chọn</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($listcomments_restore as $comment) {
                                    extract($comment);
                                    $khoiphuccomment = "index.php?act=khoiphucbinhluan&id_comment=" . $id_comment;

                                    echo '
                                    <tr>
                                        <td>' . $id_comment . ' </td>
                                        <td>' . $name_user . ' </td>
                                        <td>' . $content . ' </td>
                                        <td>' . $time . ' </td>
                                        <td>' . $id_product . ' </td>
                                        <td>
                                                <div class="add_button mb_10">
                                                    <a href="' . $khoiphuccomment . '"> <input type="button" class="btn_1" value="Khôi Phục"></a>
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