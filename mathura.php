
<?php
    // Your OpenWeatherMap API key
    $apiKey = "eb47852c9a168db2c82732fd24233907";  // Replace with your actual key
    $city = "Mathura";
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
    <title>home</title>
    <style>
        .mathura-about {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
        }

        .mathura-about .image {
            flex: 1 1 41rem;
        }

        .mathura-about .image video{
            width: 100%;
        }

        .mathura-about .image img{
            width: 100%;
            height: auto;
        }

        .mathura-about .content {
            flex: 1 1 41rem;
            padding: 3rem;
            background: var(--light-bg);
        }

        .mathura-about .content h3 {
            font-size: 3rem;
            color: var(--black);
        }

        .mathura-about .content h4 {
            font-size: 2rem;
            color: var(--black);
        }

        .mathura-about .content h5 {
            font-size: 1.5rem;
            color: var(--black);
        }

        .mathura-about .content h6 {
            font-size: 1.3rem;
            color: var(--black);
        }

        .mathura-about .content p {
            font-size: 1.5rem;
            color: var(--black);
            line-height: 2;
            padding: 1rem 0;
        }

        .mathura-heading-title {
            text-align: center;
            padding-right: 5rem;
            margin-bottom: 3rem;
            font-size: 5rem;
            text-transform: capitalize;
            color: var(--black);
        }
    </style>

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
    <!-- <h1 class="heading-title"> Temples Of Mathura </h1> -->
    <section class="mathura-about">
        <h1 class="mathura-heading-title"> Temples Of Mathura </h1>

        <div class="image">
            <video autoplay loop muted controls src="images/mathura.mp4"></video>
        </div>
        <div class="content">
            <h3>about Mathura</h3>
            <p>Mathura, the birthplace of Lord Krishna, is a city steeped in divine history, sacred legends, and timeless devotion. Walking through its ancient ghats and temples, you feel an unbreakable connection to centuries of faith and culture. The city pulses with spiritual energy, especially during festivals like Janmashtami and Holi. From the serene Yamuna River to the vibrant local bazaars, every corner tells a story of love, devotion, and divinity. Whether you're a pilgrim seeking blessings or a traveler chasing heritage, Mathura welcomes you with open arms and a soulful experience. Visit Mathura to witness devotion alive in its purest form.

            </p>
        </div>
    </section>
    <!-- ----------------------------temples start -->
    <section class="mathura-about">

        <div class="image">
            <img src="images/mathura/janambhumi.jpg" alt="mathura"
                loading="lazy" />
        </div>
        <div class="content">
            <h3>1.Janambhumi</h3>
            <p>
                Krishna Janmasthan Temple Complex is a group of Hindu temples situated in Mathura, Uttar Pradesh, India. There are three main temples inside the premises -- Keshavdev temple which is dedicated to Krishna, Garbh Griha where Krishna is believed to be born in Dvapar Yuga and Bhagvata Bhavan where presiding deities are Radha Krishna.
            </p>
            <h4>Temple timing</h4>
            <h5>Summer</h5>
            <h6>5:00 am to 12:00 pm & 4:00 pm to 9:30 pm</h6>
            <h5>Winter</h5>
            <h6>5:30 am to 12:00 pm & 3:00 pm to 8:30 pm</h6>
        </div>
    </section>
    <section class="mathura-about">

        <div class="content">
            <h3>2. Dwarkadhish</h3>
            <p>
                The Dwarikadish Temple in Mathura is an important and revered religious site dedicated to Lord Krishna, particularly his form as the king of Dwarka. Located in the heart of Mathura, the temple attracts thousands of devotees from across India and the world. The temple is known for its beautiful architecture, which features intricate carvings and statues, making it a significant example of Indian temple design.
            </p>
            <h4>Temple timing</h4>
            <h5>Summer</h5>
            <h6>6:30 am to 11:00 am & 4:00 pm to 7:30 pm</h6>
            <h5>Winter</h5>
            <h6>6:30 am to 11:00 am & 3:30 pm to 7:00 pm</h6>
        </div>
        <div class="image">
            <img src="images/mathura/dwarikadish.jpg" alt="mathura"
                loading="lazy" />
        </div>
    </section>
    <section class="mathura-about">

        <div class="image">
            <img src="images/mathura/rangeshwarmahadev.jpg" alt="mathura"
                loading="lazy" />
        </div>
        <div class="content">
            <h3>3.Rangeshwar Mahadev</h3>
            <p>
                Rangeshwar Mahadev is a beautiful temple dedicated to Lord Shiva. This beautifully carved stone structure temple is in southern-most part of Mathura. As we all know that Mathura is Land of Lord Krishna thus there are a very few Shiva temples in the city and Rangeshwar Mahadev Mandir is one of them. The temple reflects the simple Hindu style architecture and there are many beautiful paintings engraved on the walls of this temple
            </p>
            <h4>Temple timing</h4>
            <h5>Summer</h5>
            <h6>5:00 am to 12:00 pm & 2:00 pm to 9:00 pm</h6>
            <h5>Winter</h5>
            <h6>5:30 am to 12:00 pm & 2:00 pm to 8:30 pm</h6>
        </div>
    </section>
    <section class="mathura-about">

        <div class="content">
            <h3>4.Bhuteshwar Mahadev</h3>
            <p>
                Bhuteshwar Mahadev is a revered Hindu temple dedicated to Lord Shiva, located in Mathura, Uttar Pradesh. This temple holds immense spiritual significance for devotees who believe that worshipping here brings peace, prosperity, and the removal of obstacles. Bhuteshwar Mahadev is often associated with the mythological story of Lord Shiva's presence in the region, where he is said to have appeared to bless his devotees.
            </p>
            <h4>Temple timing</h4>
            <h5>Summer</h5>
            <h6>5:00 am to 12:00 pm & 4:00 pm to 9:30 pm</h6>
            <h5>Winter</h5>
            <h6>5:30 am to 12:00 pm & 3:00 pm to 8:30 pm</h6>
        </div>
        <div class="image">
            <img src="images/mathura/bhuteshwar-mahadev.jpg" alt="mathura"
                loading="lazy" />
        </div>
    </section>
    <section class="mathura-about">

        <div class="image">
            <img src="images/mathura/" alt="mathura"
                loading="lazy" />
        </div>
        <div class="content">
            <h3>5. Vishram Ghat</h3>
            <p>
                Vishramghat is a sacred ghat located on the banks of the Yamuna River in Mathura, Uttar Pradesh, India. It is one of the most revered spots for devotees of Lord Krishna, as it is believed to be the place where Krishna rested after killing the tyrant Kansa and before returning to Dwarka. The ghat holds deep spiritual significance and is a popular destination for pilgrims who come to take a holy dip in the Yamuna River, seeking purification and blessings.
            </p>
            <h4>Temple timing</h4>
            <h5>Summer</h5>
            <h6>5:00 am to 12:00 pm & 4:00 pm to 9:30 pm</h6>
            <h5>Winter</h5>
            <h6>5:30 am to 12:00 pm & 3:00 pm to 8:30 pm</h6>
        </div>
    </section>
    <section class="mathura-about">

        <div class="content">
            <h3>6.Raval - Birth Place Of Shri Radha Rani</h3>
            <p>
                Raval is a small village located in the Mathura district of Uttar Pradesh, India, and is traditionally considered the birthplace of Radha Rani, the beloved consort of Lord Krishna. According to Hindu mythology, Radha was born here to King Vrishbhanu and Queen Kirtida. The village holds great religious significance for devotees of Radha and Krishna, as Radha is worshiped as the goddess of love and devotion.
            </p>
            <h4>Temple timing</h4>
            <h5>Summer</h5>
            <h6>5:00 am to 12:00 pm & 4:00 pm to 9:30 pm</h6>
            <h5>Winter</h5>
            <h6>5:30 am to 12:00 pm & 3:00 pm to 8:30 pm</h6>
        </div>
        <div class="image">
            <img src="images/mathura/radha rani rawal.jpeg" alt="mathura"
                loading="lazy" />
        </div>
    </section>
    <section class="mathura-about">

        <div class="image">
            <img src="images/mathura/chndrawalimata.jpg" alt="mathura"
                loading="lazy" />
        </div>
        <div class="content">
            <h3>7.Chandrawali Mata</h3>
            <p>
                Chandrawali Mata is a revered goddess in Hindu mythology, associated with the divine energy of protection, prosperity, and welfare. She is considered an incarnation of Goddess Durga, worshipped for her power to bring peace and remove obstacles in the lives of her devotees. The primary temple dedicated to Chandrawali Mata is located in Mathura, Uttar Pradesh, where her devotees gather in large numbers to offer prayers and seek her blessings.
            </p>
            <h4>Temple timing</h4>
            <h5>Summer</h5>
            <h6>5:00 am to 12:00 pm & 4:00 pm to 9:30 pm</h6>
            <h5>Winter</h5>
            <h6>5:30 am to 12:00 pm & 3:00 pm to 8:30 pm</h6>
        </div>
    </section>

    
    <!-- Footer Section start -->
        <section class="footer">
            <div style="display: flex; align-items: center; gap: 10px; color: white;">
                <p style="font-size: 16px; margin: 0;">Mathura&emsp;:</p>
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



</body>