<?php

class BackEndManager
{

    public function showAllPosts(){
        $db = $this->connectToDB();
        $req = $db->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date ');

        return $req;
    }
    public function loadPostToEdit($postId){
        $db = $this->connectToDB();
        $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE id = ?');
        $req->execute(array($postId));
        $post = $req->fetch();

        return $post;
    }
    public function loadComments(){
        $db = $this->connectToDB();
        $comments = $db->query('SELECT id, author, post_id, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments ORDER BY comment_date ');

        return $comments;
    }
    public function editOneComment(){// dunno too
        $db = $this->connectToDB();
    }
    public function postToAdd($title,$content){
        $db = $this->connectToDB();
        $post = $db->prepare('INSERT INTO `posts`(`title`, `content`, `creation_date`) VALUES(?, ?, NOW())');
        $affectedPost = $post->execute(array($title, $content));
    }
    public function editPost($title,$content){
        $db = $this->connectToDB();
        $post = $db -> prepare('UPDATE posts set title = ?, content = ? WHERE id = ?');
        $varId = $_GET['id'];
        $post->execute(array($title, $content, $varId));
    }
    public function deletePost($id){
        $db= $this->connectToDB();
        $post = $db -> prepare('DELETE FROM posts WHERE id = ?');
        $post->execute(array($id));

        $comments = $db -> prepare('DELETE FROM comments WHERE post_id = ?');
        $comments -> execute(array($id));
    }
    public function deleteComment($id){
        $db= $this->connectToDB();
        $comments = $db -> prepare('DELETE FROM comments WHERE id = ?');
        $comments -> execute(array($id));
    }
    private function connectToDB(){
        $db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
        return $db;

    }




}

/**
 * Created by PhpStorm.
 * User: Jimmy
 * Date: 09/02/2019
 * Time: 11:53
 */