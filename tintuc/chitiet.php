<?php
    session_start();
    include('controller/c_tintuc.php');
    $tintuc = new C_tintuc();
    $tin = $tintuc->chitiettin();
    $chitiettin = $tin['chitiettin'];
    $comment = $tin['comment'];
    $relatednews = $tin['relatednews'];
    $tinnoibat = $tin['tinnoibat'];

    if (isset($_POST['binhluan'])) {
        if (isset($_SESSION['id_user'])) {
            $id_user = $_SESSION['id_user'] ;
            $id_tin = $_POST['id_tin'];
            $noidung = $_POST['noidung'];
            $comment = $tintuc->themBinhLuan($id_user,$id_tin,$noidung);
        }
        else
        {
            $_SESSION['chuadangnhap'] = "Vui lòng đăng nhập để thêm bình luận";
        }
    }
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

            <!-- Blog Post Content Column -->
            <div class="col-lg-9">

                <!-- Blog Post -->

                <!-- Title -->
                <h1><?=$chitiettin->TieuDe ?></h1>

                <!-- Author -->
                <p class="lead">
                    Đăng bởi <a href="#">Admin</a>
                </p>

                <!-- Preview Image -->
                <img class="img-responsive" src="public/image/tintuc/<?=$chitiettin->Hinh ?>" alt="" style="width: 100%; height: 450px">

                <!-- Date/Time -->
                <p><span class="glyphicon glyphicon-time"></span> <?=$chitiettin->created_at ?></p>
                <hr>

                <!-- Post Content -->
                <p class="lead"><?=$chitiettin->TomTat ?></p>
                <p><?=$chitiettin->NoiDung ?></p>

                <hr>

                <!-- Blog Comments -->
                <?php
                    if (isset($_SESSION['chuadangnhap'])) {
                ?>
                    <div class="alert alert-danger"><?=$_SESSION['chuadangnhap'] ?></div>
                <?php
                    }
                ?>
                <!-- Comments Form -->
                <div class="well">
                    <h4>Viết bình luận ...<span class="glyphicon glyphicon-pencil"></span></h4>
                    <form role="form" method="post" action="#">
                        <input type="hidden" name="id_tin" value="<?=$chitiettin->id ?>">
                        <div class="form-group">
                            <textarea class="form-control" rows="3" name="noidung"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" name="binhluan">Gửi</button>
                    </form>
                </div>

                <hr>

                <!-- Posted Comments -->

                <!-- Comment -->
                <?php
                    foreach ($comment as $cmt) {
                ?>

                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">
                            <small><?=$cmt->created_at ?></small>
                        </h4>
                        <?=$cmt->NoiDung ?>
                    </div>
                </div>
                <?php
                    }
                ?>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-3">

                <div class="panel panel-default">
                    <div class="panel-heading"><b>Tin liên quan</b></div>
                    <div class="panel-body">
                        <?php
                            foreach ($relatednews as $related) {
                        ?>
                        <!-- item -->
                        <div class="row" style="margin-top: 10px;">
                            <div class="col-md-5">
                                <a href="<?=$related->TenKhongDau ?>/<?=$related->TieuDeKhongDau ?>-<?=$related->id ?>.html">
                                    <img class="img-responsive" src="public/image/tintuc/<?=$related->Hinh ?>" alt="" style="height: 70px" >
                                </a>
                            </div>
                            <div class="col-md-7">
                                <a href="<?=$related->TenKhongDau ?>/<?=$related->TieuDeKhongDau ?>-<?=$related->id ?>.html"><b><?=$related->TieuDe ?></b></a>
                            </div>
                            <div class="break"></div>
                        </div>
                        <!-- end item -->
                        <?php
                            }
                        ?>
                    
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading"><b>Tin nổi bật</b></div>
                    <div class="panel-body">
                        <?php
                            foreach ($tinnoibat as $noibat) {
                        ?>
                        <!-- item -->
                        <div class="row" style="margin-top: 10px;">
                            <div class="col-md-5">
                                <a href="<?=$noibat->TenKhongDau ?>/<?=$noibat->TieuDeKhongDau ?>-<?=$noibat->id ?>.html">
                                    <img class="img-responsive" src="public/image/tintuc/<?=$noibat->Hinh ?>" alt="" style="height: 70px">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <a href="<?=$noibat->TenKhongDau ?>/<?=$noibat->TieuDeKhongDau ?>-<?=$noibat->id ?>.html"><b><?=$noibat->TieuDe ?></b></a>
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
