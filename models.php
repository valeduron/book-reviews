<?php
namespace Phppot;

use Phppot\DataSource;

class Models
{

    private $dbConn;

    private $ds;

    function __construct()
    {
        require_once "config.php";
        $this->ds = new DataSource();
    }

    function getUserById($memberId)
    {
        $query = "select * FROM `bookstoredb`.`dbo.user` WHERE UserID = ?";
        $paramType = "i";
        $paramArray = array(
            $memberId
        );
        $memberResult = $this->ds->select($query, $paramType, $paramArray);

        return $memberResult;
    }

    function addUser($uname,$lname,$fname,$email,$pw)
    {
        $query = "
        Insert into `bookstoredb`.`dbo.user` ( 
        `Username`,
        `LastName` ,
        `FirstName`,
        `Email` ,
        `Password`) Values(?,?,?,?,?) ";
        $paramType = "sssss";
        $paramArray = array(
            $uname,$lname,$fname,$email,$pw
        );
        $memberResult = $this->ds->insert($query, $paramType, $paramArray);

        return $memberResult;
    }
    function addBookshelf($uname,$lname,$fname,$email,$pw)
    {
        $query = "
        Insert into `bookstoredb`.`dbo.bookshelf` ( 
        `BookshelfId`,
        `UserId`) Values(?,?) ";
        $paramType = "si";
        $paramArray = array(
            $uname,$lname,$fname,$email,$pw
        );
        $memberResult = $this->ds->insert($query, $paramType, $paramArray);

        return $memberResult;
    }

    function addBook($lname,$fname,$email)
    {
        $query = "Insert into `bookstoredb`.`dbo.books` ( 
            
            `Title` ,
            `Author`,
            `Genre`) Values(?,?,?) 
            ";
        $paramType = "sss";
        $paramArray = array(
            $lname,$fname,$email
        );
        $memberResult = $this->ds->insert($query, $paramType, $paramArray);

        return $memberResult;
    }
    function viewBooks($email){
        $query = "SELECT bs.BookId ISBN, Title, book.Author, book.Genre FROM bookstoredb.`dbo.bookshelf` bs
        join bookstoredb.`dbo.books` book on bs.BookId = book.BookId
        join bookstoredb.`dbo.user` Users on bs.BookshelfId = users.BookshelfId where 
        users.Email= ?";
        $paramType = "s";
        $paramArray = array(
            $email
        );
        $memberResult = $this->ds->select($query, $paramType, $paramArray);

        return $memberResult;
    }
    function deleteUserById($memberId)
    {
        $query = "delete FROM `bookstoredb`.`dbo.user` WHERE UserID = ?";
        $paramType = "i";
        $paramArray = array(
            $memberId
        );
        $memberResult = $this->ds->select($query, $paramType, $paramArray);

        return $memberResult;
    }

    function getUserByEmail($memberId)
    {
        $query = "select * FROM `bookstoredb`.`dbo.user` WHERE Email = ?";
        $paramType = "s";
        $paramArray = array(
            $memberId
        );
        $memberResult = $this->ds->select($query, $paramType, $paramArray);

        return $memberResult;
    }

    function deleteUserByEmail($memberId)
    {
        $query = "delete FROM `bookstoredb`.`dbo.user` WHERE Email = ?";
        $paramType = "s";
        $paramArray = array(
            $memberId
        );
        $memberResult = $this->ds->select($query, $paramType, $paramArray);

        return $memberResult;
    }
    
    function getBookById($memberId)
    {
        $query = "select * FROM `bookstoredb`.`dbo.book` WHERE BookID = ?";
        $paramType = "i";
        $paramArray = array(
            $memberId
        );
        $memberResult = $this->ds->select($query, $paramType, $paramArray);

        return $memberResult;
    }
    
    function deleteBookById($memberId)
    {
        $query = "delete FROM `bookstoredb`.`dbo.book` WHERE BookID = ?";
        $paramType = "i";
        $paramArray = array(
            $memberId
        );
        $memberResult = $this->ds->select($query, $paramType, $paramArray);

        return $memberResult;
    }
    
    function getBookByTitle($memberId)
    {
        $query = "select * FROM `bookstoredb`.`dbo.book` WHERE Title = ?";
        $paramType = "s";
        $paramArray = array(
            $memberId
        );
        $memberResult = $this->ds->select($query, $paramType, $paramArray);

        return $memberResult;
    }
    
    function deleteBookByTitle($memberId)
    {
        $query = "delete FROM `bookstoredb`.`dbo.book` WHERE Title = ?";
        $paramType = "s";
        $paramArray = array(
            $memberId
        );
        $memberResult = $this->ds->select($query, $paramType, $paramArray);

        return $memberResult;
    }

    function getBooksByGenre($memberId)
    {
        $query = "select * FROM `bookstoredb`.`dbo.book` WHERE Genre = ?";
        $paramType = "s";
        $paramArray = array(
            $memberId
        );
        $memberResult = $this->ds->select($query, $paramType, $paramArray);

        return $memberResult;
    }

    function getBookshelfById($memberId)
    {
        $query = "select * FROM `bookstoredb`.`dbo.bookshelf` WHERE BookshelfID = ?";
        $paramType = "i";
        $paramArray = array(
            $memberId
        );
        $memberResult = $this->ds->select($query, $paramType, $paramArray);

        return $memberResult;
    }

    function deleteBookshelfByIds($userId,$BookId)
    {
        $query = "delete FROM `bookstoredb`.`dbo.bookshelf` WHERE UserId =? AND BookId = ? LIMIT 1";
        $paramType = "ii";
        $paramArray = array(
            $userId,
            $BookId
        );
        $memberResult = $this->ds->select($query, $paramType, $paramArray);

        return $memberResult;
    }

    function getBookshelfByUserID($memberId)
    {
        $query = "select * FROM `bookstoredb`.`dbo.bookshelf` WHERE UserId = ?";
        $paramType = "i";
        $paramArray = array(
            $memberId
        );
        $memberResult = $this->ds->select($query, $paramType, $paramArray);

        return $memberResult;
    }

    function deleteBookshelfByUserID($memberId)
    {
        $query = "Delete from `bookstoredb`.`dbo.bookshelf` WHERE UserId = ?";
        $paramType = "i";
        $paramArray = array(
            $memberId
        );
        $memberResult = $this->ds->select($query, $paramType, $paramArray);

        return $memberResult;
    }

    public function processLogin($username, $password)
    {
        // $passwordHash = md5($password);
        $passwordHash=$password;
        $query = "select * FROM `bookstoredb`.`dbo.user` WHERE Email = ? AND Password = ?";
        $paramType = "ss";
        $paramArray = array(
            $username,
            $passwordHash
        );
        $memberResult = $this->ds->select($query, $paramType, $paramArray);
        if (! empty($memberResult)) {
            $_SESSION["UserID"] = $memberResult[0]["UserID"];
            $_SESSION["Username"] = $memberResult[0]["Username"];
            $_SESSION["Email"] = $memberResult[0]["Email"];
            $_SESSION["FirstName"] = $memberResult[0]["FirstName"];
            return true;
        }
    }
}