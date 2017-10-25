<form id="flightBooking" class="generalForm bookingForm"  name="frmAirSearch" method="post" action="https://res.atlas.travel/process.aspx"
    enctype="multipart/form-data" onsubmit="return validateSearch();">
    <input type="hidden" id="AgentID" name="agentid" value="258" />
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

                                <div class="row search_form_row">
                                    <div class="col-xs-6">
                                        <strong>Departure Date</strong>
                                    </div>   
                                    <div class="col-xs-6">
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
                                    <div class="col-xs-6">


<select class="calendarDateInput" id="txtDate1_Month_ID" onchange="txtDate1_Object.changeMonth(this)">
<option value="0">Jan</option>
<option value="1">Feb</option>
<option value="2">Mar</option>
<option value="3">Apr</option>
<option value="4">May</option>
<option value="5">Jun</option>
<option value="6">Jul</option>
<option value="7">Aug</option>
<option value="8">Sep</option>
<option value="9">Oct</option>
<option value="10" selected="">Nov</option>
<option value="11">Dec</option>
</select>


<select class="calendarDateInput" id="txtDate1_Day_ID" onchange="txtDate1_Object.changeDay(this)">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option selected="">12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
<option>26</option>
<option>27</option>
<option>28</option>
<option>29</option>
<option>30</option>
</select>

<input class="calendarDateInput" id="txtDate1_Year_ID" size="4" maxlength="4" title="Year" value="2014" onkeypress="return YearDigitsOnly(window.event)" onkeyup="txtDate1_Object.checkYear(this)" onblur="txtDate1_Object.fixYear(this)" type="text">

