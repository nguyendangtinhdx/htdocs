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
			<td height="76" colspan="8" ><h1>DANH SÁCH TIN</h1></td>
		</tr>
		<tr>
			<td class="color" width="107" height="43"><p>idTin -</p>
		    <p> Ngay</p></td>
			<td class="color" width="330"><p>TieuDe -</p>
		    <p> urlHinh - TomTat</p></td>
			<td class="color" width="106">TenTL</td>
			<td class="color" width="100">Ten</td>
			<td class="color" width="83">SoLanXem</td>
			<td class="color" width="77">TinNoiBat</td>
			<td class="color" width="60">AnHien</td>
			<td width="185"><a class="them" href="themTin.php">Thêm</a></td>
		</tr>
			<?php 
				$limit = 10;
				if (isset($_GET["trang"])) {
					$trang = $_GET["trang"];
					settype($trang,"int");
				}
				else{
					$trang = 1;
				}
				$start = ($trang - 1) * $limit;
				$tin = DanhSachTin($start,$limit);
				while ($row_tin = mysql_fetch_array($tin)) {
					ob_start();
			?>
			<tr>
				<td height="43"><p>{idTin}</p>
				  <p>&nbsp;</p>
			    <p>{Ngay}</p></td>
				<td align="left"><p><a href="suaTin.php?idTin={idTin}">{TieuDe}</a></p>
				  <img style="float:left; margin-right:5px;" src="../upload/tintuc/{urlHinh}" width="152" height="103">{TomTat}</p>
		      <p>&nbsp;</td>
				<td>{TenTL}</td>
				<td>{Ten}</td>
				<td>{SoLanXem}</td>
				<td>{TinNoiBat}</td>
				<td>{AnHien}</td>
				<td><a class="sua" href="suaTin.php?idTin={idTin}">Sửa</a> &nbsp;&nbsp;&nbsp;<a onclick="return confirm('Bạn có chắc chắn muốn xóa không ?')" class="xoa" href="xoaTin.php?idTin={idTin}"> Xóa</a></td>
			</tr>
			<?php 
			$s = ob_get_clean();
			$s = str_replace("{idTin}", $row_tin["idTin"], $s);
			$s = str_replace("{Ngay}", $row_tin["Ngay"], $s);
			$s = str_replace("{TieuDe}", $row_tin["TieuDe"], $s);
			$s = str_replace("{TomTat}", $row_tin["TomTat"], $s);
			$s = str_replace("{urlHinh}", $row_tin["urlHinh"], $s);
			$s = str_replace("{TenTL}", $row_tin["TenTL"], $s);
			$s = str_replace("{Ten}", $row_tin["Ten"], $s);
			$s = str_replace("{SoLanXem}", $row_tin["SoLanXem"], $s);
			$s = str_replace("{TinNoiBat}", $row_tin["TinNoiBat"], $s);
			$s = str_replace("{AnHien}", $row_tin["AnHien"], $s);
			echo $s ;
			}
			?>

	</table>
		<?php 
		 	$t = DemTin();
		 	$tongsotin = mysql_num_rows($t);
		 	$tongsotrang = ceil($tongsotin / $limit);
		 	for ($i=1; $i <= $tongsotrang; $i++) { 
		 	?>
			<div class="phantrang">
				<a <?php if ($i == $trang) echo "style='background: #337AB7; color: #FFF'"; ?> href="listTin.php?trang=<?php echo $i; ?>"><?php echo $i; ?></a>
			</div>
		 	<?php
		 	}
		?>
</td>
</tr>
<h1>&nbsp;</h1>
</body>
</html>