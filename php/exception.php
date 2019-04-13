<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		// sử dụng ngoại lệ cơ bản
	function check($number)
	{
		if($number>1)
		{
			throw new Exception(" Value must be 1 or below");
		}
		return true;
	}
	try
	{
		check(2);
		echo "If you see this. the number is 1 or below";
	}
	catch(Exception $e)
	{
			echo "Message: ".$e->getMessage();// thông báo lỗi ngoại lệ
		}
		echo "<br>";

		// tạo lớp ngoại lệ tùy chỉnh
		// class customException extends Exception
		// {
		// 	public function errorMessage()
		// 	{
		// 		$errorMsg = "Error on line ".$this->getLine()." in ".
		// 		$this->getFile().": <b>".$this->getMessage().
		// 		"</b> is not a valid E-Mail address";
		// 		return $errorMsg;
		// 	}
		// }
		// $email = "nguyendangtinhdx@gmail..com";
		// try
		// {
		// 		// check if
		// 	if(filter_var($email,FILTER_VALIDATE_EMAIL)===false)
		// 	{
		// 		throw new customException($email);
		// 	}
		// }
		// catch(customException $e)
		// {
		// 	echo $e->errorMessage();
		// }

		// nhiều trường hợp ngoại lệ
		// class customException extends Exception {
		// 	public function errorMessage() {
 		  //error message
		// 		$errorMsg = 'Error on line '.$this->getLine().' in '.$this->getFile()
		// 		.': <b>'.$this->getMessage().'</b> is not a valid E-Mail address';
		// 		return $errorMsg;
		// 	}
		// }
		// $email = "someone@example.com";
		// try {
 			//check if
		// 	if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
 			  //throw exception if email is not valid
		// 		throw new customException($email);
		// 	}
 			//check for "example" in mail address
		// 	if(strpos($email, "example") !== FALSE) {
		// 		throw new Exception("$email is an example e-mail");
		// 	}
		// }

		// catch (customException $e) {
		// 	echo $e->errorMessage();
		// }

		// catch(Exception $e) {
		// 	echo $e->getMessage();
		// }

		// 	ném ra ngoại lệ
		class customException extends Exception {
			public function errorMessage() {
   				 //error message
				$errorMsg = $this->getMessage().' is not a valid E-Mail address.';
				return $errorMsg;
			}
		}
		$email = "someone@example.com";
		try {
			try {
   				 //check for "example" in mail address
				if(strpos($email, "example") !== FALSE) {
   				   //throw exception if email is not valid
					throw new Exception($email);
				}
			}
			catch(Exception $e) {
   				 //re-throw exception
				throw new customException($email);
			}
		}

		catch (customException $e) {
 			 //display custom message
			echo $e->errorMessage();
		}
		echo "<br>";

		// đăt 1 xử lí ngoại lệ
		function myException($exception) {
			echo "<b>Exception:</b> " . $exception->getMessage();
		}

		set_exception_handler('myException');

		throw new Exception('Uncaught Exception occurred');
		?>
	</body>
	</html>