<?php
include_once './Entities/Article.php';
include_once './Entities/Category.php';
include_once './DAL/config.php';

?>
<!DOCTYPE html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <script src="ckeditor/ckeditor.js"></script>
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
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <!-- Brand -->
      <a class="navbar-brand" href="#">Trang chủ</a>

      <!-- Links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Link 1</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="#">Link 2</a>
      </li>

      <!-- Dropdown -->
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            Dropdown link
        </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Link 1</a>
            <a class="dropdown-item" href="#">Link 2</a>
            <a class="dropdown-item" href="#">Link 3</a>
        </div>
    </li>
</ul>
<form class="form-inline">
    <input class="form-control" type="text" placeholder="Search">
    <button class="btn btn-success" type="button">Search</button>
</form>
</nav>
<a href="index.php" class="btn btn-success" style="margin: 5px 0 0 5px">Trở lại trang quản trị </a>
<?php
if(isset($_GET['id'])){
    $conn= ConnectDB();
    $id_row = $_GET['id'];
    mysqli_set_charset($conn,"utf8");
    $sql="SELECT * FROM article WHERE ID = $id_row ";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array ($result)) {
        ?>
        <div style=" text-align: center; margin-top: -20px">
            <h2><?=$row['Title'] ?></h2><br>
            <i><?=$row['Description'] ?></i><br>
            <p><?=$row['Content'] ?></p>
            <p> Tác giả: <b><u><?=$row['Author'] ?></u></b></p>
            <p> Ngày post: <?=$row['DateCreated'] ?></p>
        </div>
        <?php
    }}
    ?>
</form>
</body>

</html>
