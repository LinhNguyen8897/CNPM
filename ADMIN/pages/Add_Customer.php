<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Add Course</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/metisMenu.min.css" rel="stylesheet">
        <link href="../css/dataTables/dataTables.bootstrap.css" rel="stylesheet">
        <link href="../css/dataTables/dataTables.responsive.css" rel="stylesheet">
        <link href="../css/startmin.css" rel="stylesheet">
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <style type="text/css">
            fieldset {margin-bottom: 1em;}
            label {padding-right: 3em;}
        </style>

       
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
                                <div class="panel-heading">
                                    <div class="them_customer" style="   margin-top: 0.1em; float: right;margin-left: 27px;background: white;padding: 12px;" > 
                                        <a href="" style="color: black; text-decoration: none;"><i class="fa fa-arrow-left"></i>Trở về</a> </div>
                                    <div class="them_customer" style="   margin-top: 0.1em; float: right;margin-left: 27px;background: royalblue;padding: 12px;" name="luu" > 
                                        <a href="" style="color: white; text-decoration: none;"><i class="fa fa-save"></i>Lưu và tiếp tục</a> </div>
                                    <div class="them_customer" style="    margin-top: 0.1em;float: right;padding: 12px;background: royalblue;"> 
                                      <a href="" style="color: white; text-decoration: none;"><i class="fa fa-check"></i>Lưu</a> </div>                               
                                   <p class="customer" style=" margin: 8px 0 10px;    font-size: 19px;color: royalblue;">Tạo khóa học</p>                                  
                                </div>
                                <!-- /.panel-heading -->
                                <?php
                               
                                if (isset($_POST["ok"])) {
                                    $User_Customer = $_POST["User_Customer"];
                                    $Name_Custome = $_POST["Name_Custome"];
                                    $Adress=$_POST["Adress"];
                                    $Email = $_POST["Email"];
                                    $Phone_Number = $_POST["Phone_Number"];
                                    $Bank_ID = $_POST["Bank_ID"];  
                                    $Describe = $_POST["Describe"];  
                                    if (!$conn) {
                                        echo"Lỗi kết nối tới cơ sở dữ liệu";
                                    }
                                    echo 'string'. $User_Customer."-".$Name_Custome."-".$Adress." ".$Email." ".$Phone_Number."  ".$Bank_ID." ".$Describe;

                                    $sql="INSERT INTO `customers`(`User_Customer`, `Name_Customer`, `Adress`, `Email`, `Phone_Number`, `Bank_ID`, `Describe`) VALUES ('".$User_Customer."','".$Name_Custome."','".$Adress."','".$Email."','".$Phone_Number."','".$Bank_ID."','".$Describe."')";
                                    $stmt  = $conn->query($sql);
                                    var_dump($stmt);


                                    
                                }
                                ?>
                                <div class="panel-body">
                                    <form method="post" action="Add_Customer.php" enctype="multipart/form-data">
                                        <fieldset>
                                            <label>Mã khách hàng:</label>
                                            <input type="text" name="User_Customer" value="" placeholder="Mã khách hàng" style="margin-left: 2em;width: 20em;" >
                                        </fieldset>
                                       
                                        
                                         <fieldset>
                                            <label>Tên khách hàng:</label>
                                            <input type="text" name="Name_Custome" value="" placeholder="Tên khách hàng" style="    margin-left: 1.6em;width: 20em;">
                                        </fieldset>
                                        <fieldset>
                                            <label>Địa chỉ:</label>
                                            <input type="text" name="Adress" value="" placeholder="Địa chỉ" style="    margin-left: 5.8em;width: 20em;">
                                        </fieldset>
                                        <fieldset>
                                            <label>Email:</label>
                                            <input type="text" name="Email" value="" placeholder="Email" style="    margin-left: 6.5em;width: 20em;">
                                        </fieldset>
                                        <fieldset>
                                            <label>Số điện thoại:</label>
                                            <input type="text" name="Phone_Number" value="" placeholder="Số điện thoại" style="    margin-left: 2.8em;width: 20em;">
                                        </fieldset>
                                        <fieldset>
                                            <label>Số tài khoản ngân hàng:</label>
                                            <input type="text" name="Bank_ID" value="" placeholder="Số tài khoản ngân hàng " style="width: 20em;margin-left: -2em;">
                                        </fieldset>
                                       <fieldset>
                                            <label>Mô tả:</label>
                                            <textarea rows="5" cols="37" name="Describe" placeholder="Mô tả chi tiết... " style="margin-bottom: 15px;margin-left: 6.8em;"></textarea>
                                        </fieldset>
                                            
                                        <button type="submit" name="ok" style="   margin-top: 0.1em; float: left;margin-left: 27px;background: white;padding: 12px;" > Lưu</button>
                                    </form>
                                   
                              </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                      
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
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