
<?php 
  if (isset($_GET["idVideo"])) {
    $idVideo = $_GET["idVideo"];
    settype($idVideo, "int");
  }
  else
  {
    $idVideo = 1;
  }
  $video = ChiTietVideo($idVideo);
  $row_video = mysql_fetch_array($video);
?>
<?php 
    $bc = Path_Video($idVideo);
    $row_bc = mysql_fetch_array($bc);
?>
<p class="path">Trang chủ &raquo; Video &raquo; <!-- <?php echo $row_bc['TieuDe']; ?> --></p>
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

<div id="chitietvideo">
	<h1 class="title"><?php echo $row_video["TieuDe"]; ?></h1>
	<div class="des">
	  <?php echo $row_video["TomTat"]; ?>
	</div>
  <br>
<iframe width="560" height="315" src="<?php echo $row_video["Url"]; ?>" frameborder="0" allowfullscreen></iframe></div>
