<?php
    // Your OpenWeatherMap API key
    $apiKey = "YOUR_API_KEY";  // Replace with your actual key
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



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Packages</title>

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
    <!-- Package Section Start-->
    <div class="heading" style="background: url(images/booknow.png) no-repeat">
        <h1>packages</h1>
    </div>

    <section class="packages">
        <h1 class="heading-title">top destinations</h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="images/ghat.png" alt="">
                </div>
                <div class="content">
                    <h3>Ghats of Braj</h3>
                    <p>The Ghats of Braj are sacred riverfront steps along the Yamuna, where devotees gather for rituals, bathing, and spiritual ceremonies.</p>
                    <a href="ghats.php" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/gaushala.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Gaushala</h3>
                    <p>The Gaushalas of Braj are traditional shelters dedicated to the care and protection of cows, revered as sacred in the region.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/premmandir.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Prem Mandir</h3>
                    <p>Prem Mandir is a magnificent white marble temple in Vrindavan, dedicated to Radha-Krishna, known for its intricate carvings and devotional light shows.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/dwarikadish.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Dwarakadhish</h3>
                    <p>Dwarkadhish Temple in Mathura is a revered shrine dedicated to Lord Krishna as the King of Dwarka, known for its rich architecture and vibrant festivals.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/janambhumi.png" alt="">
                </div>
                <div class="content">
                    <h3>Janambhumi</h3>
                    <p>Shri Krishna Janmbhumi in Mathura is believed to be the sacred birthplace of Lord Krishna, attracting millions of devotees each year.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/barsana.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Barsana</h3>
                    <p>Barsana is the revered birthplace of Radha Rani, known for its vibrant Lathmar Holi and temples dedicated to Radha-Krishna's divine love.p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/nandgaon.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Nandgaon</h3>
                    <p>Nandgaon is the village where Lord Krishna spent his childhood with Nanda Baba, known for its scenic hills, temples, and festive celebrations like Lathmar Holi.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/gokul.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Gokul</h3>
                    <p>Gokul is the sacred town where Lord Krishna spent his early childhood, famous for its temples and the legend of his playful pastimes.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/govardhan.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Goverdhan</h3>
                    <p>Goverdhan Hill is a sacred site in Braj, worshipped by devotees as Lord Krishna lifted it to protect the villagers from torrential rains.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/nandgaon.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Nandgaon</h3>
                    <p>Nandgaon is the historic town in Braj where Lord Krishna lived with his foster father Nanda Maharaj, known for its beautiful temples and vibrant festivals.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/isckon2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>ISKCON</h3>
                    <p>ISKCON (International Society for Krishna Consciousness) is a global spiritual organization promoting devotion to Lord Krishna through teachings, temples, and cultural activities.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/kirti mandir.png" alt="">
                </div>
                <div class="content">
                    <h3>Kirti Mandir</h3>
                    <p>Kirti Mandir in Barsana is a famous temple dedicated to Radha, showcasing beautiful architecture and celebrating her divine pastimes with Lord Krishna.</p>
                    <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>

            
        </div>
        <div class="load-more">
                <span class="btn">Load More</a>
        </div>
    </section>
    <!-- Package Section End-->
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
    <script type="text/javascript" src="js/script.js?v=<?php echo time();?>"></script>
</body>
</html>