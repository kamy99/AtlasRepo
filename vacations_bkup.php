<?php include('functions.php');
include('search_functions.php');
buildTitle('Vacations');
buildMenu('vacations', 'default');
?>


<section class="top-content reservation-home4">
        <div class="container-slider removeslide">
          <div class="container-reservation inside-slider book-small-box">
           <div class="container">
            <div class="row">
              <div class="col-md-12">
                       <!-- Reservation form -->
                            <section id="reservation-form" class="col-md-6 reservation-color-form pos-inside-slide resv-plus-meteo">
                              <div class="container-form-chose">
                                  <div class="col-md-12">  

                                   <!--********************* Hotel reservation ********************-->
                                   <div class="reservation-tabs">
                                        <div id="message"></div>
                                        <div class="row">
                                           <ul class="nav nav-tabs search-opt">
                                                    <li class="active"><a id="flights_tab" href="#flights-tab" data-toggle="tab"><i class="fa fa-plane">&nbsp;</i>Vacations</a></li>
                                                </ul>
                                        </div>
                                    </div>
                                    <div class="tab-content">
                                       <br /><br />
                    <div class="vac_booking_section">
                      <div class="svWideWrap"> <b class="svBTop"><b class="svB1"></b><b class="svB2"></b><b class="svB3"></b><b class="svB4"></b></b>
                      <iframe id="svFrame2" height="425" width="540" name="svFrame2" src="http://vco.sax.softvoyage.com/cgi-bin/querypackage.cgi?code_ag=vco&alias=fxy&language=en&mode=wide&target=_top" frameborder="0">
                      <p>You must use a browser that supports iframes to access this functionality.</p>
                      </iframe>

                      <!-- <h2>Hot Deal & Last Minute Packages</h2> -->

                      <!-- <iframe width="448" scrolling="no" frameborder="0" src="/svads/Default7.aspx"></iframe> -->
                      </div>
                    </div>

                                  </div>
                              </div>
                      </div></section>
                      <div class="col-md-6 meteo-top-travel meteo-slider-top">
                                                        <div id="home_promos" class="vacation_promos">
                                                       <h1>   $20 Cach Back per Passenger</h1>

                                                          <!-- <img src="images/vacations.jpg"> -->
                              <p>

Atlas.Travel offers hot deals on amazing vacation packages to the most popular destinations. We offer convenient packages to destinations throughout the Caribbean Islands, Mexico, USA, Central America, Canada, Europe and many other worldwide excursions.<br /> All inclusive packages are an excellent choice for managing your travel budget. Our cheap vacation packages streamline your travel planning process and save you money, compared to booking each component of your vacation separately. We have a wide range of all inclusive vacation packages to help you plan your vacations that are affordable and will satisfy your preferences. 
                              </p>
                          </div>                            </div>
                        </div>
              </div>
            </div>
           </div>
           </div>
           <div class="home-page removeslide">
             <!-- SLIDER -->
                <div class="fullwidthbanner-container">
                    <div style="height: 795px;" class="fullwidthbanner tp-simpleresponsive">
                        <ul>
                            <!-- FADE -->
                            <li style="visibility: visible; left: 0px; top: 0px; z-index: 18; opacity: 1;" data-transition="fade" data-slotamount="10" data-thumb="">
                                <div class="slotholder"><img style="width: 1490px; height: 838.125px; position: absolute; left: -25px; opacity: 0;" class="defaultimg" src="images/sliders/vacations_1.jpg" alt=""></div>
                            </li>

                            <!-- SLIDEUP -->
                            <li style="z-index: 20; visibility: visible; left: 0px; top: 0px; opacity: 1;" data-transition="slideup" data-slotamount="7" data-thumb="">
                                <div class="slotholder"><img style="width: 1638.23px; height: 750px; position: absolute; left: -99px; opacity: 1;" class="defaultimg" src="images/sliders/vacations_2.jpg" alt=""></div>
                            </li>

                            <!-- SLIDEDOWN -->
                            <li style="visibility: visible; left: 0px; top: 0px; z-index: 16;" data-transition="slidedown" data-slotamount="7" data-thumb="">
                                <div class="slotholder"><img style="width: 1446.33px; height: 750px; position: absolute; left: -3px; opacity: 0;" class="defaultimg" src="images/sliders/vacations_3.jpg" alt=""></div>
                            </li>
                        </ul>
                        <div style="width: 64.3933%; overflow: hidden;" class="tp-bannertimer"></div>
                    <div style="display: none;" class="tp-loader"></div></div>
                <div style="visibility: visible; position: absolute; left: 0px; top: 375px; opacity: 0;" class="tp-leftarrow tparrows large"></div><div style="visibility: visible; position: absolute; left: 1379px; top: 375px; opacity: 0;" class="tp-rightarrow tparrows large"></div></div>
                <!-- SLIDER END -->
           </div>
        
</section>

<?php  include('section_promotions.php'); ?>
<?php  include('section_promo_boxes2.php'); ?>
<?php  include('section_last_minute.php'); ?>


<?php buildFooter();?>