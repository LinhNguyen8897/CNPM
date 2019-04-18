<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Trang chu</title>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="../css/Home.css">
<script type="text/javascript" src="../js/jquery.js"></script>
</head>
<body>


<?php
require 'Header.php';
?>

<div id="so1" class="khoihome">
<div class="container-fluid">
<img src="../images/Home.jpg" alt="" class="layer1 wow bounceInUp">
<h1 class="layer2">Nâng tầm bản thân</h1>

<ul class="layer3">
    <i class="fa fa-graduation-cap icon1"> 200.000+ học viên</i>
    <i class="fa fa-location-arrow icon1"> 500.000+khóa học</i>
    <i class="fa fa-users icon1">400.000+ giảng viên</i>
</ul>
<a href="" class="layer4">
    Tham gia ngay
</a>
</div>
</div>
<!-- end khoi home -->

<!-- khoigt -->
<div id="so2" class="khoigt">
<div class="container">
<h1 class="td_khoigt">
    Khóa học cho bạn
</h1>
<div class="tong_khoi_gt">
    <a href="trangcon.php">
        <div class="khoi_gt">
            <img src="../images/gt3.jpg" alt="" class="wow bounceInUp" data-wow-delay="0.1s">
            <div class="nenkhoi"></div>
            <div class="nd_khoi">Lập trình</div>
        </a>
    </div>
    <!-- end khoi_gt -->
    <div class="khoi_gt">
        <a href="trangcon.php">
        <img src="../images/gt1 (1).png" alt="" class="wow bounceInUp" data-wow-delay="0.2s">
        <div class="nenkhoi"></div>
        <div class="nd_khoi">tiếng anh</div>
        </a>
    </div>
    <!-- end khoi_gt -->
    <div class="khoi_gt">
        <a href="trangcon.php">
        <img src="../images/gt1 (2).png" alt="" class="wow bounceInUp" data-wow-delay="0.3s">
        <div class="nenkhoi"></div>
        <div class="nd_khoi">kỹ năng</div>
        </a>
    </div>
    <!-- end khoi_gt -->
    <div class="khoi_gt">
        <a href="trangcon.php">
        <img src="../images/gt4.png" alt="" class="wow bounceInUp" data-wow-delay="0.4s">
        <div class="nenkhoi"></div>
        <div class="nd_khoi">Thiết kế</div>
        </a>
    </div>
    <!-- end khoi_gt -->
</div>
</div>
<!-- end container -->
</div>
<!-- end khoigt -->
<!-- khoi quang cao -->
<div class="khoiquangcao wow bounceIn"></div>

<div class="khoiquyenloi">
<div class="container" >
<h1 class="td_quyenloi">
    Quyền lợi của bạn
</h1>
<div class="card-deck khoi_ql">
    <div class="card wow lightSpeedIn" data-wow-delay="0.1s">
        <img class="card-img-top" src="../images/d1.png" alt="">
        <div class="card-body">
            <h4 class="card-title">Học ngày khi đăng kí</h4>
            <p class="card-text">mọi lúc mọi nơi</p>
        </div>
    </div>
    <div class="card wow lightSpeedIn" data-wow-delay="0.2s">
        <img class="card-img-top" src="../images/d2.png" alt="">
        <div class="card-body">
            <h4 class="card-title">Tiết kiệm</h4>
            <p class="card-text">thời gian</p>
        </div>
    </div>
    <div class="card wow lightSpeedIn" data-wow-delay="0.3s">
        <img class="card-img-top" src="../images/d3.png" alt="">
        <div class="card-body">
            <h4 class="card-title">Thanh toán 1 lần</h4>
            <p class="card-text">dùng mãi mãi</p>
        </div>
    </div>
    <div class="card wow lightSpeedIn" data-wow-delay="0.4s">
        <img class="card-img-top" src="../images/d4.png" alt="">
        <div class="card-body">
            <h4 class="card-title">Giao hàng miễn phí</h4>
            <p class="card-text">mọi vùng miền</p>
        </div>
    </div>
