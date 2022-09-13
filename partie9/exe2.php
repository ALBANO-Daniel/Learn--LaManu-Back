<?php

$today = getdate();
if($today['mon'] < 10){ $today['mon'] = '0'.$today['mon'];}; // add the zero to months lower then 10

$today['year'] = $today['year[3]' . 'year[4]'];

print_r($today['mday']. '/' . $today['mon'] . '/' . $today['year'] );
?>
