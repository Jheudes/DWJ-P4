<?php session_start(); ?>
<?php if (isset($_SESSION['userID'])): ?>

<a href="index-admin.php?action=goToMenu">Menu</a>
<P>choisir le commentaire a modifier</P>

<?php foreach ($comments as $comment):?>

<div class="commentsToEdit">
    <h3>
        <?= htmlspecialchars($comment->getAuthor();) ?>
        <em>le <?= $data['comment_date_fr'] ?></em>
        <em>| du billet n° <?= $data['post_id'] ?></em><br/>
        <em><?= $data['comment'] ?></em>
    </h3>

    <a href="index-admin.php?action=commentToEdit&amp;id=<?= $data['id'] ?>">Modifier</a>
    <a href="index-admin.php?action=commentToDelete&amp;id=<?= $data['id'] ?>">supprimer</a>
}<? endforeach; ?>
<?php else: ?>
    <?php require('view/backend/adminloginpage.php'); ?>
<? endif; ?>
