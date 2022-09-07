<?php

$age = 17;
$gender = 'homme';

function verify($age,$gender){
    if($age < 18 && $gender == 'homme'){ echo 'Vous êtes un homme et vous êtes mineur';};
    if($age >= 18 && $gender == 'homme'){ echo 'Vous êtes un homme et vous êtes majeur';};
    if($age < 18 && $gender == 'femme'){ echo 'Vous êtes une femme et vous êtes mineure';};
    if($age >= 18 && $gender == 'femme'){ echo 'Vous êtes une femme et vous êtes majeure';};
};

echo verify($age,$gender);