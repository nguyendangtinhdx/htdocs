<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div id="date"></div>
    <div id="tinchinh">
       <a href=""><img class="anh_chinh" src="img/anh_chinh.jpg"  /></a>
       <h5 class="tieudetinchinh"><a href="">Thủ tướng: Tạo mọi thuận lợi cho Hội Khuyến học Việt Nam làm tốt hơn nữa</h5></a>
       <p class="noidungtinchinh">Tại buổi lễ, Thủ tướng Nguyễn Xuân Phúc bày tỏ: “Hôm nay tôi vui mừng dự lễ kỷ niệm 20 năm thành lập Hội Khuyến học Việt Nam - một tổ chức Hội đã nhận được sự ủng hộ, đồng tình của người dân khắp mọi miền Tổ quốc. </p>
       <a href=""><button type="button" class="btn btn-success">Xem thêm</button></a>
       <br><br>
       <ul class="tinxemthem">
         <li><a href="">Kỳ 244: Mái nhà liêu xiêu với khó khăn chồng chất</a></li>
         <li><a href="">Kỳ 245: Gia đình lâm cảnh khốn đốn vì tai nạn giao thông</a></li>
         <li><a href="">Kỳ 246: Gia đình lâm cảnh khốn đốn vì tai nạn giao thông</a></li>
     </ul>
 </div><!--tinchinh-->

 <div id="slideshow">

   <div class="w3-content " >
    <a href=""><img class="mySlides" src="img/slide2.jpg" style="width:100%"></a>
    <a href=""><img class="mySlides" src="img/slide3.jpg" style="width:100%"></a>
    <a href=""><img class="mySlides" src="img/slide4.jpg" style="width:100%"></a>
    <a href=""><img class="mySlides" src="img/slide5.jpg" style="width:100%"></a>
</div>

<script>
    var myIndex = 0;
    carousel();

    function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
   }
   myIndex++;
   if (myIndex > x.length) {myIndex = 1}
      x[myIndex-1].style.display = "block";
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
</div><!--slideshow-->
<div class="clear"></div>
<br>
<div id="content_main">
    <div id="slide1">
        <?php
        require "blocks/slide1.php";
        ?>    
    </div>

    <div id="danhsachtin">
        <?php
        require "blocks/danhsachtin.php";                   
        ?>
    </div>

    <div id="quangcao">
        <?php
        require "blocks/quangcao.php";                  
        ?>
    </div>

    <div class="clear"></div>
    <div class="underline"></div>

    <div id="video">
        <?php
        require "blocks/video.php";                  
        require "blocks/slide2.php";                    
        ?>
    </div>
</div><!--content_main-->
</div><!--col-lg-->