<a id="txtDate1_ID_Link" href="javascript:txtDate1_Object.show()" onmouseover="return txtDate1_Object.iconHover(true)" onmouseout="return txtDate1_Object.iconHover(false)"><img src="https://book.perfectibe.com/images/cal/calendar.gif" title="Calendar" align="bottom" border="0"></a>&nbsp;<span id="txtDate1_ID" style="position:absolute;visibility:hidden;width:126px;background-color:white;border:1px solid dimgray;" onmouseover="txtDate1_Object.handleTimer(true)" onmouseout="txtDate1_Object.handleTimer(false)">
<table width="126" cellpadding="1" cellspacing="0">
<tbody><tr style="background-color:buttonface;">
<td id="txtDate1_Previous_ID" style="cursor:default" class="calendarDateInput" onclick="txtDate1_Object.previous.go()" onmousedown="VirtualButton(this,true)" onmouseup="VirtualButton(this,false)" onmouseover="return txtDate1_Object.previous.hover(this,true)" onmouseout="return txtDate1_Object.previous.hover(this,false)" title="October" align="center"><img src="https://book.perfectibe.com/images/cal/prev.gif"></td>
<td id="txtDate1_Current_ID" style="cursor:pointer" class="calendarDateInput" colspan="5" onclick="txtDate1_Object.displayed.goCurrent()" onmouseover="self.status='Click to view November 2014';return true;" onmouseout="self.status='';return true;" title="Show Current Month" align="center">November 2014</td>
<td id="txtDate1_Next_ID" style="cursor:default" class="calendarDateInput" onclick="txtDate1_Object.next.go()" onmousedown="VirtualButton(this,true)" onmouseup="VirtualButton(this,false)" onmouseover="return txtDate1_Object.next.hover(this,true)" onmouseout="return txtDate1_Object.next.hover(this,false)" title="December" align="center"><img src="https://book.perfectibe.com/images/cal/next.gif"></td></tr>
<tr>
<td class="calendarDateInput" style="height:16;width:18;font-weight:bold;border-top:1px solid dimgray;border-bottom:1px solid dimgray;" width="18" align="center">S</td>
<td class="calendarDateInput" style="height:16;width:18;font-weight:bold;border-top:1px solid dimgray;border-bottom:1px solid dimgray;" width="18" align="center">M</td>
<td class="calendarDateInput" style="height:16;width:18;font-weight:bold;border-top:1px solid dimgray;border-bottom:1px solid dimgray;" width="18" align="center">T</td>
<td class="calendarDateInput" style="height:16;width:18;font-weight:bold;border-top:1px solid dimgray;border-bottom:1px solid dimgray;" width="18" align="center">W</td>
<td class="calendarDateInput" style="height:16;width:18;font-weight:bold;border-top:1px solid dimgray;border-bottom:1px solid dimgray;" width="18" align="center">T</td>
<td class="calendarDateInput" style="height:16;width:18;font-weight:bold;border-top:1px solid dimgray;border-bottom:1px solid dimgray;" width="18" align="center">F</td>
<td class="calendarDateInput" style="height:16;width:18;font-weight:bold;border-top:1px solid dimgray;border-bottom:1px solid dimgray;" width="18" align="center">S</td>
</tr>
</tbody></table>
<span id="txtDate1_DayTable_ID"><table style="cursor:default" width="126" cellpadding="1" cellspacing="0"><tbody><tr><td class="calendarDateInput" style="height:16">&nbsp;</td><td class="calendarDateInput" style="height:16">&nbsp;</td><td class="calendarDateInput" style="height:16">&nbsp;</td><td class="calendarDateInput" style="height:16">&nbsp;</td><td class="calendarDateInput" style="height:16">&nbsp;</td><td class="calendarDateInput" style="height:16">&nbsp;</td><td class="calendarDateInput" style="cursor:default;height:16;width:18;color:black;;background-color:white" onclick="txtDate1_Object.pickDay(1)" onmouseover="return txtDate1_Object.displayed.dayHover(this,true,'white',1)" onmouseout="return txtDate1_Object.displayed.dayHover(this,false,'white')" align="center">1</td></tr><tr><td class="calendarDateInput" style="cursor:default;height:16;width:18;color:black;;background-color:white" onclick="txtDate1_Object.pickDay(2)" onmouseover="return txtDate1_Object.displayed.dayHover(this,true,'white',2)" onmouseout="return txtDate1_Object.displayed.dayHover(this,false,'white')" align="center">2</td><td class="calendarDateInput" style="cursor:default;height:16;width:18;color:black;;background-color:white" onclick="txtDate1_Object.pickDay(3)" onmouseover="return txtDate1_Object.displayed.dayHover(this,true,'white',3)" onmouseout="return txtDate1_Object.displayed.dayHover(this,false,'white')" align="center">3</td><td class="calendarDateInput" style="cursor:default;height:16;width:18;color:black;;background-color:white" onclick="txtDate1_Object.pickDay(4)" onmouseover="return txtDate1_Object.displayed.dayHover(this,true,'white',4)" onmouseout="return txtDate1_Object.displayed.dayHover(this,false,'white')" align="center">4</td><td class="calendarDateInput" style="cursor:default;height:16;width:18;color:black;;background-color:white" onclick="txtDate1_Object.pickDay(5)" onmouseover="return txtDate1_Object.displayed.dayHover(this,true,'white',5)" onmouseout="return txtDate1_Object.displayed.dayHover(this,false,'white')" align="center">5</td><td class="calendarDateInput" style="cursor:default;height:16;width:18;color:black;;background-color:white" onclick="txtDate1_Object.pickDay(6)" onmouseover="return txtDate1_Object.displayed.dayHover(this,true,'white',6)" onmouseout="return txtDate1_Object.displayed.dayHover(this,false,'white')" align="center">6</td><td class="calendarDateInput" style="cursor:default;height:16;width:18;color:black;;background-color:white" onclick="txtDate1_Object.pickDay(7)" onmouseover="return txtDate1_Object.displayed.dayHover(this,true,'white',7)" onmouseout="return txtDate1_Object.displayed.dayHover(this,false,'white')" align="center">7</td><td class="calendarDateInput" style="cursor:default;height:16;width:18;color:black;;background-color:white" onclick="txtDate1_Object.pickDay(8)" onmouseover="return txtDate1_Object.displayed.dayHover(this,true,'white',8)" onmouseout="return txtDate1_Object.displayed.dayHover(this,false,'white')" align="center">8</td></tr><tr><td class="calendarDateInput" style="cursor:default;height:16;width:18;color:black;border:1px solid darkred;padding:0px;;background-color:white" onclick="txtDate1_Object.pickDay(9)" onmouseover="return txtDate1_Object.displayed.dayHover(this,true,'white',9)" onmouseout="return txtDate1_Object.displayed.dayHover(this,false,'white')" align="center">9</td><td class="calendarDateInput" style="cursor:default;height:16;width:18;color:black;;background-color:white" onclick="txtDate1_Object.pickDay(10)" onmouseover="return txtDate1_Object.displayed.dayHover(this,true,'white',10)" onmouseout="return txtDate1_Object.displayed.dayHover(this,false,'white')" align="center">10</td><td class="calendarDateInput" style="cursor:default;height:16;width:18;color:black;;background-color:white" onclick="txtDate1_Object.pickDay(11)" onmouseover="return txtDate1_Object.displayed.dayHover(this,true,'white',11)" onmouseout="return txtDate1_Object.displayed.dayHover(this,false,'white')" align="center">11</td><td class="calendarDateInput" style="cursor:default;height:16;width:18;color:white;font-weight:bold;;background-color:lightgrey" onclick="txtDate1_Object.pickDay(12)" onmouseover="return txtDate1_Object.displayed.dayHover(this,true,'lightgrey',12)" onmouseout="return txtDate1_Object.displayed.dayHover(this,false,'lightgrey')" align="center">12</td><td class="calendarDateInput" style="cursor:default;height:16;width:18;color:black;;background-color:white" onclick="txtDate1_Object.pickDay(13)" onmouseover="return txtDate1_Object.displayed.dayHover(this,true,'white',13)" onmouseout="return txtDate1_Object.displayed.dayHover(this,false,'white')" align="center">13</td><td class="calendarDateInput" style="cursor:default;height:16;width:18;color:black;;background-color:white" onclick="txtDate1_Object.pickDay(14)" onmouseover="return txtDate1_Object.displayed.dayHover(this,true,'white',14)" onmouseout="return txtDate1_Object.displayed.dayHover(this,false,'white')" align="center">14</td><td class="calendarDateInput" style="cursor:default;height:16;width:18;color:black;;background-color:white" onclick="txtDate1_Object.pickDay(15)" onmouseover="return txtDate1_Object.displayed.dayHover(this,true,'white',15)" onmouseout="return txtDate1_Object.displayed.dayHover(this,false,'white')" align="center">15</td></tr><tr><td class="calendarDateInput" style="cursor:default;height:16;width:18;color:black;;background-color:white" onclick="txtDate1_Object.pickDay(16)" onmouseover="return txtDate1_Object.displayed.dayHover(this,true,'white',16)" onmouseout="return txtDate1_Object.displayed.dayHover(this,false,'white')" align="center">16</td><td class="calendarDateInput" style="cursor:default;height:16;width:18;color:black;;background-color:white" onclick="txtDate1_Object.pickDay(17)" onmouseover="return txtDate1_Object.displayed.dayHover(this,true,'white',17)" onmouseout="return txtDate1_Object.displayed.dayHover(this,false,'white')" align="center">17</td><td class="calendarDateInput" style="cursor:default;height:16;width:18;color:black;;background-color:white" onclick="txtDate1_Object.pickDay(18)" onmouseover="return txtDate1_Object.displayed.dayHover(this,true,'white',18)" onmouseout="return txtDate1_Object.displayed.dayHover(this,false,'white')" align="center">18</td><td class="calendarDateInput" style="cursor:default;height:16;width:18;color:black;;background-color:white" onclick="txtDate1_Object.pickDay(19)" onmouseover="return txtDate1_Object.displayed.dayHover(this,true,'white',19)" onmouseout="return txtDate1_Object.displayed.dayHover(this,false,'white')" align="center">19</td><td class="calendarDateInput" style="cursor:default;height:16;width:18;color:black;;background-color:white" onclick="txtDate1_Object.pickDay(20)" onmouseover="return txtDate1_Object.displayed.dayHover(this,true,'white',20)" onmouseout="return txtDate1_Object.displayed.dayHover(this,false,'white')" align="center">20</td><td class="calendarDateInput" style="cursor:default;height:16;width:18;color:black;;background-color:white" onclick="txtDate1_Object.pickDay(21)" onmouseover="return txtDate1_Object.displayed.dayHover(this,true,'white',21)" onmouseout="return txtDate1_Object.displayed.dayHover(this,false,'white')" align="center">21</td><td class="calendarDateInput" style="cursor:default;height:16;width:18;color:black;;background-color:white" onclick="txtDate1_Object.pickDay(22)" onmouseover="return txtDate1_Object.displayed.dayHover(this,true,'white',22)" onmouseout="return txtDate1_Object.displayed.dayHover(this,false,'white')" align="center">22</td></tr><tr><td class="calendarDateInput" style="cursor:default;height:16;width:18;color:black;;background-color:white" onclick="txtDate1_Object.pickDay(23)" onmouseover="return txtDate1_Object.displayed.dayHover(this,true,'white',23)" onmouseout="return txtDate1_Object.displayed.dayHover(this,false,'white')" align="center">23</td><td class="calendarDateInput" style="cursor:default;height:16;width:18;color:black;;background-color:white" onclick="txtDate1_Object.pickDay(24)" onmouseover="return txtDate1_Object.displayed.dayHover(this,true,'white',24)" onmouseout="return txtDate1_Object.displayed.dayHover(this,false,'white')" align="center">24</td><td class="calendarDateInput" style="cursor:default;height:16;width:18;color:black;;background-color:white" onclick="txtDate1_Object.pickDay(25)" onmouseover="return txtDate1_Object.displayed.dayHover(this,true,'white',25)" onmouseout="return txtDate1_Object.displayed.dayHover(this,false,'white')" align="center">25</td><td class="calendarDateInput" style="cursor:default;height:16;width:18;color:black;;background-color:white" onclick="txtDate1_Object.pickDay(26)" onmouseover="return txtDate1_Object.displayed.dayHover(this,true,'white',26)" onmouseout="return txtDate1_Object.displayed.dayHover(this,false,'white')" align="center">26</td><td class="calendarDateInput" style="cursor:default;height:16;width:18;color:black;;background-color:white" onclick="txtDate1_Object.pickDay(27)" onmouseover="return txtDate1_Object.displayed.dayHover(this,true,'white',27)" onmouseout="return txtDate1_Object.displayed.dayHover(this,false,'white')" align="center">27</td><td class="calendarDateInput" style="cursor:default;height:16;width:18;color:black;;background-color:white" onclick="txtDate1_Object.pickDay(28)" onmouseover="return txtDate1_Object.displayed.dayHover(this,true,'white',28)" onmouseout="return txtDate1_Object.displayed.dayHover(this,false,'white')" align="center">28</td><td class="calendarDateInput" style="cursor:default;height:16;width:18;color:black;;background-color:white" onclick="txtDate1_Object.pickDay(29)" onmouseover="return txtDate1_Object.displayed.dayHover(this,true,'white',29)" onmouseout="return txtDate1_Object.displayed.dayHover(this,false,'white')" align="center">29</td></tr><tr><td class="calendarDateInput" style="cursor:default;height:16;width:18;color:black;;background-color:white" onclick="txtDate1_Object.pickDay(30)" onmouseover="return txtDate1_Object.displayed.dayHover(this,true,'white',30)" onmouseout="return txtDate1_Object.displayed.dayHover(this,false,'white')" align="center">30</td><td class="calendarDateInput" style="height:16">&nbsp;</td><td class="calendarDateInput" style="height:16">&nbsp;</td><td class="calendarDateInput" style="height:16">&nbsp;</td><td class="calendarDateInput" style="height:16">&nbsp;</td><td class="calendarDateInput" style="height:16">&nbsp;</td><td class="calendarDateInput" style="height:16">&nbsp;</td></tr></tbody></table></span>
</span>


                                    </div>   
                                    <div class="col-xs-6">

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
                                </div>   

                                <div class="row">
                                    <div class="col-xs-6">
                                        <input type="checkbox" name="chkFlexSearch1" id="chkFlexSearch1" value="true" />
                                       <label for="chkFlexSearch1">+/- 1 Day Search</label>
                                    </div>   
                                    <div class="col-xs-6">
                                    </div>
                                </div>   

                                <div class="row search_form_row">
                                    <div class="col-xs-6">
                                        <strong>Return Date</strong>
                                    </div>   
                                    <div class="col-xs-6">
                                    </div>
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
                                        <div class="col-xs-6">

                                <script type="text/javascript">                                    DateInput('txtDate2', true, 'MM/DD/YYYY', formatDate(dateAdd('d', 7, Today), 'MM/dd/yyyy'))</script><input name="txtDate2" value="11/16/2014" type="hidden">
