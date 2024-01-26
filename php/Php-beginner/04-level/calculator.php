<?php

$uitvoer = readline("+, - , %");

$getal1 = readline("Wat is het eerste getal?");

$getal2 = readline("Wat is het tweede getal?") ;

if (!is_numeric($getal1)) {
    echo $getal1 . "is geen getal";
    exit;
}

if (!is_numeric($getal2)) {
    echo $getal2 . "is geen getal";
    exit;
}
if ($uitvoer == "+" or $uitvoer == "-" or $uitvoer == "%") {
} else {
    echo $uitvoer . " is geen geldige operatie";
    exit;
}

if ($uitvoer == '+') {
    echo $getal1 + $getal2;
} elseif ($uitvoer == '-') {
    echo $getal1 - $getal2;
} elseif ($uitvoer == '%') {
    echo $getal1 % $getal2;
}
?>
