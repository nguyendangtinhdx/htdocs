<?php
	/**
	* 
	*/
	class Category
	{
		var $ID;
		var $Name;
		function __construct($id, $name) {
			$this->ID = $id;
			$this->Name = $name;
		}

        /**
         * Lấy toàn bộ danh sách lớp trong CSDL
         * @return array(Lop)
         */
        static function getList()
        {
        	$conn = ConnectDB();
        	$sql = " SELECT * FROM category";
        	$result = $conn->query($sql);
        	$ls = array();
        	if ($result->num_rows > 0) 
        	{
        		while($row = $result->fetch_assoc()) 
        		{
        			$ls[] = new Category($row["ID"],$row["Name"]);
        		}
            } 
            return $ls;
        }
	}
?>