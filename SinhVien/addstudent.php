<?php
include_once './Entities/Lop.php';
include_once './Entities/Student.php';
include_once './Entities/Config.php';
$dsSinhVien = Student::getList();
if ($_SERVER["REQUEST_METHOD"] =="POST")
	if (isset ($_REQUEST["filter"]))
		$dsSinhVien = Student::getListByKeyWord ($_REQUEST["key"]);
	else if (isset ($_REQUEST["filterbyclass"]))
		$dsSinhVien = Student::getListByMaLop ($_REQUEST["maLop"]);
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
		$data = array();

		if($_SERVER['REQUEST_METHOD']==='POST'){
			$data['masv'] = isset($_POST['masv']) ? $_POST['masv'] : '';
			$data['ho'] = isset($_POST['ho']) ? $_POST['ho'] : '';
			$data['ten'] = isset($_POST['ten']) ? $_POST['ten'] : '';
			$data['quequan'] = isset($_POST['quequan']) ? $_POST['quequan'] : '';
			$data['ngaysinh'] = isset($_POST['ngaysinh']) ? $_POST['ngaysinh'] : '';;
			$data['noisinh'] = isset($_POST['noisinh']) ? $_POST['noisinh'] : '';
			$data['maLop'] = isset($_POST['maLop']) ? $_POST['maLop'] : '';

			if (empty($data['masv']) || empty($data['ho']) || empty($data['ten']) || empty($data['quequan']) || empty($data['ngaysinh']) || empty($data['noisinh']) || empty($data['maLop'])){
				if(empty($data['masv'])) {
					$error['masv'] = 'Bạn chưa nhập mã sinh viên';
				}
				if(empty($data['ho'])) {
					$error['ho'] = 'Bạn chưa nhập họ sinh viên';
				}
				if(empty($data['ten'])) {
					$error['ten'] = 'Bạn chưa nhập tên sinh viên';
				}
				if(empty($data['quequan'])) {
					$error['quequan'] = 'Bạn chưa nhập quê quán sinh viên';
				}
				if(empty($data['ngaysinh'])) {
					$error['ngaysinh'] = 'Bạn chưa nhập ngày sinh sinh viên';
				}
				if(empty($data['noisinh'])) {
					$error['noisinh'] = 'Bạn chưa nhập nơi sinh sinh viên';
				}
			}
		}
		if (!$error && $data != null){
			$conn= connectDB();
			$masv = $data['masv'];
			$ho = $data['ho'];
			$ten = $data['ten'];
			$quequan = $data['quequan'];
			$ngaysinh = $data['ngaysinh'];
			$noisinh = $data['noisinh'];
			$malop = $data['maLop'];
			if($_POST['them']){
				Student::them($masv,$ho,$ten,$quequan,$ngaysinh,$noisinh,$malop);
				header("Location: index.php");
			}elseif ($_POST['themandcontinue']) {
				Student::them($masv,$ho,$ten,$quequan,$ngaysinh,$noisinh,$malop);
				header("Location: addstudent.php");
			}
		}


		?>
		<div class="container">
			<h1>Thêm Sinh Viên</h1>
			<br>
			<form action="addstudent.php" method="get">
				<div class="form-group">
					<label>Lớp:</label>
					<select name="maLop" class="form-control">
						<?php
						$danhSachLop = Lop::getList();
						//var_dump($danhSachLop);
						$maLop = "";
						if (isset($_REQUEST["maLop"]))
							$maLop = $_REQUEST["maLop"];
						foreach ($danhSachLop as $key => $lop) {
							if ($lop->maLop == $maLop)
								echo "<option selected='selected' value='$lop->maLop'>$lop->tenLop</option>";
							else
								echo "<option value='$lop->maLop'>$lop->tenLop</option>";
						}
						?>                    
					</select>
				</div>
				<div class="form-group">
					<label>Mã Sinh Viên:</label>
					<input type="text" class="form-control" name="masv" placeholder="Nhập Mã Sinh Viên ...">
					<?php echo isset($error['masv']) ? $error['masv'] : ''; ?>
				</div>
				<div class="form-group">
					<label>Họ:</label>
					<input type="text" class="form-control" name="ho" placeholder="Nhập Họ Sinh Viên ...">
					<?php echo isset($error['ho']) ? $error['ho'] : ''; ?>
				</div>
				<div class="form-group">
					<label>Tên:</label>
					<input type="text" class="form-control" name="ten" placeholder="Nhập Tên Sinh Viên ...">
					<?php echo isset($error['ten']) ? $error['ten'] : ''; ?>
				</div>
				<div class="form-group">
					<label>Quê Quán:</label>
					<input type="text" class="form-control" name="quequan" placeholder="Nhập Quê Quán Sinh Viên ...">
					<?php echo isset($error['quequan']) ? $error['quequan'] : ''; ?>
				</div>
				<div class="form-group">
					<label>Ngày Sinh:</label>
					<input type="date" class="form-control" name="ngaysinh" placeholder="Nhập Ngày Sinh Sinh Viên ...">
					<?php echo isset($error['ngaysinh']) ? $error['ngaysinh'] : ''; ?>
				</div>
				<div class="form-group">
					<label>Nơi Sinh:</label>
					<input type="text" class="form-control" name="noisinh" placeholder="Nhập Nơi Sinh Sinh Viên ...">
					<?php echo isset($error['noisinh']) ? $error['noisinh'] : ''; ?>
				</div>
				<input type="submit" name="them" class="btn btn-success" value="Thêm">
				<input type="submit" name="themandcontinue" class="btn btn-primary" value="Thêm và Tiếp Tục">
			</form>
		</div>
	</body>
	</html>