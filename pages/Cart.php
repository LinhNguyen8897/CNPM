<?php
session_start();
$User_course=$_POST['User_course'];
if(isset($_SESSION["shopping_cart"][$User_course]))
{
  $sql=$_SESSION["shopping_cart"][$User_course]+1;

}
else {
  $sql=1;
}
$_SESSION["shopping_cart"][$User_course]=$sql;

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Giỏ hàng</title>
    <link rel="stylesheet" type="text/css" href="css/Gio_Hang.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
	<!-- Bootstrap core CSS -->
   <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="../css/Cart.css">
</head>
<body>

<!----------------
    menutren 
------------------>

  
  <?php
require 'Header.php';
?>

<!-------------
 u-bread-cart 
--------------->

<div class="u-bread-cart">
        <div class="container" >
            <div class="row">
                <div class="col-lg-12">
                    <div class="unica-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">Giỏ hàng (1 khóa học)</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
</div>

<main>
    <div class="unica-order-cart">
       <div class="container">
           <div class="row">
              <div class="col-lg-9 col-md-9 col-sm-8 col-cart">
                  <div class="u-box-cart2">
                      <div class="u-cart-course">
                          <div class="img-cart-course">
                                <img class="img-responsive" src="https://static.unica.vn/uploads/images/thaoptt09@gmail.com/facebook-az_m.png" width="100" height="70" alt="">  
                             </div><!-- img-cart-course -->
                             <div class="title-cart-course">
                                <p>Facebook Marketing từ A - Z</p>
                                <span>Giảng viên: Hồ Ngọc Cương</span>
                            </div><!-- title-cart-course -->
                            <div class="price-cart cart-price-sub">
                                <p>499,000<sup>đ</sup></p>
                                <span>700,000<sup>đ</sup></span>
                            </div><!-- price-cart cart-price-sub -->
                            <div class="remove-course">
                                <i type="course_id" title="Xóa khóa học này" alt="Xóa khóa học này" id="34" price_sale="499000" discount="201000" class="fa fa-times del_cart" aria-hidden="true"></i>
                                <br>                                        
                            </div><!-- remove-course -->
                      </div><!-- u-cart-course -->  
                      <div class="u-cart-course">
                          <div class="img-cart-course">
                                <img class="img-responsive" src="https://static.unica.vn/uploads/images/thaoptt09@gmail.com/facebook-az_m.png" width="100" height="70" alt="">  
                             </div><!-- img-cart-course -->
                             <div class="title-cart-course">
                                <p>Facebook Marketing từ A - Z</p>
                                <span>Giảng viên: Hồ Ngọc Cương</span>
                            </div><!-- title-cart-course -->
                            <div class="price-cart cart-price-sub">
                                <p>499,000<sup>đ</sup></p>
                                <span>700,000<sup>đ</sup></span>
                            </div><!-- price-cart cart-price-sub -->
                            <div class="remove-course">
                                <i type="course_id" title="Xóa khóa học này" alt="Xóa khóa học này" id="34" price_sale="499000" discount="201000" class="fa fa-times del_cart" aria-hidden="true"></i>                                      
                            </div><!-- remove-course -->
                      </div><!-- u-cart-course -->  
                    </div><!-- u-box-cart2 -->
                    <div class="more-cart clearfix">
                        <a href="/khoa-hoc-noi-bat" class="pull-left" style="text-decoration: none;">
                            <i class="fa fa-plus"></i> Chọn thêm khóa học
                        </a>
                    </div><!-- more-cart clearfix -->
              </div><!--  col-lg-9 col-md-9 col-sm-8 col-cart -->
              <div class="col-lg-3 col-md-3 col-sm-4">
                  <div class="u-cart-price">
                        <div class="price-cart-box clearfix">
                            <div class="price-cart-1">499,000<sup>đ</sup></div>
                        </div><!-- price-cart-box clearfix -->
                        <div class="price-btn-box">
                            <a href="/order/step1" style="text-decoration: none;">Thanh toán</a>
                        </div><!-- price-btn-box -->
                  </div><!-- u-cart-price -->
              </div><!-- col-lg-3 col-md-3 col-sm-4 -->
           </div> <!-- row -->
       </div> <!-- container -->
    </div><!-- unica-order-cart -->
</main>
<!--------------
    footer 
---------------->
<?php
require 'Footer.php';
?>
</body>
</html>