<!doctype html>
<html lang="en">

    
<?php include 'includes/head.php'; ?>
<?php

if(isset($_GET['action'])){
    if($_GET['action'] == "removeDoctor"){
        $docID = $_GET['docId'];
        $sql = "DELETE FROM `doctors` WHERE `doctors`.`id` = $docID";
        $result = mysqli_query(db(), $sql);

        if($result){
            redirect("doctors.php?code=1");
        } else {
            redirect("doctors.php?code=69");
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
                                            <h5 class="mb-0 card-title flex-grow-1">Doctors List</h5>
                                        </div>
                                    </div>
                                    
                                    <div class="card-body">
                                        
                                        <div class="table-responsive">
                                            <table class="table table-bordered align-middle nowrap">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Doctor's Name</th>
                                                        <th scope="col">Doctor's Email</th>
                                                        <th scope="col">Mobile</th>
                                                        <th scope="col">Specialization</th>
                                                        <th scope="col">NIC</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                <?php 
                                                $doctors = fetchDoctors();
                                                $i = 01;
                                                foreach($doctors as $doctor){ ?>
                                                    <tr>
                                                        <th scope="row"><?=$i;?></th>
                                                        <td>Dr.<?=$doctor['first_name']; ?> <?=" ";?> <?=$doctor['last_name']; ?></td>
                                                        <td><?=$doctor['username']; ?></td>
                                                        <td><?=$doctor['mobile']; ?></td>
                                                        <td><?=$doctor['specialization']; ?></td>
                                                        <td><?=$doctor['nic']; ?></td>
                                                        <td>
                                                            <ul class="list-unstyled hstack gap-1 mb-0">
                                                                <li data-bs-toggle="tooltip" data-bs-placement="top" aria-label="View">
                                                                    <a href="view-doctor.php?doctor=<?=$doctor['id']; ?>"" class="btn btn-sm btn-soft-primary"><i class="mdi mdi-eye-outline"></i></a>
                                                                </li>
                                                                <?php if(!isUserEmployee()) {?>
                                                                <li data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Delete">
                                                                    <a href="doctors.php?action=removeDoctor&docId=<?=$doctor['id']; ?>" class="btn btn-sm btn-soft-danger"><i class="mdi mdi-delete-outline"></i></a>
                                                                </li>
                                                                <?php } ?>
                                                            </ul>
                                                        </td>
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