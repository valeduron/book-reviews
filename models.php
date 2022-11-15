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
        $paramType = "?";
        $paramArray = array(
            $memberId
        );
        $memberResult = $this->ds->select($query, $paramType, $paramArray);

        return $memberResult;
    }

    function deleteUserById($memberId)
    {
        $query = "delete FROM `bookstoredb`.`dbo.user` WHERE UserID = ?";
        $paramType = "?";
        $paramArray = array(
            $memberId
        );
        $memberResult = $this->ds->select($query, $paramType, $paramArray);

        return $memberResult;
    }

    function getUserByEmail($memberId)
    {
        $query = "select * FROM `bookstoredb`.`dbo.user` WHERE Email = ?";
        $paramType = "?";
        $paramArray = array(
            $memberId
        );
        $memberResult = $this->ds->select($query, $paramType, $paramArray);

        return $memberResult;
    }

    function deleteUserByEmail($memberId)
    {
        $query = "delete FROM `bookstoredb`.`dbo.user` WHERE Email = ?";
        $paramType = "?";
        $paramArray = array(
            $memberId
        );
        $memberResult = $this->ds->select($query, $paramType, $paramArray);

        return $memberResult;
    }
    
    function getBookById($memberId)
    {
        $query = "select * FROM `bookstoredb`.`dbo.book` WHERE BookID = ?";
        $paramType = "?";
        $paramArray = array(
            $memberId
        );
        $memberResult = $this->ds->select($query, $paramType, $paramArray);

        return $memberResult;
    }
    
    function deleteBookById($memberId)
    {
        $query = "delete FROM `bookstoredb`.`dbo.book` WHERE BookID = ?";
        $paramType = "?";
        $paramArray = array(
            $memberId
        );
        $memberResult = $this->ds->select($query, $paramType, $paramArray);

        return $memberResult;
    }
    
    function getBookByTitle($memberId)
    {
        $query = "select * FROM `bookstoredb`.`dbo.book` WHERE Title = ?";
        $paramType = "?";
        $paramArray = array(
            $memberId
        );
        $memberResult = $this->ds->select($query, $paramType, $paramArray);

        return $memberResult;
    }
    
    function deleteBookByTitle($memberId)
    {
        $query = "delete FROM `bookstoredb`.`dbo.book` WHERE Title = ?";
        $paramType = "?";
        $paramArray = array(
            $memberId
        );
        $memberResult = $this->ds->select($query, $paramType, $paramArray);

        return $memberResult;
    }

    function getBooksByGenre($memberId)
    {
        $query = "select * FROM `bookstoredb`.`dbo.book` WHERE Genre = ?";
        $paramType = "?";
        $paramArray = array(
            $memberId
        );
        $memberResult = $this->ds->select($query, $paramType, $paramArray);

        return $memberResult;
    }

    function getBookshelfById($memberId)
    {
        $query = "select * FROM `bookstoredb`.`dbo.bookshelf` WHERE BookshelfID = ?";
        $paramType = "?";
        $paramArray = array(
            $memberId
        );
        $memberResult = $this->ds->select($query, $paramType, $paramArray);

        return $memberResult;
    }

    function deleteBookshelfById($memberId)
    {
        $query = "delete FROM `bookstoredb`.`dbo.bookshelf` WHERE BookshelfID = ?";
        $paramType = "?";
        $paramArray = array(
            $memberId
        );
        $memberResult = $this->ds->select($query, $paramType, $paramArray);

        return $memberResult;
    }

    function getBookshelfByUserID($memberId)
    {
        $query = "select * FROM `bookstoredb`.`dbo.bookshelf` WHERE UserID = ?";
        $paramType = "?";
        $paramArray = array(
            $memberId
        );
        $memberResult = $this->ds->select($query, $paramType, $paramArray);

        return $memberResult;
    }

    function deleteBookshelfByUserID($memberId)
    {
        $query = "Delete from `bookstoredb`.`dbo.bookshelf` WHERE UserID = ?";
        $paramType = "?";
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