<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

<div data-simplebar class="h-100">

    <!--- Sidemenu -->
    <div id="sidebar-menu">
        <!-- Left Menu Start -->
        <ul class="metismenu list-unstyled" id="side-menu">
            <li class="menu-title" key="t-menu">Menu</li>


            <li>
                <a href="index.php" class="waves-effect">
                    <i class="bx bx-home-circle"></i>
                    <span key="t-chat">Dashboard</span>
                </a>
            </li>

            <li>
                <a href="appointments.php" class="waves-effect">
                    <i class="bx bx-task"></i>
                    <span key="t-chat">Appointments</span>
                </a>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="bx bxs-user-detail"></i>
                    <span key="t-contacts">Patients</span>
                </a>
                <ul class="sub-menu mm-collapse" aria-expanded="false">
                    <li><a href="add-patient.php" key="t-user-grid">Add Patient</a></li>
                    <li><a href="patients.php" key="t-user-list">Patient List</a></li>
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class='bx bx-plus-medical'></i>
                    <span key="t-contacts">Doctors</span>
                </a>
                <ul class="sub-menu mm-collapse" aria-expanded="false">
                    <li><a href="add-doctor.php" key="t-duser-grid">Add Doctors</a></li>
                    <li><a href="doctors.php" key="t-usedar-list">Doctors List</a></li>
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class='bx bxs-bar-chart-alt-2'></i>
                    <span key="t-contacts">Reports</span>
                </a>
                <ul class="sub-menu mm-collapse" aria-expanded="false">
                    <?php if(!isUserEmployee()) {?>
                    <li><a href="monthly-report.php" key="t-dusedar-grid">Monthly Appointments Report</a></li>
                    <?php } ?>
                    <li><a href="daily-report.php" key="t-usedadar-list">Daily Appointments Report</a></li>
                </ul>
            </li>

            <?php if(!isUserEmployee()) {?>
            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class='bx bx-user-circle'></i>
                    <span key="t-contadcts">Empolyees</span>
                </a>
                <ul class="sub-menu mm-collapse" aria-expanded="false">
                    <li><a href="add-employee.php" key="t-dusdawer-grid">Add Empolyees</a></li>
                    <li><a href="employees.php" key="t-useddwar-list">Empolyees List</a></li>
                </ul>
            </li>
            <?php } ?>


        </ul>
    </div>
    <!-- Sidebar -->
</div>
</div>
<!-- Left Sidebar End -->