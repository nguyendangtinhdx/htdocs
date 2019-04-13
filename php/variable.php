<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php
	$x = "Nguyen Dang Tinh !";
	$y = 5;
	$z = 10;
	echo "<h2>".$x."</h2>"."<br>".$y;				// or print $x;
	function my()
	{
		$t = 3;
		echo "<br>".$z; // error
		echo "<br>".$t;
	}
	my();
		echo "<br>".$z;
		echo "<br>".$t; // error

	function my1()
	{
		global $z,$y;	// $GLOBALS['y'] = $GLOBALS['z'] + $GLOBALS['y'];
		$y+=$z;
	}
	my1();
	echo $y;
	function my2()
	{
		static $i = 0;
		echo "<br>".$i;
		$i++;
	}
	my2();
	echo "<br>";
	my2();
	echo "<br>";

	var_dump($x,$y);	// kiểm tra tính

	class car 					// object
	{
		function car()
		{
			$this->name = "Tinh Bi";
		}
	}
	$tt = new car();
	echo "<br>".$tt->name;
	echo "<br>".$x.=$y;			// nối 
?>
</body>
</html>
