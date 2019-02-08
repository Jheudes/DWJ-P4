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
    showThisPost();
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