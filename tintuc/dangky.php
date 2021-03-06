<?php
    
    include('controller/c_user.php');
    $c_user = new C_user();
    if(isset($_POST['dangky'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $repassword = $_POST['passwordAgain'];
        $nameErr = "" ; $emailErr = "";
        if($name == "")
        {
            $nameErr = "Vui lòng nhập Họ tên";
        }
        if($email == "")
        {
            $emailErr = "Vui lòng nhập Email";
        }
        if($password == "")
        {
            $passwordErr = "Vui lòng nhập mật khẩu";
        }
        if($repassword == "")
        {
            $repasswordErr = "Vui lòng nhập lại mật khẩu";
        }
        if ($password != $repassword) {
             $ktpasswordErr = "Mật khẩu không giống nhau";
        }
        if ($password == $repassword) {
            $user = $c_user->dangkyTK($name,$email,$password);
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon"  href="public/image/icon/logo.png">
    <title>Tin tức</title>

    <!-- Bootstrap Core CSS -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="public/css/shop-homepage.css" rel="stylesheet">
    <link href="public/css/my.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.public/js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <?php
        include('header.php');
    ?>

    <!-- Page Content -->
    <div class="container">

    	<!-- slider -->
    	<div class="row carousel-holder">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <?php
                    if(isset($_SESSION['error'])){
                        echo "<div class='alert alert-danger'>".$_SESSION['error']."</div>";
                    }
                ?>
                <div class="panel panel-default">
				  	<div class="panel-heading">Đăng ký tài khoản</div>
				  	<div class="panel-body">
				    	<form method="post" action="#">
				    		<div>
				    			<label>Họ tên</label>
							  	<input type="text" class="form-control" placeholder="Họ tên" name="name" aria-describedby="basic-addon1">
							</div>
							<br>
							<div>
				    			<label>Email</label>
							  	<input type="email" class="form-control" placeholder="Email" name="email" aria-describedby="basic-addon1"
							  	>
							</div>
							<br>	
							<div>
				    			<label>Nhập mật khẩu</label>
							  	<input type="password" class="form-control" name="password" aria-describedby="basic-addon1">
							</div>
							<br>
							<div>
				    			<label>Nhập lại mật khẩu</label>
							  	<input type="password" class="form-control" name="passwordAgain" aria-describedby="basic-addon1">
							</div>
							<br>
							<button type="submit" class="btn btn-success" name="dangky">Đăng ký
							</button>

				    	</form>
				  	</div>
				</div>
            </div>
            <div class="col-md-2">
            </div>
        </div>
        <!-- end slide -->
    </div>
    <!-- end Page Content -->


    <!-- jQuery -->
    <script src="public/js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/my.js"></script>

</body>

</html>
