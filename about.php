<?php
session_start();
if (isset($_SESSION['password']) && isset($_SESSION['email'])) {
?>

    <?php
    // Your OpenWeatherMap API key
    $apiKey = "eb47852c9a168db2c82732fd24233907";  // Replace with your actual key
    $city = "Agra";
    $apiUrl = "https://api.openweathermap.org/data/2.5/weather?q={$city}&units=metric&appid={$apiKey}";

    // Use cURL to fetch the weather data
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
        <title>About</title>

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
        <!-- About Section Start-->
        <div class="heading" style="background: url(images/aboutus.png) no-repeat">
            <h1>About Us</h1>
        </div>
        <section class="about">
            <div class="image">
                <!-- <Video autoplay loop muted controls src="images/vid-2.mp4"></Video> -->
                <Video autoplay loop muted controls src="images/vrindavan2.mp4"></Video>
            </div>

            <div class="content">
                <h3 id="chooseus">why choose us?</h3>
                <p>"Walk the sacred paths of Braj with our spiritual travel guide. Discover divine temples, top holy sites, and timeless traditions, guided by experts offering 24/7 support, peaceful stays, and journeys designed for the soul."</p>
                <p>"We’ve got your back—bag insurance, cool stays, local tour guides, and road maps to fuel your journey. Travel smarter, live louder, and soak up the fun side of Braj with zero stress."</p>
                <div class="icons-container">
                    <div class="icon">
                        <i class="fas fa-map"></i>
                        <span>Top Distnations</span>
                    </div>

                    <div class="icon">
                        <i class="fas fa-headset"></i>
                        <span>24/7 Guide Services</span>
                    </div>

                    <div class="icon">
                        <i class="fas fa-hand-holding-usd"></i>
                        <span>Affordable Price</span>
                    </div>

                </div>
            </div>
        </section>
        <!-- About Section End-->

        <!-- Reviews Section Start -->
        <section class="reviews">
            <h1 class="heading-title"> client reviews</h1>
            <div class="swiper reviews-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide slide">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>"Great experience exploring Braj! The guides were helpful, the information was spot on, and the whole trip felt safe and enjoyable. Perfect for spiritual travel and sightseeing. Highly recommended!"</p>
                        <h3>Vivek Chaudhary Jaat</h3>
                        <span>Jaat</span>
                        <img src="images/vc.jpg" alt="">
                    </div>

                    <div class="swiper-slide slide">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>"Really enjoyed the trip! The destinations were beautiful and well-chosen. Tour guides were friendly, though there were minor delays. Great value for the price—just short of perfect."</p>
                        <h3>Shubham Thakur</h3>
                        <span>Motu</span>
                        <img src="images/sb.jpg" alt="">
                    </div>

                    <div class="swiper-slide slide">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>"Good overall, but a few things could be improved. Some details were missing in the guide, and the timing felt off. Still, a decent experience for first-time visitors to Braj."</p>
                        <h3>Ankit Kumar</h3>
                        <span>Khatam</span>
                        <img src="images/ak.jpg" alt="">
                    </div>

                    <div class="swiper-slide slide">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>"The places were nice, but the service was not as expected. The tour felt rushed, and communication could’ve been better. It has potential but needs improvement in organization."</p>
                        <h3>Sajal Thakur</h3>
                        <span>Ghumne chalre h</span>
                        <img src="images/sj.jpg" alt="">
                    </div>

                    <div class="swiper-slide slide">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>"Truly memorable tour of Braj! The team was professional, and we felt very well taken care of. Some spots were a bit crowded, but that’s part of the charm, I guess!"</p>
                        <h3>Dhananjay Kushwaha</h3>
                        <span>NO LIES</span>
                        <img src="images/dj.jpg" alt="">
                    </div>

                    <div class="swiper-slide slide">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>"Loved the detailed road maps and friendly service! The trip was smooth and stress-free. Would’ve appreciated more food options along the way, but everything else exceeded expectations."</p>
                        <h3>Navneet Sharma</h3>
                        <span>Ghar Bhagoda</span>
                        <img src="images/ns.jpg" alt="">
                    </div>

                    <div class="swiper-slide slide">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>"Amazing experience! The temple routes were beautifully organized and the guide was very knowledgeable. A few rest stops could’ve been cleaner, but overall it was a peaceful and well-planned journey."</p>
                        <h3>Manish Verma</h3>
                        <span>Fraud</span>
                        <img src="images/fr.jpg" alt="">
                    </div>



                </div>
            </div>
        </section>
        <!-- Reviews Section End -->
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