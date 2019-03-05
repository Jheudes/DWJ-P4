<?php session_start(); ?>
<?php if (isset($_SESSION['userID'])){ ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Blog Incroyable</title>
        <link href="public/css/backendPosts&CommentsList.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    </head>
    <body>
        <div class="top">
            <a href="index-admin.php?action=goToMenu"><em class="fas fa-arrow-left"></em> Menu</a>
            <P>choisir le commentaire a modifier</P>
        </div>

        <?php foreach ($comments as $comment):?>

        <div class="commentsToEdit">
        <h3>
            <?= htmlspecialchars($comment->getAuthor()) ?>
            <em>le <?= $comment->getCommentDate() ?></em>
            <em>| du billet n° <?= $comment->getPostId() ?></em><br/>
            <em><?= $comment->getComment() ?></em>
        </h3>

        <a href="index-admin.php?action=commentToEdit&amp;id=<?= $comment->getId() ?>"><em class="fas fa-edit"></em> Modifier</a>
        <a href="index-admin.php?action=commentToDelete&amp;id=<?= $comment->getId() ?>"><em class="fas fa-times red"></em> Supprimer</a>
        </div>

    </body>
</html>
<?php        endforeach;}
else{
    require('view/backend/adminloginpage.php');}
