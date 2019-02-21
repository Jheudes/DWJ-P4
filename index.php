<?php

require('controller/frontend.php');

/** si $_GET['action']
 *Montrer un apercu des billets par ordre de publication
 *  billet clickable => redirection pour l'avoir au complet
 *  avec ajout de com en dessous
 *
 *
 *
 */
if(isset($_GET['action'])){
    if ($_GET['action']=='post'){
        showThisPost();
    }
    elseif ($_GET['action'] == 'addComment') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                addComment($_GET['id'], $_POST['author'], $_POST['comment']);
            } else {
                echo 'Erreur : tous les champs ne sont pas remplis !';
            }
        }
    }

    else if ($_GET['action']=='flagThisComment'){
        flagComment($_GET['comId']);
        showThisPost();
    }
    //else if ($_GET['action']==''){    }

}

else{
    showAllPosts();
}











/**
 * Created by PhpStorm.
 * User: Jimmy
 * Date: 08/02/2019
 * Time: 10:39
 */