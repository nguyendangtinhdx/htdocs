<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tổ chức từ thiện HFB</title>
	<link rel="icon" href="icon/logo.png" />
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

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
<?php 
        if (!isset($_SESSION['idUser'])) {
            require "admin/formLogin.php";
        }
        else{
            require "admin/loginFinish.php";
        }
?>
</body>
</html>