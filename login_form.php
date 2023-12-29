<?php
@include 'config.php';

if(isset($_POST['submit'])){
  $email = mysqli_real_escape_string($conn,$_POST['email']) ;
  $pass = md5($_POST['password']);  

  $select = "SELECT * FROM user_form WHERE email = '$email'&& password = '$pass'";
  $result = mysqli_query($conn, $select);

  if(mysqli_num_rows($result) > 0){

  
    $row = mysqli_fetch_array($result);

    if($row['user_type'] =='admin'){
        $_SESSION['admin_name'] = $row['name'];
        header('location: admin_page.php');
    }elseif($row['user_type'] =='user'){
        $_SESSION['user_name'] = $row['name'];
        header('location: user_page.php');
    
    
}else{
    $error[] = 'incorrect email or password!';
}
}

};

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="form_container">
<form action="" method="post">
    <h3>login now</h3>
    <?php
    if(isset($error)){
        foreach($error as $error){
            echo '<span class= "error-msg">'.$error.'</span>';
        };
    };
    
    ?>
    <i class="fas fa-user"></i><input type="email" name="email" id="" required placeholder="enter your email">
    <i class="fas fa-lock"></i><input type="password" name="password" id="" required placeholder="enter your password">
    <input type="submit" name="submit" value="LOGIN" class="form-btn">
    <p>Don't have an account?<a href="register.php">register now</a></p>
    
</form>
</div>
</body>
</html>