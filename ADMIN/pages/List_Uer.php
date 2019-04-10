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
                            <h1 class="page-header">User list</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                  User
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                   
                                                    <th>User_Name</th>
                                                    <th>UserName</th>                                        
                                                    <th>Email </th>
                                                    <th>Level</th>
                                                    <th> Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                             <?php 
                                                require '../pages/config.php';
                                                if (!$conn) {
                                                    echo"Lỗi kết nối tới cơ sở dữ liệu";
                                                }

                                                $result="select User_Name, UserName,Email,Level from admin";
                                                $rs_name = $conn->query($result);                                          
                                                while ($row = $rs_name->fetch_assoc())
                                                {
                                                  echo"<tr>";
                                                  echo"<td>".$row['User_Name']."</td>";
                                                  echo"<td>".$row['UserName']."</td>";
                                                  echo"<td>".$row['Email']."</td>";
                                                  if((string)$row['Level']=="1")
                                                  {
                                                    echo"<td>Thành viên</td>";
                                                  }
                                                  else{
                                                    echo"<td>Admin</td>";
                                                  }
                                                  echo"<th><a href='Delete_User.php?User_Name=$row[User_Name] 'onclick='return show_confirm();' style='color:#f3f;'>Delete</a></th>";
                                                 
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
