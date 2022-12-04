<?php
namespace Phppot;
use Phppot\Models;

require __DIR__ .'/models.php';
$models = new Models();

$modelsResult = $models->viewBooks('jtrujillotarelo@gmail.com');
print_r($modelsResult);


// $modelsResult = $models->deleteUserById(1);
// print_r($modelsResult);


// $modelsResult = $models->addBook("juan vs vampires","Juan t","Comedy");
// $modelsResult = $models->addUser("Username","LastName","FirstName","Email","Password");

// $modelsResult = $models->getUserById(1);
// print_r($modelsResult);

// $modelsResult = $models->getUserByEmail("email");
// print_r($modelsResult);

// $modelsResult = $models->getBookById("email");
// print_r($modelsResult);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html>