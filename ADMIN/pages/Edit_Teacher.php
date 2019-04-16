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
                                        <a href="../pages/index.php" style="color: black; text-decoration: none;"><i class="fa fa-arrow-left"></i>Trở về</a> </div>                                                 
                                   <p class="customer" style=" margin: 8px 0 10px;    font-size: 19px;color: royalblue;">Sửa giảng viên</p>                                  
                                </div>
                                <!-- /.panel-heading -->
                                 <?php
                                    $User_teacher = $_GET["User_teacher"];

                                    //var_dump($User_course);
                                    $loi=array();
                                    $loi["Teacher_name"]=$loi["Phone_number"]=$loi["Email"]=$loi["Describee"]=$loi["images"]=NULL;
                                    $Teacher_name=$Phone_number=$Email=$Describee=$images=NULL;

                                    $result="select * from level";
                                    $rs_namee = $conn->query($result);                                          
                                    while ($row = mysqli_fetch_assoc($rs_namee))
                                    {
                                    $rows1[] = $row;
                                    }
                                    $result="select * from  typeofcourse";
                                    $rs_namee = $conn->query($result);                                          
                                    while ($row = mysqli_fetch_assoc($rs_namee))
                                    {
                                    $rows2[] = $row;
                                    }
                                    $result="select * from teacher";
                                    $rs_namee = $conn->query($result);                                          
                                    while ($row = mysqli_fetch_assoc($rs_namee))
                                    {
                                    $rows3[] = $row;
                                    }

                                    $querydata = "SELECT * FROM `teacher` WHERE  User_teacher='$User_teacher'";
                                    $resultdata = $conn->query($querydata);  
                                    while($datarow = mysqli_fetch_assoc($resultdata))
                                    {
                                        $data[] = $datarow;
                                    }                                
                                    if(isset($_POST["ok"])){
                                        
                                         $User_teacher=$_POST["User_teacher"];
                                         $User_TypeOfCourse=$_POST["User_TypeOfCourse"];
                                         $User_level=$_POST["User_level"];


                                         if (empty($_POST["Teacher_name"])) {
                                             $loi["Teacher_name"]= "vui long nhap ten giang vien";
                                         }
                                         else {
                                            $Teacher_name=$_POST["Teacher_name"];
                                        }


                                          
                                        if (empty($_POST["Phone_number"])) {
                                             $loi["Phone_number"]= "vui long nhap so dien thoai";
                                         }
                                         else {
                                            $Phone_number=$_POST["Phone_number"];
                                        }

                                        if (empty($_POST["Email"])) {
                                             $loi["Email"]= "vui long nhap email";
                                         }
                                         else {
                                            $Email=$_POST["Email"];
                                        }
                                        if (empty($_POST["Describee"])) {
                                             $loi["Describee"]= "vui long nhap mo ta";
                                         }
                                         else {
                                            $Describee=$_POST["Describee"];
                                        }

                                         $images =basename( $_FILES["images"]["name"]); 
                                         if ($User_teacher && $User_TypeOfCourse && $Teacher_name && $Phone_number && $Email  && $Describee  && $images &&   $User_level ) {

                                            if (!$conn) 
                                            {
                                                  echo"Lỗi kết nối tới cơ sở dữ liệu";
                                            } 
                                            //truy van
                                            if($images=='none'){
                                                $sql="UPDATE `teacher` SET `User_teacher`='$User_teacher',`User_TypeOfCourse`='$User_TypeOfCourse',`Teacher_name`='$Teacher_name',`Phone_number`='$Phone_number',`Email`='$Email',`Teacher_image`='$images',`Describee`='$Describee',`User_level`='$User_level' WHERE  User_teacher='$User_teacher'";
                                                echo ($sql);     
                                                $rs_name = $conn->query($sql);
                                                
                                                }
                                            else 
                                            {
                                                $sql="UPDATE `teacher` SET `User_teacher`='$User_teacher',`User_TypeOfCourse`='$User_TypeOfCourse',`Teacher_name`='$Teacher_name',`Phone_number`='$Phone_number',`Email`='$Email',`Teacher_image`='$images',`Describee`='$Describee',`User_level`='$User_level' WHERE  User_teacher='$User_teacher'";
                                                // echo ($sql);
                                                $rs_name = $conn->query($sql);
                                                var_dump($rs_name);                                                
                                                move_uploaded_file($_FILES["images"]["tmp_name"],"../../images/".$_FILES["images"]["name"]);
                                               
                                            }
                                                //dong ket noi 
                                                mysqli_close($conn);
                                            }

                                  }
                                     
                                    
                                ?>
                                <div class="panel-body">
                                    <form method="post" action="Edit_Teacher.php?User_teacher=<?php echo $User_teacher ?>" 
                                        enctype="multipart/form-data">
                                        <fieldset>
                                            <label>Mã giảng viên:</label>
                                            <select style="margin-left: 1.8em;width: 20em;height: 2em;" name="User_teacher">
                                                <?php foreach ($rows3 as $key => $value) {
                                                    echo '<option value="'.$value["User_teacher"].'" >'.$value["User_teacher"].'</option>';
                                                  }
                                                   ?> 
                                            </select>
                                        </fieldset>
                           
                                    
                                        <fieldset>
                                            <label>Mã khóa học:</label>
                                            <select style="margin-left: 2.5em;width: 20em;height: 2em;" name="User_TypeOfCourse">
                                                <?php foreach ($rows2 as $key => $value) {
                                                    echo '<option value="'.$value["User_TypeOfCourse"].'" >'.$value["Name_TypeOfCourse"].'</option>';
                                                  }
                                                   ?> 
                                            </select>
                                        </fieldset>
                                        <fieldset>
                                            <label>Mã level:</label>
                                            <select style="margin-left: 4.5em;width: 20em;height: 2em;" name="User_level">
                                                <?php foreach ($rows1 as $key => $value) {
                                                    echo '<option value="'.$value["User_level"].'" >'.$value["Lavel_Name"].'</option>';
                                                  }
                                                   ?> 
                                            </select>
                                        </fieldset>
                                         <fieldset>
                                            <label>Tên giảng viên:</label>
                                             <input type="text" name="Teacher_name" value="" placeholder="Tên giảng viên " style="width: 20em;margin-left: 1.3em;">
                                        </fieldset>
                                        <fieldset>
                                            <label>Số điện thoại:</label>
                                           
                                            <input type="text" name="Phone_number" value="" placeholder="Số điện thoại " style="width: 20em;margin-left: 2em;">
                                        </fieldset>
                                        <fieldset>
                                            <label>Email:</label>
                                            <input type="text" name="Email" value="" placeholder="Email " style="width: 20em;margin-left: 5.5em;">
                                        </fieldset>
                                        <fieldset>
                                            <label>Mô tả:</label>
                                             <textarea rows="5" cols="37" name="Describee" placeholder="Nôi dung mô tả " style="margin-bottom: 15px;margin-left: 5.4em"></textarea>
                                        </fieldset>
                                            <label>Hình ảnh cũ:</label>
                                             <fieldset  style="border: 1px solid #80808026; width: 20em; margin-left: 11.8em">
                                                <legend></legend>
                                            <img  style="width: 20em" src="../../images/<?php echo $data[0]['Teacher_image'] ;?> " >
                                        </fieldset>
                                        <label>Hình ảnh cũ:</label>
                                             <fieldset  style="border: 1px solid #80808026; width: 20em; margin-left: 11.8em">
                                                <legend></legend>
                                            <input type="file" multiple="" name="images" style="margin-bottom: 15px;margin-left: 15px;">
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