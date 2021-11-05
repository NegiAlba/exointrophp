<?php

$lesGensEnDistanciel = ["Ludivine", "Mathilde", "Antoine", "Théo", "David", "Lyman", "Sean", "Rémy", "Nourdine", "Sébastien", "Océane"];
$seriesChristophe = ["Dark", "True Detective", "The Sinner", "Stranger Things", "The Boys", "YOU"];

foreach ($lesGensEnDistanciel as $nom) {
    echo $nom . '<br>';
}

function displayElements(array $array)
{
    foreach ($array as $element) {
        echo $element . '<br>';
    }

    return;
}

displayElements($seriesChristophe);

echo '<br><a href="../13/index.php">Next exercice</a>';