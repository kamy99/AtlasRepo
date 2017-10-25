
   <!-- <link href="http://book.perfectibe.com/css/default.css" rel="stylesheet" type="text/css" />-->
    <script type="text/javascript" src="http://book.perfectibe.com/scripts/calendar.js"></script>
    <script type="text/javascript" src="http://book.perfectibe.com/scripts/jsDate.js"></script>
    <script type="text/javascript" src="http://book.perfectibe.com/scripts/pibe.js"></script>
    <script type="text/javascript" src="http://book.perfectibe.com/scripts/dropdown.js"></script>
    <script type="text/javascript">
        requestquery.agent_id = 258;
        var enable_dropdown = true; 
    </script>

    <form name="frmAirSearch" method="post" action="https://res.atlas.travel/process.aspx"
    enctype="multipart/form-data" onsubmit="return validateSearch();">
    <input type="hidden" id="AgentID" name="agentid" value="258" />


<?php // start row?>
    <div class="row">
        <?php // start left col?>
            <div class="col-sm-12">
               <input type="radio" name="TripType" value="rdbRoundTrip" id="rdbRoundTrip" onclick="chgTripType(this.value);" checked="checked" />
                <label for="rdbRoundTrip" class="radio-inline">Round-Trip</label>
                <input type="radio" name="TripType" value="rdbOneWay" id="rdbOneWay" onclick="chgTripType(this.value);" />
                <label for="rdbOneWay" class="radio-inline">One-Way</label>
                 <input type="radio" name="TripType" value="rdbMultiCity" id="rdbMultiCity" onclick="chgTripType(this.value);" />
                 <label for="rdbMultiCity" class="radio-inline">Multi-City</label>  
            </div>
    </div>    
<?php // eof row?>
<script type="text/javascript">
$( document ).ready(function() {
//pnlFlight3
                $("#rdbRoundTrip").on("click", function(){

                    $("#pnlFlight2").removeClass("force_hide");
                    $("#pnlFlight3").removeClass("force_block");
                   
                    $("#pnlFlight2").addClass("force_block");
                    $("#pnlFlight3").addClass("force_hide");

                }  )

                $("#rdbOneWay").on("click", function(){
                    $("#pnlFlight2").addClass("force_hide");
                    $("#pnlFlight3").addClass("force_hide");
                    
                }  )

               $("#rdbMultiCity ").on("click", function(){
                    $("#pnlFlight2").removeClass("force_hide");
                    $("#pnlFlight3").removeClass("force_hide");                    

                    $("#pnlFlight2").addClass("force_block");
                    $("#pnlFlight3").addClass("force_block");                    
                }  )

                $("#txtDate1_Month_ID").addClass("form-control");
                $("#txtDate1_Day_ID").addClass("form-control");

                $("#txtDate2_Month_ID").addClass("form-control");
                $("#txtDate2_Day_ID").addClass("form-control");

                $("#txtDate3_Month_ID").addClass("form-control");
                $("#txtDate3_Day_ID").addClass("form-control");

               $("#ddlPaxADT").addClass("form-control travellers_control");
               $("#ddlPaxCHD").addClass("form-control travellers_control");
               $("#ddlPaxINF").addClass("form-control travellers_control");


});


</script>

<?php // start row?>
    <div class="row">
        <?php // start left col?>
            <div class="col-sm-12 srch_sect_heading">
                Flight 1
            </div>

    </div>    
<?php // eof row?>



<?php // start row?>
    <div class="row">
        <?php // start left col?>
            <div class="col-sm-6">
                <div class="form-group">
        
                <input type="text" name="txtDepCity1" class="txtDepCity cls_autofill form-control" value="Airport or City"
                                    defvalue="Airport or City" onfocus="focusObj(this);" onblur="blurObj(this);copyTextbox(this, document.getElementById('txtArrCity2'));"
                                    onchange="copyTextbox(this, document.getElementById('txtArrCity2'));" autocomplete="off"
                                    id="txtDepCity1" placeholder="From: Airport or City" />
                </div>
            </div>

        <?php // start right col?>
            <div class="col-sm-6">
    
            <input type="text" name="txtArrCity1" class="txtDepCity cls_autofill form-control" value="Airport or City"
                                    defvalue="Airport or City" onfocus="focusObj(this);" onblur="blurObj(this);copyTextbox(this, document.getElementById('txtDepCity2'));"
                                    onchange="copyTextbox(this, document.getElementById('txtDepCity2'));" autocomplete="off"
                                    id="txtArrCity1" placeholder="To: Airport or City"/>
            </div>


    </div>    
<?php // eof row?>

<?php // start row?>
    <div class="row">
        <?php // start left col?>
            <div class="col-sm-8">
                  <div id="pnlFlight1">
                 <script type="text/javascript"> DateInput('txtDate1', true, 'MM/DD/YYYY', formatDate(dateAdd('d', 3, Today), 'MM/dd/yyyy'))</script>
</div>
            </div>
            <div class="col-sm-4">
<select name="ddlTime1" id="ddlTime1" class="form-control">
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


    </div>    
<?php // eof row?>

<?php // start row?>
    <div class="row">

        <?php // start right col?>
            <div class="col-sm-12">
                  <input type="checkbox" name="chkFlexSearch1" id="chkFlexSearch1" value="true" class="checkbox-inline"/>
                                <label for="chkFlexSearch1">
                                    +/- 1 Day Search</label>
            </div>


    </div>    
<?php // eof row?>

<div id="pnlFlight2">

<?php // start row?>
    <div class="row">
        <?php // start left col?>
            <div class="col-sm-12 srch_sect_heading">
                Flight 2
            </div>

    </div>    
