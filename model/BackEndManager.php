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
    public function showAllComments(){

    }
    public function editOneComment(){// dunno too
        $db = $this->connectToDB();
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