<?php
session_start();
if (isset($_SESSION['userID'])){?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Blog Incroyable</title>
    <link href="public/css/backendPosts&CommentsList.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
    <div class="top">
        <a href="index-admin.php?action=goToMenu"><em class="fas fa-arrow-left"></em> Menu</a>
        <P>choisir le post a modifier</P>
    </div>

    <?php foreach ($posts as $post):?>
        <div class="postToEdit">
            <h3>
                <?= htmlspecialchars($post->getTitle()) ?>
                <em>le <?= $post->getCreationDate() ?></em>
            </h3>

            <a href="index-admin.php?action=postToEdit&amp;id=<?= $post->getId() ?>"><em class="fas fa-edit"></em>  Modifier</a>
        </div>
        <?php endforeach; ?>

</body>
</html>

<?php }
else{
    require('view/backend/adminloginpage.php');
}