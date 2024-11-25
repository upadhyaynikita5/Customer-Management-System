<?php
    session_start();
    require("./database.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $table = $_POST["table"];
        $item = $_POST["item"];
        $name = $_POST["name"];
        $contact = $_POST["contact"];
        $specialRequest = $_POST["specialRequest"];

        if(isset($_POST['takeaway'])) {
            $_SESSION['table'] = $table;
            $_SESSION['item'] = $item;
            $_SESSION['name'] = $name;
            $_SESSION['contact'] = $contact;
            $_SESSION['specialRequest'] = $specialRequest;
            header("Location: takeaway_form.php");
            exit();
        }

        $query = "INSERT INTO orders (`table`, `item`, `name`, `contact`, `special_request`) VALUES ('$table', '$item', '$name', '$contact', '$specialRequest')";

        if ($db_connection->query($query) === TRUE) {
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

    <div style="position: absolute; top: 250px; left: 220px; width: 100%; text-align: left;">
        <h2>Scan for Menu</h2>
    </div>

    <img src="../Photos/qr.png" alt="Image Description" style="position: absolute; top: 300px; left: 200; width: 200px; height: auto;">
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
                    <label for="table">Table No.</label>
                    <div class="pt1">
                        <input type="text" name="table" id="table" class="forminput" required>
                    </div>
                </div>
                <div class="pt1 forms">
                    <label for="item">Item</label>
                    <div class="pt1">
                        <input type="text" name="item" id="item" class="forminput" required>
                    </div>
                </div>
                <div class="pt1 forms">
                    <label for="name">Customer Name</label>
                    <div class="pt1">
                        <input type="text" name="name" id="name" class="forminput" required>
                    </div>
                </div>
                <div class="pt1 forms">
                    <label for="contact">Customer Number</label>
                    <div class="pt1">
                        <input type="text" name="contact" id="contact" required>
                    </div>
                </div>
                <div class="pt1 forms">
                    <label for="specialRequest">Special Request</label>
                    <div class="pt1">
                        <textarea name="specialRequest" id="specialRequest" rows="6" cols="36"></textarea>
                    </div>
                    
                </div>

                <div class="pt1 pb1 text-end">
                    <button type="submit" class="btnBlue" name="takeaway">Takeaway</button>
                    <button type="submit" class="btnBlue" name="dinein">Dine In</button>
                </div>
            </form>
        </div>
    </div>

    <footer class="text-center" style="position: fixed;">
        &copy; 2024 Beans The Coffeeshop. All rights reserved.
    </footer>
</body>
</html>