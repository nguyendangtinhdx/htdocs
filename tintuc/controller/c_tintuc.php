<?php
include('model/m_tintuc.php');
include('model/pager.php');
class C_tintuc
{
	function index()
	{
		$m_tintuc = new M_tintuc();
		$slide = $m_tintuc->getSlide();
		$menu = $m_tintuc->getMenu();
		return array('slide'=>$slide,'menu'=>$menu);
	}
	function loaitin()
	{
		$id_loai = $_GET['id_loai'];
		$m_tintuc = new M_tintuc();

		$alias = $m_tintuc->getAliasLoaiTin($id_loai);
		$danhmuctin = $m_tintuc->getTinTucByIdLoai($id_loai);

		$trang_hientai =(isset($_GET['page']))?$_GET['page']:1;
		$pagination = new pagination(count($danhmuctin),$trang_hientai,10,10);
		$paginationHTML = $pagination->showPagination();
		$limit = $pagination->_nItemOnPage;
		$vitri = ($trang_hientai-1)*$limit;
		$danhmuctin = $m_tintuc->getTinTucByIdLoai($id_loai,$vitri,$limit);

		$menu = $m_tintuc->getMenu();
		$title = $m_tintuc->getTitleById($id_loai);
		return array('danhmuctin'=>$danhmuctin,'menu'=>$menu,'title'=>$title,'thanh_phantrang'=>$paginationHTML,'alias'=>$alias);
	}
	function chitiettin()
	{
		$id_tin = $_GET['id_tin'];
		$alias = $_GET['loai_tin'];
		$m_tintuc = new M_tintuc();
		$chitiettin = $m_tintuc->getChiTietTin($id_tin);
		$comment = $m_tintuc->getComment($id_tin);
		$relatednews = $m_tintuc->getRelatedNews($alias);
		$tinnoibat = $m_tintuc->getTinNoiBat();
		return array('chitiettin'=>$chitiettin,'comment'=>$comment,'relatednews'=>$relatednews,'tinnoibat'=>$tinnoibat);
	}
	function themBinhLuan($id_user, $id_tin, $noidung)
	{
		$m_tintuc = new M_tintuc();
		$binhluan = $m_tintuc->addComment($id_user,$id_tin,$noidung);
		header('location:'.$_SERVER['HTTP_REFERER']);
	}
	function timkiem($key)
	{
		$m_tintuc = new M_tintuc();
		$tin = $m_tintuc->search($key);
		return $tin;
	}

}


?>