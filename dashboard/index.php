<!doctype html>
<html lang="en">

    
<?php include 'includes/head.php'; ?>

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

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Dashboard</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                                            <li class="breadcrumb-item active">Dashboard</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card overflow-hidden">
                                    <div class="bg-primary bg-soft">
                                        <div class="row">
                                            <div class="col-7">
                                                <div class="text-primary p-3">
                                                    <h5 class="text-primary">Welcome Back !</h5>
                                                    <p>Sahama Medicare Dashboard</p>
                                                </div>
                                            </div>
                                            <div class="col-5 align-self-end">
                                                <img src="assets/images/profile-img.png" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="avatar-md profile-user-wid mb-4">
                                                    <img src="assets/images/users/avatar-1.jpg" alt="" class="img-thumbnail rounded-circle">
                                                </div>
                                                <h5 class="font-size-15 text-truncate"><?=getStaffUserData("first_name");?> <?=getStaffUserData("last_name");?></h5>
                                                <p class="text-muted mb-0 text-truncate"><?=getStaffUserData("type");?></p>
                                            </div>

                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Appointments</h4>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <p class="text-muted">Today</p>
                                                <h3><?=countOfTodayAppointments();?></h3>

                                                <div class="mt-4">
                                                    <a href="appointments.php?date=<?=currentDate();?>" class="btn btn-primary waves-effect waves-light btn-sm">View Today Appointments <i class="mdi mdi-arrow-right ms-1"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card mini-stats-wid">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1">
                                                        <p class="text-muted fw-medium">Total Doctors</p>
                                                        <h4 class="mb-0"><?=countOfDoctors();?></h4>
                                                    </div>

                                                    <div class="flex-shrink-0 align-self-center">
                                                        <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                                            <span class="avatar-title">
                                                                <i class='bx bx-plus-medical font-size-24'></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mini-stats-wid">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1">
                                                        <p class="text-muted fw-medium">Total Patients</p>
                                                        <h4 class="mb-0"><?=countOfPatients();?></h4>
                                                    </div>

                                                    <div class="flex-shrink-0 align-self-center ">
                                                        <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                            <span class="avatar-title rounded-circle bg-primary">
                                                                <i class="bx bx-user font-size-24"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mini-stats-wid">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1">
                                                        <p class="text-muted fw-medium">Total Appointments</p>
                                                        <h4 class="mb-0"><?=countOfTodayAppointments();?></h4>
                                                    </div>

                                                    <div class="flex-shrink-0 align-self-center">
                                                        <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                            <span class="avatar-title rounded-circle bg-primary">
                                                                <i class="bx bx-clipboard font-size-24"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-5">Latest 3 Appointments</h4>
                                        <ul class="verti-timeline list-unstyled">
                                            <?php
                                            $appointments = fetchAppointments3();

                                            foreach($appointments as $appointment) {?>
                                            <li class="event-list">
                                                <div class="event-timeline-dot">
                                                    <i class="bx bx-right-arrow-circle font-size-18"></i>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <h5 class="font-size-14"><?=$appointment['appointment_byName']; ?> <i class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"></i> DOC ID : <?=$appointment['appointment_toDoctor']; ?> <i class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"></i></h5>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <div>
                                                        <?=$appointment['appointment_Message']; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <?php } ?>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Latest (10) Patient Registrations</h4>
                                        <div class="table-responsive">
                                            <table class="table align-middle table-nowrap mb-0">
                                            <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Patient Name</th>
                                                        <th scope="col">Patient Email</th>
                                                        <th scope="col">Gender</th>
                                                        <th scope="col">Mobile</th>
                                                        <th scope="col">Address</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php 
                                                $patients = fetchPatients3();
                                                $i = 01;
                                                foreach($patients as $patient){ ?>
                                                    <tr>
                                                        <th scope="row"><?=$i;?></th>
                                                        <td><?=$patient['first_name'];?> <?=" ";?> <?=$patient['last_name'];?></td>
                                                        <td><?=$patient['username'];?></td>
                                                        <td><?php if($patient['gender'] == 1){echo "Male"; } else { echo "Female"; }?> </td>
                                                        <td><?=$patient['mobile'];?></td>
                                                        <td><?=$patient['address'];?></td>
                                                        
                                                    </tr>
                                                <?php $i++; } ?>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- end table-responsive -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                

                
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