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
		$passwork = "55555";
		$dbname = "dangtinh";	
		// kết nối CSDL
		$conn = new mysqli($servername,$username,$passwork,$dbname);
		if($conn->connect_error)
		{
			echo "Connection failed: ". $conn->connect_error;
		}
		echo "CONNECT success "."<br>";
		
		// tạo bảng
		 $sql = "CREATE TABLE MyGuests
		(
			id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			firstname VARCHAR(30) NOT NULL,
			lastname VARCHAR(30) NOT NULL,
			email VARCHAR(50),
			reg_date TIMESTAMP
		)";
		if($conn->query($sql)==TRUE)
		{
			echo " Create TABLE success "."<br>";
		}
		else
		{
			echo " Error creating Table ". $conn->error;
		}
		
		// // chèn dữ liệu
		$sql = "INSERT INTO MyGuests(firstname, lastname, email)
		VALUES(N'Đăng Tỉnh', N'Nguyễn','tinhbidx@gmail.com');";
		$sql .= "INSERT INTO MyGuests(firstname, lastname, email)
		VALUES(N'Đăng Tần', N'Nguyễn','dangtandx@gmail.com');";
		$sql .= "INSERT INTO MyGuests(firstname, lastname, email)
		VALUES(N'Đăng Lợi', N'Nguyễn','dangloidx@gmail.com')";
		if($conn->multi_query($sql)==TRUE)
		{
			// chèn id vào cuối
		//	$last_id = $conn->insert_id;
		//	echo(" New record created successfully. Last inserted ID is: ". $last_id);
			echo " New RECORDS created successfully ";
		}
		else
		{
			echo "Error: ".$sql."<br>".$conn->error;
		}
		$conn->close();
	?>
</body>
</html>