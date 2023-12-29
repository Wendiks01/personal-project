<?php
session_start();
$conn = mysqli_connect('localhost','root','','admin_panel');

if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if($password === $cpassword){

    

    $insert = "INSERT INTO admin_form (username,email,password) VALUES ("$username","$email","$password")";
    $query_run = mysqli_query($conn, $insert);

    if($query_run)
    {
        echo "saved";
        $_SESSION['success'] = "Admin Profile Added";
        header('Location: register2.php');

    }else{
        $_SESSION['status'] = "Admin Profile Not Added";
        header('Location: register.php');
    }
    }
    else{
        $_SESSION['status'] = "Password and Confrim Password does not match";
        header('Location: register2.php'); 
    }
}
?>