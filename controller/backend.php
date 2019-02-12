<?php

function showAdminHomePage(){
    require('view/backend/adminhomepage.php');
}
function showCreatePostPage(){
    require('view/backend/createpost.php');
}


require_once('model/BackEndManager.php');

function showAllPosts(){
    $postManager = new BackEndManager();
    $posts = $postManager->showAllPosts();

    require('view/backend/showallposts.php');
}
function postEditor(){
    $postManager = new BackEndManager();
    $post = $postManager->loadPostToEdit($_GET['id']);

    require('view/backend/editpost.php');
}
function commentManager(){
    $commentsManager = new BackEndManager();
    $comments = $commentsManager->loadComments();
    require('view/backend/commentsmanagement.php');
}
function addPostToDB($title,$content){
    $postToAdd = new BackEndManager();
    $post = $postToAdd-> postToAdd($title,$content);

}




/**
 * Created by PhpStorm.
 * User: Jimmy
 * Date: 08/02/2019
 * Time: 10:48
 */