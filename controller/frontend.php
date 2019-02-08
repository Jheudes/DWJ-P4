<?php
//cc =)


require_once('model/AllPostsManager.php');

function showAllPosts(){
    $postManager = new AllPostsManager();
    $posts = $postManager->lastNinePosts();

    require('view/frontend/homePage.php');
}
function showThisPost(){

}











/**
 * Created by PhpStorm.
 * User: Jimmy
 * Date: 08/02/2019
 * Time: 08:45
 */