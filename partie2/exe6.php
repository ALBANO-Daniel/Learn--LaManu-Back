<?php

$original = "echo (\$age >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur'";

$translated = "if(\$age >= 18) { echo 'Tu es majeur'; } else { echo 'Tu n\'es pas majeur'; }" ;

echo 'Before : ' . $original . '<br>' . 'After : ' . $translated ;