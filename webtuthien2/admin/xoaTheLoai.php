<?php 
	ob_start();
	session_start();
	require "../library/DBConnect.php";
	require "../library/quantri.php";
?>
<?php 
	$idTL = $_GET["idTL"];
	settype($idTL,"int");
	$qr = "
		DELETE FROM theloai WHERE idTL = '$idTL';
	";
	mysql_query($qr);
	header("location:listTheLoai.php");
?>