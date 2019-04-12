<?php
$User_Customer=$_GET["User_Customer"];

//mo ket noi csdl

require '../pages/config.php';
if (!$conn) {
echo"Lỗi kết nối tới cơ sở dữ liệu";
}

//thuc hien truy van 

$sql = "DELETE FROM `customers` WHERE User_Customer ='$User_Customer'";
$retval = mysqli_query( $conn ,$sql);
var_dump($retval);

echo "Xóa dữ liệu thành công\n";
      
//dong ket noi csdl

mysqli_close($conn);

header("location:List_Customer.php");
exit();
?>