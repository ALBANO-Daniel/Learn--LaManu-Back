<?php

$nom = 'LEVRAI';
$prenom = 'Faux';
$age = 66;

function bonjour($nom,$prenom,$age){
    echo "Bonjour $nom $prenom, tu as $age ans.";
}
echo bonjour($nom,$prenom,$age);