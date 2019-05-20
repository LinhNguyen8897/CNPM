<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Trang chủ hệ thống</title>
<script type="text/javascript" src="../js/3.js"></script>
<link rel="stylesheet" type="text/css" href="../css/Dat_hang.css">
<link rel="stylesheet" href="../css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
</head>

<body>
<?php
require 'Header.php';
?>
<!-- ---------------
u-bread-cart 
------------------->

<div class="step">
   <ul class="text-center">
        <li class="link-item ">
          <h3 class="title "> 1</h3>
          <span class="title">Thông tin</span>
        </li>
        <li class="link-item">
           <h3 class="title"> 2</h3>
          <span class="title">Thanh toán</span>
        </li>
        <li class="link-item">
            <h3 class="title a"> 3</h3>
          <span class="title">Hoàn thành </span>
        </li>
  </ul>      
</div>
<!----------
main 
----------->

<!-- BLOCK -->
<?php
$loi=array();
$loi["txtName"]=$loi["txtEmail"]=$loi["txtMobile"]=$loi["city"]=NULL;
$txtName=$txtEmail=$txtMobile=$city=NULL;
if (isset($_POST['ok'])) {
    $txtName = $_POST['txtName'];
    $txtEmail = $_POST['txtEmail'];
    $txtMobile = $_POST['txtMobile'];
    $city =  $_POST['city'];
     if (empty($_POST["txtName"])) 
     {
         $loi["txtName"]= "vui long nhap ten ";
     }
     else {
        $txtName=$_POST["txtName"];
    }
    if (empty($_POST["txtEmail"])) 
     {
         $loi["txtEmail"]= "vui long nhap email";
     }
     else {
        $txtEmail=$_POST["txtEmail"];
    }
    if (empty($_POST["txtMobile"])) 
     {
         $loi["txtMobile"]= "vui long nhap sdt";
     }
     else {
        $txtMobile=$_POST["txtMobile"];
    }
    if (empty($_POST["city"])) 
     {
         $loi["city"]= "vui long nhap thanh pho";
     }
     else {
        $city=$_POST["city"];
    }
    $sql="INSERT INTO `bill`(`User_bill`, `User_course`, `Ten_KH`, `Email`, `SDT`, `Dia_chi`, `Total_money`) VALUES ('1' , 'TC01','".$txtName."','".$txtEmail."','".$txtMobile."','".$city."',  )";
    $stmt  = $conn->query($sql);
    // var_dump($stmt);
    // printf($sql);
}
?>
<main id="wrapper">





<div class="block1">
   
      <div class="unica-order-cart col-sm-6 col-sm-push-3">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12">
                      <div class="cart-complete">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i>
                          <p>ĐĂNG KÝ THÀNH CÔNG!</p>
                          <span>
                          Bạn đã đăng ký thành công khoá học.<br>

                          <b style="padding-left: 9.5em">Mã đơn hàng: 476529</b>
                          <br>
                          Bộ phận CSKH sẽ liên hệ với bạn trong 24 giờ để hoàn tất đơn hàng.

                          <br><br>
                          <div class="clearfix"></div>
                          <a class="btn btn-success" href="trangcon.php" style="margin-left: 10.5em;"> Xem thêm khóa học khác </a>
                          </span>
                      </div>
                  </div>
              </div>
          </div>
      </div> unica-order-cart
</div>

<!-- <a  class="btn btn-primary next" name="next">Next</a> -->
<a class="btn btn-danger prev" name="back">Back</a>

</main>


<!--------------
footer 
---------------->
<?php
require 'footer.php';
?>
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</body>
</html>