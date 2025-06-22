<?php
session_start();
if (isset($_SESSION['password']) && isset($_SESSION['email'])) {
?>

    <?php

    $apiKey = "YOUR_API_KEY";  // Replace with your actual key
    $city = "Agra";
    $apiUrl = "https://api.openweathermap.org/data/2.5/weather?q={$city}&units=metric&appid={$apiKey}";


    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $apiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($ch);

    if (curl_errno($ch)) {
        $weatherInfo = "Weather info not available.";
    } else {
        $data = json_decode($response, true);
        if (isset($data['main'])) {
            $temp = round($data['main']['temp']);
            $desc = ucfirst($data['weather'][0]['description']);
            $iconCode = $data['weather'][0]['icon']; // example: "01d"


            $iconUrl = "https://openweathermap.org/img/wn/{$iconCode}@2x.png";


            $weatherInfo = "
        <div style='display: inline-flex; align-items: center; gap: 10px;'>
            <img src='{$iconUrl}' alt='{$desc}' style='width: 48px; height: 48px;' />
            <span style='font-size: 18px;'>{$temp}°C, {$desc}</span>
        </div>";
        } else {
            $weatherInfo = "Unable to load weather data.";
        }
    }
    curl_close($ch);
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Book</title>

        <!-- swiper css link  -->
        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        <!-- custom css file link  -->
        <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>" type="text/css">
    </head>

    <body>
        <!-- Header Section Start -->
        <section class="header">
            <a href="home.php" class="logo"><strong>B</strong>raj<strong>D</strong>arshan.</a>

            <nav class="navbar">
                <a href="home.php">Home</a>
                <a href="about.php">About</a>
                <a href="package.php">Package</a>
                <a href="book.php">Book</a>
                <a href="feedback.php" class="logout-btn" aria-label="Logout">Feedback</a>
                <a href="login_form.php" class="logout-btn" aria-label="Logout"><strong>Logout</strong></a>
            </nav>

            <div id="menu-btn" class="fas fa-bars"></div>
        </section>
        <!-- Header Section End -->
        <!-- Book Section Start-->
        <div class="heading" style="background: url(images/vghat.png) no-repeat">
            <h1>Book Now!</h1>
        </div>

        <section class="booking">
            <h1 class="heading-title">book your trip!</h1>

            <form action="book_form.php" method="post" class="book-form">
                <div class="flex">
                    <div class="inputBox">
                        <span>Name :</span>
                        <input type="text" placeholder="Enter your name" name="name">
                    </div>

                    <div class="inputBox">
                        <span>Email :</span>
                        <input type="email" placeholder="Enter your email" name="email">
                    </div>

                    <div class="inputBox">
                        <span>Phone :</span>
                        <input type="number" placeholder="Enter your number" name="phone">
                    </div>

                    <div class="inputBox">
                        <span>Address :</span>
                        <input type="text" placeholder="Enter your address" name="address">
                    </div>

                    <div class="inputBox">
                        <span>Where To :</span>
                        <input type="text" placeholder="Place you want to visit" name="location">
                    </div>

                    <div class="inputBox">
                        <span>How Many :</span>
                        <input type="number" placeholder="Number of guests" name="guests">
                    </div>

                    <div class="inputBox">
                        <span>Arrival :</span>
                        <input type="date" name="arrivals">
                    </div>

                    <div class="inputBox">
                        <span>Departure :</span>
                        <input type="date" name="leaving">
                    </div>
                </div>
                <!-- <button onclick="showAlertAndRedirect()">Submit Booking</button> -->
                <input type="submit" value="Submit" class="btn" name="send">
            </form>
        </section>
        <!-- Book Section End-->
        <!-- Footer Section start -->
        <section class="footer">
            <div style="display: flex; align-items: center; gap: 10px; color: white;">
                <p style="font-size: 16px; margin: 0;">Agra&emsp;:</p>
                <?php echo $weatherInfo; ?>
            </div>
            <div class="box-container">
                <div class="box">
                    <h3>quick links</h3>
                    <a href="home.php"><i class="fas fa-angle-right"></i> Home</a>
                    <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
                    <a href="package.php"><i class="fas fa-angle-right"></i>Package</a>
                    <a href="book.php"><i class="fas fa-angle-right"></i>Book</a>
                </div>

                <div class="box">
                    <h3>extra links</h3>
                    <a href="feedback.php"><i class="fas fa-angle-right"></i>ask questions</a>
                    <a href="about.php#chooseus"><i class="fas fa-angle-right"></i>about us</a>
                    <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
                    <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>
                </div>

                <div class="box">
                    <h3>contact info</h3>
                    <a href="#"><i class="fas fa-phone"></i>+91-7906177103</a>
                    <a href="#"><i class="fas fa-phone"></i>+91-7906177103</a>
                    <a href="#"><i class="fas fa-envelope"></i>BrajDarshan.com</a>
                    <a href="#"><i class="fas fa-map"></i>Agra, Uttar Pradesh</a>
                </div>

                <div class="box">
                    <h3>follow us</h3>
                    <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
                    <a href="#"><i class="fab fa-twitter"></i>twitter</a>
                    <a href="#"><i class="fab fa-instagram"></i>instagram</a>
                    <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
                </div>
            </div>
        </section>
    
        <!-- Footer Section End -->
        <!-- swiper js link  -->
        <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
        <!-- custom js file link  -->
        <script type="text/javascript" src="js/script.js?v=<?php echo time(); ?>"></script>
    </body>

    </html>
<?php
} else {
    header("Location:login_form.php");
    exit();
}
?>