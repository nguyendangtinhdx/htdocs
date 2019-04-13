<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	$car = array
		(
			array("Oto",10,50),
			array("MoTo",40,2),
			array("Volvo",70,66),
			array("Saab",55,19)
		);
		echo $car[0][0]." ".$car[0][1]." ".$car[0][2]."<br>";
		echo $car[1][0]." ".$car[1][1]." ".$car[1][2]."<br>";
		echo $car[2][0]." ".$car[2][1]." ".$car[2][2]."<br>";
		echo $car[3][0]." ".$car[3][1]." ".$car[3][2]."<br>";

		for ($i=0; $i < 3 ; $i++) 
		{ 
			echo "<p><mark> Row number: $i </mark></p>";
			echo "<ul>";
			for ($y=0; $y < 3; $y++) 
			{ 
				echo "<li>".$car[$i][$y]."</li>";
			}
			echo "</ul>";
		}
		echo "Today is: ".date("d/m/Y")."<br>"; // ngày tháng năm
		echo "Today is: ".date("d-m-Y")."<br>";
		echo "Today is: ".date("d.m.Y")."<br>";
		echo "Today is: ".date("l")."©"."<br>"; // thứ
		echo "The time is " . date("h:i:s a")."<br>";	//giờ:phút:giây:buổi
	//	date_default_timezone_set("America/New_York"); // giờ Mỹ
	//	echo "The time is " . date("h:i:sa");

		$d1 = strtotime("December 06")."<br>";		// tính ngày 
		$d2 = ceil(($d1-time())/60/60/24);
		echo "Có ".$d2." ngày cho đến 6th December"."<br>";

		include 'footer.php';	// gọi tẹp footer.php
	?>
</body>
</html>
