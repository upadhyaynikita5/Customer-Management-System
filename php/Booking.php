<?php
    require("./database.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $date = $_POST["date"];
        $time = $_POST["time"];
        $contact = $_POST["contact"];
        $specialRequest = $_POST["specialRequest"];
        $numberOfPeople = $_POST["numberOfPeople"];

        $query = "INSERT INTO booking (`name`, `date`, `time`, `contact`, `special_request`, `number_of_people`) VALUES ('$name', '$date', '$time', '$contact', '$specialRequest', '$numberOfPeople')";

        if ($db_connection->query($query) === TRUE) {
            echo "<script>alert('Booking saved successfully');</script>";
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
    <title>Document</title>
</head>
<body>
    <nav>
        <ul>
            <a href="../index.php"><Li>Home</Li></a>
            <a href="./About.php"><Li>About</Li></a>
            <a href="./Order.php"><Li>Order</Li></a>
            <a href="./Booking.php"><Li>Booking</Li></a>
            <a href="./Review.php"><Li>Review</Li></a>
            <a href="./Login.php"><Li class=login>Login</Li></a>
        </ul>
    </nav>

    <div class="main">
        <div class="order">
            <h1>Booking</h1>
            <form class="orderForm pb1" action="#" method="post">
                <div class="pt1 forms">
                    <label for="name">Name</label>
                    <div class="pt1">
                        <input type="text" name="name" id="name" class="forminput" required>
                    </div>
                </div>
                <div class="pt1 forms">
                    <label for="date">Date</label>
                    <div class="pt1"> 
                        <input type="date" name="date" id="date required">
                    </div>
                </div>
                <div class="pt1 forms">
                    <label for="time">Time</label>
                    <div class="pt1">
                        <input type="time" name="time" id="time" required>
                    </div>
                </div>
                <div class="pt1 forms">
                    <label for="contact">Contact</label>
                    <div class="pt1">
                        <input type="text" name="contact" id="contact" required>
                    </div>
                </div>
                <div class="pt1 forms">
                    <label for="numberOfPeople">Number of People</label>
                    <div class="pt1">
                        <input type="number" name="numberOfPeople" id="numberOfPeople" required>
                    </div>
                </div>
                <div class="pt1 forms">
                    <label for="specialRequest">Special Request</label>
                    <div class="pt1">
                        <textarea name="specialRequest" id="specialRequest" rows="6" cols="36"></textarea>
                    </div>
                    
                </div>

                <div class="pt1 pb1 text-end">
                <button type="submit" class="btnBlue">Submit</button>
                </div>
                
            </form>
        </div>
    </div>

    <footer class="text-center" style="position: fixed;">
        &copy; 2024 Beans The Coffeeshop. All rights reserved.
    </footer>
</body>
</html>