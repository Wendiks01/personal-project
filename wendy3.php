<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
    <style>
        body{
            background-image: url("../images/img4.jpg");
    background-size:cover;
    background-position:center;
        }
        label {
            display: inline-block;
            width: 100px;
            text-align: right;
            margin-right: 10px;
        }
        input, select {
            margin-bottom: 10px;
        }
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
</head>
<body>

    <?php
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
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
        // Get user input
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
        $role = $_POST["role"];

        // Insert user into database
        $sql = "INSERT INTO users (username, email, password, role) VALUES ('$username', '$email', '$password', '$role')";
        if ($conn->query($sql) === TRUE) {
            echo "User registered successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // Close the database connection
    $conn->close();
    ?>

    <h2>User Registration</h2>

    <form action="register.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <label for="role">Role:</label>
        <select name="role" required>
            <option value="">Select a role</option>
            <option value="admin">Admin</option>
            <option value="customer">Customer</option>
            <option value="vendor">Vendor</option>
        </select><br>

        <input type="submit" name="submit" value="Register">
    </form>

</body>
</html>
