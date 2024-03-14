			<!-- breadcrumbs-area-start -->
			<div class="breadcrumbs-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="breadcrumb-content text-center">
								<h2>Đăng ký</h2>
								<ul>
									<li><a href="#">Trang chủ/</a></li>
									<li class="active"><a href="#">Đăng ký</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- breadcrumbs-area-end -->
			<!-- shop-main-area-start -->
			<div class="shop-main-area">
				<!-- user-login-area-start -->
				<div class="user-login-area">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-xl-8 col-lg-10 col-md-12 col-12 ml-auto mr-auto">
								<form action="index.php?act=dangky" method="post">
									<div class="billing-fields">
										<div class="row">
											<div class="col-xl-6 col-lg-6 col-md-6 col-12 ">
												<div class="single-register">
													<label>Name<span>*</span></label>
													<input type="text" name="name" />
													<span style="color: red;"><?= $errorName ?></span>

												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-xl-6 col-lg-6 col-md-6 col-12">
												<div class="single-register">
													<label>Email Address<span>*</span></label>
													<input type="email" name="email" />
													<span style="color: red;"><?= $errorEmail ?></span>

												</div>
											</div>
											<div class="col-xl-6 col-lg-6 col-md-6 col-12">
												<div class="single-register">
													<label>Phone<span>*</span></label>
													<input type="text" name="phone" />
													<span style="color: red;"><?= $errorPhone ?></span>

												</div>
											</div>
										</div>
										<div class="single-register">
											<label>Address<span>*</span></label>
											<input type="text" name="address" placeholder="Street address" />
											<span style="color: red;"><?= $errorAddress ?></span>

										</div>
										<div class="single-register">
											<label>Account password<span>*</span></label>
											<input type="password" name="password" placeholder="Password" />
											<span style="color: red;"><?= $errorPassword ?></span>

										</div>
										<div class="single-register">
											<input type="submit" value="Đăng Ký" name="dangky" id="">
										</div>
									</div>
									<?php
									if ((isset($thongBao)) && ($thongBao != "")) {
										echo $thongBao;
									}
									?>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- user-login-area-end -->
			</div>