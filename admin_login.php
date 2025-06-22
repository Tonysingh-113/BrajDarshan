<?php
session_start();

// Handle login form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Database config
    $host = 'localhost';
    $dbname = 'book_db';
    $dbuser = 'root';
    $dbpass = '';
    $charset = 'utf8mb4';

    try {
        $dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ];

        $pdo = new PDO($dsn, $dbuser, $dbpass, $options);

        $stmt = $pdo->prepare("SELECT * FROM admin WHERE username = ?");
        $stmt->execute([$username]);
        $admin = $stmt->fetch();

        if ($admin && $password === $admin['password']) {
            $_SESSION['admin_logged_in'] = true;
            $_SESSION['admin_username'] = $admin['username'];
            header("Location: admin_portal.php"); // Redirect to admin dashboard
            exit;
        } else {
            $error = "Invalid username or password.";
        }
    } catch (PDOException $e) {
        $error = "Database error: " . $e->getMessage();
    }
}
?>

<!-- HTML login form -->
<!DOCTYPE html>
<html>

<head>
    <title>Admin Login</title>

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>" type="text/css">


</head>

<body>
    <div class="form-container">
        <?php if (!empty($error)) echo "<p style='color:red;'>$error</p>"; ?>
        <form method="POST" action="admin_login.php">
            <h3 style="text-transform: capitalize;">Admin Login</h3>
            <!-- <p style="text-align: left;">Username:</p> -->
            <input type="text" name="username" placeholder="Enter admin username.." required>

            <!-- <label>Password:</label><br> -->
            <input type="password" name="password" placeholder="Enter admin password.." required><br><br>

            <input type="submit" name="submit" value="login now" class="form-btn">
            <input type="submit"value="back" class="form-btn" onclick="window.location.href='login_form.php'">
        </form>

    </div>

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <script type="text/javascript" src="js/script.js?v=<?php echo time(); ?>"></script>


</body>

</html>