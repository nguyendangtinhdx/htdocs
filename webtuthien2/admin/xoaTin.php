<?php 
	ob_start();
	session_start();
	require "../library/DBConnect.php";
	require "../library/quantri.php";
?>
<?php 
	$idTin = $_GET["idTin"];
	settype($idTin,"int");
	$qr = "
		DELETE FROM tin WHERE idTin = '$idTin';
	";
	mysql_query($qr);
	header("location:listTin.php");
?>