<?php
/**
 * Created by PhpStorm.
 * User: Jimmy
 * Date: 19/02/2019
 * Time: 21:06
 */

class Post
{
    private $id;
    private $title;
    private $content;
    private $creation_date;

    public function createPost($data){

        $this->setId($data['id']);
        $this->setTitle($data['title']);
        $this->setContent($data['content']);
        $this->setCreationDate($data['creation_date_fr']);
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getCreationDate()
    {
        return $this->creation_date;
    }

    public function setCreationDate($creation_date)
    {
        $this->creation_date = $creation_date;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
}