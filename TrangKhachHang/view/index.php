<?php
ob_start();
session_start();
if (!isset($_SESSION["giohang"])) $_SESSION["giohang"] = array();
include "../../model/pdo.php";
include "../../model/users.php";
include "../../model/categories.php";
include "../../model/product.php";
include "../../model/post.php";
include "../../model/comment.php";
include "../../model/variants.php";
include "../../model/order.php";
include "../../model/thongke.php";
include "global.php";
// include "../../model/banner.php";
$dscategory = loadall_categories();
$listsizes = loadall_sizes();
$listcolors = loadall_colors();
$listorders = loadall_orders();
$list_thongke_view = loadall_thongke_view();

include "header.php";
$listproduct_nw = loadall_products_kh_new();
$list_product_role_product = load_role_product();
$listposts = loadall_posts();
if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
            // dang ky dang nhap
        case 'dangky':
            $errorName = $errorEmail = $errorPhone = $errorAddress = $errorPassword = "";
            if ((isset($_POST['dangky'])) && ($_POST['dangky'])) {
                $countError = 0;
                $checkEmail = "/^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i";
                $checkPhone = "/((09|03|07|08|05)+([0-9]{8})\b)/";
                if (strlen($_POST['name']) === 0) {
                    $errorName = "Tên tài khoản không được bỏ trống";
                    $countError += 1;
                }
                if (strlen($_POST['email']) === 0) {
                    $errorEmail = "Email không được bỏ trống";
                    $countError += 1;
                } else if (!preg_match($checkEmail, $_POST['email'])) {
                    $errorEmail = "Email không hợp lệ";
                    $countError += 1;
                } else {
                    $is_email = false;
                    $list_users = loadall_users_themmoi();
                    foreach ($list_users as $users) {
                        if ($_POST['email'] === $users['email']) {
                            $is_email = true;
                        }
                    }
                    if ($is_email) {
                        $errorEmail = "Email vừa nhập đã được đăng ký";
                        $countError += 1;
                    }
                }
                if (strlen($_POST['phone']) === 0) {
                    $errorPhone = "Số điện thoại không được bỏ trống";
                    $countError += 1;
                } else if (!preg_match($checkPhone, $_POST['phone'])) {
                    $errorPhone = "Số điện thoại không hợp lệ";
                    $countError += 1;
                }
                if (strlen($_POST['address']) === 0) {
                    $errorAddress = "Địa chỉ không được bỏ trống";
                    $countError += 1;
                }
                if (strlen($_POST['password']) === 0) {
                    $errorPassword = "Mật khẩu không được bỏ trống";
                    $countError += 1;
                }
                if ($countError === 0) {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $address = $_POST['address'];
                    $password = $_POST['password'];
                    insert_users_kh($name, $email, $phone, $address, $password);
                    header('Location: index.php?act=dangnhap');
                    exit;
                    // $thongBao ="kkkkk";
                }
            }
            include "khachhang/dangky.php";
            break;
        case 'dangnhap':
            if ((isset($_POST['dangnhap'])) && ($_POST['dangnhap'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $check = check_users($name, $email, $password);
                $check_khoa = check_users_khoa($name, $email, $password);
                if (is_array($check)) {
                    $_SESSION['name_user'] = $check;
                    header("Location: index.php");
                }else if(is_array($check_khoa)){
                    $_SESSION['name_user'] = $check_khoa;
                    $thongBao = "Tài khoản của bạn đã bị khóa";
                } else {
                    $thongBao = "Đăng nhập không thành công";
                }
            }
            include "khachhang/dangnhap.php";
            break;
        case 'edit':
            if ((isset($_POST['capnhat'])) && ($_POST['capnhat'])) {
                $idhidden = $_POST['id_hidden'];
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $password = $_POST['password'];
                update_users_kh($idhidden, $name, $email, $phone, $address, $password);
                $_SESSION['name_user'] = check_users($name, $email, $password);
                $thongBao = "Cập nhật thành công";
                header('Location: index.php');
            }
            include "khachhang/edit.php";
            break;
        case "quenmk":
            if (isset($_POST['quenmk'])) {
                $email = $_POST['email'];
                $check_email = check_email_pass($email);
                if (is_array($check_email)) {
                    $thongBao = "Mật khẩu của bạn là: " . $check_email['password'];
                } else {
                    $thongBao = "Email không tồn tại";
                }
            }
            include "khachhang/quenmk.php";
            break;
        case 'thoat':
            session_unset();
            header('Location: index.php?act=dangnhap');
            break;


            // san pham
        case "sanphamct":

            if (isset($_GET['id_sanpham']) && ($_GET['id_sanpham'] > 0)) {
                $id_product = $_GET['id_sanpham'];
                $variants = loadone_variants($id_product);
                extract($variants);
                $listproduct_tergether = load_products_tergether($id_product, $id_category);
                $listcomments = loadall_comments($id_product);
                if (isset($_POST['guidanhgia'])) {
                    $idhidden = $_POST['id_comment'];
                    $content = $_POST['comment'];
                    $time = date('h:i:sa d/m/Y');
                    $name_user = $_SESSION['name_user']['name_user'];
                    insert_comments($content, $time, $id_product, $name_user);
                    header("Location: " . $_SERVER['HTTP_REFERER']);
                    // header("Location: index.php?act=sanphamct&id_sanpham=$id_sanpham");
                }
            }

            include "sanphamct.php";
            break;
        case "sanpham":
            if (isset($_GET['id_category']) && ($_GET['id_category'] > 0)) {
                $id_category = $_GET['id_category'];
                $listcategories_tergether_products = loadall_products("", $id_category);
                include "categories_tergether_products.php";
            } else {
                include "home.php";
            }
            break;
        case "danhmucsanpham":
            $list_products_above_menu = loadall_products_above_menu();
            include "danhmucsanpham.php";
            break;

            // bai viết
        case "baivietct":
            if (isset($_GET['id_post']) && ($_GET['id_post'] > 0)) {
                $chitietbaiviet = loadone_posts($_GET['id_post']);
                extract($chitietbaiviet);
                $listposts_tergether_time = load_posts_tergether_time($time,$_GET['id_post']);
                include "baivietct.php";
            }
            break;

            // giohang
        case "addtocart":
            if (isset($_POST["addtocart"])) {
                // print_r($_POST);
                $idhidden = $_POST["id_hidden"];
                $image = $_POST["image"];
                $name_product = $_POST["name_product"];
                $size = $_POST["size"];
                $color = $_POST["color"];
                $price_product = $_POST["price_product"];
                $id_product = $_POST["id_product"];
                if ((isset($_POST["quantity"])) && ($_POST["quantity"] > 1)) {
                    $quantity = $_POST["quantity"];
                } else {
                    $quantity = 1;
                }
                $bientam = true;

                $i = 0;
                foreach ($_SESSION['giohang'] as $item) {
                    if ($item[0] === $idhidden && $item[4] === $size && $item[5] === $color) {
                        // $item[6] += $quantity;
                        $quantitynew = $quantity + $item[6];
                        $_SESSION['giohang'][$i][6] = $quantitynew;
                        $bientam = false;
                        break;
                    }
                    $i++;
                }
                if ($bientam == true) {
                    $item = [$idhidden, $image, $name_product, $price_product, $size, $color, $quantity, $id_product];
                    $_SESSION['giohang'][] = $item;
                };
            }
            include "cart/viewcart.php";
            break;
        case "delcart":
            if ((isset($_GET['stt'])) && ($_GET['stt'] >= 0)) {
                if (isset($_SESSION['giohang']) && isset($_SESSION['giohang'][$_GET['stt']])) {
                    array_splice($_SESSION['giohang'], $_GET['stt'], 1);
                }
            } else {
                if (isset($_SESSION['giohang'])) unset($_SESSION['giohang']);
            }
            if (isset($_SESSION['giohang']) && (count($_SESSION['giohang']) > 0)) {
                header('Location: index.php?act=addtocart');
            } else {
                header('Location: index.php?act=addtocart');
            }

            break;

            //thanhtoan
        case "thanhtoan":
            include "cart/thanhtoan.php";
            break;
        case "dathang":
            $errorName = $errorPhone = $errorAddress = "";
            if (isset($_POST["dathang"])) {
                $countError = 0;
                $checkPhone = "/((09|03|07|08|05)+([0-9]{8})\b)/";
                if (strlen($_POST['name']) === 0) {
                    $errorName = "Tên tài khoản không được bỏ trống";
                    $countError += 1;
                }
                if (strlen($_POST['phone_user_setting']) === 0) {
                    $errorPhone = "Số điện thoại không được bỏ trống";
                    $countError += 1;
                } else if (!preg_match($checkPhone, $_POST['phone_user_setting'])) {
                    $errorPhone = "Số điện thoại không hợp lệ";
                    $countError += 1;
                }
                if (strlen($_POST['address_user_setting']) === 0) {
                    $errorAddress = "Địa chỉ không được bỏ trống";
                    $countError += 1;
                }
                if ($countError === 0) {
                    $total_amount = $_POST["total_amount"];
                    $name = $_POST["name"];
                    $phone = $_POST["phone_user_setting"];
                    $address = $_POST["address_user_setting"];
                    $payment_methods = $_POST["payment_methods"];
                    $code_order = "KBM" . rand(0, 99999999);
                    $id_user = $_SESSION['name_user']['id_user'];
                    $id_order = insert_oders($name, $phone, $address, $payment_methods, $total_amount, $code_order, $id_user);
                    if ((isset($_SESSION['giohang'])) && ($_SESSION['giohang'] >= 0)) {
                        for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
                            $id_product = $_SESSION['giohang'][$i][7];
                            $image_product = $_SESSION['giohang'][$i][1];
                            $name_product = $_SESSION['giohang'][$i][2];
                            $size = $_SESSION['giohang'][$i][4];
                            $color = $_SESSION['giohang'][$i][5];
                            $price_product = $_SESSION['giohang'][$i][3];
                            $quantity = $_SESSION['giohang'][$i][6];
                            $unit_price = $price_product * $quantity;
                            insert_orderdetail($id_product, $image_product, $name_product,$size,$color, $price_product, $quantity, $unit_price, $id_order);
                            update_roleproduct($quantity, $id_product);
                            // update_quanity($quantity, $id_product);
                        }
                    }
                    unset($_SESSION['giohang']);
                    header("Location: index.php?act=donhang");
                    exit();
                }
            }
            $listorder_kh = load_order_kh($id_user);
            include "cart/thanhtoan.php";
            break;
        case "donhang":
            $listorder_kh = load_order_kh($id_user);
            include "cart/donhang.php";
            break;
        case "huydonhang":
            if (isset($_POST['huydonhang'])) {
                $id_order = $_GET['id_order'];
                update_status_huy_kh($id_order);
                header("Location: index.php?act=huydonhang");
            }
            $listorder_kh = load_order_kh($id_user);
            include "cart/donhang.php";
            break;
        case "chitietdonhang":
            if (isset($_GET['id_order'])) {
                $id_order = $_GET['id_order'];
                $list_orderdetail = loadone_orderdetails($id_order);
            }
            include "cart/chitietdonhang.php";
            break;
        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}

include "footer.php";
