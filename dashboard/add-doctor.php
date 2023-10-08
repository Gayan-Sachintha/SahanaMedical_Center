<!doctype html>
<html lang="en">

    
<?php include 'includes/head.php'; ?>
<?php
if(isset($_POST['addDoctor'])){
    $firstname = postData('firstname');
    $lastname = postData('lastname');
    $username = postData('username');
    $password = postData('password');
    $specialization = postData('specialization');
    $nic = postData('nic');
    $mobile = postData('mobile');
    $password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO `doctors`(`username`, `password`, `first_name`, `last_name`, `mobile`, `specialization`, `nic`) VALUES ('$username','$password','$firstname','$lastname','$mobile','$specialization','$nic')";
    $result = mysqli_query(db(), $sql);
    if($result){
        redirect("doctors.php?code=4");
    } else {
        redirect("add-doctor.php?code=69");
    }
    die();
}
?>
    <body data-sidebar="dark" data-layout-mode="light">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            
        <?php include 'includes/topbar.php'; ?>
        <?php include 'includes/sidebar.php'; ?>
            

            

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

            <div class="page-content">
                    <div class="container-fluid">

                
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title">Add Doctor</h4>

                                        <form action="add-doctor.php" method="POST">
                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-2 col-form-label">Doctor's First Name</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" name="firstname" id="example-text-input" required>
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-2 col-form-label">Doctor's last Name</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" name="lastname" id="example-text-input" required>
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-2 col-form-label">Doctor's Email / Username (Both are same)</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" name="username" id="example-text-input" required>
                                                </div>
                                            </div>

                                

                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-2 col-form-label">Doctor's Password</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" name="password" id="example-text-input" required>
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-2 col-form-label">Doctor's Specialization</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" name="specialization" id="example-text-input" required>
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-2 col-form-label">Doctor's NIC</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" name="nic" id="example-text-input" required>
                                                </div>
                                            </div>
                                            
                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-2 col-form-label">Doctor's Mobile</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" name="mobile" id="example-text-input" required>
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <div class="col-md-10">
                                                <button type="submit" name="addDoctor" class="btn btn-success waves-effect btn-label waves-light"><i class="bx bx-check-double label-icon"></i> Add Doctor</button>
                                                </div>
                                            </div>
                                        
                                        
                                        </form>

                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->


                    </div> <!-- container-fluid -->
                </div>

                

                
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <?php include 'includes/footer.php'; ?>


        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>
        <?php include 'includes/js.php'; ?>

        
    </body>


</html>