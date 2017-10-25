<?php
include('../functions.php');
include('../functions_promos.php');
buildTitle('Calgary to Toronto Flights', 'Cheap Flights from Calgary to Toronto');
buildMenu('', 'default');
buildPromotionalSection('YYC-Calgary, AB (YYC)', 'YZ-Toronto, ON (YYZ)', 'cal_to', 'Cheap Flights from Calgary to Toronto');

?>
<input id="destination" type="hidden" value="Toronto" >

<?php buildFooter('', 'wiki');?>
