<?php
include_once './Entities/Student.php';
?>
<!DOCTYPE html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
    #form{
        width: 600px;
        float: left;
        margin: 10px 0px 0px 20px;
    }
    #content{
        width: 600px;
        float: right;
        margin: 10px 20px 0px 0px;
    }
</style>
</head>
<div id="content">
 <?php
 $masinhvien = $hoten = $ngaysinh = $gioitinh = $email = $url = $diachi = $sdt = "";
 $masinhvienE = $hotenE = $ngaysinhE = $gioitinhE = $emailE = $urlE = $diachiE = $sdtE = "";
 $student = new Student($maSinhVien, $hoTen, $ngaySinh, $gioiTinh, $email, $url, $diaChi, $sdt);
 if($_SERVER["REQUEST_METHOD"] === "POST"){
    if(empty($_POST["masinhvien"])){
        $masinhvienE = "Mã sinh viên không được để trống";
    }
    else {
        $masinhvien = data($_POST["masinhvien"]);
    }
    if(empty($_POST["hoten"])){
        $hotenE = "Họ tên không được để trống";
    }
    else {
        $hoten = data($_POST["hoten"]);
    }
    if(empty($_POST["ngaysinh"])){
        $ngaysinhE = "Ngày sinh không được để trống";
    }
    else {
        $ngaysinh= data($_POST["ngaysinh"]);
    }
    if(empty($_POST["gioitinh"])){
        $gioitinhE = "Giới tính phải được chọn";
    }
    else {
        $gioitinh = data($_POST["gioitinh"]);
    }
    if(empty($_POST["email"])){
        $emailE = "Email không được để trống";
    }
    else {
        $email = data($_POST["email"]);
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $emailE = "Email không hợp lệ";
        }
    }
    if(empty($_POST["url"])){
        $urlE = "Địa chỉ URL không được để trống";
    }
    else {
        $url = data($_POST["url"]);
    }
    if(empty($_POST["diachi"])){
        $diachiE = "Địa chỉ không được để trống";
    }
    else {
        $diachi = data($_POST["diachi"]);
    }
    if(empty($_POST["sdt"])){
        $sdtE = "Số điện thoại không được để trống";
    }
    else {
        $sdt = data($_POST["sdt"]);
    }
}
function data($data){
    $data=trim($data);
    $data=stripcslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}
?>

<?php

echo "Mã sinh viên: ". $masinhvien."<br>";
echo "Họ tên: ".$hoten."<br>";
echo "Ngày sinh: ".$ngaysinh."<br>";
echo "Giới tính: ".$gioitinh."<br>";
echo "Email: ".$email."<br>";
echo "URL: ".$url."<br>";
echo "Địa chỉ: ".$diachi."<br>";
echo "Số điện thoại: ".$sdt."<br>";
?>
</div>
<body>
    <form id="form" action="index.php" method="post">
        <div class="form-group">
            <label>Mã sinh viên:</label>
            <input type="text" class="form-control input-sm" name="masinhvien">
            <span style="color: red"><?php echo $masinhvienE;?></span>
        </div>
        <div class="form-group">
          <label>Họ tên:</label>
          <input type="text" class="form-control input-sm" name="hoten">
          <span style="color: red"><?php echo $hotenE;?></span>
      </div>
      <div class="form-group">
          <label >Ngày sinh:</label>
          <input type="text" class="form-control input-sm" name="ngaysinh">
          <span style="color: red"><?php echo $ngaysinhE;?></span>
      </div>
      <div class="form-group">
          <label for="pwd">Giới tính:</label>
          <input type="radio" name="gioitinh" value="Nam">Nam
          <input type="radio" name="gioitinh" value="Nữ">Nữ
          <span style="color: red"><?php echo $gioitinhE;?></span>
          
      </div>
      <div class="form-group">
          <label >Email:</label>
          <input type="email" class="form-control input-sm" name="email">
          <span style="color: red"><?php echo $emailE;?></span>
      </div>
      <div class="form-group">
          <label>URL:</label>
          <input type="url" class="form-control input-sm" name="url">
          <span style="color: red"><?php echo $urlE;?></span>
      </div>
      <div class="form-group">
          <label>Địa chỉ:</label>
          <input type="text" class="form-control input-sm" name="diachi">
          <span style="color: red"><?php echo $diachiE;?></span>
      </div>
      <div class="form-group">
          <label>Số điện thoại:</label>
          <input type="text" class="form-control input-sm" name="sdt">
          <span style="color: red"><?php echo $sdtE;?></span>
      </div>
      
      <button type="submit" class="btn btn-danger">Gửi</button>
  </form>
</body>


</html>
