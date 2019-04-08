<?php
$UserName = " ";
$Email="";
$PassWord_1="";
$PassWord_2="";
$errors=array();


 //
if(isset($_POST['Register'])){
	if (empty($_POST['UserName'])) {
	 array_push($errors, "user is required");
	}
	else{
		$UserName=$_POST['UserName'];
	}
	if (empty($_POST['Email'])) {
	 array_push($errors, "Email is required");
	}else{
		$Email=$_POST['Email'];
	}
	if (empty($_POST['PassWord_1'])) {
	 array_push($errors, "sdt is required");
	}else{
		$PassWord_1=$_POST['PassWord_1'];
	}
	if (empty($_POST['PassWord_1'] != $_POST['PassWord_2'])) {
	 array_push($errors, "pass it not");
	}
	if($UserName && $Email && $PassWord_1){
		// ket noi csdl
	$conn = mysqli_connect('localhost', 'root', '', 'course') or die ('Không thể kết nối tới database');
	$sql= " insert into admin(UserName, Email,PassWord) values('$UserName','$Email','$PassWord_1')";
 mysqli_query($conn,$sql);

 //dong ket noi
 mysqli_close($conn);
	}
}

?>