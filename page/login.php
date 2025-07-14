<!-- login.php -->
<section class="login d-flex justify-content-center align-items-center vh-100 bg-gradient bg-light">
    <form action="../controleur/t_login.php" method="post" class="formulaire p-5 rounded-4 shadow-lg bg-white" style="min-width: 320px; max-width: 400px; width: 100%;">

        <h2 class="text-center mb-4 text-primary">Connexion</h2>

        <!-- champ email -->
        <div class="form-floating mb-3">
            <input class="form-control" type="email" id="email" name="email" placeholder="email" required>
            <label for="email">Adresse email</label>
        </div>

        <!-- champ mot de passe -->
        <div class="form-floating mb-3">
            <input class="form-control" type="password" id="mdp" name="mdp" placeholder="mot de passe" required>
            <label for="mdp">Mot de passe</label>
        </div>

        <!-- message d'erreur -->
        <?php if (isset($_GET["error"])) { ?>
            <p class="text-danger text-center">Mot de passe ou email invalide</p>
        <?php } ?>

        <!-- bouton submit -->
        <div class="d-grid mb-3">
            <input class="btn btn-primary btn-lg rounded-pill" type="submit" value="Connexion">
        </div>

        <!-- lien d'inscription -->
        <div class="text-center">
            <a href="./register.php" class="text-decoration-none text-secondary">Pas encore inscrit ? <strong>S'inscrire</strong></a>
        </div>
    </form>
</section>

