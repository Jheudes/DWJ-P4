<?php
session_start();
if (isset($_SESSION['userID'])){
/**interface wysiwyg*/
?>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Gestion du blog</title>
        <link href="public/css/style.css" rel="stylesheet" />
        <script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=pzrgzgwtphqwvf4ygn3mcsg1t1rnqk8z1n44qdlgwow213do"></script>
    </head>
    <body>
    <a href="index-admin.php?action=goToMenu">Menu</a>
    <p>interface WYSIWYG</p>

    <script>
        tinymce.init({
            selector:'#title',
            inline: true,
            menubar: false,
            toolbar: 'undo redo'
        });
    </script>
    <script>
        tinymce.init({
            selector:'#content',
        });
    </script>
    <form method="post" action="index-admin.php?action=addThisPostToDB">
    <textarea id="title" name="title">Titre ici</textarea><br/>
    <textarea id="content" name="content">Ecrit ton post ici =)</textarea>
    <input type='submit'/>
    </form>


    </body>
</html>
<?php }
else{
    require('view/backend/adminloginpage.php');
}