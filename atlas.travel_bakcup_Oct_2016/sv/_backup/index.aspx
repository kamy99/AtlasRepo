<%@ page language="VB" autoeventwireup="false" inherits="index, App_Web_71zaqkqz" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>::Welcome to atlas.travel::Flight</title>
<link href="css.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="https://res.atlas.travel/scripts/calendar.js"></script>
<script type="text/javascript" src="https://res.atlas.travel/scripts/jsDate.js"></script>
<script type="text/javascript" src="https://res.atlas.travel/scripts/pibe.js"></script>
<style type="text/css">
<!--
.style1 {color: #FFFFFF;}
.style2 {color: #666666;}
.style3{color:#666666;}
-->
</style>

	 <script language ="javascript" type ="text/javascript" >
	     function status() {
	         alert("Record already exist!..");
	         return false;
	     }

	     function status1() {
	         alert("Record not found!..");
	         return false;
	     }
    
    </script>
<script type="text/JavaScript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->

</script>
<script language="javascript">
    function newWindow(curr) {
        currWindow = window.open(curr, 'CurrConverter', 'width=460,height=310');
        currWindow.focus;
    }
    function validate() {
        if (document.getElementById("txtemail").value == ' ' || document.getElementById("txtemail").value == '') {
            document.getElementById('txtemail').focus();
            alert("Email is required...");
            return false;
        }
        if (document.getElementById("txtname").value == ' ' || document.getElementById("txtname").value == '') {
            document.getElementById('txtname').focus();
            alert("Name is required...");
            return false;
        }
        if (document.getElementById('txtemail').value != "") {
            var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/

            if (!document.getElementById('txtemail').value.match(re)) {
                alert('Your Email address is not in a valid format.\n Some valid formats are:\nsomeone@somewhere.com\nsome_one@some.where.net')
                document.getElementById('txtemail').focus();
                alert("Invalid Email...");
                return false;
            }
        }
        document.forms["frmr"].submit();  
    }
	</script>
<style type="text/css">
<!--
.style2 {color: #FFFFFF}
.style3 {color: #002763}
    #txtname
    {
        width: 101px;
    }
    #txtemail
    {
        width: 105px;
    }
.style7 {color:#666666;}
.style7 {color: #002763}
-->
</style>
</head>
<body onload="MM_preloadImages('images/insurance.jpg','images/services.jpg','images/flight.jpg','images/car.jpg','images/hotel.jpg','images/home.jpg','images/vacation.jpg','images/cruise.jpg')">
<div id="container">
<div id="header">
<div class="menu" style="width: 859px; height: 64px">
  <div align="left"><a href="index.aspx" target="_parent"><img src="images/home2.jpg" name="Image1" width="80" height="32" border="0" id="Image1" onmouseover="MM_swapImage('Image1','','images/home.jpg',1)" onmouseout="MM_swapImgRestore()" /></a><a href="flight.html" target="_parent"><img src="images/flight2.jpg" name="Image2" width="80" height="32" border="0" id="Image2" onmouseover="MM_swapImage('Image2','','images/flight.jpg',1)" onmouseout="MM_swapImgRestore()" /></a><a href="vacation.html" target="_parent"><img src="images/vacation2.jpg" name="Image3" width="80" height="32" border="0" id="Image3" onmouseover="MM_swapImage('Image3','','images/vacation.jpg',1)" onmouseout="MM_swapImgRestore()" /></a><a href="cruise.html" target="_parent"><img src="images/cruise2.jpg" name="Image4" width="80" height="32" border="0" id="Image4" onmouseover="MM_swapImage('Image4','','images/cruise.jpg',1)" onmouseout="MM_swapImgRestore()" /></a><a href="hotel.html" target="_parent"><img src="images/hotel2.jpg" width="80" height="32" border="0" id="Image8" onmouseover="MM_swapImage('Image8','','images/hotel.jpg',1)" onmouseout="MM_swapImgRestore()" /></a><a href="car.html" target="_parent"><img src="images/car2.jpg" name="Image5" width="80" height="32" border="0" id="Image5" onmouseover="MM_swapImage('Image5','','images/car.jpg',1)" onmouseout="MM_swapImgRestore()" /></a><a href="group.html" target="_parent"><img src="images/group2.jpg" name="Image9" width="80" height="32" border="0" id="Image9" onmouseover="MM_swapImage('Image9','','images/group.jpg',1)" onmouseout="MM_swapImgRestore()" /></a><a href="insurance.html" target="_parent"><img src="images/insurance2.jpg" name="Image6" width="80" height="32" border="0" id="Image6" onmouseover="MM_swapImage('Image6','','images/insurance.jpg',1)" onmouseout="MM_swapImgRestore()" /></a><a target="_parent" href="services.html"><img src="images/services2.jpg" name="Image7" width="80" height="32" border="0" id="Image7" onmouseover="MM_swapImage('Image7','','images/services.jpg',1)" onmouseout="MM_swapImgRestore()" /></a></div>
</div>
<div class="contact" style="width: 133px; height: 41px">&nbsp;&nbsp;&nbsp;<span class="contactext"><a href="aboutus.html" target="_parent" class="contactext">About 
	us</a></span> <span class="style4">|</span> 
	<span class="contactext">
	<a href="contactus.html" target="_parent" class="contactext">Contact us</a></span></div>
</div>
<div id="blank"><img src="images/topbg.gif" /></div>
 
</div>
<div id="middle">
<div id="left">
<div class="engine">
<div class="searchtop"></div>
<div class="enginebg">
  <div class="engine2">
    <form action="https://res.atlas.travel/process.aspx" method="post" enctype="multipart/form-data" name="frmAirSearch" id="frmAirSearch" onsubmit="return validateSearch();">
      <table width="268" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="3%">&nbsp;</td>
          <td width="94%"><table width="265" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td colspan="3" align="left" valign="top"><input name="agentid" type="hidden" value="258"/>
                    <table width="298" align="left" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="20" align="left"><input type="radio" name="TripType" value="rdbRoundTrip" id="rdbRoundTrip" onclick="chgTripType(this.value);" checked="checked"/></td>
                        <td width="67" align="left"><label for="label" class="enginetext">Round-Trip</label></td>
                        <td width="20" align="left"><input type="radio" name="TripType" value="rdbOneWay" id="rdbOneWay" onclick="chgTripType(this.value);" /></td>
                        <td width="59" align="left" class="text9"><label for="label" class="enginetext">One-Way</label></td>
                        <td width="20" align="left"><input name="TripType" type="radio" id="rdbMultiCity" onclick="chgTripType(this.value);" value="rdbMultiCity" /></td>
                        <td width="89" align="left" class="text9"><label for="label"class="enginetext">Multi-City</label></td>
                      </tr>
                  </table></td>
              </tr>
              <tr>
                <td colspan="3"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="88%" align="left"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="56%" align="left" valign="top"><div id="pnlFlight1"><table width="130" cellpadding="0" cellspacing="0">
                                              <tr>
                                                <td height="20" align="left"><span class="enginetext"><strong>Flight 1 </strong></span></td>
                                              </tr>
                                              <tr>
                                                <td align="left" class="enginetext">From</td>
                                              </tr>
                                              <tr>
                                                <td align="left"><input name="txtDepCity1" type="text" class="enginetext" id="txtDepCity1" onfocus="focusObj(this);" onblur="blurObj(this);" onchange="copyTextbox(this, document.getElementById('txtArrCity2'));" value="Airport or City" defvalue="Airport or City" autocomplete="off" />                                                </td>
                                              </tr>
                                              <tr>
                                                <td align="left" valign="middle" class="enginetext">To</td>
                                              </tr>
                                              <tr>
                                                <td align="left"><input type="text" name="txtArrCity1" class="enginetext" value="Airport or City" defvalue="Airport or City" onfocus="focusObj(this);" onblur="blurObj(this);" onchange="copyTextbox(this, document.getElementById('txtDepCity2'));" autocomplete="off" id="txtArrCity1" /></td>
                                              </tr>
                                              <tr>
                                                <td align="left" valign="top"><script type="text/javascript">DateInput('txtDate1', true, 'MM/DD/YYYY', formatDate(dateAdd('d',3,Today),'MM/dd/yyyy'))</script>                                                </td>
                                              </tr>
                                              <tr>
                                                <td align="left" valign="top"><select name="ddlTime1" class="enginetext" id="ddlTime1">
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
                                                </select></td>
                                              </tr>
                                              <tr>
                                                <td align="left" valign="top"><input type="checkbox" name="chkFlexSearch1" id="chkFlexSearch1" value="true" />
                                                <span class="enginetext">+/- 1 Day Search</span></td>
                                              </tr>
                                            </table>
                                            </div></td>
                            <td width="44%" rowspan="2" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td align="center"><span class="enginetext"><strong>Travelers</strong></span></td>
                                </tr>
                                <tr>
                                  <td align="center"><div class="booktravelers">
                                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                          <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td align="center" class="enginetext"><span class="style5">Adults </span></td>
                                        </tr>
                                        <tr>
                                          <td align="center" class="enginetext"><span class="style5">(12+)</span></td>
                                        </tr>
                                        <tr>
                                          <td align="center"><select name="ddlPaxADT" class="enginetext" id="ddlPaxADT">
                                              <option value="0">0</option>
                                              <option value="1" selected="selected">1</option>
                                              <option value="2">2</option>
                                              <option value="3">3</option>
                                              <option value="4">4</option>
                                              <option value="5">5</option>
                                              <option value="6">6</option>
                                              <option value="7">7</option>
                                              <option value="8">8</option>
                                              <option value="9">9</option>
                                          </select></td>
                                        </tr>
                                        <tr>
                                          <td align="center">&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td align="center"><span class="enginetext">Children</span></td>
                                        </tr>
                                        <tr>
                                          <td align="center"><span class="enginetext">(2-11)</span></td>
                                        </tr>
                                        <tr>
                                          <td align="center"><span class="text9 style1">
                                            <select name="ddlPaxCHD" class="enginetext" id="ddlPaxCHD">
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
                                          </span></td>
                                        </tr>
                                        <tr>
                                          <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td align="center"><span class="enginetext">Infants </span></td>
                                        </tr>
                                        <tr>
                                          <td align="center"><span class="enginetext">(Under 2)</span></td>
                                        </tr>
                                        <tr>
                                          <td align="center"><select name="ddlPaxINF" class="enginetext" id="ddlPaxINF">
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
                                          </select></td>
                                        </tr>
                                      </table>
                                  </div></td>
                                </tr>
                            </table></td>
                          </tr>
                          <tr>
                            <td><table width="100" border="0" cellspacing="0" cellpadding="0" align="left">
                                <tr>
                                  <td align="left"><div id="pnlFlight2">
                                                    <table width="130" cellpadding="0" cellspacing="0">
                                                      <tr>
                                                        <td height="20" align="left"><span class="enginetext"><strong>Flight 2 </strong></span></td>
                                                      </tr>
                                                      <tr>
                                                        <td align="left" class="enginetext">From</td>
                                                      </tr>
                                                      <tr>
                                                        <td align="left"><input name="txtDepCity2" type="text" class="enginetext" id="txtDepCity2" onfocus="focusObj(this);" onblur="blurObj(this);" onchange="copyTextbox(this, document.getElementById('txtArrCity2'));" value="Airport or City" defvalue="Airport or City" autocomplete="off" /></td>
                                                      </tr>
                                                      <tr>
                                                        <td align="left" valign="middle" class="enginetext">To</td>
                                                      </tr>
                                                      <tr>
                                                        <td align="left"><input type="text" name="txtArrCity2" class="enginetext" value="Airport or City" defvalue="Airport or City" onfocus="focusObj(this);" onblur="blurObj(this);" onchange="copyTextbox(this, document.getElementById('txtDepCity3'));" autocomplete="off" id="txtArrCity2" /></td>
                                                      </tr>
                                                      <tr>
                                                        <td align="left" valign="top"><script type="text/javascript">DateInput('txtDate2', true, 'MM/DD/YYYY', formatDate(dateAdd('d',7,Today), 'MM/dd/yyyy'))</script>                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td align="left" valign="top"><select name="ddlTime2" class="enginetext" id="ddlTime2">
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
                                                        </select></td>
                                                      </tr>
                                                      <tr>
                                                        <td align="left" valign="top"><input type="checkbox" name="chkFlexSearch2" id="chkFlexSearch2" value="true" />  <span class="enginetext">+/- 1 Day Search</span></td>
                                                      </tr>
                                                    </table>
                                                </div></td>
                                </tr>
                            </table></td>
                          </tr>
                          <tr>
                            <td><table width="100" border="0" cellspacing="0" cellpadding="0" align="left">
                                <tr>
                                  <td align="left"><div id="pnlFlight3" style="display:none"  >
                                                    <table width="130" cellpadding="0" cellspacing="0">
                                                      <tr>
                                                        <td height="20" align="left"><span class="enginetext"><strong>Flight 3 </strong></span></td>
                                                      </tr>
                                                      <tr>
                                                        <td align="left" class="enginetext">From</td>
                                                      </tr>
                                                      <tr>
                                                        <td align="left"><input name="txtDepCity23" type="text" class="enginetext" id="txtDepCity23" onfocus="focusObj(this);" onblur="blurObj(this);" onchange="copyTextbox(this, document.getElementById('txtArrCity2'));" value="Airport or City" defvalue="Airport or City" autocomplete="off" /></td>
                                                      </tr>
                                                      <tr>
                                                        <td align="left" valign="middle" class="enginetext">To</td>
                                                      </tr>
                                                      <tr>
                                                        <td align="left"><input type="text" name="txtArrCity23" class="enginetext" value="Airport or City" defvalue="Airport or City" onfocus="focusObj(this);" onblur="blurObj(this);" onchange="copyTextbox(this, document.getElementById('txtDepCity3'));" autocomplete="off" id="txtArrCity23" /></td>
                                                      </tr>
                                                      <tr>
                                                        <td align="left" valign="top"><script type="text/javascript">DateInput('txtDate3', true, 'MM/DD/YYYY', formatDate(dateAdd('d',14,Today), 'MM/dd/yyyy'))</script>                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td align="left" valign="top"><select name="ddlTime3" class="enginetext" id="ddlTime3">
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
                                                        </select></td>
                                                      </tr>
                                                      <tr>
                                                        <td align="left" valign="top"><input type="checkbox" name="chkFlexSearch3" id="chkFlexSearch3" value="true" /><span class="enginetext">+/- 1 Day Search</span></td>
                                                      </tr>
                                                    </table>
                                                </div></td>
                                </tr>
                            </table></td>
                            <td>&nbsp;</td>
                          </tr>
                      </table></td>
                      <td width="12%">&nbsp;</td>
                    </tr>
                </table></td>
              </tr>
              <tr>
                <td colspan="3" align="left" valign="top"></td>
              </tr>
              <tr>
                <td colspan="3" align="left" valign="top"></td>
              </tr>
              <tr>
                <td colspan="3" align="left" class="text9"></td>
              </tr>
              
              <tr>
                <td height="25" align="left" bgcolor="#509CE5" class="text9"><span class="enginetext style2"><strong>&nbsp;Options</strong></span></td>
                <td width="208" bgcolor="#509CE5">&nbsp;</td>
                <td width="37">&nbsp;</td>
              </tr>
              <tr>
                <td width="53" align="left" bgcolor="#509CE5"><span class="enginetext style2">&nbsp;Cabin</span></td>
                <td align="left" bgcolor="#509CE5"><select name="ddlCabin" class="enginetext" id="ddlCabin">
                    <option value="Y" selected="selected">Economy / Coach</option>
                    <option value="C">Business</option>
                    <option value="F">First Class</option>
                </select></td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td align="left" bgcolor="#509CE5"><span class="enginetext style2">&nbsp;Airline</span></td>
                <td height="30" align="left" bgcolor="#509CE5"><select name="ddlAirline" class="enginetext" id="ddlAirline">
                    <option value="" selected="selected">No Preference</option>
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
                </select></td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td height="30" colspan="2" align="center"><span class="search">
                  <input name="image" type="image" src="images/search.gif" alt="Search To Book Flights Online" />
                </span></td>
                <td>&nbsp;</td>
              </tr>
          </table></td>
          <td width="3%">&nbsp;</td>
        </tr>
      </table>
    </form>
  </div>
  <div class="enginefooter"></div>


</div></div>
</div>

<div id="right">
<div class="right2">
<div class="rightleft">
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="584" height="245">
    <param name="movie" value="images/banner.swf" />
    <param name="quality" value="high" />
    <embed src="images/banner.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="584" height="245"></embed>
  </object>
</div>
<div class="traveleright">
<div class="traveler">Traveler Tools</div>
<div class="line"></div>
<div class="tools2"><img src="images/bullet.gif" /></div>
<div class="tools"><a href="aiport.html" target="_parent" class="tooltext">Airport Information </a></div>
<div class="tools2"><img src="images/bullet.gif" /></div>
<div class="tools"><a href="flightstatus.html" target="_parent" class="tooltext">Flight Status</a> </div>
<div class="tools2"><img src="images/bullet.gif" /></div>
<div class="tools"><a href="myitinerary.html" target="_parent" class="tooltext">My Itinerary</a> </div>
<div class="tools2"><img src="images/bullet.gif" /></div>
<div class="tools"><a href="weather.html" target="_blank" class="tooltext">Weather Information</a> </div>

</div>
</div>

<div id="rightmiddle">
<div class="rightmiddleleft">
<form id="frmserver" runat ="server" >
<div class="hotdeal">

<div class="hotdeal2">
<div class="price"><asp:Label ID="lblprice1"  runat ="server" ></asp:Label></div>
<div class="from"><asp:Label ID="from1" runat ="server"></asp:Label> </div>
<div class="to"><asp:Label ID="to1" runat ="server"></asp:Label> </div>
</div>

<div class="hotdeal2">
<div class="price"><asp:Label ID="lblprice2"  runat ="server" ></asp:Label></div>
<div class="from"><asp:Label ID="from2" runat ="server"></asp:Label> </div>
<div class="to"><asp:Label ID="to2" runat ="server"></asp:Label> </div>
</div>

<div class="hotdeal2">
<div class="price"><asp:Label ID="lblprice3" runat ="server"></asp:Label> </div>
<div class="from"><asp:Label ID="from3" runat ="server"></asp:Label> </div>
<div class="to"><asp:Label ID="to3" runat ="server"></asp:Label> </div>
</div>

<div class="hotdeal2">
<div class="price"><asp:Label ID="lblprice4" runat ="server"></asp:Label> </div>
<div class="from"><asp:Label ID="from4" runat ="server"></asp:Label> </div>
<div class="to"><asp:Label ID="to4" runat ="server"></asp:Label> </div>
</div>

<div class="hotdeal2">
<div class="price"><asp:Label ID="lblprice5" runat ="server"></asp:Label> </div>
<div class="from"><asp:Label ID="from5" runat ="server"></asp:Label> </div>
<div class="to"><asp:Label ID="to5" runat ="server"></asp:Label> </div>
</div>

<div class="hotdeal2">
<div class="price"><asp:Label ID="lblprice6" runat ="server"></asp:Label> </div>
<div class="from"><asp:Label ID="from6" runat ="server"></asp:Label> </div>
<div class="to"><asp:Label ID="to6" runat ="server"></asp:Label> </div>
</div>

<div class="hotdeal2">
<div class="price"><asp:Label ID="lblprice7" runat ="server"></asp:Label> </div>
<div class="from"><asp:Label ID="from7" runat ="server"></asp:Label> </div>
<div class="to"><asp:Label ID="to7" runat ="server"></asp:Label> </div>
</div>

<div class="hotdeal2">
<div class="price"><asp:Label ID="lblprice8" runat ="server"></asp:Label> </div>
<div class="from"><asp:Label ID="from8" runat ="server"></asp:Label> </div>
<div class="to"><asp:Label ID="to8" runat ="server"></asp:Label> </div>
</div>

</div></form>
</div>
<div class="newsletter"><form action="data.aspx" method="post" id="frmr">
<div class="newsname">
<div class="name">Name:</div>
<div class="namebox"><input name="txtname" id="txtname" type="text"  size="25" />
</div>
<div class="newsmail">
<div class="mail">E-mail:</div>
<div class="mailbox"> <input name="txtemail" id="txtemail" type="text"  size="25" />
</div>
</div>
<div class="options">
  <div class="add">
    <label>
   <input name="change" type="radio" value="A"  checked/>
    </label>
  </div>
  <div class="add2">ADD</div>
  <div class="remove">
    <label>
   <input name="change" type="radio" value="R" />
    </label>
  </div>
  <div class="remove2">REMOVE</div>
</div>
</div>
<div class="subscribe"><input type="image" src="images/subscribe.jpg" onclick ="return validate();" /></div>
</form></div>
</div>

<div id="right">
<div id="rightmiddle">
  <div id="div">
    <div class="family"><a href="vacation.html"><img src="images/banner1.jpg" width="244" height="193" border="0" /></a>
          </div>
    <div class="destination"><a href="flight.html"><img src="images/destinationguide.gif" border="0"/></a>
         </div>
    <div class="hotel"><a href="hotel.html"><img src="images/hotelguide.gif" border="0" /></a>
          </div>
  </div>
</div>



</div>

</div>

<div style="text-align:center; width:1022px; margin-left:auto; margin-right:auto;">
<img id="Image-Maps_6201008261612218" src="images/footer2.jpg" usemap="#Image-Maps_6201008261612218" border="0" width="1022" height="44" alt="" />
<map id="_Image-Maps_6201008261612218" name="Image-Maps_6201008261612218">
<area shape="rect" coords="290,0,435,21" href="http://atlas.travel/Condition&PrivacyPolicy.html" alt="Condition & Privacy Policy" title="Condition & Privacy Policy"    />
<area shape="rect" coords="511,23,547,39" href="http://atlas.travel/" alt="Home" title="Home"    />
<area shape="rect" coords="549,23,579,39" href="http://atlas.travel/flight.html" alt="Flight" title="Flight"    />
<area shape="rect" coords="582,23,628,39" href="http://atlas.travel/vacation.html" alt="Vacation" title="Vacation"    />
<area shape="rect" coords="634,23,668,39" href="http://atlas.travel/cruise.html" alt="Cruise" title="Cruise"    />
<area shape="rect" coords="673,23,699,39" href="http://atlas.travel/hotel.html" alt="Hotel" title="Hotel"    />
<area shape="rect" coords="706,23,724,39" href="http://atlas.travel/car.html" alt="Car" title="Car"    />
<area shape="rect" coords="730,23,762,39" href="http://atlas.travel/group.html" alt="Group" title="Group"    />
<area shape="rect" coords="768,23,818,39" href="http://atlas.travel/insurance.html" alt="Insurance" title="Insurance"    />
<area shape="rect" coords="824,23,869,39" href="http://atlas.travel/services.html" alt="Services" title="Services"    />
<area shape="rect" coords="874,23,922,39" href="http://atlas.travel/aboutus.html" alt="About Us" title="About Us"    />
<area shape="rect" coords="929,23,982,39" href="http://atlas.travel/contactus.html" alt="Contact Us" title="Contact Us"    />
<area shape="rect" coords="1018,40,1020,42" href="http://www.image-maps.com/index.php?aff=mapped_users_6201008261612218" alt="Image Map" title="Image Map" />
</map>

</div>
</div>
</body>
</html>
