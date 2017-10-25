<?php include('header.php');
buildTitle('');buildMenu('tours');
 ?>
<div class="container">
        
        <div class="bookingContainer">
            <div class="row">
                <div class="col-sm-12">
                    <div class="bookingHead">
                        <h2>Group Request</h2>
                    </div><!-- /bookingHead -->
                </div><!-- /col -->
                
                <form novalidate="novalidate" id="bookingForm" class="generalForm" action="#" method="post">
                    <div class="col-sm-6">
                        <div class="bookingInfos">
                            <h3>Travel Information</h3>
                            <h4>TRAVELLER INFOMATION</h4>
                            <div class="row">
                                <div class="col-md-4 col-sm-12"><label>First Name</label></div>
                                <div class="col-md-8 col-sm-12"><input class="required" name="fname" type="text"></div>
                                <div class="col-md-4 col-sm-12"><label>Last Name</label></div>
                                <div class="col-md-8 col-sm-12"><input class="required" name="lname" type="text"></div>
                                <div class="col-md-4 col-sm-12"><label>Your Email</label></div>
                                <div class="col-md-8 col-sm-12"><input class="required email" name="email" type="text"></div>
                            </div><!-- /row -->
                            
                            <h4 class="imgTitle clearfix"><span>CREDIT CARD INFOMATION</span> <img src="assets/images/credit-cards.png" alt="credit cards"></h4>
                            <div class="row">
                                <div class="col-md-4 col-sm-12"><label>Name on Card</label></div>
                                <div class="col-md-8 col-sm-12"><input class="required" name="cardName" type="text"></div>
                                <div class="col-md-4 col-sm-12"><label>Card Number</label></div>
                                <div class="col-md-8 col-sm-12"><input class="required" name="cardNumber" type="text"></div>
                                <div class="col-md-4 col-sm-12"><label>Expiration Date</label></div>
                                <div class="clearfix marginBottom10">
                                    <div class="col-md-4 col-sm-12 viewSelect">
                                        <select style="width: 98px; position: absolute; opacity: 0; height: 32px; font-size: 13px;" name="cardExpMon" class="required customSelectInput hasCustomSelect">
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select><span style="display: inline-block;" class="customSelect required customSelectInput"><span style="width: 59px; display: inline-block;" class="customSelectInner">01</span></span>
                                    </div>
                                    <div class="col-md-4 col-sm-12 viewSelect">
                                        <select style="width: 98px; position: absolute; opacity: 0; height: 32px; font-size: 13px;" name="cardExpYear" class="required customSelectInput hasCustomSelect">
                                            <option value="2013">2013</option>
                                            <option value="2014">2014</option>
                                            <option value="2015">2015</option>
                                            <option value="2016">2016</option>
                                        </select><span style="display: inline-block;" class="customSelect required customSelectInput"><span style="width: 59px; display: inline-block;" class="customSelectInner">2013</span></span>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12"><label>Security Code</label></div>
                                <div class="col-md-8 col-sm-12"><input class="required" name="securityCode" type="text"></div>
                            </div><!-- /row -->
                            
                            <h4>BILLING ADDRESS</h4>
                            <div class="row">
                                <div class="col-md-4 col-sm-12"><label>Country</label></div>
                                <div class="col-md-8 col-sm-12"><input class="required" name="country" type="text"></div>
                                <div class="col-md-4 col-sm-12"><label>City</label></div>
                                <div class="col-md-8 col-sm-12"><input class="required" name="city" type="text"></div>
                                <div class="col-md-4 col-sm-12"><label>Address</label></div>
                                <div class="col-md-8 col-sm-12"><input class="required" name="address" type="text"></div>
                                <div class="col-md-4 col-sm-12"><label>State</label></div>
                                <div class="col-md-8 col-sm-12"><input class="required" name="state" type="text"></div>
                                <div class="col-md-4 col-sm-12"><label>Zip Code</label></div>
                                <div class="col-md-8 col-sm-12"><input class="required" name="zipcode" type="text"></div>
                            </div><!-- /row -->
                        </div><!-- bookingInfos -->
                    </div><!-- /col -->
                    <div class="col-sm-6">
                        <div class="bookingInfos bookingInfos2">
                            <h3>Hotel Summary</h3>
                            <h4>SUMMARY</h4>
                            <div class="row">
                                <div class="col-md-4 col-sm-12 col-xs-6"><label>Room</label></div>
                                <div class="col-md-8 col-sm-12 col-xs-6"><input name="room" value="Single Room" type="hidden"><span>Single Room</span></div>
                            </div><!-- /row -->
                            <div class="row">
                                <div class="col-md-4 col-sm-12 col-xs-6"><label>Price per night</label></div>
                                <div class="col-md-8 col-sm-12 col-xs-6"><input name="price" value="$360" type="hidden"><span>$360</span></div>
                            </div><!-- /row -->
                            <div class="row">
                                <div class="col-md-4 col-sm-12 col-xs-6"><label>Check in </label></div>
                                <div class="col-md-8 col-sm-12 col-xs-6"><input name="checkin" value="20 - Feb - 2013" type="hidden"><span>20 - Feb - 2013</span></div>
                            </div><!-- /row -->
                            <div class="row">
                                <div class="col-md-4 col-sm-12 col-xs-6"><label>Check out</label></div>
                                <div class="col-md-8 col-sm-12 col-xs-6"><input name="checkout" value="22 - Feb - 2013" type="hidden"><span>22 - Feb - 2013</span></div>
                            </div><!-- /row -->
                            
                            <h4 class="marginTop20">CHARGES</h4>
                            <div class="row"> 
                                <div class="col-md-4 col-sm-12 col-xs-6"><label>2 Nights</label></div>
                                <div class="col-md-8 col-sm-12 col-xs-6"><input name="nights" value="Single Room" type="hidden"><span>Single Room</span></div>
                            </div><!-- /row -->
                            <div class="row">
                                <div class="col-md-4 col-sm-12 col-xs-6"><label>VAT</label></div>
                                <div class="col-md-8 col-sm-12 col-xs-6"><input name="vat" value="10%" type="hidden"><span>10%</span></div>
                            </div><!-- /row -->
                            <div class="row">
                                <div class="col-md-4 col-sm-12 col-xs-6"><label>Fees</label></div>
                                <div class="col-md-8 col-sm-12 col-xs-6"><input name="fees" value="Included" type="hidden"><span>Included</span></div>
                            </div><!-- /row -->
                            <div class="row lastRow">
                                <div class="col-md-4 col-sm-12 col-xs-6"><label>Total</label></div>
                                <div class="col-md-8 col-sm-12 col-xs-6"><input name="total" value="$680.00" type="hidden"><span>$680.00</span></div>
                            </div><!-- /row -->
                            
                            <h4>ACCEPT AND CONFIRM</h4>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div style="background-image: url(&quot;assets/images/checkbox.png&quot;); width: 15px; height: 13px; cursor: pointer; background-position: 0px 0px;" class="required customCheck customCheck2 styledCheckbox"><input style="display: none;" class="required customCheck customCheck2" name="accept" type="checkbox"></div><em>I agree to the booking conditions.</em>
                                </div>
                            </div><!-- /row -->
                            <div class="row grandtotal">
                                <div class="col-md-4 col-sm-12 col-xs-6"><label>Grand Total</label></div>
                                <div class="col-md-8 col-sm-12 col-xs-6"><input name="grandtotal" value="$680.00" type="hidden"><span>$680.00</span></div>
                            </div><!-- /row -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <input name="submit" value="BOOK NOW" type="submit">
                                </div>
                            </div><!-- /row -->
                        </div><!-- bookingInfos -->
                    </div><!-- /col -->
                </form><!-- /bookingForm -->
                <div class="loaderImg"></div>
            </div><!-- /row -->
        </div><!-- /bookingContainer -->
        
    </div>


<?php include('bottom_default.php');  include('footer.php'); ?>
