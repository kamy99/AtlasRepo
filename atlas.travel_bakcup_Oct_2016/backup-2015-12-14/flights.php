<?php include('header.php');
buildTitle('Flights');buildMenu('flights');
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
                        <ul class="bxslider">
                            <li><img src="assets/images/slider/flights/01.jpg"></li>
                            <li><img src="assets/images/slider/flights/02.jpg"></li>
                            <li><img src="assets/images/slider/flights/03.jpg"></li>
                            <li><img src="assets/images/slider/flights/04.jpg"></li>
                        </ul>    

                    </div>

                    <div class="col-sm-12">
                    <div class="welcome_txt">
                        <h1>Looking for Cheap Tickets?    Look no further ! </h1>
                        <p>Atlas Travel gives you the best price guarantee for fares from anywhere to everywhere. We have over 20 years experience selling airline tickets around the world at unbeatable discounts with over 140 airlines. Our user friendly website gives you fast results for cheap tickets that you can conveniently book at any time of day and night.  Rest assured our website holds the highest level of security for your information and payment. We pride ourselves on our excellent customer service, unbeatable low ticket prices and fun and easy website for travel search and booking. 
</p>
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
