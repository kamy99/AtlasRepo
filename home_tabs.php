      <section class="top-content reservation-home4 kamy">
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
                                                    <li class="active"><a href="#hotels-tab" data-toggle="tab">HOTELS</a></li>
                                                    <li class=""><a href="#flights-tab" data-toggle="tab">FLIGHTS</a></li>
                                                    <li class=""><a href="#packages-tab" data-toggle="tab">FLIGHT &amp; HOTELS</a></li>
                                                </ul>
                                        </div>
                                    </div>
                                    <div class="tab-content">
                                    <form id="hotels-tab" class="tab-pane form-inline reservation-hotel active" method="post" name="reservationform">
                                      <div class="row">
                                        <div class="col-sm-2 step-where">
                                          <div class="form-group">
                                            <h3><span>01</span> Where?</h3>
                                            <label for="destination1">Your destination</label>
                                            <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                            <input type="text" class="form-control" placeholder="City, region" id="destination1" name="destination">
                                          </div>
                                        </div>
                                        <div class="col-sm-4 step-check">
                                          <h3><span>02</span> When?</h3>
                                            <div class="col-sm-6 cc-in" style="padding-left:0">
                                              <div class="form-group">
                                                <label for="checkin">Check-in</label>
                                                <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Check-In is from 11:00"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                                <div class="content-checkin-data">
                                                    <i class="fa fa-calendar infield"></i>
                                                    <input name="checkin" type="text" id="checkin" value="" class="form-control checkin" placeholder="Check-in"/>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-sm-6 cc-out" style="padding-left:0">
                                              <div class="form-group">
                                                <label for="checkout">Check-out</label>
                                                <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Check-out is from 12:00"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                                <div class="content-checkin-data">
                                                    <i class="fa fa-calendar infield"></i>
                                                    <input name="checkout" type="text" id="checkout" value="" class="form-control checkout" placeholder="Check-out"/>
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 step-who" style="padding-left:0">
                                            <h3><span>03</span> Who?</h3>
                                            <div class="col-sm-4 room-book" style="padding-left:0">
                                              <div class="form-group">
                                                <label for="room">Room Type</label>
                                                <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                                <select class="form-control" name="room" id="room">
                                                  <option class="opt-default" selected="selected" disabled="disabled">Rooms</option>
                                                  <option value="Single">Single room</option>
                                                  <option value="Double">Double Room</option>
                                                  <option value="Deluxe">Deluxe room</option>
                                                </select>
                                              </div>
                                            </div>
                                            <div class="col-sm-4 adult-book">
                                              <div class="form-group">
                                                <div class="guests-select">
                                                  <label>Adults</label>
                                                  <!--<i class="fa fa-user infield"></i>-->
                                                  <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="+18 years"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                                      <select name="adults" id="adults" class="form-control">
                                                        <option disabled="disabled" selected="selected">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                      </select>
                  
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-sm-4 child">
                                              <div class="form-group">
                                                <div class="guests-select">
                                                  <label>Kids</label>
                                                  <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="0 till 18 years"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                                      <select name="children" id="children" class="form-control">
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
                                          <button type="submit" class="btn btn-primary btn-block">Book Now</button>
                                        </div>
                                      </div>
                                    </form>
                                    <!--********************* Flight reservation ********************-->

                                    <form id="flights-tab" class="tab-pane form-inline reservation-flight" method="post" name="reservationform">
                                      <div class="row">
                                        <div class="col-sm-4 flight-where">
                                          <div class="form-group">
                                           <h3><span>01</span> Where?</h3>
                                           <div class="col-md-6 box-fly-book">
                                                <label for="destination1">Leaving From</label>
                                                <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                                <input type="text" class="form-control" placeholder="City, region" id="destinationflight1" name="destination">
                                            </div>
                                            <div class="col-md-6 box-fly-book box-sec-book">
                                                <label for="destination1">Going to</label>
                                                <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                                <input type="text" class="form-control" placeholder="City, region" id="destinationflight2" name="destination">
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-sm-2 fly-check">
                                          <h3><span>02</span> When?</h3>
                                              <div class="form-group">
                                               <div class="col-md-6 box-fly-book">
                                                    <label for="checkin">Check-in</label>
                                                    <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Check-In is from 11:00"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                                    <div class="content-checkin-data">
                                                        <i class="fa fa-calendar infield infieldfly1"></i>
                                                        <input name="checkin" type="text" id="checkinflight" value="" class="form-control checkin" placeholder="Check-in"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 box-fly-book box-sec-book">
                                                    <label for="checkout">Check-out</label>
                                                    <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Check-out is from 12:00"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                                    <div class="content-checkin-data">
                                                        <i class="fa fa-calendar infield infieldfly2"></i>
                                                        <input name="checkout" type="text" id="checkoutflight" value="" class="form-control checkout" placeholder="Check-out"/>
                                                    </div>
                                                </div>
                                              </div>
                                        </div>
                                        <div class="col-sm-4 fly-who">
                                            <h3><span>03</span> Who?</h3>
                                            <div class="col-sm-4 adultfly">
                                              <div class="form-group">
                                                <div class="guests-select">
                                                  <label>Adults</label>
                                                  <!--<i class="fa fa-user infield"></i>-->
                                                  <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="+18 years"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                                      <select name="adults" id="Select2" class="form-control">
                                                        <option disabled="disabled" selected="selected">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                      </select>
                  
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-sm-4 child md-ch">
                                              <div class="form-group">
                                                <div class="guests-select">
                                                  <label>Kids</label>
                                                  <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="0 till 18 years"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                                      <select name="children" id="Select3" class="form-control">
                                                        <option value="0">0</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                      </select>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-sm-4 child">
                                              <div class="form-group">
                                                <div class="guests-select">
                                                  <label>Infants</label>
                                                  <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="0 till 18 years"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                                      <select name="children" id="Select1" class="form-control">
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
                                          <button type="submit" class="btn btn-primary btn-block">Book Now</button>
                                        </div>
                                      </div>
                                    </form>
