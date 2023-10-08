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

if(isset($_POST['payAppointment'])){

    $order = postData('appointment');
    $orderTotal = 2000;
    $user_firstName = getUserData('first_name');
    $user_lastName = getUserData('last_name');
    $user_email = getUserData('username');
    $user_mobile = getUserData('mobile');
    $order_address = getUserData('address');

    $hash = strtoupper(
    md5(
        '1220939' . 
        $order . 
        number_format($orderTotal, 2, '.', '') . 
        'LKR' .  
        strtoupper(md5('NDEwNDIzODA3MDQwMjEwMzc1NTc3MzAxNDM2MTMzNDc4MjAzMTk4')) 
    ) 
    );
    // set POST variables
    $url = 'https://sandbox.payhere.lk/pay/checkout'; // payment gateway URL
    $fields = array(
        'merchant_id' => '1220939', // Replace your Merchant ID
        'return_url' => 'http://localhost/sahananew',
        'cancel_url' => 'http://localhost/sahananew',
        'notify_url' => 'http://localhost/sahananew',
        'order_id' => $order,
        'items' => 'Appointment #',
        'currency' => 'LKR',
        'amount' => $orderTotal,
        'first_name' => $user_firstName,
        'last_name' => $user_lastName,
        'email' => $user_email,
        'custom_1' => $user_email,
        'phone' => $user_mobile,
        'address' => $order_address,
        'city' => 'Colombo',
        'country' => 'Sri Lanka',
        'hash' => $hash // Replace with generated hash
    );
    
    // create hidden input fields for the form
    $inputs = '';
    foreach ($fields as $key => $value) {
        $inputs .= "<input type='hidden' name='$key' value='$value' />";
    }

    // create the form
    $form = "<form id='payment-form' method='post' action='$url'>$inputs</form>";

    // output the form and JavaScript code to submit it
    echo $form;
    echo "<script type='text/javascript'>document.getElementById('payment-form').submit();</script>";

    die();
}

?>
<body>
    <div id="boxed">
        <div class="inner_box">
            
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
                        <li><a href="./team.html">Doctor</a></li>
                        <li><a href="contact2.html">Labs</a></li>
                    </ul>
                    <li><a href="contact2.html">Contact</a></li>    
            </ul>
        </div>
            <!--End Top Bar-->
            <!--Start Slider-->
            <section class="main-slider style2 indxone section_margin" id="home">
                <div class="container">
                    <div id="rev_slider_476_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="christmas-snow-scene" data-source="gallery" style="background-color:transparent;padding:0px;">
                        <!-- START REVOLUTION SLIDER 5.3.0.2 fullscreen mode -->
                        <div id="rev_slider_476_1" class="rev_slider" style="display:none;" data-version="5.3.0.2">
                            <ul>
                                <!-- SLIDE  -->
                                <li data-index="rs-1648" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="1000" data-thumb="images/slider_banner.jpg" data-rotate="0" data-saveperformance="off"
                                    data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="image/slider/one.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
                                    <!-- LAYERS -->
                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption lyr1 tp-resizeme" id="slide-1648-layer-1" data-x="left" data-hoffset="20" data-y="center" data-voffset="-130" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":700,"ease":"Power3.easeOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                                        data-paddingtop="[20,20,20,20]" data-paddingright="[0,0,0,0]" data-paddingbottom="[20,20,20,20]" data-paddingleft="[0,0,0,0]" data-start="200" data-splitin="chars" data-splitout="none" data-elementdelay="0.04" style="">Happy to see you Healthy
                                    </div>
                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption lyr2 tp-resizeme" id="slide-1648-layer-2" data-x="left" data-hoffset="20" data-y="center" data-voffset="-25" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1700,"to":"o:1;","delay":1000,"ease":"Power3.easeOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                                        data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[15,15,15,15]" data-paddingleft="[0,0,0,0]" data-start="2000" data-splitin="chars" data-splitout="none" data-elementdelay="0.06" style="">Best Spinal Care &amp;
                                        <br /> Wellness Center
                                    </div>
                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption lyr3 st2 tp-resizeme" id="slide-1648-layer-3" data-x="left" data-hoffset="20" data-y="center" data-voffset="60" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"x:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                                        data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-start="1400" data-splitin="" data-splitout="none" data-elementdelay="0.02" style="">Lorem ipsum dolor sit amet consectetur adipisicing elit sed eiusmod
                                        <br> tempor incididunt ut labore et dolore magna aliqua.
                                    </div>
                                </li>
                                <!-- SLIDE  -->
                                <li data-index="rs-1649" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="1000" data-thumb="images/slider_banner.jpg" data-rotate="0" data-saveperformance="off"
                                    data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="image/slider/one.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
                                    <!-- LAYERS -->
                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption lyr1 tp-resizeme" id="slide-1648-layer-5" data-x="left" data-hoffset="20" data-y="center" data-voffset="-130" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":700,"ease":"Power3.easeOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                                        data-paddingtop="[20,20,20,20]" data-paddingright="[0,0,0,0]" data-paddingbottom="[20,20,20,20]" data-paddingleft="[0,0,0,0]" data-start="200" data-splitin="chars" data-splitout="none" data-elementdelay="0.04" style="">Happy to see you Healthy
                                    </div>
                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption lyr2 tp-resizeme" id="slide-1648-layer-6" data-x="left" data-hoffset="20" data-y="center" data-voffset="-25" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1700,"to":"o:1;","delay":1000,"ease":"Power3.easeOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                                        data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[15,15,15,15]" data-paddingleft="[0,0,0,0]" data-start="2000" data-splitin="chars" data-splitout="none" data-elementdelay="0.06" style="">Best Spinal Care &amp;
                                        <br /> Wellness Center
                                    </div>
                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption lyr3 st2 tp-resizeme" id="slide-1648-layer-7" data-x="left" data-hoffset="20" data-y="center" data-voffset="60" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"x:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                                        data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-start="1400" data-splitin="" data-splitout="none" data-elementdelay="0.02" style="">Lorem ipsum dolor sit amet consectetur adipisicing elit sed eiusmod
                                        <br> tempor incididunt ut labore et dolore magna aliqua.
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--Revolution Slider end-->
                    <?php if(isLogged()){ ?>
                    <div class="contaienr">
                        <div class="iner_content">
                            <form method="post" action="pay.php">   
                                <h4>Payment Form</h4>

                                <form class="clearfix">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-6">
                                            <input type="text" name="name" value="<?php echo getUserData('first_name'); echo " "; echo getUserData('last_name'); ?>" class="form-control" readonly required/>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <input type="email" name="email" value="<?php echo getUserData('username'); ?>" class="form-control" readonly required/>
                                        </div>
                                        <div class="col-sm-12 col-md-12">
                                            <input type="text" name="appointment" placeholder="Enter your appointment number" class="form-control" required/>
                                        </div>
                                        <div class="col-sm-12 col-md-12">
                                            Amount: (Rs)
                                            <input type="text" name="amount" value="2000" class="form-control" required/>
                                        </div>
                                        <div class="col-12 full-wdth">
                                            <input class="button" type="submit" name="payAppointment" value="Pay" />
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php } else {?>
                    <div class="contaienr">
                        <div class="iner_content">
                            <div class="inners">
                                <h4>Please login to pay</h4>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </section>
            <!--main-slider end-->
            <!--End Slider-->
        
          
            <!--Start footer-->
            <?php include 'includes/footer.php'; ?>
        </div>
    </div>
    <a href="#0" class="cd-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
    <?php include 'includes/js.php'; ?>
</body>





</html>