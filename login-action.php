<?php
namespace Phppot;

use \Phppot\Models;
if (! empty($_POST["login"])) {
    session_start();
    $username = filter_var($_POST["Email"], FILTER_UNSAFE_RAW);
    $password = filter_var($_POST["Password"], FILTER_UNSAFE_RAW);
    require_once (__DIR__ . "./models.php");
    
    $member = new Models();
    $isLoggedIn = $member->processLogin($username, $password);
    if (! $isLoggedIn) {
        $_SESSION["errorMessage"] = "Invalid Credentials";
    }
echo $_SESSION["UserID"];
echo $_SESSION["Username"];
echo $_SESSION["Email"];
echo $_SESSION["FirstName"];
    header("Location: ./index.php");
    exit();
}