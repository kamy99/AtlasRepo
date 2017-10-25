
<!-- 
Sylvia:
https://www-amer.epower.amadeus.com/atlastravel/#
PickUpLocation=MIA
&DropOffLocation=MIA
&PickUpDate=09%2F19%2F2016
&DropOffDate=09%2F23%2F2016
&Method=CarSearch


Kamy
https://www-amer.epower.amadeus.com/atlastravel/#
VehicleType=T
&VehicleClassType=E
&Method=CarSearch
&Culture=en-US
&PickUpLocation=YTO
&DropOffLocation=YTO
&PickUpDate=05%2F11%2F2016
&DropOffDate=05%2F18%2F2016


epower:
https://www-amer.epower.amadeus.com/atlastravel/#Culture=en-US&DropOffDate=05/18/2016&DropOffLocation=YTO%3BC&DropOffLocationText=Same+as+pickup+location&DropOffTime=03%3A00&HasAirCondition=&Method=CarSearch&MileageChargeType=&Page=Car&PickUpDate=05/11/2016&PickUpLocation=YTO%3BC&PickUpLocationText=Toronto,+Canada%28YTO%29+%28All+Locations%29&PickUpTime=02%3A00&PickupVicinityCode=NoPreference&PickupVicinityname=City+center&TransmissionType=&VehicleClassType=E&VehicleType=T
 -->
 <!--                                           <input type="hidden" name="VehicleType" value="T">   
                                          <input type="hidden" name="VehicleClassType" value="E">    -->
                                          <!-- <input type="hidden" name="Culture" value="en-US">                                      -->

<!--********************* Car reservation ********************-->
                                    <form id="cars-tab" class="tab-pane form-inline reservation-hotel  <?php if ($search_box == 'cars') { ?>active<?php } ?>" method="get" name="cars_form" action="booking.php" data-form-action="https://www-amer.epower.amadeus.com/atlastravel/#">

                                           <input type="hidden" name="Method" value="CarSearch">
<input id="passed_data" type='hidden' name="passed_data">
                                      <div class="row">
                                        <div class="col-sm-2 step-where">
                                            <h3>Great Car Deals</h3>
                                        </div>
                                        <div class="col-sm-4 step-check">
                                            <div class="col-sm-6 cc-in" style="padding-left:0">
                                              <div class="form-group">
                                                <label for="checkin">Pick-up City/Airport:</label>
                                                <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content=""> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                                <div class="content-checkin-data">
                                                    <i class="fa fa-calendar infield"></i>
                                                    <input name="PickUpLocation" type="text" id="cars-from" value="" class="form-control airport_search" placeholder="City/Airport"/>
                                                </div>
                                              </div>
                                            </div> 

                                            <div class="col-sm-6 cc-in" style="padding-left:0">
                                              <div class="form-group">
                                                <label for="checkin">Drop-off City/Airport:</label>
                                                <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content=""> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                                <div class="content-checkin-data">
                                                    <i class="fa fa-calendar infield"></i>
                                                    <input name="DropOffLocation" type="text" id="cars-to" value="" class="form-control airport_search" placeholder="City/Airport"/>
                                                </div>
                                              </div>
                                            </div> 

                                        </div>

                                        <div class="col-sm-4 step-check">
                                         
                                            <div class="col-sm-6 cc-in" style="padding-left:0">
                                              <div class="form-group">
                                                <label for="checkin">Pick-up Date</label>
                                                <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Check-In is from 11:00"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                                <div class="content-checkin-data">
                                                    <i class="fa fa-calendar infield"></i>
                                                    <input name="PickUpDate" type="text" id="cars-checkin" value="" class="form-control cars-checkin" placeholder="Check-in"/>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-sm-6 cc-out" style="padding-left:0">
                                              <div class="form-group return_panel">
                                                <label for="checkout">Drop-off Date</label>
                                                <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Check-out is from 12:00"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                                <div class="content-checkin-data">
                                                    <i class="fa fa-calendar infield"></i>
                                                    <input name="DropOffDate" type="text" id="cars-checkout" value="" class="form-control cars-checkout" placeholder="Check-out"/>
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 step-who">
                                        <div class="col-sm-6 no_padding">
                                         
                                        </div>

                                        <div class="col-sm-6 ">
                                              <!-- ?? -->
                                        </div>
                                         </div>


                                        <div class="col-sm-4 step-who" style="padding-left:0">
                                        
                                        <div class="col-sm-2 colbtn">
                                          <button id="booking_search_btn" type="submit" class="btn btn-primary btn-block">Search!</button>
                                        </div>
                                      </div>
                                    </form>    