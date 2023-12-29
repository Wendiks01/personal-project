<?php include 'create.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Update</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
</head>
<body>
    <div class="container">
        <h4 class="display-4 text-center">Update</h4>
    <?php if (isset($_GET['error'])) { ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $_GET['error']; ?>
</div> 
<?php } ?>
    <div class="form-group">
    <label for="name">Name</label>
    <input type="name" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Enter name" name="name" value="<?php if(isset($_GET['name']))
                                echo ($_GET['name']); ?>">
</div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email"value="<?php if(isset($_GET['email']))
                                echo ($_GET['email']); ?>">
  </div>
  
  <input type="text" name="id" value="<?=$row['id']?>" hidden>
  <button type="submit" class="btn btn-primary" name="Update">Update</button>
  <a href="read.php" class="btn btn-success">View</a>

</div>
</body>
</html>