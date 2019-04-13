<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
<!-- 	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
	<script type="text/javascript" src="js/stepcarousel.js">
</script>
<script type="text/javascript">

	stepcarousel.setup({
	galleryid: 'mygallery', //id of carousel DIV
	beltclass: 'belt', //class of inner "belt" DIV containing all the panel DIVs
	panelclass: 'panel', //class of panel DIVs each holding content
	autostep: {enable:true, moveby:1, pause:2000},
	panelbehavior: {speed:500, wraparound:true, wrapbehavior:'slide', persist:true},
	defaultbuttons: {enable: true, moveby: 1, leftnav: ['icon/arrowl.png', 5, 150], rightnav: ['icon/arrowr.png', -25, 150]},
	statusvars: ['statusA', 'statusB', 'statusC'], //register 3 variables that contain current panel (start), current panel (last), and total panels
	contenttype: ['inline'] //content setting ['inline'] or ['ajax', 'path_to_external_file']
})

</script>
</head>
<body>
	<div id="mygallery" class="stepcarousel">
		<div class="belt">

			<div class="panel">
				<a href="#"><img src="img/1.png" />
				<p class="tieudeslide">Kỳ 236: Mưu sinh nơi đất khách và cuộc sống lắm </p></a>
               	<p class="noidungslide">Cập nhật: Ngày 19/08/2016, Quỹ từ thiện Tình Thương đã trao tặng lần 2 số tiền 1 </p>
			</div>

			<div class="panel">
				<a href="#"><img src="img/2.png" />
				<p class="tieudeslide">Kỳ 236: Mưu sinh nơi đất khách và cuộc sống lắm </p></a>
               	<p class="noidungslide">Cập nhật: Ngày 19/08/2016, Quỹ từ thiện Tình Thương đã trao tặng lần 2 số tiền 1 </p>
			</div>

			<div class="panel">
				<a href="#"><img src="img/3.png" />
				<p class="tieudeslide">Kỳ 236: Mưu sinh nơi đất khách và cuộc sống lắm </p></a>
               	<p class="noidungslide">Cập nhật: Ngày 19/08/2016, Quỹ từ thiện Tình Thương đã trao tặng lần 2 số tiền 1 </p>
			</div>
            <div class="panel">
				<a href="#"><img src="img/1.png" />
				<p class="tieudeslide">Kỳ 236: Mưu sinh nơi đất khách và cuộc sống lắm </p></a>
               	<p class="noidungslide">Cập nhật: Ngày 19/08/2016, Quỹ từ thiện Tình Thương đã trao tặng lần 2 số tiền 1 </p>
			</div>

			<div class="panel">
				<a href="#"><img src="img/2.png" />
				<p class="tieudeslide">Kỳ 236: Mưu sinh nơi đất khách và cuộc sống lắm </p></a>
               	<p class="noidungslide">Cập nhật: Ngày 19/08/2016, Quỹ từ thiện Tình Thương đã trao tặng lần 2 số tiền 1 </p>
			</div>

			<div class="panel">
				<a href="#"><img src="img/3.png" />
				<p class="tieudeslide">Kỳ 236: Mưu sinh nơi đất khách và cuộc sống lắm </p></a>
               	<p class="noidungslide">Cập nhật: Ngày 19/08/2016, Quỹ từ thiện Tình Thương đã trao tặng lần 2 số tiền 1 </p>
			</div>
             <div class="panel">
				<a href="#"><img src="img/1.png" />
				<p class="tieudeslide">Kỳ 236: Mưu sinh nơi đất khách và cuộc sống lắm </p></a>
               	<p class="noidungslide">Cập nhật: Ngày 19/08/2016, Quỹ từ thiện Tình Thương đã trao tặng lần 2 số tiền 1 </p>
			</div>

			<div class="panel">
				<a href="#"><img src="img/2.png" />
				<p class="tieudeslide">Kỳ 236: Mưu sinh nơi đất khách và cuộc sống lắm </p></a>
               	<p class="noidungslide">Cập nhật: Ngày 19/08/2016, Quỹ từ thiện Tình Thương đã trao tặng lần 2 số tiền 1 </p>
			</div>

			<div class="panel">
				<a href="#"><img src="img/3.png" />
				<p class="tieudeslide">Kỳ 236: Mưu sinh nơi đất khách và cuộc sống lắm </p></a>
               	<p class="noidungslide">Cập nhật: Ngày 19/08/2016, Quỹ từ thiện Tình Thương đã trao tặng lần 2 số tiền 1 </p>
			</div>
            
			

		</div>
		<div id="pag">
			<p id="mygallery-paginate">
			<span class="paginatecircle" data-moveby="1"></span>
		</div>
	</p>
	</div>
	<!-- <p>
		<b>Current Panel:</b> <span id="statusA"></span> <b style="margin-left: 30px">Total Panels:</b> <span id="statusC"></span>
	</p> -->

</body>
</html>
<br>