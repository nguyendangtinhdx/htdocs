<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	$int = 5;
	$min = 1;
	$max = 100;
	if (filter_var($int,FILTER_VALIDATE_INT,
		array("options"=>array("min_range"=>$min,"max_range"=>$max)))===0)
		// xác nhận Integer trong vòng 1 Range
	{
		echo "Variable valus is not within the legal range";
	}
	else
	{
		echo "Variable valus is within the legal range";
	}
	echo "<br>";

	$ip = "001:0db8:85a3:08d3:1319:8a2e:0370:7334";
	if(!filter_var($ip,FILTER_VALIDATE_IP,FILTER_FLAG_IPV6)===false)
		// xác nhận địa chỉ IPv6
	{
		echo "$ip is a valid IPv6 address";
	}
	else
	{
		echo "$ip is not a valid IPv6 address";
	}
	echo "<br>";

	$url = "http://www.facebook.com";
	if (!filter_var($url,FILTER_VALIDATE_URL,FILTER_FLAG_QUERY_REQUIRED)===0) 
	{
		echo "$url is a valid URL";
	}
	else
	{
		echo "$url is not a valid URL";
	}
	echo "<br>";

	$str = "<h1> Nguyễn Đăng Tỉnh ÆØÅ</h1>";
	$newstr = filter_var($str,FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
		// kiểm tra các kí tự ASCII > 127
	echo $newstr;

	?>
</body>
</html>