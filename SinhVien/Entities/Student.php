<?php
@include_once './Config.php';
class Student{
        /*
         * Properties
         * Camel syntax
         */
        var $maSinhVien;
        var $ho;
        var $ten;
        var $diaChi;
        var $ngaySinh;
        var $gioiTinh;
        var $queQuan;
        var $maLop;
        
        /**
         * Phương thức khởi tạo các tham số của lớp Student
         * @param string $maSinhVien
         * @param string $ho
         * @param string $ten
         * @param string $diaChi
         * @param string $ngaySinh
         * @param boolean $gioiTinh
         * @param string $queQuan
         */
        function __construct(
            $maSinhVien,
            $ho,
            $ten,
            $diaChi,
            $ngaySinh,
            $gioiTinh,
            $queQuan,
            $maLop
        ) {
            $this->maSinhVien = $maSinhVien;
            $this->ho = $ho;
            $this->ten = $ten;
            $this->diaChi = $diaChi;
            $this->ngaySinh = $ngaySinh;
            $this->gioiTinh = $gioiTinh;
            $this->queQuan = $queQuan;
            $this->maLop = $maLop;
        }
        
        /**
         * Lấy toàn bộ danh sách sinh viên trong CSDL
         * @return Array of Student
         */

        static function getList(){
            $ls = array();
            $conn= connectDB();
            mysqli_set_charset($conn,"utf8");
            $sql="select * from sinhvien";
            $rs=$conn->query($sql);
            if($rs->num_rows){
                while ($row=$rs->fetch_assoc())
                {
                    $ls[]= new Student($row["maSV"],$row["ho"],$row["ten"] ,$row["quequan"]                ,
                        $row["ngaySinh"],1,
                        $row["noiSinh"],
                        $row["malop"]
                    );
                }
                return $ls;            
            }}

            static function getListByKeyWord($keyWord){
            //CSDL Sinhvien
                $ls = Student::getList();

                $rs = array();
                foreach ($ls as $key => $sv){
                    if ($sv->maLop === $keyWord || 
                        $sv->ten ===$keyWord ||
                        $sv->queQuan ===$keyWord
                    )
                        $rs[] = $sv;
                    }
                    return $rs;            
                }
                static function them($maSinhVien, $ho, $ten, $queQuan, $ngaySinh, $diaChi, $maLop){
                    $conn= ConnectDB();
                    $sql="INSERT INTO sinhvien "."(maSV, ho, ten, quequan, ngaySinh, noiSinh, malop) "."VALUES ('$maSinhVien', N'$ho', N'$ten', N'$queQuan', N'$ngaySinh', "
                    . "N'$diaChi', N'$maLop');";
                    return $conn->query($sql);
                }
                static function xoa($maSinhVien){
                    $conn= ConnectDB();
                    mysqli_set_charset($conn,"utf8");
                    $sql = "DELETE FROM sinhvien WHERE maSV='".$maSinhVien."'";
                    return $conn->query($sql);
                    $conn->close();
                }

                static function update1($maSinhVien,$ho, $ten, $noiSinh, $ngaySinh){
                    $conn= ConnectDB();
                    mysqli_set_charset($conn,"utf8");
                    $sql="UPDATE sinhvien SET ho='".$ho."',ten='".$ten."',noiSinh='".$noiSinh."',ngaySinh='".$ngaySinh."' WHERE maSV='".$maSinhVien."'";
                    // echo $sql;
                    return $conn->query($sql);
                }
                
            }

            ?>

