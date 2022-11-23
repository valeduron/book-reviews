<?php
namespace Phppot;

use Phppot\Models;
if (! empty($_SESSION["UserID"])) {
    require __DIR__ .'/models.php';
    $models = new Models();
    $displayName="";
    $modelsResult = $models->getUserByEmail($_SESSION["UserID"]);
    if (! empty($modelsResult[0]["UserID"])) {
        $displayName = ucwords($modelsResult[0]["Email"]);
    } else {
        $displayName = $modelsResult[0]["Email"];
        
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Complete Responsive Online Boot Store Website Design Tutorial</title>
        
        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
        
        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        
        <!-- custom css file link  -->
        <link rel="stylesheet" href="css/style.css">
        
    </head>
    <body>
<?php
session_start();
if (! empty($_SESSION["UserID"])) {
    require_once './index.php';
} else {
    require_once './index.php';
}
?>
        <!-- header section starts  -->
        
        <header class="header">
            
            <div class="header-1">
                
                <a href="#" class="logo"> <i class="fas fa-book"></i> bookly </a>
                
                <form action="" class="search-form">
                    <input type="search" name="" placeholder="search here..." id="search-box">
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
                    <a href="index.php">Home</a>
                    <a href="books.php">Books</a>
                    <?php error_reporting(E_ALL ^ E_WARNING);
                            if(!empty($_SESSION["FirstName"])){

                                echo "<a href='bookshelf.php'>My Bookshelf</a>";
                            }
                    ?>
                    <a href="logout.php">Logout</a>
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
        
        <!-- bottom navbar  -->
        
        <nav class="bottom-navbar">
    <a href="index.html" class="fas fa-home"></a>
    <a href="books.html" class="fas fa-book"></a>
    <a href="bookshelf.html" class="fas fa-blog"></a>
</nav>

<!-- login form  -->

<div class="login-form-container">
    
    <div id="close-login-btn" class="fas fa-times"></div>
    
    <form action="login-action.php" method="post" onSubmit="return validate();">
        <h3>sign in</h3>
        <?php 
                if(isset($_SESSION["errorMessage"])) {
                    ?>
                <div class="error-message"><?php  echo $_SESSION["errorMessage"]; ?></div>
                <?php 
                unset($_SESSION["errorMessage"]);
            } 
            ?>
        <span>username</span><span id="user_info" class="error-info"></span>
        <input type="email" name="Email" class="box" placeholder="enter your email" id="">
        <span>password</span><span id="password_info" class="error-info"></span>
        <input type="password" name="Password" class="box" placeholder="enter your password" id="">
        <div class="checkbox">
            <input type="checkbox" name="" id="remember-me">
            <label for="remember-me"> remember me</label>
        </div>
        <input type="submit" name ="login" value="sign in" class="btn">
        <p>forget password ? <a href="#">click here</a></p>
        <p>don't have an account ? <a href="#">create one</a></p>
    </form>

</div>
<!-- home section starts  -->

<section class="home" id="home">

    <div class="row">

        <div class="content">
            <h3>Start your own bookshelf now!</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam deserunt nostrum accusamus. Nam alias sit necessitatibus, aliquid ex minima at!</p>
            <a href="books.html" class="btn">Start adding!</a>
        </div>

        <div class="swiper books-slider">
            <div class="swiper-wrapper">
                <a href="#" class="swiper-slide"><img src="image/book-1.png" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/book-2.png" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/book-3.png" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/book-4.png" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/book-5.png" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/book-6.png" alt=""></a>
            </div>
            <img src="image/stand.png" class="stand" alt="">
        </div>

    </div>

</section>

<!-- home section ense  -->

<!-- featured section starts  -->

<section class="featured" id="featured">

    <h1 class="heading"> <span>featured books</span> </h1>

    <div class="swiper featured-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-1.png" alt="">
                </div>
                <div class="content">
                    <h3>Fantasy</h3>
                    <a href="#" class="btn">Add to bookshelf</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-2.png" alt="">
                </div>
                <div class="content">
                    <h3>Action</h3>
                    <a href="#" class="btn">Add to bookshelf</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-3.png" alt="">
                </div>
                <div class="content">
                    <h3>Action</h3>
                    <a href="#" class="btn">Add to bookshelf</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-4.png" alt="">
                </div>
                <div class="content">
                    <h3>Classics</h3>
                    <a href="#" class="btn">Add to bookshelf</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-5.png" alt="">
                </div>
                <div class="content">
                    <h3>Crime</h3>
                    <a href="#" class="btn">Add to bookshelf</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-6.png" alt="">
                </div>
                <div class="content">
                    <h3>Classics</h3>
                    <a href="#" class="btn">Add to bookshelf</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-7.png" alt="">
                </div>
                <div class="content">
                    <h3>Adventure</h3>
                    <a href="#" class="btn">Add to bookshelf</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-8.png" alt="">
                </div>
                <div class="content">
                    <h3>Romance</h3>
                    <a href="#" class="btn">Add to bookshelf</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-9.png" alt="">
                </div>
                <div class="content">
                    <h3>Mystery</h3>
                    <a href="#" class="btn">Add to bookshelf</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-10.png" alt="">
                </div>
                <div class="content">
                    <h3>Adventure</h3>
                    <a href="#" class="btn">Add to bookshelf</a>
                </div>
            </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>

<!-- featured section ends -->

<!-- deal section starts  -->

<section class="deal">

    <div class="content">
        <h1>Who we are</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde perspiciatis in atque dolore tempora quaerat at fuga dolorum natus velit.</p>
        <a href="books.html" class="btn">Start adding now!</a>
    </div>

    <div class="image">
        <img src="image/deal-img.jpg" alt="">
    </div>

</section>

<!-- deal section ends -->


<!-- newsletter section starts -->

<section class="newsletter">

    <form action="">
        <h3>subscribe for latest updates</h3>
        <input type="email" name="" placeholder="enter your email" id="" class="box">
        <input type="submit" value="subscribe" class="btn">
    </form>

</section>

<!-- newsletter section ends -->



<!-- footer section starts  -->

<section class="footer">


    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
    </div>

    <div class="credit"> created by <span>mr. web designer</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->

<!-- loader  -->

<div class="loader-container">
    <img src="image/loader-img.gif" alt="">
</div>


<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>