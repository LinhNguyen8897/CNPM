<?php
session_start();

$User_course=$_GET['User_course'];
unset($_SESSION["shopping_cart"][array_search($User_course,$_SESSION["shopping_cart"])]);
echo "<script>alert('Bạn có chắc chắn muốn xóa khóa học!')</script>";  
echo '<script>window.location="Cartt.php"</script>';  
exit();
?>

