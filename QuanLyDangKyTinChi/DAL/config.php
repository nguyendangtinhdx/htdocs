<?php
function ConnectDB(){
	$servername = "localhost"; 
	$username = "root";
	$password = "";
	$dbname = "quanlydangkytinchi";
	// Tạo kết nối 
	$conn = new mysqli($servername, $username, $password, $dbname);
	$conn->set_charset("utf8");
	// Kiểm tra kết nối 
	if ($conn->connect_error)
		die("Kết nối thất bại: " . $conn->connect_error);
	else
	  	echo "<script>console.log('Kết nối thành công');</script>";
	return $conn;
}
	
?>