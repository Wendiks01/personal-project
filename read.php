<?php include "get.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Create</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
 <div class="box">
         <h4 class="display-4 text-center">CRUD TABLE</h4><br>
         <?php if(mysqli_num_rows($result)) { ?>

            <?php if (isset($_GET['error'])) { ?>
        <div class="alert alert-success" role="alert">
            <?php echo $_GET['success']; ?>
</div> 
<?php } ?>
         <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
  <?php
  $i = 0;
  while($rows = mysqli_fetch_assoc($result)){

  $i++;
  ?>
    <tr>
      <th scope="row"><?=$i?></th>
      <td><?=$rows['name']?></td>
      <td><?php echo $rows['email'];?></td>
      <td><a href="update.php" class="btn btn-secondary">Create</a></td>
      <td><a href="update2.php?id<?=$rows['id']?>" class="btn btn-danger">Update</a></td>
      <td><a href="delete.php?id<?=$rows['id']?>" class="btn btn-success">Delete</a></td>
    </tr>
    <?php }?>
  </tbody>
</table>
<?php }?>
 
 </div>
 </div>
</div>
</body>
</html>