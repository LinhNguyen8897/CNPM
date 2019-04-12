<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Add User</title>
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
                                   <p class="customer" style=" margin: 8px 0 10px;    font-size: 19px;color: royalblue;">Tạo người dùng</p>                                  
                                </div>
                                <!-- /.panel-heading -->
                                <?php
                               
                                if (isset($_POST["ok"])) {
                                    $User_Name = $_POST["User_Name"];
                                    $UserName = $_POST["UserName"];
                                    $PassWord=$_POST["PassWord"];
                                    $Email = $_POST["Email"];
                                    $Level = $_POST["Level"];
                                   
                                    if (!$conn) {
                                        echo"Lỗi kết nối tới cơ sở dữ liệu";
                                    }
                                    echo 'string'. $User_Name."-".$UserName."-".$PassWord." ".$Email." ".$Level;

                                    $sql="INSERT INTO `admin`(`User_Name`, `UserName`, `PassWord`, `Email`, `Level`) 
                                    VALUES ('".$User_Name."','".$UserName."','".$PassWord."','".$Email."','".$Level."')";
                                    $stmt  = $conn->query($sql);
                                    var_dump($stmt);
                                    
                                }
                                ?> 
                                <div class="panel-body">
                                    <form method="post" action="Add_User.php" enctype="multipart/form-data">
                                        <fieldset>
                                            <label>Mã người dùng:</label>
                                            <input type="text" name="User_Name" value="" placeholder="Mã người dùng " style="margin-left: 2em;width: 20em;" >
                                        </fieldset>                      
                                         <fieldset>
                                            <label>Tên người dùng:</label>
                                            <input type="text" name="UserName" value="" placeholder="Tên người dùng" style="    margin-left: 1.6em;width: 20em;">
                                        </fieldset>
                                        <fieldset>
                                            <label>Mật khẩu:</label>
                                            <input type="text" name="PassWord" value="" placeholder="Mật khẩu" style="    margin-left: 5em;width: 20em;">
                                        </fieldset>
                                        <fieldset>
                                            <label>Email:</label>
                                            <input type="text" name="Email" value="" placeholder="Email" style="    margin-left: 6.6em;width: 20em;">
                                        </fieldset>
                                        <fieldset>
                                            <label>Lavel:</label>
                                            <input type="text" name="Level" value="" placeholder="lavel " style="width: 20em;margin-left: 6.6em;">
                                        </fieldset>
                                        <button type="submit" name="ok"> Lưu</button>
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