<?php
class AllPostsManager
{
    public function lastNinePosts()
    {
        $db = $this->connectToDB();
        $req = $db->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT 0, 100');

        return $req;
    }

    public function showThisPost($postId)
    {
        $db = $this->connectToDB();
        $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE id = ?');
        $req->execute(array($postId));
        $post = $req->fetch();

        return $post;
    }

    public function loadComments($postId)
    {
        $db = $this->connectToDB();
        $comments = $db->prepare('SELECT id, author, comment,report, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
        $comments->execute(array($postId));

        return $comments;

    }

    public function addComment($postId, $author, $comment)
    {
        $db= $this->connectToDB();
        $comments = $db->prepare('INSERT INTO comments(post_id, author, comment,report, comment_date) VALUES(?, ?, ?,false, NOW())');
        $affectedLines = $comments->execute(array($postId, $author, $comment));
    }

    public function flagThisComment($comId)
    {
        $db = $this->connectToDB();
        $comment = $db->prepare('UPDATE comments SET report = 1 WHERE id = ?');
        $comment->execute(array($comId));
    }

    private function connectToDB()
    {
        $db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
        return $db;
    }
}