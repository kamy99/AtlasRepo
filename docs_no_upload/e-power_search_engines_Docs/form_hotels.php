
<!-- 
Params from Sylvia

https://www-amer.epower.amadeus.com/atlastravel/#ProviderSelection=OnlyAmadeus&Culture=en-US&CityCode=MIA&CheckInDate=06%2F15%2F2016&CheckOutDate=06%2F17%2F2016&RoomAdultChild=1&Method=HotelSearch

//////


 -->

                                    <!--********************* Hotel reservation ********************-->
                                    <form id="hotels-tab" class="tab-pane form-inline reservation-hotel <?php if ($search_box == 'hotels') { ?>active<?php } ?> " method="get" name="hotels_form" action="booking.php" data-form-action="https://www-amer.epower.amadeus.com/atlastravel/#">
                                           <input type="hidden" name="ProviderSelection" value="OnlyAmadeus">
                                           <input type="hidden" name="Method" value="HotelSearch">
                                          <input type="hidden" name="HotelType" value="CityAirport">
                                           <input type="hidden" name="Page" value="HotelResult"> 
                                          <input type="hidden" name="Culture" value="en-US">      
                                          <input id="passed_data" type='hidden' name="passed_data">


                                      <div class="row">
                                        <div class="col-sm-2 step-where">
                                            <h3>Great Hotel Deals</h3>
                                        </div>
                                        <div class="col-sm-4 step-check">
                                            <div class="col-sm-6 cc-in" style="padding-left:0">
                                              <div class="form-group">
                                                <!-- <input name="CityCode" id="CityCode_Value" type="text" value="">   -->
                                                <label for="checkin">City:</label>
                                                <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content=""> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                                <div class="content-checkin-data">
                                                    <i class="fa fa-calendar infield"></i>
                                                    <input name="CityCode" type="text" id="hotels-from" value="" class="form-control airport_search" placeholder="Destination"/>
                                                </div>
                                              </div>
                                            </div>        
                                        </div>

                                        <div class="col-sm-4 step-check">
                                         
                                            <div class="col-sm-6 cc-in" style="padding-left:0">
                                              <div class="form-group">
                                                <label for="checkin">From Date</label>
                                                <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Check-In is from 11:00"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                                <div class="content-checkin-data">
                                                    <i class="fa fa-calendar infield"></i>
                                                    <input name="CheckInDate" type="text" id="hotels-checkin" value="" class="form-control hotels-checkin" placeholder="Check-in"/>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-sm-6 cc-out" style="padding-left:0">
                                              <div class="form-group return_panel">
                                                <label for="checkout">To Date</label>
                                                <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Check-out is from 12:00"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                                <div class="content-checkin-data">
                                                    <i class="fa fa-calendar infield"></i>
                                                    <input name="CheckOutDate" type="text" id="hotels-checkout" value="" class="form-control hotels-checkout" placeholder="Check-out"/>
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
                                          
                                            <div class="col-sm-4 room-book" style="padding-left:0">
                                               <div class="form-group">
                                                <div class="guests-select">
                                                  <label>Occupancy:</label>
                                                  <!-- <i class="fa fa-user infield"></i> -->
                                                  <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="+12 years"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                                      <select name="RoomAdultChild" id="adults" class="form-control">
                                                        <option selected="selected" value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                      </select>
                  
                                                </div>
                                              </div>       
                                            </div>
                                            <div class="col-sm-4 adult-book">
                                             
                                            </div>
                                            <div class="col-sm-4 child">
                                              
                                            </div>
                                        </div>

                                        <div class="col-sm-2 colbtn">
                                          <button id="booking_search_btn" type="submit" class="btn btn-primary btn-block" >Search</button>
                                        </div>
                                      </div>



                                    </form>    