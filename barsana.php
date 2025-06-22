<?php
// Your OpenWeatherMap API key
$apiKey = "YOUR_API_KEY";
$city = "Barsana";
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
        <h1 class="mathura-heading-title"> Temples Of Barsana </h1>

        <div class="image">
            <video autoplay loop muted controls src="images/barsana.mp4"></video>
        </div>
        <div class="content">
            <h3>about Barsana</h3>
            <p>Barsana, the cherished land of Radha Rani, is a village of divine love and spiritual grace. Nestled among the hills of Braj, Barsana is where devotion comes alive through its colorful festivals, ancient temples, and the ever-echoing name of Radha. The sacred Radha Rani Temple atop the hill offers breathtaking views and soul-deep serenity. During Lathmar Holi, the village bursts into joyful celebration like no other place on earth. Visiting Barsana is not just a pilgrimage—it's a heartfelt journey into the essence of selfless love and divine joy. Come to Barsana, and feel Radha’s eternal presence in every step.

            </p>
        </div>
    </section>
    <!-- ----------------------------temples start -->
    <section class="mathura-about">

        <div class="image">
            <img src="images/barsana/barsana.jpg" alt="mathura"
                loading="lazy" />
        </div>
        <div class="content">
            <h3>1.Shri Radha Rani Temple</h3>
            <p>
                Radha Rani is believed to be the Goddess of Brajwasis. She is believed to be the secret power of Lord Krishna.
                For Brajwasis, Radha Rani is not just a consort of Krishna, but the ultimate source of his prowess. Due to her
                eminent character, she is the only worshipped Goddess of the Braj region. The Radha Rani Temple in Barsana is
                believed to be the place where Shreeji is always omnipresent and is believed to be blessing every pilgrim
                visiting the temple with unending devotion.
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
            <h3>2. Mor kuti</h3>
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
            <img src="images/barsana/morkuti.jpg" alt="mathura"
                loading="lazy" />
        </div>
    </section>
    <section class="mathura-about">

        <div class="image">
            <img src="images/barsana/DSC_0188.jpg" alt="mathura"
                loading="lazy" />
        </div>
        <div class="content">
            <h3>3.Radha Kushal Bihari Temple</h3>
            <p>
                This temple was built by a Rajasthani king who had a strong devotion to Shri Barsana Dham. The architecture of
          the temple is very similar to that of a fort that you may see in Rajasthan. He made the decision to construct
          the Shri Laadli Laal temple. He also desired to move the lovely Shri Laadli Laal deity, who is currently
          housed in the Shri Radharani temple in Barsana, to the new temple once it had been built.
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
            <h3>4.Gahavar Van</h3>
            <p>
                Gahavar van is a deep dense forest situated in Barsana, the homeland of Shri Radha Rani. Barsana is a small
          village located on a hill and is one among the twin towns of Mathura region. Situated at about 43 km away from
          Mathura, Barsana is home to many temples dedicated to Radha Rani and hence each of the temples here reveres
          the existence of the supreme deity.
            </p>
            <h4>Temple timing</h4>
            <h5>Summer</h5>
            <h6>5:00 am to 12:00 pm & 4:00 pm to 9:30 pm</h6>
            <h5>Winter</h5>
            <h6>5:30 am to 12:00 pm & 3:00 pm to 8:30 pm</h6>
        </div>
        <div class="image">
            <img src="images/barsana/ghevarvan.jpg" alt="mathura"
                loading="lazy" />
        </div>
    </section>
    <section class="mathura-about">

        <div class="image">
            <img src="images/barsana/daangarh.jpg" alt="mathura"
                loading="lazy" />
        </div>
        <div class="content">
            <h3>5. Dan Bihari Temple</h3>
            <p>
                In Sanskrit, the word “Dan” denotes a donation, whereas the term “Bihari” is a loving way to refer to Lord
          Krishna. According to legend, a poor Brahmin once struggled to raise the funds needed for his daughter’s
          marriage. As he grieved, he thought of Krishna. Lord Krishna, moved by the suffering of the poor man,
          organised the gold equivalent of Radha’s weight and gave it to him as a gift. Shri Krishna showed another
          instance of his divine kindness in this way.
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
            <h3>6.Kirti Mandir</h3>
            <p>
                Kitri Mandir is a temple in Barsana. This temple is the only one of its kind in the whole world as it is a
          temple of the Hindu deity Kirti who was the mother of Shri Radha. This temple was inaugurated on 10 February
          2019 on the auspicious occasion of Vasant Panchmi. This temple is having a deity of baby Radha in mother
          Kirti's lap. This temple was envisioned by Jagadguru Shri Kripalu Ji Maharaj.
            </p>
            <h4>Temple timing</h4>
            <h5>Summer</h5>
            <h6>5:00 am to 12:00 pm & 4:00 pm to 9:30 pm</h6>
            <h5>Winter</h5>
            <h6>5:30 am to 12:00 pm & 3:00 pm to 8:30 pm</h6>
        </div>
        <div class="image">
            <img src="images/barsana/kirtimandir.jpeg" alt="mathura"
                loading="lazy" />
        </div>
    </section>



    <!-- Footer Section start -->
    <section class="footer">
        <div style="display: flex; align-items: center; gap: 10px; color: white;">
            <p style="font-size: 16px; margin: 0;">Barsana&emsp;:</p>
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