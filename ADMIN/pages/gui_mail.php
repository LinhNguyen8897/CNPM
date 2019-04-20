<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Edit Teacher</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/metisMenu.min.css" rel="stylesheet">
        <link href="../css/dataTables/dataTables.bootstrap.css" rel="stylesheet">
        <link href="../css/dataTables/dataTables.responsive.css" rel="stylesheet">
        <link href="../css/startmin.css" rel="stylesheet">
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">       
    </head>
    <body>
 <?php
require 'Header.php';
require '../pages/config.php';
?>

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row" style="    margin-top: 3em;">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading" >

                        <p class="customer" style=" margin: 8px 0 10px;    font-size: 19px;color: royalblue;">Gửi Mail</p>
                    </div>
                                
                                <!-- /.panel-heading -->
                    <div class="panel-body">
                     
    <?php

        include('../../inc/function.php');
        if (isset($_POST['submit'])) 
        {
            
            $hoten="Linh";
            $diachi="Nghệ An";
            $dienthoai="0969298340";
            $Email="nguyenmylinh@gmail.com";
            $noidung="Chào mừng bạn đã đăng ký đơn hàng thành công";
            $noidung_lh='<p><h3><strong>Thông tin liên hệ</strong></h3></p>
                        <p>Họ tên:'.$hoten.'</p>
                        <p>Địa chỉ:'.$diachi.'</p>
                        <p>Điện thoại:'.$dienthoai.'</p>
                        <p>Email:'.$Email.'</p>
                        <p>Nội dung:'.$noidung.'</p>
                        ';
            // add thư viện vào
            include('../../css/class.phpmailer.php');
            include('../../css/class.pop3.php');
            include('../../css/class.smtp.php');
            // cấu hình để gửi mail
            define('GUSER', 'nguyenthimylinh881997@gmail.com');
            define('GPWD', 'lethihongtan8897');
            smtpmailer('nguyenmylinh8897@gmail.com','nguyenthimylinh881997@gmail.com','Send mail','Thông tin liên hệ',$noidung_lh);
            // try {
            //       // 
            //     $mail = new PHPMailer(); // create a new object
            //     $mail->IsSMTP(); // enable SMTP
            //     $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
            //     $mail->SMTPAuth = true; // authentication enabled
            //     //$mail->SMTPSecure = "ssl"; // secure transfer enabled REQUIRED for Gmail
            //     $mail->SMTPSecure = 'tls';
            //     $mail->Host = "smtp.gmail.com";
            //     $mail->Port = 587; // or 465 587
            //     $mail->IsHTML(true);
            //     $mail->Username = "nguyenthimylinh881997@gmail.com";
            //     $mail->Password = "lethihongtan8897";
            //     $mail->CharSet = "UTF-8";
            //     // $mail->SetFrom($from,$from_name);
            //     $mail->SetFrom('thanthevanpm3@gmail.com','mail');
            //     $mail->Subject ="sss";
            //     $mail->Body = "sss";
            //     $mail->AddAddress('nguyenmylinh8897@gmail.com');
            //     $mail->Send();
            //       } catch (Exception $e) {
            //      print_r($e); die();
            //   }
                
        }
    ?>
    <form name="guimail" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td> Họ tên:</td>
            </tr>
            <tr>
                <td><input type="text" name="hoten" value=""></td>
            </tr>
            <tr>
                <td> Địa chỉ:</td>
            </tr>
            <tr>
                <td><input type="text" name="diachi" value=""></td>
            </tr>
            <tr>
                <td> Điện thoại:</td>
            </tr>
            <tr>
                <td><input type="text" name="dienthoai" value=""></td>
            </tr>
            <tr>
                <td>Email:</td>
            </tr>
            <tr>
                <td><input type="text" name="Email" value=""></td>
            </tr>
            <tr>
                <td>Nội dung:</td>
            </tr>
            <tr>
                <td><textarea name="noidung"></textarea></td>
            </tr>
            <tr>
                <td><input type="submit" name=" submit"></td>
            </tr>
        </table>
    </form>
                    </div>
                </div>
        </div>
    </div>
</div>
     <script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>
        <!-- DataTables JavaScript -->
        <script src="../js/dataTables/jquery.dataTables.min.js"></script>
        <script src="../js/dataTables/dataTables.bootstrap.min.js"></script>
        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>
           <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });
        </script>
</body>
</html>