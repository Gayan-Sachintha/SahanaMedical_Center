
            <!--Start Top Bar-->
            <div class="top_bar">
                <div class="container">
                    <div class="bar_inner">
                        <div class="row">
                            <div class="col-lg-8 col-sm-12 col-md-12">
                                <ul>
                                    <li><i class="fas fa-phone-alt"></i> Call Us <strong>071-7941221</strong></li>
                                    <li><i class="fas fa-envelope"></i> sahanamedicare@gmail.com</li>
                                    <li><i class="fas fa-map-marker-alt"></i> <a href="contact.php">Our Locations</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-4 col-sm-12 col-md-12 text-end md-center sm-left">
                                <a href="login.php" class="button blue"> <img src="image/user.png" alt="" /> <?php if(isLogged()){ echo "Hi, "; echo getUserData('first_name'); echo " "; echo getUserData('last_name'); } else { echo "Hi, guest"; } ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Top Bar-->