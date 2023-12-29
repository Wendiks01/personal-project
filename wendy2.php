
<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<style>
	body {
  font-family: Arial, sans-serif;
  background-color: #f5f5f5;
}

form {
  margin: auto;
  width: 300px;
  background-color: #fff;
  border-radius: 10px;
  padding: 20px;
  box-shadow: 0 0 10px rgba(0,0,0,0.2);
}

h1 {
  text-align: center;
  font-size: 2rem;
  color: #333;
  margin-bottom: 20px;
}

label {
  display: block;
  font-size: 1.2rem;
  margin-bottom: 5px;
  color: #333;
}

input[type="email"],
input[type="password"] {
  display: block;
  width: 100%;
  padding: 10px;
  margin-bottom: 15px;
  border: none;
  border-radius: 5px;
  box-sizing: border-box;
  font-size: 1.2rem;
  border: 1px solid #ccc;
}

input[type="submit"] {
  display: block;
  width: 100%;
  padding: 10px;
  margin-top: 20px;
  border: none;
  border-radius: 5px;
  background-color: #333;
  color: #fff;
  font-size: 1.2rem;
  cursor: pointer;
  transition: all 0.3s ease-in-out;
}

input[type="submit"]:hover {
  background-color: #444;
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
$username = "username";
$password = "password";
$dbname = "database";
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


