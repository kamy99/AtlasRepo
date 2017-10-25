<?php
header("content-type: application/json");
// header("content-type: application/xml");

//
// $url = 'https://en.wikipedia.org/w/api.php?action=query&prop=extracts&format=json&exintro=&titles=Tehran';
//
// $handle = fopen($url, "r");
//
// if ($handle){
//   while (!feof($handle)){
//     $buffer = fgets($handle, 4096);
//     echo $buffer;
//   }
//
// }
// fclose($handle);

$destination = $_GET['destination'];

// echo $destination;
// echo "<hr>";

// $url = "http://run.plnkr.co/plunks/v8xyYN64V4nqCshgjKms/data-1.json";
$url = 'https://en.wikipedia.org/w/api.php?action=query&prop=extracts&format=json&exintro=&titles='.$destination;

// echo $url;
// echo "<hr>";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec ($ch);
curl_close ($ch);
echo $result;

?>
