<?php
namespace Phppot;
use Phppot\Models;

class bookstoreController{
    
    private $models;
    
    private $ds;
    
    function __construct()
    {
        require __DIR__ .'/models.php';
        require_once "config.php";
        $this->ds = new DataSource();
        $this->models = new Models();
    }
    function createFirstUseratLogin($uname,$lname,$fname,$email,$pw){
        $this->models->addUser($uname,$lname,$fname,$email,$pw);
        $user=$this->models->getUserByEmail($email);
        $this->models->addBookshelfByUserId(1,$user->id);
        $this->models->getBookshelfByUserId($user->id);
        return $user;
    }
}
// $ss=new bookstoreController();
// $ss->createFirstUseratLogin('juan1','trujillo','juan','asdf@gmail.com','jaja');
?>


 }