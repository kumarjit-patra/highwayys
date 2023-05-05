<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- swiper css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- custom css file -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- header section start -->
    <section class="header">
        <a href="home.php" class="logo">Highwayys</a>
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">Packages</a>
            <a href="book.php">Booking</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
<div class="heading" style="background:url(chobi/bgb.jpg)no-repeat">
    <h1>Booking</h1>
</div>

<!-- booking -->
<section class="booking">
    <h1 class="heading-title">Book now</h1>
    <form action="book_form.php" method="post" class="book-form">
        <div class="flex">
            <div class="inputBox">
                <span>name :</span>
                <input type="text" placeholder="please enter your name" name="name">
            </div>
            <div class="inputBox">
                <span>email :</span>
                <input type="email" placeholder="please enter your email" name="email">
            </div>
            <div class="inputBox">
                <span>phone :</span>
                <input type="number" placeholder="please enter your phone number" name="phone">
            </div>
            <div class="inputBox">
                <span>address :</span>
                <input type="text" placeholder="please enter your address" name="address">
            </div>
             
            <div class="inputBox">
                <span>location :</span>
                <input type="text" placeholder="where you want you to go" name="location">
            </div>
            <div class="inputBox">
                <span>members :</span>
                <input type="number" placeholder="no. of members" name="members">
            </div>
            <div class="inputBox">
                <span>arrival :</span>
                <input type="date" name="arrivals">
            </div>
            <div class="inputBox">
                <span>leaving :</span>
                <input type="date"  name="leave">
            </div>
            </div>
        <input type="submit" value="submit" class="btn" name="send">
    </form>
</section>



















<!-- footer part -->
<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>Links</h3>
        <a href="home.php"><i class="fas fa-angle-right"></i>Home</a>
        <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
        <a href="package.php"><i class="fas fa-angle-right"></i>Packages</a>
        <a href="book.php"><i class="fas fa-angle-right"></i>Booking</a>
        </div>
        <div class="box">
            <h3>Extra links</h3>
        <a href="#"><i class="fas fa-angle-right"></i>Ask questions</a>
        <a href="#"><i class="fas fa-angle-right"></i>About us</a>
        <a href="#"><i class="fas fa-angle-right"></i>Privacy policy</a>
        <a href="#"><i class="fas fa-angle-right"></i>Terms and Conditions</a>
        </div>
        <div class="box">
            <h3>Contact</h3>
        <a href="#"><i class="fas fa-phone"></i>91+7044278077</a>
        <a href="#"><i class="fas fa-envelope"></i>kumarjitpatra.09@gmail.com</a>
        <a href="#"><i class="fas fa-map"></i>Kolkata,India-700123</a>
        </div>
        <div class="box">
            <h3>Follow us</h3>
            <a href="#"><i class="fab fa-facebook-f"></i>Facebook</a>
            <a href="#"><i class="fab fa-instagram"></i>Instagram</a>
            <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
        </div>
    </div>
    <div class="credit">Copyright&#169; <span>Created by Kumarjit patra</span>|All Rights Reserved|</div>
</section>
    <!-- swiper js file -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file -->
<script src="script.js"></script>

</body>
</html>
