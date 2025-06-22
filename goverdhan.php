<?php
// Your OpenWeatherMap API key
$apiKey = "eb47852c9a168db2c82732fd24233907";  // Replace with your actual key
$city = "Goverdhan";
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

        .mathura-about .image video {
            width: 100%;
        }

        .mathura-about .image img {
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
        <h1 class="mathura-heading-title"> Temples Of Goverdhan </h1>

        <div class="image">
            <video autoplay loop muted controls src="images/gokul.mp4"></video>
        </div>
        <div class="content">
            <h3>about Goverdhan</h3>
            <p>Goverdhan, the sacred hill lifted by Lord Krishna on his little finger, is a timeless symbol of faith, protection, and divine love. Pilgrims from across the world come to perform the Govardhan Parikrama, a 21-kilometer spiritual walk filled with devotion and blessings. Every step around the hill is believed to bring peace, prosperity, and liberation. Surrounded by holy sites like Kusum Sarovar and Radha Kund, Goverdhan is not just a place—it's a living embodiment of Krishna’s promise to protect his devotees. Visiting Goverdhan awakens a deep inner connection to the divine. Come, walk with faith, and feel Krishna walking beside you.

            </p>
        </div>
    </section>
    <!-- ----------------------------temples start -->
    <section class="mathura-about">

        <div class="image">
            <img src="images/goverdhan/dhangati.webp" alt="mathura"
                loading="lazy" />
        </div>
        <div class="content">
            <h3>1.Shree Giriraj ji Maharaj Danghati mandir</h3>
            <p>
                Daan-Ghati is one of the two main temple structures in Govardhan, near Mathura, India. The other temple structure is called Dasvisa.

                It is involved in the Govardhan Puja,a 21 kilometre circumambulation of the hill that it is believed Krishna lifted with his little finger to protect his worshipers from the wrath of Indra, the Vedic god of rain.
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
            <h3>2. Radha Kund</h3>
            <p>
                Radha Kunda (well) is known to be the sacred bathing place of Radharani. She had rebuked Krishna, saying that
                he became impure by killing a bull, the symbol of religion. She suggested that he could purify himself by
                taking bath in all holy rivers.

                Rather than travelling to all sacred places, he struck the ground with his heel and water from all holy rivers
                appeared.
            </p>
            <h4>Temple timing</h4>
            <h5>Summer</h5>
            <h6>6:30 am to 11:00 am & 4:00 pm to 7:30 pm</h6>
            <h5>Winter</h5>
            <h6>6:30 am to 11:00 am & 3:30 pm to 7:00 pm</h6>
        </div>
        <div class="image">
            <img src="images/goverdhan/mansiganga.jpg" alt="mathura"
                loading="lazy" />
        </div>
    </section>
    <section class="mathura-about">

        <div class="image">
            <img src="images/goverdhan/mansiganga.jpg" alt="mathura"
                loading="lazy" />
        </div>
        <div class="content">
            <h3>3.Mansi Ganga</h3>
            <p>
                The most sacred and the largest lake in Goverdhan town of Mathura is the Mansi Ganga. It is situated right in
                the heart of Goverdhan. The pure water of Mansi Ganga is considered to be more pious than that of Ganges
                River. It is said that one who bathes in the river Ganges is purified of all sins, but one who bathes in
                Mansi-Ganga Goverdhan is not only purified of sins but will also achieve prem-bhakti, the highest platform of
                pure loving devotion to Krishna.
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
            <h3>4.Shri Giriraj Ji Mukharvind</h3>
            <p>
                This Mukharwind is a Govardhan Shila and is also known as the Shringar Sthali,The Mukharvind of Giriraj
                Govardhan; according to the Vallabh Sampraday. Annakut Pujan is held here every year. Hundreds of bhakts visit
                daily and worship with milk and flowers etc. Many also begin their parikrama of Giriraj Govardhan from this
                point.


                This Sthal is very very Alive with the Divine vibrations and energy.
            </p>
            <h4>Temple timing</h4>
            <h5>Summer</h5>
            <h6>5:00 am to 12:00 pm & 4:00 pm to 9:30 pm</h6>
            <h5>Winter</h5>
            <h6>5:30 am to 12:00 pm & 3:00 pm to 8:30 pm</h6>
        </div>
        <div class="image">
            <img src="images/goverdhan/mukharvind.webp" alt="mathura"
                loading="lazy" />
        </div>
    </section>
    <section class="mathura-about">

        <div class="image">
            <img src="images/goverdhan/puchhrikalota.jpg" alt="mathura"
                loading="lazy" />
        </div>
        <div class="content">
            <h3>5. Poonchhari Ka Lautha</h3>
            <p>
                Poonchhari Ka Lautha Baba temple falls in the area of Govardhan in Rajasthan. It is a renowned temple just on
                the main Parikrama road, where the circumambulation is done by devotees. Govardhan can be easily accessed from
                Mathura which is 20 km from the city. It is dedicated to one of Lord Krishna’s cowherd friends named Lota Baba
                , the deity here is in lying position and not in the standing or sitting position.

                Goverdhan is said to be in the form of sitting cow. His hind part is puchari, Poonchari Ka Lautha. The literal
                meaning of punchari is tail.
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
            <h3>6. Shree Chaitanya Mahaprabhu Ji Mandir</h3>
            <p>
                When Lord Caitanya saw Govardhana Hill, He immediately offered obeisances, falling down on the ground like a
                rod. He embraced one piece of rock from Govardhana Hill and became mad.

                Just by seeing Govardhana Hill, Sri Caitanya Mahaprabhu became ecstatic with love of Krishna. While dancing
                and dancing and dancing, He recited the following verse from the Srimad Bhagavatam:
            </p>
            <h4>Temple timing</h4>
            <h5>Summer</h5>
            <h6>5:00 am to 12:00 pm & 4:00 pm to 9:30 pm</h6>
            <h5>Winter</h5>
            <h6>5:30 am to 12:00 pm & 3:00 pm to 8:30 pm</h6>
        </div>
        <div class="image">
            <img src="images/goverdhan/Chaitanya Mahaprabhu temple (1).JPG" alt="mathura"
                loading="lazy" />
        </div>
    </section>
    <section class="mathura-about">

        <div class="image">
            <img src="images/gokul/84khamba.jpg" alt="mathura"
                loading="lazy" />
        </div>
        <div class="content">
            <h3>7. Kusum Sarovar</h3>
            <p>
                Kusum Sarovar dates back to the era of Radha Krishna. As the name suggests, Kusum Sarovar is a place
                surrounded by a variety of flowers and Kadamb trees. It is said that Radha would come here under the pretext
                of collecting flowers for her friends, but would secretly meet with Krishna and have playful conversations.
                According to legends, once while collecting flowers, Radha's dress got stuck in thorns and Krishna came to
                help Radharani disguised as the gardener and took out her stuck dress from the thorns.
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
            <p style="font-size: 16px; margin: 0;">Goverdhan&emsp;:</p>
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