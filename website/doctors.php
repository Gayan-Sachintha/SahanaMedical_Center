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
            <div id="boxed">
                <div class="inner_box">
                <?php include 'includes/topBar.php'; ?>
                <?php include 'includes/header.php'; ?>
         
            <!--Start Page Title-->
            <div class="page_title bg3 section_margin">
                <div class="layer">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-md-12">
                                <h1>Doctors</h1>
                                <div class="beadcrumb">
                                    <a href="#">Home</a> <i class="fa fa-angle-right"></i> <span>Doctors</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Page Title-->
            <!--Start Doctors-->
            <div class="team_wrap team_two team_three">
                <div class="container">
                    <div class="heading">
                        <h3>SahanaMedicare <span>Doctors</span></h3>
                        <p>Reserve a doctor at Sahana Medical Center effortlessly with our convenient online booking system. Secure your appointment in <br>just a few clicks, ensuring prompt access to expert medical care.
                        </p>
                    </div>
                    <div class="row">
                        <?php
                            $doctors = fetchDoctors();
                            foreach($doctors as $doctor) { 
                        ?>
                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 full-wdth team">
                            <figure>
                                <a href="#"><img src="image/custom/femaledr.jpg" alt="" /></a>
                                <div class="innner_lay">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-pinterest"></i></a>
                                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                </div>
                            </figure>
                            <div class="details">
                                <h6>Dr.<?=$doctor['first_name'];?> <?=$doctor['last_name'];?></h6>
                                <span><?=$doctor['specialization'];?></span>
                                
                            </div>
                            <a href="schedule-appointment.php?doctor=<?=$doctor['id'];?>" class="button pink">Get Appointment</a>
                        </div>
                        <?php } ?>
                        
                    </div>
                </div>
            </div>
            <!--End Doctors-->
            <?php include 'includes/footer.php'; ?>

        </div>
    </div>
    <a href="#0" class="cd-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
    <?php include 'includes/js.php'; ?>

</body>




</html>