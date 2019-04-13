<?php
	/**
	* 
	*/
	class LoaiChungChi
	{
		var $MaChungChi;
		var $TenChungChi;
		function __construct($maChungChi, $tenChungChi) {
			$this->MaChungChi = $maChungChi;
			$this->TenChungChi = $tenChungChi;
		}

        /**
         * Lấy toàn bộ danh sách lớp trong CSDL
         * @return array(Lop)
         */
        static function getListLoaiChungChi()
        {
        	$conn = ConnectDB();
        	$sql = " SELECT * FROM LoaiChungChi";
        	$result = $conn->query($sql);
        	$ls = array();
        	if ($result->num_rows > 0) 
        	{
        		while($row = $result->fetch_assoc()) 
        		{
        			$ls[] = new LoaiChungChi($row["MaChungChi"],$row["TenChungChi"]);
        		}
            } 
            return $ls;
        }
        static function them($maChungChi, $tenChungChi){
            $conn= ConnectDB();
            mysqli_set_charset($conn,"utf8");
            $sql="INSERT INTO LoaiChungChi (MaChungChi, TenChungChi)
            VALUES (N'$maChungChi', N'$tenChungChi') ";
            return $conn->query($sql);
        }
        // static function xoa($maChungChi){
        //     $conn= ConnectDB();
        //     mysqli_set_charset($conn,"utf8");
        //     $sql = "DELETE FROM LoaiChungChi WHERE MaChungChi = $maChungChi ";
        //     return $conn->query($sql);
        //     $conn->close();
        // }
        static function xoa($id){
        $conn= ConnectDB();
        mysqli_set_charset($conn,"utf8");
        $sql = "DELETE FROM LoaiChungChi WHERE MaChungChi = N'$id' ";
        return $conn->query($sql);
        $conn->close();
    }
        static function sua($maChungChi, $tenChungChi){
            $conn= ConnectDB();
            mysqli_set_charset($conn,"utf8");
            $sql=" UPDATE LoaiChungChi SET 
            TenChungChi = N'$tenChungChi'
            WHERE MaChungChi = N'$maChungChi'
            ";
            return $conn->query($sql);
        }

	}
?>