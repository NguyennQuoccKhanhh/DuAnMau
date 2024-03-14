			<!-- breadcrumbs-area-start -->
			<div class="breadcrumbs-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="breadcrumb-content text-center">
								<h2>Cập Nhật Tài Khoản</h2>
								<ul>
									<li><a href="#">Trang chủ/</a></li>
									<li class="active"><a href="#">Cập Nhật Tài Khoản</a></li>
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
                            <?php
                                if(isset($_SESSION['name_user'])&&(is_array($_SESSION['name_user']))){
                                    extract($_SESSION['name_user']);

                                }
                            ?>
							<form action="index.php?act=edit" method="post">
								<div class="billing-fields">
									<div class="row">
										<div class="col-xl-6 col-lg-6 col-md-6 col-12 ">
											<div class="single-register">
												<label>Name<span>*</span></label>
												<input type="text" name="name" value="<?=$name_user?>"/>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-xl-6 col-lg-6 col-md-6 col-12">
											<div class="single-register">
												<label>Email Address<span>*</span></label>
												<input type="email" name="email" value="<?=$email?>"/>
											</div>
										</div>
										<div class="col-xl-6 col-lg-6 col-md-6 col-12">
											<div class="single-register">
												<label>Phone<span>*</span></label>
												<input type="text" name="phone" value="<?=$phone?>"/>
											</div>
										</div>
									</div>
									<div class="single-register">
										<label>Address<span>*</span></label>
										<input type="text" name="address" value="<?=$address?>" placeholder="Street address"/>
									</div>
									<div class="single-register">
										<label>Account password<span>*</span></label>
										<input type="text" name="password" value="<?=$password?>" placeholder="Password"/>
									</div>
									<div class="single-register">
										<input  type="hidden" value="<?=$id_user?>" name="id_hidden">
										<input  type="submit" value="Cập Nhật" name="capnhat" id="">
									</div>
								</div>
								<?php
									if((isset($thongBao))&&($thongBao!="")){
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