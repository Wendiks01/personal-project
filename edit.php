<?php 
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>
<div class= "container-fluid">
    <div class="card shadow mb-4">
    

<h6 class="m-o font-weight-bold text-primary">EDIT Vendor Profile</h6>
</div>
<div class="card-body">
    <?php
    $conn = mysqli_connect("localhost","root","","phpadminpanel");
if(isset($_POST['edit_btn'])){
  $id = $_POST['edit_id'];
  $query = "SELECT * FROM admin_form WHERE id='$id'";
  $query_run = mysqli_query($conn, $query);

  foreach($query_run as $row ){
    ?>
    
                <form action="code.php" method="post">
                <div class="form-group">
                                    <input type="hidden" class="form-control form-control-user" 
                                            placeholder="Text" name="edit_id"value="<?php echo $row['id']?>">
                                        
                                </div>
<div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user"
                                            placeholder="First Name"name="edit_firstname"value="<?php echo $row['firstname']?>">
                                           
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" 
                                            placeholder="Last Name"name="edit_lastname"value="<?php echo $row['lastname']?>">
                                            
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" 
                                            placeholder="Email" name="edit_email"value="<?php echo $row['email']?>">
                                        
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" 
                                            placeholder="Password"name="edit_password"value="<?php echo $row['password']?>">
                                       
                                </div>
                                <a href="register.php" class="btn btn-danger">Cancel</a>
                                <button type="submit" name="updatebtn" class="btn btn-primary">Update</button>
                                </form>
                                <?php
  }
}
                                ?>
                                
                                

</div>
</div>
</div>
<?php 
include('includes/script.php');
include('includes/footer.php');
?>