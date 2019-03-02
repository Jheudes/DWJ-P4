<?php
if(session_status() == PHP_SESSION_NONE){
    session_start();
}
if (isset($_SESSION['userID'])){
    /** ___________
     * deconexion
     * __________
     * creer nouveau post
     * __________
     * gerer  posts
     * __________
     * gerer les coms
     * ____________
     *
     */
?>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Gestion du blog</title>
        <link href="public/css/style.css" rel="stylesheet" />
    </head>
    <body>
    <a href="index-admin.php?action=disconnect">déconexion</a><br/><br/>
    <a href="index-admin.php?action=createPost">Crée un nouveau post</a><br/>
    <a href="index-admin.php?action=showAllPosts">Editer un post</a><br/>
    <a href="index-admin.php?action=signaledComment">Commentaires signalés</a><br/>
    <a href="index-admin.php?action=commentManager">Moderer les commentaires</a><br/>
    </body>
</html>

<?php }
else{
    require('view/backend/adminloginpage.php');
}



/**
 * Created by PhpStorm.
 * User: Jimmy
 * Date: 08/02/2019
 * Time: 11:37
 */