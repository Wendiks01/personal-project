<?php

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "newspaper_sales";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve vendor users from the database
$sql = "SELECT * FROM users WHERE role = 'vendor'";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard - Vendor Users</title>
</head>
<body>

	<h1>Admin Dashboard - Vendor Users</h1>

	<table>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Phone</th>
			<th>Address</th>
			<th>Action</th>
		</tr>
		<?php while ($row = $result->fetch_assoc()) { ?>
			<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['email']; ?></td>
				<td><?php echo $row['phone']; ?></td>
				<td><?php echo $row['address']; ?></td>
				<td><a href="edit_user.php?id=<?php echo $row['id']; ?>">Edit</a> | <a href="delete_user.php?id=<?php echo $row['id']; ?>">Delete</a></td>
			</tr>
		<?php } ?>
	</table>

</body>
</html>

<?php

// Close the database connection
$conn->close();

?>
