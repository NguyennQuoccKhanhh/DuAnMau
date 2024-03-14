			<!-- breadcrumbs-area-start -->
			<div class="breadcrumbs-area">
			    <div class="container">
			        <div class="row">
			            <div class="col-lg-12">
			                <div class="breadcrumb-content text-center">
			                    <h2>Quên Mật Khẩu</h2>
			                    <ul>
			                        <li><a href="#">Trang chủ/</a></li>
			                        <li class="active"><a href="#">Quên Mật Khẩu</a></li>
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
			                <div class="col-xl-6 col-lg-8 col-md-12 col-12 ml-auto mr-auto">
			                    <form action="index.php?act=quenmk" method="post">
			                        <div class="login-form">
			                            <div class="single-login">
			                                <label>Email đăng nhập của bạn<span>*</span></label>
			                                <input type="email" name="email" />
			                            </div>
			                            <div class="single-login single-login-2">
			                                <div class="single-register">
			                                    <input type="submit" value="Gửi" name="quenmk" id="">
			                                </div>
			                            </div>
			                        </div>
			                        <?php
                                    if ((isset($thongBao)) && ($thongBao != "")) {
                                        echo $thongBao;
                                    }
                                    ?>
			                </div>
			                </form>

			            </div>
			        </div>
			    </div>
			    <!-- user-login-area-end -->
			</div>
			<!-- shop-main-area-end -->