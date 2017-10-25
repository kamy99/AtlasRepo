<?php
include('../functions.php');
include('../functions_promos.php');
buildTitle('Toronto to Barcelona Flights', 'Cheap Flights from Toronto to Barcelona');
buildMenu('', 'default');
buildPromotionalSection('YYZ-Toronto, ON (YYZ)', 'BCN-Barcelona, ES (BCN)', 'to_barca', 'Cheap Flights from Toronto to Barcelona');

?>
<input id="destination" type="hidden" value="Barcelona" > 

<?php buildFooter('', 'wiki');?>
