<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from htmldemo.net/mimosa/mimosa/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Nov 2023 16:03:38 GMT -->

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>duanmot_banquannam_nhom10_poly</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="../img/logo/Nhóm 10.png">

	<!-- all css here -->
	<!-- bootstrap v3.3.6 css -->
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<!-- animate css -->
	<link rel="stylesheet" href="../css/animate.css">
	<!-- jquery-ui.min css -->
	<link rel="stylesheet" href="../css/jquery-ui.min.css">
	<!-- meanmenu css -->
	<link rel="stylesheet" href="../css/meanmenu.min.css">
	<!-- owl.carousel css -->
	<link rel="stylesheet" href="../css/owl.carousel.css">
	<!-- magnific-popup css -->
	<link rel="stylesheet" href="../css/magnific-popup.css">
	<!-- font-awesome css -->
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<!-- ionicons.min css -->
	<link rel="stylesheet" href="../css/ionicons.min.css">
	<!-- nivo-slider.css -->
	<link rel="stylesheet" href="../css/nivo-slider.css">
	<!-- style css -->
	<link rel="stylesheet" href="../style.css">
	<!-- responsive css -->
	<link rel="stylesheet" href="../css/responsive.css">
	<!-- modernizr css -->
	<style>
		.overview-img img {
			width: 100%;
		}

		.commentTable {
			width: 100%;
		}

		.commentTable table td:nth-child(1) {
			width: 25%;
		}

		.commentTable table td:nth-child(2) {
			width: 45%;
		}

		.commentTable table td:nth-child(3) {
			width: 25%;
		}

		.commentTable table td:nth-child(4) {
			width: 20%;
		}
	</style>
	<script src="../js/vendor/modernizr-2.8.3.min.js"></script>
</head>


