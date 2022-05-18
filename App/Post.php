<?php
// echo __DIR__."/../Database.php";
include __DIR__."/../Core/Database.php";

use Core\Database as MainDatabase;
class Post extends MainDatabase{

    var $content;
    public function __construct()
    {
        if(isset($_POST['add'])){
            $this->setContent($_POST['postContent']);
            echo $this->getContent();
            $addResponse = $this->addPost();
            if($addResponse == true){
                return "Post added succefully";
            }
            else{
                return 'somthing wrong';
            }
        }
    }

    function getContent(){
        return $this->content;
    }
    function setContent($content){
        $this->$content = $content;
    }

    function addPost(){
        $stmt = ("INSERT INTO posts (content) VALUES ('".$this->getContent()."')");
        $db = new MainDatabase();
        return $db->dealWithDB($stmt);
    }

    function getPosts(){
        $stmt = "SELECT * FROM posts";
        $db = new MainDatabase();
        return $db->dealWithDB($stmt);
    }

}
if(isset($_POST['add'])){
    $add = new Post();
    var_dump($add);
}