<?php 
	ob_start();
	session_start();
	require "../library/DBConnect.php";
	require "../library/quantri.php";
?>

<?php 
	$idTin = $_GET["idTin"];
	settype($idTin,"int");
	$row_tin = ChiTietTin($idTin);
?>

<?php 
	if (isset($_POST["btnSua"])) {
		$TieuDe = $_POST["TieuDe"];
		$TieuDe_KhongDau = changeTitle($TieuDe);
		$TomTat = $_POST["TomTat"];
		$urlHinh = $_POST["urlHinh"];
		$Ngay =  date("Y-m-d");
		$idUser = $_SESSION["idUser"];
		$Content = $_POST["Content"];
		$idLT = $_POST["idLT"];
			settype($idLT,"int");
		$idTL = $_POST["idTL"];
			settype($idTL,"int");
		$SoLanXem = 0;
		$TinNoiBat = $_POST["TinNoiBat"];
			settype($TinNoiBat,"int");
		$AnHien = $_POST["AnHien"];
			settype($AnHien,"int");

		$qr = "
			UPDATE tin SET 
			TieuDe = '$TieuDe',
			TieuDe_KhongDau = '$TieuDe_KhongDau',
			TomTat = '$TomTat',
			urlHinh = '$urlHinh',
			Ngay = '$Ngay',
			idUser = '$idUser',
			Content = '$Content',
			idLT = '$idLT',
			idTL = '$idTL',
			SoLanXem = '$SoLanXem',
			TinNoiBat = '$TinNoiBat',
			AnHien = '$AnHien'
			WHERE idTin = '$idTin'
		";
		mysql_query($qr);
		header("location:listTin.php");
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
	<script src="ckeditor/ckeditor.js"></script>
	<script src="ckfinder/ckfinder.js"></script>
	<script src="../js/jquery.min.js"></script>
	<script src="../ajax/ajax.js"></script>
	<script type="text/javascript">
		function BrowseServer( startupPath, functionData ){
			var finder = new CKFinder();
			finder.basePath = 'ckfinder/'; //Đường path nơi đặt ckfinder
			finder.startupPath = startupPath; //Đường path hiện sẵn cho user chọn file
			finder.selectActionFunction = SetFileField; // hàm sẽ được gọi khi 1 file được chọn
			finder.selectActionData = functionData; //id của text field cần hiện địa chỉ hình
			//finder.selectThumbnailActionFunction = ShowThumbnails; //hàm sẽ được gọi khi 1 file thumnail được chọn	
			finder.popup(); // Bật cửa sổ CKFinder
		} //BrowseServer

		function SetFileField( fileUrl, data ){
			document.getElementById( data["selectActionData"] ).value = fileUrl;
		}
		function ShowThumbnails( fileUrl, data ){	
			var sFileName = this.getSelectedFile().name; // this = CKFinderAPI
			document.getElementById( 'thumbnails' ).innerHTML +=
			'<div class="thumb">' +
			'<img src="' + fileUrl + '" />' +
			'<div class="caption">' +
			'<a href="' + data["fileUrl"] + '" target="_blank">' + sFileName + '</a> (' + data["fileSize"] + 'KB)' +
			'</div>' +
			'</div>';
			document.getElementById( 'preview' ).style.display = "";
			return false; // nếu là true thì ckfinder sẽ tự đóng lại khi 1 file thumnail được chọn
		}
	</script>
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
	  <table id="table_sub_themtin" border="1">
	    <tr>
	      <td height="50" colspan="2"><h2>SỬA TIN</h2></td>
        </tr>
	    <tr>
	      <td class="color" width="183" height="54">TieuDe</td>
	      <td width="801">
	      	<div class="form-group">
	      		<input value="<?php echo $row_tin["TieuDe"]; ?>" type="text" name="TieuDe" class="form-control" id="TieuDe" size="100" style="height:30px">
	      	</div>
	      </td>
        </tr>
        <tr>
	      <td class="color" width="183" height="54">TomTat</td>
	      <td width="801">
	      	<div class="form-group">
	      	  <label for="TomTat"></label>
	      	  <textarea name="TomTat" id="TomTat" style="height: 100px; width: 100%; "><?php echo $row_tin["TomTat"]; ?></textarea>
	      	</div>
	      </td>
        </tr>
        <tr>
	      <td class="color" width="183" height="54">urlHinh</td>
	      <td width="801">
	      	<div class="form-group">
	      		<input value="<?php echo $row_tin["urlHinh"]; ?>" type="text" name="urlHinh" class="form-control" id="urlHinh" size="50" style="height:30px;   ">
	      		<input class="them_file" onclick="BrowseServer('Images:/','urlHinh')"  type="button" name="btnChonFile" id="btnChonFile" value="Chọn file" >
	      	</div>
	      </td>
        </tr>
		<tr>
	      <td class="color" width="183" height="54">Content</td>
	      <td width="801">
	      	<div class="form-group">
	      	  <label for="Content"></label>
	      	 <mark>Thêm vào trước ảnh upload/tintuc/images</mark>
	      	  <textarea name="Content" id="Content"><?php echo $row_tin["Content"]; ?><?php echo $row_tin["urlHinh"]; ?></textarea>
	      	  <script type="text/javascript">
	      	  	var editor = CKEDITOR.replace( 'Content',{
	      	  		uiColor : '#9AB8F3',
	      	  		language:'vi',
	      	  		skin:'v2',	
	      	  		filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?Type=Images',
	      	  		filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?Type=Flash',
	      	  		filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
	      	  		filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
	      	  		
	      	  		toolbar:[
	      	  		['Source','-','Save','NewPage','Preview','-','Templates'],
	      	  		['Cut','Copy','Paste','PasteText','PasteFromWord','-','Print'],
	      	  		['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],
	      	  		['Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField'],
	      	  		['Bold','Italic','Underline','Strike','-','Subscript','Superscript'],
	      	  		['NumberedList','BulletedList','-','Outdent','Indent','Blockquote','CreateDiv'],
	      	  		['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
	      	  		['Link','Unlink','Anchor'],
	      	  		['Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak'],
	      	  		['Styles','Format','Font','FontSize'],
	      	  		['TextColor','BGColor'],
	      	  		['Maximize', 'ShowBlocks','-','About']
	      	  		]
	      	  	});		
	      	  </script>
	      	</div>
	      </td>
        </tr>
		<tr>
	      <td class="color" height="44">TenTL</td>
	      <td><label for="idTL"></label>
	        <select name="idTL" id="idTL" style="width: 200px; height: 30px;">
				<?php 
					$theloai = DanhSachTheLoai();
					while ($row_theloai = mysql_fetch_array($theloai)) {
				?>
	        	<option <?php if ($row_theloai["idTL"] == $row_tin["idTL"]) echo "selected='selected'"; ?> value="<?php echo $row_theloai["idTL"]; ?>"><?php echo $row_theloai["TenTL"]; ?></option>
				<?php 
					}
				?>
          </select></td>
        </tr>
		<tr>
	      <td class="color" height="44">TenLT</td>
	      <td><label for="idLT"></label>
	        <select name="idLT" id="idLT" style="width: 200px; height: 30px;">
				<?php 
					$loaitin = DanhSachLoaiTin();
					while ($row_loaitin = mysql_fetch_array($loaitin)) {
				?>
	        	<option <?php if ($row_loaitin["idLT"] == $row_tin["idLT"]) echo "selected='selected'"; ?> value="<?php echo $row_loaitin["idLT"]; ?>"><?php echo $row_loaitin["Ten"]; ?></option>
				<?php 
					}
				?>
          </select></td>
        </tr>
	    <tr>
	      <td class="color" width="183" height="54">TinNoiBat</td>
	      <td width="801">
	      	<div class="form-group">
	      	  <p>
	      	    <label>
	      	      <input <?php if ($row_tin["TinNoiBat"] == 1)  echo "checked='checked'"; ?> type="radio" name="TinNoiBat" value="1" id="TinNoiBat_0">
	      	      Nổi bật</label>
	      	    
	      	    <label>
	      	      <input <?php if ($row_tin["TinNoiBat"] == 0)  echo "checked='checked'"; ?> type="radio" name="TinNoiBat" value="0" id="TinNoiBat_1">
	      	      Bình thường</label>
	      	    <br>
      	      </p>
	      	</div>
	      </td>
        </tr>
	    <tr>
	      <td class="color" height="45">AnHien</td>
	      <td><p>
	        <label>
	          <input <?php if ($row_tin["AnHien"] == 1)  echo "checked='checked'"; ?> type="radio" name="AnHien" value="1" id="AnHien_0">
	          Hiện</label>
	        
	        <label>
	          <input <?php if ($row_tin["AnHien"] == 0)  echo "checked='checked'"; ?> type="radio" name="AnHien" value="0" id="AnHien_1">
            Ẩn</label>
	        <br>
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