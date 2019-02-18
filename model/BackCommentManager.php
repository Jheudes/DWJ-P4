<?php
class BackCommentManager
{

    public function loadComments(){
        $db = $this->connectToDB();
        $comments = $db->query('SELECT id, author, post_id, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments ORDER BY comment_date ');

        return $comments;
    }

    public function deleteComment($id){
        $db= $this->connectToDB();
        $comments = $db -> prepare('DELETE FROM comments WHERE id = ?');
        $comments -> execute(array($id));
    }

    public function showComment($id){
        $db = $this ->connectToDB();
        $getComment = $db -> prepare('SELECT id, author, comment, comment_date FROM comments WHERE id = ?');
        $getComment->execute(array($id));
        $comment = $getComment->fetch();
        return $comment;
    }

    public function editComment($author,$comment){
        $db = $this->connectToDB();
        $post = $db -> prepare('UPDATE comments set author = ?, comment = ? WHERE id = ?');
        $post->execute(array($author, $comment, $_GET['id']));
    }


    private function connectToDB(){
        $db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
        return $db;

    }

}
/**
 * Created by PhpStorm.
 * User: Jimmy
 * Date: 18/02/2019
 * Time: 12:17
 */