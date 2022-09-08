<?php

$chaine1 = 'Ici la premiere, ';
$chaine2 = 'et puis la deuxieme.';

function chaines($arg1, $arg2){
    return $arg1 . ' ' . $arg2;
}

echo chaines($chaine1, $chaine2);
