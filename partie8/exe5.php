<?php

$password = htmlspecialchars($_COOKIE["password"]);
$login = htmlspecialchars($_COOKIE["username"]);

$password = 'asdf';
$login = 'Maiden';

setcookie('login', $login);
setcookie('password', $password);