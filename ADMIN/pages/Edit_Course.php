<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Edit Course</title>
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
                                    <div class="them_customer" style="   margin-top: 0.1em; float: right;margin-left: 27px;background: royalblue;padding: 12px;" > 
                                        <a href="" style="color: white; text-decoration: none;"><i class="fa fa-save"></i>Lưu và tiếp tục</a> </div>
                                    <div class="them_customer" style="    margin-top: 0.1em;float: right;padding: 12px;background: royalblue;"> 
                                      <a href="" style="color: white; text-decoration: none;"><i class="fa fa-check"></i>Lưu</a> </div>                               
                                   <p class="customer" style=" margin: 8px 0 10px;    font-size: 19px;color: royalblue;">Sửa khóa học</p>                                  
                                </div>
                                <!-- /.panel-heading -->
                                 <?php
                                    $User_course = $_GET["User_course"];

                                    //var_dump($User_course);
                                    $loi=array();
                                    $loi["Course_Name"]=$loi["Nd_baiviet"]=$loi["Document"]=$loi["Price"]=$loi["images"]=NULL;
                                    $Course_Name=$Nd_baiviet=$Document=$Price=$images=NULL;

                                    $result="select * from teacher";
                                    $rs_name = $conn->query($result);                                          
                                    while ($row = mysqli_fetch_assoc($rs_name))
                                    {
                                    $rows[] = $row;
                                    }
                                    $result="select * from sale";
                                    $rs_namee = $conn->query($result);                                          
                                    while ($row = mysqli_fetch_assoc($rs_namee))
                                    {
                                    $rows1[] = $row;
                                    }
                                    $result="select * from activated";
                                    $rs_namee = $conn->query($result);                                          
                                    while ($row = mysqli_fetch_assoc($rs_namee))
                                    {
                                    $rows2[] = $row;
                                    }
                                    $result="select * from course";
                                    $rs_namee = $conn->query($result);                                          
                                    while ($row = mysqli_fetch_assoc($rs_namee))
                                    {
                                    $rows3[] = $row;
                                    }

                                    $querydata = "SELECT * FROM `course` WHERE  User_course='$User_course'";
                                    $resultdata = $conn->query($querydata);  
                                    while($datarow = mysqli_fetch_assoc($resultdata))
                                    {
                                        $data[] = $datarow;
                                    }                                
                                    if(isset($_POST["ok"])){
                                        
                                         $User_course=$_POST["User_course"];

                                         if (empty($_POST["Course_Name"])) {
                                             $loi["Course_Name"]= "vui long nhap ten khoa hoc";
                                         }
                                         else {
                                            $Course_Name=$_POST["Course_Name"];
                                        }
                                         $User_teacher=$_POST["User_teacher"];
                                         $User_Sale=$_POST["User_Sale"];
                                         $User_Activated=$_POST["User_Activated"];

                                          
                                        if (empty($_POST["Nd_baiviet"])) {
                                             $loi["Nd_baiviet"]= "vui long nhap noi dung bai viet";
                                         }
                                         else {
                                            $Nd_baiviet=$_POST["Nd_baiviet"];
                                        }

                                        if (empty($_POST["Document"])) {
                                             $loi["Document"]= "vui long nhap mo ta";
                                         }
                                         else {
                                            $Document=$_POST["Document"];
                                        }

                                        if (empty($_POST["Price"])) {
                                             $loi["Price"]= "vui long nhap gia";
                                         }
                                         else {
                                            $Price=$_POST["Price"];
                                        }


                                        if (empty($_POST["images"])) {
                                             $loi["images"]= "vui long nhap anh";
                                         }
                                         else {
                                            $Price=$_POST["images"];
                                        }
                                        echo 'string'. $User_course."-".$Course_Name."-".$User_teacher." ".$User_Sale." ".$User_Activated."  ".$Nd_baiviet." ".$Document." ".$Price." ".$images;

                                        if ($User_course && $User_teacher && $User_Sale && $User_Activated && $Course_Name  && $Nd_baiviet  && $Price &&   $images && $Document ) {

                                            if (!$conn) 
                                            {
                                                  echo"Lỗi kết nối tới cơ sở dữ liệu";
                                            } 
                                            //truy van
                                            if($image=='none'){
                                                $sql="UPDATE `course` SET `User_course`='$User_course',`User_teacher`='$User_teacher',`User_Sale`='$User_Sale',`User_Activated`='$User_Activated',`Course_Name`='$User_course',`Nd_baiviet`='$Nd_baiviet',`Price`='$Price',`Images`='$images',`Document`='$Document' WHERE  User_course='$User_course'";
                                                $rs_name = $conn->query($sql);
                                                var_dump($rs_name);     
                                                }
                                            else 
                                            {
                                                $sql="UPDATE `course` SET `User_course`='$User_course',`User_teacher`='$User_teacher',`User_Sale`='$User_Sale',`User_Activated`='$User_Activated',`Course_Name`='$User_course',`Nd_baiviet`='$Nd_baiviet',`Price`='$Price',`Images`='$images',`Document`='$Document' WHERE  User_course='$User_course'";
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
                                    <form method="post" action="Edit_Course.php?User_course=<?php echo $User_course ?>" 
                                        enctype="multipart/form-data">
                                        <fieldset>
                                            <label>Mã khóa học:</label>
                                            <select style="margin-left: 1.8em;width: 20em;height: 2em;" name="User_course">
                                                <?php foreach ($rows3 as $key => $value) {
                                                    echo '<option value="'.$value["User_course"].'" >'.$value["User_course"].'</option>';
                                                  }
                                                   ?> 
                                            </select>
                                        </fieldset>
                                        <fieldset>
                                            <label>Tên khóa học:</label>
                                            <input type="text" name="Course_Name" value="" placeholder="Tên khóa học" style="    margin-left: 1.6em;width: 20em;">
                                        </fieldset>
                                        <fieldset>
                                            <label>Giảng viên:</label>
                                            <select style="margin-left: 2.8em;width: 20em;height: 2em;" name="User_teacher">
                                                <?php foreach ($rows as $key => $value) {
                                                    echo '<option value="'.$value["User_teacher"].'" >'.$value["Teacher_name"].'</option>';
                                                  }
                                                   ?> 
                                            </select>
                                        </fieldset>
                                        <fieldset>
                                            <label>Sale:</label>
                                            <select style="margin-left: 5.8em;width: 20em;height: 2em;" name="User_Sale">
                                                <?php foreach ($rows1 as $key => $value) {
                                                    echo '<option value="'.$value["User_Sale"].'" >'.$value["Name_Sale"].'</option>';
                                                  }
                                                   ?> 
                                            </select>
                                        </fieldset>
                                        <fieldset>
                                            <label>Kích hoạt:</label>
                                            <select style="margin-left: 3.3em;width: 20em;height: 2em;" name="User_Activated">
                                                <?php foreach ($rows2 as $key => $value) {
                                                    echo '<option value="'.$value["User_Activated"].'" >'.$value["Name_Activated"].'</option>';
                                                  }
                                                   ?> 
                                            </select>
                                        </fieldset>
                                         <fieldset>
                                            <label>Nội dung bài viết:</label>
                                            <textarea rows="5" cols="37" name="Nd_baiviet" placeholder="Nôi dung bài viết " style="margin-bottom: 15px;"></textarea>
                                        </fieldset>
                                        <fieldset>
                                            <label>Nội dung miêu tả:</label>
                                            <textarea rows="5" cols="37" name="Document"placeholder="Nội dung mô tả ngắn"style="margin-bottom: 15px;"></textarea>
                                        </fieldset>
                                        <fieldset>
                                            <label>Giá:</label>
                                            <input type="text" name="Price" value="" placeholder="Giá " style="width: 20em;margin-left: 6.5em;">
                                        </fieldset>
                                       
                                            <label>Hình ảnh cũ:</label>
                                             <fieldset  style="border: 1px solid #80808026; width: 20em; margin-left: 11.8em">
                                                <legend></legend>
                                            <img  style="width: 20em" src="../../images/<?php echo $data[0]['Images'] ;?> " >
                                        </fieldset>
                                        <label>Hình ảnh cũ:</label>
                                             <fieldset  style="border: 1px solid #80808026; width: 20em; margin-left: 11.8em">
                                                <legend></legend>
                                            <input type="file" multiple="" name="images" style="margin-bottom: 15px;margin-left: 15px;">
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