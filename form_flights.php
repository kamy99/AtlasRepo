
<!-- <script type="text/javascript" src="https://res.perfectibe.com/scripts/calendar.js"></script>
<script type="text/javascript" src="https://res.perfectibe.com/scripts/jsDate.js"></script>
<script type="text/javascript" src="https://res.perfectibe.com/scripts/pibe.js"></script>
<script type="text/javascript" src="https://res.perfectibe.com/scripts/dropdown.js"></script> -->
<script type="text/javascript">
    // var enable_dropdown=true;
</script>
<form id="flights-tab" class="tab-pane form-inline reservation-hotel flights_form  <?php if ($search_box == 'flights' || $search_box == 'home') { ?>active<?php } ?>" name="frmAirSearch" method="post" action="https://res.perfectibe.com/process.aspx" enctype="multipart/form-data" onSubmit="return true;"  autocomplete="off">
  <input type="hidden" id="AgentID" name="AgentID" value="258"/>

                                      <div class="row  step-flight-type">
                                            <h3>Cheap Flight Deals !</h3>
                                        <div class="col-sm-8">
                                        <input type="radio" name="TripType" value="rdbRoundTrip" id="rdbRoundTrip"  checked>
                                        <label for="flightTypeRoundTrip" class="radio-inline">Round-Trip</label>

                                        <input type="radio" name="TripType" value="rdbOneWay" id="rdbOneWay" >                        
                                        <label for="flightTypeOneWay" class="radio-inline">One-Way</label>

                                        <input type="radio" name="TripType" value="rdbMultiCity" id="rdbMultiCity" >
                                        <label for="flightTypeMultiLeg" class="radio-inline">Multi-City</label>  
                                        </div>
                                        <div class="col-sm-4">
                                        </div>
                                        <!-- onClick="chgTripType(this.value);" -->

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
                                                    <input id="from"  type="text" name="txtDepCity1" class="txtDepCity cls_autofill form-control" value=""  placeholder="Departure" onFocus="focusObj(this);" onBlur="blurObj(this);" onChange="copyTextbox(this, document.getElementById('txtArrCity2'));" autocomplete="off" id="txtDepCity1">
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-sm-6 cc-out" style="padding-left:0">
                                              <div class="form-group">
                                                <label for="checkout">To:</label>
                                                <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Check-out is from 12:00"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                                <div class="content-checkin-data">
                                                    <i class="fa fa-calendar infield"></i>
                                                    <input id="to" type="text" name="txtArrCity1" class="txtDepCity cls_autofill form-control" value="" defValue="Arrival"  placeholder="Arrival" onFocus="focusObj(this);" onBlur="blurObj(this);" onChange="copyTextbox(this, document.getElementById('txtDepCity2'));" autocomplete="off" id="txtArrCity1">
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
                                                    <input name="txtDate1" type="text" id="checkin" value="" class="form-control checkin" placeholder="Departure Date"/>
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
                                                <select class="form-control" name="ddlCabin" id="ddlCabin">
                                                    <option value="">No Preference</option>
                                                    <option selected="selected" value="Y">Economy</option>
                                                    <option value="W">Premium</option>
                                                    <option value="C">Business</option>
                                                    <option value="F">First</option>
                                                </select>
                                              </div>
                                        </div>
                                        <div class="col-sm-6 ">
                                           <label for="ddlAirline">Airline</label>
                                              <select name="ddlAirline" id="ddlAirline" class="form-control">
                                                          <option value="" selected>No Preference</option>
                                                          <option value="*O">*OneWorld Alliance</option>
                                                          <option value="*A">*Star Alliance</option>
                                                          <option value="*S">*SkyTeam Alliance</option>
                                                          <option value="JP">Adria Airways</option>
                                                          <option value="EI">Aer Lingus</option>
                                                          <option value="JR">Aero California</option>
                                                          <option value="ML">Aero Costa Rica</option>
                                                          <option value="PL">Aero Peru</option>
                                                          <option value="SX">AeroEjecutivo</option>
                                                          <option value="SU">Aeroflot</option>
                                                          <option value="AR">Aerolineas Argentinas</option>
                                                          <option value="VW">Aeromar Airlines</option>
                                                          <option value="AM">AeroMexico</option>
                                                          <option value="5L">Aerosur</option>
                                                          <option value="DP">Air 2000</option>
                                                          <option value="RK">Air Afrique</option>
                                                          <option value="AH">Air Algerie</option>
                                                          <option value="FQ">Air Aruba</option>
                                                          <option value="UU">Air Austral</option>
                                                          <option value="7L">Air Belfast</option>
                                                          <option value="AC">Air Canada</option>
                                                          <option value="EN">Air Dolomiti</option>
                                                          <option value="UX">Air Europa</option>
                                                          <option value="XV">Air Express</option>
                                                          <option value="FZ">Air Facilities</option>
                                                          <option value="AF">Air France</option>
                                                          <option value="J6">Air Greece</option>
                                                          <option value="TX">Air Guadeloupe 94</option>
                                                          <option value="AI">Air India</option>
                                                          <option value="IT">Air Inter</option>
                                                          <option value="UE">Air L.A.</option>
                                                          <option value="VD">Air Liberty</option>
                                                          <option value="TT">Air Lithuania</option>
                                                          <option value="FU">Air Lottoral</option>
                                                          <option value="NX">Air Macau</option>
                                                          <option value="KM">Air Malta</option>
                                                          <option value="PN">Air Martinique</option>
                                                          <option value="ON">Air Nauru</option>
                                                          <option value="NZ">Air New Zealand</option>
                                                          <option value="PX">Air Niugini</option>
                                                          <option value="AP">Air One</option>
                                                          <option value="8K">Air Ostrava</option>
                                                          <option value="FJ">Air Pacific Ltd.</option>
                                                          <option value="PZ">Air Paraguay</option>
                                                          <option value="BM">Air Sicilia SRL</option>
                                                          <option value="OJ">Air St Barthelemy</option>
                                                          <option value="UK">Air UK</option>
                                                          <option value="NF">Air Vanuatu</option>
                                                          <option value="QC">Air Zaire</option>
                                                          <option value="UL">Airlanka Ltd.</option>
                                                          <option value="3L">Air-Lift Associates</option>
                                                          <option value="CW">Airline of Marshall</option>
                                                          <option value="FL">AirTran Airways</option>
                                                          <option value="AS">Alaska Airlines</option>
                                                          <option value="IG">Alisarda</option>
                                                          <option value="AZ">Alitalia</option>
                                                          <option value="NH">All Nippon Airways</option>
                                                          <option value="LM">ALM-Antillean Airlines</option>
                                                          <option value="HP">America West</option>
                                                          <option value="AA">American Airlines</option>
                                                          <option value="AN">Ansett (Australia)</option>
                                                          <option value="R3">Armenian Airlines</option>
                                                          <option value="OZ">Asiana Airlines</option>
                                                          <option value="7V">Austin Express</option>
                                                          <option value="IM">Australia-Asia Air.</option>
                                                          <option value="OS">Austrian Airlines</option>
                                                          <option value="GW">Avia Airlines</option>
                                                          <option value="AO">Aviaco</option>
                                                          <option value="6A">Aviacsa</option>
                                                          <option value="AV">Avianca</option>
                                                          <option value="GU">Aviateca S.A.</option>
                                                          <option value="UP">Bahamasair</option>
                                                          <option value="LZ">Balkan-Bulgarian Airlines</option>
                                                          <option value="IW">Best Airlines</option>
                                                          <option value="BG">Biman Bangladesh</option>
                                                          <option value="AX">Binter Mediteraneo</option>
                                                          <option value="BP">Botswana Ltd.</option>
                                                          <option value="BU">Braathens South America</option>
                                                          <option value="BA">British Airways</option>
                                                          <option value="KJ">British Mediterranen</option>
                                                          <option value="BD">British Midland</option>
                                                          <option value="II">Business Air</option>
                                                          <option value="BW">Bwia</option>
                                                          <option value="XK">C.A.C. Mediterrannee</option>
                                                          <option value="VR">Cabo Verde Airlines</option>
                                                          <option value="UY">Cameroon Airlines</option>
                                                          <option value="2T">Canada 3000</option>
                                                          <option value="CP">Canadian Airlines</option>
                                                          <option value="KW">Carnival Airlines</option>
                                                          <option value="CX">Cathay Pacific</option>
                                                          <option value="KX">Cayman Airways</option>
                                                          <option value="CI">China Airlines</option>
                                                          <option value="H2">City Bird Airlines</option>
                                                          <option value="WX">CityJet</option>
                                                          <option value="5V">Community Express</option>
                                                          <option value="DD">Conti-Flug</option>
                                                          <option value="CO">Continental Airlines</option>
                                                          <option value="CM">Copa</option>
                                                          <option value="FX">Corp Airlines Canberra</option>
                                                          <option value="3C">Corporate Express</option>
                                                          <option value="XL">Country Connection</option>
                                                          <option value="LX">Crossair A.G.</option>
                                                          <option value="CY">Cyprus Airlines</option>
                                                          <option value="EX">Dallas Express</option>
                                                          <option value="D2">Damania</option>
                                                          <option value="2G">Debonair Airways</option>
                                                          <option value="DL">Delta Airlines</option>
                                                          <option value="DI">Deutsche BA</option>
                                                          <option value="D7">Dinar Lineas Aereas</option>
                                                          <option value="8U">Dolphin Express</option>
                                                          <option value="YU">Dominair</option>
                                                          <option value="KA">Dragonair</option>
                                                          <option value="EY">E.A.S. Europe Airlines</option>
                                                          <option value="4S">East West Airlines</option>
                                                          <option value="EU">Ecuatoriana</option>
                                                          <option value="MS">Egyptair</option>
                                                          <option value="LY">El Al</option>
                                                          <option value="G3">Emerald Airways</option>
                                                          <option value="EK">Emirates Airlines</option>
                                                          <option value="OV">Estonian Airlines</option>
                                                          <option value="ET">Ethiopian</option>
                                                          <option value="BR">EVA Airways</option>
                                                          <option value="IH">Falcon Aviation AB</option>
                                                          <option value="AY">Finnair</option>
                                                          <option value="YC">Flight West Airlines</option>
                                                          <option value="F3">Flying Enterprise AB</option>
                                                          <option value="F9">Frontier Airlines</option>
                                                          <option value="GA">Garuda</option>
                                                          <option value="GH">Ghana Airways</option>
                                                          <option value="9C">Gill Aviation Ltd.</option>
                                                          <option value="QD">Grand Airways</option>
                                                          <option value="GF">Gulf Air Co.</option>
                                                          <option value="3M">Gulfstream Intl</option>
                                                          <option value="GY">Guyana Airways</option>
                                                          <option value="VN">Hang Khong Vietnam</option>
                                                          <option value="ZL">Hazelton Airlines</option>
                                                          <option value="UD">Hex Air</option>
                                                          <option value="HS">Highland Air AB</option>
                                                          <option value="QX">Horizon Air</option>
                                                          <option value="AW">Horizon Airways</option>
                                                          <option value="IB">Iberia</option>
                                                          <option value="FI">Icelandair</option>
                                                          <option value="VQ">Impulse Airlines</option>
                                                          <option value="IC">Indian Airlines</option>
                                                          <option value="HH">Islandsflug</option>
                                                          <option value="JD">Japan Air System</option>
                                                          <option value="JL">Japan Airlines</option>
                                                          <option value="EG">Japan Asia Airways</option>
                                                          <option value="JU">JAT/Yugoslav Airline</option>
                                                          <option value="JY">Jersey European Air</option>
                                                          <option value="9W">Jet Airways</option>
                                                          <option value="KD">Kendall Airlines</option>
                                                          <option value="4K">Kenn Borek Air</option>
                                                          <option value="KP">Kiwi Intl. Air</option>
                                                          <option value="KL">KLM Royal Dutch Airlines</option>
                                                          <option value="KE">Korean Airlines</option>
                                                          <option value="7B">Krasnoyarsk Airlines</option>
                                                          <option value="KU">Kuwait Airlines</option>
                                                          <option value="LR">Lacsa</option>
                                                          <option value="UC">Ladeco</option>
                                                          <option value="LA">Lan Chile S.A.</option>
                                                          <option value="NG">Lauda Air</option>
                                                          <option value="LI">Liat</option>
                                                          <option value="RT">Lincoln Airlines</option>
                                                          <option value="TE">Lithuanian Airlines</option>
                                                          <option value="LB">Lloyd Aero Boliviano</option>
                                                          <option value="LO">LOT Polish</option>
                                                          <option value="LT">LTU International</option>
                                                          <option value="LH">Lufthansa German Airlines</option>
                                                          <option value="MH">Malaysia Airlines</option>
                                                          <option value="MA">Malev Hungarian</option>
                                                          <option value="6E">Malmo Aviation</option>
                                                          <option value="AE">Mandarin Airlines</option>
                                                          <option value="MP">Martinair</option>
                                                          <option value="IN">MAT Macedonian</option>
                                                          <option value="MZ">Merpati Nusantara Airlines</option>
                                                          <option value="MX">Mexicana</option>
                                                          <option value="YX">Midwest Express</option>
                                                          <option value="ZO">Mohawk Airlines</option>
                                                          <option value="NM">Mount Cook Airlines</option>
                                                          <option value="SW">Namib Air</option>
                                                          <option value="NC">National Jet Systems</option>
                                                          <option value="6Y">Nica</option>
                                                          <option value="JH">Nordeste Linhas</option>
                                                          <option value="DJ">Nordic European Air</option>
                                                          <option value="NW">Northwest Airlines</option>
                                                          <option value="UQ">Oconnor Airlines</option>
                                                          <option value="OA">Olympic Airways</option>
                                                          <option value="WY">Oman Air</option>
                                                          <option value="3N">Pac Air</option>
                                                          <option value="PK">Pakistan Intl.</option>
                                                          <option value="P8">Pantanal Linhas</option>
                                                          <option value="K5">Penair</option>
                                                          <option value="KS">Peninsula Airways, Inc.</option>
                                                          <option value="PR">Phillipine Airlines</option>
                                                          <option value="PH">Polynesian Airlines Ltd</option>
                                                          <option value="NI">Portugalia</option>
                                                          <option value="DE">Prime Air Inc.</option>
                                                          <option value="QF">Qantas</option>
                                                          <option value="VM">Regional Airlines</option>
                                                          <option value="QQ">Reno Air</option>
                                                          <option value="SL">Rio Sul Servicios</option>
                                                          <option value="AT">Royal Air Maroc</option>
                                                          <option value="QN">Royal Airlines</option>
                                                          <option value="BI">Royal Brunei Airlines</option>
                                                          <option value="RJ">Royal Jordanian</option>
                                                          <option value="RA">Royal Nepal Airlines</option>
                                                          <option value="ZG">Sabair Airlines Pty</option>
                                                          <option value="SN">Sabena</option>
                                                          <option value="EH">Saeta-Sociedad</option>
                                                          <option value="SV">Saudi Arabian Airlines</option>
                                                          <option value="SK">Scandinavian Airlines</option>
                                                          <option value="SG">Sempati Air</option>
                                                          <option value="NL">Shaheen Air intl</option>
                                                          <option value="SQ">Singapore Airlines</option>
                                                          <option value="BC">Skymark Airlines</option>
                                                          <option value="IE">Solomon Island Air</option>
                                                          <option value="SA">South African</option>
                                                          <option value="JK">Spanair</option>
                                                          <option value="SD">Sudan Airways</option>
                                                          <option value="PY">Surinam Airways Ltd</option>
                                                          <option value="SR">Swissair</option>
                                                          <option value="KK">T.a.m.</option>
                                                          <option value="TA">TACA Intl.</option>
                                                          <option value="GD">Taesa</option>
                                                          <option value="TP">TAP Air</option>
                                                          <option value="RO">Tarom-Romanian</option>
                                                          <option value="IJ">TAT European</option>
                                                          <option value="IO">TAT Export</option>
                                                          <option value="TG">Thai International</option>
                                                          <option value="FF">Tower Air</option>
                                                          <option value="UN">Transaero Airlines</option>
                                                          <option value="JQ">TransJamaican</option>
                                                          <option value="TK">Turkish Airlines</option>
                                                          <option value="TW">TWA</option>
                                                          <option value="PS">Ukraine Intl.</option>
                                                          <option value="UA">United Airlines</option>
                                                          <option value="US">US Air</option>
                                                          <option value="E8">USAfrica Airways</option>
                                                          <option value="RG">Varig</option>
                                                          <option value="VP">Vasp</option>
                                                          <option value="VA">Viasa</option>
                                                          <option value="VS">Virgin Atlantic Airways</option>
                                                          <option value="VG">VLM Nederlands</option>
                                                          <option value="3Y">Wapititi Aviation</option>
                                                          <option value="PT">West Air Sweden</option>
                                                          <option value="WW">Whyalla Airlines</option>
                                                          <option value="WF">Wideroes Flyveselskap</option>
                                                        </select>
                                              <br />
                                                    <!--  <input name="FlexibleDates" id="FlexibleDates" type="checkbox"><label for="FlexibleDates"> &nbsp;Flexible dates </label>
                                 <br />
                                 <label for="chkNonStop">Direct Flights</label><input type="checkbox" name="chkNonStop" id="chkNonStop" value="true"> -->
                                              </div>


                                         </div>

                                        <div class="col-sm-4 step-who" style="padding-left:0">
                                          
                                            <div class="col-sm-4 room-book" style="padding-left:0">
                                               <div class="form-group">
                                                <div class="guests-select">
                                                  <label>Adults (12+)</label>
                                                  <!-- <i class="fa fa-user infield"></i> -->
                                                  <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="+12 years"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                                      <select name="ddlPaxADT" id="ddlPaxADT" class="form-control">
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
                                                      <select name="ddlPaxCHD" id="ddlPaxCHD" class="form-control">
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
                                                      <select name="ddlPaxINF" id="ddlPaxINF" class="form-control">
                                                        <option value="0">0</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                      </select>
                                                </div>
                                              </div>
                                            </div>
                                        </div>
