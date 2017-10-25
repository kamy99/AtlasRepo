<?php include('functions.php');
include('search_functions.php');
buildTitle('Vacations');
buildMenu('vacations', 'default');
 buildSearchBox_NonSSL('packages', '', '');
?>

<?php  include('section_promotions.php'); ?>
<?php  include('section_promo_boxes2.php'); ?>
<?php  //include('section_itinerary.php'); ?>
<?php  include('section_last_minute.php'); ?>

<?php buildFooter(booking);?>
