<?php 
include('includes/header.php');

?>
<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
        <div class="row justify-content-center">
        <div class="col-xl-8 col-lg-12 col-md-9">
                    
                    <div class="col-lg-10">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-12">Create an Account!</h1>
                            </div>
                            <form action="code.php" method="post">
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user"
                                            placeholder="UserName" name= "username">
                                    </div>
</div>

                                    
                                <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <input type="email" class="form-control form-control-user" 
                                        placeholder="Email Address" name= "email">
                                </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            placeholder="Password" name="password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            placeholder="Repeat Password" name="cpassword">
                                    </div>
                                </div>
                                <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                <input type="tel" id="phone" name="phone" class="form-control form-control-user"
                                            placeholder="Enter phone number" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user"
                                            placeholder="Enter Location" name="location">
                                    </div>
                                </div>
                                
                                <button type="submit" class="btn btn-primary btn-user btn-block" name="regbtn">
                                    Register Account
</button>
                                <hr>
                                <a href="index.php" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="index.php" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.html">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php 
include('includes/script.php');

?>