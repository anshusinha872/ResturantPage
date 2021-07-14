<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./fontawesome-free-5.15.3-web/fontawesome-free-5.15.3-web/css/all.css">
</head>
<body class="dark-class" id="dark-class">
    <!-- header -->
    <header id="home">
        <div class="btn-dark-mode-off " id="btn-dark-mode-off">
            <button type="button" class="dark-mode-off " id="dark-mode-off" aria-label="dark-mode-off"><i class="fas fa-sun sun-icon "></i><i class="fas fa-toggle-off "></i></button>
        </div>
        <div class="btn-dark-mode-on display-none " id="btn-dark-mode-on">
            
            <button type="button" class="dark-mode-on " id="dark-mode-on" aria-label="dark-mode-on"><i class="fas fa-moon moon-icon"></i><i class="fas fa-toggle-on"></i></button>
        </div>




        <!-- navbar -->
        <nav class="nav-bar ">
            <div class="nav-center">
                <!-- nav-header -->
                <div class="nav-header">
                    <img src="./Img/logo3.png" width="175"  class="nav-logo" alt="Resturant">
                    <button type="button" class="nav-toggle" id="nav-toggle" aria-label="nav-toggle"><i class="fas fa-bars"></i></button>
                </div>
                <!-- end of navbar -header -->
                <!-- navbar link -->
                <div class="nav-links " id="nav-links">

                    <a href="#home" class="nav-link scroll-link">home</a>
                    <a href="#about" class="nav-link scroll-link">about</a>
                    <a href="#services" class="nav-link scroll-link">Services</a>
                    <a href="#gallery" class="nav-link scroll-link">gallery</a>
                    <a href="#featured" class="nav-link scroll-link">featured</a>
                    
                </div>
                <!-- end of navbar link -->
                <!-- nav-social media icons -->
                <div class="nav-icons">
                    <a href="https://www.instagram.com/cool_anshu_sinha/"  target="_blank"><i class="fab fa-instagram nav-icon"></i></a>
                    <a href="https://github.com/anshusinha872" class="" target="_blank"><i class="fab fa-github nav-icon"></i></a>
                    <a href="https://www.linkedin.com/in/anshu-abhishek-3b8195200/" target="_blank" class=""><i class="fab fa-linkedin nav-icon"></i></a>
                    <a href="https://twitter.com/?lang=en" class="" target="_blank"><i class="fab fa-twitter nav-icon"></i></a>
                </div>
                
                <!-- end of nav-social-media -icons -->
            </div>
        </nav>
        <!-- hero component -->
        <div class="hero">
            <div class="hero-banner">
                <h1 class="hero-title">Welcome</h1>
                <p class="hero-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, nulla.</p>
                <a href="#featured" class="btn-white scroll-link">Explore Food</a>
            </div>
        </div>
    </header>
    <!-- end of header -->
    <!-- about section -->
    <section class="section about" id="about">
        <!-- title -->
        <div class="title-wrapper">
            <h2 class="title">About <span class="sub-title">Us</span></h2>
        </div>
        <!-- end of title -->
        <!-- about center -->
        <div class="about-center section-center">
            <!-- about image -->
            <article class="about-img">
                <img src="./Img/about-img-3.jpg"  class="about-photo" alt="Resturant image">
            </article>
            <!-- about-Info -->
            <article class="about-info">
                <!-- title -->
                    <div class="title-wrapper">
                    <h2 class="title">Explore The <span class="sub-title">Difference</span></h2>
                    </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea quisquam quasi aut magnam assumenda minima tenetur dignissimos consequuntur mollitia temporibus!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem numquam dolorum, quae natus distinctio id ex ad quas ab similique?</p>
                <a href="#read" class="btn-primary" >Read More</a>
            </article>
        </div>
    </section>
    <!-- end of about section -->
    <!-- services section -->
        <section class="section services " id="services">
        <!-- title -->
        <div class="title-wrapper">
        <h2 class="title">Our <span class="sub-title">Service</span></h2>
        </div>
    <!-- end of title -->
    <!-- section-center -->
    <div class="section-center services-center">
        <!-- single service -->
        <article class="service">
        <span class="service-icon">
            <i class="fas fa-hamburger fa-fw"></i>
        </span>
        <div class="service-info">
            <h4 class="service-title">Take Aways</h4>
            <p class="service-text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam,
            deserunt?
            </p>
        </div>
        </article>
        <!-- end of single service -->
        <!-- single service -->
        <article class="service">
        <span class="service-icon">
            <i class="fas fa-utensils fa-fw"></i>
        </span>
        <div class="service-info">
            <h4 class="service-title">Order Online</h4>
            <p class="service-text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam,
            deserunt?
            </p>
        </div>
        </article>
        <!-- end of single service -->
        <!-- single service -->
        <article class="service">
        <span class="service-icon">
            <i class="fas fa-coffee fa-fw"></i>
        </span>
        <div class="service-info">
            <h4 class="service-title">Dine in</h4>
            <p class="service-text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam,
            deserunt?
            </p>
        </div>
        </article>
        <!-- end of single service -->
    </div>
    </section>
    <!-- end of services section -->
    <!--  product -->
    <section class="section featured " id="featured">
        <!-- title -->
        <div class="title-wrapper">
            <h2 class="title">featured <span class="sub-title">Product</span></h2>
        </div>
        <!-- end of title -->
        <!-- featured center -->
        <div class="section-center featured-center">
            <!-- single product -->
            <article class="product-card">
                <!-- image-container -->
                <div class="product-img-container">
                    <a href="order.php" target="_blank">
                        <img src="./Img/product-img-1.jpg" class="product-img" alt="awesome product">
                    </a>
                    <p class="product-date">Indian Cuisine</p>
                </div>
                <!-- product-footer -->
                <div class="product-footer">
                    <h4 class="product-title">Samosa</h4>
                    <!-- product info -->
                    <div class="product-info">
                        <p class="product-country">
                            <span> <i class="fas fa-map"></i></span>
                            $2
                        </p>
                        <div class="product-details">
                            <p>Aalo filling</p>
                            <p>mint chutney</p>
                        </div>
                    </div>
                </div>
            </article>
            <!--  end of single product -->
            <!-- single product -->
            <article class="product-card">
                <!-- image-container -->
                <div class="product-img-container">
                    <a href="order.php" target="_blank">

                        <img src="./Img/product-img-2.jpg" class="product-img" alt="awesome product">
                    </a>
                    <p class="product-date">Bengali Cuisine</p>
                </div>
                <!-- product-footer -->
                <div class="product-footer">
                    <h4 class="product-title">Kathi Role</h4>
                    <!-- product info -->
                    <div class="product-info">
                        <p class="product-country">
                            <span> <i class="fas fa-map"></i></span>
                            $10
                        </p>
                        <div class="product-details">
                            <p> Chapati</p>
                            <p>mint chutney</p>
                        </div>
                    </div>
                </div>
            </article>
            <!--  end of single product -->
            <!-- single product -->
            <article class="product-card">
                <!-- image-container -->
                <div class="product-img-container">
                    <a href="order.php" target="_blank">

                        <img src="./Img/product-img-3.jpg" class="product-img" alt="awesome product">
                    </a>
                    <p class="product-date">Italian Cuisine</p>
                </div>
                <!-- product-footer -->
                <div class="product-footer">
                    <h4 class="product-title">Burger</h4>
                    <!-- product info -->
                    <div class="product-info">
                        <p class="product-country">
                            <span> <i class="fas fa-map"></i></span>
                            $9
                        </p>
                        <div class="product-details">
                            <p>Veg Patty</p>
                            <p>chips</p>
                        </div>
                    </div>
                </div>
            </article>
            <!--  end of single product -->
            <!-- single product -->
            <article class="product-card">
                <!-- image-container -->
                <div class="product-img-container">
                    <a href="order.php" target="_blank">

                        <img src="./Img/product-img-4.jpg" class="product-img" alt="awesome product">
                    </a>
                    <p class="product-date">Indian Cuisine</p>
                </div>
                <!-- product-footer -->
                <div class="product-footer">
                    <h4 class="product-title">Panner Lababdar</h4>
                    <!-- product info -->
                    <div class="product-info">
                        <p class="product-country">
                            <span> <i class="fas fa-map"></i></span>
                            $20
                        </p>
                        <div class="product-details">
                            <p>Panner Curry</p>
                            <p>bread</p>
                        </div>
                    </div>
                </div>
            </article>
            <!--  end of single product -->
            <!-- single product -->
            <article class="product-card">
                <!-- image-container -->
                <div class="product-img-container">
                    <a href="order.php" target="_blank">

                        <img src="./Img/product-img-5.jpg" class="product-img" alt="awesome product">
                    </a>
                    <p class="product-date">Desert</p>
                </div>
                <!-- product-footer -->
                <div class="product-footer">
                    <h4 class="product-title">Black Forest cake</h4>
                    <!-- product info -->
                    <div class="product-info">
                        <p class="product-country">
                            <span> <i class="fas fa-map"></i></span>
                            $13
                        </p>
                        <div class="product-details">
                            <p>Dark</p>
                            <p>chocolate</p>
                        </div>
                    </div>
                </div>
            </article>
            <!--  end of single product -->
            <!-- single product -->
            <article class="product-card">
                <!-- image-container -->
                <div class="product-img-container">
                    <a href="order.php" target="_blank">
                        <img src="./Img/product-img-6.jpg" class="product-img" alt="awesome product">
                    </a>
                    <p class="product-date">Italian Cuisine</p>
                </div>
                <!-- product-footer -->
                <div class="product-footer">
                    <h4 class="product-title">pasta</h4>
                    <!-- product info -->
                    <div class="product-info">
                        <p class="product-country">
                            <span> <i class="fas fa-map"></i></span>
                            $12
                        </p>
                        <div class="product-details">
                            <p>Red sauce</p>
                            <p>garlic bread</p>
                        </div>
                    </div>
                </div>
            </article>
            <!--  end of single product -->
            <!-- single product -->
            <article class="product-card">
                <!-- image-container -->
                <div class="product-img-container">
                    <a href="order.php" target="_blank">
                        <img src="./Img/product-img-8.jpg" class="product-img" alt="awesome product">
                    </a>
                    <p class="product-date">U S Cuisine</p>
                </div>
                <!-- product-footer -->
                <div class="product-footer">
                    <h4 class="product-title">Chocolava Cake</h4>
                    <!-- product info -->
                    <div class="product-info">
                        <p class="product-country">
                            <span> <i class="fas fa-map"></i></span>
                            $5
                        </p>
                        <div class="product-details">
                            <p> oven-baked</p>
                            <p>chocolate cake</p>
                        </div>
                    </div>
                </div>
            </article>
            <!--  end of single product -->
            <!-- single product -->
            <article class="product-card">
                <!-- image-container -->
                <div class="product-img-container">
                    <a href="order.php" target="_blank">
                        <img src="./Img/product-img-7.jpg" class="product-img" alt="awesome product">
                    </a>
                    <p class="product-date">American cuisine</p>
                </div>
                <!-- product-footer -->
                <div class="product-footer">
                    <h4 class="product-title">chicken wings</h4>
                    <!-- product info -->
                    <div class="product-info">
                        <p class="product-country">
                            <span> <i class="fas fa-map"></i></span>
                            $16
                        </p>
                        <div class="product-details">
                            <p>lemon sauce</p>
                            <p>Ranch</p>
                        </div>
                    </div>
                </div>
            </article>
            <!--  end of single product -->
        </div>
        <!-- end of product-center -->
        <div class="product-link">
            <a href="product.php" target="_blank" class="btn-primary">All products</a>
        </div>
    </section>
    <!-- end of featured product -->
    <!-- gallery -->
    <section class="section gallery" id="gallery">
        <!-- title -->
        <div class="title-wrapper">
            <h2 class="title">Our <span class="sub-title">Gallery</span></h2>
        </div>
        <!-- end of title -->
        <!-- gallery center -->
        <div class="gallery-center">
            <!-- single-item -->
            <div class="gallery-img-container">
                <img src="./Img/gallery-img-1.jpg" class="gallery-img" alt="image">
                <span class="gallery-icon"><i class="fas fa-search"></i></span>
            </div>
            <!-- end of single-item -->
            <!-- single-item -->
            <div class="gallery-img-container">
                <img src="./Img/gallery-img-2.jpg" class="gallery-img" alt="image">
                <span class="gallery-icon"><i class="fas fa-search"></i></span>
            </div>
            <!-- end of single-item -->
            <!-- single-item -->
            <div class="gallery-img-container">
                <img src="./Img/gallery-img-3.jpg" class="gallery-img" alt="image">
                <span class="gallery-icon"><i class="fas fa-search"></i></span>
            </div>
            <!-- end of single-item -->
            <!-- single-item -->
            <div class="gallery-img-container">
                <img src="./Img/gallery-img-4.jpg" class="gallery-img" alt="image">
                <span class="gallery-icon"><i class="fas fa-search"></i></span>
            </div>
            <!-- end of single-item -->
            <!-- single-item -->
            <div class="gallery-img-container">
                <img src="./Img/gallery-img-5.jpg" class="gallery-img" alt="image">
                <span class="gallery-icon"><i class="fas fa-search"></i></span>
            </div>
            <!-- end of single-item -->
            <!-- single-item -->
            <div class="gallery-img-container">
                <img src="./Img/gallery-img-6.jpg" class="gallery-img" alt="image">
                <span class="gallery-icon"><i class="fas fa-search"></i></span>
            </div>
            <!-- end of single-item -->
            <!-- single-item -->
            <div class="gallery-img-container">
                <img src="./Img/gallery-img-7.jpg" class="gallery-img" alt="image">
                <span class="gallery-icon"><i class="fas fa-search"></i></span>
            </div>
            <!-- end of single-item -->
            <!-- single-item -->
            <div class="gallery-img-container">
                <img src="./Img/gallery-img-8.jpg" class="gallery-img" alt="image">
                <span class="gallery-icon"><i class="fas fa-search"></i></span>
            </div>
            <!-- end of single-item -->
        </div>
    </section>
    <!-- end of gallery -->
    <!-- email -->
    <section class="contact">
        <form action="connect.php" method="POST">

            <div class="main-input-area">
                <div class="input">
                    <div class="heading-element">
                        <h2>Contact us</h2>
                        <h6>We will get back to you asap!</h6>
                    </div>
                    <div class="heading-subelemt">
                    <div class="name">
                        <div class="icon">
    
                            <i class="fas fa-user"></i>
                        </div>
    
                        <input type="text" class="input-area-1"  name="firstName" placeholder="First Name" style="text-transform: capitalize;" id="">
                        <input type="text" class="input-area-1" name="lastName" style="text-transform: capitalize; " placeholder="last name">
                    </div>
                    <div class="email">
                        <i class="fas fa-envelope icon"></i>
                        <input type="text" style="text-transform: capitalize; " placeholder="email_id" name="email" id="">
                    </div>
                    <div class="phone">
                        <i class="fas fa-phone-square-alt icon"></i>
                        <input type="text" style="text-transform: capitalize;" placeholder="contact_number" name="number" id="">
                    </div>
                </div>
                <button type="submit" class="btn">Send</button>
                <div>
                    <h3 class="footertext">You may also call at 8292009935</h3>
                </div>
            </div>
        </div>
        </section>
        </form>
    <!-- end of email -->
    <!-- footer -->
    <footer class="section footer">
        <!-- footer-link -->
        <div class="footer-links">
            <a href="#home" class="footer-link scroll-link">home</a>
            <a href="#about" class="footer-link scroll-link">about</a>
            <a href="#services" class="footer-link scroll-link">Services</a>
            <a href="#gallery" class="footer-link scroll-link">gallery</a>
            <a href="#featured" class="footer-link scroll-link">featured</a>
        </div>
        <!-- footer icons -->
        <div class="footer-icons">
            <a href="https://www.instagram.com/cool_anshu_sinha/"  target="_blank"><i class="fab fa-instagram footer-icon"></i></a>
            <a href="https://github.com/anshusinha872" class="" target="_blank"><i class="fab fa-github footer-icon"></i></a>
            <a href="https://www.linkedin.com/in/anshu-abhishek-3b8195200/" target="_blank" class=""><i class="fab fa-linkedin footer-icon"></i></a>
            <a href="https://twitter.com/?lang=en" class="" target="_blank"><i class="fab fa-twitter footer-icon"></i></a>
        </div>
        <!-- <img src="./Img/Anshu-logos_transparent.png"  class="footer-img" alt=""> -->
        <!-- copyright -->
        <p class="copyright">
            copyright &copy; Sinha Resturant <span id="date"></span>. all right reserved
        </p>
    </footer>
    <!-- end of footer -->
    <!-- javascript -->
    <script src="./app.js"></script>
    <!-- end of javascript -->
</body>
</html>