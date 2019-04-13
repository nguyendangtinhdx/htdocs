<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	// SESSION để lưu thông tin để được sử dụng trên nhiều trang
	session_start();	// bắt đầu sesion
	$_SESSION["color"] = "green";	// nhận giá trị biến
	$_SESSION["animal"] = "bird";
	echo " Session variables the set"."<br>";
	echo "Color is ".$_SESSION["color"]."<br>";
	echo "Animal is ".$_SESSION["animal"]."<br>";

	$_SESSION["color"] = "black";	// sửa đổi biến
	print_r($_SESSION);	// hiển thị các biến

	session_unset(); // khôi phục biến session

	session_destroy();	// phá hủy session
	?>
</body>
</html>