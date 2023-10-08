<?php include 'includes/head.php'; 

unset($_SESSION['username']);
unset($_SESSION['password']);

session_destroy();

redirect("login.php");

?>