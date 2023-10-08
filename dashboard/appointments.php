<!doctype html>
<html lang="en">

    
<?php include 'includes/head.php'; ?>
<?php 
if(isset($_GET['action'])){
    if($_GET['action'] == "removeAppointment"){
        $appointmentId = $_GET['appointmentId'];
        $sql = "DELETE FROM `appointments` WHERE `appointments`.`id` = $appointmentId";
        $result = mysqli_query(db(), $sql);

        if($result){
            redirect("appointments.php?code=3");
        } else {
            redirect("appointments.php?code=69");
        }

    }
}


if($_GET['date']){
    $date = $_GET['date'];
} else {
    $date = "*";
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
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body border-bottom">
                                        <div class="d-flex align-items-center">
                                            <h5 class="mb-0 card-title flex-grow-1">Today Appointments</h5>
                                        </div>
                                    </div>
                                    
                                    <div class="card-body">
                                        
                                        <div class="table-responsive">
                                            <table class="table table-bordered align-middle nowrap">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Appointment ID</th>
                                                        <th scope="col">Patient Name</th>
                                                        <th scope="col">Patient Email</th>
                                                        <th scope="col">Doctor</th>
                                                        <th scope="col">Message</th>
                                                        <th scope="col">Date</th>
                                                        <?php if(!isUserEmployee()) {?>
                                                        <th scope="col">Action</th>
                                                        <?php } ?>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $appointments = fetchAppointments($date);
                                                    $i = 0;
                                                    foreach($appointments as $appointment) {
                                                    ?>
                                                    <tr>
                                                        <th scope="row"><?=$i;?></th>
                                                        <td><span class="badge badge-soft-success">#<?=$appointment['appointment_id'];?></span></td>
                                                        <td><?=$appointment['appointment_byName'];?></td>
                                                        <td><?=$appointment['appointment_byEmail'];?></td>
                                                        <td>Doctor ID : <?=$appointment['appointment_toDoctor'];?></td>
                                                        <td><?=$appointment['appointment_Message'];?></td>
                                                        <td><?=$appointment['appointment_Date'];?></td>
                                                        <?php if(!isUserEmployee()) {?>
                                                        <td>
                                                            <ul class="list-unstyled hstack gap-1 mb-0">
                                                                <li data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Delete">
                                                                    <a href="appointments.php?action=removeAppointment&appointmentId=<?=$appointment['id']; ?>" class="btn btn-sm btn-soft-danger"><i class="mdi mdi-delete-outline"></i></a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                        <?php } ?>
                                                    </tr>
                                                    <?php $i++;} ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        
                                        <!--end row-->
                                    </div>
                                </div><!--end card-->
                            </div><!--end col-->

                        </div><!--end row-->
                        

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