<?php

//* SOLUTION DANS LE SENS H=>M=>S
function convertTime($temps)
{
    //! On va progressivement formater notre temps de façon à l'afficher au format HH:mm:ss

    //? Repères chronologiques
    // $journee = 24*$heure
    // $minutes = 60;
    // $heure = 60 * $minutes;

    //? Division euclidienne : Modulo
    //* 10/5 = 2
    //* 10%5 = 0

    //* 10/3 = 3.3333
    //* 10%3 = 1

    //* 50%24 = 2

    //? Séparation des parties chronologiques
    // $jours = intval($temps / 24 * 60 * 60);
    // $joursModulo = $temps % (24 * 60 * 60);

    $heures = intval($temps / (60 * 60)); // 96 heures
    $heuresModulo = $temps % (60 * 60); // et des poussières

    $minutes = intval($heuresModulo / 60); //poussières d'heures = 37 minutes en réalité
    $minutesModulo = $heuresModulo % 60; // et des poussières

    $secondes = $minutesModulo % 60; //52 secondes

    return "$heures : $minutes : $secondes";

}

//* SOLUTION DANS LE SENS S=>M=>H

function changeTime($nombre)
{
    $seconde = $nombre % 60; //52
    $minute = (($nombre - $seconde) / 60) % 60; //   347872 - 52 = 347820 (nombres de temps moins les secondes restantes) => 347820/60 = 5797 minutes % 60 => 37 minutes restantes
    $heure = ((($nombre - $seconde) / 60) - $minute) / 60; // 347872 - 37 minutes et 52 secondes => xxxxxx / 60 = 96 heures

    //? FORMATER LA SOLUTION POUR AVOIR LA CHAINE DE CARAC
    return 'Ce nombre : ' . $nombre . ' correspond à : ' . $heure . 'h' . $minute . 'm' . $seconde . 's.';
}

echo changeTime(347872);
echo convertTime(1500);

echo '<br><a href="../12/index.php">Next exercice</a>';