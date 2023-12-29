<?php
include "conn.php";

  if (isset($_POST['submit'])) {

    $name = $_POST['name'];

    $phone = $_POST['phone'];

    $quantity = $_POST['quantity'];

    $location = $_POST['location'];

    
    

    //check connection
    

    $sql = "INSERT INTO `users`(`name`, `phone`, `quantity`, `location`) 

           VALUES ('$name','$phone','$quantity','$location')";

    $result = $conn->query($sql);
    
    

    if ($result == TRUE) {

      echo "New record created successfully.";

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    }

    $conn->close();

  } 

?> 
<!DOCTYPE html>
<html>
<head>
	<title>Customer Order Form</title>
	
</head>
<style>
	body {
	font-family: Arial, sans-serif;
	width: auto;
	}

h2 {
	margin-bottom: 20px;
	text-align: center
}

form {
	max-width: 500px;
	margin: 0 auto;
	padding: 20px;
	background-color: #fff;
	border-radius: 5px;
	box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

label {
	display: block;
	margin-bottom: 5px;
	font-weight: bold;
}

input[type="text"],
input[type="tel"],
input[type="number"] {
	padding: 10px;
	margin-bottom: 20px;
	border: 1px solid #ccc;
	border-radius: 5px;
	font-size: 16px;
	width: 100%;
	box-sizing: border-box;
}

input[type="submit"] {
	background-color: #4CAF50;
	color: #fff;
	padding: 10px;
	border: none;
	border-radius: 5px;
	font-size: 16px;
	cursor: pointer;
	transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
	background-color: #3e8e41;
}

	</style>
<body>

	<h2>Customer Order Form</h2>

	<form action="" method="post">
		<label for="name">Name:</label>
		<input type="text" id="name" name="name" required><br>

		<label for="phone">Phone Number:</label>
		<input type="tel" id="phone" name="phone" required><br>

		<label for="quantity">Quantity Ordered:</label>
		<input type="number" id="quantity" name="quantity" required><br>

		<label for="location">Location:</label>
		<input type="text" id="location" name="location" required><br>

		<input type="submit" value="Submit Order">
	</form>


</body>
</html>
