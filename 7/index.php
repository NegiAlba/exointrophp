<?php
//! Somme multiple

function sumUntil(int $number)
{
    $sum = 0;
    for ($i = 0; $i <= $number; $i++) {
        $sum += $i;
    }

    return $sum;
}

//! Alternate formula

function sumUntilAlt(int $number)
{
    return ($number * (1 + $number)) / 2;
}

echo sumUntil(30);
echo '<br>';
echo sumUntilAlt(30);

//! SOLUTION ALTERNATIVE INSPIREE PAR HANI
$somme = [];

for ($i = 1; $i <= 30; $i++) {
    array_push($somme, $i);
}
echo '<br>';

echo "la somme de 30 premiers entiers est de: " . array_sum($somme);

echo '<br><a href="../8/index.php">Next exercice</a>';