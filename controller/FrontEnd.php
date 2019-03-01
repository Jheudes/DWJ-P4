<?php

require_once('model/AllPostsManager.php');

class FrontEnd
{

    public function showAllPosts()
    {
        $postManager = new AllPostsManager();
        $posts = $postManager->lastNinePosts();

        require('view/frontend/homePage.php');
    }

    public function showThisPost()
    {
        $postManager = new AllPostsManager();
        $post = $postManager->showThisPost($_GET['id']);
        $comments = $postManager->loadComments($_GET['id']);

        require('view/frontend/postPage.php');
    }

    public function addComment($postId, $author, $comment)
    {
        $author = trim($author);
        $comment = trim($comment);
        if (!empty($comment) && !empty($author) && !empty($postId)) {
            $commentAdder = new AllPostsManager();
            $commentAdder->addComment($postId, $author, $comment);

            header('Location: index.php?action=post&id=' . $postId);
        }
        else {header('Location: index.php?action=post&id=' . $postId);}
    }

    public function flagComment($comId)
    {
        $flagCom = new AllPostsManager();
        $flagCom->flagThisComment($comId);
    }
}