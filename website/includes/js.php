  <!-- jQuery -->
  <script src="js/jquery.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- REVOLUTION JS FILES -->
    <script src="revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="revolution/js/jquery.themepunch.revolution.min.js"></script>
    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS -->
    <script src="revolution/js/revolution.extension.actions.min.js"></script>
    <script src="revolution/js/revolution.extension.carousel.min.js"></script>
    <script src="revolution/js/revolution.extension.kenburn.min.js"></script>
    <script src="revolution/js/revolution.extension.layeranimation.min.js"></script>
    <script src="revolution/js/revolution.extension.migration.min.js"></script>
    <script src="revolution/js/revolution.extension.navigation.min.js"></script>
    <script src="revolution/js/revolution.extension.parallax.min.js"></script>
    <script src="revolution/js/revolution.extension.slideanims.min.js"></script>
    <script src="revolution/js/revolution.extension.video.min.js"></script>
    <script src="revolution/js/revolution.initialize.js"></script>
    <!-- Slider -->
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.cycle.all.js"></script>
    <!-- Jquery Ui -->
    <script src="js/jquery-ui.js"></script>
    <!-- PrettyPhoto -->
    <script src="js/jquery.prettyPhoto.js"></script>
    <!-- Isotops -->
    <script src="js/isotope-docs.min.js"></script>
    <!-- Custom -->
    <script src="js/custom.js"></script>
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
title: 'Registered as a Patient'
})</script>
<?php }?>

<?php if ($_GET['code'] == 2) {?>
<script>Swal.fire({
icon: 'success',
title: 'Logged in as a Patient'
})</script>
<?php }?>

<?php if ($_GET['code'] == 3) {?>
<script>Swal.fire({
icon: 'success',
title: 'Appointment Created'
})</script>
<?php }?>

<?php if ($_GET['code'] == 4) {?>
<script>Swal.fire({
icon: 'error',
title: 'Appointments Limit Reeched'
})</script>
<?php }?>

<?php if ($_GET['code'] == 69) {?>
<script>Swal.fire({
icon: 'error',
title: 'There was an error please try again later'
})</script>
<?php }?>


<?php } ?>