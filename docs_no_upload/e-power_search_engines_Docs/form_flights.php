 <!-- 

https://www-amer.epower.amadeus.com/atlastravel/#Method=Search&IsMajorCabin=false&IsCalendarSearch=true&Culture=en-US&flightType=RoundTrip&From=YTO&To=HOU&DepartureDate=04%2F29%2F2016&ReturnDate=05%2F29%2F2016&CabinClasses=Y&AdtCount=3&ChdCount=0&InfCount=0

  -->

                                    <!--********************* Flight reservation ********************-->                                      
 <form id="flights-tab" class="tab-pane form-inline reservation-hotel flights_form  <?php if ($search_box == 'flights' || $search_box == 'home') { ?>active<?php } ?>" method="get" action="" data-form-action="https://www-amer.epower.amadeus.com/atlastravel/#" name="reservationform" autocomplete="off">
                                          <input type="hidden" name="Method" value="Search">
                                          <input type="hidden" name="IsMajorCabin" value="false">
                                          <input type="hidden" name="IsCalendarSearch" value="false">
                                          <input type="hidden" name="Culture" value="en-US">
                                      <div class="row  step-flight-type">
                                            <h3>Cheap Flight Deals !</h3>
                                        <div class="col-sm-8">
                                        <input name="flightType" value="RoundTrip" id="flightTypeRoundTrip" checked="checked" type="radio">
                                        <label for="flightTypeRoundTrip" class="radio-inline">Round-Trip</label>

                                        <input name="flightType" value="OneWay" id="flightTypeOneWay" type="radio">
                                        <label for="flightTypeOneWay" class="radio-inline">One-Way</label>

                                        <input name="flightType" value="MultiLeg" id="rdbMultiCity" type="radio">
                                        <label for="flightTypeMultiLeg" class="radio-inline">Multi-City</label>  
                                        </div>
                                        <div class="col-sm-4">
                                            
                                        <!-- 
https://www-amer.epower.amadeus.com/atlastravel/#AdtCount=1&CabinClasses=Y&ChdCount=0&Culture=en-US&DepartureDate=04/29/2016&FlexibleDates=on&From=YTO&InfCount=0&IsCalendarSearch=false&IsMajorCabin=false&Method=Search&Page=Result&ReturnDate=05/15/2016&To=PAR&flightType=RoundTrip



https://www-amer.epower.amadeus.com/atlastravel/#AdtCount=1&Culture=en-US&DepartureDate=04/29/2016&From=YTO&IsCalendarSearch=true&IsMajorCabin=&Method=Search&Page=Result&ReturnDate=05/15/2016&To=PAR
                                         -->
                                        </div>

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
                                                    <input name="From" type="text" id="from" value="<?php echo $_GET['dest'];?>" class="form-control airport_search airport-complete" placeholder="Departure"/>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-sm-6 cc-out" style="padding-left:0">
                                              <div class="form-group">
                                                <label for="checkout">To:</label>
                                                <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Check-out is from 12:00"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                                <div class="content-checkin-data">
                                                    <i class="fa fa-calendar infield"></i>
                                                    <input name="To" type="text" id="to" value="" class="form-control" placeholder="Arrival"/>
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
                                                    <input name="DepartureDate" type="text" id="checkin" value="" class="form-control checkin" placeholder="Departure Date"/>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-sm-6 cc-out flights-return-date" style="padding-left:0">
                                              <div class="form-group return_panel">
                                                <label for="checkout">Return Date</label>
                                                <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Check-out is from 12:00"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                                <div class="content-checkin-data">
                                                    <i class="fa fa-calendar infield"></i>
                                                    <input name="ReturnDate" type="text" id="checkout" value="" class="form-control checkout" placeholder="Return Date"/>
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
                                                    <option value="">No Preference</option>
                                                    <option selected="selected" value="Y">Economy</option>
                                                    <option value="W">Premium</option>
                                                    <option value="C">Business</option>
                                                    <option value="F">First</option>
                                                </select>
                                              </div>
                                        </div>

                                        <div class="col-sm-6 ">
                                              <!-- ?? -->
                                              <br />
                                                     <input name="FlexibleDates" id="FlexibleDates" type="checkbox"><label for="FlexibleDates"> &nbsp;Flexible dates </label>
                                 
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
                                          <button type="text" id="booking_search_btn" class="btn btn-primary btn-block">Search!</button>
                                        </div>
                                      </div>
                                    </form>   

<!-- 
Sylvia :


&From=NYC
&QFrom=C
&To=ATL
&QTo=C

&DepartureDate=10%2F01%2F2016
&DepartureTime=00%3A01

&From1=ATL
&QFrom1=C
&To1=MIA
&QTo1=C
&DepartureDate1=10%2F07%2F2016
&DepartureTime1=00%3A01

&From2=MIA
&QFrom2=C
&To2=WAS
&QTo2=C
&DepartureDate2=10%2F14%2F2016
&DepartureTime2=00%3A01

&From3=WAS
&QFrom3=C
&To3=NYC
&QTo3=C
&DepartureDate3=10%2F21%2F2016
&DepartureTime3=00%3A01


&AdtCount=1
&ChdCount=0
&InfCount=0






