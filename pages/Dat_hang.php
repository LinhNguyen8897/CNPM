<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang chủ hệ thống</title>
    <script type="text/javascript" src="../js/3.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/Dat-hang.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
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
        <main id="wrapper">
          
        
                    <div class="block1">
                            <div class="col-sm-6 col-sm-push-3">
                                <h3 class="text-center">Thông tin người đặt hàng</h3>
                            <form  method="post" name="frmRegister" action=""  style="margin-top: 4em !important">
                                    <div class="form-group">
                                        <label >Họ tên*</label>
                                        <input required="" type="text"  placeholder="Họ và tên" name="txtName" class="form-control">
                                     </div><!-- line-input  -->
                                    <div class="form-group">
                                        <label >Email*</label>
                                        <input required="" type="email"  name="txtEmail"  placeholder="Email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label >Điện thoại*</label>
                                        <input required="" type="text"  name="txtMobile"  placeholder="Số điện thoại" class="form-control">
                                    </div>                           
                                            <div class="form-group">
                                                <label for="inputEmail">Tỉnh/Thành phố* </label>
                                                <select name="city" class="province_id form-control">
                                                    <option value="18">Hà Nội</option>
                                                    <option value="52">Hồ Chí Minh</option>
                                                    <option value="56">An Giang</option>
                                                    <option value="19">Bắc Giang</option>
                                                    <option value="6">Bắc Kạn</option>
                                                    <option value="65">Bạc Liêu</option>
                                                    <option value="2">Bắc Ninh</option>
                                                    <option value="54">Bà Rịa - Vũng Tàu</option>
                                                    <option value="60">Bến Tre</option>
                                                    <option value="49">Bình Dương</option>
                                                    <option value="45">Bình Phước</option>
                                                    <option value="51">Bình Thuận</option>
                                                    <option value="39">Bình Định</option>
                                                    <option value="68">Cà Mau</option>
                                                    <option value="1">Cao Bằng</option>
                                                    <option value="59">Cần Thơ</option>
                                                    <option value="40">Gia Lai</option>
                                                    <option value="3">Hà Giang</option>
                                                    <option value="25">Hà Nam</option>
                                                    <option value="22">Hải Dương</option>
                                                    <option value="24">Hải Phòng</option>
                                                    <option value="31">Hà Tĩnh</option>
                                                    <option value="63">Hậu Giang</option>
                                                    <option value="23">Hòa Bình</option>
                                                    <option value="8">Hưng Yên</option>
                                                    <option value="43">Khánh Hòa</option>
                                                    <option value="62">Kiên Giang</option>
                                                    <option value="38">Kon Tum</option>
                                                    <option value="4">Lai Châu</option>
                                                    <option value="46">Lâm Đồng</option>
                                                    <option value="14">Lạng Sơn</option>
                                                    <option value="5">Lào Cai</option>
                                                    <option value="53">Long An</option>
                                                    <option value="28">Nam Định</option>
                                                    <option value="30">Nghệ An</option>
                                                    <option value="27">Ninh Bình</option>
                                                    <option value="47">Ninh Thuận</option>
                                                </select>
                                           </div>
                            </form><!-- form-inline -->
                    </div>   
                  </div>
              <!-- Block -->
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
                                                <a data-toggle="collapse" data-parent="#accordion" href="#" class="collapsed" style="text-decoration: none;">
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
                                                <a data-toggle="collapse" data-parent="#accordion" href="#" class="collapsed" style="text-decoration: none;">
                                                <i class="fa fa-credit-card-alt" aria-hidden="true"></i> Thẻ ATM, Internet Banking
                                                </a>
                                             </h4>
                                          </div><!-- panel-heading -->
                                          <div id="collapseTwo" class="panel-collapse collapse" style="height: 0px;">
                                             <div class="panel-body">
                                                Bạn cần có tài khoản Internet Banking để tiến hành thanh toán
                                                 Hỗ trợ tất cả các ngân hàng tại Việt Nam: VCB, ACB, Sacombank, BIDV,...
                                              
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
                          </div><!-- unica-order-cart -->
                    </div>
     
               <a  class="btn btn-primary next">Next</a>
                        <a class="btn btn-danger prev">Back</a>
      
                 
              </main>

                
<!--------------
    footer 
---------------->
 <?php
require 'footer.php';
?>
</body>
</html>