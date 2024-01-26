<?php

$vraag = readline('Wat word de uitwerking? + of - ');

$getal1 = readline('wat is het eerste getal?');

$getal2 = readline('wat is het tweede getal?');

if ($vraag == "+") {
    $berekening = $getal1 + $getal2;
    echo $berekening;
} else if ($vraag == "-") {
    $berekening = $getal1 - $getal2;
    echo $berekening;
}
echo $uitwerking;

?>
