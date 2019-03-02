<?php

/**
 * _____________
 * header
 * _____________
 * Billet
 * complet
 * _____________
 * laisser un com
 * _____________
 * commentaires
 * _____________
 * footer
 * _____________
 */?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Blog Incroyable</title>
        <link href="public/css/postpage.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    </head>
    <body>


        <h1>Mon super blog !</h1>
        <p><a href="index.php">Retour à la liste des billets</a></p>

        <div class="news">
            <h3>
                <?= htmlspecialchars($post->getTitle()) ?>
                <em>le <?= $post->getCreationDate() ?></em>
            </h3>

            <p>
                <?= nl2br($post->getContent()) ?>
            </p>
        </div>

        <h2>Commentaires</h2>

        <form action="index.php?action=addComment&amp;id=<?= $post->getId() ?>" method="post">
            <div>
                <label for="author">Auteur</label><br />
                <input type="text" id="author" name="author" />
            </div>
            <div>
                <label for="comment">Commentaire</label><br />
                <textarea id="comment" name="comment"></textarea>
            </div>
            <div>
                <input type="submit" />
            </div>
        </form>


        <?php foreach ($comments as $comment):?>
            <p><strong><?= htmlspecialchars($comment->getAuthor()) ?></strong> le <?= $comment->getCommentDate() ?></p>
            <p><?= nl2br(htmlspecialchars($comment->getComment())) ?></p>
            <?php
            if (!empty($comment->getReported())) {
                echo '<p class="signaledComment">red flag</p>';
            }
            else{?>
                <a href="index.php?action=flagThisComment&amp;comId=<?= $comment->getId() ?>&amp;id=<?= $post->getId()?>" class="trustedComment">green flag</a>
        <?php }       endforeach; ?>

    </body>
</html>

