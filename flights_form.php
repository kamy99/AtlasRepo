 <form id="flights-tab" class="tab-pane form-inline reservation-hotel active flights_form active" method="get" action="https://www-amer.epower.amadeus.com/atlastravel/" name="reservationform" target="_blank">
                                          <input type="hidden" name="Method" value="Search">
                                          <input type="hidden" name="IsMajorCabin" value="false">
                                          <input type="hidden" name="IsCalendarSearch" value="true">
                                          <!-- <input type="hidden" name="ChdCount" value="3"> -->
                                          <input type="hidden" name="Culture" value="en-US">
                                      <div class="row  step-flight-type">
                                        <div class="col-sm-8">
                                        <input name="flightType" value="RoundTrip" id="flightTypeRoundTrip" checked="checked" type="radio">
                                        <label for="flightTypeRoundTrip" class="radio-inline">Round-Trip</label>

                                        <input name="flightType" value="OneWay" id="flightTypeOneWay" type="radio">
                                        <label for="flightTypeOneWay" class="radio-inline">One-Way</label>

                                        <input name="flightType" value="MultiLeg" id="rdbMultiCity" type="radio">
                                        <label for="flightTypeMultiLeg" class="radio-inline">Multi-City</label>  
                                        </div>
                                        <div class="col-sm-4">
                                            <input name="FlexibleDates" id="FlexibleDates" type="checkbox"><label for="FlexibleDates"> &nbsp;Flexible dates </label>
                                        
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
                                                    <input name="From" type="text" id="from" value="" class="form-control airport_search" placeholder="Departure"/>
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
                                                    <input name="DepartureDate" type="text" id="checkin" value="" class="form-control checkin" placeholder="Check-in"/>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-sm-6 cc-out" style="padding-left:0">
                                              <div class="form-group return_panel">
                                                <label for="checkout">Return Date</label>
                                                <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Check-out is from 12:00"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                                <div class="content-checkin-data">
                                                    <i class="fa fa-calendar infield"></i>
                                                    <input name="ReturnDate" type="text" id="checkout" value="" class="form-control checkout" placeholder="Check-out"/>
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
                                        </div>


                                         </div>



                                        <!-- <div class="col=sm-12"> -->
<!-- Split button -->
<!-- <div class="btn-group">
  <button type="button" class="btn btn-danger">Passengers</button>
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <div class="dropdown-menu">
    

<div rel="passengers_select" class="select-box" style="display: block;">
                        <ul class="passenger_list">
                            <li>
                                <label class="select-box-label left">Adults</label>
                                <div class="passenger-ages">&nbsp;</div>
                                <div class="right"><select id="AdtCount" name="AdtCount" class="text "><option value="0">0</option><option selected="selected" value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option></select></div>
                            </li>
                            <li>
                                <label class="select-box-label left">Children:</label>
                                <div class="passenger-ages">2-11</div>
                                <div class="right"><select id="num_children" name="num_children" class="text "><option selected="selected" value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option></select></div>
                            </li>
                            <li>
                                <label class="select-box-label left">Infants:</label>
                                <div class="passenger-ages">0-2</div>
                                <div class="right"><select id="num_infants" name="num_infants" class="text "><option selected="selected" value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option></select></div>
                            </li>
                            <li>
                                <label class="select-box-label left">Infants (lap):</label>
                                <div class="passenger-ages">0-2</div>
                                <div class="right"><select id="num_infants_lap" name="num_infants_lap" class="text "><option selected="selected" value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option></select></div>
                            </li>
                        </ul>
                    </div>


  </div>
</div> -->


                                <!--         </div> -->

                                        <div class="col-sm-4 step-who" style="padding-left:0">
                                          
                                            <div class="col-sm-4 room-book" style="padding-left:0">
                                               <div class="form-group">
                                                <div class="guests-select">
                                                  <label>Adults (12+)</label>
                                                  <!-- <i class="fa fa-user infield"></i> -->
                                                  <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="+12 years"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                                      <select name="AdtCount" id="adults" class="form-control">
                                                        <option disabled="disabled" selected="selected">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
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
                                                  <label>infant (0-1)</label>
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
                                          <button id="booking_search_btn" type="submit" class="btn btn-primary btn-block">Search!</button>
                                        </div>
                                      </div>
                                    </form>