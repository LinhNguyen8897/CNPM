<?php 
 include('server.php')
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>logout</title>
	<link rel="stylesheet" type="text/css" href="../css/logout.css">
</head>
<body>
	<div class="header">
		<h2> Đăng ký</h2>
	</div>
	<form method="post" action="logout.php">
		<?php 
		include('errors.php')
		 ?>
		<div class="input-group">
			<label> Tên đăng ký :</label>
			<input type="text" name="UserName">
		</div>
		<div class="input-group">
			<label> Email: </label>
			<input type="text" name="Email">
		</div>
		<div class="input-group">
			<label> Mật khẩu :</label>
			<input type="PassWord" name="PassWord_1">
		</div>
		<div class="input-group">
			<label>Nhập lại mật khẩu :</label>
			<input type="PassWord" name="PassWord_2">
		</div>
		<div class="input-group">
			<button type="submit" name="Register" class="btn">Đăng ký</button>
		</div>
		<p> Bạn muốn đăng nhập ? <a href="login.php"> Đăng nhập </a></p>
	</form>
</body>
</html>