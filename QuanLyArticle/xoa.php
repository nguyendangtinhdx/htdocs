<?php 
include_once './Entities/Article.php';
include_once './Entities/Category.php';
include_once './DAL/config.php';

if(isset($_GET['id'])){
	$id = $_GET['id'];
	if(Article::xoa($id)){
		header("location: index.php");
	}else{
		echo "Xóa thất bại";
	}
}


?>