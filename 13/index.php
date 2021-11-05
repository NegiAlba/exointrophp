<?php

$numbers = [23, 15, 23, 5, -122, 2, 5, 12, 5, 1651, 2, 54, 5];
$numbers2 = [23, 15, 23, 5, 0, 2, 5, 12, 5, 1651, 2, 54, 5];
$numbers3 = [23, 15, 23, 5, 2, -8, 5, 12, 5, 1651, 2, 54, 5];
//* SOLUTIONS SIMPLES 1
sort($numbers);
echo "Le plus petit est " . $numbers[0];

//* SOLUTIONS SIMPLES 2
echo '<br>';
echo min($numbers2);

//* SOLUTIONS ALGO PURE

echo '<br>';
function smallestInArray($array)
{
    $min = 9223372036854775807;
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] < $min) {
            $min = $array[$i];
        }
    }

    return $min;
}

echo smallestInArray($numbers3);

echo '<br><a href="../14/index.php">Next exercice</a>';