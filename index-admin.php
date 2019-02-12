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
    else if($_GET['action'] == 'commentManager'){
        commentManager();
    }
    else if($_GET['action'] == 'addThisPostToDB'){
        addPostToDB($_POST['title'], $_POST['content']);
    }
    else if($_GET['action'] == 'updateThisPost'){
        updateThisPost($_POST['edittitle'], $_POST['updatedcontent']);
    }
    else if($_GET['action'] == 'deleteThisPost'){
        deleteThisPost($_GET['id']);

    }
    else if($_GET['action'] == 'commentToDelete'){
        deleteThisComment($_GET['id']);

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