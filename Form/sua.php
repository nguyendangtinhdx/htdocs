






                    <?php
                    <?php
                    <input type="radio" name="gioitinh" value="0" checked="checked">Nữ
                    <input type="radio" name="gioitinh" value="0">Nữ
                    <input type="radio" name="gioitinh" value="1" >Nam
                    <input type="radio" name="gioitinh" value="1" checked="checked">Nam
                    <input type="text" class="form-control input-sm" name="masinhvien" disabled value="<?=$row['masinhvien'] ?>">
                    <label>Mã sinh viên:</label>
                    ?>
                    ?>
                  <?php 
                  <input type="date" class="form-control input-sm" name="ngaysinh" value="<?=$row['ngaysinh'] ?>" >
                  <input type="text" class="form-control input-sm" name="hoten" value="<?=$row['hoten'] ?>" >
                  <label >Ngày sinh:</label>
                  <label for="pwd">Giới tính:</label>
                  <label>Họ tên:</label>
                  <span style="color: red"><?php echo isset($error['hoten']) ? $error['hoten'] : ''; ?></span>
                  <span style="color: red"><?php echo isset($error['ngaysinh']) ? $error['ngaysinh'] : ''; ?></span>
                  if ($row['gioitinh'] == 1) {
                </div>
                <div class="form-group">
                <div id="margin" class="form-group">
                ?>
                }
                }else{
              </div>
              </div>
              <div class="form-group">
              <div class="form-group">
              <input type="email" class="form-control input-sm" name="email" value="<?=$row['email'] ?>">
              <input type="text" class="form-control input-sm" name="diachi" value="<?=$row['diachi'] ?>" >
              <input type="text" class="form-control input-sm" name="sdt" value="<?=$row['sdt'] ?>" >
              <label >Email:</label>
              <label>Số điện thoại:</label>
              <label>Địa chỉ:</label>
              <span style="color: red"><?php echo isset($error['diachi']) ? $error['diachi'] : ''; ?></span>
              <span style="color: red"><?php echo isset($error['email']) ? $error['email'] : ''; ?></span>
              <span style="color: red"><?php echo isset($error['sdt']) ? $error['sdt'] : ''; ?></span>
            </div>
            <div class="form-group">
            <form id="form" action="sua.php?MaSV=<?=$row['masinhvien'] ?>" method="POST">
            ?>
          </div>
          </div>
          </div>
          <div class="form-group">
          <div class="form-group">
          <input type="submit" class="btn btn-danger" name="sua" value="Sửa" >
        $conn= ConnectDB();
        $error['diachi'] = 'Bạn chưa nhập địa chỉ';
        $error['email'] = 'Bạn chưa nhập email';
        $error['hoten'] = 'Bạn chưa nhập họ sinh viên';
        $error['ngaysinh'] = 'Bạn chưa nhập ngày sinh';
        $error['sdt'] = 'Bạn chưa nhập số điện thoại';
        $masinhvien = $_GET['MaSV'];
        $result = mysqli_query($conn,$sql);
        $sql = " SELECT * FROM sinhvien WHERE masinhvien = N'$masinhvien' ";
        header("location:index2.php");
        margin-top: 30px;
        margin: auto;
        mysqli_set_charset($conn,"utf8");
        Student::Sua($masinhvien,$hoten,$ngaysinh,$gioitinh,$email,$diachi,$sdt);
        while($row = mysqli_fetch_array ($result)) {
        width: 800px;
      </form>
      <?php 
    #form{
    #margin{
    $diachi = $_POST['diachi'];
    $email = $_POST['email'];
    $error = array();
    $gioitinh = $_POST['gioitinh'];
    $hoten = $_POST['hoten'];
    $masinhvien = $_GET['MaSV'];
    $ngaysinh = $_POST['ngaysinh'];
    $sdt = $_POST['sdt'];
    <?php
    <meta charset="UTF-8">
    <style>
    <title></title>
    if ($_POST['sua'] && !$error) {
    if(empty($_POST['diachi'])) {
    if(empty($_POST['email'])) {
    if(empty($_POST['hoten'])) {
    if(empty($_POST['ngaysinh'])) {
    if(empty($_POST['sdt'])) {
    if(isset($_GET['MaSV'])){
    }
    }
    }
    }
    }
    }
    }
    }
  } 
<!DOCTYPE html>
</body>
</head>
</html>
</style>
<?php
<body>
<head>
<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
?>
?>
if ($_SERVER["REQUEST_METHOD"] === "POST"){ 
include_once './DAL/config.php';
include_once './Entities/Lop.php';
include_once './Entities/Student.php';
}
} 