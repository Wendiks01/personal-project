<?php

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "newspaper_sales";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query to retrieve sales data
$sql = "SELECT COUNT(*) as total_sales, DATE_FORMAT(date, '%Y-%m-%d') as date FROM sales GROUP BY DATE(date) ORDER BY date DESC LIMIT 10";
$result = mysqli_query($conn, $sql);

// Query to retrieve distribution data
$sql2 = "SELECT COUNT(*) as total_distributed, region FROM distribution GROUP BY region ORDER BY total_distributed DESC LIMIT 5";
$result2 = mysqli_query($conn, $sql2);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Newspaper Sales Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Newspaper Sales Admin Dashboard</h1>
        <h2>Daily Sales</h2>
        <table>
            <tr>
                <th>Date</th>
                <th>Total Sales</th>
            </tr>
            <?php while($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['date']; ?></td>
                <td><?php echo $row['total_sales']; ?></td>
            </tr>
            <?php } ?>
        </table>
        <h2>Regional Distribution</h2>
        <table>
            <tr>
                <th>Region</th>
                <th>Total Distributed</th>
            </tr>
            <?php while($row = mysqli_fetch_assoc($result2)) { ?>
            <tr>
                <td><?php echo $row['region']; ?></td>
                <td><?php echo $row['total_distributed']; ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>
