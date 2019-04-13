<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>		
<body>
	<?php
	// nhận giá trị note bên file note.xml
	$xml = simplexml_load_file("note.xml")
	or die("Error: Cannot create object ");
	echo $xml->to."<br>";
	echo $xml->from."<br>";
	echo $xml->heading."<br>";
	echo $xml->body."<br>";
	echo "<br>";

	// nhận giá trị note bên file books.xml cụ thể
 	$xml=simplexml_load_file("books.xml")
	or die("Error: Cannot create object");
	echo $xml->book[0]->title."<br>";
	echo $xml->book[1]->title."<br>";
	echo $xml->book[2]->year."<br>";
	
	// nhận giá trị note - vòng bên file note.xml 
	$xml = simplexml_load_file("books.xml")
	or die("Error: Cannot create object");
	foreach ($xml ->children() as $books) 
	{
		echo $books->title.", ";
		echo $books->author.", ";
		echo $books->year.", ";
		echo $books->price."<br> ";
	}
	// nhận giá trị thuật tính
	$xml = simplexml_load_file("books.xml")
	or die("Error: Cannot create object");
	echo $xml->book[0]['category']."<br>";
	echo $xml->book[1]->title['lang']."<br>";
	echo "<br>";

	// giá trị thuật tính vòng
	$xml = simplexml_load_file("books.xml")
	or die("Error: Cannot create object");
	foreach ($xml ->children() as $books) {
		echo $books->title['lang']."<br>";
	}

	?>

</body>
</html>