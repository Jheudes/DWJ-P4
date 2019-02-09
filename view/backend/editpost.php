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
    </body>
</html>

