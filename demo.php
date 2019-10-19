<?php
$vek = 16;
if ($vek < 18) {
    echo 'Vstup pouze pro starší 18 let.';
}
// vypíše: Vstup pouze pro starší 18 let.


$cislo_a = 10;
$cislo_b = 10.0;

if ($cislo_a === $cislo_b) {
    echo 'cisla se rovnaji';
} // nerovnalo by se to, protože int vs float//


$prihlasen = false;
$vek = 18;

if ($prihlasen) {
    if ($vek > 18) {
        echo 'jste prihlasen a je vam vic nez 18';
    }
}


$prihlasen = false;
$vek = 18;

if ($prihlasen && $vek > 18) {
echo 'jste prihlasen a je vam vic nez 18';
}


$vek = 19;
if ($vek <18 || $vek > 50) {
    echo 'dostavate slevu';
}


$vek = 19;

if ($vek <15) {
    echo 'ahoj žáku';
} elseif ($vek < 19) {
    echo 'ahoj studente';
} else {
    echo 'dobrý den';
}


$i = 0;

while ($i < 10) {
      $i = $i + 1;
      echo $i;
      echo ', ';
    }
// vypíše: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10


?>