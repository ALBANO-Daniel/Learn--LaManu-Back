<?php

$password = htmlspecialchars($_COOKIE["password"]);
$login = htmlspecialchars($_COOKIE["username"]);

echo $login . ' ' . $password;