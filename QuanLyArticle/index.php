<?php
include_once './Entities/Article.php';
include_once './Entities/Category.php';
include_once './DAL/config.php';
session_start();
ConnectDB();
$dsArticle = Article::getList();
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	if (isset($_REQUEST["filter"])){
		if ($_REQUEST["filter"]=="filterbykeyword")
			$dsArticle = Article::getListByKeyWord($_REQUEST["key"]);
		else if ($_REQUEST["filter"]=="filterbycategory")
		{
			$dsArticle = Article::getListByCategory($_REQUEST["id_Category"]);
		}
	}
}
if($_SERVER["REQUEST_METHOD"] == "GET")
{
	if (isset($_REQUEST["filter"])){
		if ($_REQUEST["filter"]=="logout")
			session_unset();
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
	<form action="index.php" method="post" >
		<div class="row">
			<div class="col-sm-4">
				<label><b> Thể loại: </b></label>
				<select name="id_Category" >
					<?php
					$listCategory = Category::getList();
					$id_Category = "";

					if (isset($_REQUEST["id_Category"]))
						$id_Category = $_REQUEST["id_Category"];
					foreach ($listCategory as $key => $category)
						echo "<option value='$category->ID'>$category->Name</option>";
					?> 
				</select>
				<button type="submit" name="filter" value="filterbycategory" class="btn btn-primary">
					<i class="fa fa-filter" aria-hidden="true"> 
						Lọc
					</i>
				</button>
			</div>
			<div class="col-sm-4">
				<h2 align='center' class='title'>Danh sách Article</h2>
			</div>
			<div class="col-sm-4 text-right">
				<input type="text" placeholder="Nhập từ khóa tìm kiếm" name="key">
				<button type="submit" name="filter" value="filterbykeyword" class="btn btn-success">
					<i class="fa fa-search" aria-hidden="true"></i>
					Tìm kiếm
				</button>
				<?php
					if(isset($_SESSION["user"])){
				?>
						<b>Xin chào: </b><b style="color: red;font-style: italic;"><?=$_SESSION["user"] ?></b>
						<a href="index.php?filter=logout">Đăng xuất</a>
				<?php
					}else{
				?>
					<a href="login.php">Đăng nhập</a>
				<?php
					}
				?>
			</div>
		</div>

	</form>

	<table class='table table-hover th' ><tr>
		<th>ID</th><th>Title</th><th>Description</th><th>Content</th>
		<th>DateCreated</th><th>DateModifier</th><th>Author</th><th>ID_Category</th><th></th><th></th><th></th>
	</tr>

	<?php
	foreach ($dsArticle as $index => $article) {
		?>
		<tr>
			<td><?=$article->ID?></td>
			<td><?=$article->Title?></td>
			<td><?=$article->Description?></td>
			<td><?=$article->Content?></td>
			<td><?=$article->DateCreated?></td>
			<td><?=$article->DateModifier?></td>
			<td><?=$article->Author?></td>
			<td><?=$article->ID_Category?></td>
			<td><a href='xem.php?id=<?=$article->ID ?>' class='btn btn-success'><i class='fa fa-eye' aria-hidden='true'> Xem</i></a></td>
			<td><a href='sua.php?id=<?=$article->ID ?>' class='btn btn-info'><i class='fa fa-eyedropper' aria-hidden='true'> Sửa</i></a></td>
			<td><a href='xoa.php?id=<?=$article->ID ?>' class='btn btn-danger'><i class='fa fa-times' aria-hidden='true'> Xóa</i></a></td>
		</tr>
		<?php
	}
	?>
</table>
<div style="text-align:right; margin-right: 20px;">
	<a href="them.php" class="btn btn-warning">
		<i class="fa fa-plus" aria-hidden="true"></i>
		Thêm mới 
	</a>
</div>
</body>
</html>