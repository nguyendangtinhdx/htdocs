<div id="thongtinvideo">
	<div class="icon_video"><div>VIDEO</div></div>
	<?php 
		$noidungvideo = Video();
		$row_noidungvideo = mysql_fetch_array($noidungvideo);
	?>
	<p class="tieudevideo"><a href="Video/<?php echo $row_noidungvideo['TieuDe_KhongDau']; ?>-<?php echo $row_noidungvideo['idVideo']; ?>.html" title="<?php echo $row_noidungvideo['TieuDe']; ?>">
		<?php echo $row_noidungvideo['TieuDe']; ?>
		</a>
	</p>
	<p class="noidungvideo">
		<?php echo $row_noidungvideo['TomTat']; ?>
</div>

<div id="filevideo">
	<iframe width="100%" height="315" src="<?php echo $row_noidungvideo['Url']; ?>" frameborder="0" allowfullscreen></iframe>
</div>
 <div class="fb-like" data-href="https://www.youtube.com/watch?v=GhJByQX-duU" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
	<div class="fb-send" data-href="https://www.youtube.com/watch?v=GhJByQX-duU"></div>
	
<div class="clear"></div>