<?php

$original = "echo ($isOk == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';";

$translated = "if($isOk == false) { echo 'c\'est pas bon !!!'; } else { echo 'c\'est ok !!'; }" ;

echo 'Before : ' . $original . '<br>' . 'After : ' . $translated ;