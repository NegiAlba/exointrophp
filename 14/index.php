<?php

$numbers = [23, 15, 23, 5, 2, -8, 5, 12, 5, 1651, 2, 54, 5];

echo '<pre>';
print_r($numbers);
echo '</pre>';

//* SOLUTIONS SIMPLES 1
// sort($numbers);

//* var_dump() sert à afficher avec des infos suplémentaires concernant cette variable : type, sa longueur et son contenu

//* var_dump() va surtout servir à afficher le contenu d'un tableau durant le développement : une fonction similaire est print_r() qui permet d'afficher un tableau avec son contenu sans toutefois fournir des infos supplémentaires.

echo '<pre>';
print_r($numbers);
echo '</pre>';

function arraySort(array $array)
{
    $length = count($array);

    //* La première boucle va traverser tous les éléments du tableau
    for ($i = 0; $i < $length; $i++) {
        //* Cibler les derniers éléments qui sont en place, et les changer si ils ne sont pas en place

        for ($j = 0; $j < $length - $i - 1; $j++) {
            if ($array[$j] > $array[$j + 1]) {
                $transition = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $transition;
            }
        }
    }
    return $array;
}

echo '<pre>';
print_r(arraySort($numbers));
echo '</pre>';

echo '<br><a href="../13/index.php">Next exercice</a>';