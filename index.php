<?php include 'sendemail.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <title>SnowWhites LLC</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;300;400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.min.css">
    <script src="https://kit.fontawesome.com/67e385a821.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
</head>

<body>
    <header id="header" class="header">
        <!-- Navigation -->
        <div class="navigation">
            <div class="container">
                <nav class="nav__center">
                    <div class="nav__header">
                        <div class="nav__logo">
                            <i class="far fa-snowflake"></i>SnowWhites<span>LLC</span>
                        </div>

                        <div class="nav__hamburger">
                            <span>
                                <i class="fas fa-bars"></i>
                            </span>
                        </div>
                    </div>

                    <div class="nav__menu">
                        <div class="menu__top">
                            <h1 class="nav__category">
                                <i class="far fa-snowflake"></i>SnowWhites<span>LLC</span>
                            </h1>

                            <div class="close__toggle">
                                <i class="fas fa-times"></i>
                            </div>
                        </div>
                        <ul class="nav__list">
                            <li class="nav__item">
                                <a href="index.html">Home</a>
                            </li>

                            <li class="nav__item">
                                <a href="index.html">About</a>
                            </li>

                            <li class="nav__item">
                                <a href="index.php">Book</a>
                            </li>
                            <li class="nav__item">
                                <a href="index.php">Contact</a>
                            </li>
                        </ul>

                        <ul class="nav__icons">
                            <a href="#" class="icon__item">
                                <i class="fas fa-search"></i>
                            </a>

                            <a href="#" class="icon__item">
                                <i class="fas fa-user"></i>
                            </a>

                            <a href="#" class="icon__item">
                                <i class="fas fa-shopping-basket"></i>

                            </a>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <!--alert messages start-->
        <?php echo $alert; ?>
        <!--alert messages end-->

        <!--contact section start-->
        <div class="contact-section">
            <div class="contact-info">
                <div><i class="fas fa-map-marker-alt"></i>Cleveland, OH</div>
                <div><i class="fas fa-envelope"></i>Xagrayx456@gmail.com</div>
                <div><i class="fas fa-phone"></i>216-882-5969</div>
                <div><i class="fas fa-clock"></i>Mon - Fri 8:00 AM to 5:00 PM</div> 
            </div>
            <div class="contact-form">
                <h2>Place Order or Book</h2>
                <form class="contact" action="" method="post">
                    <input type="text" name="name" class="text-box" placeholder="Your Name" required>
                    <input type="email" name="email" class="text-box" placeholder="Your Email" required>
                    <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
                    <input type="submit" name="submit" class="send-btn" value="Send">
                </form>
            </div>
        </div>
        <!--contact section end-->
        <footer id="footer" class="section footer">
            <div class="container">
                <div class="footer__top">
                   
                    <div class="footer-top__box">
                        <h3>INFORMATION</h3>
                        <a href="#">About Us</a>
                        <a href="#">Terms & Conditions</a>
                        <a href="#">Contact Us</a>

                    </div>
                    <div class="footer-top__box">
                        <h3>CONTACT US</h3>
                        <div>
                            <span>
                                <i class="fas fa-map-marker-alt"></i>
                            </span>
                            Located in Garfield Heights, Ohio.
                            
                        </div>
                        <div>
                            <span>
                                <i class="far fa-envelope"></i>
                            </span>
                            xagrayx456@gmail.com
                        </div>
                        <div>
                            <span>
                                <i class="fas fa-phone-alt"></i>
                            </span>
                            216-882-5969
                        </div>

                    </div>
                    <div class="footer-logo">
                        <i class="far fa-snowflake"></i>SnowWhites LLC
                    </div>
                </div>
            </div>
            </div>
        </footer>
        

        <script type="text/javascript">
            if (window.history.replaceState) {
                window.history.replaceState(null, null, window.location.href);
            }
        </script>
         <!-- Glidejs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>

<!-- Custom Script -->
<script src="./js/slider.js"></script>
<script src="./js/index.js"></script>

</body>

</html>