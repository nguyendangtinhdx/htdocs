<?php 
  $idLT = 11;
?>
	<div class="box_tin">
       <?php 
          $tin_bontin = Tin_TheoLoaiTin_BonTin($idLT);
          while ($row_tin_bontin = mysql_fetch_array($tin_bontin)) {
       ?>
      
       <div class="tin">
           <div class="icon"></div>
           <a href="Tin/<?php echo $row_tin_bontin['Ten_KhongDau']; ?>/<?php echo $row_tin_bontin['TieuDe_KhongDau']; ?>-<?php echo $row_tin_bontin['idTin']; ?>.html" title="<?php echo $row_tin_bontin['TieuDe']; ?>"><img src="upload/tintuc/<?php echo $row_tin_bontin['urlHinh']; ?>" width="180" height="130">
                <p class="tieudetin" title="<?php echo $row_tin_bontin['TieuDe']; ?>"><?php echo $row_tin_bontin['TieuDe']; ?></p>
           </a>
           <p class="noidungtin"><?php echo $row_tin_bontin['TomTat']; ?></p>
           <p class="xemcactinkhac">Xem các tin khác</p>
           <ul>
              <?php  
                $cactinkhac_bontin = CacTinKhac_TheoLoaiTin_BonTin($idLT);
                while ($row_cactinkhac_bontin = mysql_fetch_array($cactinkhac_bontin)) {
              ?>
               <li><a href="Tin/<?php echo $row_cactinkhac_bontin['Ten_KhongDau']; ?>/<?php echo $row_cactinkhac_bontin['TieuDe_KhongDau']; ?>-<?php echo $row_cactinkhac_bontin['idTin']; ?>.html" title="<?php echo $row_cactinkhac_bontin['TieuDe']; ?>"><?php echo $row_cactinkhac_bontin['TieuDe']; ?></a></li>
                <?php  
                  }
                ?>
           </ul>
       </div>
       <?php 
          }
       ?>
</div>
<!-- -------------------------------------------------------- -->
<?php 
  $idLT = 8;
?>
  <div class="box_tin">
       <?php 
          $tin_bontin = Tin_TheoLoaiTin_BonTin($idLT);
          while ($row_tin_bontin = mysql_fetch_array($tin_bontin)) {
       ?>
      
       <div class="tin">
           <div class="icon"></div>
           <a href="Tin/<?php echo $row_tin_bontin['Ten_KhongDau']; ?>/<?php echo $row_tin_bontin['TieuDe_KhongDau']; ?>-<?php echo $row_tin_bontin['idTin']; ?>.html" title="<?php echo $row_tin_bontin['TieuDe']; ?>"><img src="upload/tintuc/<?php echo $row_tin_bontin['urlHinh']; ?>" width="180" height="130">
                <p class="tieudetin" title="<?php echo $row_tin_bontin['TieuDe']; ?>"><?php echo $row_tin_bontin['TieuDe']; ?></p>
           </a>
           <p class="noidungtin"><?php echo $row_tin_bontin['TomTat']; ?></p>
           <p class="xemcactinkhac">Xem các tin khác</p>
           <ul>
              <?php  
                $cactinkhac_bontin = CacTinKhac_TheoLoaiTin_BonTin($idLT);
                while ($row_cactinkhac_bontin = mysql_fetch_array($cactinkhac_bontin)) {
              ?>
               <li><a href="Tin/<?php echo $row_cactinkhac_bontin['Ten_KhongDau']; ?>/<?php echo $row_cactinkhac_bontin['TieuDe_KhongDau']; ?>-<?php echo $row_cactinkhac_bontin['idTin']; ?>.html" title="<?php echo $row_cactinkhac_bontin['TieuDe']; ?>"><?php echo $row_cactinkhac_bontin['TieuDe']; ?></a></li>
                <?php  
                  }
                ?>
           </ul>
       </div>
       <?php 
          }
       ?>
