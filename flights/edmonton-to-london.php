<?php
 include('../functions.php');
 include('../functions_promos.php');
 buildTitle('Edmonton to London Flights', 'Cheap Flights from Edmonton to London');
 buildMenu('', 'default');
 buildPromotionalSection('YEA-Edmonton, AB (YEA)', 'LON-London, England (LON)', 'ed_lon', 'Cheap Flights from Edmonton to London');

?>
<input id="destination" type="hidden" value="London" >

<?php buildFooter('', 'wiki');?>


<?php
// Turn off error reporting
//error_reporting(1);


// Report all errors
//error_reporting(E_ALL);


// Report all errors except E_NOTICE
//error_reporting(E_ALL & ~E_NOTICE);
?>
