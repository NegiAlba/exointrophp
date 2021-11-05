<?php include "header.php";?>
<?php
session_start();
if (isset($_GET["nom"])) {
    echo "Bonjour " . $_GET["nom"];
}

if (isset($_POST["nom"]) && isset($_POST["prenom"])) {
    echo "Bonjour " . $_POST["nom"] . " " . $_POST["prenom"];
    $_SESSION["nom"] = $_POST["nom"];
    $_SESSION["prenom"] = $_POST["prenom"];
} else {
    echo "<p class='warning'>il vous manque des informations pour le formulaire</p>";
}