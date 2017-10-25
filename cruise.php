<?php include('functions.php');
include('search_functions.php');
buildTitle('Cruise');
buildMenu('tools', 'default');
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
                                                    <li class="active"><a id="flights_tab" href="#flights-tab" data-toggle="tab"><i class="fa fa-plane">&nbsp;</i>FLIGHTS</a></li>
                                                   <!--  <li class=""><a id="hotels_tab" href="#hotels-tab" data-toggle="tab"><i class="fa fa-hotel">&nbsp;</i>HOTELS</a></li>
                                                    <li class=""><a id="flihot_tab" href="#packages-tab" data-toggle="tab"><i class="fa fa-suitcase">&nbsp;</i>FLIGHT + HOTEL</a></li>
                                                    <li class=""><a id="cars_tab" href="#cars-tab" data-toggle="tab"><i class="fa fa-car">&nbsp;</i>CARS</a></li> -->
                                                </ul>
                                        </div>
                                    </div>
                                    <div class="tab-content">
                                       <!-- 

https://www-amer.epower.amadeus.com/atlastravel/#Method=Search&IsMajorCabin=false&IsCalendarSearch=true&Culture=en-US&flightType=RoundTrip&From=YTO&To=HOU&DepartureDate=04%2F29%2F2016&ReturnDate=05%2F29%2F2016&CabinClasses=Y&AdtCount=3&ChdCount=0&InfCount=0

  -->

                                    <!--********************* Flight reservation ********************-->                                      
 <form id="flights-tab" class="tab-pane form-inline reservation-hotel active flights_form active" method="get" action="https://www-amer.epower.amadeus.com/atlastravel/" name="reservationform" target="_blank" autocomplete="off">
                                          <input name="Method" value="Search" type="hidden">
                                          <input name="IsMajorCabin" value="false" type="hidden">
                                          <input name="IsCalendarSearch" value="false" type="hidden">
                                          <input name="Culture" value="en-US" type="hidden">
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
                                                <div title="" data-original-title="" class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content=""> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                                <div class="content-checkin-data">
                                                    <i class="fa fa-calendar infield"></i>
                                                    <input autocomplete="off" name="From" id="from" value="" class="form-control airport_search airport-complete ui-autocomplete-input" placeholder="Departure" type="text">
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-sm-6 cc-out" style="padding-left:0">
                                              <div class="form-group">
                                                <label for="checkout">To:</label>
                                                <div title="" data-original-title="" class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Check-out is from 12:00"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                                <div class="content-checkin-data">
                                                    <i class="fa fa-calendar infield"></i>
                                                    <input autocomplete="off" name="To" id="to" value="" class="form-control ui-autocomplete-input" placeholder="Arrival" type="text">
                                                </div>
                                              </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4 step-check">
                                         
                                            <div class="col-sm-6 cc-in" style="padding-left:0">
                                              <div class="form-group">
                                                <label for="checkin">Depart Date</label>
                                                <div title="" data-original-title="" class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Check-In is from 11:00"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                                <div class="content-checkin-data">
                                                    <i class="fa fa-calendar infield"></i>
                                                    <input name="DepartureDate" id="checkin" value="" class="form-control checkin hasDatepicker" placeholder="Check-in" type="text">
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-sm-6 cc-out flights-return-date" style="padding-left:0">
                                              <div class="form-group return_panel">
                                                <label for="checkout">Return Date</label>
                                                <div title="" data-original-title="" class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Check-out is from 12:00"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                                <div class="content-checkin-data">
                                                    <i class="fa fa-calendar infield"></i>
                                                    <input name="ReturnDate" id="checkout" value="" class="form-control checkout hasDatepicker" placeholder="Check-out" type="text">
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 step-who">
                                        <div class="col-sm-6 no_padding">
                                          <div class="form-group">
                                                <label for="room">Cabin Class</label>
                                                <div title="" data-original-title="" class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Select Cabin Class."> <i class="fa fa-info-circle fa-sm"> </i> </div>
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
                                              <br>
                                                     <input name="FlexibleDates" id="FlexibleDates" type="checkbox"><label for="FlexibleDates"> &nbsp;Flexible dates </label>
                                 
                                              </div>


                                         </div>

                                        <div class="col-sm-4 step-who" style="padding-left:0">
                                          
                                            <div class="col-sm-4 room-book" style="padding-left:0">
                                               <div class="form-group">
                                                <div class="guests-select">
                                                  <label>Adults (12+)</label>
                                                  <!-- <i class="fa fa-user infield"></i> -->
                                                  <div title="" data-original-title="" class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="+12 years"> <i class="fa fa-info-circle fa-lg"> </i> </div>
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
                                                  <div title="" data-original-title="" class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="2 till 11 years"> <i class="fa fa-info-circle fa-lg"> </i> </div>
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
                                                  <div title="" data-original-title="" class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="0 till 1 years"> <i class="fa fa-info-circle fa-lg"> </i> </div>
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
                                                                        <!--********************* Flight multi city ********************-->                                      
 <form style="display: none;" id="flights-multi-tab" class="tab-pane form-inline reservation-hotel active flights_form flights-multi" method="get" action="https://www-amer.epower.amadeus.com/atlastravel/" name="reservationform" target="_blank" autocomplete="off">
       
                                          <input name="Method" value="Search" type="hidden">
                                          <input name="Culture" value="en-US" type="hidden">
                                          <input name="FlightType" value="MultiLeg" type="hidden">
                                         <!--  <input type="hidden" name="IsMajorCabin" value="false">
                                          <input type="hidden" name="IsCalendarSearch" value="false"> -->
                                      <div class="row  step-flight-type">
                                            <h3>Cheap Flight Deals !</h3>
                                        <div class="col-sm-8">
                                        <input name="flightTypeMulti" value="RoundTrip" id="flightTypeRoundTripMulti" type="radio">
                                        <label for="flightTypeRoundTripMulti" class="radio-inline">Round-Trip</label>

                                        <input name="flightTypeMulti" value="OneWay" id="flightTypeOneWayMulti" type="radio">
                                        <label for="flightTypeOneWayMulti" class="radio-inline">One-Way</label>

                                        <input name="flightTypeMulti" value="MultiLeg" id="rdbMultiCityMulti" checked="checked" type="radio">
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
                                                <div title="" data-original-title="" class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content=""> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                                <div class="content-checkin-data">
                                                    <i class="fa fa-calendar infield"></i>
                                                    <input autocomplete="off" name="From" id="multicity-from" value="" class="form-control airport_search airport-complete ui-autocomplete-input" placeholder="Departure" type="text">
                                                     <input name="QFrom" value="C" type="hidden">                                              
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-sm-4 cc-out" style="padding-left:0">
                                              <div class="form-group">
                                                <label for="checkout">To:</label>
                                                <div title="" data-original-title="" class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Check-out is from 12:00"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                                <div class="content-checkin-data">
                                                    <i class="fa fa-calendar infield"></i>
                                                    <input autocomplete="off" name="To" id="multicity-to" value="" class="form-control airport-complete ui-autocomplete-input" placeholder="Arrival" type="text">
                                                    <input name="QTo" value="C" type="hidden">  
                                                </div>
                                              </div>
                                            </div>

                                            <div class="col-sm-4 cc-out">
                                              <div class="form-group">
                                                <label for="checkout">Departure Date:</label>
                                                <div title="" data-original-title="" class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Check-out is from 12:00"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                                <div class="content-checkin-data">
                                                    <i class="fa fa-calendar infield"></i>
                                                    <input name="DepartureDate" id="DepartureDate0" value="" class="form-control DepartureDate0 hasDatepicker" placeholder="Date" type="text">
                                                </div>
                                              </div>
                                            </div>


                                            <input name="QFrom1" value="C" type="hidden">
                                             <input name="QTo1" value="C" type="hidden">
                                            
                                           <div class="col-sm-4 cc-in" style="padding-left:0">
                                              <div class="form-group">
                                                <div class="content-checkin-data">
                                                    <input autocomplete="off" name="From1" id="from1" value="" class="form-control airport_search airport-complete ui-autocomplete-input" placeholder="Departure" type="text">
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-sm-4 cc-out" style="padding-left:0">
                                              <div class="form-group">
                                                <div class="content-checkin-data">
                                                    <input autocomplete="off" name="To1" id="to1" value="" class="form-control ui-autocomplete-input" placeholder="Arrival" type="text">
                                                </div>
                                              </div>
                                            </div>

                                            <div class="col-sm-4 cc-out">
                                              <div class="form-group">
                                                <div class="content-checkin-data">
                                                    <i class="fa fa-calendar infield"></i>
                                                    <input name="DepartureDate1" id="DepartureDate1" value="" class="form-control DepartureDate1 hasDatepicker" placeholder="Date" type="text">
                                                </div>
                                              </div>
                                            </div>
                                            <input name="QFrom2" value="C" type="hidden">
                                             <input name="QTo2" value="C" type="hidden">
                                            
                                           <div class="col-sm-4 cc-in" style="padding-left:0">
                                              <div class="form-group">
                                                <div class="content-checkin-data">
                                                    <input autocomplete="off" name="From2" id="from2" value="" class="form-control airport_search airport-complete ui-autocomplete-input" placeholder="Departure" type="text">
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-sm-4 cc-out" style="padding-left:0">
                                              <div class="form-group">
                                                <div class="content-checkin-data">
                                                    <input autocomplete="off" name="To2" id="to2" value="" class="form-control ui-autocomplete-input" placeholder="Arrival" type="text">
                                                </div>
                                              </div>
                                            </div>

                                            <div class="col-sm-4 cc-out">
                                              <div class="form-group">
                                                <div class="content-checkin-data">
                                                    <i class="fa fa-calendar infield"></i>
                                                    <input name="DepartureDate2" id="DepartureDate2" value="" class="form-control DepartureDate2 hasDatepicker" placeholder="Date" type="text">
                                                </div>
                                              </div>
                                            </div>
                                            <input name="QFrom3" value="C" type="hidden">
                                             <input name="QTo3" value="C" type="hidden">
                                            
                                           <div class="col-sm-4 cc-in" style="padding-left:0">
                                              <div class="form-group">
                                                <div class="content-checkin-data">
                                                    <input autocomplete="off" name="From3" id="from3" value="" class="form-control airport_search airport-complete ui-autocomplete-input" placeholder="Departure" type="text">
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-sm-4 cc-out" style="padding-left:0">
                                              <div class="form-group">
                                                <div class="content-checkin-data">
                                                    <input autocomplete="off" name="To3" id="to3" value="" class="form-control ui-autocomplete-input" placeholder="Arrival" type="text">
                                                </div>
                                              </div>
                                            </div>

                                            <div class="col-sm-4 cc-out">
                                              <div class="form-group">
                                                <div class="content-checkin-data">
                                                    <i class="fa fa-calendar infield"></i>
                                                    <input name="DepartureDate3" id="DepartureDate3" value="" class="form-control DepartureDate3 hasDatepicker" placeholder="Date" type="text">
                                                </div>
                                              </div>
                                            </div>
                                            <input name="QFrom4" value="C" type="hidden">
                                             <input name="QTo4" value="C" type="hidden">
                                            
                                           <div class="col-sm-4 cc-in" style="padding-left:0">
                                              <div class="form-group">
                                                <div class="content-checkin-data">
                                                    <input autocomplete="off" name="From4" id="from4" value="" class="form-control airport_search airport-complete ui-autocomplete-input" placeholder="Departure" type="text">
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-sm-4 cc-out" style="padding-left:0">
                                              <div class="form-group">
                                                <div class="content-checkin-data">
                                                    <input autocomplete="off" name="To4" id="to4" value="" class="form-control ui-autocomplete-input" placeholder="Arrival" type="text">
                                                </div>
                                              </div>
                                            </div>

                                            <div class="col-sm-4 cc-out">
                                              <div class="form-group">
                                                <div class="content-checkin-data">
                                                    <i class="fa fa-calendar infield"></i>
                                                    <input name="DepartureDate4" id="DepartureDate4" value="" class="form-control DepartureDate4 hasDatepicker" placeholder="Date" type="text">
                                                </div>
                                              </div>
                                            </div>
                                            <input name="QFrom5" value="C" type="hidden">
                                             <input name="QTo5" value="C" type="hidden">
                                            
                                           <div class="col-sm-4 cc-in" style="padding-left:0">
                                              <div class="form-group">
                                                <div class="content-checkin-data">
                                                    <input autocomplete="off" name="From5" id="from5" value="" class="form-control airport_search airport-complete ui-autocomplete-input" placeholder="Departure" type="text">
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-sm-4 cc-out" style="padding-left:0">
                                              <div class="form-group">
                                                <div class="content-checkin-data">
                                                    <input autocomplete="off" name="To5" id="to5" value="" class="form-control ui-autocomplete-input" placeholder="Arrival" type="text">
                                                </div>
                                              </div>
                                            </div>

                                            <div class="col-sm-4 cc-out">
                                              <div class="form-group">
                                                <div class="content-checkin-data">
                                                    <i class="fa fa-calendar infield"></i>
                                                    <input name="DepartureDate5" id="DepartureDate5" value="" class="form-control DepartureDate5 hasDatepicker" placeholder="Date" type="text">
                                                </div>
                                              </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4 step-check">
                                         
                                        </div>
                                        <div class="col-sm-4 step-who">
                                        <div class="col-sm-6 no_padding">
                                          <div class="form-group">
                                                <label for="room">Cabin Class</label>
                                                 

                                                <div title="" data-original-title="" class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Select Cabin Class."> <i class="fa fa-info-circle fa-sm"> </i> </div>
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
                                              <!-- ?? --><br>
                                              <input name="FlexibleDates" id="FlexibleDates" type="checkbox"><label for="FlexibleDates"> &nbsp;Flexible dates </label>
                                        
                                        </div>


                                         </div>

                                        <div class="col-sm-4 step-who" style="padding-left:0">
                                          
                                            <div class="col-sm-4 room-book" style="padding-left:0">
                                               <div class="form-group">
                                                <div class="guests-select">
                                                  <label>Adults (12+)</label>
                                                  <!-- <i class="fa fa-user infield"></i> -->
                                                  <div title="" data-original-title="" class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="+12 years"> <i class="fa fa-info-circle fa-lg"> </i> </div>
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
                                                  <div title="" data-original-title="" class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="2 till 11 years"> <i class="fa fa-info-circle fa-lg"> </i> </div>
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
                                                  <div title="" data-original-title="" class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="0 till 1 years"> <i class="fa fa-info-circle fa-lg"> </i> </div>
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
<!-- 
Params from Sylvia

