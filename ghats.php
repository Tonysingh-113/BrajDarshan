
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
        <h1 class="mathura-heading-title">Ghats of Braj </h1>

        <div class="image">
            <video autoplay loop muted controls src="images/gokul.mp4"></video>
        </div>
        <div class="content">
            <h3>about Ghats</h3>
            <p>The ghats of Braj, especially in towns like Vrindavan, Mathura, Gokul, and Govardhan, are sacred riverfront steps that hold immense spiritual and cultural significance in Hinduism. Situated along the holy Yamuna River, these ghats are closely associated with the divine pastimes (leelas) of Lord Krishna, who spent his childhood and youth in this region. Pilgrims visit these ghats to take ritual baths believed to cleanse sins, offer prayers, and perform religious ceremonies. Vishram Ghat in Mathura is where Krishna is said to have rested after slaying the demon Kansa, while Keshi Ghat in Vrindavan is where he defeated the demon Keshi. The ghats come alive during major festivals like Krishna Janmashtami, Radhashtami, and Holi, with colorful processions, devotional music, and traditional rituals. Many ghats are adorned with beautiful temples, ancient architecture, and sacred trees that enhance their spiritual charm. These riverbanks are not just religious sites but vibrant cultural hubs that reflect the timeless devotion, mythology, and living traditions of the Braj region, making them a significant part of India’s spiritual landscape.
            </p>
        </div>
    </section>
    <!-- ----------------------------temples start -->
    <section class="mathura-about">

        <div class="image">
            <img src="images/Vishram-Ghat-629x420.jpg" alt="mathura"
                loading="lazy" />
        </div>
        <div class="content">
            <h3>1.Vishram Ghat (Mathura)</h3>
            <p>
                Vishram Ghat is one of the holiest and most revered ghats in Mathura, situated on the banks of the Yamuna River. It holds great significance as the spot where Lord Krishna is believed to have taken rest (vishram) after killing his evil uncle Kansa. This ghat serves as the starting and ending point of the traditional 25-kilometer Braj Mandal Parikrama, a pilgrimage that encircles sacred places related to Krishna. The ghat is surrounded by many small temples and shrines and is especially vibrant during evening Yamuna aarti, attracting hundreds of devotees and tourists alike.
            </p>
        </div>
    </section>
    <section class="mathura-about">

        <div class="content">
            <h3>2. Keshi Ghat (Vrindavan)</h3>
            <p>
                Keshi Ghat is among the most picturesque and spiritually important ghats in Vrindavan. It is named after the demon Keshi, whom Krishna vanquished at this very spot. The ghat features grand Rajasthani-style architecture with high domes and arches, adding to its majestic aura. Devotees come here to bathe in the holy Yamuna, believing the waters to be purifying. The ghat is a prime location for boat rides and is most enchanting during sunset, when the temple bells ring and priests perform the mesmerizing Yamuna aarti, filling the atmosphere with devotion.
            </p>
           
        </div>
        <div class="image">
            <img src="images/imageskeshighat.jpg" alt="mathura"
                loading="lazy" />
        </div>
    </section>
    <section class="mathura-about">

        <div class="image">
            <img src="images/brahmandghat.webp" alt="mathura"
                loading="lazy" />
        </div>
        <div class="content">
            <h3>3.Brahmand Ghat (Gokul)</h3>
            <p>
                Located in the peaceful town of Gokul, Brahmand Ghat is connected to a famous childhood episode of Lord Krishna. It is the place where Mother Yashoda, upon suspecting Krishna of eating mud, looked into his mouth and was stunned to see the entire cosmos (Brahmand) inside. This miraculous event revealed Krishna’s divine nature. The ghat today is a calm, sacred place where devotees come to reflect on the spiritual meaning of that vision. Temples near the ghat preserve this leela through beautiful murals and idols.
            </p>
        </div>
    </section>
    <section class="mathura-about">

        <div class="content">
            <h3>4.Govind Ghat (Govardhan)</h3>
            <p>
                Govind Ghat is located near the sacred Govardhan Hill, which Lord Krishna lifted on his little finger to protect the villagers from the wrath of Indra, the rain god. This ghat plays a significant role during the Govardhan Parikrama, a sacred circumambulation of the hill that spans 21 kilometers. Pilgrims stop at this ghat to offer prayers and take a holy dip in the Yamuna before continuing their journey. The serene surroundings, along with devotional songs and chants, create a spiritually uplifting atmosphere throughout the year.
            </p>
        </div>
        <div class="image">
            <img src="images/goverdhan23.jpg" alt="mathura"
                loading="lazy" />
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