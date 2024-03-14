<section class="main_content dashboard_part">
    <div class="main_content_iner ">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="dashboard_header mb_50">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="dashboard_header_title">
                                    <h3>Danh Sách Khách Hàng</h3>
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
                                    <th scope="col">ID Khách Hàng </th>
                                    <th scope="col">Tên Khách Hàng</th>
                                    <th scope="col">Email Khách Hàng</th>
                                    <th scope="col">Số Điện Thoại</th>
                                    <th scope="col">Địa Chỉ</th>
                                    <th scope="col">Mật Khẩu</th>
                                    <th scope="col">Chức Năng</th>
                                    <th scope="col">Tùy Chọn</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($list_users as $user) {
                                    extract($user);
                                    $suauser = "index.php?act=suataikhoan&id_user=" . $id_user;
                                    $khoauser = "index.php?act=khoataikhoan&id_user=" . $id_user;

                                    echo '
                                    <tr>
                                        <td>' . $id_user . ' </td>
                                        <td>' . $name_user . ' </td>
                                        <td>' . $email . ' </td>
                                        <td>' . $phone . ' </td>
                                        <td>' . $address . ' </td>
                                        <td>' . $password . ' </td>
                                        <td>' . $role_user . ' </td>
                                        <td>
                                                <div class="add_button mb_10">
                                                    <a href="' . $suauser . '"> <input type="button" class="btn_1 mb_10" value="Sửa"></a>
                                                    <a href="' . $khoauser . '"> <input type="button" class="btn_1" value="Khóa Tài Khoản"></a>
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