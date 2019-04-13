<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		// đọc dự liệu XML từ 1 chuỗi
		$myXMLData = "<?xml version = '1.0' encoding = 'UTF-8'?>
		<note>
		<to>Tove</to>
		<from>Jani</from>
		<heading>Remider</heading>
		<body>Don't forget me this weekend !</body>
		</note>";
		$xml = simplexml_load_string($myXMLData)
		or die("Error: Connot create object");
		print_r($xml);
		echo "<br>";
		echo "<br>";

		// tải 1 chuỗi bị hỏng
		libxml_use_internal_errors(true);
		$myXMLData = "<?xml version='1.0' encoding='UTF-8'?>
		<document>
		<user> Nguyễn Đăng Tỉnh </wronguser>
		<email>nguyendangtinhdx@gmail.com</wronguser>
		</document>";
		$xml = simplexml_load_string($myXMLData);
		if($xml===false)
		{
			echo "Failed loading XML: ";
			foreach(libxml_get_errors() as $error)
			{
				echo "<br>",$error->message;
			}
		}
		else
		{
			print_r($xml);
		}
		echo "<br>";
		echo "<br>";
		
		// đọc dữ liệu XML từ 1 tập tin
		$xml = simplexml_load_string("note.xml")
		or die("Error: Cannot create object ");
		print_r($xml);
	?>
</body>
</html>