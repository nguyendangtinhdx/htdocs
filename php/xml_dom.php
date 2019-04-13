<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	$xmlDoc = new DOMDocument();
	$xmlDoc->load("note.xml");	// tải 
	print $xmlDoc->saveXML();	// in

	$x = $xmlDoc->documentElement;
	foreach ($x->childNodes as $item) {
		print $item->nodeName." = ". $item->nodeValue . "<br>" ;
	}
	?>
</body>
</html>