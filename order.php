<?php
// (A) PROCESS ORDER FORM
if (isset($_POST["name"])) {
  require "process.php"; 
  echo $result == "" 
    ? "<div class='notify'>Thank You! We have received your order</div>" 
    : "<div class='notify'>$result</div>" ;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" target="_self">
  <label>Name</label>
  <input type="text" name="name" required placeholder="enter your name"><br><br>
 
  <label>Email</label>
  <input type="email" name="email" required placeholder="enter your email"><br><br>
 
  <label>Quantity</label>
  <input type="number" name="qty" required placeholder="enter your quantity"><br><br>
  <input type="submit" value="Place Order">
</body>
</html>