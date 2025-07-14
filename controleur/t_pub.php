<?php
include("../includes/fonction.php");
session_start();
var_dump($_SESSION["user"]);
$idUser = $_SESSION["user"][0]["idUser"];

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    //verifier si le fichier est recu
    if (!isset($_FILES["fichier"]) || $_FILES["fichier"]["error"] != 0) {
        die("le fichier n'est pas recu");
    }

    //verifier la taille du fichier
    $tailleFichier = $_FILES["fichier"]["size"];
    $tailleMax = 20 * 1024 * 1024;
    if($tailleFichier > $tailleMax)
    {
        die("fichier trop volumineux");
    }

    //verifier le type mine
    $typeMime = mime_content_type($_FILES["fichier"]["tmp_name"]);
    $typesAutorises = ['image/jpeg', 'image/png', 'image/gif','video/mp4'];
    if (!in_array($typeMime, $typesAutorises)) {
        die("Type MIME invalide !");
    }

    $nomOriginal = $_FILES["fichier"]["name"];
    $nomTemporaire = $_FILES["fichier"]["tmp_name"];

    // chemin de destination
    $cheminDossierDestination = __DIR__ . "/../uploads/";

    //generer un nom unique
    $extention = pathinfo($nomOriginal, PATHINFO_EXTENSION);

    //verifier si le type est video ou image : 0 si image ,,, 1 si video
    $typeInt = -1;
    $typeImage = ['image/jpeg', 'image/png', 'image/gif'];
    $typeVideo = ['video/mp4'];
    if(in_array($typeMime,$typeImage)) {
        $typeInt = 0;
        $prefix = "img_";
    } else if(in_array($typeMime,$typeVideo)) {
        $typeInt = 1;
        $prefix = "video_";
    }
    $nomUnique = uniqid($prefix, true) . "." . $extention;


    echo "  titre : " . $titre . "  textePub : " . $textPub . "    nom : " . $nomUnique . "   typeInt :" . $typeInt ;

    //inseret le fichier dans la base de donnes
    if (!move_uploaded_file($nomTemporaire, $cheminDossierDestination . $nomUnique)) {

        echo "erreur lors du chargement du fichier";
    } else {

        //inseret l'fichier dans le table
        insertPub($idUser,$titre,$textPub,$nomUnique,$typeInt);

        header('Location: ../pages/home.php');
        exit();
    }
}
