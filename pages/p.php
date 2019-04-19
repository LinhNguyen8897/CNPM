
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Giỏ hàng</title>
<link rel="stylesheet" type="text/css" href="../css/Cart.css">
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
require '../ADMIN/pages/config.php';
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
      <li class="breadcrumb-item active">Giỏ hàng (    
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
  ?>  khóa học)</li>
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

<?php
$ok=1;
if (isset($_SESSION["shopping_cart"])) {
    foreach ($_SESSION["shopping_cart"] as $key => $value) {
     if (isset($key)) {
        $ok=2;
      } 
    }
}
if ($ok==2) {
  ?>
    <form method="POST" action="Cartt.php">
      <div id="cart">
        <table>
            <thead >
                <tr>
                    <th>Tên khóa học</th>
                    <th>Tên giảng viên</th>
                    <th>Hình ảnh</th>                                        
                    <th>Giá</th>                                
                    <th>Tổng giá</th> 
                    <th> Xóa</th>                                                   
                </tr>
            </thead>
            <tbody>
            <?php   
                    if(!empty($_SESSION["shopping_cart"]))  
                    {  
                         $total = 0; 
                        
                         foreach($_SESSION["shopping_cart"] as $keys => $values)  
                         { 
                    ?>  
                     <tr>  
                         <td><?php echo $values["Course_Name"]; ?></td> 
                          <td><?php echo $values["Teacher_name"]; ?></td>  
                        <td><img style="width: 7em;height: 7em" src="../images/<?php  echo $values["Images"];?>" ></td> 
                          
                         <td>$ <?php echo number_format($values["Price"],3).'&nbsp'.'đ'; ?></td>  
                         <td>$ <?php echo number_format($values["Price"], 3).'&nbsp'.'đ'; ?></td>  
                         <td><a href="delete_cart.php?User_course=<?php echo $values["User_course"]?>"><img src="../images/xoa.jpg" style="width: 2em;height: 2em;"></a></td>  
                    </tr>  
                    <?php  {
                      
                              $total = $total + ($values["Price"]);  
                         }  
                    ?>  
                    <tr>  
                         <td colspan="4" align="right">Tổng tiền</td>  
                         <td align="right" colspan="2" style="text-align: center;">$ <?php echo number_format($total, 3).'đ'; ?></td>  
                         
                    </tr>  
                    <?php  
                    }  
              ?>  
            </tbody>
        </table>
      </div>
   </form>
   
  <?php
}
else {
  echo 'Bạn không có sản phẩm nào trong giỏ';
}
?>

<div class="more-cart clearfix">
  <a href="/khoa-hoc-noi-bat" class="pull-left" style="text-decoration: none;">
      <i class="fa fa-plus"></i> Chọn thêm khóa học
  </a>
</div><!-- more-cart clearfix -->
</div><!--  col-lg-9 col-md-9 col-sm-8 col-cart -->
<div class="col-lg-3 col-md-3 col-sm-4">
<div class="u-cart-price">
  <div class="price-cart-box clearfix">
      <div class="price-cart-1">$ <?php echo number_format($total, 3).'đ'; ?></div>
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