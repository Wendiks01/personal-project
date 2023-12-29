<?php

if (isset($_POST['create'])){
    include "db_conn.php";
    function validate($data){
        $data = trim($data); 
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;   
          
    }

    $name = validate($_POST['name']);
    $email = validate($_POST['email']);

    $user_data = 'name=' .$name. '&email=' .$email;

    if(empty($name)) {
        header("location:update.php?error=Name is required&user_data");
    }else if(empty($email)) {
        header("location:update.php?error=Email is required&user_data");
    }else{
        $sql = "INSERT INTO users(name, email) VALUES('$name', '$email')";
        $result = mysqli_query($conn, $sql);
        if($result){
            header("location:read.php?success=successfully created");

        }else{
            header("location:update.php?error=unknown.error.occurred&user_data");
        }
    }
}