<?php 
    $idLT = $_GET["idLT"];
    $Ten_KhongDau = $_GET["Ten_KhongDau"];
    settype($idLT, "int");
?>

<?php 
    $bc = Path_TinTrongLoai($idLT);
    $row_bc = mysql_fetch_array($bc);
?>
<p class="path">Trang chủ &raquo; <?php echo $row_bc['TenTL']; ?> &raquo; <?php echo $row_bc['Ten']; ?></p>

<?php 
    $limit = 10;
    if (isset($_GET["trang"])) {
        $trang = $_GET["trang"];
        settype($trang,"int");
    }
    else
    {
        $trang = 1;
    }
    $start = ($trang - 1) * $limit;
    $tin = TinTheoLoaiTin_PhanTrang($idLT,$start,$limit);
    while ($row_tin = mysql_fetch_array($tin)) {
?>
<div class="box-cat">
 
    <a href="Tin/<?php echo $row_tin['Ten_KhongDau']; ?>/<?php echo $row_tin['TieuDe_KhongDau']; ?>-<?php echo $row_tin['idTin']; ?>.html" title="<?php echo $row_tin['TieuDe']; ?>"><img class="images_news" src="upload/tintuc/<?php echo $row_tin['urlHinh']; ?>" align="left" width="200" height="120" /></a>
    <h3 class="title" ><a href="Tin/<?php echo $row_tin['Ten_KhongDau']; ?>/<?php echo $row_tin['TieuDe_KhongDau']; ?>-<?php echo $row_tin['idTin']; ?>.html" title="<?php echo $row_tin['TieuDe']; ?>"><?php echo $row_tin['TieuDe']; ?></a></h3>
    <div class="des"><?php echo $row_tin['TomTat']; ?></div>

</div>
    <div class="clear"></div>
<!-- box cat-->
<?php 
    }
 ?>

<div id="pagination">
    <?php   
        $t = TinTheoLoaiTin($idLT);
        $tongsotin = mysql_num_rows($t);
        $tongsotrang = ceil($tongsotin/$limit);
        echo "<ul class='pagination pagination-sm'>";
        if ($tongsotrang >= 1) {
            $current_page = ($start/$limit) + 1;
        }
        for ($i=1; $i <= $tongsotrang ; $i++) { 
            if ($i != $current_page) {
                 echo "<li><a href='The-Loai/$Ten_KhongDau/$idLT-trang-$i.html'>$i</a></li>";
            }
            else
            {
                echo "<li class='active'><a>$i</a></li>";
            }
        }
        echo "</ul>";
    ?>
</div>