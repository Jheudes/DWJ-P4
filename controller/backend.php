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
    require('view/backend/adminhomepage.php');

}
function updateThisPost($title,$content){
    $postEdit = new BackEndManager();
    $post = $postEdit -> editPost($title,$content);
    require('view/backend/adminhomepage.php');

}
function deleteThisPost($id){
    $deletePost = new BackEndManager();
    $post = $deletePost -> deletePost($id);
    require('view/backend/adminhomepage.php');
}
function deleteThisComment($id){
    $deleteComment = new BackEndManager();
    $comment = $deleteComment -> deleteComment($id);
    require('view/backend/adminhomepage.php');
}
function showOneComment(){
    $showComment = new BackEndManager();
    $comment = $showComment -> showComment($_GET['id']);
    require('view/backend/editcomment.php');
}
function updateThisComment($author,$comment){
    $commentEdit = new BackEndManager();
    $comment = $commentEdit -> editComment($author,$comment);
    require('view/backend/adminhomepage.php');
}




/**
 * Created by PhpStorm.
 * User: Jimmy
 * Date: 08/02/2019
 * Time: 10:48
 */