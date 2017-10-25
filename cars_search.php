<?php include('functions.php');
include('search_functions.php');
buildTitle('Cars ');
buildMenu('tools', 'default');
?>

<div id="bookingengine"></div>
<script>
var default_values = {
affiliate_id:"2507",
page: "step2",
// custom_css:"http://www.atlas.local/css/cars.css"
custom_css:"http://www.summitsolution.net/css/cars.css"
};
</script>
<script type="text/javascript" src="//api.supplycars.com/jsbookingengine/script.js"></script>

<?php  include('section_promotions.php'); ?>
<?php  include('section_promo_boxes2.php'); ?>
<?php  include('section_last_minute.php'); ?>

<?php buildFooter();?>