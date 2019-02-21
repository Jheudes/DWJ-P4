<?php

require('controller/BackEndManager.php');
/**
 *if (pas de session) call adminloginpage
 *else call  adminhomepage
 */



if(isset($_GET['action'])){
    if($_GET['action'] == 'disconnect'){
        $backEnd = new BackEndManager();
        $backEnd -> disconnect();
    }
    else if($_GET['action'] == 'goToMenu'){
        $backEnd = new BackEndManager();
        $backEnd->goToMenu();
    }
    if($_GET['action'] == 'createPost'){
        $backEnd = new BackEndManager();
        $backEnd -> showCreatePostPage();
    }
    else if($_GET['action'] == 'showAllPosts'){
        $backEnd = new BackEndManager();
        $backEnd -> showAllPosts();

    }
    else if($_GET['action'] == 'postToEdit'){
        $backEnd = new BackEndManager();
        $backEnd -> postEditor();
    }
    else if($_GET['action'] == 'commentManager'){
        $backEnd = new BackEndManager();
        $backEnd -> commentManager();
    }
    else if($_GET['action'] == 'addThisPostToDB'){
        $backEnd = new BackEndManager();
        $backEnd -> addPostToDB($_POST['title'], $_POST['content']);
    }
    else if($_GET['action'] == 'updateThisPost'){
        $backEnd = new BackEndManager();
        $backEnd -> updateThisPost($_POST['edittitle'], $_POST['updatedcontent']);
    }
    else if($_GET['action'] == 'deleteThisPost'){
        $backEnd = new BackEndManager();
        $backEnd -> deleteThisPost($_GET['id']);

    }
    else if($_GET['action'] == 'commentToDelete'){
        $backEnd = new BackEndManager();
        $backEnd -> deleteThisComment($_GET['id']);

    }
    else if($_GET['action'] == 'commentToEdit'){
        $backEnd = new BackEndManager();
        $backEnd -> showOneComment($_GET['id']);
    }
    else if($_GET['action'] == 'updateThisComment'){
        $backEnd = new BackEndManager();
        $backEnd -> updateThisComment($_POST['editauthor'], $_POST['updatedcomment']);
    }
    else if($_GET['action'] == 'tryConnect'){
        $backEnd = new BackEndManager();
        $backEnd -> tryConnect($_POST['nickname'], $_POST['password']);
    }


}
else {
    $backEnd = new BackEndManager();
    $backEnd -> showAdminLoginPage();
}


/**
 * Created by PhpStorm.
 * User: Jimmy
 * Date: 08/02/2019
 * Time: 10:47
 */