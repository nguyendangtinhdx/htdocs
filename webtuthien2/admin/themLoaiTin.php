<?php 
	ob_start();
	session_start();
	require "../library/DBConnect.php";
	require "../library/quantri.php";
?>

<?php 
	if(isset($_POST["btnThem"])){
		$Ten = $_POST["Ten"];
		$Ten_KhongDau = changeTitle($Ten);
		$ThuTu = $_POST["ThuTu"];
			settype($ThuTu,"int");
		$AnHien = $_POST["AnHien"];
			settype($AnHien,"int");
		$idTL = $_POST["idTL"];
			settype($idTL,"int");
		$qr = "
		INSERT INTO loaitin 
		VALUES(null,'$Ten','$Ten_KhongDau','$ThuTu','$AnHien','$idTL')
	";
		mysql_query($qr);
		header("location:listLoaiTin.php");
	}
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
if (!isset($_SESSION["idUser"])) {
	header("location:../index.php");
}
else{
	if($_SESSION["idGroup"]!=0){
		header("location:../index.php");
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tổ chức từ thiện HFB</title>
	<link rel="icon" href="../icon/logo.png" />
	<link rel="stylesheet" href="layout.css">
	
</head>
<body>
	<div class="title">Trang quản trị 
		<div class="user">Chào bạn <?php echo $_SESSION["HoTen"]; ?> 
			<div>
				<form action="" method="POST">
					<input name="btnExit" type="submit" class="btn btn-danger btn-sm" value="Thoát">
				</form>
			</div>
		</div>
		
	</div>
	
	<table>
		<td>
			<div class="wrapper">
				<ul id="folding-menu">
					<li><a href="index.php">Trang chủ</a></li>
					<li><a href="listTheLoai.php">Quản lí Thể loại</a></li>
					<li><a href="listLoaiTin.php">Quản lí Loại tin</a></li>
					<li><a href="listTin.php">Quản lí Tin</a></li>
					<li><a href="listVideo.php">Quản lí Video</a></li>
					<li><a href="listQuangCao.php">Quản lí Quảng cáo</a></li>
					<?php 
						if ($_SESSION["Username"]=="admin") {
					?>
					 	<li><a href="___list-_-User.php">Quản lí User</a></li> 
					<?php
						}
					?>
				</ul>
			</div>
		</td>
	</table>
	<form name="form1" method="post" action="">
	  <table id="table_sub" border="1">
	    <tr>
	      <td height="50" colspan="2"><h2>THÊM LOẠI TIN</h2></td>
        </tr>
	    <tr>
	      <td class="color" width="178" height="54">Ten</td>
	      <td width="406">
	      	<div class="form-group">
	      		<input type="text" name="Ten" class="form-control" id="usr" size="50" style="height:30px">
	      	</div>
	      </td>
        </tr>
	    <tr>
	      <td class="color" height="44">ThuTu</td>
	      <td><label for="ThuTu"></label>
          	<input type="text" name="ThuTu" id="ThuTu" size="50" style="height:30px"></td>
        </tr>
	    <tr>
	      <td class="color" height="45">AnHien</td>
	      <td><p>
	        <label>
	          <input type="radio" name="AnHien" value="1" id="AnHien_0">
	          Hiện</label>
	        
	        <label>
	          <input type="radio" name="AnHien" value="0" id="AnHien_1">
            Ẩn</label>
	        <br>
          </p></td>
        </tr>
        <tr>
	      <td class="color" height="44">TenTL</td>
	      <td><label for="idTL"></label>
	        <select name="idTL" id="idTL" style="width: 200px; height: 30px;">
				<?php 
					$theloai = DanhSachTheLoai();
					while ($row_theloai = mysql_fetch_array($theloai)) {
				?>
	        	<option value="<?php echo $row_theloai["idTL"]; ?>"><?php echo $row_theloai["TenTL"]; ?></option>
				<?php 
					}
				?>
          </select></td>
        </tr>
	    <tr>
	      <td height="45"></td>
	      <td><input class="them" type="submit" name="btnThem" id="btnThem" value="Thêm"></td>
        </tr>
      </table>
</form>
</td>
</tr>
<h1>&nbsp;</h1>
</body>
</html>