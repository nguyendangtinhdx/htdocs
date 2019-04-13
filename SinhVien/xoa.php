<?php 

include_once './Entities/Lop.php';
include_once './Entities/Student.php';
include_once './Entities/Config.php';
$conn= ConnectDB();
if(isset($_GET['masv'])){
	$masv = $_GET['masv'];
	if(Student::xoa($masv)){
		header("Location: index.php");
	}else{
		// header("Location: index.php");
		echo "Xóa ko dc";
	}
}



 ?>