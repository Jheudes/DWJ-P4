<?php
session_start();
if (isset($_SESSION['userID'])){?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Gestion du blog</title>
        <link href="public/css/backendPost&CommentEditor.css" rel="stylesheet" />
        <script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=pzrgzgwtphqwvf4ygn3mcsg1t1rnqk8z1n44qdlgwow213do"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    </head>
    <body>
        <div class="top">
            <a class="menu" href="index-admin.php?action=goToMenu"><em class="fas fa-arrow-left"></em> Menu</a>
            <p>En haut le titre, en bas le contenu</p>
        </div>

        <script>
            tinymce.init({
                selector:'#title',
                inline: true,
                menubar: false,
                toolbar: 'undo redo',
                theme_advanced_default_foreground_color: "#474747",
            });
        </script>
        <script>
            tinymce.init({
                selector:'#content',
                body_class: "mceBlackBody"
            });
        </script>

        <form method="post" action="index-admin.php?action=addThisPostToDB">
            <textarea class="toGrey" id="title" name="title">Titre ici</textarea><br/>
            <textarea class="toGrey" id="content" name="content">Ecrit ton post ici =)</textarea>
            <input type='submit'/>
        </form>
    </body>
</html>
<?php }
else{
    require('view/backend/adminloginpage.php');
}