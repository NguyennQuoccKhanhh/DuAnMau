
<?php
ob_start();
include "../../model/pdo.php";
include "../../model/categories.php";
include "../../model/product.php";
include "../../model/users.php";
include "../../model/post.php";
include "../../model/comment.php";
include "../../model/variants.php";
include "../../model/order.php";
include "../../model/thongke.php";

// include "../../model/banner.php";
$listproducts = thongke_top5();
$list_thongke_admin = loadall_thongke_admin();
$list_order_huy = load_order_huy();
$list_order_ban = load_order_ban();
$list_total_thongke = load_total_thongke();
$list_thongke_categories_role_product = load_thongke_categories_role_product();

include "header.php";

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
            // categories
        case 'adddm':
            $errortenloai = "";
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $countError = 0;

                if (strlen($_POST['tenloai']) === 0) {
                    $errortenloai = "Tên loại quần không được bỏ trống";
                    $countError += 1;
                }
                if ($countError === 0) {
                    $tenloai = $_POST['tenloai'];
                    insert_categories($tenloai);
                    $thongBao = "Thêm Thành Công";
                }
            }
            include "loaiquan/add.php";
            break;
        case 'listdm':
            $listcategories = loadall_categories();
            include "loaiquan/list.php";
            break;
        case 'suadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $suadm = loadone_categories($_GET['id']);
            }
            include "loaiquan/update.php";
            break;
        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $tenloai = $_POST['tenloai'];
                $idhidden  = $_POST['id_category'];
                update_categories($idhidden, $tenloai);
                $thongBao = "Cập Nhật Thành Công";
            }
            $listcategories = loadall_categories();
            // header("Location: index.php?act=updatedm");
            include "loaiquan/list.php";
            break;
        case 'xoamemdm':
            $id_category = $_GET['id'];
            softdelete_categories($id_category);
            $listcategories = loadall_categories();
            include "loaiquan/list.php";
            break;
        case 'khoiphucdm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id_category = $_GET['id'];
                restore_categories($id_category);
            }
            $listcategories_restore = loadall_categories_restore();
            include "loaiquan/khoiphuc.php";
            break;

            //product
        case 'addsp':
            $errorName = $errorDescription = $errorPrice = $errorImage = "";
            if (isset($_POST['themmoi'])) {
                $countError = 0;
                if (strlen($_POST['name']) === 0) {
                    $errorName = "Tên sản phẩm không được bỏ trống";
                    $countError += 1;
                }
                if (strlen($_POST['description']) === 0) {
                    $errorDescription = "Mô tả sản phẩm không được bỏ trống";
                    $countError += 1;
                }
                if (strlen($_POST['price']) === 0) {
                    $errorPrice = "Gía sản phẩm không được bỏ trống";
                    $countError += 1;
                } else if ($_POST['price'] < 10000) {
                    $errorPrice = "Giá sản phẩm phải trên 10.000VND";
                    $countError += 1;
                }
                if ($_FILES['image']['error'] != 0) {
                    $errorImage = "Image gửi lên không hợp lệ";
                    $countError += 1;
                }
                if ($countError === 0) {
                    $id_category = $_POST['id_category'];
                    $name = $_POST['name'];
                    $description = $_POST['description'];
                    $price = $_POST['price'];
                    $image = $_FILES['image']['name'];
                    $dest = "upload/" . basename($image);
                    $stemp = $_FILES['image']['tmp_name'];
                    move_uploaded_file($stemp, $dest);
                    insert_product($name, $image, $description, $price, $id_category);
                    $thongBao = "Thêm Thành Công";
                }
            }
            $listcategories = loadall_categories();
            include "sanpham/add.php";
            break;
        case 'listsp':
            if (isset($_POST['send']) && ($_POST['send'])) {
                $keyword = $_POST['keyword'];
                $id_category = $_POST['id_category'];
            } else {
                $keyword = "";
                $id_category = 0;
            }
            $listcategories = loadall_categories();
            $listproduct = loadall_products($keyword, $id_category);
            include "sanpham/list.php";
            break;
        case 'suasanpham':
            if (isset($_GET['id_product']) && ($_GET['id_product'] > 0)) {
                $product = loadone_products($_GET['id_product']);
            }
            $listcategories = loadall_categories();
            include "sanpham/update.php";
            break;
        case 'xoasanpham':
            if (isset($_GET['id_product']) && ($_GET['id_product'] > 0)) {
                delete_products($_GET['id_product']);
            }
            $listproduct = loadall_products("", 0);
            include "sanpham/list.php";
            break;
        case 'khoiphucpham':
            if (isset($_GET['id_product']) && ($_GET['id_product'] > 0)) {
                delete_products_thungrac($_GET['id_product']);
            }
            $listproduct = loadall_products_thungrac("", 0);
            include "sanpham/thungrac.php";
            break;
        case 'updatesp':
            if (isset($_POST['capnhat'])) {
                $idhidden = $_POST['id_product'];
                $id_category = $_POST['id_category'];
                $name = $_POST['name'];
                $description = $_POST['description'];
                $price = $_POST['price'];
                $image = $_FILES['image']['name'];
                $dest = "upload/" . basename($image);
                $stemp = $_FILES['image']['tmp_name'];
                move_uploaded_file($stemp, $dest);
                update_product($idhidden, $name, $description, $price, $image, $id_category);
            }
            $listproduct = loadall_products("", 0);
            // header("Location: sanpham/list.php");
            include "sanpham/list.php";
            break;


            // variant
        case "thembienthe":
            $product = loadone_products($_GET['id_product']);
            $listsizes = loadall_sizes();
            $listcolors = loadall_colors();
            include "sanpham/addvariant.php";
            break;

        case "addsanphambienthe":
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $id_product = $_POST['id_product'];
                $size = $_POST['size'];
                $color = $_POST['color'];
                $quanity = $_POST['quanity'];
                $existing_variant = get_variant_by_product_size_color($id_product, $size, $color);

                if ($existing_variant) {
                    // Variant exists, update the quantity
                    $id_variant = $existing_variant['id_variant'];
                    update_variant_quantity($id_variant, $quanity);
                    $thongBao = "Cập nhật Thành Công";
                } else {
                    // Variant does not exist, insert a new one
                    insert_variant($id_product, $size, $color, $quanity);
                    $thongBao = "Thêm Thành Công";
                }
            }
            $product = loadone_products($id_product);
            $listsizes = loadall_sizes();
            $listcolors = loadall_colors();
            include "sanpham/addvariant.php";
            break;

        case "xembienthe":
            if (isset($_GET['id_product']) && ($_GET['id_product'] > 0)) {
                $id_product =  $_GET['id_product'];
                $listproduct = loadone_products($id_product);
                extract($listproduct);
                $list_variants_product = load_variants_product($id_product);
            }
            include "sanpham/listvariant.php";
            break;

            //post
        case 'addbaiviet':
            $errorName = $errorContent = $errorImage = "";
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $countError = 0;
                if (strlen($_POST['name_post']) === 0) {
                    $errorName = "Tên bài viết không được bỏ trống";
                    $countError += 1;
                }
                if (strlen($_POST['content_post']) === 0) {
                    $errorContent = "Nội dung bài viết không được bỏ trống";
                    $countError += 1;
                }
                if ($_FILES['image_post']['error'] != 0) {
                    $errorImage = "Image gửi lên không hợp lệ";
                    $countError += 1;
                }
                if ($countError === 0) {
                    $name_post = $_POST['name_post'];
                    $content_post = $_POST['content_post'];
                    $time = date('d/m/Y');

                    $image_post = $_FILES['image_post']['name'];
                    $dest = "uploadpost/" . basename($image_post);
                    $stemp = $_FILES['image_post']['tmp_name'];
                    move_uploaded_file($stemp, $dest);
                    insert_posts($name_post, $image_post, $time, $content_post);
                    $thongBao = "Thêm Thành Công";
                }
            }
            include "baiviet/add.php";
            break;
        case 'listbaiviet':
            $listposts = loadall_posts();
            include "baiviet/list.php";
            break;
        case 'xoabaiviet':
            if (isset($_GET['id_post']) && ($_GET['id_post'])) {
                delete_posts($_GET['id_post']);
            }
            $listposts = loadall_posts();
            include "baiviet/list.php";
            break;
        case 'suabaiviet':
            if (isset($_GET['id_post']) && ($_GET['id_post'] > 0)) {
                $posts = loadone_posts($_GET['id_post']);
            }
            $listposts = loadall_posts();
            include "baiviet/update.php";
            break;
        case 'updatebaiviet':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $idhidden = $_POST['id_post'];
                $name_post = $_POST['name_post'];
                $content_post = $_POST['content_post'];

                $image_post = $_FILES['image_post']['name'];
                $dest = "uploadpost/" . basename($image_post);
                $stemp = $_FILES['image_post']['tmp_name'];
                move_uploaded_file($stemp, $dest);

                update_posts($idhidden, $name_post, $image_post, $content_post);
                $thongBao = "Cập Nhật Thành Công";
            }
            $listposts = loadall_posts();
            include "baiviet/list.php";
            break;

            // binh luan
        case 'listbinhluan':
            $listcomments_admin = loadall_comments_admin();
            include "binhluan/list.php";
            break;
        case 'xoabinhluan':
            $id_comment = $_GET['id_comment'];
            softdelete_comments($id_comment);
            $listcomments_admin = loadall_comments_admin();
            include "binhluan/list.php";
            break;
        case 'khoiphucbinhluan':
            if (isset($_GET['id_comment']) && ($_GET['id_comment'] > 0)) {
                $id_comment = $_GET['id_comment'];
                restore_comments($id_comment);
            }
            $listcomments_restore = loadall_comments_restore();
            include "binhluan/khoiphuc.php";
            break;
            // khach hang
        case 'addtk':
            $errorName = $errorEmail = $errorPhone = $errorAddress = $errorPassword = $errorRole = "";
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
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
                if (strlen($_POST['role']) === 0) {
                    $errorRole = "Chức năng không được bỏ trống";
                    $countError += 1;
                } else if (($_POST['role'] != 0) && ($_POST['role'] != 1)) {
                    $errorRole = "Chức năng chỉ được chọn 0 hoặc 1";
                    $countError += 1;
                }
                if ($countError === 0) {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $address = $_POST['address'];
                    $password = $_POST['password'];
                    $role = $_POST['role'];
                    insert_users_ad($name, $email, $phone, $address, $password, $role);
                    $thongBao = "Đăng ký thành công";
                }
            }
            include "khachhang/add.php";
            break;
        case 'listtk':
            $list_users = loadall_users();
            include "khachhang/list.php";
            break;
        case 'suataikhoan':
            if (isset($_GET['id_user']) && ($_GET['id_user'] > 0)) {
                $suataikhoan = loadone_users($_GET['id_user']);
            }
            include "khachhang/update.php";
            break;
        case 'khoataikhoan':
            if (isset($_GET['id_user']) && ($_GET['id_user'] > 0)) {
                delete_users($_GET['id_user']);
            }
            $list_users = loadall_users();
            include "khachhang/list.php";
            break;
        case 'khoiphuctaikhoan':
            if (isset($_GET['id_user']) && ($_GET['id_user'] > 0)) {
                delete_users_thungrac($_GET['id_user']);
            }
            $list_users = loadall_users_thungrac();
            include "khachhang/thungrac.php";
            break;
        case 'updatetk':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $idhidden = $_POST['id_user'];
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $password = $_POST['password'];
                $role = $_POST['role'];
                update_users_ad($idhidden, $name, $email, $phone, $address, $password, $role);
                $thongBao = "cập nhật thành công";
            }
            $list_users = loadall_users();
            include "khachhang/list.php";
            break;
            // banner
            // case 'addbanner':
            //     if (isset($_POST['themmoi'])) {
            //         $image = $_FILES['image']['name'];
            //         $dest = "uploadbanner/" . basename($image);
            //         $stemp = $_FILES['image']['tmp_name'];
            //         move_uploaded_file($stemp, $dest);
            //         insert_banner($image);
            //         $thongBao = "Thêm Thành Công";
            //     }
            //     include "banner/add.php";
            //     break;
            // case 'listbanner':
            //     $listbanners = loadall_banners();
            //     include "banner/list.php";
            //     break;
            // case 'suabanner':
            //     if (isset($_GET['id_banner']) && ($_GET['id_banner'] > 0)) {
            //         $suabanner = loadone_banners($_GET['id_banner']);
            //     }
            //     include "banner/update.php";
            //     break;
            // case 'updatebanner':
            //     if (isset($_POST['capnhat'])&& ($_POST['capnhat']) ) {
            //         $idhidden = $_POST['id_banner'];

            //         $image = $_FILES['image']['name'];
            //         $dest = "uploadbanner/" . basename($image);
            //         $stemp = $_FILES['image']['tmp_name']; 
            //         move_uploaded_file($stemp, $dest);

            //         update_banners($idhidden, $image);
            //         $thongBao = "Cập Nhật Thành Công";
            //     }
            //     $listbanners = loadall_banners();
            //     include "banner/list.php";
            //     break;
            // case 'xoabanner':
            //     // $listbanners = loadall_banners();
            //     include "banner/list.php";
            //     break;

            // order
        case 'danhsachdonhang':
            $listorders = loadall_orders();
            include "donhang/danhsach.php";
            break;
        case "listorders":
            if (isset($_POST['xacnhandonhang'])) {
                $id_order = $_GET['id_order'];
                update_status_xacnhan($id_order);
                header("Location: index.php?act=listorders");
            }
            if (isset($_POST['huydonhang'])) {
                $id_order = $_GET['id_order'];
                update_status_huy($id_order);
                header("Location: index.php?act=listorders");
            }
            $listorders = loadall_orders();
            include "donhang/danhsach.php";
            break;
        case "xemctdonhang":
            if (isset($_GET['id_order'])) {
                $id_order = $_GET['id_order'];
                $list_orderdetail = loadone_orderdetails($id_order);
            }
            include "donhang/chitietdonhang.php";
            break;
        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}
include "footer.php";
?>