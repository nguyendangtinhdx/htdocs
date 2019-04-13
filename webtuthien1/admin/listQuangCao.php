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
			<td height="76" colspan="7" ><h1>DANH SÁCH QUẢNG CÁO</h1></td>
		</tr>
		<tr>
			<td class="color" width="90" height="43">idQuangCao</td>
			<td class="color" width="44">ViTri</td>
			<td class="color" width="184">MoTa</td>
			<td class="color" width="218">Url</td>
			<td class="color" width="231">urlHinh</td>
			<td class="color" width="101">SoLanClick</td>
			<td width="186"><a class="them" href="themQuangCao.php">Thêm</a></td>
		</tr>
		<?php 
		$quangcao = DanhSachQuangCao();
		while ($row_quangcao = mysql_fetch_array($quangcao)) {
			ob_start();
			?>
			<tr>
				<td height="43"><p>{idQuangCao}</p>
			    <td> {ViTri}</td>
				<td>{MoTa}</td>
				<td>{Url}</td>
				<td><img src="../upload/tintuc/{urlHinh}" width="152" height="103"></td>
				<td>{SoLanClick}</td>
				<td><a class="sua" href="suaQuangCao.php?idQuangCao={idQuangCao}">Sửa</a> &nbsp;&nbsp;&nbsp;<a onclick="return confirm('Bạn có chắc chắn muốn xóa không ?')" class="xoa" href="xoaQuangCao.php?idQuangCao={idQuangCao}"> Xóa</a></td>
			</tr>
			<?php 
			$s = ob_get_clean();
			$s = str_replace("{idQuangCao}", $row_quangcao["idQuangCao"], $s);
			$s = str_replace("{ViTri}", $row_quangcao["ViTri"], $s);
			$s = str_replace("{MoTa}", $row_quangcao["MoTa"], $s);
			$s = str_replace("{Url}", $row_quangcao["Url"], $s);
			$s = str_replace("{urlHinh}", $row_quangcao["urlHinh"], $s);
			$s = str_replace("{SoLanClick}", $row_quangcao["SoLanClick"], $s);
			echo $s ;
		}
		?>
	</table>
</td>
</tr>
<h1>&nbsp;</h1>
</body>
</html>