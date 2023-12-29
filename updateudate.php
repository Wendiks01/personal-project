<?php

if (isset($_GET['id'])){

    include "db_conn.php";

    function validate($data){
        $data = trim($data); 
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;   
          
    }

    $id = validate($_GET['id']);

    $sql = "SELECT * FROM users WHERE id=$id";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) >0){
    $row = mysqli_fetch_assoc($result);

}else{
    header("Location: read.php");
}

}else if(isset($_POST['update'])){
    include "db_conn.php";
}
else{
    header("Location: read.php");
}
?>
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
    $id = validate($_POST['id']);

    $user_data = 'name=' .$name. '&email=' .$email;

    if(empty($name)) {
        header("location: update2.php?id=$id&error=Name is required&user_data");
    }else if(empty($email)) {
        header("location: update2.php?id=$id&error=Email is required&user_data");
    }else{
        $sql = "UPDATE users
        SET name='$name', email='$email'
        WHERE id=$id ";
        $result = mysqli_query($conn, $sql);
        if($result){
            header("location: read.php?success=successfully Updated");

        }else{
            header("location: update.php?error=unknown.error.occurred&user_data");
        }
    }
}else{
    header("Location: read.php");

}

