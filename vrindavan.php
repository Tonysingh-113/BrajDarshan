
<?php
    // Your OpenWeatherMap API key
    $apiKey = "eb47852c9a168db2c82732fd24233907";  
    $city = "Vrindavan";
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
        <h1 class="mathura-heading-title"> Temples Of Vrindavan </h1>

        <div class="image">
            <video autoplay loop muted controls src="images/vrindavan.webm"></video>
        </div>
        <div class="content">
            <h3>about Vrindavan</h3>
            <p>Vrindavan, the sacred playground of Lord Krishna, is a place where divinity dances in every breeze and devotion fills the air. With its enchanting temples, serene ghats, and melodious chants of "Radhe Radhe," Vrindavan offers a spiritual escape from the chaos of modern life. It’s where Krishna spent his childhood, played his flute, and shared divine love with Radha. Pilgrims and seekers from across the world come to feel the divine presence still alive in its streets. Visiting Vrindavan isn't just a journey—it's a soul-stirring experience that awakens love, faith, and peace within. Come, and let your heart find home.

            </p>
        </div>
    </section>
    <!-- ----------------------------temples start -->
    <section class="mathura-about">

        <div class="image">
            <img src="images/vrindavan/bake bihari ji.jpg" alt="mathura"
                loading="lazy" />
        </div>
        <div class="content">
            <h3>1.Banke Bihari Ji</h3>
            <p>
                Banke Bihari Temple is located in Biharipura in Vrindavan Dham of Mathura district in India . It is one of the ancient and famous temples of India. Banke Bihari is a form of Krishna which is depicted in it. It was built in 1864 by Swami Haridas .
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
            <h3>2. Prem Mandir</h3>
            <p>
               Prem Mandir, located in Vrindavan, Uttar Pradesh, is a magnificent temple dedicated to Lord Krishna and his divine consort, Radha. The temple is known for its stunning architecture, with intricately carved marble and beautifully illuminated structures, making it a symbol of devotion and love. Prem Mandir translates to "Temple of Love," reflecting the deep love and devotion between Radha and Krishna, which is central to the temple's spiritual significance.
            </p>
            <h4>Temple timing</h4>
            <h5>Summer</h5>
            <h6>6:30 am to 11:00 am & 4:00 pm to 7:30 pm</h6>
            <h5>Winter</h5>
            <h6>6:30 am to 11:00 am & 3:30 pm to 7:00 pm</h6>
        </div>
        <div class="image">
            <img src="images/prem.jpg" alt="mathura"
                loading="lazy" />
        </div>
    </section>
    <section class="mathura-about">

        <div class="image">
            <img src="images/vrindavan/iskcon temple.jpg" alt="mathura"
                loading="lazy" />
        </div>
        <div class="content">
            <h3>3.Iskcon Temple</h3>
            <p>
                The ISKCON Temple, also known as the International Society for Krishna Consciousness, is a prominent temple dedicated to Lord Krishna and his divine consort, Radha. The temple is known for its vibrant atmosphere, where devotees gather to chant, worship, and celebrate the teachings of Lord Krishna as described in the Bhagavad Gita. The first ISKCON temple was established in 1966 in New York by A.C. Bhaktivedanta Swami Prabhupada, and today, it has temples worldwide, including in India.
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
            <h3>4.Radha Vallabh</h3>
            <p>
                Shri Radha Vallabh Temple, also called Shri Radha Vallabhlal ji Temple is a historic temple in the city of Vrindavan, Mathura district, Uttar Pradesh, India. The temple is dedicated to Hindu deities Radha Krishna.[1] The temple belongs to Radha Vallabh Sampradaya and was constructed in 16th century under the guidance of Vrindavan saint Hith Harivansha Mahaprabhu.
            </p>
            <h4>Temple timing</h4>
            <h5>Summer</h5>
            <h6>5:00 am to 12:00 pm & 4:00 pm to 9:30 pm</h6>
            <h5>Winter</h5>
            <h6>5:30 am to 12:00 pm & 3:00 pm to 8:30 pm</h6>
        </div>
        <div class="image">
            <img src="images/vrindavan/radhavallabh.jpg" alt="mathura"
                loading="lazy" />
        </div>
    </section>
    <section class="mathura-about">

        <div class="image">
            <img src="images/vrindavan/radharaman ji.jpg" alt="mathura"
                loading="lazy" />
        </div>
        <div class="content">
            <h3>5. Radha Raman Ji</h3>
            <p>
                Sri Radha Raman Temple, is a Hindu temple situated in Vrindavan, India. It is dedicated to Krishna who is worshiped as Radha Ramana. This temple is counted as one of the Seven most revered ancient temples of Vrindavan along with Radha Vallabh Temple, Radha Damodar Temple, Radha Madanmohan Temple, Radha Govindji Temple, Radha Shyamsundar Temple and Radha Gokulnandan Temple.
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
            <h3>6.Rang Nath Ji</h3>
            <p>
                Rangnath Ji Temple in Mathura is an important and revered temple dedicated to Lord Rangnath, a form of Lord Vishnu. Situated near the famous Vishram Ghat, it is a significant pilgrimage site for devotees of Lord Vishnu and attracts numerous visitors every year. The temple is known for its serene ambiance and the magnificent idol of Lord Rangnath, which is adorned with beautiful ornaments and garlands.
            </p>
            <h4>Temple timing</h4>
            <h5>Summer</h5>
            <h6>5:00 am to 12:00 pm & 4:00 pm to 9:30 pm</h6>
            <h5>Winter</h5>
            <h6>5:30 am to 12:00 pm & 3:00 pm to 8:30 pm</h6>
        </div>
        <div class="image">
            <img src="images/vrindavan/rangnath ji.jpg" alt="mathura"
                loading="lazy" />
        </div>
    </section>
    

    
    <!-- Footer Section start -->
        <section class="footer">
            <div style="display: flex; align-items: center; gap: 10px; color: white;">
                <p style="font-size: 16px; margin: 0;">Vrindavan&emsp;:</p>
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