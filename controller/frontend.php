<?php
//cc =)


require_once('model/AllPostsManager.php');

function showAllPosts(){
    $postManager = new AllPostsManager();
    $posts = $postManager->lastNinePosts();

    require('view/frontend/homePage.php');
}
function showThisPost(){
    $postManager = new AllPostsManager();
    $post = $postManager->showThisPost($_GET['id']);
    $comments = $postManager->loadComments($_GET['id']);

    require('view/frontend/postPage.php');
}
function addComment($postId, $author, $comment){
    $commentAdder = new AllPostsManager();
    $commentAdder->addComment($postId,$author,$comment);

    header('Location: index.php?action=post&id='.$postId);

}
function flagComment($comId){
    $flagCom = new AllPostsManager();
    $flagCom->flagThisComment($comId);

}











/**
 * Created by PhpStorm.
 * User: Jimmy
 * Date: 08/02/2019
 * Time: 08:45
 */