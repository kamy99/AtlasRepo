<?php
include('../functions.php');
include('../functions_promos.php');
buildTitle('Halifax to New York Flights', 'Cheap Flights from Halifax to New York');
buildMenu('', 'default');
buildPromotionalSection('YHZ-Halifax, NS (YHZ)', 'NYC-New York, NY (NYC)', 'hal_ny', 'Cheap Flights from Halifax to New York');

?>
<input id="destination" type="hidden" value="New_York" > 

<?php buildFooter('', 'wiki');?>