https://www-amer.epower.amadeus.com/atlastravel/#ProviderSelection=OnlyAmadeus&Culture=en-US&CityCode=MIA&CheckInDate=06%2F15%2F2016&CheckOutDate=06%2F17%2F2016&RoomAdultChild=1&Method=HotelSearch

//////


 -->

                                    <!--********************* Hotel reservation ********************-->
                                    <form id="hotels-tab" class="tab-pane form-inline reservation-hotel" method="get" name="hotels_form" action="https://www-amer.epower.amadeus.com/atlastravel/" target="_blank">
                                           <input name="ProviderSelection" value="OnlyAmadeus" type="hidden">
                                           <input name="Method" value="HotelSearch" type="hidden">
                                          <input name="HotelType" value="CityAirport" type="hidden">
                                           <input name="Page" value="HotelResult" type="hidden"> 
                                          <input name="Culture" value="en-US" type="hidden">      



                                      <div class="row">
                                        <div class="col-sm-2 step-where">
                                            <h3>Great Hotel Deals</h3>
                                        </div>
                                        <div class="col-sm-4 step-check">
                                            <div class="col-sm-6 cc-in" style="padding-left:0">
                                              <div class="form-group">
                                                <!-- <input name="CityCode" id="CityCode_Value" type="text" value="">   -->
                                                <label for="checkin">City:</label>
                                                <div title="" data-original-title="" class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content=""> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                                <div class="content-checkin-data">
                                                    <i class="fa fa-calendar infield"></i>
                                                    <input autocomplete="off" name="CityCode" id="hotels-from" value="" class="form-control airport_search ui-autocomplete-input" placeholder="Destination" type="text">
                                                </div>
                                              </div>
                                            </div>        
                                        </div>

                                        <div class="col-sm-4 step-check">
                                         
                                            <div class="col-sm-6 cc-in" style="padding-left:0">
                                              <div class="form-group">
                                                <label for="checkin">From Date</label>
                                                <div title="" data-original-title="" class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Check-In is from 11:00"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                                <div class="content-checkin-data">
                                                    <i class="fa fa-calendar infield"></i>
                                                    <input name="CheckInDate" id="hotels-checkin" value="" class="form-control hotels-checkin hasDatepicker" placeholder="Check-in" type="text">
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-sm-6 cc-out" style="padding-left:0">
                                              <div class="form-group return_panel">
                                                <label for="checkout">To Date</label>
                                                <div title="" data-original-title="" class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Check-out is from 12:00"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                                <div class="content-checkin-data">
                                                    <i class="fa fa-calendar infield"></i>
                                                    <input name="CheckOutDate" id="hotels-checkout" value="" class="form-control hotels-checkout hasDatepicker" placeholder="Check-out" type="text">
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
                                                  <div title="" data-original-title="" class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="+12 years"> <i class="fa fa-info-circle fa-lg"> </i> </div>
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
                                          <button type="submit" class="btn btn-primary btn-block">Search</button>
                                        </div>
                                      </div>



                                    </form>                                                  
                                    <!--********************* Packages reservation ********************-->
                                    <form id="packages-tab" class="tab-pane form-inline reservation-hotel" method="get" name="packages_form" action="https://www-amer.epower.amadeus.com/atlastravel/" target="_blank">
                                          

                                          <!-- <input type="hidden" name="IsMajorCabin" value="False"> -->
                                          <input name="Method" value="PackageSearch" type="hidden">
                                          <input name="Culture" value="en-US" type="hidden">
                                          <!-- <input type="hidden" name="ActiveTab" value="PackageFlightResult"> -->                                  
                                          <input name="Page" value="Package" type="hidden"> 
                                          <input name="QFrom" value="C" type="hidden">
                                          <input name="QTo" value="C" type="hidden">

                                          <input name="PrefAirline1" value="" type="hidden">
                                          <input name="PrefAirline2" value="" type="hidden">
                                          <input name="PrefAirline3" value="" type="hidden">
                                          <input name="CabinClass" value="" type="hidden">
                                          <input name="RoomAdultChild" value="1" type="hidden">
                                          <input name="CityCode" id="CityCode" value="" type="hidden">
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
                                                <div title="" data-original-title="" class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content=""> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                                <div class="content-checkin-data">
                                                    <i class="fa fa-calendar infield"></i>
                                                    <input autocomplete="off" name="From" id="packages-from" value="" class="form-control airport_search airport-complete ui-autocomplete-input" placeholder="Departure" type="text">
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-sm-6 cc-out" style="padding-left:0">
                                              <div class="form-group">
                                                <label for="checkout">To:</label>
                                                <div title="" data-original-title="" class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Check-out is from 12:00"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                                <div class="content-checkin-data">
                                                    <i class="fa fa-calendar infield"></i>
                                                    <input autocomplete="off" name="To" id="packages-to" value="" class="form-control ui-autocomplete-input" placeholder="Arrival" type="text">
                                                </div>
                                              </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4 step-check">
                                         
                                            <div class="col-sm-6 cc-in" style="padding-left:0">
                                              <div class="form-group">
                                                <label for="checkin">Depart Date</label>
                                                <div title="" data-original-title="" class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Check-In is from 11:00"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                                <div class="content-checkin-data">
                                                    <i class="fa fa-calendar infield"></i>
                                                    <input name="DepartureDate" id="package-checkin" value="" class="form-control package-checkin hasDatepicker" placeholder="Check-in" type="text">
                                                    <input id="CheckInDate" name="CheckInDate" value="" type="hidden">
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-sm-6 cc-out" style="padding-left:0">
                                              <div class="form-group return_panel">
                                                <label for="checkout">Return Date</label>
                                                <div title="" data-original-title="" class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Check-out is from 12:00"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                                <div class="content-checkin-data">
                                                    <i class="fa fa-calendar infield"></i>
                                                    <input name="ReturnDate" id="package-checkout" value="" class="form-control package-checkout hasDatepicker" placeholder="Check-out" type="text">
                                                     <input id="CheckOutDate" name="CheckOutDate" value="" type="hidden">
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 step-who">
                                        <div class="col-sm-6 no_padding">
                                          <div class="form-group">
                                                <label for="room">Cabin Class</label>
                                                <div title="" data-original-title="" class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Select Cabin Class."> <i class="fa fa-info-circle fa-sm"> </i> </div>
                                                <select class="form-control" name="CabinClasses" id="CabinClasses">
                                                    <option selected="selected" value="">No Preference</option>
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
                                                  <div title="" data-original-title="" class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="+12 years"> <i class="fa fa-info-circle fa-lg"> </i> </div>
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
                                                  <div title="" data-original-title="" class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="2 till 11 years"> <i class="fa fa-info-circle fa-lg"> </i> </div>
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
                                                  <div title="" data-original-title="" class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="0 till 1 years"> <i class="fa fa-info-circle fa-lg"> </i> </div>
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
                                          <button type="submit" id="package_submit" class="btn btn-primary btn-block">Search!</button>
                                        </div>
                                      </div>
  
                                    </form>                                      


