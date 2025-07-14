<?php
include("../includes/fonction.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    //verifier si le fichier est recu
    if (!isset($_FILES["image_profil"]) || $_FILES["image_profil"]["error"] != 0) {
        die("le fichier n'est pas recu");
    }

    //verifier la taille du fichier
    $tailleFichier = $_FILES["image_profil"]["size"];
    $tailleMax = 20 * 1024 * 1024;
    if($tailleFichier > $tailleMax)
    {
        die("fichier trop volumineux");
    }

    //verifier le type mine
    $typeMime = mime_content_type($_FILES["image_profil"]["tmp_name"]);
    $typesAutorises = ['image/jpeg', 'image/png', 'image/gif'];
    if (!in_array($typeMime, $typesAutorises)) {
        die("Type MIME invalide !");
    }

    $nomOriginal = $_FILES["image_profil"]["name"];
    $nomTemporaire = $_FILES["image_profil"]["tmp_name"];

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


    //inseret le fichier dans la base de donnes
    if (!move_uploaded_file($nomTemporaire, $cheminDossierDestination . $nomUnique)) {

        echo "erreur lors du chargement du fichier";
    } 
    
}
