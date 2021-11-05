<?php
//! Sinus et cosinus

/**
 * Function to calculate position of a point P in a circle of radius R = 0,P;
 *
 * @param float $angle
 * @return float
 */
function position(float $angle): string
{
    return sprintf("La position du point P(x,y) par rapport à l'angle alpha de %s degrés est P(%.4s,%.4s)", $angle, cos($angle), sin($angle));
}

echo '<br>';
echo position(60.0);

$alpha = 12;

// SOLUTION PROCEDURALE
$positionx = cos($alpha);
$positiony = sin($alpha);
echo '<br>';
echo "P est en position $positionx , $positiony";

// SOLUTION FONCTIONNELLE
function positionP($alpha)
{
    $positionx = cos($alpha);
    $positiony = sin($alpha);
    return "P est en position $positionx , $positiony";

}

echo '<br>';
echo positionP(45);

echo '<br><a href="../4/index.php">Next exercice</a>';