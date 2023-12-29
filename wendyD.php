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
            
            <tr>
                <td><?php echo $row['date']; ?></td>
                <td><?php echo $row['total_sales']; ?></td>
            </tr>
           
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
