<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="../css/logout.css">
</head>
<body>
	<div class="header">
		<h2> Đăng nhập</h2>
	</div>
	<?php
		session_start();
         $UserName=$PassWord=null;
         $loi=array();
         $loi['UserName']=$loi['PassWord']=null;
         if(isset($_POST['ok'])){
         	if(empty($_POST["UserName"])){
         		$loi["UserName"]="nhap ten";
         	}
         	else{
         		$UserName=$_POST["UserName"];
         	}
         	if(empty($_POST["PassWord"])){
         		$loi["PassWord"]="nhap ten";
         	}
         	else{
         		$PassWord=$_POST["PassWord"];
         	}
         	if($UserName && $PassWord){
         		//mo ket noi csdl
         		$conn = mysqli_connect('localhost', 'root', '', 'course') or die ('Không thể kết nối tới database');
         		//truy van
         		$ssql="select UserName,PassWord,Level from  admin where UserName= '$UserName' and PassWord ='$PassWord' ";
                $result=mysqli_query($conn,$ssql);
                if(mysqli_num_rows($result)==1){
                    $data=mysqli_fetch_assoc($result);
                    $_session["Level"]=$data["Level"];
                    if($_session["Level"]==2){
                        header("location:../ADMIN/index.php");
                        exit();
                    }else{
                    	$_session["UserName"]=$UserName;
                        header("location:Trang_chu.php");
                        exit();
                    }
                }else{
                    echo "UserName or PassWord wrong!";
                }
         	}
         }
	?>
	<form method="post" action="login.php">
		<div class="input-group">
			<label> Tên đăng nhập :</label>
			<input type="text" name="UserName">
		</div>
		<div class="input-group">
			<label> Mật khẩu :</label>
			<input type="PassWord" name="PassWord">
		</div>
		<div class="input-group">
			<button type="submit" name="ok" class="btn">Đăng nhập</button>
		</div>
		<p> Bạn chưa có tài khoản ? <a href="register.php">Đăng ký</a></p>
	</form>
</body>
</html>