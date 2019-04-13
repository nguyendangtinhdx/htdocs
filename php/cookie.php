<!DOCTYPE html>
	<!-- cookie dùng để xác định 1 người dùng, 
	lưu trên máy người sử dụng -->
<?php 			// tạo cookie
	$name = "user";
	$value = "Nguyễn Đăng Tỉnh";
	setcookie($name, $value, time() + (86400 * 30), "/");

	// xóa cookie 
	// setcookie("user","",time()-3600);

	// kiểm tra nếu cookie kich hoạt
	setcookie("test_cookie","test", time()+3600,'/');
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 		// tạo cookie
	if(!isset($_COOKIE[$name])) {
		echo "Cookie named '" . $name . "' is not set!"."<br>";
	} else {
		echo "Cookie '" . $name . "' is set!<br>";
		echo "Value is: " . $_COOKIE[$name]."<br>";
	}

	// xóa cookie
	// echo "Cookie 'user' is deleted"."<br>";

	// kiểm tra nêu cookie kích hoạt
	if (count($_COOKIE)>0)
	{
		echo "Cookie are anable ";
	}
	else
	{
		echo "Cookie are disanable ";
	}
	?>
</body>
</html>