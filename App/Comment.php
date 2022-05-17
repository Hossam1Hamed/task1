<?php
use Core\Database\Database;

class Comment extends Database
{
    var $body;
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
        $stmt = "INSERT INTO comments VALUES (default, '.$this->getbody().')"; 
        $db = new Database();
        return $db->dealWithDB($stmt);
    }
    
    public function GetAll()
    {
    }
}
