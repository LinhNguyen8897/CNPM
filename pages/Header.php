<?php
session_start();
require '../ADMIN/pages/config.php';
?>
<!-- home -->
	<div class="home_page hidden-xs">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-4 col-lg-3 col-md-3 ">
					
				</div>
				<div class="col-sm-4 col-lg-5 col-md-5 cate-sm">
					<form name="frmsearch" class="unica-search-boxtop navbar-form form-inline" method="GET" action="../ADMIN/pages/saerch.php">
                        <input name="key" type="text" class="form-control unica-form" placeholder="Tìm khóa học, giảng viên bạn quan tâm">
                        <button type="submit" class="btn unica-btn-search" name="ok"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
				</div>
				<div class="col-sm-4 col-lg-4 col-md-4 cate-sm">
					<a href="" class="unica-active-course">
						<i class="fa fa-unlock-alt" aria-hidden="true"></i>
						<p class="hidden-md hidden-xs hidden-sm">Kích hoạt khóa học</p>
					</a>
					<a href="../pages/Cartt.php" class="unica-cart">
						<i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        <?php
                         $ok=1;
                         if (isset($_SESSION["shopping_cart"])) {
                            foreach ($_SESSION["shopping_cart"] as $key => $value) {
                                if (isset($key)) {
                                    $ok=2;
                                }
                            }
                         }
                         if ($ok!=2) {
                             echo '0';
                         }
                         else {
                             $item=$_SESSION["shopping_cart"];
                             echo count($item);
                         }
                        ?>
						<!-- <span class="unica-sl-cart"><b>0</b></span> -->
					</a>
					<ul class="unica-acc-zone">
                            <li><a class="unica-reg-acc" href="/register">Đăng ký</a></li>
                            <li><a class="unica-log-acc" href="/login">Đăng nhập</a></li>
                        </ul>
				</div>
			</div><!-- row -->
		</div><!-- container-fluid -->
	</div><!-- home_page -->
<!-- header -->
	 <div class="header">
        <div class="container">
            <div class="nav">
                <ul>
                    <li>
                        <a href="Trang_chu.php">Trang chủ</a>
                    </li>
                    <li>
                        <a href="#so2">giới thiệu</a>
                    </li>
                    <li>
                        <a href="#so3">khóa học</a>
                    </li>
                    <li>
                        <a href="#so4">giảng viên</a>
                    </li>
                    <li>
                        <a href="Lienhe.php">Liên Hệ</a>
                    </li>
                </ul>
            </div>
            <!-- het nav -->
        </div>
        <!-- het container -->
    </div>
    <!-- het khoi header -->