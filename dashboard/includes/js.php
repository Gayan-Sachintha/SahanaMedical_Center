<!-- JAVASCRIPT -->
<script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <!-- apexcharts -->
        <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

        <!-- dashboard init -->
        <script src="assets/js/pages/dashboard.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
$file = $_SERVER["SCRIPT_NAME"];
$break = Explode('/', $file);
$pfile = $break[count($break) - 1];



if (isset($_GET['code'])) {echo ".";?>
<script>
// Get the current URL
const currentURL = new URL(window.location.href);

// Get the search parameters from the URL
const searchParams = new URLSearchParams(currentURL.search);

// Remove the 'code' parameter from the search parameters
searchParams.delete('code');

// Update the URL by replacing the current state with a new state that has the modified search parameters
history.replaceState({}, '', `${currentURL.pathname}?${searchParams.toString()}`);
</script>

<?php if ($_GET['code'] == 1) {?>
<script>Swal.fire({
icon: 'success',
title: 'Doctor Removed'
})</script>
<?php }?>

<?php if ($_GET['code'] == 2) {?>
<script>Swal.fire({
icon: 'success',
title: 'Patient Removed'
})</script>
<?php }?>

<?php if ($_GET['code'] == 3) {?>
<script>Swal.fire({
icon: 'success',
title: 'Appointment Removed'
})</script>
<?php }?>

<?php if ($_GET['code'] == 4) {?>
<script>Swal.fire({
icon: 'success',
title: 'Doctor Added'
})</script>
<?php }?>

<?php if ($_GET['code'] == 5) {?>
<script>Swal.fire({
icon: 'error',
title: 'Doctor Not Found'
})</script>
<?php }?>

<?php if ($_GET['code'] == 6) {?>
<script>Swal.fire({
icon: 'success',
title: 'Doctor Updated !'
})</script>
<?php }?>

<?php if ($_GET['code'] == 7) {?>
<script>Swal.fire({
icon: 'success',
title: 'Patient Added !'
})</script>
<?php }?>

<?php if ($_GET['code'] == 8) {?>
<script>Swal.fire({
icon: 'error',
title: 'Patient Not Found !'
})</script>
<?php }?>

<?php if ($_GET['code'] == 9) {?>
<script>Swal.fire({
icon: 'success',
title: 'Patient Updated !'
})</script>
<?php }?>

<?php if ($_GET['code'] == 10) {?>
<script>Swal.fire({
icon: 'success',
title: 'Employee Added !'
})</script>
<?php }?>

<?php if ($_GET['code'] == 11) {?>
<script>Swal.fire({
icon: 'success',
title: 'Employee Removed !'
})</script>
<?php }?>

<?php if ($_GET['code'] == 12) {?>
<script>Swal.fire({
icon: 'success',
title: 'Employee Updated !'
})</script>
<?php }?>

<?php if ($_GET['code'] == 13) {?>
<script>Swal.fire({
icon: 'error',
title: 'Password Invalid!'
})</script>
<?php }?>


<?php if ($_GET['code'] == 14) {?>
<script>Swal.fire({
icon: 'error',
title: 'Username Invalid!'
})</script>
<?php }?>

<?php if ($_GET['code'] == 15) {?>
<script>Swal.fire({
icon: 'success',
title: 'Logged in !'
})</script>
<?php }?>

<?php if ($_GET['code'] == 69) {?>
<script>Swal.fire({
icon: 'error',
title: 'There was an error please try again later'
})</script>
<?php }?>


<?php } ?>