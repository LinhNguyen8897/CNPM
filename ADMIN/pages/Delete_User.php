<?php
$User_Name=$_GET["User_Name"];

//mo ket noi csdl

 require '../pages/config.php';
if (!$conn) {
echo"Lỗi kết nối tới cơ sở dữ liệu";
}

//thuc hien truy van 

$sql = "delete from admin where User_Name=$User_Name";
$retval = mysqli_query( $conn ,$sql);

echo "Xóa dữ liệu thành công\n";
      
//dong ket noi csdl

mysqli_close($conn);

header("location:List_Uer.php");
exit();
?>