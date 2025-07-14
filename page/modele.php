<?php
include("../include/fonction.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/fontawesome/css/all.css">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="modele.php?p=liste_object.php">liste objet</a></li>
                <li><a href="modele.php?p=login.php">deconnexion</a></li>
            </ul>
        </nav
    </header>
<main class="pt-3">

        <?php
        if ($_SERVER["REQUEST_METHOD"] === "GET") {
            include($_GET["p"]);
        } else {
            echo "aucune page chargée";
        }
        ?>
    </main>
    <script src="../assets/bootstrap/js/bootstrap.bundle.js"></script>
</body>

</html>