<?php
$a = random_int(1,100);
$b = random_int(1,100);
$c = random_int(1,100);

function somme($a,$b,$c = 12){
    // var_dump($b);
    return $a+$b+$c;
}
# NULL for testing
echo somme($a, NULL ,$c);

// function somme($a,$b,$c){
//     $x = $a || 4;
//     $y = $b || 15;
//     $z = $c || 56;
//     return $x+$y+$z;
// }

// echo somme($x,$y,$z);