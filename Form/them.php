<?php
include_once './Entities/Student.php';
include_once './Entities/Lop.php';
include_once './DAL/config.php';

if ($_SERVER["REQUEST_METHOD"] === "POST"){

    $error = array();

    if(empty($_POST['masinhvien'])) {
        $error['masinhvien'] = 'Bạn chưa nhập mã sinh viên';
    }
    if(empty($_POST['hoten'])) {
        $error['hoten'] = 'Bạn chưa nhập họ sinh viên';
    }
    if(empty($_POST['ngaysinh'])) {
        $error['ngaysinh'] = 'Bạn chưa nhập ngày sinh';
    }
    if(empty($_POST['email'])) {
        $error['email'] = 'Bạn chưa nhập email';
    }
    if(empty($_POST['diachi'])) {
        $error['diachi'] = 'Bạn chưa nhập địa chỉ';
    }
    if(empty($_POST['sdt'])) {
        $error['sdt'] = 'Bạn chưa nhập số điện thoại';
    }

    $masinhvien = $_POST['masinhvien'];
    $hoten = $_POST['hoten'];
    $ngaysinh = $_POST['ngaysinh'];
    $gioitinh = $_POST['gioitinh'];
    $email = $_POST['email'];
    $diachi = $_POST['diachi'];
    $sdt = $_POST['sdt'];
    $maLop = $_POST['maLop'];

    if ($_POST["them"] && !$error){
        Student::Them($masinhvien,$hoten,$ngaysinh,$gioitinh,$email,$diachi,$sdt,$maLop);
        header("location:index2.php");
    }
}
?>
<!DOCTYPE html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
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
    <form id="form" action="them.php" method="POST">
     <label>Lớp: </label>
     <select name="maLop">
        <?php
        $danhSachLop = Lop::getList();
        $maLop = "";

        if (isset($_REQUEST["maLop"]))
            $maLop = $_REQUEST["maLop"];
        foreach ($danhSachLop as $key => $lop)
            if ($lop->maLop == $maLop){
                echo "<option class='form-control' selected='selected' value='$lop->maLop'>$lop->tenLop</option>";
            }
            else
                echo "<option value='$lop->maLop'>$lop->tenLop</option>";
            ?>
        </select>
        <div class="form-group">
            <label>Mã sinh viên:</label>
            <input type="text" class="form-control input-sm" name="masinhvien" value="<?php if(isset($_POST['masinhvien'])) echo $_POST['masinhvien'] ?>">
            <span style="color: red"><?php echo isset($error['masinhvien']) ? $error['masinhvien'] : ''; ?></span>
        </div>
        <div class="form-group">
          <label>Họ tên:</label>
          <input type="text" class="form-control input-sm" name="hoten" value="<?php if(isset($_POST['hoten'])) echo $_POST['hoten'] ?>">
          <span style="color: red"><?php echo isset($error['hoten']) ? $error['hoten'] : ''; ?></span>
      </div>
      <div class="form-group">
          <label >Ngày sinh:</label>
          <input type="date" class="form-control input-sm" name="ngaysinh" value="<?php if(isset($_POST['ngaysinh'])) echo $_POST['ngaysinh'] ?>">
          <span style="color: red"><?php echo isset($error['ngaysinh']) ? $error['ngaysinh'] : ''; ?></span>
      </div>
      <div class="form-group">
          <label for="pwd">Giới tính:</label>
          <input type="radio" name="gioitinh" value="1" checked="">Nam
          <input type="radio" name="gioitinh" value="0">Nữ
      </div>
      <div class="form-group">
          <label >Email:</label>
          <input type="email" class="form-control input-sm" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email'] ?>">
          <span style="color: red"><?php echo isset($error['email']) ? $error['email'] : ''; ?></span>
      </div>
      <div class="form-group">
          <label>Địa chỉ:</label>
          <input type="text" class="form-control input-sm" name="diachi" value="<?php if(isset($_POST['diachi'])) echo $_POST['diachi'] ?>">
          <span style="color: red"><?php echo isset($error['diachi']) ? $error['diachi'] : ''; ?></span>
      </div>
      <div class="form-group">
          <label>Số điện thoại:</label>
          <input type="text" class="form-control input-sm" name="sdt" value="<?php if(isset($_POST['sdt'])) echo $_POST['sdt'] ?>">
          <span style="color: red"><?php echo isset($error['sdt']) ? $error['sdt'] : ''; ?></span>
      </div>

      <input type="submit" class="btn btn-danger" name="them" value="Thêm" >
  </form>
</body>

</html>
