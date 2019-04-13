<?php
include_once './Entities/LoaiChungChi.php';
include_once './Entities/HocVien.php';
include_once './DAL/config.php';

if ($_SERVER["REQUEST_METHOD"] === "POST"){

  $error = array();

  if(empty($_POST['MaHocVien'])) {
    $error['MaHocVien'] = 'Mã học viên không để trống';
  }
  if(empty($_POST['Ho'])) {
    $error['Ho'] = 'Họ không để trống';
  }
  if(empty($_POST['Ten'])) {
    $error['Ten'] = 'Tên không để trống';
  }
  if(empty($_POST['QueQuan'])) {
    $error['QueQuan'] = 'Quê quán không để trống';
  }
  if(empty($_POST['NgaySinh'])) {
    $error['NgaySinh'] = 'Ngày sinh không để trống';
  }
  if(empty($_POST['NoiSinh'])) {
    $error['NoiSinh'] = 'Nơi sinh không để trống';
  }


  $MaHocVien = $_POST['MaHocVien'];
  $Ho = $_POST['Ho'];
  $Ten = $_POST['Ten'];
  $QueQuan = $_POST['QueQuan'];
  $NgaySinh = $_POST['NgaySinh'];
  $NoiSinh = $_POST['NoiSinh'];

  if ($_POST["them"] && !$error){
    HocVien::them($MaHocVien, $Ho, $Ten, $QueQuan, $NgaySinh, $NoiSinh);
    header("location:index.php");
  }
}
?>
<!DOCTYPE html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<html>
<head>
  <meta charset="UTF-8">
  <title></title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <style>
  #form{
    width: 800px;
    margin: auto;
  }
  select{
    margin-top: 30px;
    width: 200px;
  }
</style>
</head>
<body>
  <p style="text-align: center; color: green; font-size: 30px; font-weight: bold; margin-bottom: -20px">Thêm học viên mới</p>
  <form id="form" action="ThemHocVien.php" method="post">
    <div class="form-group">
      <label>Mã học viên:</label>
      <input type="text" class="form-control input-sm" name="MaHocVien" value="<?php if(isset($_POST['MaHocVien'])) echo $_POST['MaHocVien'] ?>">
      <span style="color: red"><?php echo isset($error['MaHocVien']) ? $error['MaHocVien'] : ''; ?></span>
    </div>
    <div class="form-group">
      <label>Họ:</label>
      <input type="text" class="form-control input-sm" name="Ho" value="<?php if(isset($_POST['Ho'])) echo $_POST['Ho'] ?>">
      <span style="color: red"><?php echo isset($error['Ho']) ? $error['Ho'] : ''; ?></span>
    </div>
    <div class="form-group">
      <label >Tên:</label>
      <input type="text" class="form-control input-sm" name="Ten" value="<?php if(isset($_POST['Ten'])) echo $_POST['Ten'] ?>">
      <span style="color: red"><?php echo isset($error['Ten']) ? $error['Ten'] : ''; ?></span>
    </div>
    <div class="form-group">
      <label>Quê quán:</label>
      <input type="text" class="form-control input-sm" name="QueQuan" value="<?php if(isset($_POST['QueQuan'])) echo $_POST['QueQuan'] ?>">
      <span style="color: red"><?php echo isset($error['QueQuan']) ? $error['QueQuan'] : ''; ?></span>
    </div>
    <div class="form-group">
      <label>Ngày sinh:</label>
      <input type="date" class="form-control input-sm" name="NgaySinh" value="<?php if(isset($_POST['NgaySinh'])) echo $_POST['NgaySinh'] ?>">
      <span style="color: red"><?php echo isset($error['NgaySinh']) ? $error['NgaySinh'] : ''; ?></span>
    </div>
    <div class="form-group">
      <label>Nơi sinh:</label>
      <input type="text" class="form-control input-sm" name="NoiSinh" value="<?php if(isset($_POST['NoiSinh'])) echo $_POST['NoiSinh'] ?>">
      <span style="color: red"><?php echo isset($error['NoiSinh']) ? $error['NoiSinh'] : ''; ?></span>
    </div>

    <input type="submit" class="btn btn-danger" name="them" value="Thêm" >
  </form>
</body>

</html>
