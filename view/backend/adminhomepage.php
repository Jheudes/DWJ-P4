<?php
if(session_status() == PHP_SESSION_NONE){
    session_start();
}
if (isset($_SESSION['userID'])){?>

    <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Gestion du blog</title>
        <link href="public/css/backendHomePage.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    </head>
    <body>
        <h1>Gestion du Blog</h1>
        <a href="index-admin.php?action=createPost">Crée un nouveau post</a><br/>
        <a href="index-admin.php?action=showAllPosts">Editer un post</a><br/>
        <a href="index-admin.php?action=signaledComment">Commentaires signalés</a><br/>
        <a href="index-admin.php?action=commentManager">Moderer les commentaires</a><br/>
        <a href="index-admin.php?action=disconnect"><em class="fas fa-times red"></em> Déconexion</a><br/><br/>
    </body>
</html>

<?php }
else{
    require('view/backend/adminloginpage.php');
}