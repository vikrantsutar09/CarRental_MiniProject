<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <!-- fa fa icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- w3 cdn -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="style.css">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="icon" type="image/png" href="./images/faviconlogo.png">
</head>

<body>

    <nav class="navbar">
        <a href="./index.php"><img src="./images/logo.png" class="logo"></a>
        <ul class="nav-links">
            <li><a href="./index.php">Home</a></li>
            <li><a href="#">Services</a></li>
            <li class="dropdown">
                <a href="#services">Models</a>
                <div class="dropdown-content">
                    
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

    <!-- Header Section End -->


    <!-- Services section start -->
    <section>
    <div class="s-heading">
        <p>Services</p>
    </div>

    <div class="service-flex">
        <div class="services-card-container">
            <div class="services-card">
                <div class="services-front-content">
                    <img src="./images/services/Self-Drive Car Rentals.jpg">
                </div>
                <div class="services-content">
                    <p class="services-heading">Self-Drive Car Rentals</p>
                    <p>
                        Enjoy the freedom of driving with our wide range of well-maintained cars. Choose from economy, luxury, or SUVs for your perfect trip.
                    </p>
                </div>
            </div>
        </div>


        <div class="services-card-container">
            <div class="services-card">
                <div class="services-front-content">
                    <img src="./images/services/Chauffeur Driven.jpg">
                </div>
                <div class="services-content">
                    <p class="services-heading">Chauffeur-Driven Rentals</p>
                    <p>
                        Sit back and relax while our professional drivers take you to your destination safely and comfortably. Ideal for business trips, airport transfers, or city tours.
                    </p>
                </div>
            </div>
        </div>

        <div class="services-card-container">
            <div class="services-card">
                <div class="services-front-content">
                    <img src="./images/services/Long-Term Rentals.jpg">
                </div>
                <div class="services-content">
                    <p class="services-heading">Long-Term Rentals</p>
                    <p>
                        Need a car for an extended period? Our flexible long-term rental plans are perfect for corporate clients, travelers, and residents.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="service-flex">
        <div class="services-card-container">
            <div class="services-card">
                <div class="services-front-content">
                    <img src="./images/services/Airport Transfer.jpg">
                </div>
                <div class="services-content">
                    <p class="services-heading">Airport Transfers</p>
                    <p>
                        Hassle-free pick-up and drop-off services at all major airports. Book in advance and travel stress-free.
                    </p>
                </div>
            </div>
        </div>


        <div class="services-card-container">
            <div class="services-card">
                <div class="services-front-content">
                    <img src="./images/services/Luxury & Exotic Car Rentals.jpg">
                </div>
                <div class="services-content">
                    <p class="services-heading">Luxury & Exotic Car Rentals</p>
                    <p>
                        Drive in style with our premium selection of high-end luxury and exotic cars. Perfect for weddings, VIP events, or a special night out.
                    </p>
                </div>
            </div>
        </div>

        <div class="services-card-container">
            <div class="services-card">
                <div class="services-front-content">
                    <img src="./images/services/Corporate & Business Rental.jpg">
                </div>
                <div class="services-content">
                    <p class="services-heading">Corporate & Business Rentals</p>
                    <p>
                        Customized rental plans for businesses, ensuring a reliable fleet for your employees or executives.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="service-flex"  style="margin-bottom: 10%;">
        <div class="services-card-container">
            <div class="services-card">
                <div class="services-front-content">
                    <img src="./images/services/Special Event Rentals.jpg">
                </div>
                <div class="services-content">
                    <p class="services-heading">Special Event Rentals</p>
                    <p>
                        Rent a car for weddings, birthdays, road trips, or any special occasion. Choose from our range of stylish and comfortable vehicles.
                    </p>
                </div>
            </div>
        </div>


        <div class="services-card-container">
            <div class="services-card">
                <div class="services-front-content">
                    <img src="./images/services/Roadside Assistance.jpg">
                </div>
                <div class="services-content">
                    <p class="services-heading">24/7 Roadside Assistance</p>
                    <p>
                        Drive with confidence! Our dedicated support team is available round the clock for emergency assistance.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


    <!-- Services Section End -->


    <?php include('footer.php')?>