<?php

$lastname2 = htmlspecialchars($_COOKIE["lastname"]);
$firstname2 = htmlspecialchars($_COOKIE["firstname"]);
$age2 = htmlspecialchars($_COOKIE["age"]);

echo $lastname2 . $firstname2 . $age2;