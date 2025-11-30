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

     <?php
    $pickup = isset($_POST['pickup']) ? $_POST['pickup'] : "";
    $drop = isset($_POST['drop']) ? $_POST['drop'] : "";
    ?>

    <div class="booking-container">
        <div class="booking-location">
            <div>
                <i class="fa-solid fa-map-marker-alt"></i>
                <input type="text" name="pickup" value="<?php echo ($pickup); ?>" placeholder="Enter pickup location">
            </div>
            <div>
                <i class="fa-solid fa-location-arrow"></i>
                <input type="text" name="drop" value="<?php echo ($drop); ?>" placeholder="Enter destination">
            </div>
        </div>
        <!-- <h2>Select Service</h2>
        <div class="booking-service">
            <i class="fa-solid fa-taxi"></i>
            <span>Cab Premium</span>
            <span style="text-align: right;">Per Day - &#8377; 499</span>
        </div>
        <div class="booking-service">
            <i class="fa-solid fa-car"></i>
            <span>Cab Luxury</span>
            <span style="text-align: right;">Per Day - &#8377; 999</span>
        </div> -->
        <button class="booking-btn">Continue Booking</button>
    </div>
&#xf1b9;    

<?php include('footer.php')?>