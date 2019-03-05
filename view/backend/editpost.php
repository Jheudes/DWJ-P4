<?php
session_start();
if (isset($_SESSION['userID'])){?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Blog Incroyable</title>
        <link href="public/css/backendPost&CommentEditor.css" rel="stylesheet" />
        <script type="text/javascript" src="https://code.jquery.com/jqery-lastest.min.js"></script>
        <script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=pzrgzgwtphqwvf4ygn3mcsg1t1rnqk8z1n44qdlgwow213do"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    </head>
    <body>
        <div class="top">
            <a class="menu" href="index-admin.php?action=goToMenu"><em class="fas fa-arrow-left"></em> Menu</a>
            <a href="index-admin.php?action=showAllPosts"><em class="fas fa-arrow-left"></em> changer de billet</a>
            <a href="index-admin.php?action=deleteThisPost&amp;id=<?= $post->getId() ?>"><em class="fas fa-times red"></em> Supprimer</a>
            <h1>Modification de billet</h1>
        </div>

        <div class="news">
            <h3>
                <?= htmlspecialchars($post->getTitle()) ?>
                <em>le <?= $post->getCreationDate() ?></em>
            </h3>

            <p>
                <?= $post->getContent() ?>
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

    </body>
</html>

<?php }
else{
    require('view/backend/adminloginpage.php');
}