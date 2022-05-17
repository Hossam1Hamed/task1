<?php
// echo __DIR__."/../Database.php";
// include __DIR__."/../Database.php";

use Core\Database\Database;
class Post extends Database{

    var $content;

    function getContent(){
        return $this->content;
    }
    function setContent($content){
        $this->$content = $content;
    }

    function addPost(){
        $stmt = "INSERT INTO posts VALUES (default, '.$this->getContent().')"; 
        $db = new Database();
        return $db->dealWithDB($stmt);
    }

    function getPosts(){
        $stmt = "SELECT * FROM posts ORDER BY created_at";
        $db = new Database();
        return $db->dealWithDB($stmt);
    }

}