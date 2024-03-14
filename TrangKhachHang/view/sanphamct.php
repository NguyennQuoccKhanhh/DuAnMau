<!-- breadcrumbs-area-start -->
<div class="breadcrumbs-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcrumb-content text-center">
					<h2>Sản Phẩm Chi Tiết</h2>
					<ul>
						<li><a href="#">Trang Chủ /</a></li>
						<li class="active"><a href="#">Sản phẩm chi tiết</a></li>
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
		<?php
		extract($variants);
		$image  = '../../' . $image_path . $image_product;
		?>
		<div class="row">
			<div class="col-xl-6 col-lg-6 col-md-6 col-12">
				<!-- zoom-area-start -->
				<div class="zoom-area mb-3">
					<img id="zoompro" src="<?= $image ?>" data-zoom-image="<?= $image ?>" alt="zoom" />
				</div>
				<!-- zoom-area-end -->
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-12">
				<!-- zoom-product-details-start -->
				<div class="zoom-product-details">
					<h1><?= $name_product ?></h1>
					<div class="price">
						<ul>
							<li class="new-price"><?= number_format($price_product, 0, ",", ".") ?>VND</li>
						</ul>
						<?php extract($variants);
						$image  = '../../' . $image_path . $image_product; ?>
						<form action="index.php?act=addtocart" method="post">
							<div class="country-select mb-30">
								<h3>Tùy Chọn: </h3>
								<!-- <span id="quantityDisplay">Còn lại: <?= $quanity ?> Sản Phẩm</span> -->
								<!-- <form action="#"> -->
								<label>Màu:</label>
								<select name="size" class="sorter-options" data-role="sorter" id="">
									<?php
									foreach ($listsizes as $sizes) {
										extract($sizes); ?>
										<option value="<?= $id_size ?>">
											<?= $size ?>
										</option>;
									<?php }
									?>
								</select>
								<label>Màu:</label>
								<select name="color" class="sorter-options" data-role="sorter" id="">
									<?php
									foreach ($listcolors as $colors) {
										extract($colors); ?>
										<option value="<?= $id_color ?>">
											<?= $color ?>
										</option>;
									<?php }
									?>
								</select>
								<!-- </form> -->
							</div>
							<div class="quality-button">
								<input class="qty" type="text" name="quantity" value="1" min="1" />
								<input type="button" value="+" name="quantity" data-max="1000" class="plus" />
								<input type="button" value="-" name="quantity" data-min="1" class="minus" />
							</div>
							<script>
								document.addEventListener("DOMContentLoaded", function() {
									var quantityInput = document.querySelector('.qty');

									quantityInput.addEventListener('input', function() {
										// Kiểm tra nếu giá trị nhỏ hơn 1, đặt lại giá trị là 1
										if (parseInt(quantityInput.value) < 1) {
											quantityInput.value = 1;
										}
									});
								});
							</script>
							<input type="hidden" name="id_hidden" value="<?= $id_variant ?>">
							<input type="hidden" name="image" value="<?= $image ?>">
							<input type="hidden" name="name_product" value="<?= $name_product ?>">
							<input type="hidden" name="price_product" value="<?= $price_product ?>">
							<input type="hidden" name="id_product" value="<?= $id_product ?>">
							<button type="submit" name="addtocart">Thêm vào giỏ hàng</button>
							<div class="product-icon">
								<a href="index.php?act=add" data-bs-toggle="tooltip" title="Giỏ hàng"><i class="icon ion-bag"></i></a>
							</div>
						</form>
					</div>
					<!-- zoom-product-details-end -->
				</div>
			</div>
			<div class="row">
				<!-- products-detalis-area-start -->
				<div class="products-detalis-area pt-80">
					<div class="col-lg-12">
						<!-- tab-menu-start -->
						<div class="tab-menu mb-30 text-center">
							<ul class="nav">
								<li><a class="active" href="#Description" data-bs-toggle="tab">Miêu tả sản phẩm</a></li>
								<li><a href="#Reviews" data-bs-toggle="tab">Đánh giá</a></li>
							</ul>
						</div>
						<!-- tab-menu-end -->
					</div>
					<!-- tab-area-start -->
					<div class="tab-content">
						<div class="tab-pane active" id="Description">
							<div class="col-lg-12">
								<div class="tab-description">
									<p><?= $description ?></p>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="Reviews">
							<div class="col-lg-12">
								<div class="reviews-area">
									<h2>Đánh Giá</h2>
									<?php
									extract($variants);
									$image  = '../../' . $image_path . $image_product;
									?>
									<h4><?= $name_product ?></h4>
									<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
									<script>
										$(document).ready(function() {
											$("#danhgia").load("guidanhgia", {
												id_product: <?= $id_product ?>
											});
										});
									</script>
									<div class="comment-form mb-10" id="danhgia">
										<div class="catagory-select mb-30 commentTable">
											<table>
												<?php
												// echo "CMT vào đây: " . $id_product;
												foreach ($listcomments as $comment) {
													extract($comment); ?>
													<tr>
														<th><?= $name_user ?></th>
														<td><?= $time ?></td>
													</tr>
													<tr>
														<td><?= $content ?></td>
													</tr>
												<?php }
												?>
											</table>
										</div>
										<?php
										if (isset($_SESSION['name_user'])) {
											extract($_SESSION['name_user']);
										?>
											<form action="" method="post">
												<label> Đánh giá của <?= $name_user ?></label>
												<textarea name="comment" class="mb-10" id="comment" cols="20" rows="7"></textarea>
												<input type="hidden" name="id_comment" value="<?= $id_product ?>">
												<button type="submit" name="guidanhgia">Gửi đánh giá</button>
											</form>


										<?php } else {
											echo "<p>Bạn phải đăng nhập mới được đánh giá!</p>";
										}	?>

									</div>

								</div>
							</div>
						</div>
						<!-- tab-area-end -->
					</div>
					<!-- products-detalis-area-end -->
				</div>
			</div>
		</div>
	</div>
</div>
<!-- shop-main-area-end -->
<!-- arrivals-area-start -->
<div class="arrivals-area ptb-80">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title mb-30 text-center">
					<h2>Sản Phẩm Tương Tự</h2>
					<p> Order online and have your products delivered to your closest store for free </p>
				</div>
			</div>
		</div>
		<!-- tab-area-start -->
		<div class="tab-content">
			<div class="product-active owl-carousel">
				<?php
				foreach ($listproduct_tergether as $product_tergether) {
					extract($product_tergether);
					$image  = '../../' . $image_path . $image_product;
					$sanphamct = "index.php?act=sanphamct&id_sanpham=" . $id_product; ?>
					<div class="product-wrapper">
						<div class="product-img">
							<a href="#">
								<img style="height:350px; width:300px" ; src="<?= $image ?>" alt="product" class="primary" />
							</a>
							<div class="product-icon">
								<a href="<?= $sanphamct ?>" data-bs-toggle="tooltip" title="Sản phẩm chi tiết"><i class="icon ion-android-options"></i></a>
							</div>
						</div>
						<div class="product-content pt-20">
							<h2><a href="sanphamct.html"><?= $name_product ?></a></h2>
							<div class="price">
								<ul>
									<li class="new-price"><?= number_format($price_product, 0, ",", ".") ?>VND</li>
								</ul>
							</div>
						</div>
					</div>
				<?php }
				?>

			</div>
		</div>
		<!-- tab-area-end -->
	</div>
</div>
<!-- arrivals-area-end -->