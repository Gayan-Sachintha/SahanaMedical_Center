<!doctype html>
<html lang="en">

    
<?php include 'includes/head.php'; ?>
<?php
if(isset($_POST['login'])){
    $username = postData('username');
    $password = postData('password');

    // Prepare a SQL query to fetch the user with the given username
    $query = "SELECT * FROM staff WHERE username = '$username'";
    $result = mysqli_query(db(), $query);

    // Check if the query was successful
    if($result) {

        // Check if the user exists
        if(mysqli_num_rows($result) == 1) {

            // Fetch the user's data
            $row = mysqli_fetch_assoc($result);

            // Verify the password
            if(password_verify($password, $row['password'])) {

                // Password is correct, log in the user
                $_SESSION['usernameadmin'] = $username;
                $_SESSION['loggedinadmin'] = true;

                echo "Logged In";
                redirect("index.php?code=15");

            } else {
                // Password is incorrect
                echo "Password Invalid";
                redirect("login.php?code=13");
            }

        } else {
            // User not found
            echo "Username Invalid";
            redirect("login.php?code=14");
        }

    } else {
        redirect("login.php?code=69");
    }
    die();
}
?>
    <body>
        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="bg-primary bg-soft">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="text-primary p-4">
                                            <h5 class="text-primary">Welcome Back !</h5>
                                        </div>
                                    </div>
                                    <div class="col-5 align-self-end">
                                        <img src="assets/images/profile-img.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="p-2">
                                    <form class="form-horizontal" action="login.php" method="post">
        
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Username</label>
                                            <input type="text" class="form-control" name="username" placeholder="Enter username" required>
                                        </div>
                
                                        <div class="mb-3">
                                            <label class="form-label">Password</label>
                                            <div class="input-group auth-pass-inputgroup">
                                                <input type="password" class="form-control" placeholder="Enter password" name="password" aria-describedby="password-addon" required>
                                                <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                            </div>
                                        </div>

                                        <div class="mt-3 d-grid">
                                            <button class="btn btn-primary waves-effect waves-light" type="submit" name="login">Log In</button>
                                        </div>

                                    </form>
                                </div>
            
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- end account-pages -->

        <?php include 'includes/js.php'; ?>
    </body>

</html>
