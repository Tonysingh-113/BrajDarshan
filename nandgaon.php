<?php
// Your OpenWeatherMap API key
$apiKey = "eb47852c9a168db2c82732fd24233907";
$city = "Nandgaon";
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
        <h1 class="mathura-heading-title"> Temples Of Nandgaon </h1>

        <div class="image">
            <video autoplay loop muted controls src="images/barsana.mp4"></video>
        </div>
        <div class="content">
            <h3>about Nandgaon</h3>
            <p>Nandgaon, the beloved home of Lord Krishna’s childhood, is a place where every stone whispers tales of divine play and eternal joy. Surrounded by scenic hills and sacred groves, Nandgaon radiates a peaceful charm that draws pilgrims and seekers from around the world. The Nand Bhavan temple, perched atop the hill, offers not just a view of the beautiful Braj land but also a deep sense of spiritual connection. Festivals here are vibrant, especially Holi, celebrated with unmatched devotion and love. Visiting Nandgaon is like stepping into Krishna’s past—pure, playful, and profoundly divine. Come and relive his childhood leelas.

            </p>
        </div>
    </section>
    <!-- ----------------------------temples start -->
    <section class="mathura-about">

        <div class="image">
            <img src="images/nandgaon/nandbhavan.jpg" alt="mathura"
                loading="lazy" />
        </div>
        <div class="content">
            <h3>1.Shri Nand Baba Temple</h3>
            <p>
                Built on the same spot where once the residence of Nand Maharaja stands, Nanda Bhavan, also touted as Nandagram Temple, is one of the highly revered temples in Nandgaon. Located atop of Nandishwar Hill, the popular temple traces its history from the 19th-century. It was built by Raja Rupa Singh and is the only shrine where the foster parents (Nand and Yashoda) of Lord Krishna are worshipped.
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
            <h3>2. Paawan Sarovar </h3>
            <p>
                Mayur kuti (Mor Kuti) is situated just after the upper segment of Daan-garh near Gehvar Van, Barsana. Various
          divine pastimes were performed here. According to the pastime legend, Once Radharani performed Maan Leela at
          Maangarh which is just opposite to Morkuti. Krishna tried to break Shri Radha’s 'maan' in many ways but he
          failed.
            </p>
            <h4>Temple timing</h4>
            <h5>Summer</h5>
            <h6>6:30 am to 11:00 am & 4:00 pm to 7:30 pm</h6>
            <h5>Winter</h5>
            <h6>6:30 am to 11:00 am & 3:30 pm to 7:00 pm</h6>
        </div>
        <div class="image">
            <img src="images/nandgaon/pawansarovar.jpg" alt="mathura"
                loading="lazy" />
        </div>
    </section>
    <section class="mathura-about">

        <div class="image">
            <img src="images/nandgaon/ter.jpg" alt="mathura"
                loading="lazy" />
        </div>
        <div class="content">
            <h3>3.Ter Kadamb</h3>
            <p>
                Ter Kadamb is the place where Shree Roop Goswami used to sing lovely songs in the praise of Radha Rani and Lord Krishna. It is believed that this was the place where Shri Radha and Shri Krishna had spent time and had done amazing exploits. The place is situated on the road from Nandgaon to javat. Ter Kadamba Mandir is the temple that lets devotees experience the various pastimes of Shri Radha and Shri Krishna.
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
            <h3>4.Vrinda Kund</h3>
            <p>
                Vrinda Kund is a small water body just one km away from Nandgaon. The holy kund is said to belong to Srimati Vrinda Devi. It is believed that Vrinda Devi is responsible for managing and arranging the daily pastimes of Shri Radha and Shri Krishna. Vrinda Devi along with Yogmaya Purnima Devi would make arrangements for the lovely meetings of Shri Radha and Shri Krishna. The kund is adjacent to the beautiful Vrinda Devi Temple in which the ever charming deity of Srimati Vrinda Devi is placed.
            </p>
            <h4>Temple timing</h4>
            <h5>Summer</h5>
            <h6>5:00 am to 12:00 pm & 4:00 pm to 9:30 pm</h6>
            <h5>Winter</h5>
            <h6>5:30 am to 12:00 pm & 3:00 pm to 8:30 pm</h6>
        </div>
        <div class="image">
            <img src="images/nandgaon/vrinda.jpg" alt="mathura"
                loading="lazy" />
        </div>
    </section>
    



    <!-- Footer Section start -->
    <section class="footer">
            <div style="display: flex; align-items: center; gap: 10px; color: white;">
                <p style="font-size: 16px; margin: 0;">Nandgaon&emsp;:</p>
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