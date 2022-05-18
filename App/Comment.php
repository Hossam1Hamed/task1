<?php
include __DIR__."/../Core/Database.php";
use Core\Database as MainDatabase;

class Comment extends MainDatabase
{
    var $body;
    public function __construct()
    {
        if(isset($_POST['add'])){
            $this->setbody($_POST['commentBody']);
            echo $this->getbody();
            $addResponse = $this->AddComment();
            
        }
    }
    public function getbody()
    {
        return $this->body;
    }
    public function setbody($b)
    {
        $this->body = $b;
    }

    public function AddComment()
    {
        $stmt = ("INSERT INTO posts (content) VALUES ('".$this->getbody()."')");
        $db = new MainDatabase();
        return $db->dealWithDB($stmt);
    }
    
    public function GetCommentByPost()
    {
        $post_id = $_GET['id'];
        $stmt = "SELECT * FROM comments WHERE post_id = $post_id ";
        $db = new MainDatabase();
        return $db->dealWithDB($stmt);
    }
}
if(isset($_POST['add'])){
    $add = new Comment();
    var_dump($add);
}