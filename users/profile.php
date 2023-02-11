<?php
  require_once '../manager/includes/functions/config.php';
    blockUrlHackers('login.php', $_SESSION['userId']);
    $userId = $_SESSION['userId'];

            if (isset($_POST['submit'])) {
                $result = updateUser($_POST, $userId);
                if ($result === true) {
                    echo "<script>alert('Profile Updated')</script>";
                } else if (is_array($result)) {
                    foreach ($result as $err) {
                        echo "<script>alert('$err')</script>";
                    }
                } else {
                    echo "<script>alert('$result')</script>";
                }
            }

?>
<?php require_once 'inc/header.php'; ?>



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="p-0 text-center">
                                    <div class="member-card">
                                        <div class="thumb-xl member-thumb m-b-10 center-page">
                                            <img src="assets/images/users/avatar-1.jpg" class="rounded-circle img-thumbnail" alt="profile-image">
                                            <i class="mdi mdi-star-circle member-star text-success" title="verified user"></i>
                                        </div>

                                        <div class="">
                                            <h5 class="m-b-5 mt-3"><?= $firstname . " " . $lastname; ?></h5>
                                            <p class="text-muted">@<?= $lastname; ?></p>
                                        </div>

                                        <p class="text-muted m-t-10">
                                            Hello <?= $firstname . " " . $lastname; ?>, Welcome to your profile
                                        </p>


                                    </div>

                                </div> <!-- end card-box -->

                            </div> <!-- end col -->
                        </div> <!-- end row -->

                        <div class="m-t-30">
                            <ul class="nav nav-tabs tabs-bordered">
                                <li class="nav-item">
                                    <a href="#home-b1" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                        Profile
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#profile-b1" data-toggle="tab" aria-expanded="true" class="nav-link">
                                        Settings
                                    </a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane active" id="home-b1">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- Personal-Information -->
                                            <div class="panel panel-default panel-fill">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">Personal Information</h3>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="m-b-20">
                                                        <strong>Full Name</strong>
                                                        <br>
                                                        <p class="text-muted"><?= $firstname . " " . $lastname; ?></p>
                                                    </div>
                                                    <div class="m-b-20">
                                                        <strong>Mobile</strong>
                                                        <br>
                                                        <p class="text-muted"><?= $phone; ?></p>
                                                    </div>
                                                    <div class="m-b-20">
                                                        <strong>Email</strong>
                                                        <br>
                                                        <p class="text-muted"><?= $email; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Personal-Information -->

                                        </div>


                                    </div>
                                </div>
                                <div class="tab-pane" id="profile-b1">
                                    <!-- Personal-Information -->
                                    <div class="panel panel-default panel-fill">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Edit Profile</h3>
                                        </div>
                                        <div class="panel-body">
                                            <form role="form" method="post">
                                                <div class="form-group">
                                                    <label for="FullName">First Name</label>
                                                    <input type="text" value="<?= $firstname; ?>" id="FullName" class="form-control" required name="fname">
                                                </div>

                                                <div class="form-group">
                                                    <label for="FullName">Last Name</label>
                                                    <input type="text" value="<?= $lastname; ?>" id="FullName" class="form-control" required name="lname">
                                                </div>
                                                <div class="form-group">
                                                    <label for="Email">Email</label>
                                                    <input type="email" required value="<?= $email; ?>" name="email" id="Email" class="form-control">
                                                </div>

                                                <div class="form-group">
                                                    <label for="email">Phone Number</label>
                                                    <input type="text" required value="<?= $phone; ?>" name="phone" id="email" class="form-control">
                                                </div>

                                                <div class="form-group">
                                                    <label for="Password">Password (Leave empty if you don't want to change your password)</label>
                                                    <input type="password" placeholder="Change Password" id="Password" class="form-control" name="password">
                                                </div>
                                                <div class="form-group">
                                                    <label for="RePassword">Confirm Password</label>
                                                    <input type="password" placeholder="Confirm Password" id="RePassword" class="form-control" name="cpassword">
                                                </div>

                                                <input type="hidden" name="realpassword" value="<?= $password; ?>">

                                                <button name="submit" class="btn btn-primary waves-effect waves-light w-md" type="submit">Update Profile</button>
                                            </form>

                                        </div>
                                    </div>
                                    <!-- Personal-Information -->
                                </div>
                            </div>
                        </div>

                    </div> <!-- container -->


                    <div class="footer">
                        <div class="pull-right hide-phone">
                            Project Completed <strong class="text-custom">57%</strong>.
                        </div>
                        <div>
                            <strong>Simple Admin</strong> - Copyright © 2017 - 2019
                        </div>
                    </div>

                </div> <!-- content -->

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



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
