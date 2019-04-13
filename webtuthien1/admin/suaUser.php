<?php 
	ob_start();
	session_start();
	require "../library/DBConnect.php";
	require "../library/quantri.php";
?>

<?php 
	$idUser = $_GET["idUser"];
	settype($idUser,"int");
	$row_user = ChiTietUser($idUser);
?>

<?php 
	if(isset($_POST["btnSua"])){
		$HoTen = $_POST["HoTen"];
		$Username = $_POST["Username"];
		$Password = md5($_POST["Password"]);
		$DienThoai = $_POST["DienThoai"];
		$Email = $_POST["Email"];
		$DiaChi = $_POST["DiaChi"];
		$idGroup = $_POST["idGroup"];
			settype($idGroup,"int");
		$qr = "
			UPDATE users SET
			HoTen = '$HoTen',
			Username = '$Username',
			-- Password = '$Password',
			DienThoai = '$DienThoai',
			Email = '$Email',
			DiaChi = '$DiaChi',
			idGroup = '$idGroup'
			WHERE idUser = '$idUser'
	";
		mysql_query($qr);
		header("location:listUser.php");
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
	      <td height="50" colspan="2"><h2>SỬA USER</h2></td>
        </tr>
	    <tr>
	      <td class="color" height="44">Username</td>
	      <td><label for="Username"></label>
          	<input value="<?php echo $row_user["Username"]; ?>" type="text" name="Username" id="Username" size="50" style="height:30px" readonly ></td>
        </tr>
	    <tr>
	      <td class="color" width="178" height="54">HoTen</td>
	      <td width="406">
	      	<div class="form-group">
	      		<input value="<?php echo $row_user["HoTen"]; ?>" type="text" name="HoTen" class="form-control" id="HoTen" size="50" style="height:30px">
	      	</div>
	      </td>
        </tr>
        <tr>
	      <td class="color" height="44">DienThoai</td>
	      <td><label for="DienThoai"></label>
          	<input value="<?php echo $row_user["DienThoai"]; ?>" type="text" name="DienThoai" id="DienThoai" size="50" style="height:30px"></td>
        </tr>
        <tr>
	      <td class="color" height="44">Email</td>
	      <td><label for="Email"></label>
          	<input value="<?php echo $row_user["Email"]; ?>" type="email" name="Email" id="Email" size="50" style="height:30px"></td>
        </tr>
        <tr>
	      <td class="color" height="44">DiaChi</td>
	      <td><label for="DiaChi"></label>
          	<input value="<?php echo $row_user["DiaChi"]; ?>" type="text" name="DiaChi" id="DiaChi" size="50" style="height:30px"></td>
        </tr>
	    <tr>
	      <td class="color" height="44">idGroup</td>
	      <td><label for="idGroup"></label>
	        <p>
	        <div class="form-group">
	          <label>
	            <input <?php if ($row_user["idGroup"]==1) echo "checked='checked'"; ?> type="radio" name="idGroup" value="1" id="idGroup_0">
	            Nhóm 1</label>
	          <br>
	          <label>
	            <input <?php if ($row_user["idGroup"]==0) echo "checked='checked'"; ?> type="radio" name="idGroup" value="0" id="idGroup_1">
	            Nhóm 0 </label>
	          <br>
	         </div>
          </p></td>
        </tr>
        <tr>
	      <td height="45"></td>
	      <td><input class="sua" type="submit" name="btnSua" id="btnSua" value="Sửa"></td>
        </tr>
      </table>
</form>
</td>
</tr>
<h1>&nbsp;</h1>
</body>
</html>