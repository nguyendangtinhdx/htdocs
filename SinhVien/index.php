<?php
include_once './Entities/Lop.php';
include_once './Entities/Student.php';
include_once './Entities/Config.php';
$dsSinhVien = Student::getList();
if ($_SERVER["REQUEST_METHOD"] =="POST")
    if (isset ($_REQUEST["filter"]))
        $dsSinhVien = Student::getListByKeyWord ($_REQUEST["key"]);
    else if (isset ($_REQUEST["filterbyclass"]))
        $dsSinhVien = Student::getListByMaLop ($_REQUEST["maLop"]);
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" crossorigin="anonymous">
        <title>Đây là trang web đầu tiên của tôi</title>
        <style>
        table{width: 100%;}
        table,th, td{border: 1px solid black;}
        select{
            min-width: 200px; 
        }
    </style>
</head>
<body class="container-fluid">
    <?php include_once './Entities/Config.php'; 

    ?>
    <h1>Danh sách sinh viên</h1>
    <form method="POST" action="index.php">
        <div class="row">
            <div class="col-5">
                <label>Lớp:</label>
                <select name="maLop">
                    <?php
                    $danhSachLop = Lop::getList();
                    $maLop = "";
                    if (isset($_REQUEST["maLop"]))
                        $maLop = $_REQUEST["maLop"];
                    foreach ($danhSachLop as $key => $lop) {
                        if ($lop->maLop == $maLop)
                            echo "<option selected='selected' value='$lop->maLop'>$lop->tenLop</option>";
                        else
                            echo "<option value='$lop->maLop'>$lop->tenLop</option>";
                    }
                    ?>                    
                </select>
                <button type="submit" class="btn btn-info" name="filterbyclass" value="maLop">
                    <i class="fa fa-filter" aria-hidden="true"></i>
                    Lọc
                </button>
            </div>
            <div class="col-7" style="text-align: right">
                <input placeholder="Từ khóa" type="text"  />
                <button type="submit" class="btn btn-success" name="filter" value="key" >
                    <i class="fa fa-search" aria-hidden="true"></i>
                    Tìm kiếm
                </a>
            </div>

        </div>
    </form>
    <br>
    <?php
        /*
         * Hiển thị danh sách sinh viên
         */
        
        echo "<table class='table table-bordered'><tr>"
        . "<th>Mã sinh viên</th>"
        . "<th>Họ</th>"
        . "<th>Tên</th>"
        . "<th>Nơi Sinh</th>"
        . "<th>Chỉnh sửa</th>"
        . "<th>Xóa</th>"
        . "</tr>";
        foreach ($dsSinhVien as $index => $student) {
            echo "<tr>";
            echo "<td>$student->maSinhVien</td>";
            echo "<td>$student->ho</td>";
            echo "<td>$student->ten</td>";
            echo "<td>$student->queQuan</td>";
            echo "<td><a href='edit.php?masv=$student->maSinhVien'>Chỉnh sửa</a></td>";
            echo "<td><a href='xoa.php?masv=$student->maSinhVien'>Xóa</a></td>";
            echo "</tr>";
        }
        echo "</table>";
        ?>
        <div style="text-align:right">
            <a class="btn btn-warning" href="addstudent.php">
                <i class="fa fa-plus" aria-hidden="true"></i>
                Thêm mới 
            </a>
        </div>
    </body>
    </html>

