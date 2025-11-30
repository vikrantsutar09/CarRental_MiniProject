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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
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
                    <a href="#">Bike</a>
                    <a href="./cars.php">Car</a>
                </div>
            </li>
            <li><a href="#">About</a></li>
            <li><a href="#footer">Contact</a></li>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>

    <!-- Header Section End -->

    <div class="s-heading">
        <p>About US</p>
    </div>


    <!-- Main Section -->

    <section>
        <div class="about-title">
            <h4>Who We Are</h4>
            <p>At Speedoo, we are more than just a luxury car rental company – we are passionate enthusiasts who believe in the transformative power of exceptional automobiles. With an unwavering commitment to delivering unforgettable experiences, we strive to</p>
        </div>

        <div class="about-container">
            <div class="about-box">
                <div class="about-icon"><i class="fas fa-car"></i></div>
                <h3>Extensive Selection of Luxury Cars</h3>
            </div>
            <div class="about-box">
                <div class="about-icon"><i class="fa-solid fa-broom"></i></div>
                <h3>Well-Maintained & Clean Cars</h3>
            </div>
            <div class="about-box">
                <div class="about-icon"><i class="fa-solid fa-laptop"></i></div>
                <h3>Easy and Intuitive Booking Process</h3>
            </div>
            <div class="about-box">
                <div class="about-icon"><i class="fa-solid fa-car-side"></i></div>
                <h3>Extensive Selection of Luxury Cars</h3>
            </div>
        </div>
    </section>

    <!-- Team Section -->

     <section class="team-section">
        <h2 class="section-title">Meet Our Team</h2>
        <div class="team-container">
            <div class="team-member" data-animate>
                <div class="image-wrapper">
                    <img src="images/team/man (1).png" style="width: 150px;" alt="Mahesh Javir">
                </div>
                <h3><b>Mahesh Javir</b></h3>
                <p>Project Manager</p>
            </div>
            <div class="team-member" data-animate>
                <div class="image-wrapper">
                    <img src="images/team/man (1).png" style="width: 150px;" alt="Vaibhav Waghmare">
                </div>
                <h3><b>Vaibhav Waghmare</b></h3>
                <p>Backend Developer</p>
            </div>
        </div>  

        <div class="team-container">
            <div class="team-member" data-animate>
                <div class="image-wrapper">
                    <img src="images/team/man (1).png" style="width: 150px;" alt="Onkar Khandagale">
                </div>
                <h3><b>Onkar Khandagale</b></h3>
                <p>Graphic Designer</p>
            </div>

            <div class="team-member" data-animate>
                <div class="image-wrapper">
                    <img src="images/team/man (1).png" style="width: 150px;" alt="Vikrant Sutar">
                </div>
                <h3><b>Vikrant Sutar</b></h3>
                <p>Full Stack Developer</p>
            </div>
        </div>
    </div>
    </section>

    <!-- Team Section -->

    <section class="stats-section">
        <div class="stats-container">
            <div class="stat-box">
                <i class="fas fa-smile icon pink"></i>
                <h2>100+</h2>
                <p>Happy Clients</p>
            </div>
            <div class="stat-box">
                <i class="fas fa-tasks icon orange"></i>
                <h2>80+</h2>
                <p>Attached Companies</p>
            </div>
           <!--  <div class="stat-box">
                <i class="fas fa-headset icon green"></i>
                <h2>245</h2>
                <p>Hours Of Support</p>
            </div> -->
            <div class="stat-box">
                <i class="fas fa-users icon pink"></i>
                <h2>500+</h2>
                <p>Visiting Customer</p>
            </div>
        </div>
    </section>


    <!-- Main Section -->

    <?php include('footer.php')?>
