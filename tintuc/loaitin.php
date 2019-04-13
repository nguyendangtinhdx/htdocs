<?php
    session_start();
    include('controller/c_tintuc.php');
    $c_tintuc = new C_tintuc();
    $tintucs = $c_tintuc->loaitin();
    $tintuc = $tintucs['danhmuctin'];
    $menu = $tintucs['menu'];
    $title = $tintucs['title'];
    $thanh_phantrang = $tintucs['thanh_phantrang'];
    $alias = $tintucs['alias'];
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
    <base href="http://localhost:8080/tintuc/">
    <!-- Bootstrap Core CSS -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="public/css/shop-homepage.css" rel="stylesheet">
    <link href="public/css/my.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.public/js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <?php
        include('header.php');
    ?>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
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

            <div class="col-md-9 " id="datasearch">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color:#337AB7; color:white;">
                        <h4><b><?=$title->Ten ?></b></h4>
                    </div>
                    <?php
                        foreach ($tintuc as $tin) {
                    ?>
                    <div class="row-item row">
                        <div class="col-md-3">

                            <a href="<?=$alias->TenKhongDau ?>/<?=$tin->TieuDeKhongDau ?>-<?=$tin->id ?>.html" style="height: 400px">
                                <br>
                                <img width="200px" height="200px" class="img-responsive" src="public/image/tintuc/<?=$tin->Hinh ?>" alt="" style="height: 100px; width: 200px">
                            </a>
                        </div>

                        <div class="col-md-9">
                            <h3><?=$tin->TieuDe ?></h3>
                            <p><?=$tin->TomTat ?></p>
                            <a class="btn btn-primary" href="<?=$alias->TenKhongDau ?>/<?=$tin->TieuDeKhongDau ?>-<?=$tin->id ?>.html">Xem chi tiết <span class="glyphicon glyphicon-chevron-right"></span></a>
                        </div>
                        <div class="break"></div>
                    </div>
                    <?php
                        }
                    ?>

                    <!-- Pagination -->
                    <div style="text-align: center;"><?=$thanh_phantrang?></div>
                

                </div>
            </div> 

        </div>

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
    <script>
        $(document).ready(function(){
            $("#btnSearch").click(function(){
                var keyword = $('#txtSearch').val();
                $.post("timkiem.php",{tukhoa:keyword},function(data){
                    $('#datasearch').html(data);
                })
            })
        })
    </script>
</body>

</html>
