<?php

/**
 *montre tout les coms avec :
 * -bouton de supretssion
 * -bouton d'edition
 *
 *
 */?>

<a href="index-admin.php">retour au menu</a>
<P>choisir le commentaire a modifier</P>


<?php
while ($data = $comments->fetch())
{
?>
<div class="commentsToEdit">
    <h3>
        <?= htmlspecialchars($data['author']) ?>
        <em>le <?= $data['comment_date_fr'] ?></em>
        <em>| du billet n° <?= $data['post_id'] ?></em>
    </h3>

    <a href="index-admin.php?action=commentToEdit&amp;id=<?= $data['id'] ?>">editer</a>
    <?php
    }
    $comments->closeCursor();
    ?>


/**
 * Created by PhpStorm.
 * User: Jimmy
 * Date: 08/02/2019
 * Time: 11:57
 */