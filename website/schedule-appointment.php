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

if(isset($_GET['doctor'])){
    $doctor_id = $_GET['doctor'];
} else {
    $doctor_id = "";
}

if (!class_exists('PHPMailer\PHPMailer\Exception')) {
    require 'libraries/phpmailer/src/Exception.php';
    require 'libraries/phpmailer/src/PHPMailer.php';
    require 'libraries/phpmailer/src/SMTP.php';
}
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;


if(isset($_POST['bookAppointment'])){
    $aapointmentName = $_POST['name'];
    $aapointmentEmail = $_POST['email'];
    $aapointmentDoctor = $_POST['doctor'];
    $aapointmentDescription = $_POST['description'];
    $aapointmentDate = $_POST['date'];

    if(ifAppointmentsReached($aapointmentDoctor)){
        redirect("schedule-appointment.php?code=4");
        echo "Reached";
        die();
    }

    $aapointmentID = createAppointmentId($aapointmentDoctor);

    $mail = new PHPMailer(true);
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    //Enable SMTP debugging.
    $mail->SMTPDebug = 0;                               
    //Set PHPMailer to use SMTP.
    $mail->isSMTP();            
    //Set SMTP host name                          
    $mail->Host = "smtp.zoho.com";
    //Set this to true if SMTP host requires authentication to send email
    $mail->SMTPAuth = true;     
    $mail->Username = "admin@sahanamedical.online";                 
    $mail->Password = "Ganidubro05@";                           
    //If SMTP requires TLS encryption then set it
    $mail->SMTPSecure = "tls";                           
    //Set TCP port to connect to
    $mail->Port = 587;                                   

    $mail->From = "admin@sahanamedical.online";
    $mail->FromName = "Sahana Medical";

    ob_start();

    include "libraries/phpmailer/body.php";
    $HTMLtemplate = ob_get_clean();

    $mail->addAddress($aapointmentEmail, $aapointmentName);

    $mail->isHTML(true);

    $mail->Subject = "Appointment Created No.#" . $aapointmentID;

    $mail->MsgHTML($HTMLtemplate);

    if ($mail->send()) {
        $sql = "INSERT INTO `appointments`(`appointment_id`, `appointment_byName`, `appointment_byEmail`, `appointment_toDoctor`, `appointment_Message`, `appointment_Date`) 
        VALUES ('$aapointmentID','$aapointmentName','$aapointmentEmail','$aapointmentDoctor','$aapointmentDescription','$aapointmentDate')";
        $result = mysqli_query(db(), $sql);

        if($result){
            echo "Done";
            redirect("schedule-appointment.php?code=3");
        } else {
            echo "Reached";
            redirect("schedule-appointment.php?code=69");
        }
    } else {
        redirect("schedule-appointment.php?code=69");
    }

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
                            <form action="schedule-appointment.php?doctor=<?=$doctor_id;?>" method="POST"class="inners">
                                <h4>Appointment Form</h4>
                                <form class="clearfix">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-6">
                                            <input type="text" name="name" value="<?php echo getUserData('first_name'); echo " "; echo getUserData('last_name'); ?>" class="form-control" readonly required/>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <input type="email" name="email" value="<?php echo getUserData('username'); ?>" class="form-control" readonly required/>
                                        </div>
                                        <div class="col-sm-12 col-md-12">
                                            <select class="form-select" name="doctor" required>
                                                <?php
                                                $doctors = fetchDoctors();
                                                foreach($doctors as $doctor) { 
                                                ?>
                                                <option value="<?=$doctor['id'];?>" <?php if($doctor_id == $doctor['id']){echo "selected";}?>><?=$doctor['first_name'];?> <?=$doctor['last_name'];?> (<?=$doctor['specialization'];?>)</option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="col-sm-12 col-md-12">
                                            <textarea name="description" placeholder="Message" class="form-control" required></textarea>
                                        </div>
                                        <div class="col-6 full-wdth tc">
                                            <!-- <i class="fa fa-calendar"></i> -->
                                            <input class="form-control" name="date" type="date" required/>
                                        </div>
                                        <div class="col-6 full-wdth">
                                            <input class="button" type="submit" name="bookAppointment" value="Book My Appointment" />
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
                                <h4>Please login to schedule appointment</h4>
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