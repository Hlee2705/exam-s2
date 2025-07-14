<?php
require("../include/fonction.php");

//Reception des donnes email et mdp depuis login
if($_SERVER["REQUEST_METHOD"] === "POST")
{
    $email = $_POST["email"];
    $mdp = $_POST["mdp"];
}

if($donneesUtilisateur = getDonnerUser($email,$mdp))
{
    //chargement des donnes utilisatieur
    session_start();
    $_SESSION["membre"]["nom"] = $donneesUtilisateur["nom"];
    $_SESSION["membre"]["id"] = $donneesUtilisateur["id_membre"];

    header("Location: ../page/modele.php?p=liste_object.php");
    exit();
} else {
   header("Location: ../page/modele.php?p=login.php&error=1");
}

?>

<a href="../page/home.php"></a>