</div>
</div>
<!-- end container -->
</div>
<!-- end khoiquyenloi -->
</a>
</div>
</div>
</div>


<div id="so3" class="khoikh">
<div class="container">
<div class="danhmuc">
    <ul>
        <li>
            <a href="" data-danhmuc="all">Tất cả</a>
        </li>
        <li>
            <a href="" data-danhmuc=".laptrinh">Lập trình</a>
        </li>
        <li>
            <a href="" data-danhmuc=".tienganh">Tiếng anh</a>
        </li>
        <li>
            <a href="" data-danhmuc=".kinang">Kỹ năng</a>
        </li>
        <li>
            <a href="" data-danhmuc=".thietke">Thiết kế</a>
        </li>
    </ul>
</div><!--     end danh muc  -->
 <h1 class="td_sp">Tất cả</h1>

 <div class="sanpham">
  <?php
   $s=0.1;
   require '../ADMIN/pages/config.php';
   $result=mysqli_query($conn,"SELECT `User_course` ,`Course_Name`, `Teacher_name`, `Price`, `Images` , `Teacher_image` FROM course INNER JOIN teacher ON course.User_teacher=teacher.User_teacher order by User_course ASC ");
   while($data=mysqli_fetch_assoc($result))
   {
  
    ?>
    <div class="khoi_sp kinang  wow zoomIn" data-wow-delay="$s" >
          <img src="../images/<?php echo $data['Images'];?>" class="anh_sp anh<?php echo $data['User_course'];?>">
          <div class="nen-sp" >
              
          </div><!-- nen-sp -->
          <div class="khoi_ic">
              <ul>
                  <li><a href="" class="icon"><i class="fa fa-heart"></i></a></li>
                  <li><a href="" class="icon"><i class="fa fa-search"></i></a></li>
                  <li> <a  class="icon" id="addcart<?php echo $data['User_course']; ?>"><i class="fa fa-cart-plus"></i></a></li>
              </ul>
          </div><!-- khoi_ic -->
          <div class="content-course">
              <h3 class="tensp sanpham<?php echo $data['User_course']; ?>"
               id="<?php echo $data['User_course']; ?>">
               <?php echo $data['Course_Name'];?></h3>
              <div class="content-gv">
                  <img src="../images/<?php echo $data['Teacher_image']?>" class="img-gv"  style="border-radius: 50%;width: 37px;height: 37px;">
                  <span class="ten-gv"><?php echo $data['Teacher_name']; ?></span>
              </div>
              <div class="evaluate">
                  <span class="rate-course">
                      <i class="fa fa-star co-or" aria-hidden="true"></i>
                      <i class="fa fa-star co-or" aria-hidden="true"></i>
                      <i class="fa fa-star co-or" aria-hidden="true"></i>
                      <i class="fa fa-star co-or" aria-hidden="true"></i>
                      <i class="fa fa-star co-or" aria-hidden="true"></i>
                  </span>
                  <span class="n-rate">(250)</span>
              </div>
              <div class="price">
                  <del class="sale-price">$300.000 đ</del>
                  <span class="price-sale" style="margin-left: 6em"><?php echo number_format($data['Price'],0,'.','.').'đ';?></span>
              </div>
          </div>
      </div><!-- khoi_sp -->     
      <script type="text/javascript">
        $(document).ready(function(){
          $("a#addcart<?php echo $data['User_course'];?>").click(function(){
            var User_course = $("h3.sanpham<?php echo $data['User_course']; ?>").attr('id');
            $.ajax({
              type: "POST",
              url: "Cart.php",
              data: {User_course:User_course},
              cache:false,
              success: function(results){
                alert("Bạn đã thêm vào giỏ hàng thành công");
                window.location.reload();
              }
            });
          });
        });
      </script>
    <?php
   }
  ?>
     
     <div class="khoi_sp kinang  wow zoomIn" data-wow-delay="0.6s">
          <img src="../images/kn3.jpeg" class="anh_sp">
          <div class="nen-sp">
              
          </div><!-- nen-sp -->
          <div class="khoi_ic">
              <ul>
                  <li><a href="" class="icon"><i class="fa fa-heart"></i></a></li>
                  <li><a href="" class="icon"><i class="fa fa-search"></i></a></li>
                  <li> <a href="" class="icon"><i class="fa fa-cart-plus"></i></a></li>
              </ul>
          </div><!-- khoi_ic -->
          <div class="content-course">
              <h3 class="tensp">Anh văn gia tiếp cho người mất gốc ...</h3>
              <div class="content-gv">
                  <img src="../images/gv1.jpg" class="img-gv">
                  <span class="ten-gv">Hồ Văn Cương</span>
              </div>
              <div class="evaluate">
                  <span class="rate-course">
                      <i class="fa fa-star co-or" aria-hidden="true"></i>
                      <i class="fa fa-star co-or" aria-hidden="true"></i>
                      <i class="fa fa-star co-or" aria-hidden="true"></i>
                      <i class="fa fa-star co-or" aria-hidden="true"></i>
                      <i class="fa fa-star co-or" aria-hidden="true"></i>
                  </span>
                  <span class="n-rate">(250)</span>
              </div>
              <div class="price">
                  <del class="sale-price" >$300.000 đ</del>
                  <span class="price-sale">250.000đ</span>
              </div >
          </div>
     </div><!-- khoi_sp -->    
     
     
   
                       
 </div><!-- sanpham -->
