<section class="main_content dashboard_part">
    <div class="main_content_iner ">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="dashboard_header mb_50">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="dashboard_header_title">
                                    <h3>Danh Sách Sản Phẩm</h3>
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

                            <form action="index.php?act=listsp" method="post" style="display: flex;">
                                <div class="serach_field-area">
                                    <div class="search_inner">
                                        <div class="search_field">
                                            <input type="number" name="keyword" placeholder="Search here...">
                                        </div>
                                        <button type="submit"> <img src="../img/icon/icon_search.svg" alt> </button>
                                    </div>
                                </div>
                                <div class="add_button mb_10" style="display: flex;">
                                    <select name="id_category" class="form-control" id="">
                                        <option selected value="0">Categories</option>
                                        <?php
                                        foreach ($listcategories as $category) {
                                            extract($category); ?>
                                            <option value="<?= $id_category ?>">
                                                <?= $name_category ?>
                                            </option>;
                                        <?php   }
                                        ?>
                                    </select>
                                    <input type="submit" class="btn_1" name="send" value="Tìm Kiếm">
                                </div>
                            </form>

                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">ID Sản Phẩm </th>
                                    <th scope="col">Tên Sản Phẩm</th>
                                    <th scope="col">Hình Ảnh Sản Phẩm</th>
                                    <th scope="col">Mô Tả Sản Phẩm</th>
                                    <th scope="col">Giá Sản Phẩm</th>
                                    <th scope="col">Tùy Chọn</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($listproduct as $product) {
                                    extract($product);
                                    $suaproduct = "index.php?act=suasanpham&id_product=" . $id_product;
                                    $xoaproduct = "index.php?act=xoasanpham&id_product=" . $id_product;
                                    $themproduct = "index.php?act=thembienthe&id_product=" . $id_product;
                                    $xemproduct = "index.php?act=xembienthe&id_product=" . $id_product;

                                    $image_path = "upload/" . $image_product;
                                    if (is_file($image_path)) {
                                        $image = "<img src='" . $image_path . "' height='80'>";
                                    } else {
                                        $image = "no photo";
                                    } ?>
                                    <tr>
                                        <td><?=$id_product ?></td>
                                        <td><?=$name_product ?></td>
                                        <td><?=$image ?></td>
                                        <td><?=$description ?></td>
                                        <td><?=number_format($price_product,0,",",".") ?>VND</td>
                                        <td>
                                                <div class="add_button mb_10">
                                                    <a href="<?=$suaproduct?>"> <input type="button" class="btn_1" value="Sửa"></a>
                                                    <a href="<?=$xoaproduct?>"> <input type="button" class="btn_1" value="Xóa"></a>
                                                    
                                                </div>
                                                <div class="add_button mb_10">
                                                    <a href="<?=$themproduct?>"> <input type="button" class="btn_1" value="Thêm Sản Phẩm Biến Thể"></a>
                                                </div>
                                                <div class="add_button">
                                                    <a href="<?=$xemproduct?>"> <input type="button" class="btn_1" value="Xem Sản Phẩm Biến Thể"></a>
                                                </div>
                                            </td>
                                    </tr>
                                <?php }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>