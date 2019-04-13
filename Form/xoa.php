<?php 
include_once './Entities/Student.php';
include_once './Entities/Lop.php';
include_once './DAL/config.php';

if(isset($_GET['MaSV'])){
	$masinhvien = $_GET['MaSV'];
	if(Student::Xoa($masinhvien)){
		header("location: index2.php");
	}else{
		echo "Xóa thất bại";
	}
}


?>