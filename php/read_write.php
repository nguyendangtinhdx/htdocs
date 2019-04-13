<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		//  đọc file
 		$myfile = fopen("read.txt","r") // phải có file trước
		or die ("Unable to open file! ");
		while(!feof($myfile))
		{
			echo fgets($myfile)."<br>";	// fgets() đọc 1 dòng
		//	echo fgetc($myfile);	// fgetc() đọc 1 nhân vật
		}
		fclose($myfile);

		// ghi vào file
		$myfile1 = fopen("write.txt","w") // tự mở file
		or die ("Unable to open file! ");
		$txt = "Nguyễn Đăng Tỉnh \n";
		fwrite($myfile1,$txt);
		$txt = "Nguyễn Đăng Tần ";
		fwrite($myfile1,$txt);
		fclose($myfile1);
	?>
</body>
</html>