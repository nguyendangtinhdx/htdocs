<?php 
	function TinMoiNhat_MotTin(){
		$qr = "
			SELECT * FROM tin ORDER BY idTin DESC LIMIT 0,1;
		";
		return mysql_query($qr);
	}
?>