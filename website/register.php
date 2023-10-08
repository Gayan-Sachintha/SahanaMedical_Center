<!DOCTYPE html>
<!--[if IE 8]>    <html class="ie8" > <![endif]-->
<!--[if IE 9]>    <html class="ie9" > <![endif]-->
<!--[if IE 10]>    <html class="ie10" > <![endif]-->
<!--[if IE 11]>    <html class="ie11" > <![endif]-->
<!--[if (gt IE 11)|!(IE)]><!-->
<html lang="zxx">
<!--<![endif]-->



<?php include 'includes/head.php'; ?>

<?php 

if(isset($_POST['register'])){
    $username = postData("email");
    $first_name = postData("first_name");
    $last_name = postData("last_name");
    $gender = postData("gender");
    $mobile = postData("mobile");
    $password = postData("password");
    $address = postData("address");
    $nic = postData("nic");

    $password = password_hash($password,PASSWORD_DEFAULT);
    $sql = "INSERT INTO `users`(`username`, `first_name`, `last_name`, `password`, `gender`, `mobile`, `address`, `nic`) VALUES ('$username','$first_name','$last_name','$password','$gender','$mobile','$address','$nic')";
    $result = mysqli_query(db(), $sql);

    if($sql){
        redirect("index.php?code=1");
    } else {
        redirect("index.php?code=69");
    }
    exit;
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
                                    <h1>Register</h1>
                                </div>

                                <!-- Main Heading Ends -->
                                <!-- Form Starts -->
                                <div class="col-md-10 col-sm-12 zero_padding">
                                    <form class="login-form" action="register.php" method="post" id="login_form">
                                        <!-- Input Field Starts -->
                                        <div class="form-group">
                                            <input class="form-control" name="email" id="email" placeholder="EMAIL" type="email" required>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="first_name" id="first_name" placeholder="Enter your First Name" type="text" required>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="last_name" id="last_name" placeholder="Enter your last Name" type="text" required>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-select" name="gender" aria-label="Default select example">
                                                <option selected>Select your gender</option>
                                                <option value="1">Male</option>
                                                <option value="2">Female</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="mobile" id="mobile" placeholder="Enter your Contact Number" type="tel" required>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="address" id="address" placeholder="Enter your Address" type="text" required>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="nic" id="nic" placeholder="Enter your NIC" type="text" required>
                                        </div>
                                        <!-- Input Field Ends -->
                                        <!-- Input Field Starts -->
                                        <div class="form-group">
                                            <input class="form-control" name="password" id="password" placeholder="PASSWORD" type="password" required>
                                        </div>
                                        <!-- Input Field Ends -->
                                        <!-- Submit Form Button Starts -->
                                        <div class="form-group">
                                            <button class="button pink login_btn" type="submit" name="register">Register</button>
                                        </div>
                                        <!-- Submit Form Button Ends -->
                                    </form>
                                </div>
                                <div class="clearfix"></div>
                                <!-- Form Ends -->
                                <!-- Copyright Text Starts -->
                                <footer class="login_footer">
                                    <div class="text-center">
                                        <p>(C) Copyright 2021 - iMedDoc Healthcare. All rights reserved.</p>
                                    </div>
                                </footer>
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


Downloaded From
<!-- Downloaded From www.shmai.com/preview/imeddoc-html/login.html by D3MONGaYYa Copier, Thu, 11 May 2023 17:48:55 GMT -->

</html>