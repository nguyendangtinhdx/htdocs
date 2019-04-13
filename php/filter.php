<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		table, th, td{
			border: 1px solid black;
			border-collapse: collapse;
		}
		th, td {padding: 5px;}
	</style>
</head>
<body>
	<table>
		<tr>
			<td>Name</td>
			<td>Id</td>
		</tr>
		<?php 	// mở rộng filter
			foreach (filter_list() as $id => $filter) {
				echo "<tr><td>".$filter."</td><td>". filter_id($filter).
				"</td></tr>";
		}
		?>
	</table>

		<?php
			$str = "<h1>Nguyễn Đăng Tỉnh</h1>";	
			$newstr = filter_var($str,FILTER_SANITIZE_STRING); // loại bỏ các thẻ
			echo $newstr;
			echo "<br>";

			$int = 100;
			if (!filter_var($int,FILTER_VALIDATE_INT===false||!filter_var($int,FILTER_VALIDATE_INT
			===0))) // xác nhận 1 Integer
			{
				echo "Integer is valid";
			}
			else
			{
				echo "Integer is valid";
			}
			echo "<br>";

			$ip = "127.0.0.1";
			if (!filter_var($ip,FILTER_VALIDATE_IP)===false) 
				// xác nhận 1 đại chỉ IP
			{
				echo "$ip is a valid IP address";
			}
			else
			{
				echo "$ip is a valid IP address";
			}
			echo "<br>";

			$email = "nguyendangtinhdx@gmail.com";
		//	$email = filter_var($email,FILTER_VALIDATE_EMAIL);//	Remove all illegal characters from email
			if (!filter_var($email,FILTER_VALIDATE_EMAIL)===false) 
			{
				echo "$email is a valid email address";
			}
			else
			{
				echo "$email is not a valid email address";
			}

			$url = "http://www.facebook.com";
			// tương tự email
		?>
</body>
</html>