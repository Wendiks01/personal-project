<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<style>
	form {
  max-width: 500px;
  margin: 0 auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-shadow: 0 0 10px #ccc;
}

label {
  display: block;
  margin-bottom: 10px;
}

input, select {
  display: block;
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  border-radius: 5px;
  border: 1px solid #ccc;
  font-size: 16px;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  border: none
}
</style>
<body>
    <!-- Your login form code goes here -->
	<form action="login.php" method="post">
    <label for="email">Email:</label>
    <input type="email" name="email" required><br>

    <label for="password">Password:</label>
    <input type="password" name="password" required><br>

    <input type="submit" name="submit" value="Login">
</form>
<?php
// Start a session
session_start();

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_db";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        switch ($user["role"]) {
            case "admin":
                $_SESSION["user_role"] = "admin";
                header("Location: admin.php");
                break;
            case "customer":
                $_SESSION["user_role"] = "customer";
                header("Location: customer.php");
                break;
            case "vendor":
                $_SESSION["user_role"] = "vendor";
                header("Location: vendor.php");
                break;
        }
    } else {
        echo "Invalid email or password";
    }
}

// Close the database connection
$conn->close();
?>

</body>
</html>
