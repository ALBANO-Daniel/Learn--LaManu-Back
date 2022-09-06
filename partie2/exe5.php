<!-- Traduire ce code avec des if et des else : 
< ?php
  echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
?> -->
<?php

$original = "(\$gender != 'Homme') ? C'est une développeuse !!!' : C'est un développeur !!!';";

$translated = "if(\$gender != 'Homme) { echo C'est une développeuse !!!'; } else { echo C'est un développeur !!!'; }" ;

echo 'Before : ' . $original . '<br>' . 'After : ' . $translated ;