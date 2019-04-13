<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		$servername = "127.0.0.1";
		$username = "root";
		$password = "55555";
		$dbname = "dangtinh";
		// tạo kết nối
		$conn = new mysqli($servername,$username,$password,$dbname);
		// nếu sử dụng cổng thì dùng: mysqli("localhost","username","password","",port)
		//kiểm tra kết nối
		if($conn->connect_error)
		{
			die("Connection failed: ". $conn->connect_error);
		}
		// if(!conn)
		// {
		// 	die("onnectionfailed: ".mysqli_connect_error());
		// }
		else
		{
		 echo " Connected successfully";
		}

		 // PDO đòi hỏi phải có csdl hợp lệ
		 // nếu không có csdl thì ngoại lệ ném ra
		 // try
		 // {
		 // 	$conn = new PDO("mysql:host=$servername; dbname=myDB", $username, $password);
		 // 	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			//  echo " Connected successfully";
		 // }
		 // catch(PDOException $e)
		 // {
		 // 		echo "Connection failed: ". $e->getMessage();
		 // }
		 // đóng kết nối: $conn->close();
		 // thủ tục: mysqli_close($conn);
		 // PDO: $conn = null;
	?>
</body>
</html>