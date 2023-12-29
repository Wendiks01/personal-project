<?php
$toEmail = "";
$fromName = "";
$fromEmail = "";

$postData = $statusMsg = $valErr = "";
$status = "error";

if(isset($_POST['submit'])){
 
    $postData = $_POST;
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);
}
    if(empty($name)){
        $valErr .= 'Please enter your name.<br>';
    }
    if(empty($email) || filter_var($email, FILTER_VALIDATE_EMAIL) === false){
        $valErr .= 'Please enter a valid email.<br>';
    }
    if(empty($subject)){
        $valErr .= 'Please enter subject.<br>';
    }
    if(empty($message)){
        $valErr .= 'Please enter your message.<br>';
    }
    if(empty($valErr)){
        
        $subject = 'contact request submitted at wendyndikum2@gmail.com';
        $htmlContent = '
        <h2>Contact Request Details</h2>
        <p><b>Name: </b>".$name."</p>
        <p><b>Email: </b>".$email."</p>
        <p><b>Subject: </b>".$subject."</p>
        <p><b>Message: </b>".$message."</p>
        ';

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        $headers .= 'From:'.$fromName.' <'.$fromEmail.'>' . "\r\n";

        mail($toEmail, $subject, $htmlContent, $headers);

        $status = 'success';
        $status = 'Thank you! Your contact has been submitted successfully, we will get back to you soon.';
        $postData = '';
    }
    ?>
    