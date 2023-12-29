<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
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
  border: none;
}
</style>
<body>
    <!-- Your registration form code goes here -->
    <form action="register.php" method="post">
        <label for="gender">Gender:</label>
        <select name="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <label for="confirm_password">Confirm Password:</label>
        <input type="password" name="confirm_password" required><br>

        <label for="country">Country:</label>
        <input type="text" name="country" required><br>

        <label for="telephone">Telephone:</label>
        <input type="tel" name="telephone" required><br>

        <input type="submit" name="submit" value="Register">
    </form>

   
<?php
// Start a session
session_start();

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gender = $_POST["gender"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    $country = $_POST["country"];
    $telephone = $_POST["telephone"];
    if ($password != $confirm_password) {
        echo "Password and confirm password do not match";
    } else {
        $sql = "INSERT INTO users (gender, name, email, password, country, telephone) VALUES ('$gender', '$name', '$email', '$password', '$country', '$telephone')";
        if ($conn->query($sql) === TRUE) {
            $_SESSION["user_email"] = $email;
            header("Location: wendyD.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
?>

// Close the database