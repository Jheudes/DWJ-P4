<?php
session_start();

/**Nom :
 * MDP :
 * Connexion
 */?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Login Page</title>
    </head>
    <body>
        <form action="index-admin.php?action=tryConnect" method="post">
            <label for="nickname">Pseudo :</label>
            <input type="text" name="nickname" id="nickname"><br/>

            <label for="password">Mot de passe :</label>
            <input type="text" name="password" id="password"><br/>

            <input type="submit">
        </form>
        <a href="index-admin.php?action=disconnect">déconexion</a><br/><br/>
    </body>
</html>





/**
 * Created by PhpStorm.
 * User: Jimmy
 * Date: 08/02/2019
 * Time: 11:36
 */