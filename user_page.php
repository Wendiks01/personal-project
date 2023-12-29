<?php
@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
  header('location:admin_page.php') ; 
}
?>


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER PAGE</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <div class="content">
        <h3>Hi, <span>USER</span></h3>
        <h1>Welcome <span><?php echo $_SESSION['user_name']?></span></h1>
        <p>This is a Userpage</p>
        <a href="login_form.php" class="btn">LOGIN</a>
        <a href="register.php" class="btn">Register</a>
        <a href="logout.php" class="btn">Logout</a>
    </div>

  </div>    
</body>
</html>