<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		// khởi chạy phân tích cú pháp
		$parser = xml_parser_create();
		// hàm số dùng để bắt đầu yêu tố
		function start($parser, $element_name,$element_attrs)
		{
			switch ($element_name) {
				case "NOTE":
					echo "--Note--<br>";
					break;
				case "TO":
					echo "To:";
					break;
				case 'FROM':
					echo "From: ";
					break;
				case 'HEADING':
					echo "Heading: ";
					break;
				case 'BODY':
					echo "Message: ";
					break;
			}
		}
		// hàm số dùng để kết thúc yếu tố
		function stop($parser,$element_name)
		{
			echo "<br>";
		}
		function char($parser,$data)
		{
			echo $data;
		}
		// chỉ định xử lý yếu tố
		xml_set_element_handler($parser,"start","stop");
		// chỉ định xử lý dữ liệu
		xml_set_character_data_handler($parser,"char");
		// mở file XML
		$fp=fopen("note.xml","r");
		// đọc dữ liệu
		while ($data=fread($fp,4096)) {
			xml_parse($parser, $data,feof($fp)) 
			or die(sprintf("XML Error: %s at line %d",
				xml_error_string(xml_get_error_code($parser)),
				xml_get_current_line_number($parser)));
		}
		// giải phóng phân tích cú pháp
		xml_parser_free($parser);
	?>
</body>
</html>