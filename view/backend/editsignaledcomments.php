<?php session_start(); ?>
<?php if (isset($_SESSION['userID'])){ ?>

    <a href="index-admin.php?action=goToMenu">Menu</a>
    <P>choisir le commentaire a modifier</P>

    <?php foreach ($comments as $comment):?>

        <div class="commentsToEdit">
        <h3>
            <?= htmlspecialchars($comment->getAuthor()) ?>
            <em>le <?= $comment->getCommentDate() ?></em>
            <em>| du billet n° <?= $comment->getPostId() ?></em><br/>
            <em><?= $comment->getComment() ?></em>
        </h3>

        <a href="index-admin.php?action=commentToEdit&amp;id=<?= $comment->getId() ?>">Modifier</a>
            <a href="index-admin.php?action=commentToDelete&amp;id=<?= $comment->getId() ?>">supprimer</a></div>

    <?php        endforeach;}
else{
    require('view/backend/adminloginpage.php');}
