<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		$server = "127.0.0.1";
		$user = "root";
		$pass = "55555";
		$db = "dangtinh";
		$conn = new mysqli($server,$user,$pass,$db);

		if($conn->connect_error)
		{
			echo " Connect failed ". $conn->connect_error;
		}
		else
		{
			echo " Connect seccess "."<br>";
		}
		 	// bổ sung
		// $sql = "INSERT INTO MyGuests(firstname, lastname, email)
		// VALUES(N'Ngô',N'Thị Lệ','ngothiledx@gmai.com');";
		// if($conn->query($sql)==TRUE)
		// {
		// 	echo " Insert seccess "."<br>";
		// }
		// else
		// {
		// 	echo " Insert error ". $conn->error;
		// }

			// xóa
		 // $s = "DELETE FROM MyGuests WHERE id = 16 ";
		 // if($conn->query($s)==TRUE)
		 // {
		 // 	echo " Delete success";
		 // }
		 // else
		 // {
		 // 	echo " Delete error ". $conn->error;
		 // }

		 // update 
		 // $u = " UPDATE MyGuests SET id = 4 WHERE id = 5";
		 // if($conn->query($u)===TRUE)
		 // {
		 // 	echo "Update success ";
		 // }
		 // else
		 // {
		 // 	echo "Update error " .$conn->eror ;
		 // }

			// limit
			$l = "SELECT * FROM MyGuests ";
			$result = $conn->query($l);
			if($result->num_rows > 0)
			{
				echo "<table><tr><th>ID</th><th>Name</th><th>Email</th>";
				while($row = $result->fetch_assoc())
				{
					echo "<tr><td>". $row["id"]."</td><td>".$row["lastname"]." ".$row["firstname"]."</td><td>".$row["email"]."</td></tr>";
				}
					echo "</table>";
			}
			else
			{
				echo " 0 Result ";
			}

		$conn->close();
	?>
</body>
</html>