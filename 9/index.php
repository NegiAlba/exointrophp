<?php

//* SOLUTION PROCEDURALE
$somme = 1;
for ($i = 5; $i > 0; $i--) {
    $somme *= $i;
}
;
echo $somme;

//SOLUTION FONCTIONELLE
function factorial($number)
{
    $factorial = 1;
    for ($i = $number; $i > 0; $i--) {
        $factorial *= $i;
    }

    return $factorial;
}

echo '<br>';
echo factorial(5);

echo '<br><a href="../10/index.php">Next exercice</a>';