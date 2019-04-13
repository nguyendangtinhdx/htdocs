<?php
@include_once './config.php';
class CapCho{

    var $MaChungChi;
    var $MaHocVien;
    var $NgayCap;
    var $SoCap;
    var $DiemThucHanh;
    var $DiemLyThuyet;

    function __construct(
        $maChungChi,
        $maHocVien,
        $ngayCap,
        $soCap,
        $diemThucHanh,
        $diemLyThuyet
    ) {
        $this->MaChungChi = $maChungChi;
        $this->MaHocVien = $maHocVien;
        $this->NgayCap = $ngayCap;
        $this->SoCap = $soCap;
        $this->DiemLyThuyet = $diemLyThuyet;
        $this->DiemThucHanh = $diemThucHanh;
        
    }


        static function themCapCho($maChungChi, $maHocVien, $ngayCap, $soCap, $diemLyThuyet, $diemThucHanh){
            $conn= ConnectDB();
            mysqli_set_charset($conn,"utf8");
            $sql="INSERT INTO CapCho (MaChungChi, MaHocVien, NgayCap, SoCap, DiemLyThuyet, DiemThucHanh)
            VALUES (N'$maChungChi', N'$maHocVien', N'$ngayCap', $soCap, $diemLyThuyet, $diemThucHanh) ";
            return $conn->query($sql);
        }

        // static function sua($id, $title, $description, $content, $dateCreated, $dateModifier, $author, $id_Category){
        //     $conn= ConnectDB();
        //     mysqli_set_charset($conn,"utf8");
        //     $sql=" UPDATE article SET 
        //     Title = N'$title',
        //     Description = N'$description',
        //     Content = N'$content',
        //     DateCreated = N'$dateCreated',
        //     DateModifier = N'$dateModifier',
        //     Author = N'$author',
        //     ID_Category = $id_Category
        //     WHERE ID = $id
        //     ";
        //     return $conn->query($sql);
        // }

    }

    ?>

