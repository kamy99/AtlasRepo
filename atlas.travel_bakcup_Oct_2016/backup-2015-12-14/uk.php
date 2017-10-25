<?php include('header.php');
buildTitle('UK');
buildMenu('flights');
 ?>


 <div class="container">

    <div class="row search_row border_5px white_box" >
    <h1>Search UK Flights</h1>
        <div class="col-sm-3 border_5px box_shadowed us_uk_search">
            <span id="AirSearchForm" ></span>
            <script language=javascript id="OFrameworkJS" ThemeURI="ResponsiveSearchForm/" SkinID="default" src="https://air.atlas.travel/web/searchforms/OFramework.js"></script>
            <script language=javascript type="text/javascript">
              OFramework.QSParams.Add("siid", "99042");
              oAForm = OFramework.AirSearchForm(document.getElementById("AirSearchForm"));

              $('#AirSearchForm').on('click', '.tabsinn ul li > a > label', function () {
              $('.tabsinn ul li').removeClass('active');
              $(this).parents("li").addClass('active');
              });
            </script>

        </div>
        <div class="col-sm-9"> 
                    <!--  slider box -->
                    <div class="col-sm-12">

                        <ul class="bxslider">
                            <li><img src="assets/images/slider/uk/01.jpg"></li>
                            <li><img src="assets/images/slider/uk/02.jpg"></li>
                            <li><img src="assets/images/slider/uk/03.jpg"></li>
                            <li><img src="assets/images/slider/uk/04.jpg"></li>
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
        $("body").addClass("body_uk");
          $("#txtDate1_ID_Link").children("img").addClass("calendar_img");
          $("#txtDate2_ID_Link").children("img").addClass("calendar_img");
          $("#txtDate3_ID_Link").children("img").addClass("calendar_img");
        
            $('.bxslider').bxSlider({
              auto: true,
            });

        });
    </script>   


 <?php include('flights_bottom.php'); ?>    

<?php include('bottom_default.php');  include('footer.php'); ?>
