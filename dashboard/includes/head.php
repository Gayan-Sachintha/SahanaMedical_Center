    <?php include 'db.php'; 
    $scriptName = $_SERVER['SCRIPT_NAME'];
    $scriptName = pathinfo($scriptName, PATHINFO_FILENAME);
    $scriptName = $scriptName . ".php";
    //Validation if is user logged
    if ($scriptName != "login.php"){
        if(!isLogged()){
            redirect("login.php");
        } 
    } 
    
    ?>
    <head>
        <meta charset="utf-8" />
        <title>Dashboard | Sahana Medicare</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Ganidu Sathishka" name="author" />

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>