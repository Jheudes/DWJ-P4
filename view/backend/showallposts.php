<?php
/**
 * if($_GET['post']){
 * affiche post a modif
 * }
 * else{
 * montre tout les postes
 * }
 *
 */?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Blog Incroyable</title>
    <link href="public/css/style.css" rel="stylesheet" />
</head>
<body>

    <a href="index-admin.php">retour au menu</a>
    <P>choisir le post a modifier</P>


    <?php
    while ($data = $posts->fetch())
    {
        ?>
        <div class="postedit">
            <h3>
                <?= htmlspecialchars($data['title']) ?>
                <em>le <?= $data['creation_date_fr'] ?></em>
            </h3>

            <a href="index-admin.php?action=postToEdit&amp;id=<?= $data['id'] ?>">editer</a>
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
 * Time: 11:43
 */