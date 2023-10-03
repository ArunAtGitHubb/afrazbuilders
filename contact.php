<!DOCTYPE html>
<html>

<head>
    <?php include "top-includes.php" ?>
</head>

<body>

<div class="page-wrapper">
 	
    <!-- Main Header / Header Style Two-->
    <?php include "header.php" ?>
    <!--End Main Header -->
	
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/9.jpg)">
    	<div class="auto-container">
        	<h1>Contact</h1>
            <ul class="page-breadcrumb">
            	<li><a href="index.php">Home</a></li>
                <li>Contact</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    

    <!--Contact Section-->
    <section class="contact-section" style="padding: 40px 0;">
    	<div class="auto-container">
        	<div class="sec-title">
            	<h2>Contact Us</h2>
                <div class="separater"></div>
            </div>
        	<div class="row clearfix">
            	<div class="form-column col-lg-8 col-md-8 col-sm-12">
                	<div class="inner-column">
                    	
                        <!-- Default Form -->
                        <div class="default-form contact-form">
                            <!--Default Form-->
                            <form method="post" action="send.php" onsubmit="return submitUserForm();" id="contact-form">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="name" placeholder="Enter Name" required>
                                    </div>
                                    
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="email" name="email" placeholder="Enter Email" required>
                                    </div>
                                    
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="subject" placeholder="Enter Subject" required>
                                    </div>
                                    
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="phone" placeholder="Enter Phone" required>
                                    </div>
                                    
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <textarea name="message" placeholder="Massage"></textarea>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="g-recaptcha" data-sitekey="6Ldp6MUbAAAAAEv2uAu2qKXYV2oND_MAvUsdhMwH"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div id="g-recaptcha-error"></div>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit-form">Sand Now</button>
                                    </div>
                                    
                                </div>
                            </form>
                                
                        </div>
                        <!--End Default Form -->
                        
                    </div>
                </div>
                <div class="info-column col-lg-4 col-md-4 col-sm-12">
                	<!--List Style Three-->
                    <ul class="list-style-three">
                    	<li>
                            <span class="icon flaticon-note"></span>
                            <strong>
                                <a href="mailto:afrazbuilder@gmail.com">afrazbuilder@gmail.com</a>
                            </strong>We reply within 24 hours
                        </li>
                        <li>
                            <span class="icon flaticon-telephone"></span>
                            <strong>
                                <a href="tel:+918122291100">+91 81222 91100</a>
                            </strong>Have any questions?
                        </li>
                        <li>
                            <span class="icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </span>
                            <a href="https://maps.app.goo.gl/ZnbSP1neU2Kkww2p7?g_st=iwb" style="font-size: 15px; font-weight: bold;" target="_blank">
                                565, Anbil Dharmalingam street, <br>
                                K.K.Nagar, Trichy-620021.
                            </a>
                        </li>
                    </ul>
                    <ul class="social-icon-two">
                        <li class="follow">Follow us :</li>
                        <li>
                            <a href="#"> <i class="fa-brands fa-facebook"></i> </a>
                        </li>
                        <li>
                            <a href="https://instagram.com/afraz_builders_interiors?igshid=NGVhN2U2NjQ0Yg=="> <i class="fa-brands fa-instagram"></i> </a>
                        </li>
                        <li>
                            <a href="https://x.com/AfrazBuilders?s=08"> <i class="fa-brands fa-twitter"></i> </a>
                        </li>
                        <li>
                            <a href="http://www.linkedin.com/in/afraz-builders"> <i class="fa-brands fa-linkedin"></i> </a>
                        </li>
                        <li>
                            <a href="https://youtube.com/@afraz7777?si=YnxVuR6sru0QNxpj"> <i class="fa-brands fa-youtube"></i> </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--End Contact Section-->
    
    <!--Map Section-->
    <section class="contact-map-section" style="margin-bottom: 3rem;">
        <!--Map Outer-->
        <div class="map-outer">
            <!--Map Canvas-->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.745979095114!2d78.6895625!3d10.754050200000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3baa8ac33e096201%3A0x53e8a0cc45a3639b!2sAFRAZ%20BUILDERS!5e0!3m2!1sen!2sin!4v1695624044306!5m2!1sen!2sin" height="500" style="border:0;"></iframe>
        </div>
    </section>
    <!--End Map Section-->

    <!--Main Footer-->
    <?php include "footer.php" ?>
</body>

</html>