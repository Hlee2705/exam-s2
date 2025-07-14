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
    $_SESSION["Utilisateur"]["nom"] = $donneesUtilisateur["nom"];
    $_SESSION["Utilisateur"]["idMembre"] = $donneesUtilisateur["idMembre"];

    header("Location: ../page/modele.php?p=home.php");
    exit();
} else {
   header("Location: ../page/modele.php?p=login.php&error=1");
}

?>

<a href="../page/home.php"></a>