</div><!-- container -->
</div><!--  khoikh  -->

<div  id="so4" class="khoigiangvien">
<div class="container-fluid">
<div class="banner wow slideInDown" data-wow-delay="0.5s">
    <div class="h3 td_banner wow bounceInRight" data-wow-delay="1s">
        Trở thành <br> GIẢNG VIÊN CÙNG CHÚNG TÔI
    </div>
    <a href="" class="nutdk wow bounceInRight" data-wow-delay="1.5s">Đăng ký</a>
</div>
</div>


<div class="giangvien">     
<div class="container">
 <div class="row">
     <div class="u-top-teacher">
         <h4>GIẢNG VIÊN TIÊU BIỂU</h4>
         <div class="box-teacher slick-initialized slick-slider">
            <button type="button" data-role="none" class="slick-prev slick-arrow" aria-label="Previous" role="button" >Previous</button>
                     <?php
               require '../ADMIN/pages/config.php';
               $result=mysqli_query($conn,"SELECT `User_teacher`, `Teacher_name`, `Teacher_image`, `Name_TypeOfCourse` FROM teacher INNER JOIN typeofcourse ON teacher.User_TypeOfCourse=typeofcourse.User_TypeOfCourse order by User_teacher desc limit 4");
               while($data=mysqli_fetch_assoc($result))
               {
                echo"<div class='slick-list draggable'  aria-live='polite'>";
                    echo" <div class='slick-track' style='opacity: 1; width: 4275px; left: -1140px;' role='listbox'>";
                          echo"<div class='nner-box-teacher slick-slide slick-cloned' data-slick-index='-4' aria-hidden='true' style='width: 269px;margin: 0 0.5em' tabindex='-1'>";
                                echo"<div class='inner-box-teacher slick-slide slick-cloned' data-slick-index='-4' aria-hidden='true' style='width: 269px;' tabindex='-1'>";
                                          echo"<div class='img-teacher'>";
                                             echo" <img width='153px' height='153px' 
                                             src='../images/".$data['Teacher_image']."' alt=''>";
                                          echo"</div>";
                                          echo"<a href='' class='name-teacher' tabindex='-1'>$data[Teacher_name]</a>";
                                          echo"<div class='des-teacher'>$data[Name_TypeOfCourse]</div>";
                          echo"</div>";
                    echo"</div>";
                            //<!-- slick-track -->
                echo"</div>";
                    //<!-- slick-list draggable -->
               }
            ?>
                    <div class="slick-list draggable"  aria-live="polite">
                            <div class="slick-track" style="opacity: 1; width: 4275px; left: -1140px;" role="listbox">
                              <div class="inner-box-teacher slick-slide slick-cloned" data-slick-index="-4" aria-hidden="true" style="width: 269px;" tabindex="-1">
                                <div class="inner-box-teacher slick-slide slick-cloned" data-slick-index="-4" aria-hidden="true" style="width: 269px;" tabindex="-1">
                                    <div class="img-teacher">
                                        <img width="153px" height="153px" src="../images/gv1.jpg" alt="Phạm Thành Long">
                                    </div>
                                    <a href="/teacher/pham-thanh-long" class="name-teacher" tabindex="-1">Phạm Thành Long</a>
                                    <div class="des-teacher">Luật sư - Diễn giả</div>
                                </div>
                            </div><!-- slick-track -->
                    </div><!-- slick-list draggable -->
                    <div class="slick-list draggable"  aria-live="polite">
                             <div class="slick-track" style="opacity: 1; width: 4275px; left: -1140px;" role="listbox"><div class="inner-box-teacher slick-slide slick-cloned" data-slick-index="-4" aria-hidden="true" style="width: 269px;" tabindex="-1">
                                <div class="inner-box-teacher slick-slide slick-cloned" data-slick-index="-4" aria-hidden="true" style="width: 269px;" tabindex="-1">
                                    <div class="img-teacher">
                                        <img width="153px" height="153px" src="../images/gv1.jpg" alt="Phạm Thành Long">
                                    </div>
                                    <a href="/teacher/pham-thanh-long" class="name-teacher" tabindex="-1">Phạm Thành Long</a>
                                    <div class="des-teacher">Luật sư - Diễn giả</div>
                                </div>
                            </div><!-- slick-track -->
                    </div><!-- slick-list draggable -->
                    <div class="slick-list draggable"  aria-live="polite">
                             <div class="slick-track" style="opacity: 1; width: 4275px; left: -1140px;" role="listbox"><div class="inner-box-teacher slick-slide slick-cloned" data-slick-index="-4" aria-hidden="true" style="width: 269px;" tabindex="-1">
                                <div class="inner-box-teacher slick-slide slick-cloned" data-slick-index="-4" aria-hidden="true" style="width: 269px;" tabindex="-1">
                                    <div class="img-teacher">
                                        <img width="153px" height="153px" src="../images/gv1.jpg" alt="Phạm Thành Long">
                                    </div>
                                    <a href="/teacher/pham-thanh-long" class="name-teacher" tabindex="-1">Phạm Thành Long</a>
                                    <div class="des-teacher">Luật sư - Diễn giả</div>
                                </div>
                            </div><!-- slick-track -->
                    </div><!-- slick-list draggable -->
                   
             <button type="button" data-role="none" class="slick-next slick-arrow" aria-label="Next" role="button" style="">Next</button>
             
        </div><!-- box-teacher slick-initialized slick-slider-->
     </div><!-- u-top-teacher  -->
</div> <!-- row -->
</div> <!-- container -->
</div> <!-- giangvien -->
</div> <!-- so4 -->
</div></div></div>
</div>

<div class="thanhfooter">
<ul>
<li><img src="../images/gv1.jpg" alt="" class="anhnho"></li>

<li><img src="../images/gv2.jpg" alt="" class="anhnho"></li>

<li><img src="../images/gv3.jpg" alt="" class="anhnho"></li>

<li><img src="../images/gv4.jpg" alt="" class="anhnho"></li>

<li><img src="../images/gv5.jpg" alt="" class="anhnho"></li>
<li><img src="../images/gv6.png" alt="" class="anhnho"></li>
<li><img src="../images/gv7.jpg" alt="" class="anhnho"></li>
<li><img src="../images/gv8.jpg" alt="" class="anhnho"></li>
<a href="" class="nutdk dk">Đăng ký ngay</a>
</ul>
</div>

<!--------------
footer 
---------------->
<?php
require 'Footer.php';
?>
</body>
</html>