                             <form id="hotels-tab" class="tab-pane form-inline reservation-flight" method="post" name="reservationform">
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