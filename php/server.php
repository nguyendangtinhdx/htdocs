<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		echo $_SERVER['PHP_SELF']."<br>";
	//	echo $_SERVER['SCRIPT_NAME']."<br>";
		echo $_SERVER['SERVER_NAME']."<br>";
		echo $_SERVER['HTTP_HOST']."<br>";
	//	echo $_SERVER['HTTP_REFERER']."<br>";	lỗi
		echo $_SERVER['HTTP_USER_AGENT']."<br>";
	?>

	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	Name: <input type="text" name="fname">
		<input type="submit">
	</form>
	<?php
		if($_SERVER["REQUEST_METHOD"]=="POST")
		{
			// thu thập giá trị toàn cầu
			$name = $_REQUEST['fname'];
			// $_REQUEST được sử dụng để thu thập dữ liệu sau khi nộp mẫu HTML.
		//	$name = $_POST['fname']; tương tự	 $_REQUEST
			// $_POST Cũng được sử dụng rộng rãi để vượt qua các biến.
			if(empty($name))
			{
				echo "Name is empty";
			}
			else
			{
				echo $name;
			}
		}	
	?>
	<br>
	<?php
	echo "Study " . $_GET['subject'] . " at " . $_GET['web'];
	?>
</body>
</html>