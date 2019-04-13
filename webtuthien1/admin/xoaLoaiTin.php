<?php 
	ob_start();
	session_start();
	require "../library/DBConnect.php";
	require "../library/quantri.php";
?>
<?php 
	$idLT = $_GET["idLT"];
	settype($idLT,"int");
	$qr = "
		DELETE FROM loaitin WHERE idLT = '$idLT';
	";
	mysql_query($qr);
	header("location:listLoaiTin.php");
?>