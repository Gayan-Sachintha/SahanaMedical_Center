<!doctype html>
<html lang="en">

    
<?php include 'includes/head.php'; ?>
<?php

if(isset($_GET['patient'])){
    $patientID = $_GET['patient'];
} else {
    redirect("patients.php?code=8");
}

if(isset($_POST['updatePatient'])){
    $firstname = postData('firstname');
    $lastname = postData('lastname');
    $username = postData('username');
    $password = postData('password');
    $gender = postData('gender');
    $address = postData('address');
    $nic = postData('nic');
    $mobile = postData('mobile');

    if(empty($password)){
        $password = getPatientData($patientID, "password");
    } else {
        $password = password_hash($password, PASSWORD_DEFAULT);
    }

    $sql = "UPDATE
            `users`
            SET
                `username` = '$username',
                `first_name` = '$firstname',
                `last_name` = '$lastname',
                `password` = '$password',
                `gender` = '$gender',
                `mobile` = '$mobile',
                `address` = '$address',
                `nic` = '$nic'
            WHERE id = $patientID";

    $result = mysqli_query(db(), $sql);
    if($result){
        redirect("view-patient.php?patient=$patientID&code=9");
    } else {
        redirect("view-patient.php?code=69");
    }

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

                                        <h4 class="card-title">View/Update Patient (ID: <?=getPatientData($patientID, "id");?>)</h4>
                                        <form action="view-patient.php?patient=<?=$patientID;?>" method="post">

                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Patient First Name</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" name="firstname" value="<?=getPatientData($patientID, "first_name");?>" id="example-text-input" required>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Patient last Name</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" name="lastname" value="<?=getPatientData($patientID, "last_name");?>" id="example-text-input" required>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Patient Email / Username (Both are same)</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" name="username" value="<?=getPatientData($patientID, "username");?>" id="example-text-input" required>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Patient Password</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" name="password" id="example-text-input">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label class="col-md-2 col-form-label">Gender</label>
                                            <div class="col-md-10">
                                                <select class="form-select" name="gender" required>
                                                    <option value="1" <?php if(getPatientData($patientID, "gender") == "1") {echo "selected";} ?>>Male</option>
                                                    <option value="2" <?php if(getPatientData($patientID, "gender") == "2") {echo "selected";} ?>>Female</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Patient Address</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" name="address" value="<?=getPatientData($patientID, "address");?>" id="example-text-input" required>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Patient NIC</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" name="nic" value="<?=getPatientData($patientID, "nic");?>" id="example-text-input" required>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Patient Mobile</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" name="mobile" value="<?=getPatientData($patientID, "mobile");?>" id="example-text-input" required>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <div class="col-md-10">
                                            <button type="submit" name="updatePatient" class="btn btn-success waves-effect btn-label waves-light"><i class="bx bx-check-double label-icon"></i> Update Patient</button>
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