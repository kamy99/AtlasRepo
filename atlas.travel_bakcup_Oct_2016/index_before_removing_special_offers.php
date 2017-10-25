<?php include('header.php');
buildTitle('');buildMenu('home');
 ?>
<script type="text/javascript">
        jQuery(document).ready(function ($) {

    // special offers
    $("#specialOffers").owlCarousel({
        autoPlay: 3000, //Set AutoPlay to 3 seconds
        items : 4,
        stopOnHover: true,
        navigation: true,
        pagination: false,  
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,2]
    });
});
</script>

 <div class="container">

    <div class="row search_row border_5px white_box" >
    <h1>Search Flights</h1>
        <div class="col-sm-4 engine_box border_5px">
        <?php include('default_search_engine_responsive.php');?>    



        </div>
        <div class="col-sm-8"> 

                    <!--  slider box -->
                    <div class="col-sm-12">
        <!-- Jssor Slider Begin -->
        <!-- You can move inline styles to css file or css block. -->
        <!-- ================================================== -->
        <div id="slider1_container">

            <!-- Loading Screen -->
            <div u="loading" class="slider_div1">
                <div class="slider_div2">
                </div>
                <div class="slider_div3">
                </div>
            </div>

            <!-- Slides Container -->
            <!-- Slides Container -->
            <div u="slides"  class="slider_div4">
                <div>
                    <img u="image" src2="assets/images/slider/flights/01.jpg" />
                </div>
                <div>
                    <img u="image" src2="assets/images/slider/flights/02.jpg" />
                </div>
                <div>
                    <img u="image" src2="assets/images/slider/flights/03.jpg" />
                </div>
                <div>
                    <img u="image" src2="assets/images/slider/flights/04.jpg" />
                </div>
            </div>

            <!-- bullet navigator container -->
            <div u="navigator" class="jssorb05 slider_navigator">
                <!-- bullet navigator item prototype -->
                <div u="prototype" class="slider_prototype"></div>
            </div>
            <!-- Bullet Navigator Skin End -->
            <!-- Arrow Navigator Skin Begin -->
           
            <!-- Arrow Left -->
            <span u="arrowleft"  class="jssora11l arrow">
            </span>
            <!-- Arrow Right -->
            <span u="arrowright" class="jssora11r arrow">
            </span>
            <!-- Arrow Navigator Skin End -->
           
        </div>
        <!-- Jssor Slider End -->                       


                    </div>

                    <div class="col-sm-12">
                    <div class="welcome_txt">
                        <h1>WELCOME TO ATLAS.TRAVEL </h1>
                        <p>Atlas.Travel is one of  leading online domestic and international travel websites. We are committed to providing you the best travel deals. We can help you to find deals for all aspects of your travel planning, including discounted Flights, Vacation Package deals,  Cruises ship,  Hotels, Car Rentals and Travel Insurance. You can plan and book your entire trip from the convenience of your computer and a click of your mouse.</p>
                    </div>
                    </div>

                    <!-- eof slider box -->

        </div>
     
    </div><!-- /row -->

        <!-- SPECIAL OFFERS ================================================== -->
        <div class="row search_row border_5px white_box">



<ul class="specialz effect col-sm-5 border_5px box_shadowed">
    <li>
        <a href="/vacations.php">
       <h2 class="zero">$20 cash back per Vacation package</h2>
       <p class="zero">Receive $20 additional bonus per person on top of other discounts, when you purchase any vacation package online from Atlas.Travel</p>
       </a>
    </li>
    <li><a href="/vacations.php"><img class="top img-responsive" src="assets/contents/special_offers_1.png" alt=""/></a></li>
</ul>
<ul class="specialz effect col-sm-5 border_5px box_shadowed">
    <li>
        <a href="/flights.php">
       <h2 class="zero">Cheap Air Tickets to worldwide destinations</h2>
       <p class="zero">Find Cheap flights to Worldwide destinations within few minutes. Compare 1000s of fares with over 80 Airlines, and select the flight best suit your travel needs.</p>
   </a>
    </li>
    <li><a href="/flights.php"><img class="top img-responsive" src="assets/contents/special_offer_2.png" alt=""/></a></li>
