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
    <!----BOXICONS--------->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!----Gooogle FONTS------>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" rel="stylesheet">
    <!-----SWIPER LINK-------------------->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>


    <!-----Main CSS--------->
    <link rel="stylesheet" href="css/style.css">
    <style>
        .courses{
            margin-top: 1rem;
        }
    </style>

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

    
    <section class="courses">
        <h2>Our Populer Course </h2>
        <div class="container course__container">
             <article class="course">
                <div class="course__logo">
                    <a href="#"><img src="images/course1.jpg"></a>
                </div>
                <div class="courses__info">
                    <h4>Responsive Social Media Website UI Design</h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                    <a href="course.html" class="btn btn-primary">Learn More</a>
                </div>
             </article>

             <article class="course">
                <div class="course__logo">
                    <img src="images/course2.jpg">
                </div>
                <div class="courses__info">
                    <h4>Responsive SmartHome Website Design</h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                    <a href="course.html" class="btn btn-primary">Learn More</a>
                </div>
             </article>

             <article class="course">
                <div class="course__logo">
                    <img src="images/course3.jpg">
                </div>
                <div class="courses__info">
                    <h4>Responsive Admin DashBoard UI Design</h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                    <a href="course.html" class="btn btn-primary">Learn More</a>
                </div>
             </article>

             <article class="course">
                <div class="course__logo">
                    <img src="images/course4.jpg">
                </div>
                <div class="courses__info">
                    <h4>Responsive Admin DashBoard UI Design</h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                    <a href="course.html" class="btn btn-primary">Learn More</a>
                </div>
             </article>

             <article class="course">
                <div class="course__logo">
                    <img src="images/course5.jpg">
                </div>
                <div class="courses__info">
                    <h4>Responsive Admin DashBoard UI Design</h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                    <a href="course.html" class="btn btn-primary">Learn More</a>
                </div>
             </article>

             <article class="course">
                <div class="course__logo">
                    <img src="images/course6.jpg">
                </div>
                <div class="courses__info">
                    <h4>Responsive Admin DashBoard UI Design</h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                    <a href="course.html" class="btn btn-primary">Learn More</a>
                </div>
             </article>

             <article class="course">
                <div class="course__logo">
                    <img src="images/course7.jpg">
                </div>
                <div class="courses__info">
                    <h4>Responsive Admin DashBoard UI Design</h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                    <a href="course.html" class="btn btn-primary">Learn More</a>
                </div>
             </article>

             <article class="course">
                <div class="course__logo">
                    <img src="images/course8.jpg">
                </div>
                <div class="courses__info">
                    <h4>Responsive Admin DashBoard UI Design</h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                    <a href="course.html" class="btn btn-primary">Learn More</a>
                </div>
             </article>

             <article class="course">
                <div class="course__logo">
                    <img src="images/course9.jpg">
                </div>
                <div class="courses__info">
                    <h4>Responsive Admin DashBoard UI Design</h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                    <a href="course.html" class="btn btn-primary">Learn More</a>
                </div>
             </article>

             <article class="course">
                <div class="course__logo">
                    <img src="images/course10.jpg">
                </div>
                <div class="courses__info">
                    <h4>Responsive Admin DashBoard UI Design</h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                    <a href="course.html" class="btn btn-primary">Learn More</a>
                </div>
             </article>

             <article class="course">
                <div class="course__logo">
                    <img src="images/course11.jpg">
                </div>
                <div class="courses__info">
                    <h4>Responsive Admin DashBoard UI Design</h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                    <a href="course.html" class="btn btn-primary">Learn More</a>
                </div>
             </article>

             <article class="course">
                <div class="course__logo">
                    <img src="images/course12.jpg">
                </div>
                <div class="courses__info">
                    <h4>Responsive Admin DashBoard UI Design</h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                    <a href="course.html" class="btn btn-primary">Learn More</a>
                </div>
             </article>

             <article class="course">
                <div class="course__logo">
                    <img src="images/course13.jpg">
                </div>
                <div class="courses__info">
                    <h4>Responsive Admin DashBoard UI Design</h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                    <a href="course.html" class="btn btn-primary">Learn More</a>
                </div>
             </article>

             <article class="course">
                <div class="course__logo">
                    <img src="images/course14.jpg">
                </div>
                <div class="courses__info">
                    <h4>Responsive Admin DashBoard UI Design</h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                    <a href="course.html" class="btn btn-primary">Learn More</a>
                </div>
             </article>

             <article class="course">
                <div class="course__logo">
                    <img src="images/course15.jpg">
                </div>
                <div class="courses__info">
                    <h4>Responsive Admin DashBoard UI Design</h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                    <a href="course.html" class="btn btn-primary">Learn More</a>
                </div>
             </article>

             <article class="course">
                <div class="course__logo">
                    <img src="images/course16.jpg">
                </div>
                <div class="courses__info">
                    <h4>Responsive Admin DashBoard UI Design</h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                    <a href="course.html" class="btn btn-primary">Learn More</a>
                </div>
             </article>

             <article class="course">
                <div class="course__logo">
                    <img src="images/course17.jpg">
                </div>
                <div class="courses__info">
                    <h4>Responsive Admin DashBoard UI Design</h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                    <a href="course.html" class="btn btn-primary">Learn More</a>
                </div>
             </article>

             <article class="course">
                <div class="course__logo">
                    <img src="images/course18.jpg">
                </div>
                <div class="courses__info">
                    <h4>Responsive Admin DashBoard UI Design</h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                    <a href="course.html" class="btn btn-primary">Learn More</a>
                </div>
             </article>
        </div>
    </section>

    <!--=================END OF Course ==========================-->
   

    



    







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