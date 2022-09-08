<?php

$original = "echo (\$isOk) ? 'c'est ok !!' : 'c'est pas bon !!!';";

$translated = "if(\$isOk) { echo 'c'est ok !!'; } else { echo 'c'est pas bon !!!'; }" ;

echo 'Before : ' . $original . '<br>' . 'After : ' . $translated ;