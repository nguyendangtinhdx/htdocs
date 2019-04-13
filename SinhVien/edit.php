<?php 
include_once './Entities/Lop.php';
include_once './Entities/Student.php';
include_once './Entities/Config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>
	<?php


	$error = array();

	if($_SERVER['REQUEST_METHOD']==='POST'){
		if (empty($_POST['ho'])){
			$error['ho'] = 'Bạn chưa nhập họ sinh viên';
		}
		if (empty($_POST['ten'])){
			$error['ten'] = 'Bạn chưa nhập tên sinh viên';
		}
		// if (empty($_POST['quequan'])){
		// 	$error['quequan'] = 'Bạn chưa nhập quê quán sinh viên';
		// }
		if (empty($_POST['ngaysinh'])){
			$error['ngaysinh'] = 'Bạn chưa nhập ngày sinh sinh viên';
		}
		if (empty($_POST['noisinh'])){
			$error['noisinh'] = 'Bạn chưa nhập nơi sinh sinh viên';
		}

		$masv = $_GET['masv'];
		$ho = $_POST['ho'];
		$ten = $_POST['ten'];
		$noisinh = $_POST['noisinh'];
		$ngaysinh = $_POST['ngaysinh'];
		// $masv = '';$ho='';$ten='';$quequan='';$ngaysinh='';$noisinh='';$malop='';$gioitinh='';
		// print_r($_POST);
		if($_POST['sua'] &&!$error){
			Student::update1($masv,$ho, $ten, $noisinh, $ngaysinh);
			header("Location: index.php");
		}
		// if(!$error){
		// 	$conn= connectDB();
		// 	//($maSinhVien,$ho, $ten, $diaChi, $ngaySinh, $gioiTinh)
		// 	$kt = Student::update1($masv,$ho, $ten, $quequan, $ngaysinh, $gioitinh);
		// 	echo $kt;
		// }
	}

	?>
	<div class="container">
		<h1>Sửa</h1><br>
		<?php
		$masv='';
		if(isset($_GET['masv'])){
			$conn= ConnectDB();
			$masv = $_GET['masv'];
			mysqli_set_charset($conn,"utf8");
			$sql="SELECT * FROM sinhvien WHERE maSV='".$masv."'";
			$result = mysqli_query($conn,$sql);
			while($row = mysqli_fetch_array ($result)) {
				?>
				<form method="post" action="edit.php?masv=<?php echo $row['maSV']; ?>">
					<div class="form-group">
						<label>Mã Sinh Viên:</label>
						<input disabled type="text" class="form-control" name="masv" value="<?php echo $row['maSV']; ?>">
					</div>
					<div class="form-group">
						<label>Họ:</label>
						<input type="text" class="form-control" name="ho" value="<?php echo $row['ho']; ?>">
						<?php echo isset($error['ho']) ? $error['ho'] : ''; ?>
					</div>
					<div class="form-group">
						<label>Tên:</label>
						<input type="text" class="form-control" name="ten" value="<?php echo $row['ten']; ?>">
						<?php echo isset($error['ten']) ? $error['ten'] : ''; ?>
					</div>
					<div class="form-group">
						<label>Nơi Sinh:</label>
						<input type="text" class="form-control" name="noisinh" value="<?php echo $row['noiSinh']; ?>">
						<?php echo isset($error['noisinh']) ? $error['noisinh'] : ''; ?>
					</div>
					<div class="form-group">
						<label>Ngày Sinh:</label>
						<input type="date" class="form-control" name="ngaysinh" value="<?php echo $row['ngaySinh']; ?>">
						<?php echo isset($error['ngaysinh']) ? $error['ngaysinh'] : ''; ?>
					</div>
					<input type="submit" name="sua" class="btn btn-success" value="Sửa và Lưu">
				</form>
				<?php } } ?>
			</div>
		</body>
		</html>