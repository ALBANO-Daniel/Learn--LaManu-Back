<?php

$num1 = 15;
$num2 = 10;

function compareNumbers($a,$b){
    if($a>$b){
        echo 'Le premier nombre est plus grand.';
    } else if($a<$b){
        echo 'Le premier nombre est plus petit.';
    } else {
        echo 'Les deux nombres sont identiques.';
    }
}

echo compareNumbers($num1,$num2);