<?php
require("../include/fonctionModele.php");

//reception des donnees de l'utilisateur venant de register
if($_SERVER["REQUEST_METHOD"] === "POST")
{
    $nom = $_POST["nom"];
    $email = $_POST["mail"];
    $dateNaissance = $_POST["date"];
    $mdp = $_POST["mdp"];
}

//redirection apres insertion des donnes
if(insertUser($nom,$email,$dateNaissance,$mdp))
{
    header("Location: ../page/errorValidation/inscriptionValider.php");
    exit();
} else {
    echo "erreur lors de l'iscription dans la base";
}
?>
<a href="../page/errorValidation/inscriptionValider.php"></a>