<div class="row">
                                            <div class="col-md-4 col-sm-4">
                                                <div class="form-group processpadmar">
                                                    <div class="checkbox">
                                                        <label class="antwenty">
                                                            <input id="chkRadiussearch" value="true" name="chkRadiussearch" type="checkbox">
                                                            Nearby airports
                                                        </label>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4">
                                                <div class="form-group processpadmar">
                                                    <div class="checkbox">
                                                        <label class="antwenty">
                                                            <input name="chkNonStop" id="chkNonStop" class="chkNonStop" value="true" type="checkbox">
                                                            Direct Flights
                                                        </label>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4">
                                                <div class="form-group processpadmar">
                                                    <div class="checkbox">
                                                        <label class="antwenty">
                                                            <input name="chkdatesflexible" id="chkdatesflexible" value="true" type="checkbox">
                                                            Flexible Dates
                                                        </label>
                                                    </div>
                                                    
                                                </div>
                                            </div>
</div>
                                        <div class="col-sm-2 colbtn">
                                          <button type="text" id="booking_search_btn" class="btn btn-primary btn-block">Search!</button>
                                        </div>
                                      </div>
                                    </form>   


<!--********************* Flight multi city ********************--> 
<form id="flights-multi-tab" class="tab-pane form-inline reservation-hotel active flights_form flights-multi" method="get" action="" name="reservationform"  autocomplete="off"> 
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
                                                    <input name="PaneltxtDepCity<?php echo $i;?>" type="text" id="PaneltxtDepCity<?php echo $i;?>" value="" class="form-control airport_search airport-complete" placeholder="Departure"/>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-sm-4 cc-out" style="padding-left:0">
                                              <div class="form-group">
                                                <div class="content-checkin-data">
                                                    <input name="PaneltxtArrCity<?php echo $i;?>" type="text" id="PaneltxtArrCity<?php echo $i;?>" value="" class="form-control" placeholder="Arrival"/>
                                                </div>
                                              </div>
                                            </div>

                                            <div class="col-sm-4 cc-out">
                                              <div class="form-group">
                                                <div class="content-checkin-data">
                                                    <i class="fa fa-calendar infield"></i>
                                                    <input name="Paneltxtdate<?php echo $i;?>" type="text" id="Paneltxtdate<?php echo $i;?>" value="" class="form-control DepartureDate<?php echo $i;?>" placeholder="Date"/>
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