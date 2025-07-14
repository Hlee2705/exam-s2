<!-- register.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription</title>
    <link rel="stylesheet" href="../assets/css/stylev.css">
</head>

<body class="register">
    <form action="../controleurs/traitementRegister.php" method="post" class="formulaire">

        <!-- champs Nom , email , password et date de naissance -->
        <!-- champ nom -->
        <label for="Nom">Nom :</label>
        <input class="inputNom" type="text" name="nom" id="Nom" placeholder="Nom"> <br>

        <!-- champs mail -->
       <label for="Email">Email :</label>
        <input class="inputEmail" type="email" name="mail" id="Email" placeholder="Email"><br>

        <!-- champs mot de passe -->
       <label for="mdp">Mot de passe :</label>
        <input class="inputPassword" type="password" name="mdp" id="mdp" placeholder="mot de passe"><br>

        <!-- champs date de naissance -->
       <label for="date">date de naissance :</label>
        <input class="inputDate" type="date" name="date" id="date" placeholder="date de naissance"><br>

        <!-- gender -->
         <label for="genre">Genre :</label>
        <select name="genre" id="">
            <option value="M">M</option>
            <option value="F">F</option>
        </select><br>

        <!-- ville -->
        <label for="">Ville : </label>
        <input type="text" name="ville" id=""> <br>

        <!-- image profil -->
        <label for="">Image : </label>
        <input type="file" name="image_profil" id=""><br>

        <input class="inputSubmit" type="submit" value="Inscription">

        <!-- lien vers la page de connexion qui est login.php -->
        <a href="./login.php">connexion</a>

    </form>
</body>

</html>