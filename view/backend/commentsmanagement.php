<?php
session_start();
if (isset($_SESSION['userID'])){
/**
 *montre tout les coms avec :
 * -bouton de supretssion
 * -bouton d'edition
 *
 *
 */?>

<a href="index-admin.php?action=goToMenu">Menu</a>
<P>choisir le commentaire a modifier</P>


<?php
while ($data = $comments->fetch())
{
?>
<div class="commentsToEdit">
    <h3>
        <?= htmlspecialchars($data['author']) ?>
        <em>le <?= $data['comment_date_fr'] ?></em>
        <em>| du billet n° <?= $data['post_id'] ?></em><br/>
        <em><?= $data['comment'] ?></em>
    </h3>

    <a href="index-admin.php?action=commentToEdit&amp;id=<?= $data['id'] ?>">Modifier</a>
    <a href="index-admin.php?action=commentToDelete&amp;id=<?= $data['id'] ?>">supprimer</a>
    <?php
    }
    $comments->closeCursor();
    ?>

<?php }
else{
    require('view/backend/adminloginpage.php');
}

/**
 * Created by PhpStorm.
 * User: Jimmy
 * Date: 08/02/2019
 * Time: 11:57
 */