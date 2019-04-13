<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		$server = "localhost";
		$user = "root";
		$password = "55555";
		$db = "dangtinh";

		$conn = new mysqli($server, $user, $password, $db);
		if($conn->connect_error)
		{
			echo " Connect failed : ". $conn->connect_error;
		}
		else
		{
			echo " Connect successfully "."<br>";
		}

		// chuẩn bị bà rằng buộc (prepare and bind)
		$stmt = $conn->prepare("INSERT INTO MyGuests(firstname,lastname,email) VALUES(?,?,?)");
		$stmt->bind_param("sss",$firstname, $lastname, $email);

		// đặt thông số và thi hành (parameters ans execute)
		$firstname = "A";
		$lastname = "B";
		$email = "C";
		$stmt -> execute();

		$firstname = "D";
		$lastname = "E";
		$email = "F";
		$stmt -> execute();

		$firstname = "G";
		$lastname = "H";
		$email = "I";
		$stmt -> execute();
		echo " New records created successfully ";

		$stmt->close();
		$conn->close();
	?>
</body>
</html>