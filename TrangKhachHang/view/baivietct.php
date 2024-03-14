			<!-- breadcrumbs-area-start -->
			<div class="breadcrumbs-area">
			    <div class="container">
			        <div class="row">
			            <div class="col-lg-12">
			                <div class="breadcrumb-content text-center">
			                    <h2>Chi Tiết Bài Viết</h2>
			                    <ul>
			                        <li><a href="#">Trang chủ /</a></li>
			                        <li class="active"><a href="#">Chi tiết bài viết</a></li>
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
			            <div class="col-xl-8 col-lg-8 col-md-12 col-12">
			                <!-- blog-details-area-start -->
			                <?php
                            // foreach ($chitietbaiviet as $baivietct) {
                                extract($chitietbaiviet);
                                $image  = '../../TrangAdmin/admin/uploadpost/' . $image_post; ?>

			                    <div class="blog-details-area mb-40-2">
			                        <div class="blog-details-img">
			                            <a href="#"><img src="<?=$image?>" alt="banner" /></a>
			                        </div>
			                        <div class="blog-info">
			                            <h3><a href="#"><?=$name_post?></a></h3>
                                        <p><?=$content_post?></p>
			                            <div class="user-info">
			                                <div class="row">
			                                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
			                                        <div class="cats-tags-wrap mb-3">
			                                            <i class="fa fa-list-alt"></i>Categorys: <a href="#">Photography</a>
			                                        </div>
			                                    </div>
			                                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
			                                        <div class="user-share">
			                                            <span>Share:</span>
			                                            <ul>
			                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
			                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
			                                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
			                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
			                                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
			                                                <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
			                                                <li><a href="#"><i class="fa fa-reddit"></i></a></li>
			                                            </ul>
			                                        </div>
			                                    </div>
			                                </div>
			                            </div>
			                        </div>
			                    </div>
			                <!-- blog-details-area-end -->
			            </div>
			            <div class="col-xl-4 col-lg-4 col-md-12 col-12">
			                <!-- blog-right-area-start -->
			                <div class="blog-right-area">
			                    <!-- blog-right-start -->
			                    <div class="blog-right mb-50">
			                        <form action="#">
			                            <input type="text" placeholder="Search Here" />
			                            <button type="submit"><i class="fa fa-search"></i></button>
			                        </form>
			                    </div>
			                    <!-- blog-right-end -->
			                    <!-- blog-right-start -->
			                    <div class="blog-right mb-50">
			                        <h3>Bài Viết Cùng Ngày</h3>
			                        <div class="sidebar-post">
                                        <?php
                                        foreach ($listposts_tergether_time as $posts_tergether_time) {
                                            extract($posts_tergether_time);
                                            $image  = '../../TrangAdmin/admin/uploadpost/' . $image_post;
                                            $link = "index.php?act=baivietct&id_post=".$id_post ?>
			                            <!-- single-post-start -->
			                            <div class="single-post mb-20">
			                                <div class="post-img">
			                                    <a href="<?=$link?>"><img src="<?=$image?>" alt="post" /></a>
			                                </div>
			                                <div class="post-text">
			                                    <h4><a href="<?=$link?>"><?=$name_post?></a></h4>
			                                    <span><?=$time?></span>
			                                </div>
			                            </div>
                                        <?php }
                                        ?>
			                        </div>
			                    </div>
			                    <!-- blog-right-end -->
			                </div>
			                <!-- blog-right-area-end -->
			            </div>
			        </div>
			    </div>
			</div>
			<!-- shop-main-area-end -->