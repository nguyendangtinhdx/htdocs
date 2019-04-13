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
        { $ls = array();
           
            $conn= connectDB();
            $sql="select*from lop";
            $rs=$conn->query($sql);
            if($rs->num_rows){
                while ($row=$rs->fetch_assoc())
                {
                    $ls[]= new Lop($row["malop"],$row["tenlop"]);
                }
            }
            return $ls;
        }
    }
?>
