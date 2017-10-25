<?php
include('../functions.php');
include('../functions_promos.php');
buildTitle('Toronto to Los Angeles Flights', 'Cheap Flights from Toronto to Los Angeles');
buildMenu('', 'default');
buildPromotionalSection('YYZ-Toronto, ON (YYZ)', 'LAX-Los Angeles, CA (LAX)', 'to_lax', 'Cheap Flights from Toronto to Los Angeles');

?>
<input id="destination" type="hidden" value="Los_Angeles" >

<?php buildFooter('', 'wiki');?>
