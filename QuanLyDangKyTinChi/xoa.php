<?php 
include_once './Entities/LoaiChungChi.php';
include_once './Entities/HocVien.php';
include_once './DAL/config.php';

if(isset($_GET['id'])){
	$id = $_GET['id'];
	if(LoaiChungChi::xoa($id)){
		header("location: LoaiChungChi.php");
	}else{
		echo "Xóa thất bại";
	}
}


?>