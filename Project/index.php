<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Speedoo</title>
    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <!-- fa fa icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- w3 cdn -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="style.css">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="icon" type="image/png" href="./images/faviconlogo.png">
</head>

<body>

    <nav class="navbar">
        <a href="./index.php"><img src="./images/nav_logo.png" class="logo"></a>
        <ul class="nav-links">
            <li><a href="./index.php">Home</a></li>
            <li><a href="./services.php">Services</a></li>
            <li class="dropdown">
                <a href="#services">Models</a>
                <div class="dropdown-content">
                    <a href="#">Bike</a>
                    <a href="./cars.php">Car</a>
                </div>
            </li>
            <li><a href="./about.php">About</a></li>
            <li><a href="#footer">Contact</a></li>

        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>


    <!-- Carousal section End-->

    <div class="carousel-container">
        <div class="carousel">
            <img src="./images/s4.png" alt="Car 2">
            <img src="./images/s6.png" alt="Car 1">
            <img src="./images/s5.png" alt="Car 3">
        </div>
    </div>

    <!-- Carousal section End-->

    <!-- Destination Form -->
    <div class="destination-overlay"></div>
    <div class="destination-container">
        <div class="destination-heading">
            <h1 id="">World Moves On <span style="color: #123458">Speedoo!</span></h1>
        </div>
        <form action="booking_form.php" method="POST">
            <div class="destination-input-box">
                <i class="fas fa-map-marker-alt"></i>
                <input type="text" name="pickup" placeholder="Enter Pickup Location" required>
            </div>
            <div class="destination-input-box">
                <i class="fas fa-map-marker-alt"></i>
                <input type="text" name="drop" placeholder="Enter Drop Location" required>
            </div>
            <button type="submit" class="destination-book-btn">
                <i class="fas fa-motorcycle"></i>/ <i class="fas fa-car"></i> Book Ride
            </button>
        </form>
    </div>


    <!-- Brand section Start-->
    <section>
        <div>
            <p class="brandheading">Our <span style="color: darkcyan;">Brands</span></p>
        </div>
        <marquee behavior="scroll" direction="left" scrollamount="15" loop="">
            <div class="container">
                <div class="card">
                    <img src="./images/brands/1.png" class="bimg">
                </div>
                <div class="card">
                    <img src="./images/brands/2.png" class="bimg">
                </div>
                <div class="card">
                    <img src="./images/brands/3.png" class="bimg">
                </div>
                <div class="card">
                    <img src="./images/brands/4.png" class="bimg">
                </div>
                <div class="card">
                    <img src="./images/brands/5.png" class="bimg">
                </div>
                <div class="card">
                    <img src="./images/brands/6.png" class="bimg">
                </div>
                <div class="card">
                    <img src="./images/brands/7.png" class="bimg">
                </div>
                <div class="card">
                    <img src="./images/brands/8.png" class="bimg">
                </div>
                <div class="card">
                    <img src="./images/brands/9.png" class="bimg">
                </div>
                <div class="card">
                    <img src="./images/brands/10.png" class="bimg">
                </div>
                <div class="card">
                    <img src="./images/brands/11.png" class="bimg">
                </div>
                <div class="card">
                    <img src="./images/brands/12.png" class="bimg">
                </div>
            </div>
        </marquee>
    </section>
    <!-- Brand section End-->


    <!-- Why Choose US Start-->
    <section class="why-choose-us">
        <div class="image-container">
            <img src="./images/why_choose.png" alt="Why Choose Us" class="feature-image">
        </div>
        <div class="content-container">
            <h2>Why Choose Us</h2>
            <ul class="reasons">
                <li>
                    <h3><i class="fa fa-check-circle"></i> Safety</h3>
                    <p>Drive with confidence in our meticulously maintained vehicles.</p>
                </li>
                <li>
                    <h3><i class="fa fa-check-circle"></i> Reliabilty</h3>
                    <p>Count on us for a seamless rental experience every time.</p>
                </li>
                <li>
                    <h3><i class="fa fa-check-circle"></i> More Options</h3>
                    <p>With our vast fleet of cars you will get what you want.</p>
                </li>
                <li>
                    <h3><i class="fa fa-check-circle"></i> Insurance</h3>
                    <p>Protecting you on the road, ensuring peace of mind throughout your journey</p>
                </li>
            </ul>
        </div>
    </section>
    <!-- Why Choose US End-->

    <!-- Our latest cars -->
    <section>
        <div>
            <p class="carsheading"><span style="color: darkcyan;">Top Picks</span> Vehicals</p>
        </div>

        <div class="cars-flex-container">
            <div class="cars-card">
                <img src="./images/cars/Audi A3.png" class="img">
                <div class="textBox">
                    <p class="text head">Audi A3</p>
                    <span>Rating <i class="fa fa-star checked" class="fafa"></i>
                     <i class="fa fa-star checked" class="fafa"></i>
                     <i class="fa fa-star checked" class="fafa"></i>
                     <i class="fa fa-star checked" class="fafa"></i>
                     <i class="fa fa-star checked" class="fafa"></i>
                 </span>
                    <p class="text-price">$2100 / Day</p>

                    <a href="signup.php">
                        <button class="continue-btn">
                            Continue
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 74 74" height="34" width="34">
                                <circle stroke-width="3" stroke="black" r="35.5" cy="37" cx="37"></circle>
                                <path fill="black" d="M25 35.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z"></path>
                            </svg>
                        </button>
                    </a>
                </div>
            </div>

            <div class="cars-card">
                <img src="./images/cars/Acura NSX.png" class="img">
                <div class="textBox">
                    <p class="text head">Acura NSX</p>
                    <span>Rating <i class="fa fa-star checked" class="fafa"></i>
                 <i class="fa fa-star checked" class="fafa"></i>
                 <i class="fa fa-star checked" class="fafa"></i>
                 <i class="fa fa-star checked" class="fafa"></i>
                 <i class="fa fa-star checked" class="fafa"></i>
             </span>
                    <p class="text-price">$2100 / Day</p>

                    <a href="signup.php">
                        <button class="continue-btn">
                            Continue
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 74 74" height="34" width="34">
                                <circle stroke-width="3" stroke="black" r="35.5" cy="37" cx="37"></circle>
                                <path fill="black" d="M25 35.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z"></path>
                            </svg>
                        </button>
                    </a>
                </div>
            </div>
        </div>

        <div class="cars-flex-container">
            <div class="cars-card">
                <img src="./images/cars/KIA Sportage.png" class="img">
                <div class="textBox">
                    <p class="text head">KIA Sportage</p>
                    <span>Rating <i class="fa fa-star checked" class="fafa"></i>
             <i class="fa fa-star checked" class="fafa"></i>
             <i class="fa fa-star checked" class="fafa"></i>
             <i class="fa fa-star checked" class="fafa"></i>
             <i class="fa fa-star checked" class="fafa"></i>
         </span>
                    <p class="text-price">$2100 / Day</p>

                    <a href="signup.php">
                        <button class="continue-btn">
                            Continue
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 74 74" height="34" width="34">
                                <circle stroke-width="3" stroke="black" r="35.5" cy="37" cx="37"></circle>
                                <path fill="black" d="M25 35.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z"></path>
                            </svg>
                        </button>
                    </a>
                </div>
            </div>

            <div class="cars-card">
                <img src="./images/cars/Porsche GT2.png" class="img">
                <div class="textBox">
                    <p class="text head">Porsche GT2</p>
                    <span>Rating <i class="fa fa-star checked" class="fafa"></i>
         <i class="fa fa-star checked" class="fafa"></i>
         <i class="fa fa-star checked" class="fafa"></i>
         <i class="fa fa-star checked" class="fafa"></i>
         <i class="fa fa-star checked" class="fafa"></i>
     </span>
                    <p class="text-price">$2100 / Day</p>

                    <a href="signup.php">
                        <button class="continue-btn">
                            Continue
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 74 74" height="34" width="34">
                                <circle stroke-width="3" stroke="black" r="35.5" cy="37" cx="37"></circle>
                                <path fill="black" d="M25 35.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z"></path>
                            </svg>
                        </button>
                    </a>
                </div>
            </div>
        </div>

        <div class="cars-flex-container">
            <div class="cars-card">
                <img src="./images/cars/S Class Benz.png" class="img">
                <div class="textBox">
                    <p class="text head">S Class Benz</p>
                    <span>Rating <i class="fa fa-star checked" class="fafa"></i>
             <i class="fa fa-star checked" class="fafa"></i>
             <i class="fa fa-star checked" class="fafa"></i>
             <i class="fa fa-star checked" class="fafa"></i>
             <i class="fa fa-star checked" class="fafa"></i>
         </span>
                    <p class="text-price">$2100 / Day</p>

                    <a href="signup.php">
                        <button class="continue-btn">
                            Continue
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 74 74" height="34" width="34">
                                <circle stroke-width="3" stroke="black" r="35.5" cy="37" cx="37"></circle>
                                <path fill="black" d="M25 35.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z"></path>
                            </svg>
                        </button>
                    </a>
                </div>
            </div>

            <div class="cars-card">
                <img src="./images/cars/Tesla Model 3.png" class="img">
                <div class="textBox">
                    <p class="text-head">Tesla Model 3</p>
                    <span>Rating <i class="fa fa-star checked" class="fafa"></i>
         <i class="fa fa-star checked" class="fafa"></i>
         <i class="fa fa-star checked" class="fafa"></i>
         <i class="fa fa-star checked" class="fafa"></i>
         <i class="fa fa-star checked" class="fafa"></i>
     </span>
                    <p class="text-price">$2100 / Day</p>

                    <a href="signup.php">
                        <button class="continue-btn">
                            Continue
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 74 74" height="34" width="34">
                                <circle stroke-width="3" stroke="black" r="35.5" cy="37" cx="37"></circle>
                                <path fill="black" d="M25 35.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z"></path>
                            </svg>
                        </button>
                    </a>
                </div>
            </div>
        </div>

    </section>


    <!-- Our latest cars -->



    <!-- Testimonials Start-->
    <section>
        <div class="testimonials">
            <span style="color: darkcyan;">Testimonials</span></p>
        </div>
        <div class="tcontainer">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="./images/testimonials/2.png" class="tbimg">
                        <p>– Emily R</p>
                    </div>
                    <div class="flip-card-back">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <p class="title">"Absolutely fantastic service! Highly recommended!"</p>
                        <p> – Emily R</p>
                    </div>
                </div>
            </div>

            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="./images/testimonials/3.png">
                        <p>– Sarah W</p>
                    </div>
                    <div class="flip-card-back">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <p class="title">"Exceeded my expectations. Will definitely return!"</p>
                        <p>– Sarah W</p>
                    </div>
                </div>
            </div>

            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="./images/testimonials/4.png">
                        <p>– Michael B</p>
                    </div>
                    <div class="flip-card-back">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <p class="title">"A game-changer for my business. Thank you!"</p>
                        <p>– Michael B</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials End-->

    <?php include('footer.php')?>