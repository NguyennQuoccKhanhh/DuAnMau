			<!-- breadcrumbs-area-start -->
			<div class="breadcrumbs-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="breadcrumb-content text-center">
								<h2>Chi Tiết Đơn Hàng</h2>

								<ul>
									<li><a href="#">Trang Chủ/</a></li>
									<li class="active"><a href="#">Chi tiết đơn hàng</a></li>
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
						<?php
						if (!empty($list_orderdetail)) {
							$firstOrderDetail = reset($list_orderdetail);
							$code_order = $firstOrderDetail['code_order'];
						?>
							<h3 class="mb-0">Mã Đơn Hàng: <?= $code_order ?></h3>
						<?php } ?>
						<div class="row">
							<div class="col-lg-12">
								<div class="wishlist-content">
									<form action="#">
										<div class="wishlist-table table-responsive">
											<table>
												<thead>
													<tr>
														<th class="product-name">Ảnh Sản Phẩm</th>
														<th class="product-price">Tên Sản Phẩm</th>
														<th class="product-price">Màu</th>
			                                            <th class="product-price">Size</th>
														<th class="product-stock-stauts">Giá Sản Phẩm</th>
														<th class="product-quantity">Số Lượng</th>
														<th class="product-stock-stauts">Tổng Giá Trị Đơn Hàng</th>
													</tr>
												</thead>
												<tbody>
													<?php
													foreach ($list_orderdetail as $orderdetail) {
														extract($orderdetail); ?>
														<tr>
															<td><img style="height: 300px; width: 250px" src="<?= $image_product ?>" alt=""></td>
															<td><?= $name_product ?></td>
															<td><?= $color ?></td>
															<td><?= $size ?></td>
															<td><?= number_format($price_product, 0, ",", ".") ?>VND</td>
															<td><?= $quantity ?></td>
															<td><?= number_format($unit_price, 0, ",", ".") ?>VND</td>
														</tr>
													<?php }
													?>
												</tbody>
											</table>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- cart-main-area-end -->
			</div>
			<!-- shop-main-area-end -->