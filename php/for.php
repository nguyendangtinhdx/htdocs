<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		$t = date("H");
		if ($t<"10") 					// if
		{			
			echo "Good Morning";
		}
		else if($t<"20")
		{
			echo "Good Day";
		}
		else
		{
			echo "Good Night";
		}

		$color = "red";
		switch ($color) 				// switch
		{
			case "green":
				echo "<br>"."Màu xanh";
				break;
			case "red":
				echo "<br>"."Màu đỏ";
				break;
			default:
				echo "<br>"."Màu khác";
				break;
		}

		$x = 1;
		while($x<=5)					// while
		{
			echo "<br>"."Number: ".$x;
			$x++;
		}
		$y=10;

		do 								// do while
		{
			echo "<br>".$y;
			$y--;
		}while($y>5);

		for ($i=0; $i <5 ; $i++) 		// for
		{ 
			echo "<br>"."<mark>".$i."<mark>";
		}

		$mau = array("red","green","black","white");
		foreach ($mau as $value) 		// foreach
		{
			echo "<br>".$value;
		}

		function my($i,$y=7) 			// function
		{
			echo "<br>".$i.": $y";
		}
		my("Nguyễn",5);
		my("Đăng");		// lấy từ định nghĩa
		my("Tỉnh",9);

		function sum($x, $y)
		{
			$z = $x + $y;
			return $z;
		}
		echo "<br> Sum = ".sum(5,4);
	?>
</body>
</html>