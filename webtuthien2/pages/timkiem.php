<?php 
	$tukhoa = $_GET["Key"];
    $tin = TimKiem($tukhoa);
    $dem = mysql_num_rows($tin);
?>
	<div class="timkiem">Có <span class="dem"><?php echo $dem; ?></span> kết quả tìm kiếm: <span class="tukhoa"><?php echo $tukhoa; ?></span></div>
<?php 
    while ($row_tin = mysql_fetch_array($tin)) {
?>
<div class="box-cat">
    <a href="index.php?p=chitiettin&idTin=<?php echo $row_tin['idTin']; ?>" title="<?php echo $row_tin['TieuDe']; ?>"><img class="images_news" src="upload/tintuc/<?php echo $row_tin['urlHinh']; ?>" align="left" width="200" height="120" /></a>
    <h3 class="title" ><a href="index.php?p=chitiettin&idTin=<?php echo $row_tin['idTin']; ?>" title="<?php echo $row_tin['TieuDe']; ?>"><?php echo $row_tin['TieuDe']; ?></a></h3>
    <div class="des"><?php echo $row_tin['TomTat']; ?></div>

</div>
    <div class="clear"></div>
<!-- box cat-->
<?php 
    }
 ?>
