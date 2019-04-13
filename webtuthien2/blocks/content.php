
<?php 
  if (isset($_GET["p"])) 
    $p = $_GET["p"];
  else
    $p = "";
?>
<?php 
  $idLT = 11;
?>
 <div id="fixed">
    <div id="date"></div>
    <?php 
      $tinmoinhat_mottin = TinMoiNhat_MotTin($idLT);
      $row_tinmoinhat_mottin = mysql_fetch_array($tinmoinhat_mottin);
    ?>
    <div id="tinchinh">
        <a href="Tin/<?php echo $row_tinmoinhat_mottin['Ten_KhongDau']; ?>/<?php echo $row_tinmoinhat_mottin['TieuDe_KhongDau']; ?>-<?php echo $row_tinmoinhat_mottin['idTin']; ?>.html" title="<?php echo $row_tinmoinhat_mottin['TieuDe']; ?>"><img class="anh_chinh" src="upload/tintuc/<?php echo $row_tinmoinhat_mottin['urlHinh']; ?>" title="<?php echo $row_tinmoinhat_mottin['TieuDe']; ?>" /></a>
        <h5 class="tieudetinchinh"><a href="Tin/<?php echo $row_tinmoinhat_mottin['Ten_KhongDau']; ?>/<?php echo $row_tinmoinhat_mottin['TieuDe_KhongDau']; ?>-<?php echo $row_tinmoinhat_mottin['idTin']; ?>.html" title="<?php echo $row_tinmoinhat_mottin['TieuDe']; ?>"><div><?php echo $row_tinmoinhat_mottin['TieuDe']; ?></div></a></h5>
        <div class="noidungtinchinh"><?php echo $row_tinmoinhat_mottin['TomTat']; ?></div>
        <hr style="margin: 5px 0">

        <ul class="tinxemthem">
          <?php 
            $bontinxemthem = TinXemThem_BonTin($idLT);
            while ($row_bontinxemthem = mysql_fetch_array($bontinxemthem)) {
          ?>
          <li id="arrow"><a href="Tin/<?php echo $row_bontinxemthem['Ten_KhongDau']; ?>/<?php echo $row_bontinxemthem['TieuDe_KhongDau']; ?>-<?php echo $row_bontinxemthem['idTin']; ?>.html" title="<?php echo $row_bontinxemthem['TieuDe']; ?>"><?php echo $row_bontinxemthem['TieuDe']; ?></a></li>
          <?php 
            }
          ?>
        </ul>     
  </div><!--tinchinh-->

      <div id="tinmoi_quangcao">
       <div id="tintruot">
           <div class="icon_video" style="margin: 0 10px 10px;"><div>Tin mới</div></div>
           <script type="text/javascript">
               $(function () {

                   $('marquee').marquee('pointer').mouseover(function () {
                       $(this).trigger('stop');
                   }).mouseout(function () {
                       $(this).trigger('start');
                   }).mousemove(function (event) {
                       if ($(this).data('drag') == true) {
                           this.scrollLeft = $(this).data('scrollX') + ($(this).data('x') - event.clientX);
                       }
                   }).mousedown(function (event) {
                       $(this).data('drag', true).data('x', event.clientX).data('scrollX', this.scrollLeft);
                   }).mouseup(function () {
                       $(this).data('drag', false);
                   });
               });
           </script>    
           <marquee direction="down" scrollamount="3" height="420" width="100%" onmouseover="this.stop()" onmouseout="this.start()" >
               <?php 
                  $tinmoinhat_sautin = TinMoiNhat_SauTin($idLT);
                  while ($row_tinmoinhat_sautin = mysql_fetch_array($tinmoinhat_sautin)) {
               ?>
               <div class="tin_cot">
                   <a href="Tin/<?php echo $row_tinmoinhat_sautin['Ten_KhongDau']; ?>/<?php echo $row_tinmoinhat_sautin['TieuDe_KhongDau']; ?>-<?php echo $row_tinmoinhat_sautin['idTin']; ?>.html" title="<?php echo $row_tinmoinhat_sautin['TieuDe']; ?>"><img src="upload/tintuc/<?php echo $row_tinmoinhat_sautin['urlHinh']; ?>" height="60" width="100" title="<?php echo $row_tinmoinhat_sautin['TieuDe']; ?>"></a>
                   <a href="Tin/<?php echo $row_tinmoinhat_sautin['Ten_KhongDau']; ?>/<?php echo $row_tinmoinhat_sautin['TieuDe_KhongDau']; ?>-<?php echo $row_tinmoinhat_sautin['idTin']; ?>.html" title="<?php echo $row_tinmoinhat_sautin['TieuDe']; ?>" ><p><?php echo $row_tinmoinhat_sautin['TieuDe']; ?></p></a>
               </div> 
                <div class="clear"></div>
               <?php 
                  }
               ?>           

           </marquee> 
       </div><!-- tintruot -->

       <div id="tinlienquan">
          
            <div id="quangcao1">
                <?php 
                    $quangcao_3 = QuangCao_3(1);
                    while ($row_quangcao_3 = mysql_fetch_array($quangcao_3)) {
                ?>
                <a href="<?php echo $row_quangcao_3['Url']; ?>" target="_blank"><img src="upload/tintuc/<?php echo $row_quangcao_3['urlHinh']; ?>" alt="" width="100%" height="140"></a>
                <?php 
                    }
                ?>
            </div>
          
        </div><!-- tinlienquan -->
    </div><!-- tinmoi_quangcao -->


</div><!-- fixed -->

</div><!--slideshow-->
<div class="clear"></div>
<hr class="hr">
<!-- <br> -->
<div id="content_main">
    <div id="danhsachtin">

        <?php
          switch ($p) {
            case 'tintrongloai': require "pages/tintrongloai.php";
              break;
            case 'chitiettin': require "pages/chitiettin.php";     
              break; 
            case 'timkiem': require "pages/timkiem.php";     
              break;  
            case 'video': require "pages/chitietvideo.php";     
              break;       
            default:
                require "pages/trangchu.php";
          }
        ?>
        <div class="fb-comments" data-href="https://www.youtube.com/watch?v=GhJByQX-duU" data-numposts="1" data-width="auto"></div>
    <div class="clear"></div>
    </div>
    <div id="quangcao">
      <div id="quangcao2">
          <?php 
            $quangcao_1 = QuangCao_1(2);
            while ($row_quangcao_1 = mysql_fetch_array($quangcao_1)){

          ?>
          <a href="<?php echo $row_quangcao_1['Url']; ?>" target="_blank"><img src="upload/tintuc/<?php echo $row_quangcao_1['urlHinh']; ?>" alt="" width="100%" height="500"></a>
          <?php 
            }
          ?>
      </div>
    </div>
    <div class="clear"></div>
    <hr style=" margin-top: 10px; margin-bottom: 10px">
    <div id="slide1">
        <?php
        require "blocks/slide_tin.php";
        ?>    
    </div>

    <div id="video">
        <?php
        require "blocks/video.php";                  
        require "blocks/slide_video.php";                    
        ?>
    </div>
</div><!--content_main-->
