<?php
session_start();
if (isset($_SESSION['userID'])){
/**
 * Created by PhpStorm.
 * User: Jimmy
 * Date: 12/02/2019
 * Time: 14:47
 */

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Blog Incroyable</title>
        <link href="public/css/backendEditComment.css" rel="stylesheet" />
        <script type="text/javascript" src="https://code.jquery.com/jqery-lastest.min.js"></script>
        <script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=pzrgzgwtphqwvf4ygn3mcsg1t1rnqk8z1n44qdlgwow213do"></script>

    </head>
    <body>

        <h1>Modification de commentaire</h1>
        <a href="index-admin.php?action=goToMenu">Menu</a>
        <p><a href="index-admin.php?action=showAllPosts">changer de billet</a></p>
        <div class="news">
            <h3>
                <?= htmlspecialchars($comment['author']) ?>
                <em>le <?= $comment['comment_date'] ?></em>
            </h3>
            <p>
                <?= nl2br(htmlspecialchars($comment['comment'])) ?>
            </p>
        </div>
        <script>
            tinymce.init({
                selector:'#editauthor',
                inline: true,
                menubar: false,
                toolbar: 'undo redo'
            });
        </script>
        <script>
            tinymce.init({
                selector:'#updatedcomment',
            });
        </script>
        <form method="post" action="index-admin.php?action=updateThisComment&amp;id=<?= $comment['id'] ?>">
            <textarea id="editauthor" name="editauthor"><?= $comment['author'] ?></textarea>
            <textarea id="updatedcomment" name="updatedcomment"><?= $comment['comment'] ?></textarea>
            <input type="submit">
        </form>
    </body>
</html>

<?php }
else{
    require('view/backend/adminloginpage.php');
}