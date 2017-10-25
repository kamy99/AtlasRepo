

<section class="top-content reservation-home4 force_height">
        <div class="container-slider removeslide">
          <div class="container-reservation inside-slider book-small-box">
           <div class="container">
            <div class="row">
              <div class="col-md-8 search_box_container">
                       <!-- Reservation form -->
                            <section id="reservation-form" class="col-md-12  pos-inside-slide resv-plus-meteo">
                              <div class="container-form-chose">
                                  <div class="col-md-12">
                                    <div class="tab-content">

<script type="text/javascript" src="https://res.perfectibe.com/scripts/calendar.js"></script>
<script type="text/javascript" src="https://res.perfectibe.com/scripts/jsDate.js"></script>
<script type="text/javascript" src="https://res.perfectibe.com/scripts/pibe.js"></script>
<script type="text/javascript" src="https://res.perfectibe.com/scripts/dropdown.js"></script>
<script type="text/javascript">
    var enable_dropdown=true;
</script>

<form id="flights-tab" class="tab-pane form-inline reservation-hotel flights_form  active" name="frmAirSearch" method="get" action="https://res.atlas.travel/process.aspx" enctype="multipart/form-data" onSubmit="return true;"  autocomplete="off">
  <input type="hidden" id="AgentID" name="AgentID" value="258"/>
  <div class="search_form_wrapper">
  <input type="hidden" name="txtCoupon" value="">
  <div id="flight_form_slector" class="row">
      <h3><?php   ?></h3>
  <div class="col-sm-8">
    <label class="radio-inline srch_rd_btns"><input type="radio" name="TripType" value="rdbRoundTrip" id="rdbRoundTrip"  class="rdbRoundTrip" onClick="chgTripType(this.value);" checked>Round-Trip</label>
    <label class="radio-inline  srch_rd_btns"><input type="radio" name="TripType" value="rdbOneWay" id="rdbOneWay" class="rdbOneWay" onClick="chgTripType(this.value);">One-Way</label>
    <label class="radio-inline  srch_rd_btns"><input type="radio" name="TripType" value="rdbMultiCity" id="rdbMultiCity" class="rdbMultiCity" onClick="chgTripType(this.value);">Multi-City</label>
  </div>
</div>


<!-- row start -->
<div class="row">
    <div class="col-sm-4">
      <div class="form-group">
                <label for="checkin">From:</label>
                <div class="content-checkin-data">
                    <i class="fa fa-plane infield"></i>
                    <input  type="text" name="txtDepCity1" class="txtDepCity cls_autofill form-control" value=""  placeholder="Departure"  onChange="copyTextbox(this, document.getElementById('txtArrCity2'));" autocomplete="off" id="txtDepCity1">
                </div>
      </div>
    </div>

    <div class="col-sm-4">
            <div class="form-group">
              <label for="checkout">To:</label>
              <div class="content-checkin-data">
                  <i class="fa fa-plane infield"></i>
                  <input  type="text" name="txtArrCity1" class="txtDepCity cls_autofill form-control" value="" defValue="Arrival"  placeholder="Arrival"  onChange="copyTextbox(this, document.getElementById('txtDepCity2'));" autocomplete="off" id="txtArrCity1">
              </div>
            </div>
    </div>

    <div class="col-sm-2">
              <div class="form-group">
                <label for="checkin">Depart Date</label>
                <div class="content-checkin-data">
                    <i class="fa fa-calendar infield"></i>
                    <input name="txtDate1" type="text" id="checkin" value="" class="form-control checkin datepicker" placeholder="Dep. Date"/>
                </div>


            <fieldset>


                <input type="hidden">
                <input
                    id="input_01"
                    class="datepicker"
                    name="date"
                    type="hidden"
                    autofocuss
                    value="14 August, 2014"
                    data-valuee="2014-08-08">
                <input type="hidden">

            </fieldset>
        <div id="container"></div>

        <input type="hidden">




              </div>
    </div>

    <div class="col-sm-2 rtn_date_1">
               <div class="form-group return_panel">
                <label for="checkout">Return Date</label>
                <div class="content-checkin-data">
                    <i class="fa fa-calendar infield"></i>
                    <input name="txtDate2" type="text" id="checkout" value="" class="form-control checkout datepicker" placeholder="Return Date"/>
                </div>
              </div>
    </div>
