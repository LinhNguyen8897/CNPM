<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Add Teacher</title>
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
                                $result="select * from typeofcourse";
                                $rs_name = $conn->query($result);                                          
                                while ($row = mysqli_fetch_assoc($rs_name))
                                {
                                $rows[] = $row;
                                }

                                $result="select * from level";
                                $rs_name = $conn->query($result);                                          
                                while ($row1 = mysqli_fetch_assoc($rs_name))
                                {
                                $rows1[] = $row1;
                                }
                                if (isset($_POST["ok"])) {
                                    $User_teacher = $_POST["User_teacher"];
                                    $User_TypeOfCourse = $_POST["User_TypeOfCourse"];
                                    $User_level=$_POST["User_level"];
                                    $Teacher_name = $_POST["Teacher_name"];
                                    $Phone_number = $_POST["Phone_number"];
                                    $Email = $_POST["Email"];  
                                    $Describee = $_POST["Describee"];
                                    $image =basename( $_FILES["image"]["name"]);   
                                    if (!$conn) {
                                        echo"Lỗi kết nối tới cơ sở dữ liệu";
                                    }
                                    echo 'string'. $User_teacher."-".$User_TypeOfCourse."-".$User_level." ".$Teacher_name." ".$Phone_number."  ".$Email." ".$Describee." ".$image;
                                    $sql="INSERT INTO `teacher`(`User_teacher`, `User_TypeOfCourse`, `Teacher_name`, `Phone_number`, `Email`, `Teacher_image`, `Describee`, `User_level`) 
                                    VALUES ('".$User_teacher."','".$User_TypeOfCourse."','".$Teacher_name."','".$Phone_number."','".$Email."','".$image."','".$Describee."','".$User_level."')";
                                    $stmt  = $conn->query($sql);
                                    var_dump($stmt);
                                    move_uploaded_file($_FILES["image"]["tmp_name"],"../../images/$image");
                                }
                                ?> 
                                <div class="panel-body">
                                    <form method="post" action="Add_Teacher.php" enctype="multipart/form-data">
                                        <fieldset>
                                            <label>Mã giảng viên:</label>
                                            <input type="text" name="User_teacher" value="" placeholder="Mã giảng viên " style="margin-left: 2em;width: 20em;" >
                                        </fieldset>
                                        <fieldset>
                                            <label>Loại khóa học:</label>
                                            <select style="margin-left: 1.8em;width: 20em;height: 2em;" name="User_TypeOfCourse">
                                                <?php foreach ($rows as $key => $value) {
                                                    echo '<option value="'.$value["User_TypeOfCourse"].'" >'.$value["Name_TypeOfCourse"].'</option>';
                                                  }
                                                   ?> 
                                            </select>
                                        </fieldset>
                                        <fieldset>
                                            <label>Trường đại học:</label>
                                            <select style="margin-left: 1em;width: 20em;height: 2em;" name="User_level">
                                                <?php foreach ($rows1 as $key => $value) {
                                                    echo '<option value="'.$value["User_level"].'" >'.$value["Lavel_Name"].'</option>';
                                                  }
                                                   ?> 
                                            </select>
                                        </fieldset>                              
                                         <fieldset>
                                            <label>Tên giảng viên:</label>
                                            <input type="text" name="Teacher_name" value="" placeholder="Tên giảng viên" style="    margin-left: 1.6em;width: 20em;">
                                        </fieldset>
                                        <fieldset>
                                            <label>Số điện thoại:</label>
                                            <input type="text" name="Phone_number" value="" placeholder="Số điện thoại" style="    margin-left: 2.4em;width: 20em;">
                                        </fieldset>
                                        <fieldset>
                                            <label>Email:</label>
                                            <input type="text" name="Email" value="" placeholder="Email" style="    margin-left: 6em;width: 20em;">
                                        </fieldset>
                                        <fieldset>
                                            <label>Mô tả:</label>
                                            <input type="text" name="Describee" value="" placeholder="Mô tả " style="width: 20em;margin-left: 6em;">
                                        </fieldset>
                                        <label>Hình ảnh:</label>
                                         <fieldset  style="border: 1px solid #80808026; width: 20em; margin-left: 12em">
                                            <legend></legend>
                                        <input type="file" name="image" style="margin-bottom: 15px;margin-left: 15px;">
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