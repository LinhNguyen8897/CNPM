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

?>
<main id="wrapper">
<div class="block1" >
    <div class="col-sm-6 col-sm-push-3">
      <h1>Phương thức thanh toán</h1>
        <br>
        <span>Bạn vui lòng chọn một trong các phương thức thanh toán dưới đây:</span><br>
        <span style="color:red">Bạn nên thanh toán Online để được giảm 5% và vào học được ngay</span>
     
         <div class="u-box-cart3">
        <form method="POST" action="">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                         <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="collapsed" style="text-decoration: none;">
                            <i class="fa fa-home fh" aria-hidden="true"></i>Thu tiền tại nhà
                            </a>
                         </h4>
                    </div><!-- panel-heading -->
                    <div id="collapseOne" class="panel-collapse collapse" style="height: 0px;">
                         <div class="panel-body">
                            <div class="form-group">
                               <input value="" type="text" name="address" class="form-control" placeholder="Vui lòng nhập địa chỉ chính xác của quý khách">
                                <br>
                                <button name="pay_cod" type="submit" 
                                class="btn btn-success btn-cl-or" style="margin-top: -20px  !important;">Hoàn tất</button>
                            </div><!-- form-group -->
                            <span class="district_shiping">Phí giao hàng : Miễn phí
                            <span class="price_shipping">(Miễn phí với đơn hàng trên 200,000đ)</span>
                            </span>
                         </div><!-- panel-body -->
                    </div><!-- panel-collapse collapse -->
                </div><!-- panel panel-default -->
                <div class="panel panel-default" pay-type="atm_panel">
                      <div class="panel-heading">
                         <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed" style="text-decoration: none;">
                            <i class="fa fa-credit-card-alt" aria-hidden="true"></i> Thẻ ATM, Internet Banking
                            </a>
                         </h4>
                      </div><!-- panel-heading -->
                      <div id="collapseTwo" class="panel-collapse collapse" style="height: 0px;">
                         <div class="panel-body">
                            Bạn cần có tài khoản Internet Banking để tiến hành thanh toán
                            <br> Hỗ trợ tất cả các ngân hàng tại Việt Nam: VCB, ACB, Sacombank, BIDV,...
                            <br>
                            <br>
                            <a class=" btn-success btn-cl-or" href="/payonline/476529/atm"><span class="icon thenganhang"></span> Thanh toán ngay</a>
                         </div>
                      </div>
                </div><!-- panel panel-default -->
                <div class="panel panel-default" pay-type="bank-panel">

            </div>
            <div class="panel-heading" style="background: #80808012">
                 <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive" class="collapsed" style="text-decoration: none;">
                    <i class="fa fa-university" aria-hidden="true"></i> Chuyển khoản ngân hàng
                    </a>
                 </h4>
              </div>
              <div id="collapseFive" class="panel-collapse collapse">
                 <div class="panel-body">
                    <ul class="list-group">
                       <li style="background-color: #fff !important;" class="list-group-item">
                          <div class="row">
                             <div class="col-md-2">Tên tài khoản</div>
                             <div class="col-md-10">Công ty Cổ phần đào tạo trực tuyến </div>
                          </div>
                       </li>

                       <li style="background-color: #fff !important;" class="list-group-item">
                          <div class="row">
                             <div class="col-md-2">Nội dung</div>
                             <div class="col-md-10">
                                <b>Thanh toán đơn hàng 476529</b>
                             </div>
                             <div class="col-md-10">
                                Ngay sau khi nhận được thanh toán, Unica sẽ gửi mail kích hoạt để bạn có thể học ngay.
                             </div>
                          </div>
                       </li>

                       <li style="background-color: #fff !important;" class="list-group-item">
                          <div class="row">
                             <div class="col-md-2"><b style="padding-left: 0">Ngân hàng</b></div>
                             <div class="col-md-6">&nbsp;</div>
                             <div class="col-md-4"><b style="padding-left: 0">Số tài khoản</b></div>
                          </div>
                       </li>

                       <li style="background-color: #fff !important;" class="list-group-item">
                          <div class="row">
                             <div class="col-md-2"><img class="img-responsive" src="../images/VietComBank.png"></div>
                             <div class="col-md-6">Vietcombank - chi nhánh Thăng Long, Hà Nội</div>
                             <div class="col-md-4"><b>0491000106169</b></div>
                          </div>
                       </li>
                      
                       <li style="background-color: #fff !important;" class="list-group-item">
                          <div class="row">
                             <div class="col-md-2"><img class="img-responsive" src="../images/VieTinBank.png"></div>
                             <div class="col-md-6">Vietinbank - chi nhánh Tây Hà Nội</div>
                             <div class="col-md-4"><b>102010002720050</b></div>
                          </div>
                       </li>
                      
                       <li style="background-color: #fff !important;" class="list-group-item">
                          <div class="row">
                             <div class="col-md-2"><img class="img-responsive" src="../images/BIDV.png"></div>
                             <div class="col-md-6">BIDV - chi nhánh Cầu Giấy</div>
                             <div class="col-md-4"><b>21510002115464</b></div>
                          </div>
                       </li>
                    </ul>
                    <br>
                    <button class="btn btn-success btn-cl-or" name="pay_bank" type="submit" method="post">Hoàn tất</button>
                 </div>
                </div>

                   
            </div><!-- panel-group -->
        </form>
    </div><!-- u-box-cart3 -->
    </div> 
</div>
<!-- Block -->

<a  class="btn btn-primary next" name="next">Next</a>
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