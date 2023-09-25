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
        	<h1>Enquiry</h1>
            <ul class="page-breadcrumb">
            	<li><a href="index.php">Home</a></li>
                <li>Enquiry</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    
    <!--Contact Info Section-->
    <section class="contact-info-section" style="margin-bottom: 3rem;">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <!--Info Column-->
                <div class="info-column contact-img col-lg-4 col-md-4 col-sm-4">
                    <img src="./images/contactus.png" alt="">
                </div>
                <!--Form Column-->
                <div class="form-column col-lg-8 col-md-8 col-sm-8">
                	<div class="inner-column">
                    	<div class="sec-title">
                        	<h2>Contact Us</h2>
                            <div class="separater"></div>
                        </div>
                        <!-- Default Form -->
                        <div class="default-form">
                            <!--Default Form-->
                            <form method="post" action="send.php" onsubmit="return submitUserForm();">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="name" placeholder="Your Name" required>
                                    </div>
                                    
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="phone" placeholder="Your Phone" required>
                                    </div>
                                    
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <input type="text" name="place" placeholder="Your Place" required>
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
                                        <button class="theme-btn btn-style-one" type="submit" name="submit-form">Send Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--End Default Form -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Contact Info Section-->

    <!--Main Footer-->
    <?php include "footer.php" ?>
</body>

</html>