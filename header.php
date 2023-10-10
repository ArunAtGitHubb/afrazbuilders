<?php 
    $currentUrl = $_SERVER['REQUEST_URI'];
    $path = parse_url($currentUrl, PHP_URL_PATH);
    $path = trim($path, '/');
    $pathSegments = explode('/', $path);
?>

<header class="main-header">
    
    	<!--Header Top-->
    	<div class="header-top">
            <div class="auto-container">
                <div class="clearfix">
                    <!--Top Left-->
                    <div class="top-left pull-left">
                    	<ul class="clearfix">
                        	<li>"Transforming Visions into Reality: Your Trusted Construction Partner."</li>
                        </ul>
                    </div>
                    <!--Top Right-->
                    <div class="top-right pull-right">
                    	<ul class="social-nav">
                        	<li>
                                <a href="https://www.facebook.com/profile.php?id=61551792186133&mibextid=ZbWKwL"> <i class="fa-brands fa-facebook"></i> </a>
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
        </div>
    
    	<!--Header-Upper-->
        <div class="header-upper">
        	<div class="auto-container">
            	<div class="clearfix">
                	
                	<div class="pull-left logo-box">
                    	<div class="logo">
                            <a href="index.php">
                                <img src="images/logo.png" style="width: 210px;" alt="" title="">
                            </a>
                        </div>
                    </div>
                    
                    <div class="pull-right upper-right clearfix">
                    	
                        <!--Info Box-->
                        <div class="upper-column info-box d-sm-none-custom">
                        	
                        </div>
                        
                        <!--Info Box-->
                        <div class="upper-column info-box d-sm-none-custom">
                        	<div class="icon-box"><span class="fa fa-phone"></span></div>
                            <ul>
                            	<li><strong>Call Us</strong></li>
                                <li>
                                    <a href="tel:+91 81222 91100">+91 81222 91100</a>
                                </li>
                            </ul>
                        </div>
                        
                        <!--Info Box-->
                        <div class="upper-column info-box d-sm-none-custom">
                        	<div class="icon-box"><span class="fa fa-envelope"></span></div>
                            <ul>
                            	<li><strong>Email Us</strong></li>
                                <li style="text-transform: none">
                                    <a href="mailto:afrazbuilder@gmail.com">afrazbuilder@gmail.com</a>
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
        <!--End Header Upper-->
        
        <!--Header Lower-->
        <div class="header-lower">
            
            <div class="auto-container">
                <div class="nav-outer clearfix">
                    <!-- Main Menu -->
					<nav class="main-menu navbar-expand-md">
						<div class="navbar-header">
							<!-- Toggle Button -->    	
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						
						<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
							<ul class="navigation clearfix">
                                <li class="<?php if($pathSegments[1] == "index.php") echo "current" ?>">
                                    <a href="index.php">Home</a>
                                </li>
                                <li class="dropdown <?php if($pathSegments[1] == "about.php" || $pathSegments[1] == "why-choose-us.php" || $pathSegments[1] == "testimonials.php") echo "current" ?>">
                                    <a href="about.php">About</a>
                                    <ul>
                                        <li><a href="about.php">About Afraz Builders</a></li>
                                        <li><a href="why-choose-us.php">Why Choose Us</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown <?php if($pathSegments[1] == "services.php" || $pathSegments[1] == "plan-approval-service.php" || $pathSegments[1] == "building-construction-service.php" || $pathSegments[1] == "interior-works-service.php") echo "current" ?>">
                                    <a href="services.php">Services</a>
                                    <ul>
                                        <li><a href="building-construction-service.php">Building Constructions</a></li>
                                        <li><a href="interior-works-service.php">Interior Works</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown <?php if($pathSegments[1] == "projects.php" || $pathSegments[1] == "completed-projects.php" || $pathSegments[1] == "on-going-projects.php" || $pathSegments[1] == "up-coming-projects.php") echo "current" ?>">
                                    <a href="projects.php">Projects</a>
                                    <ul>
                                        <li><a href="completed-projects.php">Completed Projects</a></li>
                                        <li><a href="on-going-projects.php">Ongoing Projects</a></li>
                                        <li><a href="up-coming-projects.php">Upcoming Projects</a></li>
                                    </ul>
                                </li>
                                <li class="<?php if($pathSegments[1] == "for-sale.php") echo "current" ?>">
                                    <a href="for-sale.php">For Sale</a>
                                </li>
                                <li class="dropdown <?php if($pathSegments[1] == "gallery.php" || $pathSegments[1] == "photo-gallery.php" || $pathSegments[1] == "video-gallery.php") echo "current" ?>">
                                    <a href="photo-gallery.php">Gallery</a>
                                    <ul>
                                        <li><a href="./photo-gallery.php">Photo Gallery</a></li>
                                        <li><a href="./video-gallery.php">Video Gallery</a></li>
                                    </ul>
                                </li>
                                <li class="<?php if($pathSegments[1] == "contact.php") echo "current" ?>">
                                    <a href="contact.php">Contact us</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->
                    <div class="outer-box clearfix">
                        <div class="advisor-box">
                            <a href="contact.php" class="theme-btn advisor-btn"><span style="color: white;">Get a Quote</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Header Lower-->
        
        <!--Sticky Header-->
        <div class="sticky-header">
        	<div class="auto-container clearfix">
            	<!--Logo-->
            	<div class="logo pull-left">
                	<a href="index.php" class="img-responsive">
                        <img src="images/logo.png" style="width: 150px" alt="" title="">
                    </a>
                </div>
                
                <!--Right Col-->
                <div class="right-col pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        
                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
                            <ul class="navigation clearfix">
                                <li class="<?php if($pathSegments[1] == "index.php") echo "current" ?>">
                                    <a href="index.php">Home</a>
                                </li>
                                <li class="dropdown <?php if($pathSegments[1] == "about.php" || $pathSegments[1] == "why-choose-us.php" || $pathSegments[1] == "testimonials.php") echo "current" ?>">
                                    <a href="about.php">About</a>
                                    <ul>
                                        <li><a href="about.php">About Afraz Builders</a></li>
                                        <li><a href="why-choose-us.php">Why Choose Us</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown <?php if($pathSegments[1] == "services.php" || $pathSegments[1] == "plan-approval-service.php" || $pathSegments[1] == "building-construction-service.php" || $pathSegments[1] == "interior-works-service.php") echo "current" ?>">
                                    <a href="services.php">Services</a>
                                    <ul>
                                        <li><a href="building-construction-service.php">Building Constructions</a></li>
                                        <li><a href="interior-works-service.php">Interior Works</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown <?php if($pathSegments[1] == "projects.php" || $pathSegments[1] == "completed-projects.php" || $pathSegments[1] == "on-going-projects.php" || $pathSegments[1] == "up-coming-projects.php") echo "current" ?>">
                                    <a href="projects.php">Projects</a>
                                    <ul>
                                        <li><a href="completed-projects.php">Completed Projects</a></li>
                                        <li><a href="on-going-projects.php">Ongoing Projects</a></li>
                                        <li><a href="up-coming-projects.php">Upcoming Projects</a></li>
                                    </ul>
                                </li>
                                <li class="<?php if($pathSegments[1] == "for-sale.php") echo "current" ?>">
                                    <a href="for-sale.php">For Sale</a>
                                </li>
                                <li class="dropdown <?php if($pathSegments[1] == "gallery.php") echo "current" ?>">
                                    <a href="photo-gallery.php">Gallery</a>
                                    <ul>
                                        <li><a href="./photo-gallery.php">Photo Gallery</a></li>
                                        <li><a href="./video-gallery.php">Video Gallery</a></li>
                                    </ul>
                                </li>
                                <li class="<?php if($pathSegments[1] == "contact.php") echo "current" ?>">
                                    <a href="contact.php">Contact us</a>
                                </li>
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
                
            </div>
        </div>
        <!--End Sticky Header-->
    
    </header>