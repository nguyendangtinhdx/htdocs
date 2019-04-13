<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	echo strlen("Nguyễn Đăng Tỉnh")."<br>";
	echo strlen("Nguyen Dang Tinh")."<br>";		// đếm kí tự
	echo strrev("Nguyen Dang Tinh")."<br>";		// đảo chuỗi
	echo strpos("Nguyen Dang Tinh","Dang")."<br>";		// tìm từ
	echo str_word_count("Nguyen Dang Tinh")."<br>";	// đếm từ
	echo str_replace("Tinh","Khoa","Nguyen Dang Tinh")."<br>";// thay thế
	define("t","Hello");
	echo t;	
	$x = 5; 
	$y = 10;
	if ($x = 5 and $y = 10) 		// and: và   or: hoặc   
					// xor: đúng 1 trong 2 nhưng không phải cả 2 
	{
		echo "<br>"."Chào bạn";
	}
	?>
</body>
</html>