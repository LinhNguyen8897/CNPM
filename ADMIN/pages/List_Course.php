
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

       
    </head>
    <body>
   <?php
require 'Header.php';
?>

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Course list</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading" >
                                  <div class="them_customer" style="    margin-top: 0.1em;float: right;padding: 12px;background: royalblue;"> 
                                        <a href="" style="color: white; text-decoration: none;">Thêm khóa học</a> </div>
                                   <p class="customer" style=" margin: 8px 0 10px;    font-size: 19px;color: royalblue;">Khóa học</p>
                                </div>
                                
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>User_course</th>                                       
                                                    <th>User_teacher</th>
                                                    <th>User_Sale</th> 
                                                    <th> User_Activated</th>
                                                    <th> Course_Name</th>
                                                    <th> Price</th>    
                                                    <th> Images</th>   
                                                    <th> Document</th>                                 
                                                    <th>Edit</th>
                                                    <th> Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                require '../pages/config.php';
                                                if (!$conn) {
                                                    echo"Lỗi kết nối tới cơ sở dữ liệu";
                                                }

                                                $result="SELECT `User_course`, `User_teacher`, `User_Sale`, `User_Activated`, `Course_Name`, `Nd_baiviet`, `Price`, `Images`, `Document` FROM course";
                                               $rs_name = $conn->query($result);                                          
                                                while ($row = mysqli_fetch_assoc($rs_name))
                                                {
                                                  echo"<tr>";
                                                  echo"<td>".$row['User_course']."</td>";
                                                  echo"<td>".$row['User_teacher']."</td>";
                                                  echo"<td>".$row['User_Sale']."</td>";
                                                  echo"<td>".$row['User_Activated']."</td>";
                                                  echo"<td>".$row['Course_Name']."</td>";
                                                  echo"<td>".$row['Price']."</td>";
                                                  ?>
                                                  <td><img style="width: 7em;height: 7em" src="../../images/<?php  echo $row["Images"];?>"></td>
                                                  <?php
                                                  echo"<td>".$row['Document']."</td>";
                                                  echo"<td><a href='Edit_Course.php?User_course=$row[User_course]'>Edit</a></td>";
                                                  echo"<th><a href='Delete_Course.php?User_course=$row[User_course] 'onclick='return show_confirm();' sle='color:#f3f;'>Delete</a></th>";
                                                       
                                                  echo"</tr>";                                 
                                                }
                                                mysqli_close($conn);  
                                                ?>                                           
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                   
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
