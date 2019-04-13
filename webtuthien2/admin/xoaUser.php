<?php 
	ob_start();
	session_start();
	require "../library/DBConnect.php";
	require "../library/quantri.php";
?>
<?php 
	$idUser = $_GET["idUser"];
	settype($idUser,"int");
	$qr = "
		DELETE FROM users WHERE idUser = '$idUser';
	";
	mysql_query($qr);
	header("location:listUser.php");
?>