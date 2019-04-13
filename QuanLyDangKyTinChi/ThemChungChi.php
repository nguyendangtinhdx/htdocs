<?php
include_once './Entities/LoaiChungChi.php';
include_once './Entities/HocVien.php';
include_once './Entities/CapCho.php';
include_once './DAL/config.php';

if ($_SERVER["REQUEST_METHOD"] === "POST"){

  $error = array();

  if(empty($_POST['MaChungChi'])) {
    $error['MaChungChi'] = 'Mã chứng chỉ không để trống';
  }
  if(empty($_POST['TenChungChi'])) {
    $error['TenChungChi'] = 'Tên chứng không để trống';
  }


  $MaChungChi = $_POST['MaChungChi'];
  $TenChungChi = $_POST['TenChungChi'];

  if ($_POST["them"] && !$error){
    LoaiChungChi::them($MaChungChi, $TenChungChi);
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
  <p style="text-align: center; color: green; font-size: 30px; font-weight: bold; margin-bottom: -20px">Thêm học viên mới</p>
  <form id="form" action="ThemChungChi.php" method="post">
    <div class="form-group">
      <label>Mã chứng chỉ:</label>
      <input type="text" class="form-control input-sm" name="MaChungChi" value="<?php if(isset($_POST['MaChungChi'])) echo $_POST['MaChungChi'] ?>">
      <span style="color: red"><?php echo isset($error['MaChungChi']) ? $error['MaChungChi'] : ''; ?></span>
    </div>
    <div class="form-group">
      <label>Tên chứng chỉ:</label>
      <input type="text" class="form-control input-sm" name="TenChungChi" value="<?php if(isset($_POST['TenChungChi'])) echo $_POST['TenChungChi'] ?>">
      <span style="color: red"><?php echo isset($error['TenChungChi']) ? $error['TenChungChi'] : ''; ?></span>
    </div>
    

    <input type="submit" class="btn btn-danger" name="them" value="Thêm" >
  </form>
</body>

</html>
