<?php
//! Entier Pair

function estPair($number)
{
    if ($number % 2) {
        return false;
    }
    return true;
}

echo 'Test avec 10 <br>';
echo estPair(10) ? 'Vrai' : 'Faux';
echo '<br>';
echo 'Test avec 55 <br>';
echo estPair(55) ? 'Vrai' : 'Faux';
echo '<br>';

//! Exercice 9 somme des entiers pairs;

function sumEvenInts($number)
{
    $sum = 0;
    for ($j = 0; $j <= $number; $j++) {
        if (estPair($j)) {
            $sum += $j;
        }
    }
    return $sum;
}

$test = 4;

echo "Somme des entiers pairs jusqu'a $test <br>";
echo sumEvenInts($test);
echo '<br><a href="../9/index.php">Next exercice</a>';