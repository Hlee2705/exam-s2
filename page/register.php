<!-- register.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../asset/css/fontawesome/css/all.css">
    <style>
        body.register {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', sans-serif;
        }

        .formulaire {
            max-width: 500px;
            width: 100%;
            margin: 4rem auto;
            background: #fff;
            padding: 2.5rem;
            border-radius: 1rem;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .formulaire label {
            font-weight: 500;
            margin-top: 0.8rem;
        }

        .formulaire input,
        .formulaire select {
            margin-bottom: 1rem;
        }

        .formulaire .inputSubmit {
            margin-top: 1rem;
            width: 100%;
        }

        .formulaire a {
            display: block;
            text-align: center;
            margin-top: 1rem;
            color: #0d6efd;
            text-decoration: none;
        }

        .formulaire a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body class="register">

    <form action="../controleur/t_register.php" method="post" class="formulaire shadow" enctype="multipart/form-data">
        <h2 class="text-center text-primary mb-4">Créer un compte</h2>

        <!-- champ nom -->
        <label for="Nom">Nom :</label>
        <input class="form-control" type="text" name="nom" id="Nom" placeholder="Nom" required>

        <!-- champ email -->
        <label for="Email">Email :</label>
        <input class="form-control" type="email" name="mail" id="Email" placeholder="Email" required>

        <!-- champ mot de passe -->
        <label for="mdp">Mot de passe :</label>
        <input class="form-control" type="password" name="mdp" id="mdp" placeholder="Mot de passe" required>

        <!-- champ date de naissance -->
        <label for="date">Date de naissance :</label>
        <input class="form-control" type="date" name="date" id="date" required>

        <!-- champ genre -->
        <label for="genre">Genre :</label>
        <select class="form-select" name="genre" id="genre" required>
            <option value="">-- Choisir --</option>
            <option value="M">M</option>
            <option value="F">F</option>
        </select>

        <!-- ville -->
        <label for="ville">Ville :</label>
        <input class="form-control" type="text" name="ville" id="ville" placeholder="Ville" required>

        <!-- image de profil -->
        <label for="image_profil">Image :</label>
        <input class="form-control" type="file" name="image_profil" id="image_profil" accept="image/*" required>

        <!-- bouton submit -->
        <input class="btn btn-success inputSubmit" type="submit" value="Inscription">

        <!-- lien vers login -->
        <a href="./login.php">Déjà un compte ? Se connecter</a>

    </form>
    
<script src="../asset/bootstrap/js/bootstrap.bundle.js"></script>
</body>

</html>


</html>