<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
	.error{color: red;}
	</style>
</head>
<body>
	<?php
	 $nameErr = $emailErr = $commentErr = $websiteErr = $genderErr = "";
	 $name = $email = $comment = $website = $gender = "";
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		if(empty($_POST["name"]))
		{
			$nameErr = "Name is required ";
		}
		else
		{
			$name = test_input($_POST["name"]);
			// kiểm tra kí tự gồm chữ và khoảng trắng
			if(!preg_match("/^[a-zA-Z]*$/", $name))
			{
				$nameErr = "Only letters and space allowed ";
			}
		}
		if(empty($_POST["email"]))
		{
			$emailErr = "Email is required ";
		}
		else
		{
			$email = test_input($_POST["email"]);
			// kiểm tra địa chỉ Email
			if(!filter_var($email,FILTER_VALIDATE_EMAIL))
			{
				$emailErr = "Invalid email format ";
			}
		}
		if(empty($_POST["website"]))
		{
			$website = "";
		}
		else
		{
			$website = test_input($_POST["comment"]);
			// kiểm tra địa chỉ URL
			if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)
				[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website))
			{
				$websiteErr = "Invalid URL ";
			}
		}	
		if(empty($_POST["comment"]))
		{
			$comment = "";
		}
		else
		{
			$comment = test_input($_POST["website"]);
		}
		if(empty($_POST["gender"]))
		{
			$genderErr = "Gender is required ";
		}
		else
		{
			$gender = test_input($_POST["gender"]);
		}
	}
	function test_input($data)
	{
		$data=trim($data);
		$data=stripcslashes($data);
		$data=htmlspecialchars($data);
		return $data;
	}
	?>
	<h2>Personal Information: </h2>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
	Name: <input type="text" name="name">
	<span class="error">*<?php echo $nameErr;?></span><br><br>
	Email: <input type="text" name="email">
	<span class="error">*<?php echo $emailErr;?></span><br><br>
	Website: <input type="text" name="website">
	<span class="error"><?php echo $websiteErr;?></span><br><br>
	Comment: <textarea name="comment" cols="30" rows="10"></textarea><br><br>
	Gender:	<input type="radio" name="gender" value="male" checked>Male
	<!-- kiểm tra nút radio -->
	<!--  <input type="radio" name="gender"
	 <?php if (isset($gender) && $gender=="male") echo "checked";?>
	 value="male">Male  -->
			<input type="radio" name="gender" value="female">Female
			<span class="error">*<?php echo $genderErr;?></span><br><br>
			<input type="submit" name="submit" value="Submit">
	</form>		
	<?php
	echo "<h2> Your Input: </h2>";
	echo $name."<br>";
	echo $email."<br>";
	echo $website."<br>";
	echo $comment."<br>";
	echo $gender."<br>";
	?>
</body>
</html>