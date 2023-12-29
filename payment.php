
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Claim Job - Company Profile</title>
	<meta name="description" content="Portfolio Management System for Jobs" />
	<meta name="keywords" content="job, work, resume, applicants, application, employee, employer, hire, hiring, human resource management, hr, online job management,Portfolio Management System for Jobs, company, worker, career, recruiting, recruitment" />
	<meta name="author" content="BwireSoft">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta property="og:image" content="http://<?php echo "$actual_link"; ?>/images/banner.jpg" />
    <meta property="og:image:secure_url" content="https://<?php echo "$actual_link"; ?>/images/banner.jpg" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="500" />
    <meta property="og:image:height" content="300" />
    <meta property="og:image:alt" content="Claim Job" />
    <meta property="og:description" content="Portfolio Management System for Jobs" />

	<link rel="shortcut icon" href="../images/ico/favicon.png">

	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link href="../css/style.css" rel="stylesheet">
	
	
</head>
<style>
body {
    width:100%;
  font-family: Arial;
  font-size: 17px;
  margin-top:100px;
 
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
    width:100%;
  background-color:;
  align-items:center;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color:#33B6CB ;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 150px;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
  text-align:center;
  margin-left:600px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
  
}
</style>
</head>
<body>
    <div class="containe1">
<h1 style="text-align:center;">Welcome to Claim Job Payment</h1>
<p style="text-align:center; font-size:20px;">With Claim Job it is Pay as you GO!!!</p>
<H4 style="text-align:center;">Dear Customer, Claim Job accepts only two Methods of Payment either MOMO OR Orange Money</H4>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary " data-toggle="modal" data-target="#exampleModal">
   Pay Now
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Payment Method</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
    
      
              <h5 style="text-align:center;"id="intro">Kindly Make a Deposite throught one of the following number and fill the form below thank you!!!</h5>
         
          <div style="display:flex; justify-content:space-between;">
            <img src="img/orange.png" onclick="myFunction()" id="mY"style="height:350px;width:250px;float:left;" >
 
            <div id="myDIV" style="display:none;float:right;">
            <h5>Deposite throught this 654195432 and fill the form below thank you!!!</h5>
            <form action="payment.inc.php" method="POST">
            <label for="">Email</label>
            <input type="email" name="emaile" require>
            <label for="">Phone Number</label>
            <input type="number" name="phonee" require>
            <label for="">Transaction ID</label>
            <input type="number" name="Tide" require>
            <label for="">Amount Deposited</label>
            <input type="number" name="amounte" require>
            <input type="text" name="methode" value="1" style="display:none;">

            </div>
            <img src="img/mtn.png"id="my" onclick="myFun()" alt=".." style="width:200px;float:right;">
             
            <div id="yo"  style="display:none;float:left;">
            <h5>Deposite throught this 654195432 and fill the form below thank you!!!</h5>
            <label for="">Email</label>
            <input type="email" name="email" require>
            <label for="">Phone Number</label>
            <input type="number" name="phone" require>
            <label for="">Transaction ID</label>
            <input type="number" name="Tid" require>
            <label for="">Amount Deposited</label>
            <input type="number" name="amount" require>
            <input type="text" name="method" value="2" style="display:none;">
            </div>
            </div>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
        <button type="submit" class="btn btn-primary" name="submit">Confirm</button>

      </div>
      </form>
    </div>
  </div>
  
</div>
<?php
							$fullUrl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

							if(strpos($fullUrl,"upload=success")==true){
								echo "<p style='color:green;font-size:25px;font-weight:bold; text-align:center;'>payment was successfull </p>";
							}
							if(strpos($fullUrl,"upload=failed")==true){
								echo "<p style='color:red;font-size:25px;font-weight:bold; text-align:center;'> sorry payment failed  </p>";
							}
							elseif(strpos($fullUrl,"upload=filepb")==true){
								echo "<p style='color:red;font-size:25px;font-weight:bold;'>You need to upload a proper file type!</p>";
							}
							elseif(strpos($fullUrl,"upload=fileError")==true){
								echo "<p style='color:red;font-size:25px;font-weight:bold;'>You had an error</p>";
							}
							elseif(strpos($fullUrl,"upload=fileSize")==true){
								echo "<p style='color:red;font-size:25px;font-weight:bold;'>file size is to big!</p>";
							}
							elseif(strpos($fullUrl,"upload=stmt2")==true){
								echo "<p style='color:red;font-size:25px;font-weight:bold;'>Datanot submit to the database</p>";
							}
							elseif(strpos($fullUrl,"upload=stmt1")==true){
								echo "<p style='color:red;font-size:25px;font-weight:bold;'>database connection failed</p>";
							}
							?>
			
<script>
    function myFunction() {
  var x = document.getElementById("myDIV");
  var z = document.getElementById("intro");
  if (x.style.display === "none") {
    x.style.display = "block";
    z.style.display = "none";
  } else {
    x.style.display = "none";
    z.style.display = "block";
  }
  var y = document.getElementById("my");
  if (x.style.display === "block") {
    y.style.display = "none";
  } else {
    y.style.display = "block";
  }

}

function myFun(){
  var x = document.getElementById("yo");
  var z = document.getElementById("intro");
  if (x.style.display === "none") {
    x.style.display = "block";
    z.style.display = "none";
  } else {
    x.style.display = "none";
    z.style.display = "block";
  }
  var y = document.getElementById("mY")
  if (x.style.display === "block") {
    y.style.display = "none";
  } else {
    y.style.display = "block";
  }

}

</script>

   
</div>
</body>
</html>
