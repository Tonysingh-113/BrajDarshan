
<?php
    // Your OpenWeatherMap API key
    $apiKey = "eb47852c9a168db2c82732fd24233907";  // Replace with your actual key
    $city = "Gokul";
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
        <h1 class="mathura-heading-title"> Temples Of Gokul </h1>

        <div class="image">
            <video autoplay loop muted controls src="images/gokul.mp4"></video>
        </div>
        <div class="content">
            <h3>about Gokul</h3>
            <p>Gokul, the divine cradle of Lord Krishna’s early childhood, is a sacred village where miracles and love once walked the earth. It was here that Krishna was lovingly raised by Yashoda and Nanda, and where his playful leelas charmed hearts and defied evil. The peaceful lanes of Gokul echo with stories of his innocence and divinity, making it a serene yet spiritually vibrant destination. Visiting Gokul is like returning to a time of pure devotion, where every temple and ghat carries the warmth of maternal love and divine joy. Come to Gokul and feel the heartbeat of Krishna’s early days.

            </p>
        </div>
    </section>
    <!-- ----------------------------temples start -->
    <section class="mathura-about">

        <div class="image">
            <img src="images/gokul/nandbhawan.jpg" alt="mathura"
                loading="lazy" />
        </div>
        <div class="content">
            <h3>1.Nand Bhawan</h3>
            <p>
                The Supreme Lord Shree Krishna and Yogmaya took birth as twins from the womb of mother Yashoda in her room in
          Nanda’s place. They were born at midnight on Astami (the eight day after the full moon) in the month of Bhadra
          when the star (nakshatra) known as Rohini was visible in the sky.
          One can take darshan of Yogmaya here. Srimad-bhagvatam vividly describes how the most fortunate Nanda Baba
          became very joyful upon receiving a son.
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
            <h3>2. Raman Reti</h3>
            <p>
                Raman Reti is the sand in which Lord Krishna played as a child. In more recent times, about 200 years ago, the
          famous Saint, Swami Gyandasji did a severe penance at Raman reti for 12 years. Pleased with his devotion, The
          Lord appeared before him and today you can find a Ramanbihariji Temple at that place. Today devotees roll over
          the sand here and seek the blessings of Lord Krishna.
            </p>
            <h4>Temple timing</h4>
            <h5>Summer</h5>
            <h6>6:30 am to 11:00 am & 4:00 pm to 7:30 pm</h6>
            <h5>Winter</h5>
            <h6>6:30 am to 11:00 am & 3:30 pm to 7:00 pm</h6>
        </div>
        <div class="image">
            <img src="images/gokul/ramanreti.jpg" alt="mathura"
                loading="lazy" />
        </div>
    </section>
    <section class="mathura-about">

        <div class="image">
            <img src="images/gokul/thakurani ghat.jpg" alt="mathura"
                loading="lazy" />
        </div>
        <div class="content">
            <h3>3.Shri Thakurani Ghat</h3>
            <p>
                This is the main ghat in Gokul and the place where Shree Vallabhacarya received darshan of Shree Yamuna
          Maharani. He began to give initiation at this place. This ghat is thus a place of great significance to the
          Vaishnavs of Vallabhsampraday.
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
            <h3>4.Chinta Haran Mahadev</h3>
            <p>
                This ghat lies on the bank of Shree Yamuna near BrahmandGhat to its east. Chintaharan Mahadev, who is
          worshipped by the Brijwasis, is present here. When Mother Yashoda saw the universes in Kanhaiya’s mouth, she
          became extremely anxious for His welfare and prayed to ChintaharanMahadev for Krishna’s safety. Chintaharan
          means “removing anxieties”.
            </p>
            <h4>Temple timing</h4>
            <h5>Summer</h5>
            <h6>5:00 am to 12:00 pm & 4:00 pm to 9:30 pm</h6>
            <h5>Winter</h5>
            <h6>5:30 am to 12:00 pm & 3:00 pm to 8:30 pm</h6>
        </div>
        <div class="image">
            <img src="images/gokul/chintaharan.jpg" alt="mathura"
                loading="lazy" />
        </div>
    </section>
    <section class="mathura-about">

        <div class="image">
            <img src="images/gokul/84khamba.jpg" alt="mathura"
                loading="lazy" />
        </div>
        <div class="content">
            <h3>5. Chaurasi Khambha</h3>
            <p>
                Nand Bhawan, also known as Chaurasi Khamba Temple, is one of the most visited tourist attractions in Gokul. It
          holds a fascination among visitors and devotees because it was here that Lord Krishna spent his childhood days
          after their real parents were imprisoned by King Kansa. The house belonged to Nand Maharaj, the foster father
          of Lord Krishna. It is called Chaurasi Khamba temple because the temple rests on 84 pillars.
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
                <p style="font-size: 16px; margin: 0;">Gokul&emsp;:</p>
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