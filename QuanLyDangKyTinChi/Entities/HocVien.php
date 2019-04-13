<?php
@include_once './config.php';
class HocVien{

    var $MaHocVien;
    var $Ho;
    var $Ten;
    var $QueQuan;
    var $NgaySinh;
    var $NoiSinh;
    var $NgayCap;
    var $SoCap;

    function __construct(
        $maHocVien,
        $ho,
        $ten,
        $queQuan,
        $ngaySinh,
        $noiSinh,
        $ngayCap,
        $soCap
    ) {
        $this->MaHocVien = $maHocVien;
        $this->Ho = $ho;
        $this->Ten = $ten;
        $this->QueQuan = $queQuan;
        $this->NgaySinh = $ngaySinh;
        $this->NoiSinh = $noiSinh;
        $this->NgayCap = $ngayCap;
        $this->SoCap = $soCap;
        
    }

        /**
         * Lấy toàn bộ danh sách sinh viên trong CSDL
         * @return Array of Student
         */

        static function getListHocVien(){
            $ls = array();
            $conn= connectDB();
            mysqli_set_charset($conn,"utf8");
            $sql=" SELECT h.*,c.NgayCap,c.SoCap FROM hocvien h INNER JOIN capcho c ON h.MaHocVien = c.MaHocVien ";
            $rs=$conn->query($sql);
            if($rs->num_rows){
                while ($row=$rs->fetch_assoc())
                {
                    $ls[]= new HocVien(
                        $row["MaHocVien"],
                        $row["Ho"],
                        $row["Ten"],
                        $row["QueQuan"], 
                        $row["NgaySinh"],
                        $row["NoiSinh"],
                        $row["NgayCap"],
                        $row["SoCap"]
                    );
                }
                return $ls;            
            }
        }
     
        static function getListHocVienByLoai($maChungChi){
            $ls = array();
            $conn= connectDB();
            mysqli_set_charset($conn,"utf8");
            $sql=" SELECT h.*,c.NgayCap,c.SoCap FROM hocvien h INNER JOIN capcho c ON h.MaHocVien = c.MaHocVien WHERE MaChungChi = '$maChungChi' ";
             $rs=$conn->query($sql);
            if($rs->num_rows){
                while ($row=$rs->fetch_assoc())
                {
                    $ls[]= new HocVien(
                        $row["MaHocVien"],
                        $row["Ho"],
                        $row["Ten"],
                        $row["QueQuan"], 
                        $row["NgaySinh"],
                        $row["NoiSinh"],
                        $row["NgayCap"],
                        $row["SoCap"]
                    );
                }
                return $ls;      
            }
        }
        static function them($maHocVien, $ho, $ten, $queQuan, $ngaySinh, $noiSinh){
            $conn= ConnectDB();
            mysqli_set_charset($conn,"utf8");
            $sql="INSERT INTO HocVien (MaHocVien, Ho, Ten, QueQuan, NgaySinh, NoiSinh)
            VALUES (N'$maHocVien', N'$ho', N'$ten', N'$queQuan', N'$ngaySinh', N'$noiSinh') ";
            return $conn->query($sql);
        }


    }

    ?>

