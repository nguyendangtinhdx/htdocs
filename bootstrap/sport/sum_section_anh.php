<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>World Football</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link rel="icon" href="anh/ball.jpg">
	<link rel="stylesheet" href="sum.css">
	<link rel="stylesheet" href="connect.php">
	<script src="sum.js"></script>
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
	
</head>
<body>
	<div class="row">
		<div class="col-sm-8">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>
				</ol>
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="anh/sport1.jpg">
						<div class="carousel-caption">
							<mark>Tôi yêu bóng đá</mark>
						</div>      
					</div>
					<div class="item">
						<img src="anh/sport3.jpg">
						<div class="carousel-caption">
							<mark>Tôi thích bóng đá</mark>
						</div>      
					</div>
					<div class="item">
						<img src="anh/sport4.jpg">
						<div class="carousel-caption">
							<mark>Tôi mê bóng đá</mark>
						</div>      
					</div>
					<div class="item">
						<img src="anh/sport5.jpg">
						<div class="carousel-caption">
							<mark>Tôi khoáy bóng đá</mark>
						</div>      
					</div>
				</div>
				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
		<div class="col-sm-4">
			<div id="tintuc">
				<!-- <div class="well"> -->
				<article id="tintuc1">Tin tức trong ngày</article>
				<br>
				<a href="#" data-toggle="collapse" data-target="#demo1"><img src="anh/tintuc1.jpg" height="50" width="150"> Team building</a>
				<div id="demo1" class="collapse">Tinh thần đoàn kết, sự phối hợp nhịp nhàng rất cần thiết trong các hoạt động team building</div><br><br>
				<!-- </div> -->
				<!-- <div class="well"> -->
				<a href="#" data-toggle="collapse" data-target="#demo2"><img src="anh/tintuc2.jpg" height="50" width="150"> Champion Dash</a>
				<div id="demo2" class="collapse">Red Bull Champion Dash sẽ đem lại cho bạn trải nghiệm tinh thần đồng đội chân thực nhất qua từng chặng đua.</div><br><br>
				<!-- </div> -->
				<!-- <div class="well"> -->
				<a href="#" data-toggle="collapse" data-target="#demo3"><img src="anh/tintuc3.jpg" height="50" width="150"> Đạp xe diễu hành</a>
				<div id="demo3" class="collapse">Hoạt động đạp xe diễu hành có sự tham gia của các thành viên CLB GIANT Việt Nam</div><br><br>
				<!-- </div> -->
				<!-- <div class="well"> -->
				<a href="#" data-toggle="collapse" data-target="#demo4"><img src="anh/tintuc4.jpg" height="50" width="150"> Bóng rổ</a>
				<div id="demo4" class="collapse">Việt Arnold (số 33) có một mùa giải thành công nữa cùng Saigon Heat tại ABL 2015-2016</div>
			</div>
			<!-- </div> -->
			<marquee id="mq">Chào mừng bạn đến với Wedsite Sports được thiết kế bởi Nguyễn Đăng Tỉnh</marquee>
		</div>
	</div>

	<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="250">

		<div class="container-fluid">
			<div class="navbar-header">
				<button class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="sum.php" class="navbar-brand" title="Home"><span id="icon" class="fa fa-home"></span></a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<ul class="menu">
						<li>
							<a href="sum_section_bongdavn.php">Bóng đá VN
								<span class="caret"></span>
							</a>
							<ul class="submenu">
								<li><a href="sum_section_vleague.php" >V-League</a></li>
								<li><a href="sum_section_thieunien.php" >Thiếu niên</a></li>
								<li><a href="sum_section_nhidong.php" >Nhi đồng</a></li>
								<li><a href="sum_section_nu.php" >Nữ</a></li>
							</ul>
						</li>
						<li>
							<a href="sum_section_bongdatg.php">Bóng đá TG
								<span class="caret"></span>
							</a>
							<ul class="submenu">
								<li><a href="sum_section_taybannha.php">Tây Ban Nha</a></li>
								<li><a href="sum_section_anh.php">Anh</a></li>
								<li><a href="sum_section_duc.php">Đức</a></li>
								<li><a href="sum_section_phap.php">Pháp</a></li>
								<li><a href="sum_section_halan.php">Hà Lan</a></li>
								<li><a href="sum_section_y.php">Ý</a></li>
							</ul>
						</li>
						<li>
							<a href="sum_section_quanvot.php">Quần vợt
								<span class="caret"></span>
							</a>
							<ul class="submenu">
								<a href="sum_section_lichthidau.php">Lịch thi đấu</a>
								<a href="sum_section_ketqua.php">Kết quả</a>
								<a href="sum_section_bangxephang.php">Bảng xếp hạng</a>
							</ul>
						</li>
						<li>
							<a href="sum_section_duaxe.php">Đua xe
								<span class="caret"></span>
							</a>
							<ul class="submenu">
								<a href="sum_section_oto.php">Ô tô</a>
								<a href="sum_section_maohiem.php">Mạo hiểm</a>
								<a href="sum_section_f1.php">F1</a>
							</ul>
						</li>
						<li>
							<a href="sum_section_vothuat.php">Võ thuật
								<span class="caret"></span>
							</a>
							<ul class="submenu">
								<a href="sum_section_cotruyen.php">Cổ truyền</a>
								<a href="sum_section_thieulam.php">Thiếu lâm</a>
								<a href="sum_section_taekwondo.php">Taekwondo</a>
								<a href="sum_section_vovinam.php">Vovinam</a>
								<a href="sum_section_karate.php">Karate</a>
								<a href="sum_section_boxing.php">Boxing</a>
							</ul>
						</li>
					</ul>
				</ul>
				<!-- login -->
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#login" class="dropdown-toggle" data-toggle="dropdown"><span id="icon" class="glyphicon glyphicon-log-in"></span>&ensp; Login</a>
						<div class="dropdown-menu">
							<form id="formLogin" class="form container-fluid">
								<div class="form-group">
									<label for="usr">Name:</label>
									<input type="text" class="form-control" id="usr">
								</div>
								<div class="form-group">
									<label for="pwd">Password:</label>
									<input type="password" class="form-control" id="pwd">
								</div>
								<button id="btnLogin" class="btn btn-block" onclick="dangnhap()">Login</button>
							</form>
							<br>
							<div class="container-fluid">
								<a href="forgot pw" class="small">Forget password ?</a>
							</div>
						</div>
					</li>
					<li><a href="#signup" data-toggle="modal" data-target="#my"><span id="icon" class="glyphicon glyphicon-user"></span>&ensp; Sign Up</a></li>
				</ul>
			</div>
		</div>

		<div id="my" class="modal fade" role="dialog">
			<div class="modal-dialog ">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Đăng ký thành viên</h4>
					</div>
					<div class="modal-body">
						<!-- form -->
						<form id="formSignup" class="form-horizontal" role="form">
							<div class="form-group">
								<label for="usr" class="control-label col-sm-3">Name account: </label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="usr" placeholder="Tên tài khoản" required>
								</div>
							</div>
							<div class="form-group">
								<label for="email" class="control-label col-sm-3">Email: </label>
								<div class="col-sm-8">
									<input type="email" class="form-control" id="email" placeholder="Email" required>
								</div>
							</div>
							<div class="form-group">
								<label for="pwd" class="control-label col-sm-3">Password: </label>
								<div class="col-sm-8">
									<input type="password" class="form-control" id="password" placeholder="Mật khẩu" required>
								</div>
							</div>
							<div class="form-group">
								<label for="pwd" class="control-label col-sm-3">Confirm password: </label>
								<div class="col-sm-8">
									<input type="password" class="form-control" id="password" placeholder="Xác nhận mật khẩu" required>
								</div>
							</div>
							<div class="form-group">
								<label for="address" class="control-label col-sm-3">Address: </label>
								<div class="col-sm-8">
									<input type="text" class="form-control col-sm-8" id="address" placeholder="Địa chỉ" required>
								</div>
							</div>
							<div class="form-group">
								<label for="sdt" class="control-label col-sm-3">Phone number:</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="sdt" placeholder="Số điện thoại" required>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-8">
									<button class="btn btn-success" onclick="dangky()">Đăng ký</button>
								</div>
							</div>
						</form>

					</div>
					<div class="modal-footer">
						<button class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
	</nav>
	<!-- <br><br><br><br><br><br> -->
	<a href="http://haledco.com/" target="_blank"><img src="anh/quangcao1.jpg" height="150" width="1014"></a>
	<hr>
	<div class="row">
		<div class="col-sm-4">
			<pre id="date"></pre>
		</div>
		<div class="col-sm-4">
			<!-- <div class="well"> -->
				<button  class="btn btn-success btn-block" data-toggle="modal" data-target="#datve" id="button">Đặt vé xem bóng đá</button>
			<!-- </div> -->
			<div class="modal fade" id="datve" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button class="close" data-dismiss="modal">&times;</button>
							<h4><span class="glyphicon glyphicon-lock"></span> Giá vé</h4>
						</div>
						<div class="modal-body">
							<form role="form" id="datve">
								<div class="form-group">
									<label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span>Giá vé: mỗi vé 50k</label>
									<input type="number" class="form-control" id="psw" placeholder="Số lượng">
								</div>
								<div class="form-group">
									<label for="select"><span class="glyphicon glyphicon-eye-open"></span> Giờ đấu</label>
									<select class="form-control" id="sel1">
										<option>7h</option>
										<option>9h30</option>
										<option>11h</option>
										<option>1h30</option>
										<option>3h</option>
										<option>4h30</option>
										<option>6h</option>
										<option>7h30</option>
										<option>9h</option>
										<option>11h30</option>
									</select>
								</div>
								<div class="form-group">
									<label for="email"><span class="glyphicon glyphicon-user"></span>Gửi tới</label>
									<input type="email" class="form-control" id="email" placeholder="Email">
								</div>
								<button onclick="giave()" id="ticket" class="btn btn-block">Trả tiền
									<span class="glyphicon glyphicon-ok"></span>
								</button>
							</form>
						</div>
						<div class="modal-footer">
							<button id="ticket" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
								<span class="glyphicon glyphicon-remove"></span> Cancel
							</button>
							<p>Need <a href="#">Help?</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-4">
				<h5><b>Tìm kiếm Google</b></h5>
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Search Blog..">
					<span class="input-group-btn">
						<button class="btn btn-default">
							<a href="http://www.google.com" target="_blank"><span class="glyphicon glyphicon-search "></span></a>
						</button>
					</span>
				</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-sm-2 thanhtruot"  id="list">
				<ul type="none">
					<li><a href="xh">&raquo; Xã hội</a></li>
					<li><a href="vd">&raquo; Video</a></li>
					<li><a href="tc">&raquo; Tài chính</a></li>
					<li><a href="at">&raquo; Ẩm thực</a></li>
					<li><a href="ds">&raquo; Đời sống</a></li>
					<li><a href="tm">&raquo; Tin mới</a></li>
					<li><a href="tt">&raquo; Thời trang</a></li>
					<li><a href="p">&raquo; Phim</a></li>
					<li><a href="gd">&raquo; Giáo dục</a></li>
					<li><a href="tgt">&raquo; Thế giới trẻ</a></li>
					<li><a href="sb">&raquo; Showbiz</a></li>
					<li><a href="gt">&raquo; Giải trí</a></li>
					<li><a href="cn">&raquo; Ca nhạc</a></li>
					<li><a href="gt">&raquo; Giải trí</a></li>
					<li><a href="dl">&raquo; Du lịch</a></li>
					<li><a href="g">&raquo; Game</a></li>
					<li><a href="cntt">&raquo; Công nghệ thông tin</a></li>
					<li><a href="td">&raquo; Tuyển dụng</a></li>
					<li><a href="sk">&raquo; Sức khỏe</a></li>
					<li><a href="ld">&raquo; Làm đẹp</a></li>
					<li><a href="td">&raquo; Tiêu dùng</a></li>
					<li><a href="ma">&raquo; Món ăn</a></li>
					<li><a href="ot">&raquo; Ô tô</a></li>
					<li><a href="tt">&raquo; Thị trường</a></li>
					<li><a href="tc">&raquo; Truyện cười</a></li>
					<li><a href="24h">&raquo;24H</a></li><li><a href="ma">&raquo; Món ăn</a></li>
					<li><a href="ot">&raquo; Ô tô</a></li>
					<li><a href="tt">&raquo; Thị trường</a></li>
					<li><a href="tc">&raquo; Truyện cười</a></li>
					<li><a href="24h">&raquo;24H</a></li>
				</ul>
				<hr>

				<p id="tieude">Thể thao mạo hiểm</p>
				<p>
					<a href="http://kenh14.vn/videotag-1394/the-thao-mao-hiem.chn" target="_blank"><img src="anh/ttmh1.jpg" height="100" width="170"><article>Bay giữa không gian</article></a>
				</p>
				<p>
					<a href="http://www.24h.com.vn/the-thao-mao-hiem-c101e3552.html" target="_blank"><img src="anh/ttmh2.jpg" height="100" width="170"><article>Đi xe đạp 1 bánh</article></a>
				</p>
				<p>
					<a href="http://news.zing.vn/1-2-trieu-10-phut-choi-tro-mao-hiem-o-bien-nha-trang-post439172.html" target="_blank"><img src="anh/ttmh3.jpg" height="100" width="170"><article>Bay dưới nước</article></a>
				</p>
				<hr>
				<p id="tieude">Những người nổi tiếng</p>
				<p>
					<a href="http://kenh14.vn/ronaldo.html" target="_blank"><img src="anh/rnd.jpg" height="100" width="170"><article>Ronaldo</article></a>
				</p>
				<p>
					<a href="https://www.google.com.vn/#tbm=vid&q=michael+jackson" target="_blank"><img src="anh/mc.jpg" height="100" width="170"><article>Michael Jackson</article></a>
				</p>
				<p>
					<a href="http://hdonline.vn/phim-ly-tieu-long.html" target="_blank"><img src="anh/ltl.jpg" height="100" width="170"><article>Lý Tiểu Long</article></a>
				</p>
				<div class="dropdown">
					<button class="btn btn-info dropdown-toggle" id="mn" data-toggle="dropdown">The Language used <span class="caret"></span></button>
					<ul class="dropdown-menu" role="menu" aria-labelledby="mn">
						<li role="presentation"><a href="sum.html" role="menuitem" tabindex="-1">HTML</a></li>
						<li role="presentation"><a href="sum.css" role="menuitem" tabindex="-1" target="_blank">CSS</a></li>
						<li role="presentation"><a href="sum.js" role="menuitem" tabindex="-1" target="_blank">JavaScript</a></li>
						<li role="presentation" class="divider"></li>
						<li role="presentation"><a href="sum.js" role="menuitem" tabindex="-1" target="_blank">Jquery</a></li>
						<li role="presentation" class="divider"></li>
						<li role="presentation"><a href="sum.php" role="menuitem" tabindex="-1" target="_blank">PHP</a></li>
						<li role="presentation"><a href="http://www.mysql.com" role="menuitem" tabindex="-1" target="_blank">MySQL</a></li>
					</ul>
				</div>
				<br>
				<div class="row">
					<div class="col-sm-12">
						<p id="tieude">Sô lượng truy cập</p>
						<i id="icon_truycap" class="fa fa-user"></i> Đang online 
						<span id="count" class="badge">55</span><br>
						<i id="icon_truycap" class="fa fa-user-times"></i> Đã offline 
						<span id="count" class="badge">10</span><br>
						<i id="icon_truycap" class="fa fa-user-secret"></i> Hôm nay 
						<span id="count" class="badge">320</span><br>
						<i id="icon_truycap" class="fa fa-user-secret"></i> Hôm qua 
						<span id="count" class="badge">576</span><br>
						<i id="icon_truycap" class="fa fa-user-secret"></i> Tuần này 
						<span id="count" class="badge">2534</span><br>
						<i id="icon_truycap" class="fa fa-user-secret"></i> Tháng này 
						<span id="count" class="badge">4257</span><br>
						<i id="icon_truycap" class="fa fa-users"></i> Tất cả 
						<span id="count" class="badge">34271</span>
					</div>
				</div>

			</div>
				
			<!-- section -->
			<div class="col-sm-6">
				<img src="anh/anh.jpg" width="550">
				<h1 id="section">Bóng đá Anh</p>

			</div>
				
			<div class="col-sm-3 thanhtruot">
				<div class="form-group">
					<p for="sel"><p id="scroll">Lịch trực tiếp</p></p>
					<select multiple id="sel" class="form-control">
						<option value="">&bull; Khánh Hòa vs Thái Sơn
						</option>
						<option value="">&bull; Quảng Nam vs Thanh Hóa</option>
						<option value="">&bull; Cần Thơ vs Đồng Tháp</option>
						<option value="">&bull; Đà Nẵng vs Quảng Ninh</option>
						<option value="">&bull; Hải Phòng vs HAGL</option>
						<option value="">&bull; Khánh Hòa vs Long An</option>
						<option value="">&bull; Sanna Khánh Hòa vs Long A</option>
						<option value="">&bull; Hà Nội T-T Bình Dương  </option>
						<option value="">&bull; Cao Bằng vs Tân Hiệp Hưng</option>
						<option value="">&bull; Lille OSC vs Monaco</option>
						<option value="">&bull; Sunderland vs Leicester City</option>
						<option value="">&bull; Schalke 04 vs Dortmund  </option>
						<option value="">&bull; Valencia CF vs Sevilla FC</option>
						<option value="">&bull; Tottenham vs Man United  </option>
						<option value="">&bull; Liverpool vs Stoke City  </option>
						<option value="">&bull; Villarreal CF vs Getafe</option>
						<option value="">&bull; Sporting Gijon vs Celta Vigo</option>
						<option value="">&bull; Empoli F.C vs Fiorentina  </option>
						<option value="">&bull; SSC Napoli vs Hellas Verona  </option>
						<option value="">&bull; Villarreal CF vs Getafe</option>
						<option value="">&bull; Athletic Bilbao vs Rayo Vallecano</option>
						<option value="">&bull; U.S. Palermo vs SS Lazio</option>
						<option value="">&bull; Marseille vs Bordeaux</option>
						<option value="">&bull; MU vs Chealsea</option>
						<option value="">&bull; RM vs BC</option>
						<option value="">&bull; Liverpool vs Stoke City</option>
						<option value="">&bull; Sunderland vs Leicester City</option>
						<option value="">&bull; Watford cs Everton</option>
					</select>
				</div>
				<hr>
				<div class="row">
					<div class="col-sm-12">
						<p id="scroll">Sự kiện nổi bậc</p>
							<a href="http://thethao247.vn/bong-da-viet-nam/j-league-2/truc-tiep-mito-hollyhock-vs-yokohama-9h00-ngay-10-4-d123072.html" target="_blank"><img src="anh/sukien.jpg" width="215">
							<b>Yokohama 2-2 Mito HollyHock: Tuấn Anh đá chính, Công Phượng dự bị</b></a>
							<p>(Thethao247.vn)- Mito đã cầm hoà chủ nhà Yokohama trong trận đấu có tới 4 bàn thắng. Ở trận đấu này, Tuấn Anh đá chính trong khi đó...</p>
							<hr>
							<a href="http://thethao247.vn/bong-da-anh/ngoai-hang-anh/martial-truoc-co-hoi-xo-do-ky-luc-cu-cua-rooney-tai-man-utd-d122998.html" target="_blank"><b>Martial trước cơ hội xô đổ kỷ lục cũ của Rooney tại Man Utd</b></a>
							<p>(Thethao247) – Tài năng trẻ người Pháp có cơ hội xô đổ kỷ lục cầu thủ dưới 20 tuổi ghi nhiều bàn thắng nhất trong một mùa...</p>
							<hr>
							<a href="http://thethao247.vn/bong-chuyen/cup-hung-vuong/lich-thi-dau-giai-bong-chuyen-cup-hung-vuong-2016-d122893.html" target="_blank"><b>Lịch thi đấu giải bóng chuyền cúp Hùng Vương 2016</b></a>
							<p>Thethao247 cập nhật lịch thi đấu, BXH và kết quả giải bóng chuyền cúp Hùng Vương 2016 diễn ra từ 14-17/4/2016 tại NTĐ tỉnh Phú Thọ...</p>
							<hr>
							<a href="http://thethao247.vn/bong-chuyen/cup-hung-vuong/truc-tiep-vdqg-pv-gas-2016-ngay-thi-dau-thu-7-d122973.html" target="_blank"><b>Kết quả VĐQG PV Gas 2016: Xác định đủ 8 cái tên vào chơi cúp Hùng Vương</b></a>
							<p>Kết quả VĐQG PV Gas 2016: Ngày thi đấu thứ 7, các trận đấu thuộc ngày thi đấu thứ 7 vòng 1- Giải vô địch bóng chuyền các đội...</p>
							<hr>
							<a href="http://thethao247.vn/bong-da-anh/ngoai-hang-anh/tin-bong-da-anh-8-4-jesse-lingard-muon-the-cho-mata-tai-mu-d122988.html" target="_blank"><b>Tin bóng đá Anh 8/4: Jesse Lingard muốn thế chỗ Mata tại M.U</b></a>
							<p>Tin bóng đá Anh 8/4: Jesse Lingard muốn thế chỗ Mata tại M.U; Arsenal mất Iwobi ở giai đoạn đầu mùa giải mới; Wilshere thi đấu cho U21...</p>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-sm-12">
						<a href="http://hcmute.edu.vn/" target="_blank"><marquee direction="up"> Đại học Sư phạm kỹ thuật HCM</marquee><img src="anh/quangcao2.jpg" width="215" height="350"></a>
					</div>
				</div>
			</div>	
		</div>

		<div class="row thanhtruot">
				<div class="col-sm-7">
					<p id="tieude">Góp ý / Báo lỗi bài viết</p>
					<div class="col-sm-1">
						<a href="http://www.facebook.com" target="_blank"><img src="anh/user.jpg"></a>
					</div>
					<div class="col-sm-9" form-group>
						<textarea class="form-control" id="comments" name="comments" placeholder="Ý kiến của bạn... " rows="3" cols="20"></textarea>
					</div>
							<div class="col-sm-1" form-group>
							<a href="https://www.facebook.com/plugins/feedback.php?api_key&channel_url=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D42%23cb%3Df2df495c4%26domain%3Dthethao247.vn%26origin%3Dhttp%253A%252F%252Fthethao247.vn%252Ff2c1a88c9%26relation%3Dparent.parent&colorscheme=light&href=http%3A%2F%2Fthethao247.vn%2Fbong-da-quoc-te%2Fchampions-league%2Fdiem-tin-toi-8-4-cong-bo-chi-tiet-hanh-trinh-cup-champions-league-tai-viet-nam-d122993.html&locale=vi_VN&numposts=3&sdk=joey&skin=light&width=480" target="_blank"><button class="btn btn-success">Send</button></a>
							</div>
				</div>
				<div id="tab" class="col-sm-4" >
					<ul class="nav nav-tabs">
						<li class="active"><a data-toggle="tab" href="#home">Liên hệ</a></li>
						<li><a data-toggle="tab" href="#menu1">Giới thiệu</a></li>
						<li><a data-toggle="tab" href="#menu2">Mobile</a></li>
					</ul>

					<div class="tab-content">
						<div id="home" class="tab-pane fade in active">
							<b><a href="http://www.facebook.com/nguyendangtinhdx.BI" target="_blank">Nguyễn Đăng Tỉnh</a></b> 
							<p> Bình An - Nam Phước - Duy Xuyên - Quảng Nam</p>
						</div>
						<div id="menu1" class="tab-pane fade">
							<p>Facebook || Zalo || Twitter || Google+ || Youtube</p>
						</div>
						<div id="menu2" class="tab-pane fade">
							<span class="fa fa-phone"></span> 01263659419
						</div>
					</div>
				</div>
		</div>
	</div><!--  container -->
	<hr>
	<div id="footer">
		<div class="row">
			<div class="col-sm-8">
				<div class="row">
					<div class="col-sm-4">
						<p id="ft">Chương trình</p>
						<ul id="ft1" type="none">
							<li><a href="quangcao">Quảng cáo</a></li>
							<li><a href="tuyendung">Tuyển dụng</a></li>
							<li><a href="huongdankiemtien">Hướng dẫn kiếm tiền</a></li>
						</ul>
					</div>
					<div class="col-sm-4">
						<p id="ft">Hỗ trợ</p>
						<ul id="ft1" type="none">
							<li><a href="trungtamtrogiup">Trung tâm trợ giúp</a></li>
							<li><a href="lienhe">Liên hệ</a></li>
							<li><a href="codohoa">Graphics Stock</a></li>
						</ul>
					</div>
					<div class="col-sm-4">
						<p id="ft">Điều khoản pháp lý</p>
						<ul id="ft1" type="none">
							<li><a href="dieukhoansudung">Điều khoản sử dụng</a></li>
							<li><a href="baomatthongtin">Bảo mật thông tin</a></li>
							<li><a href="noidungcam">Nội dung cấm</a></li>
							<li><a href="banquyen">Bản quyền</a></li>
						</ul>
					</div>
				</div>
			<div id="ft2" class="row">
				<div class="col-sm-12">
					<p>Chi tiết xin liên hệ: <a href="http://www.gmail.com" target="_blank">nguyendangtinhdx@gmail.com</a> <br>
					&copy; Nguyễn Đăng Tỉnh
					</p>
				</div>
			</div>
			</div>
			<div class="col-sm-3">
				<div class="tooltip1">
					<a href="http://www.24h.com.vn/lich-thi-dau-bong-da/lich-thi-dau-bong-da-hom-nay-c287a364371.html"><img src="anh/logo.jpg" height="220" width="316"></a>
					<div class="tooltip2">
						<p id="title_table">Các giải đấu thế giới</p>
						<ul>
							<li><a href="http://www.24h.com.vn/cup-c1-champions-league-c153.html" target="_blank">Champions League</a></li>
							<li><a href="http://www.24h.com.vn/euro-2016-c738.html" target="_blank">Europa League</a></li>
						</ul>
						<p id="title_table">Các giải đấu quốc gia</p>
						<ul>
							<li><a href="http://www.24h.com.vn/bong-da-tay-ban-nha-c151.html" target="_blank">La Liga</a></li>
							<li><a href="http://www.24h.com.vn/bong-da-ngoai-hang-anh-c149.html" target="_blank">Ngoại hạng Anh</a></li>
							<li><a href="http://www.24h.com.vn/bong-da-duc-c152.html" target="_blank">Budesliga</a></li>
							<li><a href="http://www.24h.com.vn/bong-da-phap-c344.html" target="_blank">Giải vô địch Pháp</a></li>
							<li><a href="http://www.24h.com.vn/bong-da-y-c150.html" target="_blank">Serie A</a></li>
							<li><a href="http://www.24h.com.vn/bong-da-viet-nam-c182.html" target="_blank">V-League</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id='bttop'><i class="fa fa-chevron-up"></i></div>
	<div id="khung" class="thanhtruot">	
		<div id="arrow"><a href="#arrow" onclick="scroll1()"><i class="fa fa-chevron-up"></i></a></div>
		<div id="ic">
			<a href="http://www.facebook.com" target="_blank"><i class="fa fa-thumbs-o-up" title="Thích"><small> Like </small><span class="badge">251</span></i></a>
			<a href="http://www.facebook.com" target="_blank"><i class="fa fa-share" title="Chia sẻ"><small> Share </small><span class="badge">67</span></i></a>
			<a href="http://www.facebook.com" target="_blank"><i class="glyphicon glyphicon-eye-open" title="Lượt xem"><small>&ensp;View&ensp;</small><span class="badge">141</span></i></a>
			<a href="http://www.youtube.com" target="_blank"><i id=
			"yt" class="fa fa-youtube-square" title="Đăng ký Youtube"><small> Youtube </small><span class="badge">3K</span></i></a>
			<a href="https://plus.google.com/" target="_blank"><i id=
			"gg" class="fa fa-google-plus-square" title="Google+"><small> Google+ </small><span class="badge">4K</span></i></a>
			<a href="http://www.twitter.com" target="_blank"><i id=
			"tw" class="fa fa-twitter-square" title="Twitter"><small> Twitter </small><span class="badge">2K6</span></i></a>
			<a href="http://www.skybe.com" target="_blank"><i id=
			"sk" class="fa fa-skype" title="Skybe"><small> Skybe </small><span class="badge">1K3</span></i></a>
			<a href="http://www.tumblr.com" target="_blank"><i id=
			"tb" class="fa fa-tumblr-square" title="Tumblr"><small> Tumblr </small><span class="badge">2K8</span></i></a>
		</div>
	</div>
	<div id="quangcao3">
		<a href="http://www.lazada.vn/" target="_blank"><img src="anh/quangcao3.jpg" height="570"></a>
	</div>
	<div id="quangcao4">
		<a href="http://www.lazada.vn/" target="_blank"><img src="anh/quangcao4.jpg" height="139" width="168"></a>
	</div>
</body>
</html>	