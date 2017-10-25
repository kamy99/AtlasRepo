<?php include('functions.php');
include('search_functions.php');
buildTitle('Cars');
buildMenu('cars', 'default');
 //buildSearchBox('cars');
?>
<div id="bookingengine"></div>
<script>
var default_values = {
affiliate_id:"2507",
page: "managebooking",
custom_css: "",
language: "en",
show_multilingual: "1",
terms_page:"#"
//width: "100%",
};
</script>
<script type="text/javascript" src="//api.supplycars.com/jsbookingengine/script.js"></script>​
<?php  include('section_promotions.php'); ?>
<?php  include('section_promo_boxes2.php'); ?>
<?php // include('section_itinerary.php'); ?>
<?php  include('section_last_minute.php'); ?>


<?php buildFooter(booking);?>
