<?php include('header.php');
buildTitle('');buildMenu('home');
 ?>

 <div class="container">

    <div class="row search_row border_5px white_box" >
    <h1>Search Flights</h1>
        <div class="col-sm-3">
            <div class="engine_box border_5px box_shadowed">
        <?php include('default_search_engine_responsive.php');?>    
        </div>
                </div>
        <div class="col-sm-9"> 

                    <!--  slider box -->
            <div class="col-sm-12">
            <!--  Slider Begin -->
            <!-- ================================================== -->
                <ul class="bxslider">
                    <li><img src="/assets/images/slider/home/01.jpg" /></li>
                    <li><img src="/assets/images/slider/home/1.jpg" /></li>
                    <li><img src="/assets/images/slider/home/3.jpg" /></li>
                    <li><img src="/assets/images/slider/home/4.jpg" /></li>
                </ul>
            <!--  Slider End -->                       
            </div>

                    <div class="col-sm-12">
                    <div class="welcome_txt">
                        <h1>WELCOME TO WWW.ATLAS.TRAVEL </h1>
                        <p>Atlas.Travel is one of  leading online domestic and international travel websites. We are committed to providing you the best travel deals. We can help you to find deals for all aspects of your travel planning, including discounted Flights, Vacation Package deals,  Cruises ship,  Hotels, Car Rentals and Travel Insurance. You can plan and book your entire trip from the convenience of your computer and a click of your mouse.</p>
                    </div>
                    </div>
                    <!-- eof slider box -->
        </div>
     
    </div><!-- /row -->
</div>

<script>

        $(document).ready(function ($) {
            $("#txtDate1_ID_Link").children("img").addClass("calendar_img");
            $("#txtDate2_ID_Link").children("img").addClass("calendar_img");
            $("#txtDate3_ID_Link").children("img").addClass("calendar_img");
          
            $('.bxslider').bxSlider({
              auto: true,
            });

});
    </script>
<?php include('flights_bottom.php'); ?>   
<?php include('footer.php'); ?>