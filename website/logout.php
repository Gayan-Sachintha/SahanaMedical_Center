<?php

include 'includes/config.php';
unset($_SESSION['loggedin']);
unset($_SESSION['username']);
session_destroy();

redirect("login.php")

?>