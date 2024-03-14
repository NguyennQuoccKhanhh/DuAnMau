<section class="main_content dashboard_part">
    <div class="main_content_iner ">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="dashboard_header mb_50">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="dashboard_header_title">
                                    <h3>Danh Sách Bài Viết</h3>
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
                                    <th scope="col">ID Bài Viết </th>
                                    <th scope="col">Tên Bài Viết</th>
                                    <th scope="col">Banner Bài Viết</th>
                                    <th scope="col">Time</th>
                                    <th scope="col">Nội Dung Bài Viết</th>
                                    <th scope="col">Tùy Chọn</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($listposts as $post) {
                                    extract($post);
                                    $suabaiviet = "index.php?act=suabaiviet&id_post=" . $id_post;
                                    $xoabaiviet = "index.php?act=xoabaiviet&id_post=" . $id_post;
                                    // if ($softdelete == 0) {
                                    $image_path = "uploadpost/" . $image_post;
                                    if (is_file($image_path)) {
                                        $image = "<img src='" . $image_path . "' height='80'>";
                                    } else {
                                        $image = "no photo";
                                    }
                                    echo '
                                            <tr>
                                            <th scope="row">' . $id_post . '</th>
                                            <td>' . $name_post . '</td>
                                            <td>' . $image . '</td>
                                            <td>' . $time . '</td>
                                            <td>' . $content_post . '</td>
                                            <td>
                                                <div class="add_button">
                                                    <a href="' . $suabaiviet . '"> <input type="button" class="btn_1 mb_10" value="Sửa"></a>
                                                    <a href="' . $xoabaiviet . '"> <input type="button"  class="btn_1" value="Xoá"></a>
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