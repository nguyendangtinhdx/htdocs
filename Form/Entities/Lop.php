<?php
class Lop{
    var $maLop;
    var $tenLop;
    function __construct($maLop, $tenLop) {
        $this->maLop = $maLop;
        $this->tenLop = $tenLop;
    }

        /**
         * Lấy toàn bộ danh sách lớp trong CSDL
         * @return array(Lop)
         */
        static function getList()
        {
            $conn = ConnectDB();
            $sql = " SELECT * FROM lop";
            $result = $conn->query($sql);
            $ls = array();
            if ($result->num_rows > 0) 
            {
                while($row = $result->fetch_assoc()) 
                {
                    $ls[] = new Lop($row["malop"],$row["tenlop"]);
                    // echo "Mã lớp: ".$row["malop"]." - Tên lớp: ".$row["tenlop"]." - Tên giáo viên cố vấn: ".$row["tengiaoviencovan"]."<br>"; 
                }
                // else 
                // {
                //     echo "0 results";
                // }
            } 
            // $ls[0] = new Lop("1", "TinK38A");
            // $ls[1] = new Lop("2", "TinK38B");
            // $ls[2] = new Lop("3", "TinK38C");
            // $ls[3] = new Lop("4", "TinK38D");
            // $ls[4] = new Lop("5", "Tất cả");
            return $ls;
        }

    }
    ?>