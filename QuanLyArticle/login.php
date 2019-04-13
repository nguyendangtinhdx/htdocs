<?php
include_once './Entities/User.php';
include_once './DAL/config.php';
session_start();
ConnectDB();
if ($_SERVER["REQUEST_METHOD"] === "POST")
{
	$error = array();
	if(empty($_POST['username'])) {
		$error['username'] = 'Vui lòng nhập tài khoản';
	}
	if(empty($_POST['password'])) {
		$error['password'] = 'Vui lòng nhập mật khẩu';
	}
	$username = $_POST['username'];
	$password = $_POST['password'];
	if ($_POST["login"] && !$error){
		if(User::checkLogin($username,$password) == true)
		{
			header("location:index.php");
			$_SESSION["user"] = $username;
		}
		else
			$error['error_login'] = 'Tài khoản hoặc mật khẩu không đúng';
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Đăng nhập</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<style>
		form{
			width: 400px;
			margin: auto;
		}
		.title{
			text-align: center;
			color: green;
			font-size: 30px;
		}
	</style>
</head>
<body>
	<p class="title">Đăng nhập hệ thống</p>
	
	<form action="login.php" method="post">
		<span style="color: red; text-align: center; " ><?php echo isset($error['error_login']) ? $error['error_login'] : ''; ?></span>
		<div class="form-group">
			<label for="username">Tài khoản</label>
			<input type="text" class="form-control" placeholder="Tài khoản" name="username" >
			<span style="color: red"><?php echo isset($error['username']) ? $error['username'] : ''; ?></span>
		</div>
		<div class="form-group">
			<label for="pwd">Mật khẩu</label>
			<input type="password" class="form-control" placeholder="Mật khẩu" name="password" >
			<span style="color: red"><?php echo isset($error['password']) ? $error['password'] : ''; ?></span>
		</div>
		<input type="submit" class="btn btn-success" name="login" value="Đăng nhập" >
	</form>
</body>
</html>