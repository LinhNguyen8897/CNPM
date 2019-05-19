<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Trang con</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="../css/Trang_con.css">
</head>
<body>
	<?php
		require 'Header.php';
		require '../ADMIN/pages/config.php';
	?>
   <div class="u-bread">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="unica-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Tags</a></li>
                            <li class="breadcrumb-item active "><a href="../pages/trang_con1.php" style="font-size: 15px;color: gray">Tiếng anh</a></li>
                            <li class="breadcrumb-item active"><a href="../pages/Trang_con.php" style="font-size: 15px;color: gray">Lập trình</a></li>
                            <li class="breadcrumb-item active"><a href="../pages/trang_con2.php" style="font-size: 15px;color: gray">Kỹ năng</a></li>
                            <li class="breadcrumb-item active"><a href="../pages/trang_con3.php" style="font-size: 15px;color: gray">Thiết kế</a></li>
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
                    <h4 style="font-size: 20px; font-family: sans-serif;margin-bottom: 13px; ">  Tìm kiếm</h4>
                      <?php  
                      if (isset($_REQUEST['ok'])) {
                      	$search=$_GET['key'];
                      	if(empty($search)){
                      		echo "<p> Yêu cầu nhập dữ liệu vào thanh tìm kiếm </p>";
                      	}
                      	else {
                      		$query= " SELECT `User_course` ,`Course_Name`, `Teacher_name`, `Price`, `Images` , `Teacher_image` FROM course INNER JOIN teacher ON course.User_teacher=teacher.User_teacher  WHERE Course_Name like '%$search%' ";
                      		$result=$conn->query($query); 
                      		while ($data=mysqli_fetch_array($result)) {
                      			?>
                      		    <div class="sanpham">
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
								              <!-- <div class="price">
								                  <del class="sale-price">$300.000 đ</del>
								                  //<span class="price-sale" style="margin-left: 6em">//<?php// echo number_format($baiviet['Price'],3).'đ';?></span>
								              </div> -->
								          </div>
								      </div><!-- khoi_sp -->     
                      		    </div>
                             <?php
                      		}
                      	}
                      }
                       ?>
                </div>

                <div class="col-sm-3 menu1">
                    <div id="sidebar" style="height: 323px">
                            <ul> 
                                <label style="text-align: center;font-size: 20px;font-family: sans-serif;display: block;margin-top: 10px">Danh mục khóa học</label>
                                <br>
                                <li  class=" home"><a href="#" target="_blank" class="icon">Lập Trình</a> </li>
                                <li class=" icon_i file"><a href="#" target="_blank" class="icon"> Tiếng Anh</a></li>
                                <li class=" icon_i  file" ><a href="#" target="_blank" class="icon" > Kỹ Năng</a></li>
                                <li class=" icon_i bars"> <a href="#" target="_blank" class="icon">Thiết Kế</a></li>
                               
                            </ul>
                    </div><!-- sidebar --> 
                    <div id ="sidabar"  style="height: 323px;">
	                     <label style="text-align: center;font-size: 20px;font-family: sans-serif;display: block;margin-top: 10px;border-bottom: 1px solid gray;padding-bottom: 15px ">Chủ đề nổi bật</label>
	                     <div id="sidebar_but">
	                        <ul>
	                            <li> <a href=""> Tiếng Anh Giao Tiếp</a></li>
	                            <li> <a href=""> Lập Trình</a></li>
	                            <li> <a href=""> Tiếng Anh Giao Tiếp</a></li>
	                        </ul>
	                     </div><!-- sidebar_but -->
                             
                    </div><!-- siebar -->
                </div><!-- menu1 -->
            </div>
        </div>
    </div>
   <?php
		require 'Footer.php';
		
	?>
</body>
</html>
