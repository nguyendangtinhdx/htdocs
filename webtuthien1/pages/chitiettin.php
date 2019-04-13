
<?php 
  if (isset($_GET["idTin"])) {
    $idTin = $_GET["idTin"];
    settype($idTin, "int");
  }
  else
  {
    $idTin = 1;
  }
  $tin = ChiTietTin($idTin);
  $row_tin = mysql_fetch_array($tin);
  SoLanXemTin($idTin);
?>
<?php 
    $bc = Path_Tin($idTin);
    $row_bc = mysql_fetch_array($bc);
?>
<p class="path">Trang chủ &raquo; <?php echo $row_bc['TenTL']; ?> &raquo; <?php echo $row_bc['Ten']; ?> &raquo; <!-- <?php echo $row_bc['TieuDe']; ?> --></p>

<!-- facebook -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.7";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-like" data-href="https://www.youtube.com/watch?v=GhJByQX-duU" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
<div class="fb-send" data-href="https://www.youtube.com/watch?v=GhJByQX-duU"></div>


<h1 class="title"><?php echo $row_tin["TieuDe"]; ?></h1>
<div class="des">

</div>
<div class="chitiet">
  <!--noi dung-->
     <?php echo $row_tin["Content"]; ?>
 <!--//noi dung-->
  <div class="solanxemtin">Số lần xem: <?php echo $row_tin["SoLanXem"]; ?></div>
    <br>
</div>
<div class="clear"></div>
<ul class="tincungloai">
  <?php 
  $muoitinxemthem = TinCungLoai_BonTin($idTin,$row_tin["idLT"]);
  while ($row_muoitinxemthem = mysql_fetch_array($muoitinxemthem)) {
      ?>
     
     <div class="tin_tincungloai">
        <a href="Tin/<?php echo $row_muoitinxemthem['Ten_KhongDau']; ?>/<?php echo $row_muoitinxemthem['TieuDe_KhongDau']; ?>-<?php echo $row_muoitinxemthem['idTin']; ?>.html"><img src="upload/tintuc/<?php echo $row_muoitinxemthem['urlHinh']; ?>" alt="" width="180" height="120" title="<?php echo $row_muoitinxemthem['TieuDe']; ?>"><p class="tieudetincungloai" title="<?php echo $row_muoitinxemthem['TieuDe']; ?>"><?php echo $row_muoitinxemthem['TieuDe']; ?></p></a>
     </div>
      <?php 
        }
      ?>
</ul> 




