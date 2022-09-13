<?php

$user_agent = $_SERVER['HTTP_USER_AGENT'];
$user_ip = $_SERVER['REMOTE_ADDR'];
$user_server_name = $_SERVER['SERVER_NAME'];

setcookie("cookie[userAgent]", $user_agent);
setcookie("cookie[serverIP]", $user_ip);
setcookie("cookie[serverName]", $user_server_name);


if (isset($_COOKIE['cookie'])) {
    foreach ($_COOKIE['cookie'] as $name => $value) {
        $name = htmlspecialchars($name);
        $value = htmlspecialchars($value);
        echo "$name : $value <br />\n";
    }
}