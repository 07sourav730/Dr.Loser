<?php
// Database connection function
include_once 'dbconnection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dr.Loser</title>
    <!-----Main CSS--------->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contact.css">
    <!----BOXICONS--------->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!----Gooogle FONTS------>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" rel="stylesheet">
    <!-----SWIPER LINK-------------------->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
</head>
<body>
    <nav>
        <div class="container nav___container">
            <a href="index.html"><h4>Dr.Loser</h4></a>
            <ul class="nav__menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="course.php">Course</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <button id="open_nav-btn"><i class='bx bx-menu'></i></button>
            <button id="close_nav-btn"><i class='bx bx-x'></i></button>
        </div>
    </nav>
    <!---------=========END OF NAVBAR=========---------------->

    

            








    
    <!--=================Start OF Footer ==========================-->
    <footer>
        <div class="container footer__container">
            <div class="footer__1">
                <a href="index.html" class="footer__logo"><h4>DR.LOSER</h4></a>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                </p>
            </div>

            <div class="footer__2">
                <h4>Permalinks</h4>
                <ul class="permalinks">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="course.html">Course</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>

            <div class="footer__3">
                <h4>Privacy</h4>
                <ul class="privacy">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms and Conditions</a></li>
                    <li><a href="#">Refund Policy</a></li>
                </ul>
            </div>

            <div class="footer__4">
                <h4>Contact Us</h4>
                <div>
                    <p>+03215874125</p>
                    <p>dr.loser741@gmail.com</p>
                </div>

                <ul class="footer__socials">
                    <li>
                        <a href="#"><i class='bx bxl-facebook'></i></a>
                    </li>
                    <li>
                        <a href="#"><i class='bx bxl-instagram'></i></a>
                    </li>
                    <li>
                        <a href="#"><i class='bx bxl-telegram'></i></a>
                    </li>
                    <li>
                        <a href="#"><i class='bx bxl-whatsapp'></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer__copyright">
            <small>Copyright &copy; Sourav Paul IT Sector </small>
        </div>
    </footer>







    <!--===============MAIN JS LINK============================-->
    <script src="main.js"></script>
    
</body>
</html>