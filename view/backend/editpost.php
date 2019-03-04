<?php
session_start();
if (isset($_SESSION['userID'])){
/**
 * Created by PhpStorm.
 * User: Jimmy
 * Date: 09/02/2019
 * Time: 16:00
 */?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Blog Incroyable</title>
        <link href="public/css/backendEditPost.css" rel="stylesheet" />
        <script type="text/javascript" src="https://code.jquery.com/jqery-lastest.min.js"></script>
        <script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=pzrgzgwtphqwvf4ygn3mcsg1t1rnqk8z1n44qdlgwow213do"></script>

    </head>
    <body>

        <a href="index-admin.php?action=goToMenu">Menu</a>
        <h1>Modification de billet</h1>
        <p><a href="index-admin.php?action=showAllPosts">changer de billet</a></p>

        <div class="news">
            <h3>
                <?= htmlspecialchars($post->getTitle()) ?>
                <em>le <?= $post->getCreationDate() ?></em>
            </h3>

            <p>
                <?= nl2br(htmlspecialchars($post->getContent())) ?>
            </p>
        </div>

        <script>
            tinymce.init({
                selector:'#edittitle',
                inline: true,
                menubar: false,
                toolbar: 'undo redo'
            });
        </script>
        <script>
            tinymce.init({
                selector:'#updatedcontent',
            });
        </script>

        <form method="post" action="index-admin.php?action=updateThisPost&amp;id=<?= $post->getId() ?>">
            <textarea id="edittitle" name="edittitle"><?= $post->getTitle() ?></textarea>
            <textarea id="updatedcontent" name="updatedcontent"><?= $post->getContent() ?></textarea>
            <input type="submit">
        </form>
    <a href="index-admin.php?action=deleteThisPost&amp;id=<?= $post->getId() ?>">supprimer le post</a>

    </body>
</html>

<?php }
else{
    require('view/backend/adminloginpage.php');
}