<?php
    session_start();
    include('controller/c_tintuc.php');
    $c_tintuc = new C_tintuc();
    $noi_dung = $c_tintuc->index();

    $slide = $noi_dung['slide'];
    $menu = $noi_dung['menu'];
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon"  href="public/image/icon/logo.png">
    <title>Tin tức</title>
    
    <!-- Bootstrap Core CSS -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="public/css/shop-homepage.css" rel="stylesheet">
    <link href="public/css/my.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

   <?php
        include('header.php');
   ?>

    <!-- Page Content -->
    <div class="container">

    	<!-- slider -->
    	<div class="row carousel-holder">
            <div class="col-md-12">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" style="height: 400px">
                        <?php
                            for ($i=0; $i < count($slide) ; $i++) { 
                                if($i == 0){
                        ?>
                                <div class="item active">
                                    <img class="slide-image" src="public/image/slide/<?=$slide[$i]->Hinh ?>" alt="" >
                                </div>
                        <?php
                                }
                                else{
                        ?>
                                <div class="item">
                                    <img class="slide-image" src="public/image/slide/<?=$slide[$i]->Hinh ?>" alt="">
                                </div>
                        <?php

                                }
                            }
                        ?>


                    </div>
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
        </div>
        <!-- end slide -->

        <div class="space20"></div>


        <div class="row main-left">
            <div class="col-md-3 ">
                <ul class="list-group" id="menu">
                    <li href="#" class="list-group-item menu1 active">
                    	Menu
                    </li>
                    <?php
                        foreach ($menu as $mn) {
                    ?>
                    <li href="#" class="list-group-item menu1">
                    	<?=$mn->Ten ?>
                    </li>
                        <ul>
                        <?php
                            $loaitin = explode(',', $mn->LoaiTin);
                            foreach ($loaitin as $loai) {
                            list($id,$ten,$tenkhongdau) = explode(':', $loai);
                        ?>
                            <li class="list-group-item">
                                <a href="<?=$tenkhongdau ?>-<?=$id ?>"><?=$ten ?></a>
                            </li>

                        <?php
                            }
                        ?>
                       
                        </ul>
                    <?php
                        }
                    ?>
                
                </ul>
            </div>

            <div class="col-md-9">
	            <div class="panel panel-default">
	            	<div class="panel-heading" style="background-color:#337AB7; color:white;" >
	            		<h2 style="margin-top:0px; margin-bottom:0px;"> Tin Tức</h2>
	            	</div>

	            	<div class="panel-body">
                        <?php
                            foreach ($menu as $mn) {
                        ?>
	            		<!-- item -->
					    <div class="row-item row">
		                	<h3>
		                		<a href="#"><?=$mn->Ten ?></a> |
                                <?php
                                    $loaitin = explode(',', $mn->LoaiTin);
                                    foreach ($loaitin as $loai) {
                                        list($id,$ten,$tenkhongdau) = explode(':', $loai);
                                ?>
		                		<small><a href="<?=$tenkhongdau ?>-<?=$id ?>"><i><?=$ten ?></i></a>/</small>
                                <?php
                                    }
                                ?>
		                	</h3>
		                	<div class="col-md-12 border-right">
		                		<div class="col-md-3">
			                        <a href="<?=$mn->TenKhongDau ?>/<?=$mn->TieuDeKhongDauTin ?>-<?=$mn->idTin ?>.html">
			                            <img class="img-responsive" src="public/image/tintuc/<?=$mn->HinhTin ?>" alt="" style="height: 150px; width: 200px" >
			                        </a>
			                    </div>

			                    <div class="col-md-9">
			                        <h3><?=$mn->TieuDeTin ?></h3>
			                        <p><?=$mn->TomTatTin ?></p>
			                        <a class="btn btn-primary" href="<?=$mn->TenKhongDau ?>/<?=$mn->TieuDeKhongDauTin ?>-<?=$mn->idTin ?>.html">Xem chi tiết <span class="glyphicon glyphicon-chevron-right"></span></a>
								</div>

		                	</div>

							<div class="break"></div>
		                </div>
		                <!-- end item -->
		              <?php
                            }
                      ?>

					</div>
	            </div>
        	</div>
        </div>
        <!-- /.row -->
    </div>
    <!-- end Page Content -->

    <!-- Footer -->
    <hr>
    <footer>
        <?php
            include('footer.php');
        ?>
    </footer>
    <!-- end Footer -->
    <!-- jQuery -->
    <script src="public/js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/my.js"></script>

</body>

</html>
