<?php

// $today = getdate();
// if($today['mon'] < 10){ $today['mon'] = '0'.$today['mon'];}; // add the zero to months lower then 10
// $todayYear = strval($today['year']);
$todayYearArray = str_split($today['year'], 2);
// var_dump($todayYearArray);
// $todayYearArray = $todayYearArray[3] . $todayYearArray[4];
print_r($today['mday']. '-' . $today['mon'] . '-' . $todayYearArray[1] );

