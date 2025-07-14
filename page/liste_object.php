<?php
if (isset($_GET["cat"])) {
    $cat = $_GET["cat"];
    $listeObject = getAllObjectCat($cat);
} else {
    $listeObject = getAllObject();
}
$listCategorie = getAllCategorie();
?>
<section class="form-cat">
    <form action="modele.php" method="get">
        <input type="hidden" name="p" value="liste_object.php">
        <label for="">categorie : </label>
        <!-- lsite categorie -->
        <select name="cat" id="">
            <?php foreach ($listCategorie as $cat) { ?>
                <option value="<?= $cat["id_categorie"] ?>">
                    <?= $cat["nom_categorie"] ?></option>
            <?php } ?>
        </select>
        <input type="submit" value="Valider">
    </form>
</section>
<section class="liste-object container my-5 mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white text-center">
            <h4 class="mb-0">Liste des objets</h4>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover mb-0">
                <thead class="table-light text-center">
                    <tr>
                        <th>Objet</th>
                        <th>Statut</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- liste des objets -->
                    <?php foreach ($listeObject as $obj) { ?>
                        <tr>
                            <td> <?= $obj["nom_objet"] ?> </td>
                            <td>
                                <?php if (estEmprunt($obj["id_objet"])) { ?>
                                    dispo
                                <?php } else { ?>
                                    est en cours d'emprunt
                                <?php } ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<section class="lien-new-object">
        <a href="upload_image.php">Ajouter un nouvel objet</a>
</section>