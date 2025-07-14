<!-- login.php -->
<section class="login">
    <!-- formulaire pour se connecté  -->
    <form action="../controleur/t_login.php" method="post" class="formulaire">

        <!-- champ email et champ nom pour se connecté -->
        <input class="inputNom" type="email" name="email" placeholder="email">
        <input class="inputPassword" type="password" name="mdp" placeholder="mot de passe">

        <!-- message d'erreur si une connexion n'est pas valider -->
        <?php if (isset($_GET["error"])) { ?>
            <p>Mot de passe ou email invalide </p>
        <?php } ?>

        <input class="inputSubmit" type="submit" value="Connexion"></td>

        <!-- lien vers la page d'inscription qui est register -->
        <a href="./register.php">S'inscrire</a>

    </form>
</section>