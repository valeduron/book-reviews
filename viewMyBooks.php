<?php
namespace Phppot;

use Phppot\Models;
session_start();
if (! empty($_SESSION["UserID"])) {
    require __DIR__ .'/models.php';
    $models = new Models();
    $displayName="";
    $modelsResult = $models->getUserByEmail($_SESSION["UserID"]);
    if (! empty($modelsResult[0]["UserID"])) {
        error_reporting(E_ALL ^ E_WARNING);
        $displayName = ucwords($modelsResult[0]["Email"]);
    } else {
        error_reporting(E_ALL ^ E_WARNING);
        $displayName = $modelsResult[0]["Email"];
        
    }
}
?>

<!doctype html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookworms</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    
    
        <!-- header section starts  -->

<header class="header">
    

    <div class="header-1">

        <a href="#" class="logo"> <i class="fas fa-book"></i> Bookworms </a>

        <form action="" class="search-form">
            <input type="search" name="" placeholder="Search here..." id="search-box">
            <label for="search-box" class="fas fa-search"></label>
        </form>

        <div class="icons">
            <div id="search-btn" class="fas fa-search"></div>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-shopping-cart"></a>
            <div id="login-btn" class="fas fa-user"></div>
        </div>

    </div>

    <div class="header-2">
        <nav class="navbar">
            <a href="bookshelf.php">Home</a>
            <?php error_reporting(E_ALL ^ E_WARNING);
            if(!empty($_SESSION["FirstName"])){

                echo "<a href='bookshelf.php'>My Bookshelf</a>";
                echo "<a href='logout.php'>Logout</a>";
                echo "<a href='add_new_book.php'>Add Books</a>";
            }
    ?>
    <h1>
        <?php error_reporting(E_ALL ^ E_WARNING);
            if(!empty($_SESSION["FirstName"])){

                echo "Hello ".$_SESSION["FirstName"];
            }
    ?></h1>
        </nav>
    </div>

</header>

<!-- header section ends -->
    


 <div class="container-fluid">
       <div class="row justify-content-center my-5">
           <div class="col-10">
            <table class="table table-bordered">
              <thead class="thead">
                <tr>
                    <th scope="col">ISBN</th>
                  <th scope="col">Title </th>
                  <th scope="col">Author</th>
                  <th scope="col">Date</th>
                </tr>
              </thead>
        <tbody>      
	<?php

 $user_email = $_SESSION["Email"];
 
 $modelsResult = $models->viewBooks($user_email);
 $userID=$_SESSION['UserID'];
 echo "<H1>Book List</H!>";
 
 foreach ($modelsResult as $tr) 
 {
    $disp .= '<tr>';
    foreach ($tr as $td)
        {
            $disp .= '<td>' . $td . '</td>';
        }
        // deleteBookshelfById($userID,$tr[ISBN])
    $disp .='<td><a  href="" value="'.$tr['ISBN'].'">Delete</a></td>"';
    $disp .= '</tr>';
 }
 echo $disp;
 ?>
         </tbody>
      </table>
     </div>
   </div>
  </div>

        <!-- jQuery and JS bundle w/ Popper.js -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    
  

        



<!-- 
        if (isset($_POST['Submit'])){

    
            /**
             * Grab information from the form submission and store values into variables.
             */
            $BookId = isset($_POST['BookId']) ? $_POST['BookId'] : " ";  
            $Title = isset($_POST['Title']) ? $_POST['Title'] : " ";
            $Author = isset($_POST['Author']) ? $_POST['Author'] : " ";
            $Genre = isset($_POST['Genre']) ? $_POST['Genre'] : " ";
            
            
            $query  = "INSERT INTO bookstoredb.`dbo.books` (BookId,Title, Author,Genre)
                        VALUES ('".$BookId."', '".$Title."', '".$Author."', '".$Genre."');";

           
            //Insert into Books table;
            $a = new DataSource();
            
            $a->getConnection();
            $a->insert($query,"Title",[]);
            

            

            // The query sent to the DB can be printed by not commenting the following row
            //echo $queryStudent;
            if ($conn->query($queryBooks) === TRUE) {
                echo "<br> New record created successfully for book id ".$BookId;
            } else {
                echo "<br> The record was not created, the query: <br>" . $queryBooks . "  <br> Generated the error <br>" . $conn->error;
            }

            // To redirect the page to the student menu right after the query is executed, use the following statement 
            // header("Location: student_menu.php");
}
?> -->


</body>

</html>