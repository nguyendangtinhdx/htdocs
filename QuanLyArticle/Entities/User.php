<?php
@include_once './config.php';
class User{

    var $Username;
    var $Password;

    function __construct($username,$password)
    {
    	$this->Username = $username;
    	$this->Password = $password;
    }
    static function checkLogin($username, $password)
    {	
        $conn= connectDB();
        mysqli_set_charset($conn,"utf8");
        $sql=" SELECT * FROM user WHERE username = '$username' AND password = '$password' ";
        $rs=$conn->query($sql);
     	if($rs->num_rows){
             return true;
        }
        return false;            
    }
}
?>