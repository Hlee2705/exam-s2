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
                    est retourné le : xx
                    dispo
                </td>
            </tr>
        <?php } ?>
    </table>
</section>