<?php
require("connexion.php");
//ajouter un utilisateur dans la base de données
function insertMembre($nom, $email, $dateNaissance, $mdp, $ville, $genre, $image_profil)
{
    // ecriture de la requete pour inseret le nouveux utilisateur
    $sql = "INSERT INTO membre 
                (nom,
                 email,
                 date_de_naissance,
                 mdp,
                 ville,
                 genre, 
                 image_profil)
            VALUES ('%s','%s','%s','%s', '%s', '%s', '%s');";

    // fenoy ny banga 
    $sql = sprintf($sql, $nom, $email, $dateNaissance, $mdp, $ville, $genre, $image_profil);
    var_dump($sql);
    //envois de la requete
    $reusiteRequete = mysqli_query(bddConnect(), $sql);


    return $reusiteRequete;
}

//prendre les donnes de l'utilisatuer indecer par email et mdp 
function getDonnerUser($email, $mdp)
{
    //ecriture de la requete pour prendre les donner le l'utilisateur
    $sql = "SELECT * FROM membre WHERE email = '%s' AND mdp = '%s';";
    $sql = sprintf($sql, $email, $mdp);
    var_dump($sql);

    //envois de la requete
    $request = mysqli_query(bddConnect(), $sql);

    //transformer les donnes recus par la requete qui n'est pas indexable en tableux associatif
    $donneesUtilisateur =  mysqli_fetch_assoc($request);

    return $donneesUtilisateur;
}
?>