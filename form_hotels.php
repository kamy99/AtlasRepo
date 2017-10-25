                                    <!--********************* Hotel reservation ********************-->
<form id="hotels-tab" class="tab-pane form-inline reservation-hotel <?php if ($search_box == 'hotels') { ?>active<?php } ?> " method="get" name="hotels_form" action="booking.php" data-form-action="https://www-amer.epower.amadeus.com/atlastravel/#">
  <input type="hidden" name="ProviderSelection" value="OnlyAmadeus">
  <input type="hidden" name="Method" value="HotelSearch">
  <input type="hidden" name="HotelType" value="CityAirport">
  <input type="hidden" name="Page" value="HotelResult">
  <input type="hidden" name="Culture" value="en-US">
  <input id="passed_data" type='hidden' name="passed_data">
<div class="">
  <div class="">
    <h3>Great Hotel Deals</h3>
    <div class="vac_booking_section">
      <div class="svWideWrap"> <b class="svBTop"><b class="svB1"></b><b class="svB2"></b><b class="svB3"></b><b class="svB4"> </b></b>
        <iframe class="frames_box frame_hotels" src="https://vco.sax.softvoyage.com/cgi-bin/queryhotel.cgi?code_ag=vco&alias=fxy&language=en&mode=wide&target=_top" name="Hotels">
        </iframe>
      </div>
    </div>
  </div>
</div>
</form>
