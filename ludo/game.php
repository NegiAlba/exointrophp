<?php include "header.php";
session_start();

if (isset($_SESSION)) {
    echo "Bonjour " . $_SESSION["nom"] . " " . $_SESSION["prenom"];
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';
}

if (isset($_SESSION['randomNumber'])) {

} else {
    $_SESSION['randomNumber'] = rand(0, 1000);
}
$input = $_POST["input"]; // on stocke l'input de l'utilisateur récupéré en POST
$randomNumber = $_SESSION['randomNumber'];
var_dump($randomNumber);

if (isset($input) and $input < $randomNumber) {
    echo "Votre nombre est trop petit, reessayez. <br>";
} else if (isset($input) and $input > $randomNumber) {
    echo "Votre nombre est trop grand, reessayez. <br>";
} else if (isset($input) and $input == $randomNumber) {
    echo "Bravo vous avez trouvé le nombre mystère.<br>";
    echo "<a href='game.php'>Reessayer</a>";
    session_destroy();
}
?>
<br>
<p>Trouvez le nombre mystère entre 0 et 1000</p>
<form class="form-group" action="" method="post">
    <label for="input">Entrez un chiffre entre 0 et 1000</label>
    <input class="form-control" type="number" name="input" id="input"><br>
    <button class="btn btn-primary">Try</button>
</form>