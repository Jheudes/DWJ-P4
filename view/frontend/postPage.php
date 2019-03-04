<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Blog Incroyable</title>
        <link href="public/css/frontpostpage.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    </head>
    <body>
        <div class="mainWrapper">

            <a class="backToHome" href="index.php"><em class="fas fa-arrow-left"></em> Retour à la liste des billets</a>

            <div class="news">
                <h3 class="title">
                    <?= htmlspecialchars($post->getTitle()) ?>
                    <em class="postDate">le <?= $post->getCreationDate() ?></em>
                </h3>

                <p><?= nl2br($post->getContent()) ?></p>
            </div>


            <form class="form center" action="index.php?action=addComment&amp;id=<?= $post->getId() ?>" method="post">

                    <h2 >Commentaires</h2>

                    <label  for="author">Votre pseudo : </label><br>
                    <input type="text" id="author" name="author" /><br>

                    <label for="comment">Commentaire</label><br>
                    <textarea id="comment" name="comment"></textarea><br>

                    <input type="submit" />
            </form>


            <?php foreach ($comments as $comment):?>
            <div class="comment">
                <p class="author"><strong><?= htmlspecialchars($comment->getAuthor()) ?></strong> le <?= $comment->getCommentDate() ?></p>
                <p><?= nl2br(htmlspecialchars($comment->getComment())) ?></p>
                <?php
                if (!empty($comment->getReported())) {
                    echo '<p class="signaledComment"><em class="fas fa-flag"></em></p></div>';

                }
                else{?>
                    <a class="notsignaledComment" href="index.php?action=flagThisComment&amp;comId=<?= $comment->getId() ?>&amp;id=<?= $post->getId()?>" class="trustedComment"><em class="fas fa-flag"></em></a> </div>
            <?php }       endforeach; ?>
        </div>
    </body>
</html>

