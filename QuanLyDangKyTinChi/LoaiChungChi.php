<?php
include_once './Entities/LoaiChungChi.php';
include_once './Entities/HocVien.php';
include_once './DAL/config.php';
ConnectDB();
$dsChungChi = LoaiChungChi::getListLoaiChungChi();
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

			</div>
			<div class="col-sm-4">
				<h2 align='center' class='title'>QUẢN LÝ LOẠI CHỨNG CHỈ</h2>
			</div>

		</div>

	</form>

	<table class='table table-hover th' ><tr>
		<th>STT</th><th>Mã chứng chỉ</th><th>Tên chứng chỉ</th><th colspan="2">Tùy chọn</th>
	</tr>

	<?php
	$dem = 0;
	foreach ($dsChungChi as $index => $chungchi) {
		$dem++;
		?>
		<tr>
			<td><?=$dem?></td>
			<td><?=$chungchi->MaChungChi?></td>
			<td><?=$chungchi->TenChungChi?></td>
			<td><a href='sua.php?MaChungChi=<?=$chungchi->MaChungChi ?>&TenChungChi=<?=$chungchi->TenChungChi?>' class='btn btn-info'><i class='fa fa-eyedropper' aria-hidden='true'> Sửa</i></a></td>
				<td><a href='xoa.php?id=<?=$chungchi->MaChungChi ?>' class='btn btn-danger'><i class='fa fa-times' aria-hidden='true'> Xóa</i></a></td>
		</tr>
		<?php
	}
	?>
</table>
	<div style="text-align:right; margin-right: 20px;">
		<a href="ThemChungChi.php" class="btn btn-warning">
			<i class="fa fa-plus" aria-hidden="true"></i>
			Thêm chứng chỉ
		</a>

	</div>

</body>
</html>