<!--********************* Car reservation ********************-->
                                    <form id="cars-tab" class="tab-pane form-inline reservation-hotel" method="get" name="cars_form" action="https://www-amer.epower.amadeus.com/atlastravel/" target="_blank">

                                           <input name="Method" value="CarSearch" type="hidden">

                                      <div class="row">
                                        <div class="col-sm-2 step-where">
                                            <h3>Great Car Deals</h3>
                                        </div>
                                        <div class="col-sm-4 step-check">
                                            <div class="col-sm-6 cc-in" style="padding-left:0">
                                              <div class="form-group">
                                                <label for="checkin">Pick-up City/Airport:</label>
                                                <div title="" data-original-title="" class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content=""> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                                <div class="content-checkin-data">
                                                    <i class="fa fa-calendar infield"></i>
                                                    <input autocomplete="off" name="PickUpLocation" id="cars-from" value="" class="form-control airport_search ui-autocomplete-input" placeholder="City/Airport" type="text">
                                                </div>
                                              </div>
                                            </div> 

                                            <div class="col-sm-6 cc-in" style="padding-left:0">
                                              <div class="form-group">
                                                <label for="checkin">Drop-off City/Airport:</label>
                                                <div title="" data-original-title="" class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content=""> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                                <div class="content-checkin-data">
                                                    <i class="fa fa-calendar infield"></i>
                                                    <input autocomplete="off" name="DropOffLocation" id="cars-to" value="" class="form-control airport_search ui-autocomplete-input" placeholder="City/Airport" type="text">
                                                </div>
                                              </div>
                                            </div> 

                                        </div>

                                        <div class="col-sm-4 step-check">
                                         
                                            <div class="col-sm-6 cc-in" style="padding-left:0">
                                              <div class="form-group">
                                                <label for="checkin">Pick-up Date</label>
                                                <div title="" data-original-title="" class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Check-In is from 11:00"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                                <div class="content-checkin-data">
                                                    <i class="fa fa-calendar infield"></i>
                                                    <input name="PickUpDate" id="cars-checkin" value="" class="form-control cars-checkin hasDatepicker" placeholder="Check-in" type="text">
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-sm-6 cc-out" style="padding-left:0">
                                              <div class="form-group return_panel">
                                                <label for="checkout">Drop-off Date</label>
                                                <div title="" data-original-title="" class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Check-out is from 12:00"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                                <div class="content-checkin-data">
                                                    <i class="fa fa-calendar infield"></i>
                                                    <input name="DropOffDate" id="cars-checkout" value="" class="form-control cars-checkout hasDatepicker" placeholder="Check-out" type="text">
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
                                          <button type="submit" class="btn btn-primary btn-block">Search!</button>
                                        </div>
                                      </div>
                                                                             
                                    </div></form><!--Close tab-content form-->
                                  </div>
                              </div>
                      </div></section>
                      <div class="col-md-6 meteo-top-travel meteo-slider-top">
                                                        <div id="cruise_promos">
                                                          <h2>Cruise</h2>
                             
 <p>Treat yourself to an adventure and choose one of our cruise products. Whatever your taste is, we have the right cruise to tantalize your senses.</p>

 <p>Atlas.Travel cruising offers a vast range of extraordinary cruise lines to the best-loved destinations. We have access to discounted cruise special deals, which means you are assured to the best value for every dollar spent on your vacation cruise.</p>

 <p>Choose your cruise vacation from your choice of cruise lines with great deals and discounts to the Caribbean, Mediterranean, Central and South America, Alaska, Europe and more.</p>

 <p>Search online, e-mail us or give us a call today to find out about the perfect cruise holiday for you.   </p>
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
                                <div class="slotholder"><img style="width: 1490px; height: 838.125px; position: absolute; left: -25px; opacity: 0;" class="defaultimg" src="images/sliders/cruise_1.jpg" alt=""></div>
                            </li>

                            <!-- SLIDEUP -->
                            <li style="z-index: 20; visibility: visible; left: 0px; top: 0px; opacity: 1;" data-transition="slideup" data-slotamount="7" data-thumb="">
                                <div class="slotholder"><img style="width: 1638.23px; height: 750px; position: absolute; left: -99px; opacity: 1;" class="defaultimg" src="images/sliders/cruise_2.jpg" alt=""></div>
                            </li>

                            <!-- SLIDEDOWN -->
                            <li style="visibility: visible; left: 0px; top: 0px; z-index: 16;" data-transition="slidedown" data-slotamount="7" data-thumb="">
                                <div class="slotholder"><img style="width: 1446.33px; height: 750px; position: absolute; left: -3px; opacity: 0;" class="defaultimg" src="images/sliders/cruise_3.jpg" alt=""></div>
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