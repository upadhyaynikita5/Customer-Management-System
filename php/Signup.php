<?php
    require("./database.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
        $password = $_POST["password"];
        $registerCode = $_POST["registerCode"];

        $defaultRegisterCode = "2222";
        if ($registerCode !== $defaultRegisterCode) {
            echo "<script>alert('Invalid code');</script>";
            header("Location: Signup.php");
            exit;
        }

        $query = "INSERT INTO users (email, password, register_code) VALUES ('$email', '$password', '$registerCode')";

        if ($db_connection->query($query) === TRUE) {
            echo "<script>alert('Registration successful');</script>";
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
            <a href="../index.php"><li>Home</li></a>
            <a href="./About.php"><li>About</li></a>
            <a href="./Order.php"><li>Order</li></a>
            <a href="./Booking.php"><li>Booking</li></a>
            <a href="./Review.php"><li>Review</li></a>
            <a href="./Login.php"><li class=login>Login</li></a>
        </ul>
    </nav>

    <div class="main">
        <div class="login">
            <h1 class="pb1">Register</h1>
            <form class="loginForm pb1" action="#" method="post">
                <div class="pt1 forms">
                    <label for="email"> Email</label>
                    <div class="pt1">
                        <input type="email" name="email" id="email" required>
                    </div>
                </div>
                <div class="pt1 forms">
                    <label for="password"> Password</label>
                    <div class="pt1">
                        <input type="password" name="password" id="password" required> 
                    </div>
                </div>
                <div class="pt1 forms">
                    <label for="registerCode">Code</label>
                    <div class="pt1">
                        <input type="text" name="registerCode" id="registerCode" required>
                    </div>
                </div>

                <div class="pt1 pb1 text-end">
                    <button type="submit" class="btnBlue" style="width:100%">Register</button>
                </div>
                
                <hr>

                <div class="pt1 pb1 newAccount">
                    <p>Already have an account? <a href="./Login.php">Login</a></p>
                </div>
            </form>
        </div>
    </div>
    <footer class="text-center" style="position: fixed;">
        &copy; 2024 Beans The Coffeeshop. All rights reserved.
    </footer>
</body>
</html>