</div>
<!-- eof row -->

<!-- conversion ends -->


<div id="srch_frm_flght_multi" class="">

<div class="row">
    <div class="col-sm-4">
      <div class="form-group">
                <label for="checkin">From:</label>
                <div class="content-checkin-data">
                    <i class="fa fa-plane infield"></i>
                    <input id="txtDepCity2" name="txtDepCity2" class="txtDepCity cls_autofill form-control" value="" placeholder="Departure" onchange="copyTextbox(this, document.getElementById('txtArrCity'));" autocomplete="off" type="text">
                </div>
      </div>
    </div>
    <div class="col-sm-4">
            <div class="form-group">
              <label for="checkout">To:</label>
              <div class="content-checkin-data">
                  <i class="fa fa-plane infield"></i>
                  <input id="txtArrCity2" name="txtArrCity2" class="txtDepCity cls_autofill form-control" value="" defvalue="Arrival" placeholder="Arrival" onchange="copyTextbox(this, document.getElementById('txtDepCity'));" autocomplete="off" type="text">
              </div>
            </div>
    </div>
    <div class="col-sm-2">
              <div class="form-group">
                <label for="checkin">Depart Date</label>
                <div class="content-checkin-data">
                    <i class="fa fa-calendar infield"></i>
                    <input id="checkin2" name="txtDate2" value="" class="form-control checkin" placeholder="Dep. Date" type="text">
                </div>
              </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-4">
      <div class="form-group">
                <label for="checkin">From:</label>
                <div class="content-checkin-data">
                    <i class="fa fa-plane infield"></i>
                    <input id="txtDepCity3" name="txtDepCity3" class="txtDepCity cls_autofill form-control" value="" placeholder="Departure" onchange="copyTextbox(this, document.getElementById('txtArrCity'));" autocomplete="off" type="text">
                </div>
      </div>
    </div>
    <div class="col-sm-4">
            <div class="form-group">
              <label for="checkout">To:</label>
              <div class="content-checkin-data">
                  <i class="fa fa-plane infield"></i>
                  <input id="txtArrCity3" name="txtArrCity3" class="txtDepCity cls_autofill form-control" value="" defvalue="Arrival" placeholder="Arrival" onchange="copyTextbox(this, document.getElementById('txtDepCity'));" autocomplete="off" type="text">
              </div>
            </div>
    </div>
    <div class="col-sm-2">
              <div class="form-group">
                <label for="checkin">Depart Date</label>
                <div class="content-checkin-data">
                    <i class="fa fa-calendar infield"></i>
                    <input id="checkin3" name="txtDate3" value="" class="form-control checkin" placeholder="Dep. Date" type="text">
                </div>
              </div>
    </div>
</div>

</div>

<!-- row start -->
<div class="row row flight_options_row">
<div class="col-sm-6">
                                            <div class="col-sm-4 adult-book" >
                                               <div class="form-group">
                                                <div class="guests-select">
                                                  <label>Adults (12+)</label>
                                                  <!-- <i class="fa fa-user infield"></i> -->
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

    <div class="col-sm-6">
      <div class="row">
        <div class="col-sm-12">
                                                <div class="form-group processpadmar">
                                                    <div class="checkbox">
                                                        <label class="antwenty flex_dates_label">
                                                            <input name="chkdatesflexible" id="chkdatesflexible" value="true" type="checkbox">
                                                            Flexible Dates, Lower Fares
                                                        </label>
                                                    </div>

                                                </div>
        </div>
        <div class="col-sm-12">
                                                <div class="form-group processpadmar">
                                                    <div class="checkbox">
                                                        <label class="antwenty">
                                                            <input id="chkRadiussearch" value="true" name="chkRadiussearch" type="checkbox">
                                                            Nearby airports
                                                        </label>
                                                    </div>

                                                </div>
        </div>
        <div class="col-sm-12">
                                                <div class="form-group processpadmar">
                                                    <div class="checkbox">
                                                        <label class="antwenty">
                                                            <input name="chkNonStop" id="chkNonStop" class="chkNonStop" value="true" type="checkbox">
                                                            Direct Flights
                                                        </label>
                                                    </div>
                                                </div>
        </div>
      </div>


    </div>


