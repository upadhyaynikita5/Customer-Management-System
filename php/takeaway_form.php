<?php
    session_start();
    require("./database.php");

    $table = $_SESSION['table'] ?? '';
    $item = $_SESSION['item'] ?? '';
    $name = $_SESSION['name'] ?? '';
    $contact = $_SESSION['contact'] ?? '';
    $specialRequest = $_SESSION['specialRequest'] ?? '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $address = $_POST["address"];

        $query = "INSERT INTO orders (`table`, `item`, `name`, `contact`, `special_request`, `address`, `takeaway`) VALUES ('$table', '$item', '$name', '$contact', '$specialRequest', '$address', 1)";

        if ($db_connection->query($query) === TRUE) {
            echo "<script>alert('Order placed successfully');</script>";
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
            <h1>Order</h1>
            <form class="orderForm pb1" action="#" method="post">
                <div class="pt1 forms">
                    <label for="address">Address</label>
                    <div class="pt1">
                        <input type="text" name="address" id="address" class="forminput" required>
                    </div>
                </div>

                <div class="pt1 pb1 text-end">
                    <button type="submit" class="btnBlue" name="dinein">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <footer class="text-center" style="position: fixed;">
        &copy; 2024 Beans The Coffeeshop. All rights reserved.
    </footer>
</body>
</html>