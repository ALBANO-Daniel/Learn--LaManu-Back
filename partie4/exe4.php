<?php

$num1 = 15;
$num2 = 10;


function compareNumbers($a,$b){
    $lecho = '';
    if($a>$b){
        $lecho = 'Le premier nombre est plus grand.';
    } else if($a<$b){
        $lecho = 'Le premier nombre est plus petit.';
    } else {
        $lecho = 'Les deux nombres sont identiques.';
    }
    return $lecho;
}

$msg = compareNumbers($num1,$num2);
echo $msg;