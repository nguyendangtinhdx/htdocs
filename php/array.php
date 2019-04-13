<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	$car = array("Moto "," Oto "," Bike");
	sort($car);			// sắp xếp a->z
//	rsort($car)			// sắp xếp z->a
	echo "Các loại xe: ".$car[0].$car[1].$car[2].
	"<br> Tổng số: ".count($car);

	$age = array('Tần' => '36', 'Lợi' => '33', 'Tỉnh' => '19');
	asort($age);		// sắp xếp tăng giá trị (sau =>)
//	arsort($age);		// sắp xếp giảm giá trị (sau =>)
	ksort($age);		// sắp xếp tăng chìa khóa (trước =>)
//	krsort($age);		// sắp xếp giảm chìa khóa (trước =>)
	foreach ($age as $x => $value) 
	{
		echo "<br>".$x.": ".$value;
	}
	?>
</body>
</html>