</div>
<!-- eof row -->





<div class="row flight_options_row">


  <div class="col-sm-6">
                                <div class="col-sm-6 no_left_padding">
                                  <div class="form-group">
                                        <label for="ddlCabin">Cabin Class</label>
                                        <select class="form-control" name="ddlCabin" id="ddlCabin">
                                            <option value="">No Preference</option>
                                            <option selected="selected" value="Y">Economy</option>
                                            <option value="W">Premium</option>
                                            <option value="C">Business</option>
                                            <option value="F">First</option>
                                        </select>
                                      </div>
                                  </div>

                                           <div class="col-sm-6 no_left_padding no_right_padding">
                                              <div class="form-group">
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
                                             </div>
                                            </div>
  </div>
</div>


<div class="row">
                                             <div class="col-md-4 col-sm-4">

                                            </div>
                                            <div class="col-md-4 col-sm-4">

                                            </div>
                                            <div class="col-md-4 col-sm-4">

                                            </div>

</div>

<div class="row">
  <div class="col-sm-12 center-block">
  <button type="button" id="booking_search_btn" class="btn btn-primary btn-block search_btn center-block ga_event" data-category="Flight_Search" data-action="Click" data-label="Flight Search" ><span></span>Search!</button>
  </div>
</div>


 </form>
 </div>

<!-- eof single fligh form -->



<!--********************* Car reservation ********************-->
                                    <form id="cars-tab" class="tab-pane form-inline reservation-hotel  " method="get" name="cars_form" >


                                      <div class="row">
                                        <div class="col-sm-2 step-where">
                                            <h3 class="hide_me">Great Car Deals</h3>

                                        <div id="bookingengine" style=" position:relative;"></div>
   <script>
var default_values = {
affiliate_id:"2507",
page: "step1",
width:"95%",

 step2Url: "https://www.atlas.local/cars_search.php",
 custom_css:"https://www.atlas.local/css/cars.css",
 terms_page:"https://www.atlas.local/privacy_policy.php"



/*****************OPTIONAL VALUES********************
terms_page:"your_terms_and_conditions_page_url",
formType: "form1",
custom_css: "your_custom_css_url",
language: "en",
show_multilingual: "1",
width: "100%",
height: “450px”,
pickup_country:"441",
pickup_city:"9747",
pickup_loc:"14927",
dropoff_country:"441",
dropoff_city:"9747",
dropoff_loc:"14927",
pickupdate:"1",
dropoffdate:"1",
pickuptime:"11:30",
dropofftime:"11:30",
currency: "INR",
driver_age: "41",
div_id: "bookingengine_custom_div_id",
map:"0"
*****************OPTIONAL VALUES********************/
};
</script>
<script type="text/javascript"
src="https://api.supplycars.com/jsbookingengine/script.js"></script>
                                        </div>

                                      </div>
                                    </form>
                                    </div><!--Close tab-content form-->
                                  </div>
                              </div>
                      </section>


                        </div>

                        <div class="col-md-4 meteo-top-travel meteo-slider-top">
                                                        <div id="home_promos" class="">

                              <a class="home_promo" href="#promos" title=" Super Hot deals! Prices so low they won't last!  Book Now."  data-category="Search_Box" data-action="Click" data-label="Side Promotions" >
                              </a>
                          </div>                        </div>
              </div>
            </div>
           </div>
           </div>
           <div class="home-page removeslide">
                <div class="fullwidthbanner-container">
                    <div class="fullwidthbanner">
                        <ul>
                                                      <li data-transition="fade" data-slotamount="10" data-thumb="">
                                <img src="/images/sliders/home_1.jpg" alt="Atlas Travel : Cheap Tickets"/>
                            </li>
                            <li data-transition="fade" data-slotamount="7" data-thumb="">
                                <img src="/images/sliders/home_2.jpg" alt="Atlas Travel : Vacation Packages"/>
                            </li>
                            <li data-transition="fade" data-slotamount="7" data-thumb="">
                                <img src="/images/sliders/home_3.jpg" alt="Atlas Travel : Hotels &amp Car Rentals "/>
                            </li>
                        </ul>
                        <div class="tp-bannertimer"></div>
                    </div>
                </div>
        </div>
