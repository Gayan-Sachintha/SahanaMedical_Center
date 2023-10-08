<!doctype html>
<html lang="en">

    
<?php include 'includes/head.php'; ?>
<?php 
if(isset($_GET['action'])){
    if($_GET['action'] == "removePatient"){
        $patId = $_GET['patId'];
        $sql = "DELETE FROM `users` WHERE `users`.`id` = $patId";
        $result = mysqli_query(db(), $sql);

        if($result){
            redirect("patients.php?code=2");
        } else {
            redirect("patients.php?code=69");
        }

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
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body border-bottom">
                                        <div class="d-flex align-items-center">
                                            <h5 class="mb-0 card-title flex-grow-1">Patients List</h5>
                                        </div>
                                    </div>
                                    
                                    <div class="card-body">
                                        
                                        <div class="table-responsive">
                                            <table class="table table-bordered align-middle nowrap">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Patient Name</th>
                                                        <th scope="col">Patient Email</th>
                                                        <th scope="col">Gender</th>
                                                        <th scope="col">Mobile</th>
                                                        <th scope="col">Address</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php 
                                                $patients = fetchPatients();
                                                $i = 01;
                                                foreach($patients as $patient){ ?>
                                                    <tr>
                                                        <th scope="row"><?=$i;?></th>
                                                        <td><?=$patient['first_name'];?> <?=" ";?> <?=$patient['last_name'];?></td>
                                                        <td><?=$patient['username'];?></td>
                                                        <td><?php if($patient['gender'] == 1){echo "Male"; } else { echo "Female"; }?> </td>
                                                        <td><?=$patient['mobile'];?></td>
                                                        <td><?=$patient['address'];?></td>
                                                        <td>
                                                            <ul class="list-unstyled hstack gap-1 mb-0">
                                                                <li data-bs-toggle="tooltip" data-bs-placement="top" aria-label="View">
                                                                    <a href="view-patient.php?patient=<?=$patient['id']; ?>" class="btn btn-sm btn-soft-primary"><i class="mdi mdi-eye-outline"></i></a>
                                                                </li>
                                                                <?php if(!isUserEmployee()) {?>
                                                                <li data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Delete">
                                                                    <a href="patients.php?action=removePatient&patId=<?=$patient['id']; ?>" class="btn btn-sm btn-soft-danger"><i class="mdi mdi-delete-outline"></i></a>
                                                                </li>
                                                                <?php } ?>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                <?php $i++; } ?>
                                                    
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