<?php
if(isset($_POST['subscribe'])){

    include 'connect.php';

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);

    $sql = "INSERT INTO subscriber (name, email) VALUES (' $name', '$email')";

    $result = mysqli_query($con, $sql);

    if(!$result){
        die('Could not post data!' . mysqli_error());
    }else{
       header('location: index.php?Thank You for Subscribing to Katsenews!');
       exit() ;
    }

}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width,minimum-scale=1">
		<title>Newsletter</title>
		<link href="style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css">
	</head>
	<body>

        <div class="newsletter-popup">
    <div class="newsletter-popup-container">

        <a href="#" class="newsletter-popup-close-btn">&times;</a>

        <h3><i class="fa-regular fa-envelope"></i>Subscribe To Our Newsletter</h3>

        <p>Join our subscribers list to get the latest news, updates, and special offers directly in your inbox.</p>

        <form action="news.php" method="POST">
            <input type="text" name="name" placeholder="Your name" required><br>
            <input type="email" name="email" placeholder="Your Email" required><br>
            <button type="submit" name="subscribe">Subscribe</button>
        </form>

        <p class="newsletter-msg"></p>

    </div>
</div>
           


	</body>
</html>