<?php $listeObject = getAllObject(); ?>
<section class="liste-object">
    <table border="1">
        <tr>
            <th>Object</th>
            <th>Statut</th>
        </tr>

        <!-- liste des objects -->
        <?php foreach ($listeObject as $obj) { ?>
            <tr>
                <td> <?= $obj["nom_objet"] ?> </td>
                <td>
                    <?php if(estEmprunt($obj["id_objet"])){?>
                    dispo
                    <?php } else { ?>
                        est en cours d'emprunt 
                    <?php } ?>
                </td>
            </tr>
        <?php } ?>
    </table>
</section>