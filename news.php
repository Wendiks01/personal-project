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