<!--********************* Car reservation ********************-->
                                    <form  id="cars-tab" class="tab-pane form-inline reservation-hotel  <?php if ($search_box == 'cars') { ?>active<?php } ?>" method="get" name="cars_form" >
                                      <div class="row">
                                        <div class="col-sm-12 step-where">
                                            <!-- <h3 class="hide_me">Great Car Deals</h3> -->

                                        <div id="bookingengine"></div>
   <script>
var default_values = {
affiliate_id:"2507",
page: "step1",
width:"95%",

 step2Url: "https://www.atlas.travel/cars_search.php",
 custom_css:"https://www.atlas.travel/css/cars.css",
 terms_page:"https://www.atlas.travel/privacy_policy.php"

/*****************OPTIONAL VALUES********************
terms_page:"your_terms_and_conditions_page_url",
formType: "form1",
custom_css: "your_custom_css_url",
language: "en",
show_multilingual: "1",
width: "100%",
height: “450px”,
pickup_country:"441",
pickup_city:"9747",
pickup_loc:"14927",
dropoff_country:"441",
dropoff_city:"9747",
dropoff_loc:"14927",
pickupdate:"1",
dropoffdate:"1",
pickuptime:"11:30",
dropofftime:"11:30",
currency: "INR",
driver_age: "41",
div_id: "bookingengine_custom_div_id",
map:"0"
*****************OPTIONAL VALUES********************/
};
</script>
<script type="text/javascript"
src="https://api.supplycars.com/jsbookingengine/script.js"></script>
                                        </div>

                                      </div>
                                      <a class="btn" href="cars_manage.php">Manage Your Car Rental Booking</a>
                                    </form>
