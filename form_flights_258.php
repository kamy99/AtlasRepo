﻿    <link href="https://res.perfectibe.com/css/Dropdown.css" rel="stylesheet" />
    <link href="https://res.perfectibe.com/css/MSGPanel.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://res.perfectibe.com/css/Date_Calendar.css" />
    <link rel="stylesheet" href="https://res.perfectibe.com/css/bootstrap.min.css">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <link href="https://res.perfectibe.com/css/animate.min.css" rel="stylesheet" />
    <script src="https://res.perfectibe.com/scripts/dropdown.js"></script>
    <script type="text/javascript" src="https://res.perfectibe.com/scripts/page-loading.js"></script>
    <script type="text/javascript" src="https://res.perfectibe.com/scripts/jsDate.js"></script>
    <script type="text/javascript" src="https://res.perfectibe.com/scripts/Date_Calendar.js"></script>
    <script type="text/javascript" src="https://res.perfectibe.com/scripts/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="https://res.perfectibe.com/scripts/jquery.noconflict.js"></script>
    <script src="https://res.perfectibe.com/scripts/bootstrap.min.js"></script>
    <script src="https://res.perfectibe.com/scripts/theme-scripts.js"></script>
    <script src="/js/process_c1.js"></script>
    <link href="https://res.perfectibe.com/css/process.css" rel="stylesheet" />
    <link href="https://res.perfectibe.com/css/responsive.css" rel="stylesheet" />
    <script type="text/javascript">var enable_dropdown = true;
    </script>


    <div id="page-wrapper" class="procellall">
      <section id="content">
        <div class="container">
          <div id="main">
            <div class="row">
              <form method="post" action="https://res.atlas.travel/process.aspx" id="frmAirSearch" enctype="multipart/form-data" onsubmit="setsearchtrip(); return validateModifySearch();">
                   <input type="hidden" name="agentid" value="258" id="AgentID" />
 
                <input name="hdndisplayDateFormat" type="hidden" id="hdndisplayDateFormat" value="dd-MMM-yy" />
                <input name="hdnShowCalenderperiodB2C" type="hidden" id="hdnShowCalenderperiodB2C" value="330" />
                <input type="hidden" id="hdnlnkAddFlight" name="hdnlnkAddFlight" value="Add Flight" />
                <input name="hdnShowPaxDropdown" type="hidden" id="hdnShowPaxDropdown" value="Dropdown" />
                <div id="divhiddenfields" name="divhiddenfields">
                  <input type="text" id="txtDepCity1" name="txtDepCity1" value="" />
                  <input type="text" id="txtArrCity1" name="txtArrCity1" value="" />
                  <input type="text" id="txtDate1" name="txtDate1" value="10/20/2016" />
                  <input type="text" id="txtDepCity2" name="txtDepCity2" value="" />
                  <input type="text" id="txtArrCity2" name="txtArrCity2" value="" />
                  <input type="text" id="txtDate2" name="txtDate2" value="10/24/2016" />
                  <input type="text" id="txtDepCity3" name="txtDepCity3" value="" />
                  <input type="text" id="txtArrCity3" name="txtArrCity3" value="" />
                  <input type="text" id="txtDate3" name="txtDate3" value="" />
                  <input type="text" id="txtDepCity4" name="txtDepCity4" value="" />
                  <input type="text" id="txtArrCity4" name="txtArrCity4" value="" />
                  <input type="text" id="txtDate4" name="txtDate4" value="" />
                  <input type="text" id="txtDepCity5" name="txtDepCity5" value="" />
                  <input type="text" id="txtArrCity5" name="txtArrCity5" value="" />
                  <input type="text" id="txtDate5" name="txtDate5" value="" />
                  <input type="text" id="txtDepCity6" name="txtDepCity6" value="" />
                  <input type="text" id="txtArrCity6" name="txtArrCity6" value="" />
                  <input type="text" id="txtDate6" name="txtDate6" value="" />
                  <input type="hidden" name="hdntriptype" id="hdntriptype" value="2" />
                  <input type="hidden" name="hdnStrFlightType" id="hdnStrFlightType" value="rdbroundtrip" />
                </div>
                <input type="hidden" id="hdnShowAddFlight" name="hdnShowAddFlight" value="2" />
                <input name="hdnShowModifyFlight" type="hidden" id="hdnShowModifyFlight" value="6" />
                <div class="sort-by-section clearfix col-lg-12 anthree   KKKKKK" style="display: none;">
                  <div class="row col-md-12 anfour">
                    <div class="col-md-2 anfive col-sm-2 col-xs-3">
                      <div class="form-group">
                        <input type="text" id="BartxtDepCity1" name="BartxtDepCity1" maxlength="30" onchange="Setvalues('BartxtDepCity1', 'txtDepCity1');" onblur="Setvalues('BartxtDepCity1', 'txtDepCity1');" onfocus="return RemoveBorder(this);" value="" class=" txtDepCity input-text full-width cls_autofill clsremoveBorder" />
                      </div>
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-3 processbartxt">
                      <div class="form-group">
                        <input type="text" id="BartxtArrCity1" name="BartxtArrCity1" maxlength="30" onchange="Setvalues('BartxtArrCity1', 'txtArrCity1');" onblur="Setvalues('BartxtArrCity1', 'txtArrCity1');" onfocus="return RemoveBorder(this);" value="" class="txtDepCity input-text full-width cls_autofill clsremoveBorder" />
                      </div>
                    </div>
                    <div class="col-md-4 ansix col-sm-4 col-xs-5">
                      <div class="form-group row">
                        <div class="anseven col-md-6 col-sm-6 col-xs-6">
                          <div class="datepicker-wrap">
                            <input type="text" onchange="SetDateModifyvalues('BartxtDate01', 'txtDate1');" value="20-Oct-16" onfocus="return RemoveBorder(this);" class="input-text dpicker full-width clsremoveBorder" id="BartxtDate01" name="BartxtDate01" readonly />
                            <img class="ui-datepicker-trigger" src="images/icon/blank.png" alt="" title=""> </div>
                        </div>
                        <div class="aneight col-md-offset-0 col-md-6 col-sm-6 col-xs-6">
                          <div class="datepicker-wrap">
                            <input type="text" id="BartxtDate02" name="BartxtDate02" onchange="SetDateModifyvalues('BartxtDate02', 'txtDate2');" onfocus="return RemoveBorder(this);" value="24-Oct-16" class="input-text dpicker full-width clsremoveBorder" readonly />
                            <img class="ui-datepicker-trigger" src="images/icon/blank.png" alt="" title=""> </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-1 annine col-sm-1 col-xs-1">
                      <div class="form-group">
                        <button id="btnGoSubmit" type="submit" class="full-width icon-checkright animated bounce aneleven" data-animation-type="bounce" data-animation-duration="1"></button>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 hidden-xs">
                      <div class="form-group">
                        <h4 class="panel-title"><a data-toggle="collapse" href="#modify-search-panel" class="processa"> Modify Search </a></h4>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row col-lg-12 antwelve">
                  <div class="tab-pane fade active in" id="flights-tab">
                    <div class="row hidden-xs">
                      <div id="tab">
                        <ul>
                          <li>
                            <input type="radio" name="TripType" value="rdbRoundTrip" id="rdbRoundTrip" checked="checked" style="display: none;">
                            <a href="javascript:void(0);" id="rdbRoundTrip_1" name="rdbRoundTrip_1" class="tab1 anchor active" onclick="chgTripType('rdbRoundTrip',this);">Return</a></li>
                          <li>
                            <input type="radio" name="TripType" value="rdbOneWay" id="rdbOneWay" style="display: none;">
                            <a href="javascript:void(0);" id="rdbOneWay_1" class="tab2 anchor" name="rdbOneWay_1" onclick="chgTripType('rdbOneWay',this);">One Way</a></li>
                          <li>
                            <input type="radio" name="TripType" value="rdbMultiCity" id="rdbMultiCity" style="display: none;">
                            <a href="javascript:void(0);" id="rdbMultiCity_1" class="tab3 anchor" name="rdbMultiCity_1" onclick="chgTripType('rdbMultiCity',this);">Multi City</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4 col-sm-3 col-xs-6">
                        <div class="form-group">
                          <label>Leaving From</label>
                          <input type="text" id="PaneltxtDepCity1" maxlength="30" value="" name="PaneltxtDepCity1" onfocus="return RemoveBorder(this);" onchange="Setvalues('PaneltxtDepCity1', 'txtDepCity1');" onblur="Setvalues('PaneltxtDepCity1', 'txtDepCity1');" onkeypress="return CharacterCheck(event);" class="txtDepCity input-text full-width cls_autofill clsremoveBorder" />
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-3 col-xs-6">
                        <div class="form-group">
                          <label>Going To</label>
                          <input type="text" id="PaneltxtArrCity1" maxlength="30" name="PaneltxtArrCity1" value="" onfocus="return RemoveBorder(this);" onchange="Setvalues('PaneltxtArrCity1', 'txtArrCity1');" onblur="Setvalues('PaneltxtArrCity1', 'txtArrCity1');" onkeypress="return CharacterCheck(event);" class="txtDepCity input-text full-width cls_autofill clsremoveBorder" />
                        </div>
                      </div>
                      <div class="col-md-2 col-sm-3 col-xs-6">
                        <label>Departing On</label>
                        <div class="form-group row">
                          <div class="col-xs-12">
                            <div class="datepicker-wrap">
                              <input type="text" id="Paneltxtdate0" name="Paneltxtdate0" onfocus="return RemoveBorder(this);" value="20-Oct-16" onchange="SetDateModifyvalues('Paneltxtdate0', 'txtDate1');" class="input-text dpicker full-width clsremoveBorder" readonly>
                              <img class="ui-datepicker-trigger" src="images/icon/blank.png" alt="" title=""> </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-2 col-sm-3 col-xs-6" id="pnlFlight2" style="display: block;">
                        <label>Returning On</label>
                        <div class="form-group row">
                          <div class="col-xs-12">
                            <div class="datepicker-wrap">
                              <input type="text" id="txtDate_1" onfocus="return RemoveBorder(this);" value="24-Oct-16" name="txtDate_1" class="input-text dpicker full-width" readonly>
                              <img class="ui-datepicker-trigger" src="images/icon/blank.png" alt="" title=""> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row Div2" id="pnlFlight3" style="display: none;">
                      <div class="col-md-4 col-sm-3 col-xs-6">
                        <div class="form-group">
                          <label>Leaving From</label>
                          <input type="text" id="PaneltxtDepCity2" maxlength="30" name="PaneltxtDepCity2" onfocus="return RemoveBorder(this);" value="" class="input-text full-width txtDepCity cls_autofill clsremoveBorder" onchange="SetTxtValue('PaneltxtDepCity2', 'txtDepCity2',2);" onkeypress="return CharacterCheck(event);" onblur="SetTxtValue('PaneltxtDepCity2', 'txtDepCity2',2);" />
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-3 col-xs-6">
                        <div class="form-group">
                          <label>Going To</label>
                          <input type="text" id="PaneltxtArrCity2" maxlength="30" name="PaneltxtArrCity2" onfocus="return RemoveBorder(this);" value="" onchange="SetTxtValue('PaneltxtArrCity2', 'txtArrCity2',2);" onblur="SetTxtValue('PaneltxtArrCity2', 'txtArrCity2',2);" onkeypress="return CharacterCheck(event);" class="input-text txtDepCity cls_autofill full-width clsremoveBorder" />
                        </div>
                      </div>
                      <div class="col-md-2 col-sm-3 col-xs-6">
                        <label>Departing On</label>
                        <div class="form-group">
                          <div class="datepicker-wrap">
                            <input type="text" id="Paneltxtdate1" name="Paneltxtdate1" onfocus="return RemoveBorder(this);" class="input-text dpicker full-width clsremoveBorder" value="24-Oct-16" onchange="SetDateModifyvalues('Paneltxtdate1', 'txtDate2');" readonly>
                            <img class="ui-datepicker-trigger" src="images/icon/blank.png" alt="" title=""> </div>
                        </div>
                      </div>
                      <div class="col-md-2 col-sm-3 col-xs-6">
                        <div class="row">
                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <label>&nbsp;</label>
                          </div>
                          <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 HideAddFlight2">
                            <label>&nbsp;</label>
                            <div class="processAddflight"> <a id="lnkAddFlight2" class="showDiv2 processpaxpointer" onclick='ShowPopupModify(2);'>Add Flight</a> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="Div3 CommonMultiFlight" style="display: none;"></div>
                    <div class="Div4 CommonMultiFlight" style="display: none;"></div>
                    <div class="Div5 CommonMultiFlight" style="display: none;"></div>
                    <div class="Div6 CommonMultiFlight" style="display: none;"></div>
                    <div class="row">
                      <div class="col-md-5 col-sm-7 col-xs-9 underfull">
                        <div class="form-group row">
                          <div class="col-xs-4">
                            <label>Adults</label>
                            <div class="processplus">
                              <ul>
                                <li title="remove:adult" onclick="add_removetraveller(this.title);" class="clsRemoveRedBorder processpaxpointer"><i class="fa fa-minus clsRemoveRedBorder"></i></li>
                                <li class="processplusin">
                                  <input type="text" id="ddlPaxADT" name="ddlPaxADT" class="addBorder processinput" value="1" readonly />
                                </li>
                                <li title="add:adult" onclick="add_removetraveller(this.title);" class="clsRemoveRedBorder processpaxpointer"><i class="fa fa-plus clsRemoveRedBorder"></i></li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-xs-4">
                            <label>Children</label>
                            <div class="processplus">
                              <ul>
                                <li title="remove:child" onclick="add_removetraveller(this.title);" class="clsRemoveRedBorder processpaxpointer"><i class="fa fa-minus clsRemoveRedBorder"></i></li>
                                <li class="processplusin">
                                  <input type="text" id="ddlPaxCHD" name="ddlPaxCHD" class="addBorder processinput" value="0" readonly />
                                </li>
                                <li title="add:child" onclick="add_removetraveller(this.title);" class="clsRemoveRedBorder processpaxpointer"><i class="fa fa-plus clsRemoveRedBorder"></i></li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-xs-4">
                            <label>Infants</label>
                            <div class="processplus">
                              <ul>
                                <li title="remove:infant" onclick="add_removetraveller(this.title);" class="clsRemoveRedBorder processpaxpointer"><i class="fa fa-minus clsRemoveRedBorder"></i></li>
                                <li class="processplusin">
                                  <input type="text" id="ddlPaxINF" name="ddlPaxINF" class="addBorder processinput" value="0" readonly />
                                </li>
                                <li title="add:infant" onclick="add_removetraveller(this.title);" class="clsRemoveRedBorder processpaxpointer"><i class="fa fa-plus clsRemoveRedBorder"></i></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-2 col-sm-2 col-xs-3 underfull">
                        <div class="form-group">
                          <label>Cabin</label>
                          <div class="selector">
                            <select name="ddlCabin" id="ddlCabin" class="full-width">
                              <option value="Y">Economy / Coach</option>
                              <option value="W">Premium Economy</option>
                              <option value="C">Business</option>
                              <option value="F">First Class</option>
                            </select>
                            <span class="custom-select full-width processsp">Y</span> </div>
                        </div>
                      </div>
                      <div class="col-md-2 col-sm-2 hidden-xs">
                        <label>Airlines</label>
                        <div class="selector">
                          <select name="ddlAirline" id="ddlAirline" class="full-width">
                            <option selected="selected" value="">No Preference</option>
                            <option value="*O">*OneWorld Alliance</option>
                            <option value="*A">*Star Alliance</option>
                            <option value="*S">*SkyTeam Alliance</option>
                            <option value="JP">Adria Airways</option>
                            <option value="A3">Aegean Air</option>
                            <option value="EI">Aer Lingus</option>
                            <option value="SU">Aeroflot</option>
                            <option value="2K">Aerogal</option>
                            <option value="AR">Aerolineas Argen</option>
                            <option value="VW">Aeromar</option>
                            <option value="AM">Aeromexico</option>
                            <option value="ZI">Aigle Azur</option>
                            <option value="KC">Air Astana</option>
                            <option value="BT">Air Baltic</option>
                            <option value="AB">Air Berlin</option>
                            <option value="BP">Air Botswana</option>
                            <option value="2J">Air Burkina</option>
                            <option value="SB">Air Calin</option>
                            <option value="AC">Air Canada</option>
                            <option value="CA">Air China</option>
                            <option value="EN">Air Dolomiti</option>
                            <option value="UX">Air Europa</option>
                            <option value="AF">Air France</option>
                            <option value="GL">Air Greenland</option>
                            <option value="AI">Air India</option>
                            <option value="MD">Air Madagascar</option>
                            <option value="KM">Air Malta</option>
                            <option value="MK">Air Mauritius</option>
                            <option value="9U">Air Moldova</option>
                            <option value="SW">Air Namibia</option>
                            <option value="NZ">Air New Zealand</option>
                            <option value="TP">Air Portugal</option>
                            <option value="JU">Air Serbia</option>
                            <option value="HM">Air Seychelles</option>
                            <option value="VT">Air Tahiti</option>
                            <option value="TN">Air Tahiti Nui</option>
                            <option value="TS">Air Transat</option>
                            <option value="AS">Alaska Airlines</option>
                            <option value="AZ">Alitalia</option>
                            <option value="NH">All Nippon</option>
                            <option value="AA">American</option>
                            <option value="OY">Andes Lineas</option>
                            <option value="DT">Angola Airlines</option>
                            <option value="W3">Arik Air</option>
                            <option value="IZ">Arkia Israeli</option>
                            <option value="AG">Aruba Airlines</option>
                            <option value="R7">Aserca Air</option>
                            <option value="OZ">Asiana Airlines</option>
                            <option value="KP">ASKY</option>
                            <option value="KK">AtlasGlobal</option>
                            <option value="OS">Austrian Airline</option>
                            <option value="AV">Avianca</option>
                            <option value="9V">Avior Airlines</option>
                            <option value="J2">Azerbaijan Airl</option>
                            <option value="AD">Azul Linhas</option>
                            <option value="UP">Bahamasair</option>
                            <option value="8H">Balkan Holidays</option>
                            <option value="PG">Bangkok Airways</option>
                            <option value="BG">Biman Bangladesh</option>
                            <option value="OB">Boliviana</option>
                            <option value="4B">Boutique Air</option>
                            <option value="BA">British Airways</option>
                            <option value="SN">Brussels Airline</option>
                            <option value="FB">Bulgaria Air</option>
                            <option value="BW">Caribbean Air</option>
                            <option value="CX">Cathay Pacific</option>
                            <option value="KX">Cayman Airways</option>
                            <option value="CI">China Airlines</option>
                            <option value="MU">China Eastern</option>
                            <option value="CZ">China Southern</option>
                            <option value="DE">Condor</option>
                            <option value="CM">Copa Airlines</option>
                            <option value="SS">Corsair</option>
                            <option value="7H">Corvus Airlines</option>
                            <option value="OU">Croatia Airlines</option>
                            <option value="OK">Czech Airlines</option>
                            <option value="DL">Delta</option>
                            <option value="2D">Dynamic Airways</option>
                            <option value="MS">Egyptair</option>
                            <option value="LY">El Al Israel</option>
                            <option value="EK">Emirates</option>
                            <option value="ET">Ethiopian Air</option>
                            <option value="EY">Etihad Airways</option>
                            <option value="BR">EVA Airways</option>
                            <option value="FJ">Fiji Airways</option>
                            <option value="AY">Finnair</option>
                            <option value="W2">FlexFlight ApS</option>
                            <option value="BE">Flybe</option>
                            <option value="GA">Garuda</option>
                            <option value="A9">Georgian Airways</option>
                            <option value="ZK">Great Lakes</option>
                            <option value="GX">Guangxi Beibu</option>
                            <option value="GF">Gulf Air</option>
                            <option value="HR">Hahn Air Lines</option>
                            <option value="HU">Hainan Airlines</option>
                            <option value="HA">Hawaiian</option>
                            <option value="YO">Heli-Air Monaco</option>
                            <option value="HX">Hong Kong Air</option>
                            <option value="IB">Iberia</option>
                            <option value="FI">Icelandair</option>
                            <option value="7I">Insel Air</option>
                            <option value="8I">InselAir</option>
                            <option value="JY">Intercaribbean</option>
                            <option value="WP">Island Air Hawai</option>
                            <option value="JL">Japan Airlines</option>
                            <option value="TB">Jet Airfly</option>
                            <option value="9W">Jet Airways</option>
                            <option value="B6">JetBlue Airways</option>
                            <option value="RQ">Kam Air</option>
                            <option value="KQ">Kenya Airways</option>
                            <option value="KE">Korean Air lines</option>
                            <option value="KU">Kuwait Airways</option>
                            <option value="B0">La Compagnie</option>
                            <option value="LR">LACSA</option>
                            <option value="TM">LAM</option>
                            <option value="4M">Lan Argentina</option>
                            <option value="XL">Lan Ecuador</option>
                            <option value="QV">Lao Airlines</option>
                            <option value="JJ">LATAM Brazil</option>
                            <option value="LA">LATAM Group</option>
                            <option value="LI">Liat Ltd</option>
                            <option value="LO">LOT Polish</option>
                            <option value="LH">Lufthansa</option>
                            <option value="MH">Malaysia</option>
                            <option value="MY">Maya Island Air</option>
                            <option value="IG">Meridiana Fly</option>
                            <option value="ME">Middle East</option>
                            <option value="MW">Mokulele Airline</option>
                            <option value="OM">Mongolian</option>
                            <option value="YM">Montenegro</option>
                            <option value="N8">National Air</option>
                            <option value="E3">NewGen Airways</option>
                            <option value="DY">Norwegian Air</option>
                            <option value="OA">Olympic Air</option>
                            <option value="WY">Oman Air</option>
                            <option value="J1">One Jet</option>
                            <option value="LW">Pacific Wings</option>
                            <option value="PK">Pakistan Air</option>
                            <option value="7N">PAN AM World</option>
                            <option value="PC">Pegasus Airlines</option>
                            <option value="KS">PenAir</option>
                            <option value="P9">Peruvian Airline</option>
                            <option value="PR">Philippine</option>
                            <option value="PD">Porter Airlines</option>
                            <option value="PW">Precision Air</option>
                            <option value="P0">Proflight</option>
                            <option value="P1">Public Charters</option>
                            <option value="QF">Qantas Airways</option>
                            <option value="QR">Qatar Airways</option>
                            <option value="AT">Royal Air Maroc</option>
                            <option value="BI">Royal Brunei</option>
                            <option value="RJ">Royal Jordanian</option>
                            <option value="WB">Rwandair Express</option>
                            <option value="4Q">Safi Airways</option>
                            <option value="S3">Santa Barbara</option>
                            <option value="SK">SAS</option>
                            <option value="S4">SATA Intl</option>
                            <option value="SV">Saudi Arabian</option>
                            <option value="BB">Seaborne</option>
                            <option value="K5">Seaport Airlines</option>
                            <option value="DN">Senegal Airlines</option>
                            <option value="S7">Siberia Air</option>
                            <option value="3U">Sichuan Airlines</option>
                            <option value="3M">Silver Airways C</option>
                            <option value="SQ">Singapore Airl</option>
                            <option value="GW">Sky Greece</option>
                            <option value="IE">Solomon Airlines</option>
                            <option value="SA">South African</option>
                            <option value="9X">Southern Airways</option>
                            <option value="WN">Southwest</option>
                            <option value="UL">SriLankan</option>
                            <option value="6G">Sun Air Express</option>
                            <option value="SY">Sun Country</option>
                            <option value="PY">Surinam Airways</option>
                            <option value="LX">Swiss</option>
                            <option value="TA">Taca Intl</option>
                            <option value="VR">TACV Cabo Verde</option>
                            <option value="EQ">TAME Airlines</option>
                            <option value="RO">Tarom-Romanian</option>
                            <option value="TG">Thai Intl</option>
                            <option value="UN">Transaero</option>
                            <option value="9N">Tropic Air</option>
                            <option value="TU">Tunis Air</option>
                            <option value="TK">Turkish Airlines</option>
                            <option value="PS">Ukraine Intl</option>
                            <option value="UA">United</option>
                            <option value="UT">UTAir</option>
                            <option value="VX">Virgin America</option>
                            <option value="VS">Virgin Atlantic</option>
                            <option value="VA">Virgin AU Intl</option>
                            <option value="UK">Vistara</option>
                            <option value="G3">VRG Airlines</option>
                            <option value="WS">WestJet</option>
                            <option value="WM">Windward Island</option>
                            <option value="MF">Xiamen Airlines</option>
                            <option value="SE">XL Airways</option>
                            <option value="R3">Yakutia</option>
                            <option value="IY">Yemenia Yemen</option>
                          </select>
                          <span class="custom-select full-width processsp spnAirline">No Preference</span> </div>
                      </div>
                      <script>
                                            $(document).ready(function () {
                                                changepassanger("1", "0", "0", "Y");
                                            });
                                        </script> 
                    </div>
                    <div class="panel style1 arrow-right ansixteen hidden-xs">
                      <div class="row">
                        <div class="col-md-3 col-sm-3">
                          <div class="form-group processpadmar">
                            <div class="checkbox">
                              <label class="antwenty">
                                <input type="checkbox" id="chkRadiussearch" value="true" name="chkRadiussearch">
                                Search for nearby airports </label>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-3">
                          <div class="form-group processpadmar">
                            <div class="checkbox">
                              <label class="antwenty">
                                <input name="chkNonStop" type="checkbox" id="chkNonStop" class="chkNonStop" value="true" />
                                I prefer non-stop flights </label>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                          <div class="form-group processpadmar">
                            <div class="checkbox">
                              <label class="antwenty">
                                <input name="chkdatesflexible" type="checkbox" id="chkdatesflexible" value="true" />
                                My dates are flexible </label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <button id="btnModifySearch" name="btnModifySearch" class="processbutton full-width">Search Now</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                              </form>
            </div>
          </div>
        </div>        
      </section>      
    </div>