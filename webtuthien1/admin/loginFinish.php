<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<style>
	 	body{background: #CCC}
		div{
			text-align: center;
			margin-top: 30px;
		}
		h5{
			font-weight: bold;
		}
	</style>
</head>
<body>
	<div>
		<h5>Chào bạn <?php echo $_SESSION["HoTen"]; ?></h5>
		<form action="" method="POST">
			<input name="btnExit" type="submit" class="btn btn-danger btn-sm" value="Thoát"></input>
		</form>
	</div>
</body>
</html>