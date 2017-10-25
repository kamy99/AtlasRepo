<?php include('functions.php');
include('search_functions.php');
buildTitle('Flight + Hotel');
buildMenu('flight_hotel', 'default');
 buildSearchBox('packages');
?>


<?php  include('section_home_intro.php'); ?>
<?php  include('section_airline_ad.php'); ?>
<?php  include('section_promotions.php'); ?>
<?php  //include('section_itinerary.php'); ?>
<?php  include('section_promo_boxes2.php'); ?>
<?php  include('section_last_minute.php'); ?>


<?php buildFooter(booking);?>