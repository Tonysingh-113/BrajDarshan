<?php
session_start();
if (isset($_SESSION['password']) && isset($_SESSION['email'])) {
?>
    <!-- Weather api check -->
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

            // Correct icon URL format from OpenWeatherMap
            $iconUrl = "https://openweathermap.org/img/wn/{$iconCode}@2x.png";

            // Build HTML for weather info with icon
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

    <!-- Weather api cchekc -->
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>home</title>

        <!-- swiper css link  -->
        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        <!-- custom css file link  -->
        <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>" type="text/css">
        <link rel="stylesheet" href="css/stylerk.css">
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
        <!-- Home Section Start -->
        <section class="home">
            <div class="swiper home-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide slide" style="background-image:url(images/iskconimg.jpg)">
                        <div class="content">
                            <span>Explore, Discover, Travel</span>
                            <h3>"Discover Beautiful Braj Trails"</h3>
                            <a href="package.php" class="btn">Discover More</a>
                        </div>
                    </div>

                    <div class="swiper-slide slide" style="background-image:url(images/slide3.jpeg)">
                        <div class="content">
                            <span>Explore, Discover, Travel</span>
                            <h3>"Sacred Steps in Braj"</h3>
                            <a href="package.php" class="btn">Discover More</a>
                        </div>
                    </div>

                    <div class="swiper-slide slide" style="background-image:url(images/kirtimandirimg.jpg)">
                        <div class="content">
                            <span>Explore, Discover, Travel</span>
                            <h3>"Wander, Witness, Worship, Wow!"</h3>
                            <a href="package.php" class="btn">Discover More</a>
                        </div>
                    </div>

                    <div class="swiper-slide slide2" style="background-image:url(images/cow.jpg)">
                        <div class="content">
                            <span>Explore, Discover, Travel</span>
                            <h3>"Cows, Culture, Calm, Braj"</h3>
                            <a href="package.php" class="btn">Discover More</a>
                        </div>
                    </div>

                    <div class="swiper-slide slide" style="background-image:url(images/ghat3.jpg)">
                        <div class="content">
                            <span>Explore, Discover, Travel</span>
                            <h3>"Bathe in Braj Bliss"</h3>
                            <a href="package.php" class="btn">Discover More</a>
                        </div>
                    </div>

                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </section>
        <!-- Home Section End -->
        <!-- Services Section Start-->
        <section class="services">
            <h1 class="heading-title"> our services </h1>
            <div class="box-container">
                <div class="box">
                    <img src="images/icon-1.png" alt="">
                    <h3>Adventure</h3>
                </div>

                <div class="box">
                    <img src="images/icon-2.png" alt="">
                    <h3>Tour Guide</h3>
                </div>

                <div class="box">
                    <img src="images/icon-3.png" alt="">
                    <h3>Bag Insurance</h3>
                </div>

                <div class="box">
                    <img src="images/icon-4.png" alt="">
                    <h3>Fun</h3>
                </div>

                <div class="box">
                    <img src="images/icon-5.png" alt="">
                    <h3>Road Map</h3>
                </div>

                <div class="box">
                    <img src="images/icon-6.png" alt="">
                    <h3>Stay</h3>
                </div>
            </div>
        </section>
        <section class="glimpse">
            <h1 class="heading-title"> glimpse of radhe krishna </h1>
            <div class="container">
                <div class="card_wrapper">
                    <div class="cardrk">
                        <div class="card-image-with-svg-mask">
                            <p class="text">In Hinduism, the birthplace of Krishna, one of the main deities in that religion, is
                                believed to be located in Mathura at the Krishna Janmasthan Temple Complex.It is one of the
                                Sapta Puri, the seven cities considered holy by Hindus, also is called Mokshyadayni Tirth. The
                                Kesava Deo Temple was built in ancient times on the site of Krishna's birthplace (an underground
                                prison). Mathura was the capital of the kingdom of Surasena, ruled by Kansa, the maternal uncle
                                of Krishna. Krishna Janmashtami is grandly celebrated in Mathura every year...</p>
                        </div>
                    </div>
                    <div class="buttonn top-center"><span class="text">Radha Krishna</span></div>
                    <div class="buttonn bottom-right"><span class="text"><i class="fa-solid fa-quote-left"></i> In the dance of
                            Radha and Krishna, love is not a feeling—it is the very breath of the universe. <i
                                class="fa-solid fa-quote-right"></i></span></div>
                </div>
            </div>

        </section>

        <section class="visit" id="destination">
            <h1 class="heading-visit">
                <span>V</span>
                <span>I</span>
                <span>S</span>
                <span>I</span>
                <span>T</span>
                <span class="space"></span>
                <span>N</span>
                <span>O</span>
                <span>W</span>
            </h1>
            <div class="wrapper">

                <div class="card">
                    <img src="images/janambhumi.jpg" alt="image">
                    <div class="info">
                        <h1>MATHURA</h1>
                        <p>Mathura is a historic city in northern India, renowned as the birthplace of Lord Krishna. It is a
                            major pilgrimage destination, with numerous temples and ghats along the Yamuna River.</p>
                        <a href="mathura.php" class="btn">Know more</a>

                    </div>
                </div>

                <div class="card">
                    <img src="images/prem.jpg" alt="image">
                    <div class="info">
                        <h1>VRINDAVAN</h1>
                        <p>Vrindavan is a sacred town in Uttar Pradesh, India, deeply associated with the childhood of Lord
                            Krishna. It is famous for its temples, vibrant festivals, and tranquil ghats along the Yamuna
                            River.</p>
                        <a href="vrindavan.php" class="btn">Know more</a>

                    </div>
                </div>


                <div class="card">
                    <img src="images/gokul.jpg" alt="image">
                    <div class="info">
                        <h1>GOKUL</h1>
                        <p>Gokul is a small town in Uttar Pradesh, India, believed to be the place where Lord Krishna spent
                            his early childhood. It is a revered pilgrimage site, known for its temples and tranquil
                            atmosphere.</p>
                        <a href="gokul.php" class="btn">Know more</a>

                    </div>
                </div>
                <div class="card">
                    <img src="images/nandgaon.jpg" alt="image">
                    <div class="info">
                        <h1>NANDGAON</h1>
                        <p>Nandgaon is a revered village in Uttar Pradesh, known as the home of Nanda, Lord Krishna's foster
                            mother. It holds great religious significance, particularly during the Holi festival, celebrated
                            with great fervor by devotees.</p>
                        <a href="nandgaon.php" class="btn">Know more</a>

                    </div>
                </div>

                <div class="card">
                    <img src="images/barsana.jpg" alt="image">
                    <div class="info">
                        <h1>BARSANA</h1>
                        <p>Barsana is a sacred town in Uttar Pradesh, famous as the birthplace of Radha, Lord Krishna's
                            consort. It is renowned for its vibrant celebrations of Holi, particularly the Lathmar Holi,
                            where women playfully chase men with sticks.</p>
                        <a href="barsana.php" class="btn">Know more</a>

                    </div>
                </div>


                <div class="card">
                    <img src="images/govardhan.jpg" alt="image">
                    <div class="info">
                        <h1>GOVARDHAN</h1>
                        <p>Govardhan is a sacred hill in India, revered in Hinduism, particularly in connection with the
                            legend of Lord Krishna lifting it to protect villagers from a storm. It is located near Mathura
                            in Uttar Pradesh and is a popular pilgrimage site.</p>
                        <a href="goverdhan.php" class="btn">Know more</a>

                    </div>
                </div>
            </div>
            </div>

        </section>



        <!-- Services Section End -->
        <!-- Home -> About Section Start -->
        <section class="home-about">

            <div class="image">
                <video autoplay loop muted controls src="images/vid-1.mp4"></video>
            </div>
            <div class="content">
                <h3>about BrajDarshan.</h3>
                <p><strong>Explore the sacred land of Braj, where every path echoes Krishna’s legacy.</strong> <br>
                    This wiki is your guide to Braj’s temples, festivals, legends, and travel tips.
                    Built for pilgrims and travelers alike, with insights from locals and devotees.<br>
                    <strong>Discover, learn, and walk the divine journey through Braj.</strong>
                </p>
                <a href="about.php" class="btn">Read More</a>
            </div>
        </section>
        <!-- Home -> About Section End-->
        <!-- Home -> Package Section Start -->
        <section class="home-packages">
            <h1 class="heading-title">Temples: Living History of Braj</h1>
            <div class="box-container">
                <div class="box">
                    <div class="image">
                        <img src="images/premmandir.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Prem Mandir</h3>
                        <p>A glowing symphony in marble, Prem Mandir is not just a temple—it's Radha-Krishna’s divine love story sculpted into eternity.</p>
                        <a href="book.php" class="btn">Book Now</a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="images/barsana.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Shri Radha Rani Temple</h3>
                        <p>Perched atop Bhanugarh Hill, Shri Radha Rani Temple is a divine crown of Barsana, where devotion meets breathtaking Rajput grandeur.</p>
                        <a href="book.php" class="btn">Book Now</a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="images/janambhumi.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Janmbhumi Temple</h3>
                        <p>In the sacred heart of Mathura lies Shri Krishna Janmbhumi—where time stands still, and the eternal leela of the Lord began.</p>
                        <a href="book.php" class="btn">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="load-more">
                <a href="package.php" class="btn">Load more</a>
            </div>
        </section>

        <!-- Home -> Package Section End -->
        <!-- Home -> Offer Section Start -->
        <section class="home-offer">
            <div class="content">
                <h3>up to 50% off</h3>
                <p>From holy temples to timeless tales, <br>
                    let your soul reconnect where it belongs.</p>
                <a href="book.php" class="btn">Book Now!</a>
                <p><strong>– up to 50% off awaits!.</strong></p>
            </div>
        </section>
        <!-- Home -> Offer Section End -->
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
            <!-- api try -->
            <!-- api try -->
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