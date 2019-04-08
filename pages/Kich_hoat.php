<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Trang chủ hệ thống</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../css/Kich_hoat.css">
</head>

<body>

<!-- ------------
    header
----------------> 

<?php
require 'Header.php';
?>
 
<!-- ------------
    main
----------------> 

<main style="background: white">
    <div class="u-order-cart" style="min-height: 600px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="u-box-cart">
                        <div class="u-box-cart-title text-center"><h1>KÍCH HOẠT KHÓA HỌC</h1></div>
                        <div class="u-kich-txt">Lưu ý: Mỗi khoá học chỉ cần kích hoạt 1 lần duy nhất.
                        </div><!-- u-kich-txt -->
                        <p><span class="badge">1</span> Bạn <b>chưa có</b> tài khoản đăng nhập?, vui lòng <a href="/register?url=https://unica.vn/kichhoat"><b>Đăng ký tài khoản mới</b></a>.</p>
                        <p><span class="badge">2</span> Bạn <b>đã có</b> tài khoản đăng nhập?, vui lòng <a href="/login?url=https://unica.vn/kichhoat"><b>Đăng nhập tài khoản</b></a>.</p>
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-3">
                                <form method="POST">
                                    <div class="input-group input-group-coupon">
                                        <input id="key_check_new" value="" type="text" name="key" required="" class="form-control input-lg text-center" placeholder="Nhập mã kích hoạt, Ví dụ: 130E3157B8">
                                        <span class="input-group-addon">
                                            <a href="javascript:void(0)" class="a_check_coupon">
                                                <i class="fa fa-check" aria-hidden="true"></i>
                                            </a>
                                        </span>
                                    </div>
                                    <button name="active" type="submit" class="btn-cart"><i class="fa fa-unlock-alt"></i> KÍCH HOẠT NGAY</button>
                                </form>
                            </div>
                        </div><!-- row -->
                        <div><span>Hỗ trợ: 0904886095 - 0243.7638999</span></div>
                    </div><!-- u-box-cart -->
                </div><!-- col-md-12 -->
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- u-order-cart -->
</main>


<!---------
    footer 
----------->
<?php
require 'Footer.php';
?>
</body>
</html>