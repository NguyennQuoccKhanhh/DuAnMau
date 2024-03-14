			<!-- breadcrumbs-area-start -->
			<div class="breadcrumbs-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="breadcrumb-content text-center">
								<h2>Danh Mục Sản Phẩm</h2>
								<ul>
									<li><a href="#">Trang Chủ /</a></li>
									<li class="active"><a href="#">Danh mục sản phẩm</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- breadcrumbs-area-end -->
			<!-- shop-main-area-start -->
			<div class="shop-main-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<!-- page-bar-start -->
							<div class="page-bar">
								<div class="shop-tab">
									<!-- tab-menu-start -->
									<div class="tab-menu-3">
										<ul class="nav">
											<li><a class="active" href="#th" data-bs-toggle="tab"><i class="fa fa-list"></i></a></li>
											<li><a href="#list" data-bs-toggle="tab"><i class="fa fa-th"></i></a></li>
										</ul>
									</div>
									<!-- tab-menu-end -->
									<!-- toolbar-sorter-start -->
									<div class="toolbar-sorter">
										<select class="sorter-options" data-role="sorter">
											<option selected="selected" value="Lowest">Sort By: Default</option>
											<option value="Highest">Sort By: Name (A - Z)</option>
											<option value="Product">Sort By: Name (Z - A)</option>
										</select>
									</div>
									<!-- toolbar-sorter-end -->
									<!-- toolbar-sorter-2-start -->
									<div class="toolbar-sorter-2">
										<select class="sorter-options" data-role="sorter">
											<option selected="selected" value="Lowest">Show: 9</option>
											<option value="Highest">Show: 25</option>
											<option value="Product">Show: 50</option>
										</select>
									</div>
									<!-- toolbar-sorter-2-end -->
								</div>
							</div>
							<!-- page-bar-end -->
						</div>
					</div>
					<div class="row">
						<div class="col-xl-9 col-lg-9 col-md-12 col-12 pull-right">
							<!-- shop-right-area-start -->
							<div class="shop-right-area mb-40-2 mb-30">
								<!-- tab-area-start -->
								<div class="tab-content">
									<div class="tab-pane active" id="th">
										<!-- product-wrapper-start -->
										<?php
										foreach ($list_products_above_menu as $loadall_products_above_menu) {
											extract($loadall_products_above_menu);
											$image  = '../../' . $image_path . $image_product;
											$link = "index.php?act=sanphamct&id_sanpham=" . $id_product; ?>
											<div class="product-wrapper product-wrapper-3 mb-40">
												<div class="product-img">
													<a href="#">
														<img style="height: 300px;" src="<?= $image ?>" alt="product" class="primary" />
														<!-- <img src="img/product/2.jpg" alt="product" class="secondary" /> -->
													</a>
													<div class="product-icon">
														<a href="<?= $link ?>" data-bs-toggle="tooltip" title="Sản phẩm chi tiết"><i class="icon ion-android-options"></i></a>
													</div>
												</div>
												<div class="product-content">
													<!-- <div class="manufacture-product">
														<a href="#">Armani</a>
														<div class="rating">
															<ul>
																<li><a href="#"><i class="fa fa-star"></i></a></li>
																<li><a href="#"><i class="fa fa-star"></i></a></li>
																<li><a href="#"><i class="fa fa-star"></i></a></li>
																<li><a href="#"><i class="fa fa-star"></i></a></li>
																<li><a href="#"><i class="fa fa-star"></i></a></li>
															</ul>
														</div>
													</div> -->
													<h2><a href="<?= $link ?>"><?= $name_product ?></a></h2>
													<div class="price">
														<ul>
															<li class="new-price"><?= number_format($price_product, 0, ",", ".") ?>VND</li>
														</ul>
													</div>
													<p><?= $description ?></p>
													<!-- <p>HTC Touch - in High Definition. Watch music videos and streaming content in awe-inspiring high definition clarity for a mobile experience you never thought possible. Seductively sleek, the HTC Touch HD provides the next generation of mobile functionality, all at a simple touch. Fully integrated with..</p> -->
												</div>
											</div>
										<?php } ?>


										<!-- product-wrapper-end -->
									</div>
									<div class="tab-pane fade" id="list">
										<div class="row">
											<?php
											foreach ($list_products_above_menu as $loadall_products_above_menu) {
												extract($loadall_products_above_menu);
												$image  = '../../' . $image_path . $image_product;
												$link = "index.php?act=sanphamct&id_sanpham=" . $id_product; ?>
												<div class="col-xl-4 col-lg-4 col-md-6 col-12">
													<!-- product-wrapper-start -->
													<div class="product-wrapper mb-40">
														<div class="product-img">
															<a href="#">
																<img style="height: 300px;" src="<?= $image ?>" alt="product" class="primary" />
																<!-- <img src="img/product/2.jpg" alt="product" class="secondary" /> -->
															</a>
															<!-- <span class="sale">sale</span> -->
															<div class="product-icon">
																<a href="<?= $link ?>" data-bs-toggle="tooltip" title="Sản phẩm chi tiết"><i class="icon ion-android-options"></i></a>
															</div>
														</div>
														<div class="product-content pt-20">
															<!-- <div class="manufacture-product">
															<a href="#">Armani</a>
															<div class="rating">
																<ul>
																	<li><a href="#"><i class="fa fa-star"></i></a></li>
																	<li><a href="#"><i class="fa fa-star"></i></a></li>
																	<li><a href="#"><i class="fa fa-star"></i></a></li>
																	<li><a href="#"><i class="fa fa-star"></i></a></li>
																	<li><a href="#"><i class="fa fa-star"></i></a></li>
																	<li><a href="#"><i class="fa fa-star"></i></a></li>
																</ul>
															</div>
														</div> -->
															<h2><a href="<?= $link ?>"><?= $name_product ?></a></h2>
															<div class="price">
																<ul>
																	<li class="new-price"><?= number_format($price_product, 0, ",", ".") ?>VND</li>
																</ul>
															</div>
														</div>
													</div>
													<!-- product-wrapper-end -->
												</div>
											<?php } ?>
										</div>
									</div>
								</div>
								<!-- tab-area-end -->
								<!-- pagination-area-start -->
								<div class="pagination-area">
									<div class="pagination-number">
										<ul>
											<li><a href="#"><i class="fa fa-angle-left"></i></a></li>
											<li class="active"><a href="#">1</a></li>
											<li><a href="#">2</a></li>
											<li><a href="#">3</a></li>
											<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
										</ul>
									</div>
									<div class="product-count">
										<p>Showing 1 - 12 of 13 items</p>
									</div>
								</div>
								<!-- pagination-area-end -->
							</div>
							<!-- shop-right-area-end -->
						</div>
						<div class="col-xl-3 col-lg-3 col-md-12 col-12">
							<!-- shop-left-area-start -->
							<div class="shop-left-area">
								<!-- single-shop-start -->
								<div class="single-shop mb-40">
									<div class="Categories-title">
										<h3>Loại Sản Phẩm</h3>
									</div>
									<div class="Categories-list">
										<?php
										foreach ($list_thongke_view as $thongke_view) {
											extract($thongke_view); ?>
											<ul>
												<li><a href="#"><?= $tenloai ?>(<?= $countsp ?>)</a></li>
											</ul>
										<?php } ?>
									</div>
								</div>
								<!-- single-shop-end -->
								<!-- single-shop-start -->
								<!-- <div class="single-shop mb-40">
									<div class="Categories-title">
										<h3>Price Filter</h3>
									</div>
									<div id="slider-range"></div>
									<input type="text" name="text" id="amount" />
								</div> -->
								<!-- single-shop-end -->
							</div>
							<!-- shop-left-area-end -->
						</div>
					</div>
				</div>
			</div>
			<!-- shop-main-area-end -->