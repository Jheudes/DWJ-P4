<?php

require('controller/FrontEnd.php');
if(isset($_GET['action'])){
    if ($_GET['action']=='post'){
        $frontend = new FrontEnd();
        $frontend->showThisPost();
    }
    elseif ($_GET['action'] == 'addComment') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                $frontend = new FrontEnd();
                $frontend->addComment($_GET['id'], $_POST['author'], $_POST['comment']);
            } else {
                header('Location: index.php?action=post&id='.$_GET['id']);
            }
        }
    }

    else if ($_GET['action']=='flagThisComment'){
        $frontend = new FrontEnd();
        $frontend->flagComment($_GET['comId']);
        $frontend->showThisPost();
    }
    //else if ($_GET['action']==''){    }

}

else{
    $frontend = new FrontEnd();
    $frontend->showAllPosts();
}











/**
 * Created by PhpStorm.
 * User: Jimmy
 * Date: 08/02/2019
 * Time: 10:39
 */