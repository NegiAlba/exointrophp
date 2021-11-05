<?php

//* Solution en utilisant une variable de transition
$a = 185;
$b = 581;
$c;

$c = $a;
$a = $b;
$b = $c;

echo $a . PHP_EOL;
echo $b . PHP_EOL;

echo '<br>';

//* Solution avec un array que l'on réassigne;

function change($val1, $val2)
{
    [$val1, $val2] = [$val2, $val1];
    return "($val2, $val1)";
}

echo change(5, 4);

echo '<br><a href="../11/index.php">Next exercice</a>';