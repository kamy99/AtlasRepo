<?php
include('../functions.php');
include('../functions_promos.php');
buildTitle('Toronto to Stockholm Flights', 'Cheap Flights from Toronto to Stockholm');
buildMenu('', 'default');
buildPromotionalSection('YYZ-Toronto, ON (YYZ)', 'STO-stockholm, Sweden (STO)', 'to_stoc', 'Cheap Flights from Toronto to Stockholm');

?>
<input id="destination" type="hidden" value="Stockholm" > 

<?php buildFooter('', 'wiki');?>