Kamy:


 -->
                                                                        <!--********************* Flight multi city ********************-->                                      
 <form id="flights-multi-tab" class="tab-pane form-inline reservation-hotel active flights_form flights-multi" method="get" action="" data-form-action="https://www-amer.epower.amadeus.com/atlastravel/#" name="reservationform" target="_blank" autocomplete="off">
       
                                          <input type="hidden" name="Method" value="Search">
                                          <input type="hidden" name="Culture" value="en-US">
                                          <input type="hidden" name="FlightType" value="MultiLeg">
                                         <!--  <input type="hidden" name="IsMajorCabin" value="false">
                                          <input type="hidden" name="IsCalendarSearch" value="false"> -->
                                      <div class="row  step-flight-type">
                                            <h3>Cheap Flight Deals !</h3>
                                        <div class="col-sm-8">
                                        <input name="flightTypeMulti" value="RoundTrip" id="flightTypeRoundTripMulti" type="radio">
                                        <label for="flightTypeRoundTripMulti" class="radio-inline">Round-Trip</label>

                                        <input name="flightTypeMulti" value="OneWay" id="flightTypeOneWayMulti" type="radio">
                                        <label for="flightTypeOneWayMulti" class="radio-inline">One-Way</label>

                                        <input name="flightTypeMulti" value="MultiLeg" id="rdbMultiCityMulti" type="radio"   checked="checked">
                                        <label for="flightTypeMultiLegMulti" class="radio-inline">Multi-City</label>  
                                        </div>
                                        <div class="col-sm-4">
                                            <!-- -->
                                        </div>

                                     </div>   

                                      <div class="row">
                                        <div class="col-sm-4 step-check">

                                            <div class="col-sm-4 cc-in" style="padding-left:0">
                                              <div class="form-group">
                                                <label for="checkin">From:</label>
                                                <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content=""> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                                <div class="content-checkin-data">
                                                    <i class="fa fa-calendar infield"></i>
                                                    <input name="From" type="text" id="multicity-from" value="" class="form-control airport_search airport-complete" placeholder="Departure"/>
                                                     <input type="hidden" name="QFrom" value="C">                                              
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-sm-4 cc-out" style="padding-left:0">
                                              <div class="form-group">
                                                <label for="checkout">To:</label>
                                                <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Check-out is from 12:00"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                                <div class="content-checkin-data">
                                                    <i class="fa fa-calendar infield"></i>
                                                    <input name="To" type="text" id="multicity-to" value="" class="form-control airport-complete" placeholder="Arrival"/>
                                                    <input type="hidden" name="QTo" value="C">  
                                                </div>
                                              </div>
                                            </div>

                                            <div class="col-sm-4 cc-out">
                                              <div class="form-group">
                                                <label for="checkout">Departure Date:</label>
                                                <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Check-out is from 12:00"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                                <div class="content-checkin-data">
                                                    <i class="fa fa-calendar infield"></i>
                                                    <input name="DepartureDate" type="text" id="DepartureDate0" value="" class="form-control DepartureDate0" placeholder="Date"/>
                                                </div>
                                              </div>
                                            </div>


<?php for ( $i= 1; $i < 6; $i++ ) { ?>
                                            <input type="hidden" name="QFrom<?php echo $i;?>" value="C">
                                             <input type="hidden" name="QTo<?php echo $i;?>" value="C">
                                            
                                           <div class="col-sm-4 cc-in" style="padding-left:0">
                                              <div class="form-group">
                                                <div class="content-checkin-data">
                                                    <input name="From<?php echo $i;?>" type="text" id="from<?php echo $i;?>" value="" class="form-control airport_search airport-complete" placeholder="Departure"/>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-sm-4 cc-out" style="padding-left:0">
                                              <div class="form-group">
                                                <div class="content-checkin-data">
                                                    <input name="To<?php echo $i;?>" type="text" id="to<?php echo $i;?>" value="" class="form-control" placeholder="Arrival"/>
                                                </div>
                                              </div>
                                            </div>

                                            <div class="col-sm-4 cc-out">
                                              <div class="form-group">
                                                <div class="content-checkin-data">
                                                    <i class="fa fa-calendar infield"></i>
                                                    <input name="DepartureDate<?php echo $i;?>" type="text" id="DepartureDate<?php echo $i;?>" value="" class="form-control DepartureDate<?php echo $i;?>" placeholder="Date"/>
                                                </div>
                                              </div>
                                            </div>
<?php } ?>
                                        </div>

                                        <div class="col-sm-4 step-check">
                                         
                                        </div>
                                        <div class="col-sm-4 step-who">
                                        <div class="col-sm-6 no_padding">
                                          <div class="form-group">
                                                <label for="room">Cabin Class</label>
                                                 

                                                <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Select Cabin Class."> <i class="fa fa-info-circle fa-sm"> </i> </div>
                                                <select class="form-control" name="CabinClasses" id="CabinClasses">
                                                    <option value="">No Preference</option>
                                                    <option selected="selected" value="Y">Economy</option>
                                                    <option value="W">Premium</option>
                                                    <option value="C">Business</option>
                                                    <option value="F">First</option>
                                                </select>
                                              </div>
                                        </div>

                                        <div class="col-sm-6 ">
                                              <!-- ?? --><br />
                                              <input name="FlexibleDates" id="FlexibleDates" type="checkbox"><label for="FlexibleDates"> &nbsp;Flexible dates </label>
                                        
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
                                          <button type="submit" class="btn btn-primary btn-block">Search!</button>
                                        </div>
                                      </div>
                                    </form> 