<?php // eof row?>
<?php // start row?>
    <div class="row">
        <?php // start left col?>
            <div class="col-sm-6">
                <div class="form-group">

                <input type="text" name="txtDepCity2" class="txtDepCity cls_autofill form-control" value="Airport or City"
                                    defvalue="Airport or City" onfocus="focusObj(this);" onblur="blurObj(this);"
                                    onchange="copyTextbox(this, document.getElementById('txtArrCity3'));" autocomplete="off"
                                    id="txtDepCity2" placeholder="From: Airport or City"/>
                </div>
            </div>

        <?php // start right col?>
            <div class="col-sm-6">

             <input type="text" name="txtArrCity2" class="txtDepCity cls_autofill form-control" value="Airport or City"
                                    defvalue="Airport or City" onfocus="focusObj(this);" onblur="blurObj(this);"
                                    onchange="copyTextbox(this, document.getElementById('txtDepCity3'));" autocomplete="off"
                                    id="txtArrCity2" placeholder="To: Airport or City" />
            </div>


    </div>    
<?php // eof row?>


<?php // start row?>
    <div class="row">
        <?php // start left col?>
            <div class="col-sm-8">
                <script type="text/javascript"> DateInput('txtDate2', true, 'MM/DD/YYYY', formatDate(dateAdd('d', 7, Today), 'MM/dd/yyyy'))</script>
            </div>

        <?php // start right col?>
            <div class="col-sm-4">
                <select name="ddlTime2" id="ddlTime2" class="form-control">
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


    </div>    
<?php // eof row?>


<?php // start row?>
    <div class="row">
        <?php // start left col?>
            <div class="col-sm-12">
               <input type="checkbox" name="chkFlexSearch2" id="chkFlexSearch2" value="true"  class="checkbox-inline"/>
                <label for="chkFlexSearch2">+/- 1 Day Search</label>
            </div>

    </div>    
<?php // eof row?>

                </div>

             <div id="pnlFlight3" style="display: none">
                    <?php // start row?>
    <div class="row">
        <?php // start left col?>
            <div class="col-sm-6">
                <div class="form-group">
                <input type="text" name="txtDepCity3" class="txtDepCity cls_autofill form-control" value=""
                                    defvalue="Airport or City" onfocus="focusObj(this);" onblur="blurObj(this);"
                                    onchange="copyTextbox(this, document.getElementById('txtArrCity3'));" autocomplete="off"
                                    id="txtDepCity2" placeholder="From: Airport or City"/>
                </div>
            </div>

        <?php // start right col?>
            <div class="col-sm-6">

            <input type="text" name="txtArrCity3" class="txtDepCity cls_autofill form-control" value=""
                                    defvalue="Airport or City" onfocus="focusObj(this);" onblur="blurObj(this);"
                                    onchange="copyTextbox(this, document.getElementById('txtDepCity3'));" autocomplete="off"
                                    id="txtArrCity2" placeholder="To: Airport or City"/>
            </div>


    </div>    
<?php // eof row?>


<?php // start row?>
    <div class="row">
        <?php // start left col?>
            <div class="col-sm-8">
                <script type="text/javascript"> DateInput('txtDate3', true, 'MM/DD/YYYY', formatDate(dateAdd('d', 7, Today), 'MM/dd/yyyy'))</script>
            </div>

        <?php // start right col?>
            <div class="col-sm-4">
                <select name="ddlTime3" id="ddlTime3" class="form-control">
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


    </div>    
<?php // eof row?>


<?php // start row?>
    <div class="row">
        <?php // start left col?>
            <div class="col-sm-12">
         <input type="checkbox" name="chkFlexSearch3" id="chkFlexSearch3" value="true"  class="checkbox-inline"/>
                                <label for="chkFlexSearch3">
                                    +/- 1 Day Search</label>

   

            </div>

    </div>    
<?php // eof row?>
                </div>


<?php // start row?>
    <div class="row">
        <?php // start left col?>
            <div class="col-sm-12 srch_sect_heading">
                Travellers
            </div>

    </div>    
<?php // eof row?>


<?php // start row?>
    <div class="row">
        <?php // start left col?>
            <div class="col-sm-12">
               <div class="travellers travellers_label">Adults (12+)</div>  
               <div class="travellers">
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

              <div class="travellers travellers_label">Children (2-11)</div>   
                <div class="travellers">
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

                <div class="travellers travellers_label">Infants (Under 2)</div>  
      <div class="travellers">
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

    </div>    
<?php // eof row?>

<?php // start row?>
    <div class="row">
        <?php // start left col?>
            <div class="col-sm-12 srch_sect_heading">
                Options
            </div>

    </div>    
<?php // eof row?>

<?php // start row?>
    <div class="row">

        <?php // start left col?>
            <div class="col-sm-6">
                 <label for="ddlCabin">Cabin</label>
                      
                            <select name="ddlCabin" id="ddlCabin" class="form-control">
                                <option value="Y" selected>Economy / Coach</option>
                                <option value="W">Premium Economy</option>
                                <option value="C">Business</option>
                                <option value="F">First Class</option>
                            </select>
            </div>

        <?php // start right col?>
            <div class="col-sm-6">
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
<?php // eof row?>

<?php // start row?>
    <div class="row">
        <?php // start left col?>
            <div class="col-sm-12">
                <input type="checkbox" name="chkNonStop" id="chkNonStop" value="true" />
                            <label for="chkNonStop">I prefer non-stop flights</label>
            </div>

    </div>    
<?php // eof row?>

<?php // start row?>
    <div class="row">
        <?php // start left col?>
            <div class="col-sm-12">
<button type="submit" class="btn btn-sm search_btn">
  <i class="btnSearch glyphicon glyphicon-search"></i> Search
</button>

                            </div>

    </div>    
<?php // eof row?>


    </form>
