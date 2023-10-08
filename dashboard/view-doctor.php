<!doctype html>
<html lang="en">

    
<?php include 'includes/head.php'; ?>

<?php
if(isset($_GET['doctor'])){
    $docID = $_GET['doctor'];
} else {
    redirect("doctors.php?code=5");
}
?>

<?php
if(isset($_POST['updateDoctor'])){
    $firstname = postData('firstname');
    $lastname = postData('lastname');
    $username = postData('username');
    $specialization = postData('specialization');
    $nic = postData('nic');
    $mobile = postData('mobile');

    $password = postData('password');
    if(empty($password)){
        $password = getDoctorData($docID, "password");
    } else {
        $password = password_hash($password, PASSWORD_DEFAULT);
    }

    $sql = "UPDATE `doctors` SET 
    `first_name` = '$firstname', 
    `last_name` = '$lastname',
    `username` = '$username',
    `password` = '$password',
    `specialization` = '$specialization',
    `nic` = '$nic',
    `mobile` = '$mobile'
     WHERE `doctors`.`id` = $docID";
    $result = mysqli_query(db(), $sql);
    if($result){
        redirect("view-doctor.php?doctor=$docID&code=6");
    } else {
        redirect("view-doctor.php?code=69");
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

                                        <h4 class="card-title">View/Update Doctor (ID:<?=getDoctorData($docID, "id");?>)</h4>

                                        <form action="view-doctor.php?doctor=<?=$docID;?>" method="POST">
                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-2 col-form-label">Doctor's First Name</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" name="firstname" value="<?=getDoctorData($docID, "first_name");?>" id="example-text-input" required>
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-2 col-form-label">Doctor's last Name</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" name="lastname" value="<?=getDoctorData($docID, "last_name");?>"  id="example-text-input" required>
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-2 col-form-label">Doctor's Email / Username (Both are same)</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" name="username" value="<?=getDoctorData($docID, "username");?>"  id="example-text-input" required>
                                                </div>
                                            </div>

                                

                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-2 col-form-label">Doctor's Password</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" name="password" id="example-text-input" >
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-2 col-form-label">Doctor's Specialization</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" name="specialization" value="<?=getDoctorData($docID, "specialization");?>"  id="example-text-input" required>
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-2 col-form-label">Doctor's NIC</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" name="nic" value="<?=getDoctorData($docID, "nic");?>" id="example-text-input" required>
                                                </div>
                                            </div>
                                            
                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-2 col-form-label">Doctor's Mobile</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" name="mobile" value="<?=getDoctorData($docID, "mobile");?>" id="example-text-input" required>
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <div class="col-md-10">
                                                <button type="submit" name="updateDoctor" class="btn btn-success waves-effect btn-label waves-light"><i class="bx bx-check-double label-icon"></i> Update Doctor</button>
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