</section>


<!-- TOP OFFERS -->
<section id="footer">
    <div class="container">
            <div class="row">
                <div class="col-md-12">
                  <div class="col-md-3">
                    <p><a href="flights.php" class="ga_event"  data-category="Footer_Menu" data-action="Click" data-label="Flights Link">Flights</a></p>
                    <p><a href="hotels.php" class="ga_event"  data-category="Footer_Menu" data-action="Click" data-label="Hotels Link">Hotels</a></p>
                    <p><a href="cars.php" class="ga_event"  data-category="Footer_Menu" data-action="Click" data-label="Cars Link">Cars</a></p>
                    <p><a href="vacations.php" class="ga_event"  data-category="Footer_Menu" data-action="Click" data-label="Vacations Link">Vacations</a></p>
                    <p><a href="insurance.php" class="ga_event"  data-category="Footer_Menu" data-action="Click" data-label="Insurance Link">Insurance</a></p>
                    <p><a href="contact.php" class="ga_event"  data-category="Footer_Menu" data-action="Click" data-label="Contact Link">Contact</a></p>
                  </div>
                  <div class="col-md-3">
                    <p><a href="travel_tools.php" class="ga_event"  data-category="Footer_Menu" data-action="Click" data-label="Travel Tools Link">Travel Tools</a></p>
                    <p><a href="faq.php" class="ga_event"  data-category="Footer_Menu" data-action="Click" data-label="FAQ Link">FAQ</a></p>
                    <p><a href="/assets/contents/credit-card-form.pdf" class="ga_event"  data-category="Footer_Menu" data-action="Download" data-label="Creadit Card Form Link">Credit Card Form</a></p>
                    <p><a href="bonus.php" class="ga_event"  data-category="Footer_Menu" data-action="Click" data-label="Bonus Link">Bonus</a></p>
                  </div>
                  <div class="col-md-3 footer-zone">
                        <h3>Contact Us:</h3>
                        <p><i class="fa fa-map-marker"></i>Address: 6075 Yonge St., 2nd Floor, Toronto , Ontario, M2M 3W2 Canada</p>
                        <p><i class="fa fa-phone"></i><a href="tel:416-222-0717">Phone :  (1) 416-222-0717</a></p>
                        <p><i class="fa fa-phone"></i><a href="tel:1-877-600-5454">Toll Free : 1-877-600-5454</a></p>
                        <p><i class="fa fa-fax"></i><a href="#">Fax: 416-222-9084</a></p>
                        <p><i class="fa fa-envelope-o"></i><a href="mailto:agent@atlas.travel">agent@atlas.travel</a></p>
                        <div class="socialfooter">
                        <a href="https://www.facebook.com/atlastravel1"  target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="https://twitter.com/AtlasTravel_" target="_blank"><i class="fa fa-twitter"></i></a>
                  </div>
                  </div>

                  <div class="col-md-3">
                    <!--Begin CTCT Sign-Up Form-->
