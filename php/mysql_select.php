<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		table, th, td{border: 1px solid green;
			border-collapse: collapse;
			padding: 0 20px 0 20px;}
	</style>
</head>
<body>
	<?php 
		$server = "127.0.0.1";
		$user = "root";
		$pass = "55555";
		$db = "dangtinh";

		$conn = new mysqli($server, $user, $pass, $db);
		if($conn->connect_error)
		{
			die("Connection failed: ". $conn->connect_error);
		}
		$sql = "SELECT * FROM MyGuests";
		$result = $conn->query($sql);
		if($result->num_rows > 0)
		{
			echo "<table><tr><th>ID</th><th>Name</th><th>Email</th></tr>";
			while($row = $result->fetch_assoc())
			{
				echo "<tr><td>". $row["id"]."</td><td>".$row["lastname"]." ".$row["firstname"]."</td><td>".$row["email"]."</td></tr>";
			}
				echo "</table>";
		}
		else
		{
			echo "0 results ";
		}
		$conn->close();
	?>
</body>
</html>