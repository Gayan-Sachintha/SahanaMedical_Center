<!doctype html>
<html lang="en">

    
<?php include 'includes/head.php'; ?>
<?php

if(isset($_GET['action'])){
    if($_GET['action'] == "removeEmployee"){
        $docID = $_GET['empID'];
        $sql = "DELETE FROM `staff` WHERE `staff`.`id` = $docID";
        $result = mysqli_query(db(), $sql);

        if($result){
            redirect("employees.php?code=11");
        } else {
            redirect("employees.php?code=69");
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
                                            <h5 class="mb-0 card-title flex-grow-1">Employees List</h5>
                                        </div>
                                    </div>
                                    
                                    <div class="card-body">
                                        
                                        <div class="table-responsive">
                                            <table class="table table-bordered align-middle nowrap">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Employee's Name</th>
                                                        <th scope="col">Employee's Email</th>
                                                        <th scope="col">Mobile</th>
                                                        <th scope="col">Address</th>
                                                        <th scope="col">NIC</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                <?php 
                                                $employees = fetchStaff("employee");
                                                $i = 01;
                                                foreach($employees as $employee){ ?>
                                                    <tr>
                                                        <th scope="row"><?=$i;?></th>
                                                        <td><?=$employee['first_name']; ?> <?=" ";?> <?=$employee['last_name']; ?></td>
                                                        <td><?=$employee['username']; ?></td>
                                                        <td><?=$employee['mobile']; ?></td>
                                                        <td><?=$employee['address']; ?></td>
                                                        <td><?=$employee['nic']; ?></td>
                                                        <td>
                                                            <ul class="list-unstyled hstack gap-1 mb-0">
                                                                <li data-bs-toggle="tooltip" data-bs-placement="top" aria-label="View">
                                                                    <a href="view-employee.php?employee=<?=$employee['id']; ?>"" class="btn btn-sm btn-soft-primary"><i class="mdi mdi-eye-outline"></i></a>
                                                                </li>
                                                                <li data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Delete">
                                                                    <a href="employees.php?action=removeEmployee&empID=<?=$employee['id']; ?>" class="btn btn-sm btn-soft-danger"><i class="mdi mdi-delete-outline"></i></a>
                                                                </li>
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