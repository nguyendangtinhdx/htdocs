<?php 
	ob_start();
	session_start();
	require "../library/DBConnect.php";
	require "../library/quantri.php";
?>
<?php 
	$idQuangCao = $_GET["idQuangCao"];
	settype($idQuangCao,"int");
	$qr = "
		DELETE FROM quangcao WHERE idQuangCao = '$idQuangCao';
	";
	mysql_query($qr);
	header("location:listQuangCao.php");
?>