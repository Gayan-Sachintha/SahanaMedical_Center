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
            
            <!--Start Page Title-->
            <div class="page_title bg3 section_margin">
                <div class="layer">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-md-12">
                                <h1>Photo Gallery </h1>
                                <div class="beadcrumb">
                                    <a href="Appoiment.html">Home</a> <i class="fa fa-angle-right"></i> <span>photo gallery</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Page Title-->
            <!--Start project-->
            <div class="container">
                <div class="project_wrap project_two section_margin">
                    <div class="my-selector" data-option-key="filter">
                        <a href="#filter" data-option-value="*" class="selected">Show All</a>
                        <a href="#filter" data-option-value=".lawn_care">Cardiology</a>
                        <a href="#filter" data-option-value=".gardening">Diabetes</a>
                        <a href="#filter" data-option-value=".cleanup">Pediatric</a>
                        <a href="#filter" data-option-value=".planting">Ophthalmology</a>
                        <a href="#filter" data-option-value=".dental">Dental</a>
                        <a href="#filter" data-option-value=".surgery">Surgery</a>
                    </div>
                    <div id="project-eliment" class="da-thumbs clearfix">
                        <div class="row">
                            <div class="col-md-4 item cleanup lawn_care dental">
                                <div class="item_inner">
                                    <img src="image/custom/project.jpg" alt="" />
                                    <div class="overlay">
                                        <a href="image/custom/project.jpg" class="zoom"><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 item cleanup lawn_care">
                                <div class="item_inner">
                                    <img src="image/custom/project2.jpg" alt="" />
                                    <div class="overlay">
                                        <a href="image/custom/project2.jpg" class="zoom"><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 item gardening surgery">
                                <div class="item_inner">
                                    <img src="image/custom/project3.jpg" alt="" />
                                    <div class="overlay">
                                        <a href="image/custom/project3.jpg" class="zoom"><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 item gardening planting">
                                <div class="item_inner">
                                    <img src="image/custom/project4.jpg" alt="" />
                                    <div class="overlay">
                                        <a href="image/custom/project4.jpg" class="zoom"><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 item cleanup planting">
                                <div class="item_inner">
                                    <img src="image/custom/project5.jpg" alt="" />
                                    <div class="overlay">
                                        <a href="image/custom/project5.jpg" class="zoom"><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 item cleanup gardening ">
                                <div class="item_inner">
                                    <img src="image/custom/project6.jpg" alt="" />
                                    <div class="overlay">
                                        <a href="image/custom/project6.jpg" class="zoom"><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 item cleanup gardening ">
                                <div class="item_inner">
                                    <img src="image/custom/project7.jpg" alt="" />
                                    <div class="overlay">
                                        <a href="image/custom/project7.jpg" class="zoom"><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 item cleanup planting">
                                <div class="item_inner">
                                    <img src="image/custom/project8.jpg" alt="" />
                                    <div class="overlay">
                                        <a href="image/custom/project8.jpg" class="zoom"><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 item gardening lawn_care">
                                <div class="item_inner">
                                    <img src="image/custom/project9.jpg" alt="" />
                                    <div class="overlay">
                                        <a href="image/custom/project9.jpg" class="zoom"><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End project-->
            <?php include 'includes/footer.php'; ?>
        </div>
    </div>
    <a href="#0" class="cd-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
    <?php include 'includes/js.php'; ?>
</body>




</html>