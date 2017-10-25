<?php
include('../functions.php');
include('../functions_promos.php');
buildTitle('Toronto to London Flights', 'Cheap Flights from Toronto to London');
buildMenu('', 'default');
buildPromotionalSection('YYZ-Toronto, ON (YYZ)', 'LON-London, England (LON)', 'to_lon', 'Cheap Flights from Toronto to London');

?>
<input id="destination" type="hidden" value="London" > 

<?php buildFooter('', 'wiki');?>
