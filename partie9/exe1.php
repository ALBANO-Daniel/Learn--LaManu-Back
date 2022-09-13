<?php

$today = getdate();
if($today['mon'] < 10){ $today['mon'] = '0'.$today['mon'];}; // add the zero to months lower then 10
print_r($today['mday']. '/' . $today['mon'] . '/' . $today['year'] );