<!-- Packages Form -->

<form id="packages-tab" class="tab-pane form-inline reservation-hotel" method="post" name="reservationform">
                                      <div class="row">
                                        <div class="col-sm-2 step-where">
                                          <div class="form-group">
                                            <h3><span>01</span> Where?</h3>
                                            <label for="destination1">Your vacation destination</label>
                                            <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                            <input type="text" class="form-control" placeholder="City, region" id="destination1" name="destination">
                                          </div>
                                        </div>
                                        <div class="col-sm-4 step-check">
                                          <h3><span>02</span> When?</h3>
                                            <div class="col-sm-6 cc-in" style="padding-left:0">
                                              <div class="form-group">
                                                <label for="checkin">Check-in</label>
                                                <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Check-In is from 11:00"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                                <div class="content-checkin-data">
                                                    <i class="fa fa-calendar infield"></i>
                                                    <input name="checkin" type="text" id="checkin" value="" class="form-control checkin" placeholder="Check-in"/>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-sm-6 cc-out" style="padding-left:0">
                                              <div class="form-group">
                                                <label for="checkout">Check-out</label>
                                                <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Check-out is from 12:00"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                                <div class="content-checkin-data">
                                                    <i class="fa fa-calendar infield"></i>
                                                    <input name="checkout" type="text" id="checkout" value="" class="form-control checkout" placeholder="Check-out"/>
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 step-who" style="padding-left:0">
                                            <h3><span>03</span> Who?</h3>
                                            <div class="col-sm-4 room-book" style="padding-left:0">
                                              <div class="form-group">
                                                <label for="room">Room Type</label>
                                                <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                                <select class="form-control" name="room" id="room">
                                                  <option class="opt-default" selected="selected" disabled="disabled">Rooms</option>
                                                  <option value="Single">Single room</option>
                                                  <option value="Double">Double Room</option>
                                                  <option value="Deluxe">Deluxe room</option>
                                                </select>
                                              </div>
                                            </div>
                                            <div class="col-sm-4 adult-book">
                                              <div class="form-group">
                                                <div class="guests-select">
                                                  <label>Adults</label>
                                                  <!--<i class="fa fa-user infield"></i>-->
                                                  <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="+18 years"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                                      <select name="adults" id="adults" class="form-control">
                                                        <option disabled="disabled" selected="selected">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                      </select>
                  
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-sm-4 child">
                                              <div class="form-group">
                                                <div class="guests-select">
                                                  <label>Kids</label>
                                                  <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="0 till 18 years"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                                      <select name="children" id="children" class="form-control">
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
                                          <button type="submit" class="btn btn-primary btn-block">Book Now</button>
                                        </div>
                                      </div>
                                    </form>
<!-- eof Packages -->
                                    </div><!--Close tab-content form-->
                                  </div>
                              </div>
                      </section>
                      <div class="col-md-6 meteo-top-travel meteo-slider-top">
                            <div id="meteo1"></div>
                        </div>
              </div>
            </div>
           </div>
           </div>
           <div class="home-page removeslide">
             <!-- SLIDER -->
                <div class="fullwidthbanner-container">
                    <div class="fullwidthbanner">
                        <ul>
                            <!-- FADE -->
                            <li data-transition="fade" data-slotamount="10" data-thumb="">
                                <img src="images/slider8.jpg" alt=""/>
                            </li>

                            <!-- SLIDEUP -->
                            <li data-transition="slideup" data-slotamount="7" data-thumb="">
                                <img src="images/slider6.jpg" alt=""/>
                            </li>

                            <!-- SLIDEDOWN -->
                            <li data-transition="slidedown" data-slotamount="7" data-thumb="">
                                <img src="images/slider7.jpg" alt=""/>
                            </li>
                        </ul>
                        <div class="tp-bannertimer"></div>
                    </div>
                </div>
                <!-- SLIDER END -->
           </div>
        </div>
</section>
