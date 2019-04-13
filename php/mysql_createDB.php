<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		$servername = "localhost";
		$username = "root";
		$password = "55555";
	//	$dbname = "dangtinh";
		$conn = new mysqli($servername, $username, $password);
		if($conn->connect_error)
		{
			die("Connection failed: ".$conn->connect_error);
		}

		// tạo CSDL
		$sql = "CREATE DATABASE myDB";
		if($conn->query($sql)==TRUE)
		{
			echo "Database create successfully ";
		}	
		else
		{
			// OOP
			echo "Error creating database ". $conn->error;
			// Procedural
		//	echo "Error creating database ". $mysqli_error($conn);
		}
		// OOP
		$conn->close();
		// Procedural
	//	$mysqli_close($conn);

		// PDO
		try
		{
			$conn = new PDO("mysql:host=$servername; dbname=myDB",$username, $password);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "CREATE DATABASE myDBPDO";
			$conn->exec($sql);
		}
		catch(PDOException $e)
		{
			echo $sql."<br>". $e->getMessage();
		}
		$conn = null;
	?>
</body>
</html>