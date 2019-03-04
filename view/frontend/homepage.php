<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Blog Incroyable</title>
    <link rel="stylesheet" type="text/css" href="http:/DWJ-P4\public\css\fronthomepage.css" >
</head>
<body>
    <div class="mainWrapper">
        <h1 class="center"> Bienvenue a tous sur mon blog.</h1>
        <P class="center">Ici seront redigés tous les billets liés a mon livre</P>


        <div class="newsContainer">

            <?php foreach ($posts as $post):?>

                <div class="news">
                    <a class="Read" href="index.php?action=post&amp;id=<?= $post->getId() ?>">
                    <h2>
                        <?= htmlspecialchars($post->gettitle()) ?>
                    </h2>
                    <p class="date">Jean le <?= $post->getCreationDate() ?></p>
                    </a>
                </div>

            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>