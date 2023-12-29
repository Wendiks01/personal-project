<?php 
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>
<div class= "container-fluid">
    <div class="card shadow mb-4">
    

<h6 class="m-o font-weight-bold text-primary">EDIT Customer's Order</h6>
</div>
<div class="card-body">
    <?php
    $conn = mysqli_connect("localhost","root","","orders");
if(isset($_POST['edit_btn'])){
  $id = $_POST['edit_id'];
  $query = "SELECT * FROM users WHERE id='$id'";
  $query_run = mysqli_query($conn, $query);

  foreach($query_run as $row ){
    ?>
    
                <form action="../user/conn.php" method="post">
                <div class="form-group">
                                    <input type="hidden" class="form-control form-control-user" 
                                            placeholder="Text" name="edit_id"value="<?php echo $row['id']?>">
                                        
                                </div>
<div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user"
                                            placeholder="UserName"name="edit_name"value="<?php echo $row['name']?>">
                                           
                                    </div>
                                    
                                
                                
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="tel" class="form-control form-control-user"
                                            placeholder="Enter Phone number"name="edit_phone"value="<?php echo $row['phone_number']?>">
                                           
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="number" class="form-control form-control-user" 
                                            placeholder="quantity ordered"name="edit_quantity"value="<?php echo $row['quantity']?>">
                                       
                                </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user"
                                            placeholder="Enter Location"name="edit_location"value="<?php echo $row['location']?>"><br>
                                           
                                    </div>
                                    <div>
                                <a href="order.php" class="btn btn-danger">Cancel</a>
                                <button type="submit" name="updatesbtn" class="btn btn-primary">Update</button>
                                
  </div>
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