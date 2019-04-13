<div class="clear"></div>
<br>
<div id="footer_menu">
	<div class="sub_footer_menu">
		<?php 
			$theloai = DanhSachTheLoai();
			while ($row_theloai = mysql_fetch_array($theloai)) {
				$idTL = $row_theloai['idTL'];
		?>
		<ul>
			<b><?php echo $row_theloai['TenTL']; ?></b>
			<?php 
				$loaitin = DanhSachLoaiTin_Theo_TheLoai($idTL);
				while ($row_loaitin = mysql_fetch_array($loaitin)) {
			?>
			<li><a href="The-Loai/<?php echo $row_loaitin['Ten_KhongDau']; ?>/<?php echo $row_loaitin['idLT']; ?>-trang-1.html"><?php echo $row_loaitin['Ten']; ?></a></li>
			<?php 
				}
			?>
		</ul>
		<?php 
			}
		?>
	</div>
</div><!-- footer_menu -->
<div class="clear"></div>

<?php 
  if (isset($_GET["idTin"])) {
    $idTin = $_GET["idTin"];
    settype($idTin, "int");
  }
  else
  {
    $idTin = 1;
  }
?>
<?php 
	SoLanTruyCap();
  	$xem = Xem_SoLanTruyCap();
  	$row_xem = mysql_fetch_array($xem);

	$lienhe = LienHe();
  	$row_lienhe = mysql_fetch_array($lienhe);
?>
<div id="footer_main">
	<div id="sub_footer_main">
		<div class="footer_left">
			<div>&copy; Copyright 2016 <a href=""><i>tochuctuthienHFB</i></a> All Rights Reserved <br>
				Sponsored by <a href=""><i>Nguyen Dang Tinh</i></a> Information Technology</div>
		</div><!-- footer_left -->

		<div class="footer_right">
			<div class="thongke">
				<div><i class="fa fa-group" style="font-size:18px; color: #F7941E;"></i>
				Lượt truy cập: <i class="soluong"><b><?php echo $row_xem['SoLanTruyCap']; ?></b></i></div>
				<div><i class="fa fa-phone" style="font-size:18px; color: #F7941E;"></i>
				&nbsp;Hotline: <i class="soluong"><?php echo $row_lienhe['SoDienThoai']; ?></i></div>

			</div>
		</div><!-- footer_right -->
	</div>

		<div id='bttop'><img src="icon/icon_top.gif" alt=""></div>
</div><!-- footer_main -->
