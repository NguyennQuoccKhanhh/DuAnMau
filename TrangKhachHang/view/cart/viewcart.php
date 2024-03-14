<?php
ob_start();
if (is_array($listsizes)) {
	extract($listsizes);
}
// session_start();
?>
<!-- breadcrumbs-area-start -->
<div class="breadcrumbs-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcrumb-content text-center">
					<h2>Giỏ Hàng</h2>
					<ul>
						<li><a href="#">Trang chủ /</a></li>
						<li class="active"><a href="#">Giỏ hàng</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- breadcrumbs-area-end -->
<!-- shop-main-area-start -->
<div class="shop-main-area">
	<!-- cart-main-area-start -->
	<div class="cart-main-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="table-content table-responsive">
						<table>
							<thead>
								<tr>
									<th class="product-thumbnail">STT</th>
									<th class="product-thumbnail">Ảnh</th>
									<th class="product-name">Tên sản phẩm</th>
									<th class="product-name">Size</th>
									<th class="product-name">Màu</th>
									<th class="product-price">Giá</th>
									<th class="product-quantity">Số lượng</th>
									<th class="product-subtotal">Tổng Giá</th>
									<th class="product-remove">Xóa</th>
								</tr>
							</thead>
							<tbody>
								<?php if ((isset($_SESSION['giohang'])) && (count($_SESSION['giohang']) > 0)) { ?>
									<?php
									$stt = 0;
									$total_amount = 0;

									foreach ($_SESSION['giohang'] as $item) {
										$total =number_format($item[6],0,",",".")  * $item[3];
										$total_amount += $total  ?>
										<tr>
											<td class="product-name"><?= ($stt + 1) ?></td>
											<td class="product-thumbnail"><a href="#"><img style="height: 100px" style="width;: 100px" src="<?= $item[1] ?>" alt="man" /></a></td>
											<td class="product-name"><a href="#"><?= $item[2] ?></a></td>
											<td class="product-size"><?php $listonesizes = loadone_sizes($item[4]);
																		echo $listonesizes['size']; ?></td>
											<td class="product-color"><?php $listonecolors = loadone_colors($item[5]);
																		echo $listonecolors['color']; ?></td>
											<td class="product-price"><span class="amount"><?= $item[3] ?></span></td>
											<td class="product-quantity"><?= $item[6] ?></td>
											<td class="product-subtotal"><?=$total?>VND</td>
											<td class="product-remove"><a href="index.php?act=delcart&stt=<?= $stt ?>"><i class="fa fa-times"></i></a></td>
										</tr>
									<?php
										$stt++;
									} ?>
									<div class="cart_totals">
										<table>
											<tbody>
												<tr class="cart-subtotal" id="tonggiatri">
													<th>
														<h3>Tổng tiền</h3>
													</th>
													<td>
														<span style="font-size: 30px; color: red; font-weight: bolder;" class="amount"><?=number_format($total_amount,0,",",".") ?>VND</span>
														<?php if (isset($_SESSION['name_user'])) {
															extract($_SESSION['name_user']); ?>
															<div class="wc-proceed-to-checkout">
																<a href="index.php?act=thanhtoan">Đặt Hàng</a>
															</div>
														<?php } else { ?>
															<div class="wc-proceed-to-checkout">
																<a href="index.php?act=dangnhap">Đăng Nhập Mới Mua Được Hàng</a>
															</div>
														<?php } ?>
													</td>

												</tr>


											</tbody>
										</table>

									</div>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
				<div class="col-xl-8 col-lg-8 col-md-7 col-12">
					<div class="buttons-cart mb-30 mt-3">
						<ul>
							<li><a href="index.php">Tiếp tục mua hàng</a></li>
							<li><a href="index.php?act=delcart">Xóa Tất Cả SP</a></li>
						</ul>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- cart-main-area-end -->
</div>
<!-- shop-main-area-end -->