<?php 
	session_start();
	require "library/DBConnect.php";
	require "library/trangchu.php";
?>
<?php 
  // check Login
if (isset($_POST["btnLogin"])) {
    $un = $_POST["txtUn"];
    $pw = $_POST["txtPw"];
    $pw = md5($pw);
    $qr = "
    SELECT * FROM Users WHERE Username = '$un' AND Password = '$pw'
    ";
    $user = mysql_query($qr);
    
    // mysqli_affected_rows()
    if (mysql_num_rows($user)==1) {
      // dang nhap dung
      $row = mysql_fetch_array($user);
      $_SESSION["idUser"] = $row['idUser'];
      $_SESSION["Username"] = $row['Username'];
      $_SESSION["HoTen"] = $row['HoTen'];
      $_SESSION["idGroup"] = $row['idGroup'];
  }
}
?>
<?php  
  // thoat
    if (isset($_POST["btnExit"])) {
        unset($_SESSION["idUser"]);
        unset($_SESSION["Username"]);
        unset($_SESSION["HoTen"]);
        unset($_SESSION["idGroup"]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<base href="http://localhost:81/webtuthien1/" />
	<!-- <base href="http://tinhbi5.96.lt/" /> -->
	<meta charset="UTF-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<?php 
			if (isset($_GET["idTin"])) {
				$idTin = $_GET["idTin"];
				settype($idTin, "int");
			}
			else
			{
				$idTin = 1;
			}
			$tin = ChiTietTin($idTin);
			$row_tin = mysql_fetch_array($tin);
		?>
	<title><?php echo $row_tin["TieuDe"]; ?></title>
	<link rel="shortcut icon" href="icon/logo.png" />
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
	<!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	<!-- <link rel="stylesheet" href="css/font-awesome.min.css"> -->

	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<script type="text/javascript" src="js/slide.js"></script>
	<script type="text/javascript" src="js/to_top.js"></script>
	<script type="text/javascript" src="js/date.js"></script>

	<link rel="stylesheet" href="css/w3.css">
</head>

<body>
	<div id="wrapper">
		<div id="banner">
			<?php
				require("blocks/banner.php");
			?>
		</div><!--banner-->
		<div id="menu">
			<?php
				require("blocks/menu.php");
			?>
		</div><!-- menu -->
		<div id="content">
			<?php
				require("blocks/content.php");
			?>
		</div> <!-- content -->
		<div id="footer">
			<?php
				require("blocks/footer.php");
			?>  
		</div><!-- footer -->
	</div>

</body>

</html>