<body>
	<!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

	<!-- Add your site or application content here -->
	<!-- page-wraper-start -->
	<div id="page-wraper">
		<!-- header-area-start -->
		<header>
			<!-- header-top-area-start -->
			<div class="header-top-area" id="sticky-header">
				<div class="container">
					<div class="row">
						<div class="col-xl-2 col-lg-2 col-md-6 col-6">
							<!-- logo-area-start -->
							<div class="logo-area">
								<a href="index.php"><img src="../img/logo/Nhóm 10.png" style="width: 100px;" alt="logo" /></a>
							</div>
							<!-- logo-area-end -->
						</div>
						<div class="col-xl-7 col-lg-7 d-none d-lg-block">
							<!-- menu-area-start -->
							<div class="menu-area">
								<nav>
									<ul>
										<li class="active"><a href="index.php">Trang chủ</a>
										</li>
										<li><a href="index.php?act=danhmucsanpham">Danh mục sản phẩm</a>
											<ul class="mega-menu">
												<?php
												foreach ($dscategory as $category) {
													extract($category);
													$linkcategory = "index.php?act=sanpham&id_category=" . $id_category;
													echo '
														<li>
													<ul class="sub-menu-2">
														<li><a href="' . $linkcategory . '">' . $name_category . '</a></li>
													</ul>
														</li>';
												}
												?>
											</ul>
										</li>
										<li><a href="#">Tùy Chọn</a>
											<ul class="sub-menu">
												<li><a href="index.php?act=danhmucsanpham">Danh sách sản phẩm</a></li>
												<li><a href="index.php?act=dangnhap">Đăng Nhập</a></li>
												<li><a href="index.php?act=dangky">Đăng Ký</a></li>
												<li><a href="index.php?act=addtocart">Giỏ hàng</a></li>
												<?php
												if (isset($_SESSION['name_user'])) {
													extract($_SESSION['name_user']);
												?>
													<li><a href="index.php?act=donhang">Đơn hàng</a></li>
												<?php } ?>
											</ul>
										</li>
									</ul>
								</nav>
							</div>
							<!-- menu-area-end -->
						</div>
						<div class="col-xl-3 col-lg-3 com-md-6 col-6 ">
							<!-- header-right-area-start -->
							<div class="header-right-area">
								<ul>
									<li><a id="show-search" href="#"><i class="icon ion-ios-search-strong"></i></a>
										<div class="search-content" id="hide-search">
											<span class="close" id="close-search">
												<i class="ion-close"></i>
											</span>
											<div class="search-text">
												<h1>Tìm kiếm sản phẩm</h1>
												<form action="index.php?act=searchsanpham">
													<input name="keyword" type="text" placeholder="Nhập id sản phẩm muốn tìm" />
													<button type="submit" name="send" class="btn" type="button">
														<i class="fa fa-search"></i>
													</button>
												</form>
											</div>
										</div>
									</li>

									<li><a href="index.php?act=addtocart"><i class="icon ion-bag"></i></a>
										<?php if ((isset($_SESSION['giohang'])) && (count($_SESSION['giohang']) > 0)) { ?>
											<span><?= count($_SESSION['giohang']) ?></span>
											<div class="mini-cart-sub">
												<div class="cart-product">
													<?php foreach ($_SESSION['giohang'] as $item) { ?>
														<div class="single-cart">
															<div class="cart-img">
																<a href="#"><img src="<?= $item[1] ?>" alt="book" /></a>
															</div>
															<div class="cart-info">
																<h5><a href="#"><?= $item[2] ?></a></h5>
																<p><?= $item[6] ?> x <span><?= $item[3] ?>$</span></p>
															</div>
														</div>
													<?php
													} ?>
												</div>
												<?php if (isset($_SESSION['name_user'])) {
													extract($_SESSION['name_user']); ?>
													<div class="cart-bottom">
														<a href="index.php?act=thanhtoan">Đặt Hàng</a>
													</div>
												<?php } else { ?>
													<div class="cart-bottom">
														<a href="index.php?act=dangnhap">Đăng Nhập Mới Được Mua Hàng</a>
													</div>
												<?php } ?>
											</div>
										<?php } ?>
									</li>

									<li><a href="#" id="show-cart"><i class="icon ion-drag"></i></a>
										<div class="shapping-area" id="hide-cart">
											<div class="single-shapping mb-20">
												<span>Tiền Tệ</span>
												<ul>
													<li><a href="#">€ Euro</a></li>
													<li><a href="#">£ Pound Sterling</a></li>
													<li><a href="#">$ US Dollar</a></li>
												</ul>
											</div>
											<div class="single-shapping mb-20">
												<span>Ngôn Ngữ</span>
												<ul>
													<li><a href="#"><img src="../img/flag/1.jpg" alt="flag" /> English</a></li>
													<li><a href="#"><img src="../img/flag/2.jpg" alt="flag" /> French</a></li>
												</ul>
											</div>
											<?php
											if (isset($_SESSION['name_user'])) {
												extract($_SESSION['name_user']);
											?>
												<div class="single-shapping">
													<span><?= $name_user ?></span>
													<ul>
														<li><a href="index.php?act=quenmk">Quên Mật Khẩu</a></li>
														<li><a href="index.php?act=edit">Cập Nhật Tài Khoản</a></li>
														<?php
														if ($role_user == 1) { ?>
															<li><a href="../../TrangAdmin/admin/index.php">Đăng Nhập Admin</a></li>
														<?php }
														?>
														<li><a href="index.php?act=thoat">Thoát</a></li>
													</ul>
												</div>

											<?php } else {
											?>
												<div class="single-shapping">
													<span>My Account</span>
													<ul>
														<li><a href="index.php?act=dangky">Đăng Ký</a></li>
														<li><a href="index.php?act=dangnhap">Đăng Nhập</a></li>
													</ul>
												</div>
											<?php } ?>
										</div>
									</li>
								</ul>
							</div>
							<!-- header-right-area-end -->
						</div>
					</div>
				</div>
			</div>
			<!-- header-top-area-end -->
			<!-- mobile-menu-area-start -->
			<div class="mobile-menu-area d-block d-lg-none clearfix">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="mobile-menu">
								<nav id="mobile-menu-active">
									<ul id="nav">
										<li class="active"><a href="index.php">Trang chủ</a>
										</li>
										<li><a href="index.php?act=danhmucsanpham">Danh mục sản phẩm</a>
											<ul class="mega-menu">
												<?php
												foreach ($dscategory as $category) {
													extract($category);
													$linkcategory = "index.php?act=sanpham&id_category=" . $id_category;
													echo '
														<li>
													<ul class="sub-menu-2">
														<li><a href="' . $linkcategory . '">' . $name_category . '</a></li>
													</ul>
														</li>';
												}
												?>

											</ul>
										</li>
										<li><a href="#">Tùy Chọn</a>
											<ul class="sub-menu">
												<li><a href="index.php?act=danhmucsanpham">Danh sách sản phẩm</a></li>
												<li><a href="index.php?act=dangnhap">Đăng Nhập</a></li>
												<li><a href="index.php?act=dangky">Đăng Ký</a></li>
												<li><a href="index.php?act=addtocart">Giỏ hàng</a></li>
												<?php
												if (isset($_SESSION['name_user'])) {
													extract($_SESSION['name_user']);
												?>
													<li><a href="index.php?act=donhang">Đơn hàng</a></li>
												<?php } ?>
											</ul>
										</li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- mobile-menu-area-end -->
		</header>