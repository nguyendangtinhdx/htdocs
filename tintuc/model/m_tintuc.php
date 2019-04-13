<?php

include('database.php');


class M_tintuc extends database
{
	function getSlide()
	{
		$sql = "SELECT * FROM slide";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	function getMenu()
	{
		$sql = "SELECT tl.*, GROUP_CONCAT(Distinct lt.id,':',lt.Ten,':',lt.TenKhongDau) AS LoaiTin, lt.TenKhongDau as TenKhongDau ,tt.id as idTin, tt.TieuDe as TieuDeTin, tt.Hinh as HinhTin, tt.TomTat as TomTatTin, tt.TieuDeKhongDau as TieuDeKhongDauTin FROM theloai tl INNER JOIN loaitin lt 
		ON lt.idTheLoai = tl.id INNER JOIN tintuc tt ON tt.idLoaiTin = lt.id GROUP BY tl.id ";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	function getTinTucByIdLoai($id_loaitin,$vitri=-1,$limit=-1)
	{
		$sql = "SELECT * FROM tintuc WHERE idLoaiTin = $id_loaitin ORDER BY id DESC";
		if ($vitri > -1 && $limit > 1) {
			$sql .=" limit $vitri,$limit ";
		}
		$this->setQuery($sql);
		return $this->loadAllRows(array($id_loaitin));
	}
	function getTitleById($id_loaitin)
	{
		$sql = "SELECT Ten FROM loaitin WHERE id = $id_loaitin ";
		$this->setQuery($sql);
		return $this->loadRow(array($id_loaitin));
	}
	function getChiTietTin($id)
	{
		$sql = "SELECT * FROM tintuc WHERE id = $id ";
		$this->setQuery($sql);
		return $this->loadRow(array($id));
	}
	function getComment($id_tin)
	{
		$sql = "SELECT * FROM comment WHERE idTinTuc = $id_tin ";
		$this->setQuery($sql);
		return $this->loadAllRows(array($id_tin));
	}
	function getRelatedNews($alias)
	{
		$sql = "SELECT tt.*, lt.TenKhongDau as TenKhongDau, lt.id as idLoaiTin FROM tintuc tt INNER JOIN loaitin lt ON tt.idLoaiTin = lt.id WHERE lt.TenKhongDau = '$alias' ORDER BY tt.id DESC limit 1,5 ";
		$this->setQuery($sql);
		return $this->loadAllRows(array($alias));
	}
	function getAliasLoaiTin($id_loaitin)
	{
		$sql = "SELECT TenKhongDau FROM loaitin WHERE id = $id_loaitin ";
		$this->setQuery($sql);
		return $this->loadRow(array($id_loaitin));
	}
	function getTinNoiBat()
	{
		$sql = "SELECT tt.*, lt.TenKhongDau as TenKhongDau, lt.id as idLoaiTin FROM tintuc tt INNER JOIN loaitin lt ON tt.idLoaiTin = lt.id WHERE tt.NoiBat = 1 ORDER BY tt.id DESC limit 1,5 ";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	function addComment($id_user, $id_tin, $noidung)
	{
		$sql = "INSERT INTO comment(idUser,idTinTuc,NoiDung) VALUES(?,?,?) ";
		$this->setQuery($sql);
		return $this->execute(array($id_user,$id_tin,$noidung));
	}
	function search($key)
	{
		$sql = "SELECT tt.*, lt.TenKhongDau as TenKhongDau FROM tintuc tt INNER JOIN loaitin lt ON tt.idLoaiTin = lt.id WHERE tt.TieuDe LIKE '%$key%' OR tt.TomTat LIKE '%$key%' ";
		$this->setQuery($sql);
		return $this->loadAllRows(array($key));
	}

}


?>