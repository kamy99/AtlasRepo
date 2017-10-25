<?php include('header.php');
buildTitle('');buildMenu('');
 ?>
    <!-- MAIN SLIDER ================================================== -->
    <div class="mainSliderContainer">
        <ul id="mainSlider">
            <li>
                <img src="assets/contents/main-slider-1.png" alt="" />
                <p class="caption">WHERE TO GO THIS SUMMER?</p>
            </li>
            <li>
                <img src="assets/contents/main-slider-2.png" alt="" />
                <p class="caption">TRAVEL AROUND THE WORLD FROM $2360.00</p>
            </li>
            <li>
                <img src="assets/contents/main-slider-1.png" alt="" />
            </li>
            <li>
                <img src="assets/contents/main-slider-2.png" alt="" />
            </li>
        </ul><!-- /mainSlider -->
        <div class="mainSliderNav"></div>
<!--   Sear form  -->

       <!-- BOOKING TABS and FORMS ================================================== -->
        <div class="bookingTabsContainer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7 col-sm-9 col-xs-12 bookingTabsCol">
                        <div id="bookingTabs">          
                            <ul class="resp-tabs-list clearfix">
                                <li class="flights"><span>FLIGHTS</span></li>
                                <li class="hotels"><span>HOTELS</span></li>
                                <li class="cars"><span>CARS</span></li>
                                <li class="cruise"><span>CRUISE</span></li>
                            </ul> 
                            
                            <div class="resp-tabs-container">                                                        
                                <div>
                                  
                                    <form id="flightBooking" class="generalForm bookingForm" action="#" method="post">
               <div class="row">
                                  <div class="col-sm-12">
                                      <input type="radio" name="TripType" value="rdbRoundTrip" id="rdbRoundTrip" onclick="chgTripType(this.value);"
                                          checked="checked" />
                           
                                      <label for="rdbRoundTrip">
                                          Round-Trip</label>

                                      <input type="radio" name="TripType" value="rdbOneWay" id="rdbOneWay" onclick="chgTripType(this.value);" />

                                      <label for="rdbOneWay">
                                          One-Way</label>

                                      <input type="radio" name="TripType" value="rdbMultiCity" id="rdbMultiCity" onclick="chgTripType(this.value);" />

                                      <label for="rdbMultiCity">
                                          Multi-City</label>
                                   </div> 
                                </div>
                                <div class="row">
                                  <div class="col-xs-6"> 
                                    From:     <input type="text" name="txtDepCity1" class="txtDepCity cls_autofill" value="Airport or City"
                                    defvalue="Airport or City" onfocus="focusObj(this);" onblur="blurObj(this);copyTextbox(this, document.getElementById('txtArrCity2'));"
                                    onchange="copyTextbox(this, document.getElementById('txtArrCity2'));" autocomplete="off"
                                    id="txtDepCity1" />
                                  </div>
                                  <div class="col-xs-6">
                              To:  <input type="text" name="txtArrCity1" class="txtDepCity cls_autofill" value="Airport or City"
                                    defvalue="Airport or City" onfocus="focusObj(this);" onblur="blurObj(this);copyTextbox(this, document.getElementById('txtDepCity2'));"
                                    onchange="copyTextbox(this, document.getElementById('txtDepCity2'));" autocomplete="off"
                                    id="txtArrCity1" />
                                  </div>

                                   
                                </div>
                                <div class="row">
                                     <script type="text/javascript"> 
                                DateInput('txtDate1', true, 'MM/DD/YYYY', formatDate(dateAdd('d', 3, Today), 'MM/dd/yyyy'))</script>
                         
                                <select name="ddlTime1" id="ddlTime1">
                                    <option value="Anytime">Anytime</option>
                                    <option value="0100">1 am</option>
                                    <option value="0200">2 am</option>
                                    <option value="0300">3 am</option>
                                    <option value="0400">4 am</option>
                                    <option value="0500">5 am</option>
                                    <option value="0600">6 am</option>
                                    <option value="0700">7 am</option>
                                    <option value="0800">8 am</option>
                                    <option value="0900">9 am</option>
                                    <option value="1000">10 am</option>
                                    <option value="1100">11 am</option>
                                    <option value="1200">Noon</option>
                                    <option value="1300">1 pm</option>
                                    <option value="1400">2 pm</option>
                                    <option value="1500">3 pm</option>
                                    <option value="1600">4 pm</option>
                                    <option value="1700">5 pm</option>
                                    <option value="1800">6 pm</option>
                                    <option value="1900">7 pm</option>
                                    <option value="2000">8 pm</option>
                                    <option value="2100">9 pm</option>
                                    <option value="2200">10 pm</option>
                                    <option value="2300">11 pm</option>
                                    <option value="2400">Midnight</option>
                                </select> 
                                </div>
                                <div class="row">
                                         <input type="checkbox" name="chkFlexSearch1" id="chkFlexSearch1" value="true" />
                                <label for="chkFlexSearch1">
                                    +/- 1 Day Search</label>
                                </div>
                                <div class="row">
                                    <strong>Return Date</strong>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6">
                       From    <input type="text" name="txtDepCity2" class="txtDepCity cls_autofill" value="Airport or City"
                                    defvalue="Airport or City" onfocus="focusObj(this);" onblur="blurObj(this);"
                                    onchange="copyTextbox(this, document.getElementById('txtArrCity3'));" autocomplete="off"
                                    id="txtDepCity2" />
                         
            
                                    </div>
                                    <div class="col-xs-6">
                   To <input type="text" name="txtArrCity2" class="txtDepCity cls_autofill" value="Airport or City"
                                    defvalue="Airport or City" onfocus="focusObj(this);" onblur="blurObj(this);"
                                    onchange="copyTextbox(this, document.getElementById('txtDepCity3'));" autocomplete="off"
                                    id="txtArrCity2" />
                                    </div>
                                </div>
                                <div class="row">
                                     <script type="text/javascript">                                    DateInput('txtDate2', true, 'MM/DD/YYYY', formatDate(dateAdd('d', 7, Today), 'MM/dd/yyyy'))</script>
                        
                                <select name="ddlTime2" id="ddlTime2">
                                    <option value="Anytime">Anytime</option>
                                    <option value="0100">1 am</option>
                                    <option value="0200">2 am</option>
                                    <option value="0300">3 am</option>
                                    <option value="0400">4 am</option>
                                    <option value="0500">5 am</option>
                                    <option value="0600">6 am</option>
                                    <option value="0700">7 am</option>
                                    <option value="0800">8 am</option>
                                    <option value="0900">9 am</option>
                                    <option value="1000">10 am</option>
                                    <option value="1100">11 am</option>
                                    <option value="1200">Noon</option>
                                    <option value="1300">1 pm</option>
                                    <option value="1400">2 pm</option>
                                    <option value="1500">3 pm</option>
                                    <option value="1600">4 pm</option>
                                    <option value="1700">5 pm</option>
                                    <option value="1800">6 pm</option>
                                    <option value="1900">7 pm</option>
                                    <option value="2000">8 pm</option>
                                    <option value="2100">9 pm</option>
                                    <option value="2200">10 pm</option>
                                    <option value="2300">11 pm</option>
                                    <option value="2400">Midnight</option>
                                </select>
                                </div>
                                <div class="row">
                                     <input type="checkbox" name="chkFlexSearch2" id="chkFlexSearch2" value="true" />
                                <label for="chkFlexSearch2">
                                    +/- 1 Day Search</label>
                                </div>
                                <div class="row">
                                    <strong>Travellers</strong>
                                </div>
                                <div class="row">
                                    <div class="col-xs-4">
                                      Adults (12+)
                                     </div> 
                                    <div class="col-xs-4">
                                      Children (2-11)
                                     </div> 
                                  <div class="col-xs-4">
                                    Infants (Under 2)
                                     </div>             
                                </div>
                                <div class="row">
                                     <div class="col-xs-4">
                                 <select name="ddlPaxADT" id="ddlPaxADT">
                                    <option value="0">0</option>
                                    <option value="1" selected>1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                </select>
                                     </div> 
                                    <div class="col-xs-4">
                              <select name="ddlPaxCHD" id="ddlPaxCHD">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                </select>
                                     </div> 
                                  <div class="col-xs-4">
                                  <select name="ddlPaxINF" id="ddlPaxINF">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                </select>                                  
                                     </div>   
                                </div>

                                
                                <div class="row">
                                  <strong>Options</strong>
                                    
                                </div>
                               <div class="row">
                                    <div class="col-xs-6">
                                        Cabin
                
                                    </div>
                                    <div class="col-xs-6">
                
                            <select name="ddlCabin" id="ddlCabin">
                                <option value="Y" selected>Economy / Coach</option>
                                <option value="W">Premium Economy</option>
                                <option value="C">Business</option>
                                <option value="F">First Class</option>
                            </select>
                                    </div>
                                    
                                </div>
                               <div class="row">
                                    <div class="col-xs-6">Airline
                                    </div>
                                    <div class="col-xs-6">
                            <select name="ddlAirline" id="ddlAirline">
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
                                <option value="EY">Etihad</option>
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
                                <option value="QR">Qatar Airways</option>
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
                                    </div>
                                    
                                </div>
                                  <div class="row">
                                    <div class="col-xs-6">
                                      <input type="checkbox" name="chkNonStop" id="chkNonStop" value="true" />
                                    </div>
                                    <div class="col-xs-6">
                                 <label for="chkNonStop">
                                I prefer non-stop flights</label>
                                    </div>
                                    
                                </div>                                                             
                               <div class="row">
                                     <input type="submit" value="Search" class="btnSearch" /> 
                                </div>
                                    </form>
                                </div><!-- /flights -->
                                <div>
                                    <form id="hotelBooking" class="generalForm bookingForm" action="#" method="post">
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label>Leaving From <span>*</span></label>
                                                <input type="text" name="leaving_from" class="required" />
                                            </div>
                                            <div class="col-sm-5 datePickContainer">
                                                <label>Departing on <span>*</span></label>
                                                <input type="text" name="departing_on" class="required datePick" />
                                                <img class="datePickImg" alt="date picker" src="assets/images/calendar.png">
                                            </div>
                                            <div class="col-sm-7">
                                                <label>Going to <span>*</span></label>
                                                <input type="text" name="going_to" class="required" />
                                            </div>
                                            <div class="col-sm-5">
                                                <label>Arriving on <span>*</span></label>
                                                <input type="text" name="arriving_on" class="required datePick" />
                                                <img class="datePickImg" alt="date picker" src="assets/images/calendar.png">
                                            </div>
                                            <div class="col-sm-7">
                                                <div class="row">
                                                    <div class="col-sm-4 pRel">
                                                        <label>Adults <span>*</span></label>
                                                        <select name="adults" class="customSelectInput required">
                                                            <option value="00">00</option>
                                                            <option value="01">01</option>
                                                            <option value="02">02</option>
                                                            <option value="03">03</option>
                                                            <option value="04">04</option>
                                                            <option value="05">05</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-4 pRel">
                                                        <label>Children <span>*</span></label>
                                                        <select name="children" class="customSelectInput required">
                                                            <option value="00">00</option>
                                                            <option value="01">01</option>
                                                            <option value="02">02</option>
                                                            <option value="03">03</option>
                                                            <option value="04">04</option>
                                                            <option value="05">05</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-4 pRel">
                                                        <label>Senior <span>*</span></label>
                                                        <select name="senior" class="customSelectInput required">
                                                            <option value="00">00</option>
                                                            <option value="01">01</option>
                                                            <option value="02">02</option>
                                                            <option value="03">03</option>
                                                            <option value="04">04</option>
                                                            <option value="05">05</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-5">
                                                <input type="submit" name="submit" value="SEARCH" />
                                            </div>
                                        </div>
                                    </form>
                                </div><!-- /hotels -->
                                <div>
                                    <form id="carsBooking" class="generalForm bookingForm" action="#" method="post">
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label>Leaving From <span>*</span></label>
                                                <input type="text" name="leaving_from" class="required" />
                                            </div>
                                            <div class="col-sm-5 datePickContainer">
                                                <label>Departing on <span>*</span></label>
                                                <input type="text" name="departing_on" class="required datePick" />
                                                <img class="datePickImg" alt="date picker" src="assets/images/calendar.png">
                                            </div>
                                            <div class="col-sm-7">
                                                <label>Going to <span>*</span></label>
                                                <input type="text" name="going_to" class="required" />
                                            </div>
                                            <div class="col-sm-5">
                                                <label>Arriving on <span>*</span></label>
                                                <input type="text" name="arriving_on" class="required datePick" />
                                                <img class="datePickImg" alt="date picker" src="assets/images/calendar.png">
                                            </div>
                                            <div class="col-sm-7">
                                                <div class="row">
                                                    <div class="col-sm-4 pRel">
                                                        <label>Adults <span>*</span></label>
                                                        <select name="adults" class="customSelectInput required">
                                                            <option value="00">00</option>
                                                            <option value="01">01</option>
                                                            <option value="02">02</option>
                                                            <option value="03">03</option>
                                                            <option value="04">04</option>
                                                            <option value="05">05</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-4 pRel">
                                                        <label>Children <span>*</span></label>
                                                        <select name="children" class="customSelectInput required">
                                                            <option value="00">00</option>
                                                            <option value="01">01</option>
                                                            <option value="02">02</option>
                                                            <option value="03">03</option>
                                                            <option value="04">04</option>
                                                            <option value="05">05</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-4 pRel">
                                                        <label>Senior <span>*</span></label>
                                                        <select name="senior" class="customSelectInput required">
                                                            <option value="00">00</option>
                                                            <option value="01">01</option>
                                                            <option value="02">02</option>
                                                            <option value="03">03</option>
                                                            <option value="04">04</option>
                                                            <option value="05">05</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-5">
                                                <input type="submit" name="submit" value="SEARCH" />
                                            </div>
                                        </div>
                                    </form>
                                </div><!-- /cars -->
                                <div>
                                    <form id="cruiseBooking" class="generalForm bookingForm" action="#" method="post">
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label>Leaving From <span>*</span></label>
                                                <input type="text" name="leaving_from" class="required" />
                                            </div>
                                            <div class="col-sm-5 datePickContainer">
                                                <label>Departing on <span>*</span></label>
                                                <input type="text" name="departing_on" class="required datePick" />
                                                <img class="datePickImg" alt="date picker" src="assets/images/calendar.png">
                                            </div>
                                            <div class="col-sm-7">
                                                <label>Going to <span>*</span></label>
                                                <input type="text" name="going_to" class="required" />
                                            </div>
                                            <div class="col-sm-5">
                                                <label>Arriving on <span>*</span></label>
                                                <input type="text" name="arriving_on" class="required datePick" />
                                                <img class="datePickImg" alt="date picker" src="assets/images/calendar.png">
                                            </div>
                                            <div class="col-sm-7">
                                                <div class="row">
                                                    <div class="col-sm-4 pRel">
                                                        <label>Adults <span>*</span></label>
                                                        <select name="adults" class="customSelectInput required">
                                                            <option value="00">00</option>
                                                            <option value="01">01</option>
                                                            <option value="02">02</option>
                                                            <option value="03">03</option>
                                                            <option value="04">04</option>
                                                            <option value="05">05</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-4 pRel">
                                                        <label>Children <span>*</span></label>
                                                        <select name="children" class="customSelectInput required">
                                                            <option value="00">00</option>
                                                            <option value="01">01</option>
                                                            <option value="02">02</option>
                                                            <option value="03">03</option>
                                                            <option value="04">04</option>
                                                            <option value="05">05</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-4 pRel">
                                                        <label>Senior <span>*</span></label>
                                                        <select name="senior" class="customSelectInput required">
                                                            <option value="00">00</option>
                                                            <option value="01">01</option>
                                                            <option value="02">02</option>
                                                            <option value="03">03</option>
                                                            <option value="04">04</option>
                                                            <option value="05">05</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-5">
                                                <input type="submit" name="submit" value="SEARCH" />
                                            </div>
                                        </div>
                                    </form>
                                </div><!-- /cruise -->
                            </div>
                        </div><!-- /bookingTabs -->
                    </div><!-- /col -->
                    <div class="col-lg-6 welcome_txt">
                        <h2>Welcome to Atlas.Travel</h2>
                        <p>Atlas.Travel is one of Canada's leading online domestic and international travel websites. We are committed to providing you the best travel deals. We can help you to find deals for all aspects of your travel planning, including cheap Flights, Vacation Package deals, discounted Cruises, Hotels, Car Rentals and Travel Insurance. You can plan and book your entire trip from the convenience of your computer and a click of your mouse.</p>

                    </div>




                </div><!-- /row -->
            </div><!-- /container -->
        </div><!-- /bookingTabsContainer -->
 

        
        <!-- SHORT OFFERS ================================================== -->
        <div class="shortOffers">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <a href="#" title="" class="shortOffer clearfix">
                            <div class="title"><h5>MEXICO</h5><h5>NORTH AMERICA</h5></div>
                            <div class="price"><span>From</span><em>$350</em></div>
                        </a><!-- /shortOffer -->
                    </div><!-- /col -->
                    <div class="col-sm-3">
                        <a href="#" title="" class="shortOffer clearfix">
                            <div class="title"><h5>HA LONG BAY</h5><h5>VIETNAM</h5></div>
                            <div class="price"><span>From</span><em>$250</em></div>
                        </a><!-- /shortOffer -->
                    </div><!-- /col -->
                    <div class="col-sm-3">
                        <a href="#" title="" class="shortOffer clearfix">
                            <div class="title"><h5>PATTAYA</h5><h5>THAILAND</h5></div>
                            <div class="price"><span>From</span><em>$600</em></div>
                        </a><!-- /shortOffer -->
                    </div><!-- /col -->
                    <div class="col-sm-3">
                        <a href="#" title="" class="shortOffer clearfix">
                            <div class="title"><h5>BASTIA BEACH</h5><h5>FRANCE</h5></div>
                            <div class="price"><span>From</span><em>$450</em></div>
                        </a><!-- /shortOffer -->
                    </div><!-- /col -->
                </div><!-- /row -->
            </div><!-- /container -->
        </div><!-- /shortOffers -->
        
    </div><!-- /mainSliderContainer -->
    
    
    <!-- MAIN CONTENT ================================================== -->
    <div class="container">
        
        <!-- SPECIAL OFFERS ================================================== -->
        <div class="row">
            <div class="innerTitle"><h2>SPECIAL <span>OFFER</span></h2></div>       
            <div id="specialOffers" class="offers">
                <a href="#" class="item">
                    <img src="assets/contents/sp-offer-1.png" alt="special offer">
                    <span class="offer_box">Receive $20 additional bonus per person on top of other discounts, when you purchase any vacation package online from Atlas.Travel</span>
                    <span>Redeem $20 Per Vacation</span>
                </a>
                <a href="#" class="item">
                    <img src="assets/contents/sp-offer-2.png" alt="special offer">
                    <span class="offer_box">Find Cheap flights to Worldwide destinations within few minutes. Compare 1000s of fares with over 80 Airlines, and select the flight best suit your travel needs.</span>
                    <span>Cheap Flights</span>
                </a>
                <a href="#" class="item">
                    <img src="assets/contents/sp-offer-3.png" alt="special offer">
                    <span class="offer_box">Receive 5% of your cruise package on top of other discounts, when you purchase any cruise trip from Atlas.Travel</span>
                    <span>Redeem 5% Per Cruise</span>
                </a>
                <a href="#" class="item">
                    <img src="assets/contents/sp-offer-1.png" alt="special offer">
                   <span class="offer_box">Are you searching for a good discount hotel deal? Your right choice is here. Search and find your hotel deal online through group of major suppliers in Atlas.Travel and save up to 50%</span>  
                    <span>Shop Hotel Deals</span>

                </a>

            </div><!-- /specialOffers -->
        </div><!-- /row -->
 <?php include('bottom_default.php'); ?>       
        
        
    </div><!-- /container -->
    
    
 <?php include('bottom_default.php');  include('footer.php'); ?>