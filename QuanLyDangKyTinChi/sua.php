<?php
include_once './Entities/LoaiChungChi.php';
include_once './Entities/HocVien.php';
include_once './Entities/CapCho.php';
include_once './DAL/config.php';

if ($_SERVER["REQUEST_METHOD"] ==  "POST"){

  $error = array();

  if(empty($_POST['TenChungChi'])) {
    $error['TenChungChi'] = 'Tên chứng không để trống';
  }

  $MaChungChi = $_POST['MaChungChi'];
  $TenChungChi = $_POST['TenChungChi'];

if ($_POST["sua"] && !$error){
    LoaiChungChi::sua($MaChungChi, $TenChungChi);
    header("location:LoaiChungChi.php");
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


  <p style="text-align: center; color: green; font-size: 30px; font-weight: bold; margin-bottom: -20px">sửa chứng chỉ</p>
  <form id="form" action="sua.php?MaChungChi=<?=$_GET['MaChungChi']?>" method="POST">
    <div class="form-group">
      <label>Mã chứng chỉ:</label>
      <input type="text" class="form-control input-sm" name="MaChungChi" value="<?=$_GET['MaChungChi']?>" readonly="">
    </div>
    <div class="form-group">
      <label>Tên chứng chỉ:</label>
      <input type="text" class="form-control input-sm" name="TenChungChi" value="<?=$_GET['TenChungChi'] ?>">
      <span style="color: red"><?php echo isset($error['TenChungChi']) ? $error['TenChungChi'] : ''; ?></span>
    </div>


    <input type="submit" class="btn btn-danger" name="sua" value="Sửa" >
  </form>
</body>

</html>
