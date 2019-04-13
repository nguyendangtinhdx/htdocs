<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Header</title>
</head>
<body>
	<!-- Navigation -->
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">Trang chủ</a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li>
						<a href="#">Giới thiệu</a>
					</li>
					<li>
						<a href="#">Liên hệ</a>
					</li>
				</ul>

				<form class="navbar-form navbar-left" role="search">
					<div class="form-group">
						<input type="text" id="txtSearch" class="form-control" placeholder="Nhập từ khóa...">
					</div>
					<button type="button" id="btnSearch" class="btn btn-default">Tìm kiếm</button>
				</form>

				<ul class="nav navbar-nav pull-right">
					<?php 
						if (isset($_SESSION['username'])){

					?>
					<li>
						<a>
							<span class ="glyphicon glyphicon-user"></span>
							<?=$_SESSION['username'] ?>
						</a>
					</li>
					<li>
						<a href="dangxuat.php">Đăng xuất</a>
					</li>
					<?php
						}else{
					?>
					<li>
						<a href="dangky.php">Đăng ký</a>
					</li>
					<li>
						<a href="dangnhap.php">Đăng nhập</a>
					</li>
					<?php
						}
					?>
					
				</ul>
			</div>



			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container -->
	</nav>
</body>
</html>