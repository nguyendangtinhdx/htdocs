<?php 
	// tin chinh
	function TinMoiNhat_MotTin($idLT){
		$qr = "
			SELECT tin.*,Ten_KhongDau FROM tin,loaitin WHERE tin.idLT = loaitin.idLT AND tin.idLT = $idLT ORDER BY idTin DESC LIMIT 0,1;
		";
		return mysql_query($qr);
	}
	// duoi tin chinh
	function TinXemThem_BonTin($idLT){
		$qr = "
			  SELECT tin.*,Ten_KhongDau FROM tin,loaitin WHERE tin.idLT = loaitin.idLT AND tin.idLT = $idLT ORDER BY idTin DESC LIMIT 1,4;
		";
		return mysql_query($qr);
	}
	// tin moi
	function TinMoiNhat_SauTin($idLT){
		$qr = "
			SELECT tin.*,Ten_KhongDau FROM tin,loaitin WHERE tin.idLT = loaitin.idLT AND tin.idLT = $idLT ORDER BY idTin DESC LIMIT 5,6;
		";
		return mysql_query($qr);
	}
	// quang cao 3
	function QuangCao_3($vitri){
		$qr = "
			SELECT * FROM quangcao WHERE ViTri = $vitri ORDER BY idQuangCao DESC LIMIT 0,3;
		";
		return mysql_query($qr);
	}
	// quang cao 1
	function QuangCao_1($vitri){
		$qr = "
			SELECT * FROM quangcao WHERE ViTri = $vitri ORDER BY idQuangCao DESC LIMIT 0,2;
		";
		return mysql_query($qr);
	}
	// tin cua danh sach tin
	function Tin_TheoLoaiTin_BonTin($idLT){
		$qr = "
			SELECT tin.*,Ten_KhongDau FROM tin,loaitin WHERE tin.idLT = loaitin.idLT AND tin.idLT = $idLT ORDER BY idTin ASC LIMIT 0,1;
		";
		return mysql_query($qr);
	}
	// cac tin khac cua danh sach tin
	function CacTinKhac_TheoLoaiTin_BonTin($idLT){
		$qr = "
			SELECT tin.*,Ten_KhongDau FROM tin,loaitin WHERE tin.idLT = loaitin.idLT AND tin.idLT = $idLT ORDER BY idTin ASC LIMIT 1,10;
		";
		return mysql_query($qr);
	}
	// menu
	function DanhSachTheLoai(){
		$qr = "
			SELECT * FROM theloai
		";
		return mysql_query($qr);
	}
	// sub_menu
	function DanhSachLoaiTin_Theo_TheLoai($idTL){
		$qr = "
			SELECT * FROM loaitin WHERE idTL = $idTL;
		";
		return mysql_query($qr);
	}
	// danh sach loai tin o content
	function TinTheoLoaiTin($idLT){
		$qr = "
			SELECT * FROM tin WHERE idLT = $idLT ORDER BY idTin DESC 
		";
		return mysql_query($qr);
	}
	// phan trang
	function TinTheoLoaiTin_PhanTrang($idLT,$start,$limit){
		$qr = "
			SELECT tin.*,Ten_KhongDau FROM tin,loaitin WHERE tin.idLT = loaitin.idLT AND tin.idLT = $idLT ORDER BY idTin DESC LIMIT $start, $limit ;
		";
		return mysql_query($qr);
	}
	// hien thi duong dan trong tintrongloai
	function Path_TinTrongLoai($idLT){
		$qr = "
			SELECT TenTL, Ten FROM theloai, loaitin WHERE theloai.idTL = loaitin.idTL AND idLT = $idLT
		";
		return mysql_query($qr);
	}
	// hien thi duong dan trong chitiettin
	function Path_Tin($idTin){
		$qr = "
			SELECT TenTL, Ten, TieuDe FROM theloai, loaitin, tin WHERE theloai.idTL = loaitin.idTL AND loaitin.idLT = tin.idLT AND idTin = $idTin
		";
		return mysql_query($qr);
	}
	// hien thi duong dan trong chitietvideo
	function Path_Video($idVideo){
		$qr = "
			SELECT TieuDe FROM video WHERE  idVideo = $idVideo
		";
		return mysql_query($qr);
	}
	// 10 tin xem them cua tin dang xem
	function TinCungLoai_BonTin($idTin,$idLT){
		$qr = "
		SELECT tin.*,Ten_KhongDau FROM tin,loaitin WHERE idTin <> $idTin AND tin.idLT = loaitin.idLT AND tin.idLT = $idLT ORDER BY RAND() DESC LIMIT 0,4;
		";
		return mysql_query($qr);
	}
	// 4 tin cung loai moi tin
	function ChiTietTin($idTin){
		$qr = "
			SELECT * FROM tin WHERE idTin = $idTin
		";
		return mysql_query($qr);
	}
	// 4 tin cung loai moi tin
	function ChiTietViDeo($idVideo){
		$qr = "
			SELECT * FROM video WHERE idVideo = $idVideo
		";
		return mysql_query($qr);
	}
	// slide tin
	function SlideTin_ChinTin($idLT){
		$qr = "
			SELECT tin.*,Ten_KhongDau FROM tin,loaitin WHERE tin.idLT = loaitin.idLT AND tin.idLT = $idLT ORDER BY idTin DESC LIMIT 0,9;
		";
		return mysql_query($qr);
	}
	//video
	function Video(){
		$qr = "
			SELECT * FROM video ORDER BY RAND() LIMIT 0,1
		";
		return mysql_query($qr);
	}
	// slide video
	function SlideVideo_SauVideo(){
		$qr = "
			SELECT * FROM video ORDER BY idVideo DESC LIMIT 0,6;
		";
		return mysql_query($qr);
	}
	// cap nhat so lan xem tin
	function SoLanXemTin($idTin){
		$qr = "
			UPDATE tin
			SET SoLanXem = SoLanXem + 1
			WHERE idTin = $idTin
		";
		mysql_query($qr);
	}
	// so lan truy cap
	function SoLanTruyCap(){
		$qr = "
			UPDATE luottruycap
			SET SoLanTruyCap = SoLanTruyCap + 1
			WHERE idLuot = 1
		";
		mysql_query($qr);
	}
	function Xem_SoLanTruyCap(){
		$qr = "
			SELECT SoLanTruyCap FROM luottruycap
			WHERE idLuot = 1
		";
		return mysql_query($qr);
	}
	// lien he
	function LienHe(){
		$qr = "
			SELECT SoDienThoai FROM lienhe WHERE id = 1
		";
		return mysql_query($qr);
	}
	function TimKiem($tukhoa){
		$qr="
			SELECT * FROM tin WHERE TieuDe REGEXP '$tukhoa' ORDER BY idTin DESC 
		";
		return mysql_query($qr);
	}
	// SELECT tin.*,Ten_KhongDau FROM tin,loaitin WHERE TieuDe REGEXP '$tukhoa' AND tin.idLT = loaitin.idLT AND tin.idTin = $idTin ORDER BY idTin DESC;
?>