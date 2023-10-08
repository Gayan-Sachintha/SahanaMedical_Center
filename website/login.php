<!DOCTYPE html>
<?php include 'includes/head.php'; ?>
<!--[if IE 8]>    <html class="ie8" > <![endif]-->
<!--[if IE 9]>    <html class="ie9" > <![endif]-->
<!--[if IE 10]>    <html class="ie10" > <![endif]-->
<!--[if IE 11]>    <html class="ie11" > <![endif]-->
<!--[if (gt IE 11)|!(IE)]><!-->
<html lang="zxx">
<!--<![endif]-->



<?php 
if(isset($_POST['login'])){
    // Get the form data
    $username = postData("username");
    $password = postData("password");

    // Prepare a SQL query to fetch the user with the given username
    $query = "SELECT * FROM users WHERE username = '$username'";
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
                $_SESSION['username'] = $username;
                $_SESSION['loggedin'] = true;

                redirect("index.php?code=2");

            } else {
                // Password is incorrect
                alert("Invalid password.");
            }

        } else {
            // User not found
            alert("Invalid username.");
        }

    } else {
        redirect("index.php?code=69");
    }

}
?>

<body class="login_page">
    <div class="wrapper">
        <div class="container-fluid user-login zero_padding">
            <div class="row">
                <div class="col-md-4 col-sm-4 zero_padding">
                    <div class="login_carousel owl-carousel owl-theme">
                        <div class="item item-1">
                            <div>
                                <blockquote>
                                    <p>Labore et dolore magna aliqua veniam nostrud exercitation ullamco.</p>
                                </blockquote>
                            </div>
                        </div>
                        <div class="item active item-2">
                            <div>
                                <blockquote>
                                    <p>Labore et dolore magna aliqua veniam nostrud exercitation ullamco.</p>
                                </blockquote>
                            </div>
                        </div>
                        <div class="item active item-3">
                            <div>
                                <blockquote>
                                    <p>Labore et dolore magna aliqua veniam nostrud exercitation ullamco.</p>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-md-8 col-sm-8 col-xs-12 zero_padding">
                    <div class="login_right">
                        <div class="logo_fix">
                            <a href="index.html"><img src="image/withe_logo.png" alt="" /></a>
                        </div>
                        <div class="form-section">
                            <div>
                                <div class="text-left heading">
                                    <h1>login</h1>
                                </div>
                                <p>great to see you again!</p>
                                <!-- Main Heading Ends -->
                                <!-- Form Starts -->
                                <div class="col-md-10 col-sm-12 zero_padding">
                                    <form class="login-form" action="login.php" method="post" id="login_form">
                                        <!-- Input Field Starts -->
                                        <div class="form-group">
                                            <input class="form-control" name="username" id="username" placeholder="EMAIL" type="email" required>
                                        </div>
                                        <!-- Input Field Ends -->
                                        <!-- Input Field Starts -->
                                        <div class="form-group">
                                            <input class="form-control" name="password" id="password" placeholder="PASSWORD" type="password" required>
                                        </div>
                                        <!-- Input Field Ends -->
                                        <!-- Submit Form Button Starts -->
                                        <div class="form-group">
                                            <button class="button pink login_btn" type="submit" name="login">login</button>
                                        </div>
										
									  <div style="text-align: center ; color: mediumturquoise">
                                            <h1>OR</h1>
                                        </div>
                                        <div class="form-group">
                                            <a class="button pink login_btn" href="register.php">Register</a>
                                        </div><!-- Submit Form Button Ends -->
                                    </form>
                                </div>
                                <div class="clearfix"></div>
                                <!-- Form Ends -->
                                <!-- Copyright Text Starts -->
                               
                                <!-- Copyright Text Ends -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Wrapper Ends -->
    <!-- jQuery -->
    <?php include 'includes/js.php'; ?>

    <script>
        $('.login_carousel').owlCarousel({
            "items": 1,
            "autoPlay": true,
            "nav": false,
            "navigationText": [""],
            "itemsDesktop": [1199, 1],
            "pagination": false,
            "autoHeight": false,
            "autoplay": true,
            "autoplayTimeout": 3000,
            "loop": true,
            "dots": true,
        });
    </script>
    <!-- Isotops -->
    <script src="js/isotope-docs.min.js"></script>
</body>



</html>