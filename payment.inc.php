<?php


if(isset($_POST['submit']))
{	 
	 $email= $_POST['email'];
	 $phone = $_POST['phone'];
	 $Tid = $_POST['Tid'];
	 $amount = $_POST['amount'];
     $method = $_POST['method'];
	 $sql = "INSERT INTO payment (Email,Phone,Tid,Amount,Method)
	 VALUES ('$email','$phone','$Tid', '$amount','$method')";
	 if (mysqli_query($conn, $sql)){
		header("location: payment.php?upload=successfull");
	 } else {
header("location: payment.php?upload=failed");
	 }
	 mysqli_close($conn);
}

if(isset($_POST['submit']))
{	 
	 $email= $_POST['emaile'];
	 $phone = $_POST['phonee'];
	 $Tid = $_POST['Tid'];
	 $amount = $_POST['amounte'];
     $method = $_POST['methode'];
	 $sql = "INSERT INTO payment (Email,Phone,Tid,Amount,Method)
	 VALUES ('$email','$phone','$Tid', '$amount','$method')";
	 if (mysqli_query($conn, $sql)){
		header("location: payment.php?upload=successfull");
	 } else {
header("location: payment.php?upload=failed");
	 }
	 mysqli_close($conn);
}
?>