<!-- EFD 1.0.0 [Fri May 12 13:42:40 EDT 2017] -->
<div class="newsletter_signup_box">
   <div>
       <span id="success_message" style="display:none;">
           Thanks for signing up!
       </span>
       <form data-id="embedded_signup:form" class="ctct-custom-form Form" name="embedded_signup" method="POST" action="https://visitor2.constantcontact.com/api/signup">
           <h5>Newsletter</h5>
           <p>Sign up to receive sell off, promotion, coupon and chance to win a trip to Europe.</p>
           <!-- The following code must be included to ensure your sign-up form works properly. -->
           <input data-id="ca:input" type="hidden" name="ca" value="59a1d1ef-fb41-403d-af92-ca79a5700224">
           <input data-id="list:input" type="hidden" name="list" value="3">
           <input data-id="source:input" type="hidden" name="source" value="EFD">
           <input data-id="required:input" type="hidden" name="required" value="list,email">
           <input data-id="url:input" type="hidden" name="url" value="">
           <p data-id="Email Address:p" ><label data-id="Email Address:label" data-name="email" class="ctct-form-required">Email Address</label> <input data-id="Email Address:input" type="text" name="email" value="" maxlength="80"></p>
           <p data-id="First Name:p" ><label data-id="First Name:label" data-name="first_name">First Name</label> <input data-id="First Name:input" type="text" name="first_name" value="" maxlength="50"></p>
           <button type="submit" class="Button ctct-button Button--block Button-secondary" data-enabled="enabled">Sign Up</button>
       </form>
   </div>
</div>
<script type='text/javascript'>
   var localizedErrMap = {};
   localizedErrMap['required'] =    'This field is required.';
   localizedErrMap['ca'] =      'An unexpected error occurred while attempting to send email.';
   localizedErrMap['email'] =       'Please enter your email address in name@email.com format.';
   localizedErrMap['birthday'] =    'Please enter birthday in MM/DD format.';
   localizedErrMap['anniversary'] =   'Please enter anniversary in MM/DD/YYYY format.';
   localizedErrMap['custom_date'] =   'Please enter this date in MM/DD/YYYY format.';
   localizedErrMap['list'] =      'Please select at least one email list.';
   localizedErrMap['generic'] =     'This field is invalid.';
   localizedErrMap['shared'] =    'Sorry, we could not complete your sign-up. Please contact us to resolve this.';
   localizedErrMap['state_mismatch'] = 'Mismatched State/Province and Country.';
  localizedErrMap['state_province'] = 'Select a state/province';
   localizedErrMap['selectcountry'] =   'Select a country';
   var postURL = 'https://visitor2.constantcontact.com/api/signup';
</script>
<script type='text/javascript' src='https://static.ctctcdn.com/h/contacts-embedded-signup-assets/1.0.2/js/signup-form.js'></script>
<!--End CTCT Sign-Up Form-->                    <img class='logo-footer' src='images/logo_orig.png' alt='Atlas Travel | Cheap Flights ' />
                  </div>
                </div>
           </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
          <div class="row">

                            <div class="col-xs-6 col-sm-3"><span class="footer_icons icon_tico"></span></div>
                            <div class="col-xs-6 col-sm-3"><span class="footer_icons icon_iata"></span></div>
                            <div class="col-xs-6 col-sm-3"><span class="footer_icons icon_acta"></span></div>
                            <div class="col-xs-6 col-sm-3"><span class="footer_icons icon_ssl"></span></div>
                            <div class="col-xs-6 col-sm-3"><span class="footer_icons icon_interac"></span></div>
                            <div class="col-xs-6 col-sm-3"><span class="footer_icons icon_etransfer"></span></div>
                            <div class="col-xs-6 col-sm-3"><span class="footer_icons icon_mc"></span></div>
                            <div class="col-xs-6 col-sm-3"><span class="footer_icons icon_amex"></span></div>
                            <div class="col-xs-6 col-sm-3"><span class="footer_icons icon_visa"></span></div>
                            <div class="col-xs-6 col-sm-3"><span class="footer_icons icon_wu"></span></div>
                            <div class="col-xs-6 col-sm-3"><span class="footer_icons icon_dc"></span></div>

          </div>
            <div class="row">
              <div class="col-md-12">
                    <div class="col-xs-6 copyright">Atlas Travel © 2016 All Rights Reserved &nbsp; <br />
                            All Travel fund protected by Ontario TICO registration # 4595245 <a href="privacy_policy.php">Conditions &amp; Privacy Policy</a>
                    </div>

              </div>
            </div>
        </div>
    </div>
