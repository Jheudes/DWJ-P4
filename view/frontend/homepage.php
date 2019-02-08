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
    <link href="public/css/style.css" rel="stylesheet" />
</head>
<body>
    <h1> Bienvenue a tous surmon blog</h1>
    <P>ici sont redigés tous les billets liés a mon voyage</P>




    <?php
    while ($data = $posts->fetch())
    {
        ?>
        <div class="news">
            <h3>
                <?= htmlspecialchars($data['title']) ?>
                <em>le <?= $data['creation_date_fr'] ?></em>
            </h3>

            <p>
                <?= nl2br(htmlspecialchars($data['content'])) ?>
                <br />
                <em><a href="index.php?action=post&amp;id=<?= $data['id'] ?>">Commentaires</a></em>
            </p>
        </div>
        <?php
    }
    $posts->closeCursor();
    ?>

</body>
</html>


/**
 * Created by PhpStorm.
 * User: Jimmy
 * Date: 08/02/2019
 * Time: 11:24
 */