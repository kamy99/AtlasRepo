<?php include('header.php');
buildTitle('');buildMenu('');
 ?>
    <!-- MAIN SLIDER ================================================== -->
    <div class="mainSliderContainer">
        <ul id="mainSlider">
            <li>
                <img src="assets/contents/main-slider-1.png" alt="" />
                <p class="caption"></p>
            </li>
            <li>
                <img src="assets/contents/main-slider-2.png" alt="" />
                <p class="caption"></p>
            </li>
            <li>
                <img src="assets/contents/main-slider-1.png" alt="" />
            </li>
            <li>
                <img src="assets/contents/main-slider-2.png" alt="" />
            </li>
        </ul><!-- /mainSlider -->
        <div class="mainSliderNav"></div>
<!--   Sear form  -->

       <!-- BOOKING TABS and FORMS ================================================== -->
        <div class="bookingTabsContainer">
            <div class="container">
                <div class="row search_engine_col">
                    <div class="col-lg-3 col-md-7 col-sm-9 col-xs-12 bookingTabsCol search_engine_col">
                        <div id="search_box">          
                                      <h3>Search Cheap Flights</h3>
                                      <span id="AirSearchForm" ></span>
                                      <script language=javascript id="OFrameworkJS" ThemeURI="ResponsiveSearchForm/" SkinID="default" src="https://air.atlas.travel/web/searchforms/OFramework.js"></script>
                                    <script language=javascript type="text/javascript">
                                  // the below are for affiliate support
                                  OFramework.QSParams.Add("siid", "99042");
                                  //OFramework.QSParams.Add("sid1", "");
                                  //OFramework.QSParams.Add("sid2", "");
                                  // the above is for affiliate support
                                     oAForm = OFramework.AirSearchForm(document.getElementById("AirSearchForm"));
                                  //oAForm.Target = "_new";

                                   $('#AirSearchForm').on('click', '.tabsinn ul li > a > label', function () {
                                          $('.tabsinn ul li').removeClass('active');
                                          $(this).parents("li").addClass('active');
                                         });
                                  </script>     
                        </div><!-- /bookingTabs -->
                    </div><!-- /col -->

                    <!--  slider box -->
                    <div class="col-lg-9">
        <!-- Jssor Slider Begin -->
        <!-- You can move inline styles to css file or css block. -->
        <!-- ================================================== -->
        <div id="slider1_container" style="display: none; position: relative; margin: 0 auto; width: 980px;
        height: 380px; overflow: hidden;">

            <!-- Loading Screen -->
            <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;

                background-color: #000; top: 0px; left: 0px;width: 100%; height:100%;">
                </div>
                <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;

                top: 0px; left: 0px;width: 100%;height:100%;">
                </div>
            </div>

            <!-- Slides Container -->
            <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1140px; height: 442px;
            overflow: hidden;">
                <div>
                    <img u="image" src2="assets/images/slider/uk/01.jpg" />
                </div>
                <div>
                    <img u="image" src2="assets/images/slider/uk/02.jpg" />
                </div>
                <div>
                    <img u="image" src2="assets/images/slider/uk/03.jpg" />
                </div>
                <div>
                    <img u="image" src2="assets/images/slider/uk/04.jpg" />
                </div>
            </div>
            <!-- Bullet Navigator Skin Begin -->
            <style>
                /* jssor slider bullet navigator skin 05 css */
                /*
                .jssorb05 div           (normal)
                .jssorb05 div:hover     (normal mouseover)
                .jssorb05 .av           (active)
                .jssorb05 .av:hover     (active mouseover)
                .jssorb05 .dn           (mousedown)
                */
                .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
                    background: url(assets/images/b05.png) no-repeat;
                    overflow: hidden;
                    cursor: pointer;
                }

                .jssorb05 div {
                    background-position: -7px -7px;
                }

                    .jssorb05 div:hover, .jssorb05 .av:hover {
                        background-position: -37px -7px;
                    }

                .jssorb05 .av {
                    background-position: -67px -7px;
                }

                .jssorb05 .dn, .jssorb05 .dn:hover {
                    background-position: -97px -7px;
                }
            </style>
            <!-- bullet navigator container -->
            <div u="navigator" class="jssorb05" style="position: absolute; bottom: 16px; right: 6px;">
                <!-- bullet navigator item prototype -->
                <div u="prototype" style="POSITION: absolute; WIDTH: 16px; HEIGHT: 16px;"></div>
            </div>
            <!-- Bullet Navigator Skin End -->
            <!-- Arrow Navigator Skin Begin -->
            <style>
                /* jssor slider arrow navigator skin 11 css */
                /*
                .jssora11l              (normal)
                .jssora11r              (normal)
                .jssora11l:hover        (normal mouseover)
                .jssora11r:hover        (normal mouseover)
                .jssora11ldn            (mousedown)
                .jssora11rdn            (mousedown)
                */
                .jssora11l, .jssora11r, .jssora11ldn, .jssora11rdn {
                    position: absolute;
                    cursor: pointer;
                    display: block;
                    background: url(../img/a11.png) no-repeat;
                    overflow: hidden;
                }

                .jssora11l {
                    background-position: -11px -41px;
                }

                .jssora11r {
                    background-position: -71px -41px;
                }

                .jssora11l:hover {
                    background-position: -131px -41px;
                }

                .jssora11r:hover {
                    background-position: -191px -41px;
                }

                .jssora11ldn {
                    background-position: -251px -41px;
                }

                .jssora11rdn {
                    background-position: -311px -41px;
                }
            </style>
            <!-- Arrow Left -->
            <span u="arrowleft" class="jssora11l" style="width: 37px; height: 37px; top: 123px; left: 8px;">
            </span>
            <!-- Arrow Right -->
            <span u="arrowright" class="jssora11r" style="width: 37px; height: 37px; top: 123px; right: 8px">
            </span>
            <!-- Arrow Navigator Skin End -->
           
        </div>
        <!-- Jssor Slider End -->                       


                    </div>

                    <!-- eof slider box -->



                    <div class="col-lg-9">
                        <div class="welcome_txt">
                        <h1>Welcome to Atlas.Travel</h1>
                        <p>Atlas.Travel is one of Canada's leading online domestic and international travel websites. We are committed to providing you the best travel deals. We can help you to find deals for all aspects of your travel planning, including cheap Flights, Vacation Package deals, discounted Cruises, Hotels, Car Rentals and Travel Insurance. You can plan and book your entire trip from the convenience of your computer and a click of your mouse.</p>

                        </div>

                    </div>




                </div><!-- /row -->
            </div><!-- /container -->
        </div><!-- /bookingTabsContainer -->
 

        
        <!-- SHORT OFFERS ================================================== -->
        <div class="shortOffers">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <a href="#" title="" class="shortOffer clearfix">
                            <div class="title"><h5>MEXICO</h5><h5>NORTH AMERICA</h5></div>
                            <div class="price"><span>From</span><em>$350</em></div>
                        </a><!-- /shortOffer -->
                    </div><!-- /col -->
                    <div class="col-sm-3">
                        <a href="#" title="" class="shortOffer clearfix">
                            <div class="title"><h5>HA LONG BAY</h5><h5>VIETNAM</h5></div>
                            <div class="price"><span>From</span><em>$250</em></div>
                        </a><!-- /shortOffer -->
                    </div><!-- /col -->
                    <div class="col-sm-3">
                        <a href="#" title="" class="shortOffer clearfix">
                            <div class="title"><h5>PATTAYA</h5><h5>THAILAND</h5></div>
                            <div class="price"><span>From</span><em>$600</em></div>
                        </a><!-- /shortOffer -->
                    </div><!-- /col -->
                    <div class="col-sm-3">
                        <a href="#" title="" class="shortOffer clearfix">
                            <div class="title"><h5>BASTIA BEACH</h5><h5>FRANCE</h5></div>
                            <div class="price"><span>From</span><em>$450</em></div>
                        </a><!-- /shortOffer -->
                    </div><!-- /col -->
                </div><!-- /row -->
            </div><!-- /container -->
        </div><!-- /shortOffers -->
        
    </div><!-- /mainSliderContainer -->
    
    
    <!-- MAIN CONTENT ================================================== -->
    <div class="container">
        
        <!-- SPECIAL OFFERS ================================================== -->
        <div class="row">
            <div class="innerTitle"><h2>SPECIAL <span>OFFER</span></h2></div>       
            <div id="specialOffers" class="offers">
                <a href="#" class="item">
                    <img src="assets/contents/sp-offer-1.png" alt="special offer">
                    <span class="offer_box">Receive $20 additional bonus per person on top of other discounts, when you purchase any vacation package online from Atlas.Travel</span>
                    <span>Redeem $20 Per Vacation</span>
                </a>
                <a href="#" class="item">
                    <img src="assets/contents/sp-offer-2.png" alt="special offer">
                    <span class="offer_box">Find Cheap flights to Worldwide destinations within few minutes. Compare 1000s of fares with over 80 Airlines, and select the flight best suit your travel needs.</span>
                    <span>Cheap Flights</span>
                </a>
                <a href="#" class="item">
                    <img src="assets/contents/sp-offer-3.png" alt="special offer">
                    <span class="offer_box">Receive 5% of your cruise package on top of other discounts, when you purchase any cruise trip from Atlas.Travel</span>
                    <span>Redeem 5% Per Cruise</span>
                </a>
                <a href="#" class="item">
                    <img src="assets/contents/sp-offer-1.png" alt="special offer">
                   <span class="offer_box">Are you searching for a good discount hotel deal? Your right choice is here. Search and find your hotel deal online through group of major suppliers in Atlas.Travel and save up to 50%</span>  
                    <span>Shop Hotel Deals</span>

                </a>

            </div><!-- /specialOffers -->
        </div><!-- /row -->
 <?php include('bottom_default.php'); ?>       
        
        
    </div><!-- /container -->
    
    <script>

        jQuery(document).ready(function ($) {
            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
                $AutoPlayInterval: 2000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,                    //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideEasing: $JssorEasing$.$EaseOutQuint,          //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
                $SlideDuration: 800,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
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

