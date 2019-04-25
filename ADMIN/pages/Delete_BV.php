<?php
$Ma=$_GET["Ma"];

//mo ket noi csdl

require '../pages/config.php';
if (!$conn) {
echo"Lỗi kết nối tới cơ sở dữ liệu";
}

//thuc hien truy van 

$sql = "DELETE FROM `danhmucbaiviet` WHERE Ma ='$Ma'";
$retval = mysqli_query( $conn ,$sql);
var_dump($retval);

echo "Xóa dữ liệu thành công\n";
      
//dong ket noi csdl

mysqli_close($conn);

header("location:DanhSachBV.php");
exit();
?>