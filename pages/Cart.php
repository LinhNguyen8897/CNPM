<?php

require '../ADMIN/pages/config.php';
session_start();
$User_course=$_POST['User_course'];
if(isset($_SESSION["shopping_cart"][$User_course]))
{
  $sql=$_SESSION["shopping_cart"][$User_course]+1;

}
else {
  $sql=1;
}
$_SESSION["shopping_cart"][$User_course]=$sql;

?>

