<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add Book to Bookshelf</title>

    <!-- Importing Bootstrap CSS library https://getbootstrap.com/ -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div style="margin-top: 20px" class="container">
        <h1>Add Book</h1>
        <!-- styling of the form for bootstrap https://getbootstrap.com/docs/4.5/components/forms/ -->
        <form action="add_new_book.php" method="post">
        <div class="form-group">
                <label for="BookId">BookId</label>
                <input class="form-control" type="text" id="BookId" name="BookId">
            </div>
            <div class="form-group">
                <label for="first_name">Title</label>
                <input class="form-control" type="text" id="Title" name="Title">
            </div>
            <div class="form-group">
                <label for="last_name">Author</label>
                <input class="form-control" type="text" id="Author" name="Author">
            </div>
            <div class="form-group">
                <label for="Nationality">Genre</label>
                <input class="form-control" type="text" id="Genre" name="Genre">
            </div>           
            <div class="form-group">
                <input class="btn btn-primary" name='Submit' type="submit" value="Submit">
            </div>
        </form>
        <div>
            <br>
            <a href="books.php">Back to View My Books</a></br>
        </div>

        <!-- jQuery and JS bundle w/ Popper.js -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    
    
    <?php
       use Phppot\DataSource;

        session_start();
        require('config.php');
        
    if (count($_POST) > 0) {
        require_once __DIR__ . '\config.php';
        $database = new DataSource();
        $sql = "INSERT INTO bookstoredb.`dbo.books` (BookId,Title,Author, Genre) VALUES (?,?,?,?)";
        $paramType = 'ssss';
        $paramValue = array(
            $_POST["BookId"],
            $_POST["Title"],
            $_POST["Author"],
            $_POST["Genre"]
        );
        $database->insert($sql, $paramType, $paramValue);
        }
        ?>

        



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