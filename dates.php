<?php

echo date('d-m-y');

echo '<br/>';

echo date('l');

echo '<br/>';

//set time zone
date_default_timezone_set('Europe/London');

echo date('h:i:s-a');

//timestamp and maketime

$timestamp = mktime(10,14,54,9,10, 1981);

echo date('d-m-Y', $timestamp);

echo '<hr/>';
// string to time

$timestamp2 = strtotime('6:45pm April 22 1980');
$timestamp3 = strtotime('tomorrow');
$timestamp4 = strtotime('next Sunday');


echo date('d-m-Y h:i:sa', $timestamp2);
echo '<br/>';
echo date('d-m-Y h:i:sa', $timestamp3);
echo '<br/>';
echo date('d-m-Y h:i:sa', $timestamp4);

?>