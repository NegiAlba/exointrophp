<?php

//! Pythagore

function pythagore($num1, $num2)
{
    $hypoCarre = $num1 ** 2 + $num2 ** 2;

    //* return sqrt($hypoCarre);

    return "L'hypoténuse BC du triangle ABC triangle en A  dont le coté AB mesure $num1 cm et AC mesure $num2 cm est de " . round(sqrt($hypoCarre), 2) . " cm";
}

echo pythagore(10, 10);

echo '<br><a href="../3/index.php">Next exercice</a>';