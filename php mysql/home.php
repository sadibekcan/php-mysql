<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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

<!-- HOME SECTION STARTS -->
<section class="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>travel arround the world</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>discover the new places</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>make your tour worthwhile</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>

        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>
<!-- HOME SECTION ENDS -->

<!-- SERVICES SECTION STARTS -->
<section class="services">
    <h1 class="heading-title"> our services </h1>
    <div class="box-container">
        <div class="box">
            <img src="images/icon-1.png" alt="">
            <h3>adventure</h3>
        </div>

        <div class="box">
            <img src="images/icon-2.png" alt="">
            <h3>tour guide</h3>
        </div>

        <div class="box">
            <img src="images/icon-3.png" alt="">
            <h3>trekking</h3>
        </div>

        <div class="box">
            <img src="images/icon-4.png" alt="">
            <h3>camp fire</h3>
        </div>

        <div class="box">
            <img src="images/icon-5.png" alt="">
            <h3>off road</h3>
        </div>

        <div class="box">
            <img src="images/icon-6.png" alt="">
            <h3>camping</h3>
        </div>
    </div>
</section>
<!-- SERVICES SECTION ENDS -->

<!-- HOME ABOUT SECTION STARTS -->

<section class="home-about">
    <div class="image">
        <img src="images/about-img.jpg" alt="">
    </div>

    <div class="content">
        <h3>about us</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Molestiae nobis, quisquam natus quidem ullam tempore magni 
        sunt amet itaque esse pariatur adipisci, modi voluptatum, 
        dolores animi. Cum accusamus animi molestias!</p>
        <a href="about.php" class="btn">read more</a>
    </div>
</section>
<!-- HOME ABOUT SECTION ENDS -->


<!-- HOME PACKAGES SECTION STARTS -->

<section class="home-packages">
    <h1 class="heading-title"> our packages</h1>
    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="images/img-1.jpg" alt="">
            </div>
            <div class="content">
                <h3> adventure & tour</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore, id.</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/img-2.jpg" alt="">
            </div>
            <div class="content">
                <h3> adventure & tour</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore, id.</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/img-3.jpg" alt="">
            </div>
            <div class="content">
                <h3> adventure & tour</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore, id.</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

    </div>
    <div class="load-more"> <a href="package.php" class="btn">load more</a></div>
</section>
<!-- HOME PACKAGES SECTION ENDS -->


<!-- HOME OFFER SECTION STARTS -->

<section class="home-offer">
    <div class="content">
        <h3>upto 50% off</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Quibusdam minima voluptatibus sit blanditiis vitae. Dolorem 
        earum exercitationem fugiat enim molestias?</p>
        <a href="book.php" class="btn">book now</a>
    </div>
</section>


<!-- HOME OFFER SECTION ENDS -->








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