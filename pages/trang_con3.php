<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Trang con</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="../css/Trang_con.css">
  <script type="text/javascript" src="../js/jquery.js"></script>
</head>
<body>
	<?php
		require 'Header.php';
	?>
 
  <div class="u-bread">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="unica-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Tags</a></li>
                            <li class="breadcrumb-item active">Tiếng anh</li>
                            <li class="breadcrumb-item active">Lập trình</li>
                        </ol><!-- breadcrumb -->
                    </div><!-- unica-breadcrumb -->
                </div><!-- col-lg-12 -->
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- u-bread -->


     <div class="phangiua" style="background: white">
        <div class="container">
            <div class="row">
                <div class="col-sm-9" style="margin-top: 15px">
                    <h4 style="font-size: 20px; font-family: sans-serif;margin-bottom: 13px; ">  Tổng hợp khóa học : Thiết kế</h4>
                      <div class="sanpham">
                        <?php
                             $s=0.1;
                             require '../ADMIN/pages/config.php';
                             $result=mysqli_query($conn,"SELECT User_course ,Course_Name, Teacher_name, Price, Images , Teacher_image
FROM   teacher INNER JOIN course  ON course.User_teacher=teacher.User_teacher 
INNER JOIN typeofcourse on teacher.User_TypeOfCourse=typeofcourse.User_TypeOfCourse WHERE typeofcourse.User_TypeOfCourse='T01' ");
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
                                            <span class="price-sale" style="margin-left: 6em"><?php echo number_format($data['Price'],3).'đ';?></span>
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
                                          <del class="sale-price">$300.000 đ</del>
                                          <span class="price-sale">250.000đ</span>
                                      </div>
                                  </div>
                             </div><!-- khoi_sp --> 
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
                                          <del class="sale-price">$300.000 đ</del>
                                          <span class="price-sale">250.000đ</span>
                                      </div>
                                  </div>
                             </div><!-- khoi_sp -->   
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
                                          <del class="sale-price">$300.000 đ</del>
                                          <span class="price-sale">250.000đ</span>
                                      </div>
                                  </div>
                             </div><!-- khoi_sp -->
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
                                          <del class="sale-price">$300.000 đ</del>
                                          <span class="price-sale">250.000đ</span>
                                      </div>
                                  </div>
                             </div><!-- khoi_sp -->           
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
                                          <del class="sale-price">$300.000 đ</del>
                                          <span class="price-sale">250.000đ</span>
                                      </div>
                                  </div>
                             </div><!-- khoi_sp -->           
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
                                          <del class="sale-price">$300.000 đ</del>
                                          <span class="price-sale">250.000đ</span>
                                      </div>
                                  </div>
                             </div><!-- khoi_sp -->                                            
                        </div><!-- sanpham -->
            	</div><!-- col-sm-9 -->
                <div class="col-sm-3 menu1">
                    <?php
                      require '../pages/sider.php'
                      ?>
                             
                    </div><!-- siebar -->
                </div><!-- menu1 -->
        	</div><!-- row -->
    	</div><!-- container -->
    </div><!-- phangiua -->

<?php
require 'Footer.php';
?>

</body>
</html>