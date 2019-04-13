<?php 
	ob_start();
	session_start();
	require "../library/DBConnect.php";
	require "../library/quantri.php";
?>
<?php 
	$idVideo = $_GET["idVideo"];
	settype($idVideo,"int");
	$qr = "
		DELETE FROM video WHERE idVideo = '$idVideo';
	";
	mysql_query($qr);
	header("location:listVideo.php");
?>