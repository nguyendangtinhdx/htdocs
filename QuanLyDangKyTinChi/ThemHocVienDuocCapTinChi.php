<?php
include_once './Entities/LoaiChungChi.php';
include_once './Entities/HocVien.php';
include_once './Entities/CapCho.php';
include_once './DAL/config.php';

if ($_SERVER["REQUEST_METHOD"] === "POST"){

  $error = array();

  if(empty($_POST['NgayCap'])) {
    $error['NgayCap'] = 'Ngày cấp không để trống';
  }
  if(empty($_POST['SoCap'])) {
    $error['SoCap'] = 'Số cấp không để trống';
  }
   if(empty($_POST['DiemThucHanh'])) {
    $error['DiemThucHanh'] = 'Điểm thực hành không để trống';
  }
   if(empty($_POST['DiemLyThuyet'])) {
    $error['DiemLyThuyet'] = 'Điểm lý thuyết không để trống';
  }


  $MaChungChi = $_POST['MaChungChi'];
  $MaHocVien = $_POST['MaHocVien'];
  $NgayCap = $_POST['NgayCap'];
  $SoCap = $_POST['SoCap'];
  $DiemThucHanh = $_POST['DiemThucHanh'];
  $DiemLyThuyet = $_POST['DiemLyThuyet'];

  if ($_POST["them"] && !$error){
    CapCho::themCapCho($MaChungChi, $MaHocVien, $NgayCap, $SoCap, $DiemThucHanh, $DiemLyThuyet);
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
  <form id="form" action="ThemHocVienDuocCapTinChi.php" method="post">
    <div class="form-group">
      <label>Chứng chỉ: </label>
        <select name="MaChungChi">
           <?php
           $listChungChi = LoaiChungChi::getListLoaiChungChi();
           $MaChungChi = "";

           if (isset($_REQUEST["MaChungChi"]))
            $MaChungChi = $_REQUEST["MaChungChi"];
        foreach ($listChungChi as $key => $loai)
            echo "<option value='$loai->MaChungChi'>$loai->TenChungChi</option>";
        ?> 
      </select>
      <label>Học viên: </label>
        <select name="MaHocVien">
           <?php
           $listHocVien = HocVien::getListHocVien();
           $MaHocVien = "";

           if (isset($_REQUEST["MaHocVien"]))
            $MaHocVien = $_REQUEST["MaHocVien"];
        foreach ($listHocVien as $key => $hocvien)
            echo "<option value='$hocvien->MaHocVien'>$hocvien->Ho $hocvien->Ten</option>";
        ?> 
      </select>
    <div class="form-group">
      <label>Số cấp:</label>
      <input type="text" class="form-control input-sm" name="SoCap" value="<?php if(isset($_POST['SoCap'])) echo $_POST['SoCap'] ?>">
      <span style="color: red"><?php echo isset($error['SoCap']) ? $error['SoCap'] : ''; ?></span>
    </div>
    <div class="form-group">
      <label>Ngày cấp:</label>
      <input type="date" class="form-control input-sm" name="NgayCap" value="<?php if(isset($_POST['NgayCap'])) echo $_POST['NgayCap'] ?>">
      <span style="color: red"><?php echo isset($error['NgayCap']) ? $error['NgayCap'] : ''; ?></span>
    </div>
    <div class="form-group">
      <label>Điểm thực hành:</label>
      <input type="text" class="form-control input-sm" name="DiemThucHanh" value="<?php if(isset($_POST['DiemThucHanh'])) echo $_POST['DiemThucHanh'] ?>">
      <span style="color: red"><?php echo isset($error['DiemThucHanh']) ? $error['DiemThucHanh'] : ''; ?></span>
    </div>
    <div class="form-group">
      <label>Điểm lý thuyết:</label>
      <input type="text" class="form-control input-sm" name="DiemLyThuyet" value="<?php if(isset($_POST['DiemLyThuyet'])) echo $_POST['DiemLyThuyet'] ?>">
      <span style="color: red"><?php echo isset($error['DiemLyThuyet']) ? $error['DiemLyThuyet'] : ''; ?></span>
    </div>
    

    <input type="submit" class="btn btn-danger" name="them" value="Thêm" >
  </form>
</body>

</html>
