<?php
include('../functions.php');
include('../functions_promos.php');
buildTitle('Vancouver to Toronto Flights', 'Cheap Flights from Vancouver to Toronto');
buildMenu('', 'default');
buildPromotionalSection('YVR-Vancouver, BC (YVR)', 'YYZ-Toronto, ON (YYZ)', 'van_to', 'Cheap Flights from Vancouver to Toronto');

?>
<input id="destination" type="hidden" value="Toronto" >

<?php buildFooter('', 'wiki');?>
