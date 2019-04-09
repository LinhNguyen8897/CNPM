<?php
$User_teacher=$_GET["User_teacher"];

//mo ket noi csdl

 require '../pages/config.php';
if (!$conn) {
echo"Lỗi kết nối tới cơ sở dữ liệu";
}

//thuc hien truy van 

$sql = "delete from course where User_teacher=$User_teacher";
$retval = mysqli_query( $conn ,$sql);

echo "Xóa dữ liệu thành công\n";
      
//dong ket noi csdl

mysqli_close($conn);

header("location:List_Teacher.php");
exit();
?>