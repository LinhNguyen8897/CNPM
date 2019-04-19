<?php
require '../pages/config.php';
session_start();
if(isset($_POST["add_to_cart"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_User_course = array_column($_SESSION["shopping_cart"], "User_course");  
           if(!in_array($_GET["User_course"], $item_array_User_course))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'User_course'  =>$_GET["User_course"],  
                     'Course_Name'=> $_POST["Course_Name"],
                    'Teacher_name'=> $_POST["Teacher_name"],
                     'Images'=> $_POST["Images"],  
                     'Price' =>  $_POST["Price"],  
                   
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           else  
           {  
                echo '<script>alert("Bạn đã có khóa học này rồi")</script>';  
                echo '<script>window.location="Gio_hang.php"</script>';  
           }  
      }  
      else  
      {  
            $item_array = array(  
                'User_course'=>$_GET["User_course"],  
                'Course_Name'=> $_POST["Course_Name"],
                'Teacher_name'=> $_POST["Teacher_name"],
                'Images'=> $_POST["Images"],  
                'Price'=>$_POST["Price"],  
               
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }  
 }  
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
          foreach($_SESSION["shopping_cart"] as $keys => $values)  
            {    
                if($values["User_course"] == $_GET["User_course"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo '<script>alert("Bạn có chắc chắn muốn xóa khóa học!")</script>';  
                     echo '<script>window.location="Gio_hang.php"</script>';  
                }  
          }  
      }  
 }  
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title> Giỏ hang Admin</title>
<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../css/metisMenu.min.css" rel="stylesheet">
<link href="../css/dataTables/dataTables.bootstrap.css" rel="stylesheet">
<link href="../css/dataTables/dataTables.responsive.css" rel="stylesheet">
<link href="../css/startmin.css" rel="stylesheet">
<link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../css/Gio_hang.css">
</head>
<body>

<?php
require 'Header.php';
?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default" style="margin-top: 2em">
                <div class="panel-heading" >
                 <div class="them_customer" style="   margin-top: 0.1em; float: right;margin-left: 27px;background: white;padding: 12px;" > 
                        <a href="../pages/index.php" style="color: black; text-decoration: none;"><i class="fa fa-arrow-left"></i>Trở về</a> </div>
                   <p class="customer" style=" margin: 8px 0 10px;    font-size: 19px;color: royalblue;">Giỏ hàng</p>
                </div>
                
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <?php  
                        $query = "SELECT `User_course` ,`Course_Name`, `Teacher_name`, `Price`, `Images`  FROM course INNER JOIN teacher ON course.User_teacher=teacher.User_teacher ORDER BY  User_course ASC";
                         $rs_name = $conn->query($query); 
                        if(mysqli_num_rows($rs_name) > 0)  
                        {  
                             while($row = mysqli_fetch_array($rs_name))  
                             {  

                    ?>  
                    <form method="POST" action="Gio_hang.php?User_course=<?php echo $row["User_course"]?>"  enctype="multipart/form-data">
                        <div class="khoitq">
                            <div class="tatca">
                                <img src="../../images/<?php  echo $row["Images"];?>" class="image" >
                                <h4 class="NameCourse"><?php echo $row["Course_Name"]; ?></h4>
                                <h4 class="Teacher_name"><?php echo $row["Teacher_name"]; ?></h4>
                                <h4 class="Price"> $ <?php echo $row["Price"]; ?></h4>
                               <input type="hidden" name="Course_Name" value="<?php echo $row["Course_Name"]; ?>" />  
                                <input type="hidden" name="Teacher_name" value="<?php echo $row["Teacher_name"]; ?>" /> 
                                <input type="hidden" name="Images" value="<?php echo $row["Images"]; ?>"/>
                               <input type="hidden" name="Price" value="<?php echo $row["Price"]; ?>" />  
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />  
                            </div>
                        </div>
                    </form>
                    <?php
                            }
                        }
                    ?>
                     <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead >
                                <tr>
                                    <th>Course_Name</th>
                                    <th>Teacher_name</th>
                                    <th>Images</th>                                        
                                    <th>Price</th>                                
                                    <th>Total</th> 
                                    <th> Action</th>                                                   
                                </tr>
                            </thead>
                            <tbody>
                           <?php   
                              if(!empty($_SESSION["shopping_cart"]))  
                              {  
                                   $total = 0;  
                                   foreach($_SESSION["shopping_cart"] as $keys => $values)  
                                   {  
                              ?>  
                               <tr>  
                                   <td><?php echo $values["Course_Name"]; ?></td> 
                                    <td><?php echo $values["Teacher_name"]; ?></td>  
                                   <td><img style="width: 5em;height: 5em" src="../../images/<?php  echo $values["Images"];?>" ></td> 
                                   <td>$ <?php echo number_format($values["Price"],3).'đ'; ?></td>  
                                   <td>$ <?php echo number_format($values["Price"], 3).'đ'; ?></td>  
                                   <td><a href="Gio_hang.php?action=delete&User_course=<?php echo $values["User_course"]; ?>"><span class="text-danger">Remove</span></a></td>  
                              </tr>  
                              <?php  
                                        //$total = $total + ($values["Price"] * $values["Price"]);
                                        $total = $total + ($values["Price"]);  
                                   }  
                              ?>  
                              <tr>  
                                   <td colspan="4" align="right">Total</td>  
                                   <td align="right">$ <?php echo number_format($total, 3).'đ'; ?></td>  
                                   <td> <a href="Thanh_toan.php"> Thanh toán</a></td>
                              </tr>  
                              <?php  
                              }  
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
<!-- <script>
$(document).ready(function() {
$('#dataTables-example').DataTable({
        responsive: true
});
});
</script>
 -->
</body>
</html>
