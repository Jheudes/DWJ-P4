<?php
require('entity/Post.php');

class BackPostManager
{

    public function showAllPosts()
    {
        $posts = [];
        $db = $this->connectToDB();
        $req = $db->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date ');
        foreach ($req->fetchAll() as $data){
            $post = new Post();
            $post->createPost($data);
            $posts[] = $post;
        }
        return $posts;
    }

    public function loadPostToEdit($postId)
    {//......
        $db = $this->connectToDB();
        $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE id = ?');
        $req->execute(array($postId));
        $data = $req->fetch();
        $post = new Post();
        $post->createPost($data);
        return $post;
    }

    public function postToAdd($title,$content)
    {
        $db = $this->connectToDB();
        $post = $db->prepare('INSERT INTO `posts`(`title`, `content`, `creation_date`) VALUES(?, ?, NOW())');
        $post->execute(array($title, $content));
    }

    public function editPost($title,$content)
    {
        $db = $this->connectToDB();
        $post = $db -> prepare('UPDATE posts set title = ?, content = ? WHERE id = ?');
        $post->execute(array($title, $content, $_GET['id']));
    }

    public function deletePost($id)
    {
        $db= $this->connectToDB();
        $post = $db -> prepare('DELETE FROM posts WHERE id = ?');
        $post->execute(array($id));

        $comments = $db -> prepare('DELETE FROM comments WHERE post_id = ?');
        $comments -> execute(array($id));
    }

    public function loadComments()
    {
        $db = $this->connectToDB();
        $comments = $db->query('SELECT id, author, post_id, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments ORDER BY comment_date ');

        return $comments;
    }

    public function deleteComment($id)
    {
        $db= $this->connectToDB();
        $comments = $db -> prepare('DELETE FROM comments WHERE id = ?');
        $comments -> execute(array($id));
    }

    public function showComment($id)
    {
        $db = $this ->connectToDB();
        $getComment = $db -> prepare('SELECT id, author, comment, comment_date FROM comments WHERE id = ?');
        $getComment->execute(array($id));
        $comment = $getComment->fetch();
        return $comment;
    }

    public function editComment($author,$comment)
    {
        $db = $this->connectToDB();
        $post = $db -> prepare('UPDATE comments set author = ?, comment = ? WHERE id = ?');
        $post->execute(array($author, $comment, $_GET['id']));
    }

    private function connectToDB()
    {
        $db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
        return $db;
    }
}
