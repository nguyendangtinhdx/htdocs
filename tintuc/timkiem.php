<?php
	include('controller/c_tintuc.php');

	$c_tintuc = new C_tintuc();
	// $tintucs = $c_tintuc->loaitin();
 // 	$thanh_phantrang = $tintucs['thanh_phantrang'];
	if (isset($_POST['tukhoa'])) {
		$key = $_POST['tukhoa'];
		$tintuc = $c_tintuc->timkiem($key);
		?>
			
 		<b>Tìm thấy <span style="color: red"><?=count($tintuc) ?></span> kết quả cho <span style="color: #7AB900"><?=$key ?></span></b>
	 	<div class="panel panel-default">
			<?php
			foreach ($tintuc as $tin) {
				?>
				<div class="row-item row">
					<div class="col-md-3">

						<a href="chitiet.php?loai_tin=<?=$tin->TenKhongDau ?>&id_tin=<?=$tin->id ?>" style="height: 400px">
							<br>
							<img width="200px" height="200px" class="img-responsive" src="public/image/tintuc/<?=$tin->Hinh ?>" alt="" style="height: 100px; width: 200px">
						</a>
					</div>

					<div class="col-md-9">
						<h3><?=$tin->TieuDe ?></h3>
						<p><?=$tin->TomTat ?></p>
						<a class="btn btn-primary" href="chitiet.php?loai_tin=<?=$tin->TenKhongDau ?>&id_tin=<?=$tin->id ?>">Xem chi tiết <span class="glyphicon glyphicon-chevron-right"></span></a>
					</div>
					<div class="break"></div>
				</div>
				<?php
			}
			?>

			<!-- Pagination -->
			<!-- <div style="text-align: center;"><?=$thanh_phantrang?></div> -->


		</div>
 
		<?php
	}	
?>
