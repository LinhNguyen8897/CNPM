<?php
$User_course=$_GET["User_course"];

//mo ket noi csdl

 require '../pages/config.php';
if (!$conn) {
echo"Lỗi kết nối tới cơ sở dữ liệu";
}

//thuc hien truy van 

$sql = "delete from course where User_course='$User_course'";
$retval = mysqli_query( $conn ,$sql);

echo "Xóa dữ liệu thành công\n";
      
//dong ket noi csdl

mysqli_close($conn);

header("location:List_Course.php");
exit();
?>