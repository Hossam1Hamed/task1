<?php
namespace Core;

class Database
{

    var $conn;

    function __construct()
    {   
        $this->conn=mysqli_connect("localhost","root","","task1");
    }

    // function operationOnDB($stmt){
    //     if(mysqli_query($this->conn,$stmt)){
    //         return "Operation done succefully";
    //     }else{
    //         return mysqli_error($this->conn);
    //     }
    // }
    protected function dealWithDB($stmt){
        return mysqli_query($this->conn,$stmt);
    }


}