</section>


<script src="/js/modernizr.js" type="text/javascript"></script>
<script src="/js/jquery-1.10.1.min.js" type="text/javascript"></script>
<script src="/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<script src="/js/jquery-ui.js" type="text/javascript"></script>
<script src="/js/jquery.easing.1.3.js"></script>
<!-- waypoint -->
<script type="text/javascript" src="/js/waypoints.min.js"></script>
<!--Preload-->
<script type="text/javascript">
    $(document).ready(function ($) {
        "use strict";
        try {
            var myTimer = 0; clearTimeout(myTimer);
            myTimer = setTimeout(function () { $("#loader-wrapper").slideUp() }, 2000);
        } catch (err) {
        }
    });
</script>

<script src="/js/jquery.themepunch.plugins.min.js" type="text/javascript"></script>
<script src="/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
<script type="text/javascript">
var tpj = jQuery;
    tpj(document).ready(function () {
        "use strict";
        if (tpj.fn.cssOriginal !== undefined)
            tpj.fn.css = tpj.fn.cssOriginal;
        tpj('.fullwidthbanner').revolution(
        {
            delay: 9000,
            startwidth: 1170,
            startheight: 646,
            onHoverStop: "on",
            thumbWidth: 100,
            thumbHeight: 50,
            thumbAmount: 4,
            hideThumbs: 200,
            navigationType: 'none',
            navigationArrows: "verticalcentered",   //nexttobullets, verticalcentered, none
            navigationStyle: "large",
            touchenabled: "on",
            navOffsetHorizontal: 0,
            navOffsetVertical: 20,
            fullWidth: "on",
            shadow: 0
        });
});
</script>

<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<script src="/js/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<!--bxSlider-->
<script src="/js/jquery.bxslider.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function () {
    "use strict";
    $('.bxslider').bxSlider({
        auto: true
    });
});
</script>

 <script src="/js/script.js" type="text/javascript"></script>

<script type="text/javascript">
    $(document).ready(function(){
      $("#flightTypeOneWay").click(function(){
          $(".flights-return-date").hide();
      });
      $("#flightTypeRoundTrip").click(function(){
          $(".return_panel").show();
      });



$("#flights-multi-tab #flightTypeOneWay").click(function(){
  $("#flights-multi-tab").hide();
   $("#flights-tab").show();

});

$("#flights-multi-tab #flightTypeRoundTrip").click(function(){
  $("#flights-multi-tab").hide();
  $("#flights-tab").show();
});

$("#package_submit").click(function(){
$("#CheckInDate").val($("#package-checkin").val());
$("#CheckOutDate").val($("#package-checkout").val());
$("#CityCode").val($("#packages-to").val() + ";C" );
})

    });
 </script>



<script src="/js/booking.js" type="text/javascript"></script>

<script src="/js/booking.js" type="text/javascript"></script>


<script src="/js/date_picker/picker.js"></script>
<script src="/js/date_picker/picker_date.js"></script>
<script src="/js/date_picker/picker_time.js"></script>
<script src="/js/date_picker/legacy.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-69189331-1', 'auto');
  ga('send', 'pageview');

</script>


<!-- Hotjar Tracking Code for www.atlas.travel -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:514216,hjsv:5};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
</script>

    </body>
</html>
