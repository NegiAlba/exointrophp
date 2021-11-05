<?php
//! Boucles for

echo "Boucle For 25 premiers entiers : Croissant <br>";

for ($i = 0; $i <= 25; $i++) {
    echo $i . PHP_EOL;
}

echo '<br>';

echo "Boucle For 25 premiers entiers : Décroissant <br>";

for ($j = 25; $j > 0; $j--) {
    echo $j . PHP_EOL;
}

echo '<br>';
echo "Boucle For 25 premiers entiers : Triangle rectangle <br>";

for ($colonne = 1; $colonne <= 25; $colonne++) {
    for ($ligne = 1; $ligne <= $colonne; $ligne++) {
        echo $ligne . PHP_EOL;
    }
    echo '<br>';
}

echo '<br>';

//! SOLUTION VIA CHAINE DE CARACTERES + CONCATENATION

$n = '';
for ($i = 1; $i < 26; $i++) {
    $n .= $i . PHP_EOL;
    echo $n . "<br>";
}

echo '<a href="../7/index.php">Next exercice</a>';