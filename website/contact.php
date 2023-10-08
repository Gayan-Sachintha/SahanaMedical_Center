<!DOCTYPE html>
<!--[if IE 8]>    <html class="ie8" > <![endif]-->
<!--[if IE 9]>    <html class="ie9" > <![endif]-->
<!--[if IE 10]>    <html class="ie10" > <![endif]-->
<!--[if IE 11]>    <html class="ie11" > <![endif]-->
<!--[if (gt IE 11)|!(IE)]><!-->
<html lang="zxx">
<!--<![endif]-->


<?php include 'includes/head.php'; ?>

<body>
    <div id="boxed">
        <div class="inner_box">
            
        <?php include 'includes/topBar.php'; ?>
            <?php include 'includes/header.php'; ?>
            <!--Responsive Nav-->
            <div class="responsive_button">
                <p>Home</p>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-collapse">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            <div class="responsive_nav collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="gallery-3column.html">Gallery</a></li>
                    <li><a href="#">Channel</a>
                        <ul>
                            <li><a href="team.html">Doctor</a></li>
                            <li><a href="Labs.html">Labs</a></li>
                        </ul>
                        <li><a href="contact2.html">Contact</a></li>    
                </ul>
                
            </div>
            <!--Responsive Nav-->
            <!--Start Page Title-->
            <div class="page_title bg3">
                <div class="layer">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-md-12">
                                <h1>Contact Us</h1>
                                <div class="beadcrumb">
                                    <a href="#">Home</a> <i class="fa fa-angle-right"></i> <span>get in touch</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Page Title-->
            <div class="contact_wrap">
                <div class="container">
                    <!--Start Contact Map -->
                    <div class="contact_map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3968.2432701440935!2d80.5262644!3d5.9611887999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae141f31e6b2c37%3A0x82632e1d3e8f4d61!2sSahana%20Medicare%20Services!5e0!3m2!1sen!2slk!4v1683435477191!5m2!1sen!2slk" allowfullscreen></iframe>
                    </div>
                    <!--End Contact Map-->
                    <div class="row">
                        <div class="col-lg-5 col-md-12 col-sm-12">
                            <div class="heading">
                                <h3>Contact <span>Numbers</span></h3>
                            </div>
                            <ul>
                                <li><strong>Contact Us !</strong> +94 41 2244550</li>
                                <li><strong>Contact Us !</strong> +94 71 7941221</li>
                                <li><strong>Contact Us !</strong> +94 77 1809885</li>
                                <li><strong>Contact Us !</strong> +94 41 2237534</li>
                            </ul>
                        </div>
                        <div class="col-lg-7 col-md-12 col-sm-12 mg-top-40">
                            <div class="heading">
                                <h3>Enquiry <span>Form</span></h3>
                            </div>
                            <p class="success alert alert-success" id="success" style="display:none;"></p>
                            <p class="error alert alert-danger" id="error" style="display:none;"></p>
                            <form name="contact_form_3" id="contact_form_3" method="post">
                                <input type="hidden" name="axn" value="contact_3">
                                <div class="row">
                                    <fieldset class="col-sm-6 col-md-6">
                                        <input type="text" name="username" id="username" placeholder="First Name" />
                                    </fieldset>
                                    <fieldset class="col-sm-6 col-md-6">
                                        <input type="text" name="last-name" id="last-name" placeholder="Last Name" />
                                    </fieldset>
                                    <fieldset class="col-sm-6 col-md-6">
                                        <input type="text" name="email" id="email" placeholder="Email" />
                                    </fieldset>
                                    <fieldset class="col-sm-6 col-md-6">
                                        <input type="text" name="phone" id="phone" placeholder="Phone" />
                                    </fieldset>
                                    <div class="col-sm-12 col-md-12">
                                        <textarea name="description" id="description" placeholder="Message"></textarea>
                                    </div>
                                    <div class="clearfix"></div>
                                    <button type="button" id="submit_3" class="button pd-left-15" />Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php include 'includes/footer.php'; ?>
        </div>
    </div>
    <a href="#0" class="cd-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
    <?php include 'includes/js.php'; ?>
</body>
 
</html>