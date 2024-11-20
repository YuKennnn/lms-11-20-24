<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/jpg" href="image/spidy.jpg">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZakkSpaceLMS</title>


    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css link  -->
    <link rel="stylesheet" href="css/landingStyle.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <div class="header-1">

        <a href="#" class="logo"> <i class="fas fa-user-shield"></i>  ZakkSpace LMS </a>

        <form action="" class="search-form">
            <input type="search" name="" placeholder="Search by locker name" id="search-box">
            <label for="search-box" class="fas fa-search"></label>
        </form>

        <div class="icons">
            <div id="search-btn" class="fas fa-search"></div>
            <div id="login-btn" class="fas fa-user"></div>
        </div>

    </div>

    <div class="header-2">
        <nav class="navbar">
            <a href="index.html">Home</a>
            <a href="#About">About us</a>
            <a href="#ContactUs">Contact us</a>
        </nav>
    </div>

</header>

<!-- header section ends -->

<!-- login form need pa customize -->

<div class="login-form-container">

    <div id="close-login-btn" class="fas fa-times"></div>

    <form action="">
        <h3>sign in</h3>
        <span>username</span>
        <input type="email" name="" class="box" placeholder="enter your email" id="">
        <span>password</span>
        <input type="password" name="" class="box" placeholder="enter your password" id="">
        <div class="checkbox">
            <input type="checkbox" name="" id="remember-me">
            <label for="remember-me"> remember me</label>
        </div>
        <a href="{{ route ('adminDashboard') }}" class="btn">Sign in</a>
        <p>forget password ? <a href="#">click here</a></p>
        <p>don't have an account ? <a href="#">create one</a></p>
    </form>

</div>

<!-- home section starts  -->

<section class="home" id="home">

    <div class="row">

        <div class="content">
            <h3>Locker Management System</h3>
            <p>Say goodbye to worries about lost or misplaced things, and embrace a hassle-free way to manage your essentials.</p>
            <a href="#" class="btn">Get started</a>
        </div>

        <div class="swiper books-slider">
            <div class="swiper-wrapper">
                <a href="#" class="swiper-slide"><img src="image/462536257_8306953589432465_5230603309371593000_n.jpg" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/462542441_450513354810528_4666265286170809050_n.jpg" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/462561486_1595259587693350_4677993130865172162_n.jpg" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/462536257_8306953589432465_5230603309371593000_n.jpg" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/462542441_450513354810528_4666265286170809050_n.jpg" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/462561486_1595259587693350_4677993130865172162_n.jpg" alt=""></a>
            </div>
            <img src="image/stand.png" class="stand" alt="">
        </div>

    </div>

</section>

<!-- home section ense  -->

<!-- icons section starts  -->

<section class="icons-container">

    <div class="icons">
        <i class="fas fa-exclamation-triangle"></i>
        <div class="content">
            <h3>Proactive</h3>
            <p>Expiration Alert System</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-lock"></i>
        <div class="content">
            <h3>secure payment</h3>
            <p>100% secure payment</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-th-list"></i>
        <div class="content">
            <h3>Organized</h3>
            <p>Maintain tidy spaces</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-file-alt"></i>
        <div class="content">
            <h3>Paperless</h3>
            <p>Eliminate paperworks</p>
        </div>
    </div>

</section>

<!-- icons section ends -->

<!--About us starts here-->

    <div class="About" id="About">
        <h1>About us</h1>
        <p>We provide a simple and secure locker management system that allows users to easily store and access their belongings.</p>
    </div>
            <div class="container">
                <section class="about">
                    <div class="about-image">
                        <img src="image/spidy.jpg"  alt="">
                    </div>
                    <div class="about-content">
                        <h2>Reliable and cost-effective</h2>
                        <p>We understand how important it is to keep track of your essentials, and our system is here to give you peace of mind. Hello to a smarter way to manage your space!</p>
                        <a href="https://www.nedapsecurity.com/the-complete-guide-to-locker-management-systems/" target="_blank" class="read-more">Read more</a>
                    </div>
                </section>
            </div>

<!--About us ends here-->

<!--Contact us starts here-->

<section class="contact" id="ContactUs">
    <div class="Contact">
        <h2>Contact Us</h2>
        <div class="contact-wrapper">
            <div class="contact-form">
                <h3>Send us a message</h3>
                <form>  
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Your Email">
                    </div>
                    <div class="form-group">
                        <textarea name="message" placeholder="Your Message"></textarea>
                    </div>
                    <button type="submit">Send Message</button>
                </form>
            </div>
            <div class="contact-info">
                <h3>Contact Information</h3>
                <p><i class="fas fa-phone"></i> +639913545713</p>
                <p><i class="fas fa-envelope"></i> skyrieee@gmail.com</p>
                <p><i class="fas fa-map-marker-alt"></i> Panabo City</p>
            </div>
        </div>
    </div>
</section>

<!-- footer section starts  -->

<footer class="footer-distributed">

    <div class="footer-left">
        <h3>ZakkSpace<span>LMS</span></h3>

        <p class="footer-links">
            <a href="index.html">Home</a>
            |
            <a href="#About">About us</a>
            |
            <a href="#ContactUs">Contact us</a>
            |
        </p>

        <p class="footer-company-name">Copyright © 2024 <strong>ZakkSpace LMS</strong> All rights reserved</p>
    </div>

    <div class="footer-center">
        <div>
            <i class="fas fa-map-marker"></i>
            <p><span>Davao  del Norte State College</span>
                DNSC</p>
        </div>

        <div>
            <i class="fas fa-phone"></i>
            <p>+63913545713</p>
        </div>
        <div>
            <i class="fas fa-envelope"></i>
            <p><a href="">ZakkSpace@gmail.com</a></p>
        </div>
    </div>
    <div class="footer-right">
        <p class="footer-company-about">
            <span>About ZakkSpaceLMS</span>
            <strong>ZakkSpaceLMS</strong> &nbsp;&nbsp;ZakkSpace is the creator of the system, known as LMS, which stands for Locker Management System.
        </p>
        <div class="footer-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
    </div>
</footer>

<!-- footer section ends -->

<!-- loader  -->

<!-- <div class="loader-container">
    <img src="image/loader-img.gif" alt="">
</div> -->


<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
