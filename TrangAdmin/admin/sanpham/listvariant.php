<section class="main_content dashboard_part">
    <div class="main_content_iner ">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="dashboard_header mb_50">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="dashboard_header_title">
                                    <h3>Danh Sách Sản Phẩm Có Size, Màu, Số Lượng</h3>
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
                        <!-- <?php
                        $variants = loadone_variants($id_product);
                        extract($variants); ?>
                        <?= $name_product ?> -->
                        <form action="index.php?act=listspvariant" method="post" style="display: flex;">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">ID Biến Thể</th>
                                        <th scope="col">ID Sản Phẩm </th>
                                        <th scope="col">Size</th>
                                        <th scope="col">Màu</th>
                                        <th scope="col">Số lượng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($list_variants_product as $variants_product) {
                                        extract($variants_product); ?>
                                        <tr>
                                            <td><?= $id_variant ?></td>
                                            <td><?= $id_product ?></td>
                                            <td><?= $size ?></td>
                                            <td><?= $color ?></td>
                                            <td><?= $quanity ?></td>
                                        </tr>
                                    <?php }
                                    ?>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>

            </div>
        </div>