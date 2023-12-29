<?php

include_once 'contact.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
    <link rel="stylesheet" href="css/form.css">
</head>
<body>
    <?php
    if(!empty($_POST["submit"])){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $message = $_POST["message"];
        $toEmail = $_POST["wendyndikum2@gmail.com"];

        $mailHeaders = "Name: " . $name .
        "\r\n Email: " . $email .
        "\r\n Phone: " . $phone .
        "\r\n Message: " . $message . "\r\n";

        if(mail($toEmail, $name, $mailHeaders)){
            $message = "Your information is recieved Successfully.";

        }
    }
    ?>
    <div class="container">
        <div class="wrapper">
            <h2>Contact Us</h2>
            <div class="contactfrm">

            <?php if(!empty($statusMsg)){ ?>
                <div class="status-msg <?php echo $status; ?>"><?php echo $statusMsg; ?></div>
               <?php }?>
<form action="mailto:wendyndikum2@gmail.com" method="post">
    <div class="form-input">
        <label for="name">Name</label>
        <input type="text" name="name" id="" placeholder="Enter your name"value="<?php echo !empty($postData['name'])?$postData['name']:''; ?>" required="">
    </div><br>
    <div class="form-input">
        <label for="email">Email</label>
        <input type="email" name="email" id="" placeholder="Enter your email"value="<?php echo !empty($postData['email'])?$postData['email']:''; ?>"required="">
    </div><br>
    <div class="form-input">
        <label for="subject">Subject</label>
        <input type="text" name="subject" id="" placeholder="Enter your subject"value="<?php echo !empty($postData['subject'])?$postData['subject']:''; ?>"required>
    </div><br>
    <div class="form-input">
        <label for="message">Message</label>
        <textarea name="message" id="" cols="30" rows="10" required placeholder="Enter your message here"<?php echo !empty($postData['message'])?$postData['message']:''; ?>"></textarea>
    </div><br>
    <input type="submit" name="submit"class="btn"value="Submit">
    <?php if(!empty($message)){ ?>
    <div class="Success">
        <strong><?php echo $message ?></strong>
    </div>
    <?php } ?>
</form>
            </div>
        </div>
        <div class="footer">
            <p>&copy; 2023 KatseNews.com All Rights Reserved | Design and developed by Wendiks</p>
        </div>
    </div>
</body>
</html>