<table cellpadding="0" cellspacing="2"><tbody><tr>
<td valign="middle">
<select class="calendarDateInput" id="txtDate2_Month_ID" onchange="txtDate2_Object.changeMonth(this)">
<option value="0">Jan</option>
<option value="1">Feb</option>
<option value="2">Mar</option>
<option value="3">Apr</option>
<option value="4">May</option>
<option value="5">Jun</option>
<option value="6">Jul</option>
<option value="7">Aug</option>
<option value="8">Sep</option>
<option value="9">Oct</option>
<option value="10" selected="">Nov</option>
<option value="11">Dec</option>
</select>
</td>
<td valign="middle">
<select class="calendarDateInput" id="txtDate2_Day_ID" onchange="txtDate2_Object.changeDay(this)">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option selected="">16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
<option>26</option>
<option>27</option>
<option>28</option>
<option>29</option>
<option>30</option>
</select>
</td>
<td valign="middle">
<input class="calendarDateInput" id="txtDate2_Year_ID" size="4" maxlength="4" title="Year" value="2014" onkeypress="return YearDigitsOnly(window.event)" onkeyup="txtDate2_Object.checkYear(this)" onblur="txtDate2_Object.fixYear(this)" type="text">
</td><td valign="middle">
<a id="txtDate2_ID_Link" href="javascript:txtDate2_Object.show()" onmouseover="return txtDate2_Object.iconHover(true)" onmouseout="return txtDate2_Object.iconHover(false)"><img src="https://book.perfectibe.com/images/cal/calendar.gif" title="Calendar" align="bottom" border="0"></a>&nbsp;<span id="txtDate2_ID" style="position:absolute;visibility:hidden;width:126px;background-color:white;border:1px solid dimgray;" onmouseover="txtDate2_Object.handleTimer(true)" onmouseout="txtDate2_Object.handleTimer(false)">
<table width="126" cellpadding="1" cellspacing="0">
<tbody><tr style="background-color:buttonface;">
<td id="txtDate2_Previous_ID" style="cursor:default" class="calendarDateInput" onclick="txtDate2_Object.previous.go()" onmousedown="VirtualButton(this,true)" onmouseup="VirtualButton(this,false)" onmouseover="return txtDate2_Object.previous.hover(this,true)" onmouseout="return txtDate2_Object.previous.hover(this,false)" title="October" align="center"><img src="https://book.perfectibe.com/images/cal/prev.gif"></td>
<td id="txtDate2_Current_ID" style="cursor:pointer" class="calendarDateInput" colspan="5" onclick="txtDate2_Object.displayed.goCurrent()" onmouseover="self.status='Click to view November 2014';return true;" onmouseout="self.status='';return true;" title="Show Current Month" align="center">November 2014</td>
<td id="txtDate2_Next_ID" style="cursor:default" class="calendarDateInput" onclick="txtDate2_Object.next.go()" onmousedown="VirtualButton(this,true)" onmouseup="VirtualButton(this,false)" onmouseover="return txtDate2_Object.next.hover(this,true)" onmouseout="return txtDate2_Object.next.hover(this,false)" title="December" align="center"><img src="https://book.perfectibe.com/images/cal/next.gif"></td></tr>
<tr>
<td class="calendarDateInput" style="height:16;width:18;font-weight:bold;border-top:1px solid dimgray;border-bottom:1px solid dimgray;" width="18" align="center">S</td>
<td class="calendarDateInput" style="height:16;width:18;font-weight:bold;border-top:1px solid dimgray;border-bottom:1px solid dimgray;" width="18" align="center">M</td>
<td class="calendarDateInput" style="height:16;width:18;font-weight:bold;border-top:1px solid dimgray;border-bottom:1px solid dimgray;" width="18" align="center">T</td>
<td class="calendarDateInput" style="height:16;width:18;font-weight:bold;border-top:1px solid dimgray;border-bottom:1px solid dimgray;" width="18" align="center">W</td>
<td class="calendarDateInput" style="height:16;width:18;font-weight:bold;border-top:1px solid dimgray;border-bottom:1px solid dimgray;" width="18" align="center">T</td>
<td class="calendarDateInput" style="height:16;width:18;font-weight:bold;border-top:1px solid dimgray;border-bottom:1px solid dimgray;" width="18" align="center">F</td>
<td class="calendarDateInput" style="height:16;width:18;font-weight:bold;border-top:1px solid dimgray;border-bottom:1px solid dimgray;" width="18" align="center">S</td>
</tr>
</tbody></table>
<span id="txtDate2_DayTable_ID"><table style="cursor:default" width="126" cellpadding="1" cellspacing="0"><tbody><tr><td class="calendarDateInput" style="height:16">&nbsp;</td><td class="calendarDateInput" style="height:16">&nbsp;</td><td class="calendarDateInput" style="height:16">&nbsp;</td><td class="calendarDateInput" style="height:16">&nbsp;</td><td class="calendarDateInput" style="height:16">&nbsp;</td><td class="calendarDateInput" style="height:16">&nbsp;</td><td class="calendarDateInput" style="cursor:default;height:16;width:18;color:black;;background-color:white" onclick="txtDate2_Object.pickDay(1)" onmouseover="return txtDate2_Object.displayed.dayHover(this,true,'white',1)" onmouseout="return txtDate2_Object.displayed.dayHover(this,false,'white')" align="center">1</td></tr><tr><td class="calendarDateInput" style="cursor:default;height:16;width:18;color:black;;background-color:white" onclick="txtDate2_Object.pickDay(2)" onmouseover="return txtDate2_Object.displayed.dayHover(this,true,'white',2)" onmouseout="return txtDate2_Object.displayed.dayHover(this,false,'white')" align="center">2</td><td class="calendarDateInput" style="cursor:default;height:16;width:18;color:black;;background-color:white" onclick="txtDate2_Object.pickDay(3)" onmouseover="return txtDate2_Object.displayed.dayHover(this,true,'white',3)" onmouseout="return txtDate2_Object.displayed.dayHover(this,false,'white')" align="center">3</td><td class="calendarDateInput" style="cursor:default;height:16;width:18;color:black;;background-color:white" onclick="txtDate2_Object.pickDay(4)" onmouseover="return txtDate2_Object.displayed.dayHover(this,true,'white',4)" onmouseout="return txtDate2_Object.displayed.dayHover(this,false,'white')" align="center">4</td><td class="calendarDateInput" style="cursor:default;height:16;width:18;color:black;;background-color:white" onclick="txtDate2_Object.pickDay(5)" onmouseover="return txtDate2_Object.displayed.dayHover(this,true,'white',5)" onmouseout="return txtDate2_Object.displayed.dayHover(this,false,'white')" align="center">5</td><td class="calendarDateInput" style="cursor:default;height:16;width:18;color:black;;background-color:white" onclick="txtDate2_Object.pickDay(6)" onmouseover="return txtDate2_Object.displayed.dayHover(this,true,'white',6)" onmouseout="return txtDate2_Object.displayed.dayHover(this,false,'white')" align="center">6</td><td class="calendarDateInput" style="cursor:default;height:16;width:18;color:black;;background-color:white" onclick="txtDate2_Object.pickDay(7)" onmouseover="return txtDate2_Object.displayed.dayHover(this,true,'white',7)" onmouseout="return txtDate2_Object.displayed.dayHover(this,false,'white')" align="center">7</td><td class="calendarDateInput" style="cursor:default;height:16;width:18;color:black;;background-color:white" onclick="txtDate2_Object.pickDay(8)" onmouseover="return txtDate2_Object.displayed.dayHover(this,true,'white',8)" onmouseout="return txtDate2_Object.displayed.dayHover(this,false,'white')" align="center">8</td></tr><tr><td class="calendarDateInput" style="cursor:default;height:16;width:18;color:black;border:1px solid darkred;padding:0px;;background-color:white" onclick="txtDate2_Object.pickDay(9)" onmouseover="return txtDate2_Object.displayed.dayHover(this,true,'white',9)" onmouseout="return txtDate2_Object.displayed.dayHover(this,false,'white')" align="center">9</td><td class="calendarDateInput" style="cursor:default;height:16;width:18;color:black;;background-color:white" onclick="txtDate2_Object.pickDay(10)" onmouseover="return txtDate2_Object.displayed.dayHover(this,true,'white',10)" onmouseout="return txtDate2_Object.displayed.dayHover(this,false,'white')" align="center">10</td><td class="calendarDateInput" style="cursor:default;height:16;width:18;color:black;;background-color:white" onclick="txtDate2_Object.pickDay(11)" onmouseover="return txtDate2_Object.displayed.dayHover(this,true,'white',11)" onmouseout="return txtDate2_Object.displayed.dayHover(this,false,'white')" align="center">11</td><td class="calendarDateInput" style="cursor:default;height:16;width:18;color:black;;background-color:white" onclick="txtDate2_Object.pickDay(12)" onmouseover="return txtDate2_Object.displayed.dayHover(this,true,'white',12)" onmouseout="return txtDate2_Object.displayed.dayHover(this,false,'white')" align="center">12</td><td class="calendarDateInput" style="cursor:default;height:16;width:18;color:black;;background-color:white" onclick="txtDate2_Object.pickDay(13)" onmouseover="return txtDate2_Object.displayed.dayHover(this,true,'white',13)" onmouseout="return txtDate2_Object.displayed.dayHover(this,false,'white')" align="center">13</td><td class="calendarDateInput" style="cursor:default;height:16;width:18;color:black;;background-color:white" onclick="txtDate2_Object.pickDay(14)" onmouseover="return txtDate2_Object.displayed.dayHover(this,true,'white',14)" onmouseout="return txtDate2_Object.displayed.dayHover(this,false,'white')" align="center">14</td><td class="calendarDateInput" style="cursor:default;height:16;width:18;color:black;;background-color:white" onclick="txtDate2_Object.pickDay(15)" onmouseover="return txtDate2_Object.displayed.dayHover(this,true,'white',15)" onmouseout="return txtDate2_Object.displayed.dayHover(this,false,'white')" align="center">15</td></tr><tr><td class="calendarDateInput" style="cursor:default;height:16;width:18;color:white;font-weight:bold;;background-color:lightgrey" onclick="txtDate2_Object.pickDay(16)" onmouseover="return txtDate2_Object.displayed.dayHover(this,true,'lightgrey',16)" onmouseout="return txtDate2_Object.displayed.dayHover(this,false,'lightgrey')" align="center">16</td><td class="calendarDateInput" style="cursor:default;height:16;width:18;color:black;;background-color:white" onclick="txtDate2_Object.pickDay(17)" onmouseover="return txtDate2_Object.displayed.dayHover(this,true,'white',17)" onmouseout="return txtDate2_Object.displayed.dayHover(this,false,'white')" align="center">17</td><td class="calendarDateInput" style="cursor:default;height:16;width:18;color:black;;background-color:white" onclick="txtDate2_Object.pickDay(18)" onmouseover="return txtDate2_Object.displayed.dayHover(this,true,'white',18)" onmouseout="return txtDate2_Object.displayed.dayHover(this,false,'white')" align="center">18</td><td class="calendarDateInput" style="cursor:default;height:16;width:18;color:black;;background-color:white" onclick="txtDate2_Object.pickDay(19)" onmouseover="return txtDate2_Object.displayed.dayHover(this,true,'white',19)" onmouseout="return txtDate2_Object.displayed.dayHover(this,false,'white')" align="center">19</td><td class="calendarDateInput" style="cursor:default;height:16;width:18;color:black;;background-color:white" onclick="txtDate2_Object.pickDay(20)" onmouseover="return txtDate2_Object.displayed.dayHover(this,true,'white',20)" onmouseout="return txtDate2_Object.displayed.dayHover(this,false,'white')" align="center">20</td><td class="calendarDateInput" style="cursor:default;height:16;width:18;color:black;;background-color:white" onclick="txtDate2_Object.pickDay(21)" onmouseover="return txtDate2_Object.displayed.dayHover(this,true,'white',21)" onmouseout="return txtDate2_Object.displayed.dayHover(this,false,'white')" align="center">21</td><td class="calendarDateInput" style="cursor:default;height:16;width:18;color:black;;background-color:white" onclick="txtDate2_Object.pickDay(22)" onmouseover="return txtDate2_Object.displayed.dayHover(this,true,'white',22)" onmouseout="return txtDate2_Object.displayed.dayHover(this,false,'white')" align="center">22</td></tr><tr><td class="calendarDateInput" style="cursor:default;height:16;width:18;color:black;;background-color:white" onclick="txtDate2_Object.pickDay(23)" onmouseover="return txtDate2_Object.displayed.dayHover(this,true,'white',23)" onmouseout="return txtDate2_Object.displayed.dayHover(this,false,'white')" align="center">23</td><td class="calendarDateInput" style="cursor:default;height:16;width:18;color:black;;background-color:white" onclick="txtDate2_Object.pickDay(24)" onmouseover="return txtDate2_Object.displayed.dayHover(this,true,'white',24)" onmouseout="return txtDate2_Object.displayed.dayHover(this,false,'white')" align="center">24</td><td class="calendarDateInput" style="cursor:default;height:16;width:18;color:black;;background-color:white" onclick="txtDate2_Object.pickDay(25)" onmouseover="return txtDate2_Object.displayed.dayHover(this,true,'white',25)" onmouseout="return txtDate2_Object.displayed.dayHover(this,false,'white')" align="center">25</td><td class="calendarDateInput" style="cursor:default;height:16;width:18;color:black;;background-color:white" onclick="txtDate2_Object.pickDay(26)" onmouseover="return txtDate2_Object.displayed.dayHover(this,true,'white',26)" onmouseout="return txtDate2_Object.displayed.dayHover(this,false,'white')" align="center">26</td><td class="calendarDateInput" style="cursor:default;height:16;width:18;color:black;;background-color:white" onclick="txtDate2_Object.pickDay(27)" onmouseover="return txtDate2_Object.displayed.dayHover(this,true,'white',27)" onmouseout="return txtDate2_Object.displayed.dayHover(this,false,'white')" align="center">27</td><td class="calendarDateInput" style="cursor:default;height:16;width:18;color:black;;background-color:white" onclick="txtDate2_Object.pickDay(28)" onmouseover="return txtDate2_Object.displayed.dayHover(this,true,'white',28)" onmouseout="return txtDate2_Object.displayed.dayHover(this,false,'white')" align="center">28</td><td class="calendarDateInput" style="cursor:default;height:16;width:18;color:black;;background-color:white" onclick="txtDate2_Object.pickDay(29)" onmouseover="return txtDate2_Object.displayed.dayHover(this,true,'white',29)" onmouseout="return txtDate2_Object.displayed.dayHover(this,false,'white')" align="center">29</td></tr><tr><td class="calendarDateInput" style="cursor:default;height:16;width:18;color:black;;background-color:white" onclick="txtDate2_Object.pickDay(30)" onmouseover="return txtDate2_Object.displayed.dayHover(this,true,'white',30)" onmouseout="return txtDate2_Object.displayed.dayHover(this,false,'white')" align="center">30</td><td class="calendarDateInput" style="height:16">&nbsp;</td><td class="calendarDateInput" style="height:16">&nbsp;</td><td class="calendarDateInput" style="height:16">&nbsp;</td><td class="calendarDateInput" style="height:16">&nbsp;</td><td class="calendarDateInput" style="height:16">&nbsp;</td><td class="calendarDateInput" style="height:16">&nbsp;</td></tr></tbody></table></span>
</span>
</td>
</tr>
</tbody></table>

                            

                                        </div>   
                                        <div class="col-xs-6">

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
                                </div> 

                                   <div class="row">
                                    <div class="col-xs-6">

                                <input name="chkFlexSearch2" id="chkFlexSearch2" value="true" type="checkbox">
                                <label for="chkFlexSearch2">
                                    +/- 1 Day Search</label>
                            
                                    </div>   
                                    <div class="col-xs-6">
                                    </div>
                                </div> 

                                   <div class="row search_form_row">
                                    <div class="col-xs-6">
                                          <strong>Travellers</strong>
                                    </div>   
                                    <div class="col-xs-6">
                                    </div>
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

                                <div class="row search_form_row">
                                    <div class="col-xs-6">
                                        <strong>Options</strong>
                                    </div>   
                                    <div class="col-xs-6">
                                    </div>
                                </div> 
                                
                             
                               <div class="row">
                                    <div class="col-xs-1">
                                        Cabin
                
                                    </div>
                                    <div class="col-xs-8">
                
                            <select name="ddlCabin" id="ddlCabin">
                                <option value="Y" selected>Economy / Coach</option>
                                <option value="W">Premium Economy</option>
                                <option value="C">Business</option>
                                <option value="F">First Class</option>
                            </select>
                                    </div>
                                    
                                </div>
                               <div class="row">
                                    <div class="col-xs-1">Airline
                                    </div>
                                    <div class="col-xs-8">
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
                                    <div class="col-xs-1">
                                      <input type="checkbox" name="chkNonStop" id="chkNonStop" value="true" />
                                    </div>
                                    <div class="col-xs-8">
                                 <label for="chkNonStop">
                                I prefer non-stop flights</label>
                                    </div>
                                    
                                </div>                                                             
                               <div class="row">
                                     <input type="submit" value="Search" class="btnSearch" /> 
                                </div>
                                    </form>