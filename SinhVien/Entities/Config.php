<?php
/**
 * Hàm kết nối CSDL
 */

function ConnectDB(){
    $serverName= "localhost";
    $userName="root";
    $passWord="";
    $dbName="quanlysinhvien";
    $conn= new mysqli($serverName, $userName, $passWord, $dbName);
    if ($conn->connect_error)
        die("Kết nối thất bại".$conn->connect_error);
    else 
        echo "<script>console.log('Kết nối thành công');</script>";
    return $conn;
}


?>

