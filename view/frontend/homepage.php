<?php

/**________________
 * header
 * ________________
 * Bienvenue sur mon site hihi
 * ici je vous raconte mes histoires ...
 *
 *   dernier billet
 * billet 9 | billet 8
 * billet 7 | billet 6
 * billet 5 | billet 4
 * ...| premier billet
 * _______________
 * footer
 * _______________
 **/?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Blog Incroyable</title>
    <link rel="stylesheet" type="text/css" href="http:/DWJ-P4\public\css\style.css" >
</head>
<body>
    <div class="mainWrapper">
        <h1> Bienvenue a tous sur mon blog</h1>
        <P>ici sont redigés tous les billets liés a mon voyage</P>


        <div class="newsContainer">

            <?php foreach ($posts as $post):?>

                <div class="news">
                    <h2>
                        <?= htmlspecialchars($post->gettitle()) ?>
                        <em>le <?= $post->getCreationDate() ?></em>
                    </h2>

                    <p>
                        <?= nl2br(htmlspecialchars($post->getContent())) ?>
                        <br />
                        <em><a href="index.php?action=post&amp;id=<?= $post->getId() ?>">Commentaires</a></em>
                    </p>
                </div>

            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>

/**
 * Created by PhpStorm.
 * User: Jimmy
 * Date: 08/02/2019
 * Time: 11:24
 */