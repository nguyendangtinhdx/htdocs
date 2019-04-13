<?php 
ob_start();
session_start();
require "../library/DBConnect.php";
require "../library/quantri.php";
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
			<form action="" method="POST">
				<input name="btnExit" type="submit" class="btn btn-danger btn-sm" value="Thoát">
			</form>
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
	<table id="table" width="1072" border="1">
		<tr>
			<td height="76" colspan="10" ><h1>DANH SÁCH USER</h1></td>
		</tr>
		<tr>
			<td class="color" width="53" height="43">idUser</td>
			<td class="color" width="55">HoTen</td>
			<td class="color" width="93">Username</td>
			<td class="color" width="245">Password</td>
			<td class="color" width="93">DienThoai</td>
			<td class="color" width="127">Email</td>
			<td class="color" width="105">DiaChi</td>
			<td class="color" width="85">idGroup</td>
			<td width="186"><a class="them" href="themUser.php">Thêm</a></td>
		</tr>
		<?php 
		$user = DanhSachUser();
		while ($row_user = mysql_fetch_array($user)) {
			ob_start();
			?>
			<tr>
				<td height="83"><p>{idUser}</p>
			    <td>{HoTen}</td>
				<td>{Username}</td>
				<td>{Password}</td>
				<td>{DienThoai}</td>
				<td>{Email}</td>
				<td>{DiaChi}</td>
				<td>{idGroup}</td>
				<td><p><a class="sua" href="suaUser.php?idUser={idUser}">Sửa</a> &nbsp;&nbsp;&nbsp;<a onclick="return confirm('Bạn có chắc chắn muốn xóa không ?')" class="xoa" href="xoaUser.php?idUser={idUser}"> Xóa</a></p>
				  <p><br>
				    <a class="reset" href="resetPasswordUser.php?idUser={idUser}">Reset mật khấu</a></p>
				</td>
			</tr>
			<?php 
			$s = ob_get_clean();
			$s = str_replace("{idUser}", $row_user["idUser"], $s);
			$s = str_replace("{HoTen}", $row_user["HoTen"], $s);
			$s = str_replace("{Username}", $row_user["Username"], $s);
			$s = str_replace("{Password}", $row_user["Password"], $s);
			$s = str_replace("{DienThoai}", $row_user["DienThoai"], $s);
			$s = str_replace("{Email}", $row_user["Email"], $s);
			$s = str_replace("{DiaChi}", $row_user["DiaChi"], $s);
			$s = str_replace("{idGroup}", $row_user["idGroup"], $s);
			echo $s ;
		}
		?>
	</table>
</td>
</tr>
<h1>&nbsp;</h1>
</body>
</html>