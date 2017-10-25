<?php include('functions.php');
include('search_functions.php');
buildTitle('Atlas Trvel Booking');
buildMenu('tools', 'default');
?>

<div id="fakeLoader"></div>
<div class="fakeloader">Results Loading</div>
<input id="booking_url" type="hidden" value="https://www-amer.epower.amadeus.com/atlastravel/#<?php echo str_replace('/booking.php?', '' ,$_SERVER[REQUEST_URI]);?>" >

<section class="top-we-are solo-container">
    <div class="container">
      <div class="row">
         <div class="col-md-12">
              <iframe src="" id="booking_engine" name="booking_engine" height="3000px" width="1100px" border="0"></iframe>
        </div>
      </div>
    </div>
</section>
<link rel="stylesheet" href="/css/fakeLoader.css">
<?php buildFooter(booking, fakeLoader_min);?>