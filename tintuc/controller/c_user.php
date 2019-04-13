<?php
session_start();
include('model/m_user.php');

class C_user
{
	function dangkyTK($name,$email,$password)
	{
		$m_user = new M_user();
		$id_user = $m_user->dangky($name,$email,$password);
		if ($id_user > 0) {
			$_SESSION['success'] = "Đăng ký thành công";
			header('location:index.php');
			if (isset($_SESSION['error'])) {
				unset($_SESSION['error']);
			}
		}
		else
		{
			$_SESSION['error'] = "Đăng ký thất bại";
			header('location:dangky.php');
		}
	}
	function dangnhapTK($email,$password)
	{
		$m_user = new M_user();
		$user = $m_user->dangnhap($email,$password);
		if ($user == true) {
			$_SESSION['username'] = $user->name;
			$_SESSION['id_user'] = $user->id;
			header('location:index.php');
			if (isset($_SESSION['user_error'])) {
				unset($_SESSION['user_error']);
			}
			if (isset($_SESSION['chuadangnhap'])) {
				unset($_SESSION['chuadangnhap']);
			}
		}
		else
		{
			$_SESSION['user_error'] = "Sai thông tin đăng nhập";
			header('location:dangnhap.php');
		}
	}
	function dangxuatTK()
	{
		session_destroy();
		header('location:index.php');
	}
}

?>