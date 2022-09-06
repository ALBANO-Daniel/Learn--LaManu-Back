<?php
$age = 18;
$gender = 'Homme';

if ($age < 18){
    if( $gender == 'Homme'){
        echo 'Vous êtes un homme et vous êtes mineur';
    } else {
        echo 'Vous êtes une femme et vous êtes mineur';
    }
} else {
    if( $gender == 'Homme'){
        echo 'Vous êtes un homme et vous êtes majeur';
    } else {
        echo 'Vous êtes une femme et vous êtes majeure';
    }
}