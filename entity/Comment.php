<?php
/**
 * Created by PhpStorm.
 * User: Jimmy
 * Date: 19/02/2019
 * Time: 21:19
 */

class Comment
{
    private $id;
    private $post_id;
    private $author;
    private $comment;
    private $comment_date;
    private $reported;

    public function createComment($data){
        $this->setId($data['id']);
        $this->setPostId($data['post_id']);
        $this->setAuthor($data['author']);
        $this->setComment($data['comment']);
        $this->setCommentDate($data['comment_date_fr']);
        $this->setReported($data['report']);
    }


    public function getComment()
    {
        return $this->comment;
    }

    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getPostId()
    {
        return $this->post_id;
    }

    public function setPostId($post_id)
    {
        $this->post_id = $post_id;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function getCommentDate()
    {
        return $this->comment_date;
    }

    public function setCommentDate($comment_date)
    {
        $this->comment_date = $comment_date;
    }

    public function getReported()
    {
        return $this->reported;
    }

    public function setReported($reported)
    {
        $this->reported = $reported;
    }



}