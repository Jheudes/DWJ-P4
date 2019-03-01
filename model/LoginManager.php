<?php
class LoginManager{

    public function isItOk($nickname)
    {
        $db = $this->connectToDB();
        $req = $db->prepare('SELECT id,password FROM members WHERE nickname = ?');
        $req->execute(array($nickname));
        $result = $req->fetch();

        return $result;
    }

    private function connectToDB()
    {
        $db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');

        return $db;
    }
}