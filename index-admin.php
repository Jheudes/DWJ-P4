<?php

require('controller/backend.php');
/**
 *if (pas de session) call adminloginpage
 *else call  adminhomepage
 */

if(isset($_GET['action'])){
    if($_GET['action'] == 'createPost'){
        showCreatePostPage();
    }
    else if($_GET['action'] == 'showAllPosts'){
        showAllPosts();

    }
    else if($_GET['action'] == 'postToEdit'){
        postEditor();
    }

}
else {
    showAdminHomePage();
}





/**
 * Created by PhpStorm.
 * User: Jimmy
 * Date: 08/02/2019
 * Time: 10:47
 */