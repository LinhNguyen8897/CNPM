<?php
session_start();

$User_course=$_GET['User_course'];
unset($_SESSION["shopping_cart"][$User_course]);
echo '<script>alert("Bạn có chắc chắn muốn xóa khóa học!")</script>';  
echo '<script>window.location="Cartt.php"</script>';  
exit();
?>

<!-- <?php
//session_start();
//if(isset($_GET["action"]))  
// {  
   //   if($_GET["action"] == "delete")  
   //   {  
    //      foreach($_SESSION["shopping_cart"] as $keys => $values)  
    //        {  
    //                 unset($_SESSION["shopping_cart"][$keys]);  
    //                   
    //            if($values["User_course"] == $_GET["User_course"])  
   //             {  echo '<script>alert("Bạn có chắc chắn muốn xóa khóa học!")</script>';  
    //                 echo '<script>window.location="Gio_hang.php"</script>';  
   //             }  
  //        }  
 //     }  
// }  
// exit();
//?> -->