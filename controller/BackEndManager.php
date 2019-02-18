<?php
//class ! here
require_once('model/BackPostManager.php');
require_once('model/BackCommentManager.php');
require_once('model/LoginManager.php');

class BackEndManager
{
    public function showAdminLoginPage(){
        require('view/backend/adminloginpage.php');
    }
    public function goToMenu(){
        require('view/backend/adminhomepage.php');
    }
    public function tryConnect($nickname,$password){
        $tryConnect = new LoginManager();
        $result = $tryConnect -> isItOk($nickname);
        if ($result['password'] == $password){
            session_start();
            $_SESSION['userID'] = $result['id'];
            require('view/backend/adminhomepage.php');
        }
        else{
            require('view/backend/adminloginpage.php');
            echo 'Erreur mdp ou de pseudo';
        }
    }
    public function disconnect(){
        session_start();
        $_SESSION = array();
        session_destroy();
        require('view/backend/adminloginpage.php');
    }
    public function showAdminHomePage()
    {
        require('view/backend/adminhomepage.php');
    }

    public function showCreatePostPage()
    {
        require('view/backend/createpost.php');
    }



    public function showAllPosts()
    {
        $postManager = new BackPostManager();
        $posts = $postManager->showAllPosts();

        require('view/backend/showallposts.php');
    }

    public function postEditor()
    {
        $postManager = new BackPostManager();
        $post = $postManager->loadPostToEdit($_GET['id']);

        require('view/backend/editpost.php');
    }

    public function commentManager()
    {
        $commentsManager = new BackCommentManager();
        $comments = $commentsManager->loadComments();
        require('view/backend/commentsmanagement.php');
    }

    public function addPostToDB($title, $content)
    {
        $postToAdd = new BackPostManager();
        $post = $postToAdd->postToAdd($title, $content);
        require('view/backend/adminhomepage.php');

    }

    public function updateThisPost($title, $content)
    {
        $postEdit = new BackPostManager();
        $post = $postEdit->editPost($title, $content);
        require('view/backend/adminhomepage.php');

    }

    public function deleteThisPost($id)
    {
        $deletePost = new BackPostManager();
        $post = $deletePost->deletePost($id);
        require('view/backend/adminhomepage.php');
    }

    public function deleteThisComment($id)
    {
        $deleteComment = new BackCommentManager();
        $comment = $deleteComment->deleteComment($id);
        require('view/backend/adminhomepage.php');
    }

    public function showOneComment()
    {
        $showComment = new BackCommentManager();
        $comment = $showComment->showComment($_GET['id']);
        require('view/backend/editcomment.php');
    }

    public function updateThisComment($author, $comment)
    {
        $commentEdit = new BackCommentManager();
        $comment = $commentEdit->editComment($author, $comment);
        require('view/backend/adminhomepage.php');
    }
}




/**
 * Created by PhpStorm.
 * User: Jimmy
 * Date: 08/02/2019
 * Time: 10:48
 */