</ul>
<ul class="specialz effect col-sm-5 border_5px box_shadowed">
    <li>
        <a href="/cruise.php">
       <h2 class="zero">7% cash back per Cruise package</h2>
       <p class="zero">Receive 5% of your cruise package on top of other discounts, when you purchase any cruise trip from Atlas.Travel</p>
   </a>
    </li>
    <li><a href="/cruise.php"><img class="top img-responsive" src="assets/contents/special_offers_3.png" alt=""/></a></li>
</ul>
<ul class="specialz effect col-sm-5 border_5px box_shadowed">
    <li>
        <a href="/hotels.php">
       <h2 class="zero">Hotels up to 50% off</h2>
       <p class="zero">Are you searching for a good discount hotel deal? Your right choice is here. Search and find your hotel deal online through group of major suppliers in Atlas.Travel and save up to 50%</p>
   </a>
    </li>
    <li><a href="/hotels.php"><img class="top img-responsive" src="assets/contents/special_offers_4.png" alt=""/></a></li>
</ul>


       </div><!-- /row  eof special offers-->

        <!-- 
      
        <div class="row search_row border_5px white_box">
            <div class="innerTitle"><h2>SPECIAL <span>OFFERS</span></h2></div>       
            <div id="specialOffers" class="offers">
                <a href="/vacations.php" class="item">
                    <img src="assets/contents/sp-offer-1.png" alt="special offer">
                    <span class="offer_box">Receive $20 additional bonus per person on top of other discounts, when you purchase any vacation package online from Atlas.Travel</span>
                    <span>$20 cash back per Vacation package</span>
                </a>
                <a href="/flights.php" class="item">
                    <img src="assets/contents/sp-offer-2.png" alt="special offer">
                    <span class="offer_box">Find Cheap flights to Worldwide destinations within few minutes. Compare 1000s of fares with over 80 Airlines, and select the flight best suit your travel needs.</span>
                    <span>Cheap Air Tickets to worldwide destinations</span>
                </a>
                <a href="/cruise.php" class="item">
                    <img src="assets/contents/sp-offer-3.png" alt="special offer">
                    <span class="offer_box">Receive 5% of your cruise package on top of other discounts, when you purchase any cruise trip from Atlas.Travel</span>
                    <span>7% cash back per Cruise package</span>
                </a>
                <a href="/hotels.php" class="item">
                    <img src="assets/contents/sp-offer-4.png" alt="special offer">
                   <span class="offer_box">Are you searching for a good discount hotel deal? Your right choice is here. Search and find your hotel deal online through group of major suppliers in Atlas.Travel and save up to 50%</span>  
                    <span>Hotels up to 50% off</span>

                </a>

            </div>
        </div> -->
 <?php include('bottom_default.php'); ?>    
        

</div>


    <script>

        jQuery(document).ready(function ($) {
          $("#txtDate1_ID_Link").children("img").addClass("calendar_img");
          $("#txtDate2_ID_Link").children("img").addClass("calendar_img");
          $("#txtDate3_ID_Link").children("img").addClass("calendar_img");


            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
                $AutoPlayInterval: 5000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,                    //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideEasing: $JssorEasing$.$EaseOutQuint,          //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
                $SlideDuration: 1000,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0,                           //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $ArrowNavigatorOptions: {                           //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,                  //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Scale: false,                                  //Scales bullets navigator or not while slider scale
                },

                $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 12,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 4,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1,                                //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                    $Scale: false,                                  //Scales bullets navigator or not while slider scale
                }
            };

            //Make the element 'slider1_container' visible before initialize jssor slider.
            $("#slider1_container").css("display", "block");
            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                if (parentWidth) {
                    jssor_slider1.$ScaleWidth(parentWidth - 30);
                }
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>   


<?php include('bottom_default.php');  include('footer.php'); ?>
