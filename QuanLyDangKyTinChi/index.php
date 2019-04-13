<?php
include_once './Entities/LoaiChungChi.php';
include_once './Entities/HocVien.php';
include_once './DAL/config.php';
ConnectDB();
$dsHocVien = HocVien::getListHocVien();
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	if (isset($_REQUEST["filter"])){
		if ($_REQUEST["filter"]=="filterbyloai")
			$dsHocVien = HocVien::getListHocVienByLoai($_REQUEST["MaChungChi"]);
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<title>Quản lý Article</title>
	<style>
	.title{
		color: red;
	}
	body, .th{
		width: 1300px;
		margin: auto;
	}
	body{
		margin-top: 20px;
	}
	.col-7{
		float: right;
		margin-bottom: 10px;
	}
</style>
</head>
<body>
	<form action="index.php" method="POST" >
		<div class="row">
			<div class="col-sm-4">
				<label><b>Loại chứng chỉ: </b></label>
				<select name="MaChungChi" >
					<?php
					$listLoaiChungChi = LoaiChungChi::getListLoaiChungChi();
					$MaChungChi = "";

					if (isset($_REQUEST["MaChungChi"]))
						$MaChungChi = $_REQUEST["MaChungChi"];
					foreach ($listLoaiChungChi as $key => $loai)
						echo "<option value='$loai->MaChungChi'>$loai->TenChungChi</option>";
					?> 
				</select>
				<button type="submit" name="filter" value="filterbyloai" class="btn btn-primary">
					<i class="fa fa-filter" aria-hidden="true"> 
						Lọc
					</i>
				</button>
				<a href="LoaiChungChi.php" class="btn btn-warning">
				Quản lý chứng chỉ
			</a>
			</div>
			<div class="col-sm-4">
				<h2 align='center' class='title'>HỆ THỐNG QUẢN LÝ TÍN CHỈ TIN HỌC</h2>
			</div>

		</div>

	</form>

	<table class='table table-hover th' ><tr>
		<th>STT</th><th>Họ và tên</th><th>Ngày sinh</th><th>Nơi sinh</th>
		<th>Quê Quán</th><th>Ngày cấp</th><th>Số cấp</th>
	</tr>

	<?php
	$dem = 0;
	foreach ($dsHocVien as $index => $hocvien) {
		$dem++;
		?>
		<tr>
			<td><?=$dem?></td>
			<td><?=$hocvien->Ho?> <?=$hocvien->Ten?></td>
			<td><?=$hocvien->NgaySinh?></td>
			<td><?=$hocvien->NoiSinh ?></td>
			<td><?=$hocvien->QueQuan?></td>
			<td><?=$hocvien->NgayCap?></td>
			<td><?=$hocvien->SoCap?></td>
			<!-- <td><a href='xem.php?id=<?=$article->ID ?>' class='btn btn-success'><i class='fa fa-eye' aria-hidden='true'> Xem</i></a></td>
			<td><a href='sua.php?id=<?=$article->ID ?>' class='btn btn-info'><i class='fa fa-eyedropper' aria-hidden='true'> Sửa</i></a></td>
			<td><a href='xoa.php?id=<?=$article->ID ?>' class='btn btn-danger'><i class='fa fa-times' aria-hidden='true'> Xóa</i></a></td> -->
		</tr>
		<?php
	}
	?>
</table>
<div style="text-align:right; margin-right: 20px;">
	<a href="ThemHocVien.php" class="btn btn-warning">
		<i class="fa fa-plus" aria-hidden="true"></i>
		Thêm học viên
	</a>
	<a href="ThemHocVienDuocCapTinChi.php" class="btn btn-warning">
		<i class="fa fa-plus" aria-hidden="true"></i>
		Thêm học viên được cấp tín chỉ
	</a>
</div>
</body>
</html>