</div>
<!-- -------------------------------------------------------- -->
<?php 
  $idLT = 9;
?>
  <div class="box_tin">
       <?php 
          $tin_bontin = Tin_TheoLoaiTin_BonTin($idLT);
          while ($row_tin_bontin = mysql_fetch_array($tin_bontin)) {
       ?>
      
       <div class="tin">
           <div class="icon"></div>
           <a href="Tin/<?php echo $row_tin_bontin['Ten_KhongDau']; ?>/<?php echo $row_tin_bontin['TieuDe_KhongDau']; ?>-<?php echo $row_tin_bontin['idTin']; ?>.html" title="<?php echo $row_tin_bontin['TieuDe']; ?>"><img src="upload/tintuc/<?php echo $row_tin_bontin['urlHinh']; ?>" width="180" height="130">
                <p class="tieudetin" title="<?php echo $row_tin_bontin['TieuDe']; ?>"><?php echo $row_tin_bontin['TieuDe']; ?></p>
           </a>
           <p class="noidungtin"><?php echo $row_tin_bontin['TomTat']; ?></p>
           <p class="xemcactinkhac">Xem các tin khác</p>
           <ul>
              <?php  
                $cactinkhac_bontin = CacTinKhac_TheoLoaiTin_BonTin($idLT);
                while ($row_cactinkhac_bontin = mysql_fetch_array($cactinkhac_bontin)) {
              ?>
               <li><a href="Tin/<?php echo $row_cactinkhac_bontin['Ten_KhongDau']; ?>/<?php echo $row_cactinkhac_bontin['TieuDe_KhongDau']; ?>-<?php echo $row_cactinkhac_bontin['idTin']; ?>.html" title="<?php echo $row_cactinkhac_bontin['TieuDe']; ?>"><?php echo $row_cactinkhac_bontin['TieuDe']; ?></a></li>
                <?php  
                  }
                ?>
           </ul>
       </div>
       <?php 
          }
       ?>
</div>
<!-- -------------------------------------------------------- -->
<?php 
  $idLT = 6;
?>
  <div class="box_tin">
       <?php 
          $tin_bontin = Tin_TheoLoaiTin_BonTin($idLT);
          while ($row_tin_bontin = mysql_fetch_array($tin_bontin)) {
       ?>
      
       <div class="tin">
           <div class="icon"></div>
           <a href="Tin/<?php echo $row_tin_bontin['Ten_KhongDau']; ?>/<?php echo $row_tin_bontin['TieuDe_KhongDau']; ?>-<?php echo $row_tin_bontin['idTin']; ?>.html" title="<?php echo $row_tin_bontin['TieuDe']; ?>"><img src="upload/tintuc/<?php echo $row_tin_bontin['urlHinh']; ?>" width="180" height="130">
                <p class="tieudetin" title="<?php echo $row_tin_bontin['TieuDe']; ?>"><?php echo $row_tin_bontin['TieuDe']; ?></p>
           </a>
           <p class="noidungtin"><?php echo $row_tin_bontin['TomTat']; ?></p>
           <p class="xemcactinkhac">Xem các tin khác</p>
           <ul>
              <?php  
                $cactinkhac_bontin = CacTinKhac_TheoLoaiTin_BonTin($idLT);
                while ($row_cactinkhac_bontin = mysql_fetch_array($cactinkhac_bontin)) {
              ?>
               <li><a href="Tin/<?php echo $row_cactinkhac_bontin['Ten_KhongDau']; ?>/<?php echo $row_cactinkhac_bontin['TieuDe_KhongDau']; ?>-<?php echo $row_cactinkhac_bontin['idTin']; ?>.html" title="<?php echo $row_cactinkhac_bontin['TieuDe']; ?>"><?php echo $row_cactinkhac_bontin['TieuDe']; ?></a></li>
                <?php  
                  }
                ?>
           </ul>
       </div>
       <?php 
          }
       ?>
</div>
