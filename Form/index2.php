<?php
include_once './Entities/Student.php';
include_once './Entities/Lop.php';
include_once './DAL/config.php';
ConnectDB();
$dsSinhVien = Student::getList();
if ($_SERVER["REQUEST_METHOD"] == "POST")
    if (isset($_REQUEST["filter"])){
        if ($_REQUEST["filter"]=="filterbykeyword")
            $dsSinhVien = Student::getListByKeyWord($_REQUEST["key"]);
        else if ($_REQUEST["filter"]=="filterbyclass")
        {
            $dsSinhVien = Student::getListByMaLop($_REQUEST["maLop"]);
        }
    }
    ?>
    <!DOCTYPE html>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <html>
    <head>
        <meta charset="UTF-8">
        <title>Danh sách lớp</title>
        <style>
        .title{
            margin-top: 10px;
            color: red;
        }
        body, .th{
            width: 1300px;
            margin: auto;
        }
        .col-7{
            float: right;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h2 align='center'class='title' >Danh sách sinh viên</h2>
    <form action="index2.php" method="POST">
        <div class="row">
            <div class="col-5">
                <label>Lớp: </label>
                <select name="maLop">
                    <?php
                    $danhSachLop = Lop::getList();
                    $maLop = "";

                    if (isset($_REQUEST["maLop"]))
                        $maLop = $_REQUEST["maLop"];
                    foreach ($danhSachLop as $key => $lop)
                        if ($lop->maLop == $maLop){
                            echo "<option selected='selected' value='$lop->maLop'>$lop->tenLop</option>";
                        }
                        else
                            echo "<option value='$lop->maLop'>$lop->tenLop</option>";
                        ?>
                    </select>
                    <button type="submit" name="filter" value="filterbyclass" class="btn btn-primary">
                        <i class="fa fa-filter" aria-hidden="true"> 
                            Chọn
                        </i>
                    </button>
                </div>
                <div class="col-7" style="text-align: right">
                    <input type="text" placeholder="Nhập từ khóa tìm kiếm" name="key">
                    <button type="submit" name="filter" value="filterbykeyword" class="btn btn-success">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        Tìm kiếm
                    </button>
                </div>
            </div>

        </form>
            <table class='table table-hover th' ><tr>
            <th>Mã sinh viên</th><th>Họ tên</th><th>Ngày sinh</th><th>Giới tính</th>
            <th>Email</th><th>Địa chỉ</th><th>SĐT</th><th>Mã lớp</th><th></th><th></th>
            </tr>
            
            <?php
                foreach ($dsSinhVien as $index => $student) {
                    if ($student->gioiTinh == 0) {
                        $gender = 'Nữ';
                    }
                    else
                    {
                        $gender = 'Nam';
                    }
            ?>
                <tr>
                    <td><?=$student->maSinhVien?></td>
                    <td><?=$student->hoTen?></td>
                    <td><?=$student->ngaySinh?></td>
                    <td><?=$gender?></td>
                    <td><?=$student->email?></td>
                    <td><?=$student->diaChi?></td>
                    <td><?=$student->sdt?></td>
                    <td><?=$student->maLop?></td>
                    <td><a href='sua.php?MaSV=<?=$student->maSinhVien ?>' class='btn btn-info'><i class='fa fa-eyedropper' aria-hidden='true'> Sửa</i></a></td>
                    <td><a href='xoa.php?MaSV=<?=$student->maSinhVien ?>' class='btn btn-danger'><i class='fa fa-times' aria-hidden='true'> Xóa</i></a></td>
                </tr>
            <?php
                }
            ?>
            </table>
        <div style="text-align:right; margin-right: 20px;">
            <a href="them.php" class="btn btn-warning">
                <i class="fa fa-plus" aria-hidden="true"></i>
                Thêm mới 
            </a>
        </div>
    </body>

    </html>