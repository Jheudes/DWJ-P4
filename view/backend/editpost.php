<?php
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
        <link href="public/css/style.css" rel="stylesheet" />
        <script type="text/javascript" src="https://code.jquery.com/jqery-lastest.min.js"></script>
        <script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=pzrgzgwtphqwvf4ygn3mcsg1t1rnqk8z1n44qdlgwow213do"></script>

    </head>
    <body>



        <h1>Modification de billet</h1>
        <p><a href="index-admin.php?action=showAllPosts">changer de billet</a></p>

        <div class="news">
            <h3>
                <?= htmlspecialchars($post['title']) ?>
                <em>le <?= $post['creation_date_fr'] ?></em>
            </h3>

            <p>
                <?= nl2br(htmlspecialchars($post['content'])) ?>
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

        <form method="post" action="index-admin.php?action=updateThisPost&amp;id=<?= $post['id'] ?>">
            <textarea id="edittitle" name="edittitle"><?= $post['title'] ?></textarea>
            <textarea id="updatedcontent" name="updatedcontent"><?= $post['content'] ?></textarea>
            <input type="submit">
        </form>
    <a href="index-admin.php?action=deleteThisPost&amp;id=<?= $post['id'] ?>">supprimer le post</a>

    </body>
</html>

