-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 10, 2023 lúc 08:49 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_duanmot`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banners`
--

CREATE TABLE `banners` (
  `id_banner` int(11) NOT NULL,
  `image_banner` varchar(255) NOT NULL,
  `softdlt_banner` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `banners`
--

INSERT INTO `banners` (`id_banner`, `image_banner`, `softdlt_banner`) VALUES
(36, '2.jpg', 0),
(37, '1.jpg', 1),
(38, '3.jpg', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id_category` int(11) NOT NULL,
  `name_category` varchar(200) NOT NULL,
  `softdelete` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id_category`, `name_category`, `softdelete`) VALUES
(1, 'Quần Âu', 0),
(2, 'Quần Jean', 0),
(3, 'Quần Ống Suông', 0),
(4, 'Quần Nhung Tăm', 1),
(5, 'Quần Bó', 1),
(6, 'Quần Ống Đứng', 0),
(7, 'Quần Short', 0),
(8, 'Quần Baggy', 1),
(9, 'Quần Đùi', 1),
(10, 'Quần Bó Ống', 1),
(11, 'Quần Cạp Cao', 1),
(12, 'Quần Âu11', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `colors`
--

CREATE TABLE `colors` (
  `id_color` int(11) NOT NULL,
  `color` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `colors`
--

INSERT INTO `colors` (`id_color`, `color`) VALUES
(1, 'Đen'),
(2, 'Trắng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id_comment` int(11) NOT NULL,
  `content` varchar(200) NOT NULL,
  `time` varchar(255) NOT NULL,
  `id_product` int(11) NOT NULL,
  `name_user` varchar(255) NOT NULL,
  `softdelete` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`id_comment`, `content`, `time`, `id_product`, `name_user`, `softdelete`) VALUES
(11, 'khánh', '07:26:40am 25/11/2023', 74, 'Nguyễn Quốc Khánh', 0),
(12, 'khánhhhh ', '05:48:57pm 26/11/2023', 74, 'khánh', 0),
(13, 'mặt hàng này chất lượng tốt\r\n', '11:02:11am 05/12/2023', 77, 'Khánh Học Code', 0),
(14, 'mặt hàng này thật sự chất lượng\r\n', '07:36:05pm 05/12/2023', 76, 'Nguyễn Quốc Khánh', 0),
(15, 'mặt hàng này chất lượng thật sự', '06:53:52pm 10/12/2023', 77, 'Khánh Học Code', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orderdetails`
--

CREATE TABLE `orderdetails` (
  `id_orderdetail` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `image_product` varchar(200) NOT NULL,
  `name_product` text NOT NULL,
  `id_size` int(11) NOT NULL,
  `id_color` int(11) NOT NULL,
  `price_product` double NOT NULL DEFAULT 0,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `unit_price` double NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `orderdetails`
--

INSERT INTO `orderdetails` (`id_orderdetail`, `id_order`, `id_product`, `image_product`, `name_product`, `id_size`, `id_color`, `price_product`, `quantity`, `unit_price`) VALUES
(16, 36, 77, '../../TrangAdmin/admin/upload/sppp4.jpg', 'Copo Designs Woolrich Klettersack Backpack', 2, 1, 5223523, 6, 31341138),
(17, 36, 75, '../../TrangAdmin/admin/upload/spppp10.jpg', 'Nguyễn Quốc Khánh', 1, 2, 1, 4, 4),
(18, 37, 74, '../../TrangAdmin/admin/upload/spp6.jpg', 'Copo Designs Woolrich Klettersack Backpack', 1, 1, 555, 7, 3885),
(19, 37, 76, '../../TrangAdmin/admin/upload/spppp5.jpg', 'Nguyễn Quốc Khánh', 1, 2, 300000, 7, 2100000),
(20, 38, 71, '../../TrangAdmin/admin/upload/sp2.jpg', 'Aopo Designs Woolrich Klettersack Backpack', 2, 1, 12, 5, 60),
(21, 39, 76, '../../TrangAdmin/admin/upload/spppp5.jpg', 'Nguyễn Quốc Khánh', 2, 2, 300000, 4, 1200000),
(22, 39, 75, '../../TrangAdmin/admin/upload/spppp10.jpg', ' Nguyễn Quốc Khánh', 2, 1, 100000, 6, 600000),
(23, 40, 74, '../../TrangAdmin/admin/upload/spp6.jpg', ' Copo Designs Woolrich Klettersack Backpack', 1, 2, 55000, 5, 275000),
(24, 40, 75, '../../TrangAdmin/admin/upload/spppp10.jpg', ' Nguyễn Quốc Khánh', 1, 2, 100000, 4, 400000),
(25, 41, 76, '../../TrangAdmin/admin/upload/spppp5.jpg', 'Nguyễn Quốc Khánh', 2, 2, 300000, 4, 1200000),
(26, 42, 74, '../../TrangAdmin/admin/upload/spp6.jpg', ' Copo Designs Woolrich Klettersack Backpack', 1, 1, 55000, 6, 330000),
(27, 43, 76, '../../TrangAdmin/admin/upload/spppp5.jpg', 'Nguyễn Quốc Khánh', 2, 1, 300000, 3, 900000),
(28, 43, 75, '../../TrangAdmin/admin/upload/spppp10.jpg', ' Nguyễn Quốc Khánh', 1, 2, 100000, 5, 500000),
(29, 44, 77, '../../TrangAdmin/admin/upload/sppp4.jpg', ' Copo Designs Woolrich Klettersack Backpack', 2, 2, 200000, 4, 800000),
(30, 45, 76, '../../TrangAdmin/admin/upload/spppp5.jpg', 'Nguyễn Quốc Khánh', 1, 1, 300000, 4, 1200000),
(31, 45, 76, '../../TrangAdmin/admin/upload/spppp5.jpg', 'Nguyễn Quốc Khánh', 2, 1, 300000, 4, 1200000),
(32, 46, 75, '../../TrangAdmin/admin/upload/spppp10.jpg', ' Nguyễn Quốc Khánh', 1, 1, 100000, 8, 800000),
(33, 47, 74, '../../TrangAdmin/admin/upload/spp6.jpg', ' Copo Designs Woolrich Klettersack Backpack', 2, 2, 55000, 1, 55000),
(34, 48, 68, '../../TrangAdmin/admin/upload/spp1.jpg', ' Copo Designs Woolrich Klettersack Backpack', 1, 1, 129000, 4, 516000),
(35, 49, 76, '../../TrangAdmin/admin/upload/spppp5.jpg', 'Nguyễn Quốc Khánh', 2, 2, 300000, 6, 1800000),
(36, 49, 75, '../../TrangAdmin/admin/upload/spppp10.jpg', ' Nguyễn Quốc Khánh', 1, 1, 100000, 5, 500000),
(37, 50, 73, '../../TrangAdmin/admin/upload/sppp2.jpg', ' Dopo Designs Woolrich Klettersack Backpack', 1, 0, 123000, 4, 492000),
(38, 51, 73, '../../TrangAdmin/admin/upload/sppp2.jpg', ' Dopo Designs Woolrich Klettersack Backpack', 1, 1, 123000, 4, 492000),
(39, 53, 76, '../../TrangAdmin/admin/upload/spppp5.jpg', 'Nguyễn Quốc Khánh', 2, 1, 300000, 1, 300000),
(40, 54, 74, '../../TrangAdmin/admin/upload/spp6.jpg', ' Copo Designs Woolrich Klettersack Backpack', 1, 1, 55000, 2, 110000),
(41, 55, 75, '../../TrangAdmin/admin/upload/spppp10.jpg', ' Nguyễn Quốc Khánh', 2, 2, 100000, 5, 500000),
(42, 56, 77, '../../TrangAdmin/admin/upload/sppp4.jpg', ' Copo Designs Woolrich Klettersack Backpack', 1, 1, 200000, 3, 600000),
(43, 56, 69, '../../TrangAdmin/admin/upload/spppp3.jpg', '  Eopo Designs Woolrich Klettersack Backpack', 2, 2, 300000, 3, 900000),
(44, 57, 68, '../../TrangAdmin/admin/upload/spp1.jpg', ' Copo Designs Woolrich Klettersack Backpack', 1, 1, 129000, 1, 129000),
(45, 58, 71, '../../TrangAdmin/admin/upload/sp2.jpg', ' Aopo Designs Woolrich Klettersack Backpack', 2, 2, 120000, 5, 600000),
(46, 59, 67, '../../TrangAdmin/admin/upload/sp1.jpg', '    Aopo Designs Woolrich Klettersack Backpack', 1, 1, 600000, 4, 2400000),
(47, 60, 72, '../../TrangAdmin/admin/upload/sp311.jpg', ' Aopo Designs Woolrich Klettersack Backpack', 1, 2, 300000, 1, 300000),
(48, 61, 77, '../../TrangAdmin/admin/upload/sppp4.jpg', ' Copo Designs Woolrich Klettersack Backpack', 2, 1, 200000, 1, 200000),
(49, 62, 75, '../../TrangAdmin/admin/upload/spppp10.jpg', '  Nguyễn Quốc Khánh', 1, 1, 100000, 3, 300000),
(50, 63, 76, '../../TrangAdmin/admin/upload/spppp5.jpg', 'Nguyễn Quốc Khánh', 2, 1, 300000, 1, 300000),
(51, 64, 75, '../../TrangAdmin/admin/upload/spppp10.jpg', '  Nguyễn Quốc Khánh', 2, 2, 100000, 3, 300000),
(52, 64, 74, '../../TrangAdmin/admin/upload/spp6.jpg', ' Copo Designs Woolrich Klettersack Backpack', 1, 2, 55000, 13, 715000),
(53, 65, 75, '../../TrangAdmin/admin/upload/spppp10.jpg', '  Nguyễn Quốc Khánh', 2, 1, 100000, 4, 400000),
(54, 65, 75, '../../TrangAdmin/admin/upload/spppp10.jpg', '  Nguyễn Quốc Khánh', 1, 2, 100000, 6, 600000),
(55, 66, 77, '../../TrangAdmin/admin/upload/sppp4.jpg', ' Copo Designs Woolrich Klettersack Backpack', 1, 1, 200000, 3, 600000),
(56, 67, 74, '../../TrangAdmin/admin/upload/spp6.jpg', ' Copo Designs Woolrich Klettersack Backpack', 1, 2, 55000, 3, 165000),
(57, 68, 76, '../../TrangAdmin/admin/upload/spppp5.jpg', '  Quần âu suông nam WHY NOT thiết kế cạp chun thoải mái, chất Cát Hàn cao cấp dày dặn, form Rộng trẻ trung QARGCD', 2, 1, 300000, 4, 1200000),
(58, 69, 74, '../../TrangAdmin/admin/upload/spp6.jpg', '  Quần Jean Ống Rộng Nam Unisex Wash Black Grey Hàng Cao Cấp - KMHQ10 - KAMEHA STORE', 1, 1, 55000, 1, 55000),
(59, 70, 74, '../../TrangAdmin/admin/upload/spp6.jpg', '  Quần Jean Ống Rộng Nam Unisex Wash Black Grey Hàng Cao Cấp - KMHQ10 - KAMEHA STORE', 1, 1, 55000, 1, 55000),
(60, 71, 77, '../../TrangAdmin/admin/upload/sppp4.jpg', '  Quần Short unisex nam nữ chất cotton cao cấp, phong cách thể thao, mặc thoáng mát, co dãn 4 chiều, quần đùi nam nữ, basi', 1, 1, 200000, 1, 200000),
(61, 71, 76, '../../TrangAdmin/admin/upload/spppp5.jpg', '  Quần âu suông nam WHY NOT thiết kế cạp chun thoải mái, chất Cát Hàn cao cấp dày dặn, form Rộng trẻ trung QARGCD', 1, 1, 300000, 3, 900000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id_order` int(11) NOT NULL,
  `total_amount` double NOT NULL DEFAULT 0,
  `name` varchar(200) NOT NULL,
  `phone_user_setting` text NOT NULL,
  `address_user_setting` varchar(200) NOT NULL,
  `payment_methods` varchar(200) NOT NULL,
  `id_user` int(11) NOT NULL,
  `code_order` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0.Chờ Xác Nhận 1.Đang Giao 2.Giao Thành Công 3.Hủy Đơn Hàng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id_order`, `total_amount`, `name`, `phone_user_setting`, `address_user_setting`, `payment_methods`, `id_user`, `code_order`, `status`) VALUES
(36, 31341142, 'Khánh', '0964583628', 'Nhà của Khánh', 'Thanh toán khi nhận hàng', 20, 'KBM51339900', 2),
(37, 2103885, 'Nguyễn Quốc Khánh', '0964583628', 'Nguyễn Cơ Thạch ', 'Thanh toán khi nhận hàng', 23, 'KBM98493026', 3),
(38, 60, 'Nguyễn Quốc Khánh', '0964583628', 'XN', 'Thanh toán khi nhận hàng', 23, 'KBM94842063', 2),
(39, 1800000, 'Khánh bên bển', '0964583628', '1601', 'Thanh toán khi nhận hàng', 23, 'KBM341133', 2),
(40, 675000, 'Khánh Học Code', '0964583628', '1601', 'Thanh toán khi nhận hàng', 23, 'KBM25459991', 3),
(41, 1200000, 'Khánh đẹp trai', '0964583628', 'Nhà của Khánh', 'Thanh toán khi nhận hàng', 24, 'KBM82477742', 2),
(42, 330000, 'Khánh Học Code', '0964583628', 'Nhà của Khánh', 'Thanh toán khi nhận hàng', 3, 'KBM7787902', 2),
(43, 1400000, 'Nguyễn Quốc Khánh', '0964583628', '1601', 'Thanh toán khi nhận hàng', 3, 'KBM35715580', 2),
(44, 800000, 'Nguyễn Quốc Khánh', '0964583628', 'Nhà của Khánh', 'Thanh toán khi nhận hàng', 7, 'KBM45834669', 2),
(45, 2400000, 'khánh', '0964583128', '1601', 'Thanh toán khi nhận hàng', 7, 'KBM42041331', 3),
(46, 800000, 'khánh', '09999999999', '1601', 'Thanh toán khi nhận hàng', 7, 'KBM75131005', 2),
(47, 55000, 'Khánh học chăm quá', '0964586128', 'nhà', 'Thanh toán khi nhận hàng', 7, 'KBM60180308', 3),
(48, 516000, 'Nguyễn Quốc Khánh', '0964583628', 'XN', 'Thanh toán khi nhận hàng', 7, 'KBM44630889', 3),
(49, 2300000, 'khánh', '0964583628', 'XN', 'Thanh toán khi nhận hàng', 7, 'KBM32573712', 3),
(50, 492000, 'Khánh Học Code', '0964583628', 'nhà', 'Thanh toán khi nhận hàng', 7, 'KBM45779759', 3),
(51, 492000, 'Nguyễn Quốc Khánh', '0964583628', '1601', 'Thanh toán khi nhận hàng', 7, 'KBM11511963', 2),
(53, 300000, 'Nguyễn Quốc Khánh', '0964583628', '1601', 'Thanh toán khi nhận hàng', 7, 'KBM39645272', 3),
(54, 110000, 'Nguyễn Quốc Khánh', '0964583618', '1601', 'Thanh toán online', 7, 'KBM16876780', 3),
(55, 500000, 'Khánh Học Code', '09888888', '1601', 'Thanh toán khi nhận hàng', 7, 'KBM225481', 3),
(56, 1500000, 'Khánh học chăm quá', '0964583628', 'XN', 'Thanh toán khi nhận hàng', 7, 'KBM56009040', 3),
(57, 129000, 'Khánh Học Code', '0964583628', 'Nhà của Khánh', 'Thanh toán khi nhận hàng', 7, 'KBM18668649', 3),
(58, 600000, 'Nguyễn Quốc Khánh', '0964583628', '1601', 'Thanh toán khi nhận hàng', 23, 'KBM81650263', 2),
(59, 2400000, 'Nguyễn Quốc Khánh', '0964583628', '1601', 'Thanh toán khi nhận hàng', 23, 'KBM47727304', 2),
(60, 300000, 'Nguyễn Quốc Khánh', '0964583628', '1601', 'Thanh toán khi nhận hàng', 23, 'KBM2980298', 2),
(61, 200000, 'Nguyễn Quốc Khánh', '0964583628', '1601', 'Thanh toán khi nhận hàng', 23, 'KBM42713660', 3),
(62, 300000, 'Nguyễn Quốc Khánh', '0964583628', 'nhà', 'Thanh toán khi nhận hàng', 23, 'KBM71555699', 2),
(63, 300000, 'Nguyễn Quốc Khánh', '0964583628', 'Nhà của Khánh', 'Thanh toán khi nhận hàng', 23, 'KBM4122397', 2),
(64, 1015000, 'Nguyễn Quốc Khánh', '0964583628', 'XN', 'Thanh toán khi nhận hàng', 23, 'KBM43569860', 3),
(65, 1000000, 'Nguyễn Quốc Khánh', '0964583628', 'XN', 'Thanh toán khi nhận hàng', 23, 'KBM33736111', 2),
(66, 600000, 'Nguyễn Quốc Khánh', '0964583628', 'nhà', 'Thanh toán khi nhận hàng', 23, 'KBM8924063', 2),
(67, 165000, 'Nguyễn Quốc Khánh', '0964583628', 'XN', 'Thanh toán khi nhận hàng', 23, 'KBM84729120', 2),
(68, 1200000, 'Nguyễn Quốc Khánh', '0964583628', 'Nhà của Khánh', 'Thanh toán khi nhận hàng', 23, 'KBM98492017', 3),
(69, 55000, 'Khánh Học Code', '0964583628', '1601', 'Thanh toán khi nhận hàng', 3, 'KBM15005369', 2),
(70, 55000, 'Nguyễn Quốc Khánh', '0964583628', '1601', 'Thanh toán khi nhận hàng', 3, 'KBM26252747', 2),
(71, 1100000, 'Nguyễn Quốc Khánh', '0964583628', 'nhà', 'Thanh toán khi nhận hàng', 7, 'KBM94925047', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id_post` int(11) NOT NULL,
  `image_post` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `name_post` varchar(255) NOT NULL,
  `content_post` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id_post`, `image_post`, `time`, `name_post`, `content_post`) VALUES
(3, '3.jpg', '22/11/2023', 'Người Đẹp Vì Lụa', 'Mỗi đợt hàng về điều đau đầu nhất đối với người bán là đăng content lên Facebook không biết phải viết gì. Thật ra, nghĩ ra cái để viết không phải là điều khó. Vấn đề nằm ở việc viết câu từ như thế nào để thu hút khách hàng, tăng tương tác hiệu quả và giúp'),
(7, '1.jpg', '09/12/2023', 'Top 5 Phong Cách Phối Đồ Hot Nhất', 'Không cần quá nhiều màu sắc, chỉ với một sắc đen cơ bản, bạn có thể trở nên long lanh, lấp lánh, kiêu sa trong những buổi tiệc hay những buổi hẹn hò quan trọng. Với chi tiết thêu tay tỉ mẩn cùng chất liệu voan mềm mại, xuyên thấu được phối một cách khéo l'),
(8, '2.jpg', '09/12/2023', 'Xu Hướng Thời Trang Hiện Nay', 'Trong những năm gần đây, kinh doanh quần áo online đang rất phổ biến và thịnh hành. Ngoài những tiêu chuẩn về chất lượng, mẫu mã, màu sắc, kiểu dáng của sản phẩm, giá tiền phù hợp…thì việc thu hút khách hàng cũng là một khâu cực kỳ quan trọng.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id_product` int(11) NOT NULL,
  `name_product` text NOT NULL,
  `image_product` varchar(200) NOT NULL,
  `price_product` double NOT NULL DEFAULT 0,
  `description` text DEFAULT NULL,
  `id_category` int(11) NOT NULL,
  `role_product` tinyint(4) NOT NULL DEFAULT 0,
  `softdelete` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id_product`, `name_product`, `image_product`, `price_product`, `description`, `id_category`, `role_product`, `softdelete`) VALUES
(67, '  Quần Tây Nam - Quần Âu Nam cao cấp Trendyman Công Sở Dáng Ôm Chuẩn Vải lụa Không Nhăn Không Xù cao cấp', 'sp1.jpg', 600000, 'Trendyman xin phép giới thiệu đến các bạn mẫu sản phẩm mới: Quần Tây Nam - quần nam Trendyman Công Sở Đen Cá Tính Dáng Ôm Chuẩn Vải mỏng nhẹ Không Nhăn không xù ------------------------------------------  * THÔNG TIN SẢN PHẨM: - Sản Phẩm Quần Âu đen nam lần này của shop sẽ được lựa chọn vải Mỏng hơn để tạo cảm giác thoải mái khi mặc , khách hàng có yêu cầu vải dày thì cân nhắc trước khi đặt hàng nha ạ - Quần âu nam ống côn sẽ giúp các chàng trông chuẩn soái ca. - Trong tủ có e này thì cực dễ phối đồ: sơmi, thun, vest đều đẹp - Chất Liệu: Vải lụa co giãn nhẹ, mềm mịn , Mỏng nhẹ - Giá Thành Tiết kiệm chi phí cho mình , sản phẩm dùng để mặc hằng ngày đi làm đi học quần vãi nam ống côn đủ size từ 28 đến 35 cho khách từ 45-80 kg mặc vừa: Size 28 : Dưới 42-50kg, cao 1m60 - 1m65 / Chiều dài quần 94cm, vòng bụng 74cm, ống 16 cm Size 29 : Cân nặng 49 - 55kg, cao 1m62 - 1m72 / Chiều dài quần 95cm, vòng bụng 76cm, ống 16,5 cm Size 30 : Cân nặng 55 - 60kg, cao 1m63 - 1m73 / Chiều dài quần 96cm, vòng bụng 78cm, ống côn 17 cm Size 31 : Cân nặng 60 - 64kg, cao 1m65 - 1m74 / Chiều dài quần 97cm, vòng bụng 80cm, ống côn 17,5 cm Size 32 : Cân nặng 64 - 68kg, cao 1m68 - 1m75 / Chiều dài quần 98cm, vòng bụng 84cm, ống côn 18  cm Size 33 : Cân nặng 68 - 71kg, cao 1m72 - 1m77 / Chiều dài quần 99cm, vòng bụng 88cm, ống côn 18,5 cn Size 34 : Cân nặng 71 - 74kg, cao 1m72 - 1m80 / Chiều dài quần 100cm, vòng bụng 90cm, ống côn 18,5 cm Size 35 : Cân nặng 74 - 78kg, cao 1m75 - 1m85 / Chiều dài quần 102 cm, vòng bụng 92cm, ống côn 19,5 cm Size 36 : Cân nặng 78 - 82kg, cao 1m75 - 1m85 / Chiều dài quần 104 cm, vòng bụng 94cm, ống côn 21,5 cm - Có 3 màu cơ bản: Đen, Xanh than và Ghi sáng * Bảng size chỉ mang tính chất tham khảo, tùy thuộc vào số đo cơ thể và chất liệu vải khác nhau sẽ có sự chênh lệch nhất định.  =============== * Quần tây đen nam Trendyman CAM KẾT:  - SHOP không bán hàng giả, hàng nhái, chất lượng luôn là hàng đầu để shop có thể phát triển thương hiệu và vươn xa.  - Quần vải đi học đen ống côn 100% giống mô tả - Tư vấn nhiệt tình, chu đáo luôn lắng nghe khách hàng để phục vụ tốt.  - Giao hàng nhanh đúng tiến độ không phải để quý khách chờ đợi lâu để nhận hàng.  ============== * Đổi trả theo đúng quy định của Shopee  1. Điều kiện áp dụng (trong vòng 07 ngày kể từ khi nhận sản phẩm):  - Hàng hoá vẫn còn mới, chưa qua sử dụng  - Hàng hóa hư hỏng do vận chuyển hoặc do nhà sản xuất.  2. Trường hợp được chấp nhận:  - Không đủ số lượng, không đủ bộ như trong đơn hàng 3. Trường hợp không đủ điều kiện áp dụng chính sách:  - Quá 07 ngày kể từ khi Quý khách nhận hàng   - Gửi lại hàng không đúng mẫu mã, không phải hàng của shop.  - Đặt nhầm sản phẩm, chủng loại, không thích, không hợp,... Ấn theo dõi để ủng hộ Trendyman và tham khảo các sản phẩm mới của shop, “ Quần âu áo sơ mi Trendyman” rất hân hạnh được phục vụ quý khách. #quan #trendyman #au #nam #tay #den #quanaunam #quantaynam #quanaucapcao #quanvainam #quanaudennam #quannam', 1, 4, 0),
(68, '  Quần Jean Ống Rộng Nam Unisex Wash Black Grey Hàng Cao Cấp - KMHQ10 - KAMEHA STORE', 'spp1.jpg', 129000, 'Quần Jean Ống Rộng Nam Nữ Unisex Wash Black Grey Hàng Cao Cấp - KMHQ10 - KAMEHA STORE  KAMEHA STORE Quần jean nam nữ hottrend với vải jean chính phẩm được sản xuất tại nhà máy dệt may TP.HCM cho chất lượng sản phẩm cao cấp.   ✔️Đây là một trong những chiếc quần jean hot nhất hiện nay đáng để sở hữu. Phong cách Hàn Quốc đơn giản phù hợp trong mọi hoàn cảnh và đối tượng gặp gỡ. Quần có màu xanh bắt mắt, thể hiện sự trẻ trung và lịch lãm. ✔️ Các mẫu jean mang vẻ đẹp tính tế và hiện đại  Quần Jean Ống Rộng Nam Nữ Unisex Wash Hàng Cao Cấp  CÁCH CHỌN SIZE  👖 Size M ( Chiều dài quần: 103cm, Vòng eo: 70cm, Mông: 96cm, Đùi: 58cm, Ống: 50cm, Cân Nặng: <55kg )  👖 Size L ( Chiều dài quần: 104cm,Vòng eo:	76cm, Mông: 102cm, Đùi: 60cm, Ống: 52cm, Cân Nặng: <63kg )  👖 Size XL ( Chiều dài quần: 108cm, Vòng eo: 80cm, Mông:	106cm, Đùi: 64cm, Ống: 54cm, Cân Nặng: <70kg )  👖 Size 2XL ( Chiều dài quần:	110cm, Vòng eo: 86cm, Mông: 108cm, Đùi: 66cm, Ống: 56cm, Cân Nặng: <80kg )  LƯU Ý: Bảng Size chỉ mang tính chất tham khảo và không có tiêu chuẩn chung thực tế. Hãy nhắn tin cho shop để được tư vấn size chuẩn nhất với bạn  ✔️ Có phải bạn đang muốn tìm cho mình một chiếc Quần Jean Ống Rộng Nam Nữ Unisex Wash Hàng Cao Cấp ?   ✔️  Chiếc Quần Jean Ống Rộng Nam Nữ Unisex Wash Hàng Cao Cấp  dành cho bạn này tại cửa hàng chúng tôi bán khoảng 9.000 chiếc mỗi tháng. Đã bán hơn 20.000 chiếc chỉ tính riêng trên hệ thống của Shopee Việt Nam, chưa kể đến những kênh bán khác! Bởi vì đây là một chiếc quần jean mà cực kỳ dễ phối đồ từ áo thun, hoodie, áo khoác..cho đến các loại sneakers, boots.  ✔️ TẠI SAO NÊN CHỌN MUA Quần Jean Ống Rộng Nam Nữ Unisex Wash Hàng Cao Cấp - CHẤT LƯỢNG: Chất vải jean CHÍNH PHẨM gồm 95% cotton ( thấm hút, vải mềm) và 5% spandex ( độ co dãn). - GIÁ CẢ : Chúng tôi trực tiếp sản xuất với số lượng lớn. Nên so với các quần cùng chất lượng giá cả của chiếc quần jean baggy thì giá tốt nhất cho bạn hiện tại.   ✔️ Thông Tin Sản Phẩm:  Quần Jean Ống Rộng Nam Nữ Unisex Wash Hàng Cao Cấp   - Gói bao gồm: 1 * quần túi zip - Kiểu Dáng: Quần Jean Ống Rộng Nam Nữ Unisex Wash Hàng Cao Cấp - Mầu Sắc: Black Grey - Chất liệu:  jean cao cấp, ko phai mầu - Số lượng : hàng đủ size , xuất khẩu', 2, 5, 0),
(69, '  Quần âu suông nam WHY NOT thiết kế cạp chun thoải mái, chất Cát Hàn cao cấp dày dặn, form Rộng trẻ trung QARGCD', 'spppp3.jpg', 300000, '✅ Chi tiết sản phẩm:   - Tên sản phẩm: Quần âu suông nam WHY NOT thiết kế cạp chun thoải mái, chất Cát Hàn cao cấp dày dặn, form Rộng trẻ trung, thanh lịch, tôn dáng QARGCD  - Form Suông rộng thoải mái, trẻ trung, ống suông che khuyết điểm, tôn mọi dáng người  👉 CHẤT LIỆU: Quần âu nam sử dụng chất liệu vải 100% Cát Hàn dày dặn, tăng khả năng co giãn, chống nhăn, chống xù lông và mang lại độ bền cao   👉 MÀU SẮC: ĐEN, GHI, BE (Vì điều kiện ánh sáng và màn hình khác nhau, màu sắc trong ảnh có thể lệch với sản phẩm thật 2-5%)  - Size: M, L, XL, XXL (đến 100kg)  👉 PHONG CÁCH:  Thời trang Lịch sự, giản dị, dễ mặc, dễ phối đồ, màu sắc nhã nhặn, không quá nổi bật nhưng cũng không kém phần trẻ trung và năng động. Phù hợp mặc đi học, đi làm, đi chơi.  ✅ 𝐖𝐇𝐘 𝐍𝐎𝐓 cam kết:  - Chất lượng dịch vụ trước và sau bán hàng được ưu tiên hàng đầu  - WHY NOT hoàn toàn chịu trách nhiệm nếu sản phẩm đến tay khách hàng không như kỳ vọng  - Chính Sách Bảo Hành sản phẩm 14 ngày  - 100% hình ảnh do Team WHY NOT thực hiện  - Chất lượng sản phẩm được chứng nhận theo Quy chuẩn Quốc gia  - Sản phẩm bao gồm đầy đủ tem, nhãn, mác, bao bì  - Sản phẩm Made in Viet Nam. Chính hãng WHY NOT  ✅ Chính sách đổi trả sản phẩm:  - Thời gian đổi trả hàng: 14 ngày được tính từ ngày nhận hàng  - Sản phẩm mới còn nguyên tem nhãn mác, bao bì sản phẩm  - Sản phẩm không bị dơ bẩn, chưa giặt, chưa qua sử dụng, chưa qua sửa chữa  - Đổi sang sản phẩm mới hoặc đơn hàng mới có giá trị lớn hơn hoặc bằng giá trị đơn hàng đã mua  - Sản phẩm giao nhầm hoặc bị lỗi do vận chuyển và do nhà sản xuất  - Sản phẩm quần lót, tất, phụ kiện và sản phẩm tặng kèm không được thực hiện chính sách đổi hàng.  ✅ Lưu ý: Nếu bạn gặp bất cứ vấn đề gì về sản phẩm, xin đừng vội đánh giá, hãy liên hệ lại ngay WHY NOT để được hỗ trợ một cách chu đáo nhất! WHY NOT xin cảm ơn.  #quanausuong #quanaucapchun #quanaucapchunnam #quanaucochun #quantaycapchun #quanausuongnam #quanauongrong #quanauongsuong #quanongrong #quantaysuong #quantaysuongnam #quanaunam #quantaynam #quandai #quancongso #quannam #quannamdep #quantaydep #quanvest #quanaudep #quanautrang #quanauden', 3, 3, 0),
(70, ' Dopo Designs Woolrich Klettersack Backpack', 'sppp1.jpg', 131000, 'Mauris blandit, metus a venenatis lacinia, felis enim tincidunt est, condimentum vulputate orci augue eu metus. Fusce dictum, nisi et semper ultricies, felis tortor blandit odio, egestas consequat pur..', 7, 0, 1),
(71, '  Quần Tây Nam - Quần Âu Nam cao cấp Trendyman Công Sở Dáng Ôm Chuẩn Vải lụa Không Nhăn Không Xù cao cấp', 'sp2.jpg', 120000, 'Trendyman xin phép giới thiệu đến các bạn mẫu sản phẩm mới: Quần Tây Nam - quần nam Trendyman Công Sở Đen Cá Tính Dáng Ôm Chuẩn Vải mỏng nhẹ Không Nhăn không xù ------------------------------------------  * THÔNG TIN SẢN PHẨM: - Sản Phẩm Quần Âu đen nam lần này của shop sẽ được lựa chọn vải Mỏng hơn để tạo cảm giác thoải mái khi mặc , khách hàng có yêu cầu vải dày thì cân nhắc trước khi đặt hàng nha ạ - Quần âu nam ống côn sẽ giúp các chàng trông chuẩn soái ca. - Trong tủ có e này thì cực dễ phối đồ: sơmi, thun, vest đều đẹp - Chất Liệu: Vải lụa co giãn nhẹ, mềm mịn , Mỏng nhẹ - Giá Thành Tiết kiệm chi phí cho mình , sản phẩm dùng để mặc hằng ngày đi làm đi học quần vãi nam ống côn đủ size từ 28 đến 35 cho khách từ 45-80 kg mặc vừa: Size 28 : Dưới 42-50kg, cao 1m60 - 1m65 / Chiều dài quần 94cm, vòng bụng 74cm, ống 16 cm Size 29 : Cân nặng 49 - 55kg, cao 1m62 - 1m72 / Chiều dài quần 95cm, vòng bụng 76cm, ống 16,5 cm Size 30 : Cân nặng 55 - 60kg, cao 1m63 - 1m73 / Chiều dài quần 96cm, vòng bụng 78cm, ống côn 17 cm Size 31 : Cân nặng 60 - 64kg, cao 1m65 - 1m74 / Chiều dài quần 97cm, vòng bụng 80cm, ống côn 17,5 cm Size 32 : Cân nặng 64 - 68kg, cao 1m68 - 1m75 / Chiều dài quần 98cm, vòng bụng 84cm, ống côn 18  cm Size 33 : Cân nặng 68 - 71kg, cao 1m72 - 1m77 / Chiều dài quần 99cm, vòng bụng 88cm, ống côn 18,5 cn Size 34 : Cân nặng 71 - 74kg, cao 1m72 - 1m80 / Chiều dài quần 100cm, vòng bụng 90cm, ống côn 18,5 cm Size 35 : Cân nặng 74 - 78kg, cao 1m75 - 1m85 / Chiều dài quần 102 cm, vòng bụng 92cm, ống côn 19,5 cm Size 36 : Cân nặng 78 - 82kg, cao 1m75 - 1m85 / Chiều dài quần 104 cm, vòng bụng 94cm, ống côn 21,5 cm - Có 3 màu cơ bản: Đen, Xanh than và Ghi sáng * Bảng size chỉ mang tính chất tham khảo, tùy thuộc vào số đo cơ thể và chất liệu vải khác nhau sẽ có sự chênh lệch nhất định.  =============== * Quần tây đen nam Trendyman CAM KẾT:  - SHOP không bán hàng giả, hàng nhái, chất lượng luôn là hàng đầu để shop có thể phát triển thương hiệu và vươn xa.  - Quần vải đi học đen ống côn 100% giống mô tả - Tư vấn nhiệt tình, chu đáo luôn lắng nghe khách hàng để phục vụ tốt.  - Giao hàng nhanh đúng tiến độ không phải để quý khách chờ đợi lâu để nhận hàng.  ============== * Đổi trả theo đúng quy định của Shopee  1. Điều kiện áp dụng (trong vòng 07 ngày kể từ khi nhận sản phẩm):  - Hàng hoá vẫn còn mới, chưa qua sử dụng  - Hàng hóa hư hỏng do vận chuyển hoặc do nhà sản xuất.  2. Trường hợp được chấp nhận:  - Không đủ số lượng, không đủ bộ như trong đơn hàng 3. Trường hợp không đủ điều kiện áp dụng chính sách:  - Quá 07 ngày kể từ khi Quý khách nhận hàng   - Gửi lại hàng không đúng mẫu mã, không phải hàng của shop.  - Đặt nhầm sản phẩm, chủng loại, không thích, không hợp,... Ấn theo dõi để ủng hộ Trendyman và tham khảo các sản phẩm mới của shop, “ Quần âu áo sơ mi Trendyman” rất hân hạnh được phục vụ quý khách. #quan #trendyman #au #nam #tay #den #quanaunam #quantaynam #quanaucapcao #quanvainam #quanaudennam #quannam', 1, 15, 0),
(72, '  Quần Tây Nam - Quần Âu Nam cao cấp Trendyman Công Sở Dáng Ôm Chuẩn Vải lụa Không Nhăn Không Xù cao cấp', 'sp311.jpg', 300000, 'Trendyman xin phép giới thiệu đến các bạn mẫu sản phẩm mới: Quần Tây Nam - quần nam Trendyman Công Sở Đen Cá Tính Dáng Ôm Chuẩn Vải mỏng nhẹ Không Nhăn không xù ------------------------------------------  * THÔNG TIN SẢN PHẨM: - Sản Phẩm Quần Âu đen nam lần này của shop sẽ được lựa chọn vải Mỏng hơn để tạo cảm giác thoải mái khi mặc , khách hàng có yêu cầu vải dày thì cân nhắc trước khi đặt hàng nha ạ - Quần âu nam ống côn sẽ giúp các chàng trông chuẩn soái ca. - Trong tủ có e này thì cực dễ phối đồ: sơmi, thun, vest đều đẹp - Chất Liệu: Vải lụa co giãn nhẹ, mềm mịn , Mỏng nhẹ - Giá Thành Tiết kiệm chi phí cho mình , sản phẩm dùng để mặc hằng ngày đi làm đi học quần vãi nam ống côn đủ size từ 28 đến 35 cho khách từ 45-80 kg mặc vừa: Size 28 : Dưới 42-50kg, cao 1m60 - 1m65 / Chiều dài quần 94cm, vòng bụng 74cm, ống 16 cm Size 29 : Cân nặng 49 - 55kg, cao 1m62 - 1m72 / Chiều dài quần 95cm, vòng bụng 76cm, ống 16,5 cm Size 30 : Cân nặng 55 - 60kg, cao 1m63 - 1m73 / Chiều dài quần 96cm, vòng bụng 78cm, ống côn 17 cm Size 31 : Cân nặng 60 - 64kg, cao 1m65 - 1m74 / Chiều dài quần 97cm, vòng bụng 80cm, ống côn 17,5 cm Size 32 : Cân nặng 64 - 68kg, cao 1m68 - 1m75 / Chiều dài quần 98cm, vòng bụng 84cm, ống côn 18  cm Size 33 : Cân nặng 68 - 71kg, cao 1m72 - 1m77 / Chiều dài quần 99cm, vòng bụng 88cm, ống côn 18,5 cn Size 34 : Cân nặng 71 - 74kg, cao 1m72 - 1m80 / Chiều dài quần 100cm, vòng bụng 90cm, ống côn 18,5 cm Size 35 : Cân nặng 74 - 78kg, cao 1m75 - 1m85 / Chiều dài quần 102 cm, vòng bụng 92cm, ống côn 19,5 cm Size 36 : Cân nặng 78 - 82kg, cao 1m75 - 1m85 / Chiều dài quần 104 cm, vòng bụng 94cm, ống côn 21,5 cm - Có 3 màu cơ bản: Đen, Xanh than và Ghi sáng * Bảng size chỉ mang tính chất tham khảo, tùy thuộc vào số đo cơ thể và chất liệu vải khác nhau sẽ có sự chênh lệch nhất định.  =============== * Quần tây đen nam Trendyman CAM KẾT:  - SHOP không bán hàng giả, hàng nhái, chất lượng luôn là hàng đầu để shop có thể phát triển thương hiệu và vươn xa.  - Quần vải đi học đen ống côn 100% giống mô tả - Tư vấn nhiệt tình, chu đáo luôn lắng nghe khách hàng để phục vụ tốt.  - Giao hàng nhanh đúng tiến độ không phải để quý khách chờ đợi lâu để nhận hàng.  ============== * Đổi trả theo đúng quy định của Shopee  1. Điều kiện áp dụng (trong vòng 07 ngày kể từ khi nhận sản phẩm):  - Hàng hoá vẫn còn mới, chưa qua sử dụng  - Hàng hóa hư hỏng do vận chuyển hoặc do nhà sản xuất.  2. Trường hợp được chấp nhận:  - Không đủ số lượng, không đủ bộ như trong đơn hàng 3. Trường hợp không đủ điều kiện áp dụng chính sách:  - Quá 07 ngày kể từ khi Quý khách nhận hàng   - Gửi lại hàng không đúng mẫu mã, không phải hàng của shop.  - Đặt nhầm sản phẩm, chủng loại, không thích, không hợp,... Ấn theo dõi để ủng hộ Trendyman và tham khảo các sản phẩm mới của shop, “ Quần âu áo sơ mi Trendyman” rất hân hạnh được phục vụ quý khách. #quan #trendyman #au #nam #tay #den #quanaunam #quantaynam #quanaucapcao #quanvainam #quanaudennam #quannam', 1, 1, 0),
(73, '  Quần Short unisex nam nữ chất cotton cao cấp, phong cách thể thao, mặc thoáng mát, co dãn 4 chiều, quần đùi nam nữ, basi', 'sppp2.jpg', 123000, 'Quần Short trơn, Quần Short Comp chất tổ ong cao cấp, quần Short đai lưng túi hộp, quần Short Essentials      ✪ Chất Liệu Vải :  cotton cao cấp 100%, co giãn 4 chiều, vải mềm, mịn, thoáng mát, không xù lông.      ✪ Kĩ thuật may: Đường may chuẩn chỉnh, tỉ mỉ, chắc chắn      ✪ Hình in: Công nghệ in tiên tiến đảm bảo độ bền màu và hình in ngay cả khi giặt máy.      ✪ Kiểu Dáng :Form Rộng Thoải Mái      ✪ Full size nam nữ : 40 - 85 kg    I. SHOP CAM KẾT  - Sản phẩm quần Short đùi Unisex cotton cao cấp giống mô tả 100%  - Hình ảnh sản phẩm là ảnh thật, các hình hoàn toàn do shop tự thiết kế.  - Kiểm tra  cẩn thận trước khi gói hàng giao cho Quý Khách  - Hàng có sẵn, giao hàng ngay khi nhận được đơn   - Hoàn tiền nếu sản phẩm không giống với mô tả  - Chấp nhận đổi hàng khi size không vừa trong 3 ngày.    II. HỖ TRỢ ĐỔI TRẢ THEO QUY ĐỊNH CỦA SHOPEE  - Điều kiện áp dụng (trong vòng 2 ngày kể từ khi nhận sản phẩm)   - Hàng hoá bị rách, in lỗi, bung chỉ, và các lỗi do vận chuyển hoặc do nhà sản xuất.  1. Trường hợp được chấp nhận:   - Hàng giao sai size khách đã đặt hàng   - Giao thiếu hàng   2. Trường hợp không đủ điều kiện áp dụng chính sách:   - Quá 2 ngày kể từ khi Quý khách nhận hàng   - Gửi lại hàng không đúng mẫu mã, không phải sản phẩm của KARLEY STORE  - Không thích, không hợp, đặt nhầm mã, nhầm màu,...     #aothun #thun #aophong #unisex #aothunnam #aothunnu #freesize #oversize #aophongloang #taylo #formrong #hanquoc #aothuntaylo #aocotron #aothunformrong #samexoy #aosamexoy #aodoi #aothunmixmau #aophongmixmau #aothunmix #aophongmix #aoswweater #sweater #quanshort', 7, 18, 0),
(74, '  Quần Jean Ống Rộng Nam Unisex Wash Black Grey Hàng Cao Cấp - KMHQ10 - KAMEHA STORE', 'spp6.jpg', 55000, 'Quần Jean Ống Rộng Nam Nữ Unisex Wash Black Grey Hàng Cao Cấp - KMHQ10 - KAMEHA STORE  KAMEHA STORE Quần jean nam nữ hottrend với vải jean chính phẩm được sản xuất tại nhà máy dệt may TP.HCM cho chất lượng sản phẩm cao cấp.   ✔️Đây là một trong những chiếc quần jean hot nhất hiện nay đáng để sở hữu. Phong cách Hàn Quốc đơn giản phù hợp trong mọi hoàn cảnh và đối tượng gặp gỡ. Quần có màu xanh bắt mắt, thể hiện sự trẻ trung và lịch lãm. ✔️ Các mẫu jean mang vẻ đẹp tính tế và hiện đại  Quần Jean Ống Rộng Nam Nữ Unisex Wash Hàng Cao Cấp  CÁCH CHỌN SIZE  👖 Size M ( Chiều dài quần: 103cm, Vòng eo: 70cm, Mông: 96cm, Đùi: 58cm, Ống: 50cm, Cân Nặng: <55kg )  👖 Size L ( Chiều dài quần: 104cm,Vòng eo:	76cm, Mông: 102cm, Đùi: 60cm, Ống: 52cm, Cân Nặng: <63kg )  👖 Size XL ( Chiều dài quần: 108cm, Vòng eo: 80cm, Mông:	106cm, Đùi: 64cm, Ống: 54cm, Cân Nặng: <70kg )  👖 Size 2XL ( Chiều dài quần:	110cm, Vòng eo: 86cm, Mông: 108cm, Đùi: 66cm, Ống: 56cm, Cân Nặng: <80kg )  LƯU Ý: Bảng Size chỉ mang tính chất tham khảo và không có tiêu chuẩn chung thực tế. Hãy nhắn tin cho shop để được tư vấn size chuẩn nhất với bạn  ✔️ Có phải bạn đang muốn tìm cho mình một chiếc Quần Jean Ống Rộng Nam Nữ Unisex Wash Hàng Cao Cấp ?   ✔️  Chiếc Quần Jean Ống Rộng Nam Nữ Unisex Wash Hàng Cao Cấp  dành cho bạn này tại cửa hàng chúng tôi bán khoảng 9.000 chiếc mỗi tháng. Đã bán hơn 20.000 chiếc chỉ tính riêng trên hệ thống của Shopee Việt Nam, chưa kể đến những kênh bán khác! Bởi vì đây là một chiếc quần jean mà cực kỳ dễ phối đồ từ áo thun, hoodie, áo khoác..cho đến các loại sneakers, boots.  ✔️ TẠI SAO NÊN CHỌN MUA Quần Jean Ống Rộng Nam Nữ Unisex Wash Hàng Cao Cấp - CHẤT LƯỢNG: Chất vải jean CHÍNH PHẨM gồm 95% cotton ( thấm hút, vải mềm) và 5% spandex ( độ co dãn). - GIÁ CẢ : Chúng tôi trực tiếp sản xuất với số lượng lớn. Nên so với các quần cùng chất lượng giá cả của chiếc quần jean baggy thì giá tốt nhất cho bạn hiện tại.   ✔️ Thông Tin Sản Phẩm:  Quần Jean Ống Rộng Nam Nữ Unisex Wash Hàng Cao Cấp   - Gói bao gồm: 1 * quần túi zip - Kiểu Dáng: Quần Jean Ống Rộng Nam Nữ Unisex Wash Hàng Cao Cấp - Mầu Sắc: Black Grey - Chất liệu:  jean cao cấp, ko phai mầu - Số lượng : hàng đủ size , xuất khẩu', 2, 39, 0),
(75, '  Quần âu suông nam WHY NOT thiết kế cạp chun thoải mái, chất Cát Hàn cao cấp dày dặn, form Rộng trẻ trung QARGCD', 'spppp10.jpg', 100000, '✅ Chi tiết sản phẩm:   - Tên sản phẩm: Quần âu suông nam WHY NOT thiết kế cạp chun thoải mái, chất Cát Hàn cao cấp dày dặn, form Rộng trẻ trung, thanh lịch, tôn dáng QARGCD  - Form Suông rộng thoải mái, trẻ trung, ống suông che khuyết điểm, tôn mọi dáng người  👉 CHẤT LIỆU: Quần âu nam sử dụng chất liệu vải 100% Cát Hàn dày dặn, tăng khả năng co giãn, chống nhăn, chống xù lông và mang lại độ bền cao   👉 MÀU SẮC: ĐEN, GHI, BE (Vì điều kiện ánh sáng và màn hình khác nhau, màu sắc trong ảnh có thể lệch với sản phẩm thật 2-5%)  - Size: M, L, XL, XXL (đến 100kg)  👉 PHONG CÁCH:  Thời trang Lịch sự, giản dị, dễ mặc, dễ phối đồ, màu sắc nhã nhặn, không quá nổi bật nhưng cũng không kém phần trẻ trung và năng động. Phù hợp mặc đi học, đi làm, đi chơi.  ✅ 𝐖𝐇𝐘 𝐍𝐎𝐓 cam kết:  - Chất lượng dịch vụ trước và sau bán hàng được ưu tiên hàng đầu  - WHY NOT hoàn toàn chịu trách nhiệm nếu sản phẩm đến tay khách hàng không như kỳ vọng  - Chính Sách Bảo Hành sản phẩm 14 ngày  - 100% hình ảnh do Team WHY NOT thực hiện  - Chất lượng sản phẩm được chứng nhận theo Quy chuẩn Quốc gia  - Sản phẩm bao gồm đầy đủ tem, nhãn, mác, bao bì  - Sản phẩm Made in Viet Nam. Chính hãng WHY NOT  ✅ Chính sách đổi trả sản phẩm:  - Thời gian đổi trả hàng: 14 ngày được tính từ ngày nhận hàng  - Sản phẩm mới còn nguyên tem nhãn mác, bao bì sản phẩm  - Sản phẩm không bị dơ bẩn, chưa giặt, chưa qua sử dụng, chưa qua sửa chữa  - Đổi sang sản phẩm mới hoặc đơn hàng mới có giá trị lớn hơn hoặc bằng giá trị đơn hàng đã mua  - Sản phẩm giao nhầm hoặc bị lỗi do vận chuyển và do nhà sản xuất  - Sản phẩm quần lót, tất, phụ kiện và sản phẩm tặng kèm không được thực hiện chính sách đổi hàng.  ✅ Lưu ý: Nếu bạn gặp bất cứ vấn đề gì về sản phẩm, xin đừng vội đánh giá, hãy liên hệ lại ngay WHY NOT để được hỗ trợ một cách chu đáo nhất! WHY NOT xin cảm ơn.  #quanausuong #quanaucapchun #quanaucapchunnam #quanaucochun #quantaycapchun #quanausuongnam #quanauongrong #quanauongsuong #quanongrong #quantaysuong #quantaysuongnam #quanaunam #quantaynam #quandai #quancongso #quannam #quannamdep #quantaydep #quanvest #quanaudep #quanautrang #quanauden', 3, 53, 0),
(76, '  Quần âu suông nam WHY NOT thiết kế cạp chun thoải mái, chất Cát Hàn cao cấp dày dặn, form Rộng trẻ trung QARGCD', 'spppp5.jpg', 300000, '✅ Chi tiết sản phẩm:   - Tên sản phẩm: Quần âu suông nam WHY NOT thiết kế cạp chun thoải mái, chất Cát Hàn cao cấp dày dặn, form Rộng trẻ trung, thanh lịch, tôn dáng QARGCD  - Form Suông rộng thoải mái, trẻ trung, ống suông che khuyết điểm, tôn mọi dáng người  👉 CHẤT LIỆU: Quần âu nam sử dụng chất liệu vải 100% Cát Hàn dày dặn, tăng khả năng co giãn, chống nhăn, chống xù lông và mang lại độ bền cao   👉 MÀU SẮC: ĐEN, GHI, BE (Vì điều kiện ánh sáng và màn hình khác nhau, màu sắc trong ảnh có thể lệch với sản phẩm thật 2-5%)  - Size: M, L, XL, XXL (đến 100kg)  👉 PHONG CÁCH:  Thời trang Lịch sự, giản dị, dễ mặc, dễ phối đồ, màu sắc nhã nhặn, không quá nổi bật nhưng cũng không kém phần trẻ trung và năng động. Phù hợp mặc đi học, đi làm, đi chơi.  ✅ 𝐖𝐇𝐘 𝐍𝐎𝐓 cam kết:  - Chất lượng dịch vụ trước và sau bán hàng được ưu tiên hàng đầu  - WHY NOT hoàn toàn chịu trách nhiệm nếu sản phẩm đến tay khách hàng không như kỳ vọng  - Chính Sách Bảo Hành sản phẩm 14 ngày  - 100% hình ảnh do Team WHY NOT thực hiện  - Chất lượng sản phẩm được chứng nhận theo Quy chuẩn Quốc gia  - Sản phẩm bao gồm đầy đủ tem, nhãn, mác, bao bì  - Sản phẩm Made in Viet Nam. Chính hãng WHY NOT  ✅ Chính sách đổi trả sản phẩm:  - Thời gian đổi trả hàng: 14 ngày được tính từ ngày nhận hàng  - Sản phẩm mới còn nguyên tem nhãn mác, bao bì sản phẩm  - Sản phẩm không bị dơ bẩn, chưa giặt, chưa qua sử dụng, chưa qua sửa chữa  - Đổi sang sản phẩm mới hoặc đơn hàng mới có giá trị lớn hơn hoặc bằng giá trị đơn hàng đã mua  - Sản phẩm giao nhầm hoặc bị lỗi do vận chuyển và do nhà sản xuất  - Sản phẩm quần lót, tất, phụ kiện và sản phẩm tặng kèm không được thực hiện chính sách đổi hàng.  ✅ Lưu ý: Nếu bạn gặp bất cứ vấn đề gì về sản phẩm, xin đừng vội đánh giá, hãy liên hệ lại ngay WHY NOT để được hỗ trợ một cách chu đáo nhất! WHY NOT xin cảm ơn.  #quanausuong #quanaucapchun #quanaucapchunnam #quanaucochun #quantaycapchun #quanausuongnam #quanauongrong #quanauongsuong #quanongrong #quantaysuong #quantaysuongnam #quanaunam #quantaynam #quandai #quancongso #quannam #quannamdep #quantaydep #quanvest #quanaudep #quanautrang #quanauden', 3, 62, 0),
(77, '  Quần Short unisex nam nữ chất cotton cao cấp, phong cách thể thao, mặc thoáng mát, co dãn 4 chiều, quần đùi nam nữ, basi', 'sppp4.jpg', 200000, 'Quần Short trơn, Quần Short Comp chất tổ ong cao cấp, quần Short đai lưng túi hộp, quần Short Essentials      ✪ Chất Liệu Vải :  cotton cao cấp 100%, co giãn 4 chiều, vải mềm, mịn, thoáng mát, không xù lông.      ✪ Kĩ thuật may: Đường may chuẩn chỉnh, tỉ mỉ, chắc chắn      ✪ Hình in: Công nghệ in tiên tiến đảm bảo độ bền màu và hình in ngay cả khi giặt máy.      ✪ Kiểu Dáng :Form Rộng Thoải Mái      ✪ Full size nam nữ : 40 - 85 kg    I. SHOP CAM KẾT  - Sản phẩm quần Short đùi Unisex cotton cao cấp giống mô tả 100%  - Hình ảnh sản phẩm là ảnh thật, các hình hoàn toàn do shop tự thiết kế.  - Kiểm tra  cẩn thận trước khi gói hàng giao cho Quý Khách  - Hàng có sẵn, giao hàng ngay khi nhận được đơn   - Hoàn tiền nếu sản phẩm không giống với mô tả  - Chấp nhận đổi hàng khi size không vừa trong 3 ngày.    II. HỖ TRỢ ĐỔI TRẢ THEO QUY ĐỊNH CỦA SHOPEE  - Điều kiện áp dụng (trong vòng 2 ngày kể từ khi nhận sản phẩm)   - Hàng hoá bị rách, in lỗi, bung chỉ, và các lỗi do vận chuyển hoặc do nhà sản xuất.  1. Trường hợp được chấp nhận:   - Hàng giao sai size khách đã đặt hàng   - Giao thiếu hàng   2. Trường hợp không đủ điều kiện áp dụng chính sách:   - Quá 2 ngày kể từ khi Quý khách nhận hàng   - Gửi lại hàng không đúng mẫu mã, không phải sản phẩm của KARLEY STORE  - Không thích, không hợp, đặt nhầm mã, nhầm màu,...     #aothun #thun #aophong #unisex #aothunnam #aothunnu #freesize #oversize #aophongloang #taylo #formrong #hanquoc #aothuntaylo #aocotron #aothunformrong #samexoy #aosamexoy #aodoi #aothunmixmau #aophongmixmau #aothunmix #aophongmix #aoswweater #sweater #quanshort', 7, 18, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sizes`
--

CREATE TABLE `sizes` (
  `id_size` int(11) NOT NULL,
  `size` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sizes`
--

INSERT INTO `sizes` (`id_size`, `size`) VALUES
(1, 'M'),
(2, 'L');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `name_user` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role_user` tinyint(1) NOT NULL,
  `softdlt_user` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id_user`, `name_user`, `email`, `phone`, `address`, `password`, `role_user`, `softdlt_user`) VALUES
(3, 'Nguyễn Quốc Khánh', 'khanhnqph31968@fpt.edu.vn', '0879075925', 'Thôn xuân nẻo xã hưng đạo', '100', 1, 1),
(7, 'Nguyễn Quốc Khánh', 'loannguyenn1902@gmail.com', '0879075925', 'Thôn xuân nẻo xã hưng đạo', '345', 1, 0),
(20, 'khánh', 'k@gmail.com', '23465346143896', 'xn', '111', 1, 1),
(23, 'Khánh Học Code', 'nguyenquockhanh@gmail.com', '0964583628', 'Nguyễn Cơ Thạch', '1234', 0, 0),
(24, 'Nguyễn Quốc Khánh', 'nguyenquockhanh@gmail.com', '0964583628', 'Thôn xuân nẻo xã hưng đạo', '1212', 0, 1),
(31, 'Nguyễn Quốc Khánh', 'k@fpt.edu.vn', '0964583628', 'Thôn xuân nẻo xã hưng đạo', '1', 0, 0),
(32, 'Nguyễn Quốc Khánh', 'khanhhoccode@fpt.edu.vn', '0964583628', 'Thôn xuân nẻo xã hưng đạo', '1', 1, 0),
(33, 'Nguyễn Quốc Khánh', 'kh29@fpt.edu.vn', '0964583628', 'Thôn xuân nẻo xã hưng đạo', '1', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `variants`
--

CREATE TABLE `variants` (
  `id_variant` int(11) NOT NULL,
  `quanity` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_size` int(11) NOT NULL,
  `id_color` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `variants`
--

INSERT INTO `variants` (`id_variant`, `quanity`, `id_product`, `id_size`, `id_color`) VALUES
(64, 312, 75, 1, 1),
(65, 423, 75, 1, 2),
(66, 981, 75, 2, 1),
(67, 984, 75, 2, 2),
(68, 312, 74, 1, 1),
(69, 49, 74, 1, 2),
(70, 59, 74, 2, 1),
(71, 69, 74, 2, 2),
(72, 7, 73, 1, 1),
(73, 8, 73, 1, 2),
(74, 18, 73, 2, 1),
(75, 29, 73, 2, 2),
(76, 3222, 72, 1, 1),
(77, 332, 72, 1, 2),
(78, 2343, 72, 2, 1),
(79, 423422, 72, 2, 2),
(80, 229, 71, 1, 1),
(81, 23448, 71, 1, 2),
(82, 3229, 71, 2, 1),
(83, 23452340, 71, 2, 2),
(84, 576467, 70, 1, 1),
(85, 9567878, 70, 1, 2),
(86, 6765, 70, 2, 1),
(87, 6786786, 70, 2, 2),
(88, 675, 69, 1, 1),
(89, 6795, 69, 1, 2),
(90, 565, 69, 2, 1),
(91, 8765873, 69, 2, 2),
(92, 787, 68, 1, 1),
(93, 5564, 68, 1, 2),
(94, 9866, 68, 2, 1),
(95, 6897889, 68, 2, 2),
(96, 65785, 67, 1, 1),
(97, 6542, 67, 1, 2),
(98, 662, 67, 2, 1),
(99, 789864, 67, 2, 2),
(100, 789864, 67, 2, 2),
(101, 2216, 76, 1, 1),
(102, 66660, 76, 1, 2),
(103, 45445448, 76, 2, 1),
(104, 88882, 76, 2, 2),
(105, 5247, 77, 1, 1),
(106, 4205, 77, 1, 2),
(107, 234, 77, 2, 1),
(108, 3250, 77, 2, 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id_banner`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_category`);

--
-- Chỉ mục cho bảng `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id_color`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `fk_binhluan_sanpham` (`id_product`);

--
-- Chỉ mục cho bảng `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`id_orderdetail`),
  ADD KEY `fk_donhangct_donhang` (`id_order`),
  ADD KEY `fk_donhangct_sanpham` (`id_product`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `fk_donhang_khachhang` (`id_user`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id_post`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `fk_product_category` (`id_category`);

--
-- Chỉ mục cho bảng `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id_size`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- Chỉ mục cho bảng `variants`
--
ALTER TABLE `variants`
  ADD PRIMARY KEY (`id_variant`),
  ADD KEY `fk_bienthe_color` (`id_color`),
  ADD KEY `fk_bienthe_size` (`id_size`),
  ADD KEY `fk_bienthe_sanpham` (`id_product`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banners`
--
ALTER TABLE `banners`
  MODIFY `id_banner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `colors`
--
ALTER TABLE `colors`
  MODIFY `id_color` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `id_orderdetail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT cho bảng `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id_size` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `variants`
--
ALTER TABLE `variants`
  MODIFY `id_variant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `fk_binhluan_sanpham` FOREIGN KEY (`id_product`) REFERENCES `products` (`id_product`);

--
-- Các ràng buộc cho bảng `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `fk_donhangct_donhang` FOREIGN KEY (`id_order`) REFERENCES `orders` (`id_order`),
  ADD CONSTRAINT `fk_donhangct_sanpham` FOREIGN KEY (`id_product`) REFERENCES `products` (`id_product`);

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_donhang_khachhang` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_product_category` FOREIGN KEY (`id_category`) REFERENCES `categories` (`id_category`);

--
-- Các ràng buộc cho bảng `variants`
--
ALTER TABLE `variants`
  ADD CONSTRAINT `fk_bienthe_color` FOREIGN KEY (`id_color`) REFERENCES `colors` (`id_color`),
  ADD CONSTRAINT `fk_bienthe_sanpham` FOREIGN KEY (`id_product`) REFERENCES `products` (`id_product`),
  ADD CONSTRAINT `fk_bienthe_size` FOREIGN KEY (`id_size`) REFERENCES `sizes` (`id_size`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
