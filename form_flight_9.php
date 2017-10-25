<script type="text/javascript" src="https://res.perfectibe.com/scripts/calendar.js"></script>
<script type="text/javascript" src="https://res.perfectibe.com/scripts/jsDate.js"></script>
<!-- <script type="text/javascript" src="https://res.perfectibe.com/scripts/pibe.js"></script> -->
<script type="text/javascript" src="https://res.perfectibe.com/scripts/dropdown.js"></script>
<script type="text/javascript">
    var enable_dropdown=true;
</script>


<div id="flights-tab" class="tab-pane form-inline reservation-hotel flights_form  <?php if ($search_box == 'flights' || $search_box == 'home') { ?>active<?php } ?>" name="frmAirSearch" method="get" action="https://res.perfectibe.com/process.aspx" enctype="multipart/form-data" onSubmit="return true;"  autocomplete="off">


<form name="frmAirSearch" method="post" action="https://res.perfectibe.com/process.aspx" enctype="multipart/form-data" onSubmit="return true;">
  <input type="hidden" id="AgentID" name="AgentID" value="258"/>
  <div id="flight_form_slector" class="row">
        <h3>Cheap Flight Deals ! </h3>
    <div class="col-sm-8">
      <label class="radio-inline srch_rd_btns"><input type="radio" name="TripType" value="rdbRoundTrip" id="rdbRoundTrip"  class="rdbRoundTrip" onClick="chgTripType(this.value);" checked>Round-Trip</label>
      <label class="radio-inline  srch_rd_btns"><input type="radio" name="TripType" value="rdbOneWay" id="rdbOneWay" class="rdbOneWay" onClick="chgTripType(this.value);">One-Way</label>
      <label class="radio-inline  srch_rd_btns"><input type="radio" name="TripType" value="rdbMultiCity" id="rdbMultiCity" class="rdbMultiCity" onClick="chgTripType(this.value);">Multi-City</label> 
    </div>
  </div> 

<div id="pnlFlight1"  class="row">

    PANEL 1
</div>      <!--  eof pnlFlight1 div-->

<div id="pnlFlight2"  class="row">
    pnel 2
</div>      <!--  eof  pnlFlight2 div-->

<div id="pnlFlight3"  class="row" style="display:none">

    panel 3
</div>      <!--  eof  pnlFlight13 div-->




</form>
</div>      <!--  eof  flighta tab div-->