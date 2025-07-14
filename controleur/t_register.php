<?php
require("../include/fonction.php");

//reception des donnees de l'utilisateur venant de register
if($_SERVER["REQUEST_METHOD"] === "POST")
{
    $nom = $_POST["nom"];
    $email = $_POST["mail"];
    $dateNaissance = $_POST["date"];
    $mdp = $_POST["mdp"];
    $ville = $_POST["ville"];
    $genre = $_POST["genre"];
    $image = $_POST["image_profil"];
    var_dump($image);
    var_dump($_POST);

}

//redirection apres insertion des donnes
if(insertMembre($nom,$email,$dateNaissance, $mdp, $ville, $genre, $image))
{
    // header("Location: ../page/errorValidation/inscriptionValider.php");
    // exit();
} else {
    echo "erreur lors de l'iscription dans la base";
}
?>
<a href="../page/errorValidation/inscriptionValider.php"></a>