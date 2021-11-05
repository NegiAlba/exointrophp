<?php include "header.php";?>
<br>
<h5 class="text-success">---GET et POST---</h5>
<a href="bonjour.php?nom=Ludovic">Dit moi bonjour !</a>

<form class="form-group" action="bonjour.php" method="post">

    <label for="nom">Votre nom</label>
    <input class="form-control" type="text" name="nom" id="nom">
    <label for="prenom">Votre prénom</label>
    <input class="form-control" type="text" name="prenom" id="prenom"><br>
    <button class="btn btn-primary">Envoyer</button>

</form>
<br><br>

<!-------------------- EXO 2  ------------------>
<h5 class="text-success">2.Pythagore</h5>
<?PHP
$ab = 5;
$ac = 10;

$hypothenuse = $ab ** 2 + $ac ** 2;

echo "<br>" . sqrt($hypothenuse);

?>

<br><br>

<!-------------------- EXO 3  ------------------>
<h5 class="text-success">3.Sinus et Cosinus</h5>
<?PHP
$angle = 30;

$x = cos($angle);
$y = sin($angle);

echo "le cos de " . $angle . " est " . $x . "<br>";
echo "le sin de " . $angle . " est " . $y . "<br>";

?>
<br><br>

<!-------------------- EXO 4  ------------------>
<h5 class="text-success">4.Boucle for ..</h5>
<?PHP
for ($i = 0; $i <= 25; $i++) {
    echo $i . " ";
}

?>
<br><br>

<!-------------------- EXO 5  ------------------>
<h5 class="text-success">5.Boucle for ..</h5>
<?PHP
for ($i = 25; $i >= 0; $i--) {
    echo $i . " ";
}

?>
<br><br>

<!-------------------- EXO 6  ------------------>
<h5 class="text-success">6.Boucle for .. </h5>
<?PHP
for ($i = 1; $i <= 25; $i++) {
    for ($n = 1; $n <= $i; $n++) {
        echo $n . " ";
    }
    echo "<br>";
}

?>
<br><br>

<!-------------------- EXO 7  ------------------>
<h5 class="text-success">7.Somme multiple </h5>
<?PHP
$total = 0;
for ($i = 1; $i <= 30; $i++) {
    $total = $i + $total; //$total += $i;
}
echo "la somme multiple est " . $total . "<br>";

?>
<br><br>

<!-------------------- EXO 8 ------------------>
<h5 class="text-success">8.Entier pair </h5>
<?PHP
function estPair($nombre)
{
    if ($nombre % 2 == 0) {
        return true;
    } else {
        return false;
    }
}

if (estPair(10)) {
    echo "c'est pair";
} else {
    echo "c'est pas pair";
}

?>
<br><br>

<!-------------------- EXO 9  ------------------>
<h5 class="text-success">9.Somme des entiers pairs </h5>
<?PHP
$total = 0;
for ($i = 1; $i <= 30; $i++) {
    if (estPair($i)) {
        $total = $i + $total;
    }
}
echo "la somme multiple pair est " . $total . "<br>";

?>
<br><br>

<!-------------------- EXO 10  ------------------>
<h5 class="text-success">10.Factorielle </h5>
<?PHP
function factorielle($n)
{
    $total = 1;
    for ($i = 1; $i <= $n; $i++) {
        $total = $i * $total; //$total += $i;
    }
    return $total;
}

echo "la somme multiple est " . factorielle(5) . "<br>";

?>
<br><br>

<!-------------------- EXO 11  ------------------>
<h5 class="text-success">11.Echange de valeurs</h5>
<?PHP
$a = 5;
$b = "toto";
$t = $a;
$a = $b;
$b = $t;

echo "ma variable a vaut " . $a . " et ma variable b vaut " . $b;
?>
<br><br>
<!-------------------- EXO 12  ------------------>
<h5 class="text-success">12.Conversion</h5>
<?PHP
//doit afficher 96h37m52s
$secondeAConvertir = 347872;
$seconde = $secondeAConvertir % 60; //52
$minute = (($secondeAConvertir - $seconde) / 60) % 60;
$heure = (($secondeAConvertir - ($minute * 60) - $seconde) / 3600);

echo $heure . "h " . $minute . " min " . $seconde . "s<br>";
?>
<br><br>

<!-------------------- EXO 13  ------------------>
<h5 class="text-success">13.Valeur minimum</h5>
<?PHP
$heros = ['Leona', 'Thresh', 'Lucian', 'Morgana', 'Lulu', 'Veigar'];

foreach ($heros as $hero) {
    if (strlen($hero) == 6) {
        echo $hero . "<br>";
    }
}
?>
<br><br>

<!-------------------- EXO 14  ------------------>
<h5 class="text-success">14.Recherche de la plus petite valeur dans un tableau d'entiers</h5>
<?PHP
$numbers = [252, 9, 555, 611, 2];
echo "La plus petite valeur du tableau est " . min($numbers) . "<br>";
?>
<br><br>

<!-------------------- EXO 15  ------------------>
<h5 class="text-success">15.Tri d'un tableau d'entiers</h5>
<?PHP
sort($numbers);
print_r($numbers);
?>
<br><br>

<!-------------------- EXO 16  ------------------>
<a href="game.php">Go to game</a>

<!-------------------- EXO 17  ------------------>
<h5 class="text-success">17.Matin Midi Soir</h5>
<?PHP
$heure = 24;
if ($heure >= 6 and $heure <= 12) {
    echo "c'est le matin<br>";
} elseif ($heure >= 13 and $heure <= 18) {
    echo "c'est l'après midi<br>";
} else {
    echo "c'est la nuit<br>";
}
?>

<!-------------------- EXO 18  ------------------>
<h5 class="text-success">18.FOO BAR</h5>
<?PHP
for ($i = 1; $i <= 100; $i++) {
    if ($i % 5 == 0 && $i % 3 == 0) {
        echo "foobar<br>";
    } elseif ($i % 3 == 0) {
        echo "foo<br>";
    } elseif ($i % 5 == 0) {
        echo "bar<br>";
    } else {
        echo $i . "<br>";
    }
}
?>

<!-------------------- TERNAIRE ------------------>
<?php

$age = 24;

if ($age >= 18) {
    $majeur = true;
} else {
    $majeur = false;
}

$majeur = ($age >= 18) ? true : false;
?>


</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
</body>

</html>