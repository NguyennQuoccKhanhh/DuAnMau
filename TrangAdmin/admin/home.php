<section class="main_content dashboard_part">
    <div class="main_content_iner ">
        <div class="container-fluid p-0 sm_padding_15px">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="dashboard_header mb_50">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="dashboard_header_title">
                                    <h3>Thống Kê</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-xl-8">
                    <div class="white_box QA_section card_height_100">
                        <div class="box_header m-0">
                            <div class="main-title">
                                <h3 class="m-0">Biểu đồ số sản phẩm đã được bán theo loại quần</h3>
                            </div>
                        </div>
                        <!-- <div id="home-chart-03" style="height: 280px; position: relative;"></div> -->
                        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

                        <body>
                            <div id="myChart" style="width:100%; max-width:800px; height:500px;"></div>

                            <script>
                                google.charts.load('current', {
                                    'packages': ['corechart']
                                });
                                google.charts.setOnLoadCallback(drawChart);

                                function drawChart() {
                                    const data = google.visualization.arrayToDataTable([
                                        ['Tên Danh Mục', 'Số Lượng Bán'],
                                        <?php
                                        $tong = count($list_thongke_categories_role_product);
                                        $i = 1;
                                        foreach ($list_thongke_categories_role_product as $thongke_categories_role_product) {
                                            extract($thongke_categories_role_product);
                                            if ($i == $tong) {
                                                $dauphay = "";
                                            } else {
                                                $dauphay = ",";
                                            }
                                            echo "['" . $thongke_categories_role_product['name_category'] . "', " . $thongke_categories_role_product['role_product'] . "]" . $dauphay;
                                            $i++;
                                        } ?>
                                    ]);

                                    const options = {

                                    };

                                    const chart = new google.visualization.BarChart(document.getElementById('myChart'));
                                    chart.draw(data, options);
                                }
                            </script>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="list_counter_wrapper white_box mb_30 p-0 card_height_100">
                        <div class="single_list_counter">
                            <?php
                            foreach ($list_order_huy as $order_huy) {
                                extract($order_huy); ?>
                                <h3 class="deep_blue_2"><span class="counter deep_blue_2 "><?= $order_huy ?></span></h3>
                            <?php }
                            ?>
                            <p>Số đơn hàng bị hủy</p>
                        </div>
                        <div class="single_list_counter">
                            <?php
                            foreach ($list_order_ban as $order_ban) {
                                extract($order_ban); ?>
                                <h3 class="deep_blue_2"><span class="counter deep_blue_2"><?= $order_ban ?></span></h3>
                            <?php }
                            ?>
                            <p>Số đơn hàng đã bán</p>
                        </div>
                        <div class="single_list_counter">
                            <?php
                            $total = 0;
                            // var_dump($list_total_thongke);
                            foreach ($list_total_thongke as $total_thongke) {
                                $total += $total_thongke['total_price'];
                            } ?>
                            <h3 class="deep_blue_2"><span class="counter deep_blue_2"><?= $total; ?></span>VND</h3>
                            <p>Tổng số doanh thu</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="white_box QA_section card_height_100">
                        <div class="box_header m-0">
                            <div class="main-title">
                                <h3 class="m-0">Top 5 sản phẩm bán chạy nhất</h3>
                            </div>
                        </div>
                        <div class="QA_table ">

                            <table class="table lms_table_active2">
                                <thead>
                                    <tr>
                                        <th scope="col">Tên Sản Phẩm</th>
                                        <th scope="col">Số Lượng Bán</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($listproducts as $product) {
                                        extract($product); ?>
                                        <tr>
                                            <td><?= $name_product ?></td>
                                            <td><?= $role_product ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="white_box QA_section card_height_100">
                        <div class="box_header m-0">
                            <div class="main-title">
                                <h3 class="m-0">Tổng số sản phẩm theo từng loại quần</h3>
                            </div>
                        </div>
                        <div class="QA_table ">

                            <table class="table lms_table_active2">
                                <thead>
                                    <tr>
                                        <th scope="col">Tên loại</th>
                                        <th scope="col">Số lượng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($list_thongke_admin as $thongke_admin) {
                                        extract($thongke_admin); ?>
                                        <tr>
                                            <td><?= $tenloai ?></td>
                                            <td><?= $countsp ?></td>
                                        </tr>
                                    <?php }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>