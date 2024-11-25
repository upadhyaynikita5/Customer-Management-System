<?php
    require("./database.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];

        $query = "INSERT INTO contact (`name`, `email`, `subject`, `message`) VALUES ('$name', '$email', '$subject', '$message')";

        if ($db_connection->query($query) === TRUE) {
            echo "<script>alert('Message sent successfully');</script>";
        } else {
            echo "Error: " . $query . "<br>" . $db_connection->error;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./js/app.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <title>Review</title>
</head>
<body>
    <nav>
        <ul>
            <a href="../index.php"><li>Home</li></a>
            <a href="./About.php"><li>About</li></a>
            <a href="./Order.php"><li>Order</li></a>
            <a href="./Booking.php"><li>Booking</li></a>
            <a href="./Review.php"><li>Review</li></a>
            <a href="./Login.php"><li class=login>Login</li></a>
        </ul>
    </nav>

    <div class="main">
        <div class="contact-form">
            <h1>Review</h1>
            <form class="contactForm pb1" action="#" method="post">
                <div class="pt1 forms">
                    <label for="name">Your Name</label>
                    <div class="pt1">
                        <input type="text" name="name" id="name" class="forminput" required>
                    </div>
                </div>
                <div class="pt1 forms">
                    <label for="email">Your Email</label>
                    <div class="pt1"> 
                        <input type="email" name="email" id="email" required>
                    </div>
                </div>
                <div class="pt1 forms">
                    <label for="subject">Subject</label>
                    <div class="pt1">
                        <input type="text" name="subject" id="subject" required>
                    </div>
                </div>
                <div class="pt1 forms">
                    <label for="message">Message</label>
                    <div class="pt1">
                        <textarea name="message" id="message" rows="6" cols="36" required></textarea>
                    </div>
                </div>

                <div class="pt1 pb1 text-end">
                    <button type="submit" class="btnBlue">Send Message</button>
                </div>
            </form>
        </div>
    </div>

    <footer class="text-center" style="position: fixed;">
        &copy; 2024 Beans The Coffeeshop. All rights reserved.
    </footer>
</body>
</html>