<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />
<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu-v.css" />
<script type="text/javascript" src="js/ddsmoothmenu.js">
</script>


<script type="text/javascript">

  ddsmoothmenu.init({
	mainmenuid: "smoothmenu1", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>
</style>
<!-- Markup for mobile menu toggler. Hidden by default, only shown when in mobile menu mode -->
<a class="animateddrawer" id="ddsmoothmenu-mobiletoggle" href="#">
  <span></span>
</a>
<div id="smoothmenu1" class="ddsmoothmenu">
  <ul>
    <li class="active"><a class="uppercase" href="./"><span class="glyphicon glyphicon-home" style="color:#CC2031;"></span> TRANG CHỦ</a></li>
    <?php 
      $theloai = DanhSachTheLoai();
      while ($row_theloai = mysql_fetch_array($theloai)) {
        $idTL = $row_theloai['idTL'];
    ?>
    <li ><a class="uppercase" href=""><?php echo $row_theloai['TenTL'] ?></a>
      <ul>
        <?php 
          $loaitin = DanhSachLoaiTin_Theo_TheLoai($idTL);
          while ($row_loaitin = mysql_fetch_array($loaitin)) {
        ?>
        <li><a href="The-Loai/<?php echo $row_loaitin['Ten_KhongDau']; ?>/<?php echo $row_loaitin['idLT']; ?>-trang-1.html"><?php echo $row_loaitin['Ten']; ?></a></li>
        <?php 
          }
        ?>
      </ul>
    </li>
    <?php 
      }
    ?>
</ul>
<br style="clear: left" />
</div>


<!-- <h2 style="margin-top:200px">&nbsp;</h2> -->