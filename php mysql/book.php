<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>

    <!-- swıper css link -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>

    <!-- FONT AWESOME CDN LINK -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- CUSTOM CSS FILE LINK -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- HEADER SECTION STARTS -->
<section class="header">
    <a href="home.php" class="logo">travel.</a>
    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="about.php">about</a>
        <a href="package.php">package</a>
        <a href="book.php">book</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>
</section>

<!-- HEADER SECTION ENDS -->

<div class="heading" style="background:url(images/header-bg-2.png) no-repeat">
    <h1>book now</h1>
</div>

<!-- BOOKING SECTION STARTS -->

<section class="booking">
    <h1 class="heading-title">book your trip!</h1>
    <form action="book_form.php" method="post" class="book-form">
        <div class="flex">
            <div class="inputBox">
                <span>name :</span>
                <input type="text" placeholder="enter your name" name="name">
            </div>
            <div class="inputBox">
                <span>email :</span>
                <input type="email" placeholder="enter your email" name="email">
            </div>
            <div class="inputBox">
                <span>phone :</span>
                <input type="number" placeholder="enter your number" name="phone">
            </div>
            <div class="inputBox">
                <span>address :</span>
                <input type="text" placeholder="enter your address" name="address">
            </div>
            <div class="inputBox">
                <span>where to :</span>
                <input type="text" placeholder="place you want to visit" name="location">
            </div>
            <div class="inputBox">
                <span>how many :</span>
                <input type="number" placeholder="number of guests" name="guests">
            </div>
            <div class="inputBox">
                <span>arrivals :</span>
                <input type="date" name="arrivals">
            </div>
            <div class="inputBox">
                <span>leaving :</span>
                <input type="date" name="leaving">
            </div>
        </div>

        <input type="submit" value="submit" class="btn" name="send">
    </form>
</section>
<!-- BOOKING SECTION ENDS -->








<!-- FOOTER SECTION STARTS -->

<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
            <a href="home.php"><i class="fas fa-angle-right"></i>home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
            <a href="package.php"><i class="fas fa-angle-right"></i>package</a>
            <a href="book.php"><i class="fas fa-angle-right"></i>book</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href='#'><i class="fas fa-angle-right"></i> ask questions</a>
            <a href='#'><i class="fas fa-angle-right"></i> about us</a>
            <a href='#'><i class="fas fa-angle-right"></i> privacy policy</a> 
            <a href='#'><i class="fas fa-angle-right"></i> terms of use</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href='#'><i class="fas fa-phone"></i> 123 456 789 </a>
            <a href='#'><i class="fas fa-phone"></i> 333 444 777 </a>
            <a href='#'><i class="fas fa-envelope"></i> sadibekcan@gmail.com </a>
            <a href='#'><i class="fas fa-map"></i> İstanbul , Turkey - 34340 </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"><i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"><i class="fab fa-twitter"></i> twitter </a>
            <a href="#"><i class="fab fa-istagram"></i> instagram </a>
            <a href="#"><i class="fab fa-linkedin"></i> linkedin </a>
        </div>
    </div>

    <div class="credit"> created by <span>mr. sadi bekcan</span> | all rights reserved! </div>
</section>

<!-- FOOTER SECTION ENDS -->





<!-- SWIPER JS LINK -->
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- CUSTOM JS FILE LINK -->
<script src="js/script.js"></script>
    
</body>
</html>