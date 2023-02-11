<?php

require_once '../manager/includes/functions/config.php';

            if (isset($_POST['submit'])) {
                $result = userRegister($_POST);
                if ($result === true) {
                    redirect_to("login");
                } else if (is_array($result)) {
                    foreach ($result as $err) {
                        echo "<script>alert('$err')</script>";
                    }
                } else {
                    echo "<script>alert('$result')</script>";
                }
            }

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Gentlecrypto Enterprise</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured website for Gentlecrypto Enterprise." />
        <meta content="World Brain Technology Ltd" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="./img/logo_md.png">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>

        <style>
.error{
    color:red;
    display:none;
}
</style>
    </head>


    <body>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="wrapper-page">

                            <div class="m-t-40 card-box">
                                <div class="text-center">
                                    <h2 class="text-uppercase m-t-0 m-b-30">
                                        <a href="../index.php" class="text-success">
                                        <span><img src="../img/logo_md.png" alt="Logo"></span>
                                        </a>
                                    </h2>
                                    <!--<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>-->
                                </div>
                                <div class="account-content">
                                <div class="form-group m-b-20">
                                            <div class="col-12">
                                                <div id="errb" class="form-control text-center" style="color:white; background-color:orange; display:none;"><i class="fa fa-exclamation-triangle" id="this"></i>
                                           
                                        </div>
                                        </div>
                                    <form class="form-horizontal" method="POST" action="">

                                        <div class="form-group m-b-20">
                                            <div class="col-12">
                                                <label for="fname">First Name</label>
                                                <input class="form-control" id="fname" type="text" name="fname" required placeholder="Enter first name">
                                        </div>
                                        </div>

                                        <div class="form-group m-b-20">
                                            <div class="col-12">
                                                <label for="lname">Last Name</label>
                                                <input class="form-control" type="text" id="lname" name="lname" required placeholder="Enter last name">
                                        </div>
                                        </div>

                                        <div class="form-group m-b-20">
                                            <div class="col-12">
                                                <label for="emailaddress">Email address</label>
                                                <input class="form-control" type="email" id="email" name="email" required placeholder="Enter your email address">
                                        </div>
                                        </div>

                                        <div class="form-group m-b-20">
                                            <div class="col-12">
                                                <label for="phone">Phone number</label>
                                                <input type="text" placeholder="Enter phone number" id="phone" required name="phone" class="form-control">
                                        </div>
                                        </div>

                                        <div class="form-group m-b-20">
                                            <div class="col-12">
                                                <div class="row">
                                                <label for="password" class="col-8">Password</label></div>
                                                <input class="form-control" id="password" type="password" required name="password" placeholder="Enter your password">
                                            
                                        </div>
                                        </div>

                                        <div class="form-group m-b-20">
                                            <div class="col-12">
                                            <div class="row">
                                                <label for="cpassword" class="col-8">Confirm Password</label>
</div><input class="form-control" type="password" required id="cpassword" name="cpassword" placeholder="Confirm your password">
                                            
                                            <i class="fa fa-exclamation-triangle error" id="econ" aria-hidden="true"></i>
                                        </div>
</div>



<div class="form-group m-b-20">
                                            <div class="col-12">
                                                <label for="address">Address</label>
                                                <textarea class="form-control" name="address"></textarea>
                                        </div>
                                        </div>
                                        <div class="form-group m-b-30">
                                            <div class="col-12">
                                                <div class="checkbox checkbox-primary">
                                                    <input id="term" type="checkbox">
                                                    <label for="checkbox5">
                                                        I accept <a href="#">Terms and Conditions</a>
                                                    </label>
                                                </div>
                                                <i class="fa fa-exclamation-triangle error" id="et" aria-hidden="true"></i>
                                            </div>
                                        </div>

                                        <div class="form-group account-btn text-center m-t-10">
                                            <div class="col-12">
                                                <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Register</button>
                                            </div>
                                            <p>Have an account? <a href="login">Login</a> </p>
                                        </div>

                                    </form>

                                    <div class="clearfix"></div>

                                </div>
                            </div>
                            <!-- end card-box-->


                        </div>
                        <!-- end wrapper -->

                    </div>
                </div>
            </div>
        </section>


        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
    </body>
</html>
