<?php

/***
$name = $_POST['curl'];
echo $name;
*/

$url = $_POST["curl"];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
$output = curl_exec($ch);
echo $output;
curl_close($ch);

?>