        <!--  



///////////
From Sylvia #2

https://www-amer.epower.amadeus.com/atlastravel/#AdtCount=1

&CheckInDate=09/12/2016
&CheckOutDate=09/15/2016
&CityCode=MIA%3BC

&DepartureDate=09/12/2016
&From=NYC

&ReturnDate=09/15/2016
&RoomAdultChild=1
&To=MIA




Mine #2

https://www-amer.epower.amadeus.com/atlastravel/#
IsMajorCabin=False

&QFrom=C
&QTo=C
&From=YTO
&To=PAR
&DepartureDate=05%2F25%2F2016
&ReturnDate=05%2F24%2F2016
&CabinClasses=
&AdtCount=1
&ChdCount=0
&InfCount=0


/////

amadeus search:

https://www-amer.epower.amadeus.com/atlastravel/#AdtCount=1
&CabinClass=
&CheckInDate=05/25/2016
&CheckOutDate=05/31/2016
&CityCode=PAR%3BC
&Culture=en-US
&DepartureDate=05/25/2016
&From=YTO
&Method=PackageSearch
&Page=Package
&QFrom=C
&QTo=C
&ReturnDate=05/31/2016
&RoomAdultChild=1
&To=PAR


///

Mine again


    -->
                                    <!--********************* Packages reservation ********************-->
                                    <form id="packages-tab" class="tab-pane form-inline reservation-hotel <?php if ($search_box == 'packages') { ?>active<?php } ?>" method="get" name="packages_form" action="" data-form-action="https://www-amer.epower.amadeus.com/atlastravel/#">
                                          

                                          <!-- <input type="hidden" name="IsMajorCabin" value="False"> -->
                                          <input type="hidden" name="Method" value="PackageSearch">
                                          <input type="hidden" name="Culture" value="en-US">
                                          <!-- <input type="hidden" name="ActiveTab" value="PackageFlightResult"> -->                                  
                                          <input type="hidden" name="Page" value="Package"> 
                                          <input type="hidden" name="QFrom" value="C">
                                          <input type="hidden" name="QTo" value="C">

                                          <input type="hidden" name="PrefAirline1" value="">
                                          <input type="hidden" name="PrefAirline2" value="">
                                          <input type="hidden" name="PrefAirline3" value="">
                                          <input type="hidden" name="CabinClass" value="">
                                          <input type="hidden" name="RoomAdultChild" value="1">
                                          <input type="hidden" name="CityCode" id="CityCode" value="">
                                          <input id="passed_data" type='hidden' name="passed_data">
                                      <div class="row  step-flight-type">
                                            <h3>Cheap Flight &amp; Hotel Deals !</h3>

                                     </div>   

                                      <div class="row">
                                        <div class="col-sm-2 step-where">
                                    
                                        </div>

                                        <div class="col-sm-4 step-check">
                                            <div class="col-sm-6 cc-in" style="padding-left:0">
                                              <div class="form-group">
                                                <label for="checkin">From:</label>
                                                <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content=""> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                                <div class="content-checkin-data">
                                                    <i class="fa fa-calendar infield"></i>
                                                    <input name="From" type="text" id="packages-from" value="" class="form-control airport_search airport-complete" placeholder="Departure"/>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-sm-6 cc-out" style="padding-left:0">
                                              <div class="form-group">
                                                <label for="checkout">To:</label>
                                                <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Check-out is from 12:00"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                                <div class="content-checkin-data">
                                                    <i class="fa fa-calendar infield"></i>
                                                    <input name="To" type="text" id="packages-to" value="" class="form-control" placeholder="Arrival"/>
                                                </div>
                                              </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4 step-check">
                                         
                                            <div class="col-sm-6 cc-in" style="padding-left:0">
                                              <div class="form-group">
                                                <label for="checkin">Depart Date</label>
                                                <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Check-In is from 11:00"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                                <div class="content-checkin-data">
                                                    <i class="fa fa-calendar infield"></i>
                                                    <input name="DepartureDate" type="text" id="package-checkin" value="" class="form-control package-checkin" placeholder="Departure Date"/>
                                                    <input type="hidden" id="CheckInDate" name="CheckInDate" value="">
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-sm-6 cc-out" style="padding-left:0">
                                              <div class="form-group return_panel">
                                                <label for="checkout">Return Date</label>
                                                <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Check-out is from 12:00"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                                <div class="content-checkin-data">
                                                    <i class="fa fa-calendar infield"></i>
                                                    <input name="ReturnDate" type="text" id="package-checkout" value="" class="form-control package-checkout" placeholder="Return Date"/>
                                                     <input type="hidden" id="CheckOutDate" name="CheckOutDate" value="">
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 step-who">
                                        <div class="col-sm-6 no_padding">
                                          <div class="form-group">
                                                <label for="room">Cabin Class</label>
                                                <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Select Cabin Class."> <i class="fa fa-info-circle fa-sm"> </i> </div>
                                                <select class="form-control" name="CabinClasses" id="CabinClasses">
                                                    <option  selected="selected" value="">No Preference</option>
                                                    <option value="Y">Economy</option>
                                                    <option value="W">Premium</option>
                                                    <option value="C">Business</option>
                                                    <option value="F">First</option>
                                                </select>
                                              </div>
                                        </div>

                                        <div class="col-sm-6 ">
                                              
                                              </div>


                                         </div>

                                        <div class="col-sm-4 step-who" style="padding-left:0">
                                          
                                            <div class="col-sm-4 room-book" style="padding-left:0">
                                               <div class="form-group">
                                                <div class="guests-select">
                                                  <label>Adults (12+)</label>
                                                  <!-- <i class="fa fa-user infield"></i> -->
                                                  <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="+12 years"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                                      <select name="AdtCount" id="adults" class="form-control">
                                                        <option selected="selected" value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                      </select>
                  
                                                </div>
                                              </div>       
                                            </div>
                                            <div class="col-sm-4 adult-book">
                                              <div class="form-group">
                                                <div class="guests-select">
                                                  <label>Kids (2-11)</label>
                                                  <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="2 till 11 years"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                                      <select name="ChdCount" id="children" class="form-control">
                                                        <option value="0">0</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>                                                        
                                                      </select>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-sm-4 child">
                                              <div class="form-group">
                                                <div class="guests-select">
                                                  <label>infant (0-2)</label>
                                                  <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="0 till 1 years"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                                      <select name="InfCount" id="children" class="form-control">
                                                        <option value="0">0</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                      </select>
                                                </div>
                                              </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-2 colbtn">
                                          <button id="booking_search_btn" type="submit" id="package_submit" class="btn btn-primary btn-block">Search!</button>
                                        </div>
                                      </div>
  
                                    </form>