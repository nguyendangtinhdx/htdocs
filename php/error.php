<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php

	if(!file_exists("read.txt"))
	{
		die("Find not found");
	}
	else
	{
		$file = fopen("read.txt","r");
		while(!feof($file))
		{
			echo fgets($file)."<br>";
		}
	}

		// tạo 1 lỗi 
	// error_function(error_level,error_message,
	// 	error_file,error_line,error_context)	

		// tạo chức năng xử lí lỗi 
	// function customError($errno, $errstr) 
	// {	
	// 	echo "<br>";
	// 	echo "<b>Error:</b> [$errno] $errstr<br>";
	// 	echo "Ending Script";
	// 	die();
	// }
	// set_error_handler("customError",E_USER_WARNING);	// xử lí lỗi 
	// echo ($test);	 // lỗi kích hoạt

	// // lỗi kích hoạt
	// $test = 2;
	// if($test>1)
	// {
	// 	trigger_error(" Value must be 1 or below",E_USER_WARNING);
	// }

	// gửi tin nhắn báo lỗi bằng Email
	function Error($one, $true)
	{
		echo "<b>Error:</b> [$one] $true <br>";
		echo " Webmaster has been notified";
		error_log(" Error: [$one] $true",1,"nguyendangtinhdx@gmail.com",
			"From: tinhnguyendangdx@.com");
	}
	set_error_handler("Error",E_USER_WARNING);
	$t = 2;
	if($t>1)
	{
		trigger_error("Value must be 1 or below",E_USER_WARNING);
	}
	?>
</body>
</html>