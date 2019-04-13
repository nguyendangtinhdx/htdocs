<p class="cacvideokhac">Các video khác </p>
<div id="slide_video">
    <div class="thongtin-content">
        <!-- it works the same with all jquery version from 1.x to 2.x -->
        <script type="text/javascript" src="jquery-slider-master/js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="jquery-slider-master/js/jssor.core.js"></script>
        <script type="text/javascript" src="jquery-slider-master/js/jssor.utils.js"></script>
        <script type="text/javascript" src="jquery-slider-master/js/jssor.slider.js"></script>
        <script>
            jQuery(document).ready(function ($) {
                var options = {
                    $AutoPlay: true,                                    
                    // slide onec picture
                    $AutoPlaySteps: 3,       
                    // 3 seconds                           
                    $AutoPlayInterval: 3000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                    $PauseOnHover: 1,                               //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, default value is 1
    
                    $ArrowKeyNavigation: true,                           //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                    $SlideDuration: 300,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                    $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                    $SlideWidth: 190,                                   //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                    $SlideHeight: 130,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                    $SlideSpacing: 10,                                     //[Optional] Space between each slide in pixels, default value is 0
                    $DisplayPieces: 5,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                    $ParkingPosition: 0,                              //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                    $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                    $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                    $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
    
                    $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                        $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                        $ChanceToShow: 0,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                        $AutoCenter: 0,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                        $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                        $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                        $SpacingX: 0,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                        $SpacingY: 0,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                        $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                    },
    
                    $ArrowNavigatorOptions: {
                        $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                        $ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                        $AutoCenter: 2,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                        $Steps: 4                                       //[Optional] Steps to go for each navigation request, default value is 1
                    }
                };
    
                var jssor_slider1 = new $JssorSlider$("slider1_container", options);
    
                //responsive code begin
                //you can remove responsive code if you don't want the slider scales while window resizes
                function ScaleSlider() {
                    var bodyWidth = document.body.clientWidth;
                    if (bodyWidth)
                        jssor_slider1.$SetScaleWidth(Math.min(bodyWidth, 1220));
                    else
                        window.setTimeout(ScaleSlider, 30);
                }
    
                ScaleSlider();
    
                if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
                    $(window).bind('resize', ScaleSlider);
                }
    
    
                //if (navigator.userAgent.match(/(iPhone|iPod|iPad)/)) {
                //    $(window).bind("orientationchange", ScaleSlider);
                //}
                //responsive code end
            });
        </script>
        <!-- Jssor Slider Begin -->
        <!-- You can move inline styles to css file or css block. -->
        <div id="slider1_container" style="position: relative; top: 10px; left: 0px; width: 1138px; height: 155px; overflow: hidden;">
    
            <!-- Loading Screen -->
            <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                    background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                </div>
                <div style="position: absolute; display: block; background: url(jquery-slider-master/img/loading.gif) no-repeat center center;
                    top: 0px; left: 0px;width: 100%;height:100%;">
                </div>
            </div>
    
            <!-- Slides Container -->
            <div u="slides" style=" left: 0px; top: 0px; width: 1000px; height: 250px; overflow: hidden;">
                <?php 
                    $slidevideo = SlideVideo_SauVideo();
                    while ($row_slidevideo = mysql_fetch_array($slidevideo)) {
                ?>
                <div><a href="Video/<?php echo $row_slidevideo['TieuDe_KhongDau']; ?>-<?php echo $row_slidevideo['idVideo']; ?>.html" title="<?php echo $row_slidevideo['TieuDe']; ?>"><img u="image" src="upload/tintuc/<?php echo $row_slidevideo['urlHinh']; ?>" /></a></div>
                <?php 
                    }
                ?>
    
            </div>
            
            <!-- Bullet Navigator Skin Begin -->
            <style>
                .jssorb03 div, .jssorb03 div:hover, .jssorb03 .av
                {
                    background: url(jquery-slider-master/img/b03.png) no-repeat;
                    overflow:hidden;
                    cursor: pointer;
                }
                .jssorb03 div { background-position: -5px -4px; }
                .jssorb03 div:hover, .jssorb03 .av:hover { background-position: -35px -4px; }
                .jssorb03 .av { background-position: -65px -4px; }
                .jssorb03 .dn, .jssorb03 .dn:hover { background-position: -95px -4px; }
            </style>
            <!-- bullet navigator container -->
            <div u="navigator" class="jssorb03" style="position: absolute; bottom: 4px; right: 6px;">
                <!-- bullet navigator item prototype -->
                <div u="prototype" style="position: absolute; width: 21px; height: 21px; text-align:center; line-height:21px; color:white; font-size:12px;"><NumberTemplate></NumberTemplate></div>
            </div>
            <!-- Bullet Navigator Skin End -->
            
            <!-- Arrow Navigator Skin Begin -->
            <style>
                .jssora03l, .jssora03r, .jssora03ldn, .jssora03rdn
                {
                    position: absolute;
                    cursor: pointer;
                    display: block;
                    background: url(jquery-slider-master/img/a07.png) no-repeat;
                    overflow:hidden;
                }
                .jssora03l { background-position: -3px -33px; }
                .jssora03r { background-position: -63px -33px; }
                .jssora03l:hover { background-position: -123px -33px; }
                .jssora03r:hover { background-position: -183px -33px; }
                .jssora03ldn { background-position: -243px -33px; }
                .jssora03rdn { background-position: -303px -33px; }
            </style>
            <!-- Arrow Left -->
            <span u="arrowleft" class="jssora03l" style="width: 55px; height: 55px; top: 115px; left: 8px;">
            </span>
            <!-- Arrow Right -->
            <span u="arrowright" class="jssora03r" style="width: 55px; height: 55px; top: 115px; right: 133px">
            </span>
            <!-- Arrow Navigator Skin End -->
            <a style="display: none" href="http://www.jssor.com">javascript</a>
        </div>
    
    </div><!--thongtin-content--></div>
    