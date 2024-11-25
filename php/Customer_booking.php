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
            <a href="./Customer_order.php"><li>Customer Order</li></a>
            <a href="./Customer_booking.php"><li>Customer Booking</li></a>
            <a href="./Delivery.php"><li>Delivery</li></a>
            <a href="./Logout.php"><li class=login>Logout</li></a>
        </ul>
    </nav>

    <div >
    <h1 class="pt1 pb1"> Customer Booking</h1>
        <div class="admintable">
        <?php
            require("./database.php");

            $query = "SELECT * FROM booking";
            $result = $db_connection->query($query);

            if ($result) {
                if ($result->num_rows > 0) {
                    echo "<table  class='booking-table' border='1'>";
                    echo "<tr class='table-head'><th>Booking ID</th><th>Name</th><th>Date</th><th>Time</th><th>Contact</th><th>Number of People</th><th>Special Request</th></tr>";
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td class='text-wrap' data-label='Booking ID'>".$row["id"]."</td>";
                        echo "<td class='text-wrap' data-label='Name'>".$row["name"]."</td>";
                        echo "<td class='text-wrap' data-label='Date'>".$row["date"]."</td>";
                        echo "<td class='text-wrap' data-label='Time'>".$row["time"]."</td>";
                        echo "<td class='text-wrap' data-label='Contact'>".$row["contact"]."</td>";
                        echo "<td class='text-wrap' data-label='Number of People'>".$row["number_of_people"]."</td>";
                        echo "<td data-label='Special Request'>".$row["special_request"]."</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                } else {
                    echo "No Booking found.";
                }
            } else {
                echo "Error: " . $db_connection->error;
            }

            $db_connection->close();
        ?>
        </div>
        
    </div>
    <footer class="text-center" style="position: fixed;">
        &copy; 2024 Beans The Coffeeshop. All rights reserved.
    </footer>
</body>
</html>