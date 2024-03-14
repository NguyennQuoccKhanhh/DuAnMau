			<!-- breadcrumbs-area-start -->
			<div class="breadcrumbs-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="breadcrumb-content text-center">
								<h2>Đơn Hàng</h2>
								<ul>
									<li><a href="#">Trang Chủ/</a></li>
									<li class="active"><a href="#">Đơn hàng</a></li>
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
								<div class="wishlist-content">
										<div class="wishlist-table table-responsive">
											<table>
												<thead>
													<tr>
														<th class="product-thumbnail">ID Đơn hàng</th>
														<th class="product-thumbnail">Tên Người Đặt</th>
														<th class="product-thumbnail">Mã Đơn Hàng</th>
														<th class="product-name">Tên Người Nhận</th>
														<th class="product-price">Số Điện Thoại</th>
														<th class="product-quantity">Địa Chỉ Giao</th>
														<th class="product-stock-stauts">Tổng Giá Trị</th>
														<th class="product-stock-stauts">Hình Thức Thanh Toán</th>
														<th class="product-stock-stauts">Trạng Thái</th>
														<th class="product-subtotal">Thao Tác</th>
													</tr>
												</thead>
												<tbody>
													<?php
													foreach ($listorder_kh as $order_kh) {
														extract($order_kh);
														$link = "index.php?act=chitietdonhang&id_order=" . $id_order;
														// $huy = "index.php?act=huydonhang&id_order=" . $id_order; 
														?>
														<tr>
															<td class="product-remove"><?= $id_order ?></td>
															<td class="product-remove"><?= $name_user ?></td>
															<td class="product-thumbnail"><?= $code_order ?></td>
															<td class="product-name"><?= $name ?></td>
															<td class="product-price"><?= $phone_user_setting ?></td>
															<td class="product-name"><?= $address_user_setting ?></td>
															<td class="product-price"><span class="amount"><?= number_format($total_amount, 0, ",", ".") ?>VND</span></td>
															<td class="product-stock-status"><span class="wishlist-in-stock"><?= $payment_methods ?></span></td>
															<td class="product-stock-status"><span class="wishlist-in-stock"><?php if ($status == 0) { ?>
																		<button type="button" class="btn btn-warning btn_1">Chờ Xác Nhận</button>
																	<?php } else if ($status == 1) { ?>
																		<button type="button" class="btn btn-primary btn_1 ">Đang Giao</button>
																	<?php } else if ($status == 2) { ?>
																		<button type="button" class="btn btn-success btn_1 ">Giao Thành Công</button>
																	<?php } else { ?>
																		<button type="button" class="btn btn-danger btn_1 ">Đơn Hàng Đã Hủy</button>
																	<?php } ?></span></td>
															<td class="product-stock-status">
																<a href="<?= $link ?>"> <input type="button" name="themmoi" class="btn btn-info mb-10" value="Xem Chi Tiết Đơn Hàng"></a>
																<form action="index.php?act=huydonhang&id_order=<?=$id_order?>" method="post">
																	<?php if ($status == 0) { ?>
																		<button type="submit" name="huydonhang" class="btn btn-danger btn_1"> Hủy</button>
																	<?php } ?>
																</form>
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
					</div>
				</div>
				<!-- cart-main-area-end -->
			</div>
			<!-- shop-main-area-end -->