<?php
include 'config.php';

// Create connection
$conn = new mysqli($servername, $DB_USERNAME, $DB_PASSWORD, $DB_DATABASE);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query_completed = "SELECT * FROM smartend_topics where webmaster_id = 2 and status =1 and project_type='Completed' and id != 150 order by id desc LIMIT 3";

// $query = "SELECT * FROM smartend_topics where webmaster_id = 2 and status =1 and project_type='Completed' and id != 150 order by id desc ";
$result_completed=mysqli_query($conn, $query_completed);


$query_ongoing = "SELECT * FROM smartend_topics where webmaster_id = 2 and status =1 and project_type='On Going' and id != 150 order by id desc LIMIT 3";
$result_ongoing=mysqli_query($conn, $query_ongoing);


$query_upcoming = "SELECT * FROM smartend_topics where webmaster_id = 2 and status =1 and project_type='Up Coming' and id != 150 order by id desc LIMIT 3";
$result_upcoming=mysqli_query($conn, $query_upcoming);

?>

<!DOCTYPE html>
<html>

<head>
    <?php include "top-includes.php" ?>
</head>

<body>

<div class="page-wrapper">
    <!-- Main Header-->
    <?php include "header.php" ?>
    <!--End Main Header -->

    <!--Main Slider-->
    <section class="main-slider">
        
        <div class="rev_slider_wrapper fullwidthbanner-container"  id="rev_slider_one_wrapper" data-source="gallery">
            <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
                <ul>
                
                    <li data-description="Slide Description" 
                        data-easein="default" data-easeout="default" data-fsmasterspeed="1500" 
                        data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" 
                        data-hideslideonmobile="off" data-index="rs-1687" data-masterspeed="default" 
                        data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" 
                        data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" 
                        data-rotate="0" data-saveperformance="off" data-slotamount="default" 
                        data-thumb="images/banner1.jpg" data-title="Slide Title" 
                        data-transition="parallaxvertical">
                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="images/banner1.jpg"> 
                        
                        <div class="tp-caption tp-resizeme" 
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingtop="[0,0,0,0]"
                            data-responsive_offset="on"
                            data-type="text"
                            data-height="none"
                            data-whitespace="normal"
                            data-width="['550','720','650','450']"
                            data-hoffset="['15','15','15','15']"
                            data-voffset="['30','15','20','5']"
                            data-x="['left','left','left','left']"
                            data-y="['middle','middle','middle','middle']"
                            data-textalign="['top','top','top','top']"
                            data-frames='[{"from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <h2 style="background: rgba(0, 0, 0, 0.45); position: relative; top: 270px;">Your Trusted Construction Partner</h2>                    
                        </div>

                    </li>
                    
                    <li data-description="Slide Description" 
                        data-easein="default" data-easeout="default" data-fsmasterspeed="1500" 
                        data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" 
                        data-hideslideonmobile="off" data-index="rs-1688" data-masterspeed="default" 
                        data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" 
                        data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" 
                        data-rotate="0" data-saveperformance="off" data-slotamount="default" 
                        data-thumb="images/banner2.jpg" data-title="Slide Title" 
                        data-transition="parallaxvertical">
                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="images/banner2.jpg">
                        
                        <div class="tp-caption tp-resizeme" 
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingtop="[0,0,0,0]"
                            data-responsive_offset="on"
                            data-type="text"
                            data-height="none"
                            data-whitespace="normal"
                            data-width="['550','720','650','450']"
                            data-hoffset="['15','15','15','15']"
                            data-voffset="['30','15','20','5']"
                            data-x="['left','left','left','left']"
                            data-y="['middle','middle','middle','middle']"
                            data-textalign="['top','top','top','top']"
                            data-frames='[{"from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <h2 style="background: rgba(0, 0, 0, 0.45); position: relative; top: 270px;">Building Dreams, Crafting Excellence</h2>
                        </div>
                    </li>
                    
                    <li data-description="Slide Description" 
                        data-easein="default" data-easeout="default" data-fsmasterspeed="1500" 
                        data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" 
                        data-hideslideonmobile="off" data-index="rs-1689" data-masterspeed="default" 
                        data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" 
                        data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" 
                        data-rotate="0" data-saveperformance="off" data-slotamount="default" 
                        data-thumb="images/banner3.jpg" data-title="Slide Title" 
                        data-transition="parallaxvertical">
                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="images/banner3.jpg">
                        <div class="tp-caption tp-resizeme" 
                            data-responsive_offset="on"
                            data-type="text"
                            data-height="none"
                            data-whitespace="normal"
                            data-width="['550','720','650','450']"
                            data-x="['left','left','left','left']"
                            data-y="['middle','middle','middle','middle']"
                            data-textalign="['top','top','top','top']"
                            data-frames='[{"from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <h2 style="background: rgba(0, 0, 0, 0.45); position: relative; top: 270px;"> Transforming Visions into Reality </h2>
                        </div>
                        <!-- <div class="tp-caption tp-resizeme" 
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingtop="[0,0,0,0]"
                            data-responsive_offset="on"
                            data-type="text"
                            data-height="none"
                            data-whitespace="normal"
                            data-width="['550','720','650','450']"
                            data-hoffset="['15','15','15','15']"
                            data-voffset="['30','15','20','5']"
                            data-x="['left','left','left','left']"
                            data-y="['middle','middle','middle','middle']"
                            data-textalign="['top','top','top','top']"
                            data-frames='[{"from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <h2 style=""> Transforming Visions into Reality </h2>
                        </div> -->
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="call-to-action-section" style="background-image:url(images/background/8.jpg)">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <div class="column col-lg-9 col-md-12 col-sm-12">
                	<div class="text">Ready to start your project with Afraz Builders?</div>
                </div>
                <div class="btn-column col-lg-3 col-md-12 col-sm-12">
                	<a href="./contact.php" class="theme-btn btn-style-one">Request a Quote</a>
                </div>
                
            </div>
        </div>
    </section>
    <!--End Main Slider-->

    <!--Services Section-->
    <section class="services-section-two" style="margin-top: 2rem;">
    	<div class="auto-container">
            <div class="sec-title centered">
            	<h2>Our Services</h2>
                <div class="separater"></div>
                <div class="text" style="text-align: center;">We Provide Greate Services for our Clients in All Projects</div>
            </div>
        	<div class="inner-container" style="margin-top: 3rem;">
                <div class="row">
                    <div class="col-lg-2 col-md-2"></div>
                    <!--Services Block Two-->
                    <div class="services-block-two col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="inner-box">
                            <div class="upper-box">
                                <div class="image" style="height: 250px;">
                                    <img src="images/building-construction.jpg" style="height: 250px;" alt="" />
                                    <div class="icon-box">
                                        <span class="white fa fa-building"></span>
                                    </div>
                                    <div class="overlay-box">
                                        <div class="overlay-inner">
                                            <div class="text">From concept to completion, we excel in building construction. Your dream, our craftsmanship.</div>
                                            <a href="building-construction-service.php" class="read-more">Read More <span class="fa fa-angle-double-right"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-box">
                                <h3><a href="building-construction-service.php">Building Constructions</a></h3>
                            </div>
                        </div>
                    </div>
                    
                    <!--Services Block Two-->
                    <div class="services-block-two col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="inner-box">
                            <div class="upper-box">
                                <div class="image" style="height: 250px;">
                                    <img src="images/interior-works.jpg" style="height: 250px;" alt="" />
                                    <div class="icon-box">
                                        <span class="white fa fa-home"></span>
                                    </div>
                                    <div class="overlay-box">
                                        <div class="overlay-inner">
                                            <div class="text">Elevate your space with our exceptional interior works. Transforming your vision into stunning reality.</div>
                                            <a href="interior-works-service.php" class="read-more">Read More <span class="fa fa-angle-double-right"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-box">
                                <h3><a href="interior-works-service.php">Interior Works</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2"></div>
                </div>
            </div>
        </div>
    </section>
    <!--End Services Section-->
    
    <!--About Us Section-->
    <section class="product-section">
    	<div class="upper-box" style="background-image:url(images/background/1.jpg)">
        	<div class="auto-container">
            	<h2>
                    At <span class="theme_color">Afraz Builders</span>, our journey is rooted in a passion for construction and a dedication to our community. We've been shaping Trichy's skyline with innovation and excellence ever since.
                </h2>
            </div>
        </div>
        <div class="auto-container">
        	<div class="lower-box">
            	<div class="clearfix">
                	<!--Image Column-->
                	<div class="image-column col-lg-6 col-md-12 col-sm-12">
                    	<div class="image">
                        	<img src="images/about.jpg" style="height: 530px; object-fit: cover;" alt="" />
                        </div>
                    </div>
                    <!--Content Column-->
                	<div class="content-column col-lg-6 col-md-12 col-sm-12">
                    	<div class="inner-column" style="margin-top: 2rem;">
                        	<h3>About Afraz Builders</h3>
                            <div class="text">
                            	<p>Welcome to Afraz Builders, your trusted partner in construction, located in the heart of Trichy. Our journey in the world of construction began with a vision to transform the city's landscape through innovation, quality, and a deep commitment to our clients and community. Our story is one of growth, resilience, and a relentless pursuit of excellence. Over the years, we've successfully completed numerous residential, commercial, and industrial projects, each adding to our legacy of craftsmanship and reliability.</p>
                            </div>
                            <div class="row clearfix">
                            	<div class="column col-lg-6 col-md-6 col-sm-12" style="display: flex; justify-content: center; margin-bottom: 2rem">
                                    <a href="about.php" style="color: white;" class="theme-btn btn-style-one">Learn More</a> 
                                </div>
                                <div class="column col-lg-6 col-md-6 col-sm-12" style="display: flex; justify-content: center; margin-bottom: 2rem">
                                    <a href="services.php" style="color: white;" class="theme-btn btn-style-one">Our Services</a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End About Us Section-->
    
    <!--Why Choose Us Section Three-->
    <section class="services-section-three">
    	<div class="auto-container">
        	<!--Sec Title-->
            <div class="sec-title centered">
            	<h2>Why Choose Us</h2>
                <div class="separater"></div>
                <div class="text" style="text-align: center;">We Provide Greate Services for our Clients in All Projects</div>
            </div>
			<div class="row clearfix">
                <!--Services Block Three-->
                <div class="services-block-three col-lg-4 col-md-6 col-sm-12">
                	<div class="inner-box">
                    	<div class="icon-box">
                        	<span class="white icon flaticon-chemistry-class-flask-with-liquid-for-experimentation"></span>
                        </div>
                        <h3><a href="chemical-enginering.html">Expertise Construction Landscape</a></h3>
                        <div class="text">We understand the local regulations, challenges, and opportunities, enabling us to navigate projects with ease. </div>
                    </div>
                </div>
                
                <!--Services Block Three-->
                <div class="services-block-three col-lg-4 col-md-6 col-sm-12">
                	<div class="inner-box">
                    	<div class="icon-box">
                        	<span class="white icon flaticon-flash"></span>
                        </div>
                        <h3><a href="energy-power.html">Innovative Construction Practices</a></h3>
                        <div class="text">Innovation is at the heart of what we do. We constantly embrace cutting-edge construction technologies and sustainable practices.</div>
                    </div>
                </div>
                
                <!--Services Block Three-->
                <div class="services-block-three col-lg-4 col-md-6 col-sm-12">
                	<div class="inner-box">
                    	<div class="icon-box">
                        	<span class="white icon flaticon-fire-extinguisher"></span>
                        </div>
                        <h3><a href="oil-gas.html">Client-Centric Approach</a></h3>
                        <div class="text">We listen attentively to your needs, collaborate closely with you throughout the process, and deliver tailored solutions that align perfectly with your vision. </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Services Section Three-->

    <!--Work Section-->
    <section class="work-section" style="background-image:url(images/background/6.jpg)">
    	<div class="auto-container">
        	<div class="sec-title centered light">
            	<h2>Our Work Process</h2>
                <div class="separater"></div>
            </div>
            
            <div class="row clearfix">
            	
                <!--Process Block-->
                <div class="process-block col-lg-3 col-md-6 col-sm-12">
                	<div class="inner-box">
                    	<div class="upper-box">
                        	<div class="icon-box">
                            	<span class="fa fa-cogs"></span>
                                <div class="block-number">1</div>
                            </div>
                        </div>
                        <div class="lower-box">
                        	<h3><a href="solutions-detail.html">Consultation & Planning</a></h3>
                            <div class="text">Our expert team collaborates closely with you to design a customized plan that aligns with your vision.</div>
                        </div>
                    </div>
                </div>
                
                <!--Process Block-->
                <div class="process-block col-lg-3 col-md-6 col-sm-12">
                	<div class="inner-box">
                    	<div class="upper-box">
                        	<div class="icon-box">
                            	<span class="icon flaticon-light-bulb"></span>
                                <div class="block-number">2</div>
                            </div>
                        </div>
                        <div class="lower-box">
                        	<h3><a href="solutions-detail.html">Design and Development</a></h3>
                            <div class="text">This is where the magic happens. Our skilled craftsmen, equipped with the latest technology, start the construction phase.</div>
                        </div>
                    </div>
                </div>
                
                <!--Process Block-->
                <div class="process-block col-lg-3 col-md-6 col-sm-12">
                	<div class="inner-box">
                    	<div class="upper-box">
                        	<div class="icon-box">
                            	<span class="fa fa-building"></span>
                                <div class="block-number">3</div>
                            </div>
                        </div>
                        <div class="lower-box">
                        	<h3><a href="solutions-detail.html">Construction & Execution</a></h3>
                            <div class="text">We adhere to the highest quality standards and timelines, providing regular updates and maintaining open communication with you.</div>
                        </div>
                    </div>
                </div>
                
                <!--Process Block-->
                <div class="process-block col-lg-3 col-md-6 col-sm-12">
                	<div class="inner-box">
                    	<div class="upper-box">
                        	<div class="icon-box">
                            	<span class="fa fa-check-circle"></span>
                                <div class="block-number">4</div>
                            </div>
                        </div>
                        <div class="lower-box">
                        	<h3><a href="solutions-detail.html">Quality Assurance & Handover</a></h3>
                            <div class="text">We conduct rigorous quality checks and inspections to ensure that everything meets our high standards.</div>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
    </section>
    <!--End Work Section-->

    <!--Counter Section-->
    <section class="counter-section" style="background-image:url(images/background/3.jpg)">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <!--Counter Column-->
                <div class="counter-main-column col-lg-8 col-md-12 col-sm-12">
                	<div class="inner-column">
                    	
                        <div class="fact-counter">
            	
                            <div class="row clearfix">
                            
                                <!--Column-->
                                <div class="column counter-column col-lg-3 col-md-3 col-sm-12">
                                    <div class="inner">
                                        <div class="count-outer count-box">
                                            <span class="count-text" data-speed="2000" data-stop="100">0</span>+
                                        </div>
                                        <h4 class="counter-title">Completed Projects</h4>
                                    </div>
                                </div>
                        
                                <!--Column-->
                                <div class="column counter-column col-lg-3 col-md-3 col-sm-12">
                                    <div class="inner">
                                        <div class="count-outer count-box">
                                            <span class="count-text" data-speed="2500" data-stop="7">0</span>
                                        </div>
                                        <h4 class="counter-title">Ongoing Projects</h4>
                                    </div>
                                </div>
                        
                                <!--Column-->
                                <div class="column counter-column col-lg-3 col-md-3 col-sm-12">
                                    <div class="inner">
                                        <div class="count-outer count-box">
                                            <span class="count-text" data-speed="2000" data-stop="7">0</span>
                                        </div>
                                        <h4 class="counter-title">Upcoming Projects</h4>
                                    </div>
                                </div>
                                <!--Column-->
                                <div class="column counter-column col-lg-3 col-md-3 col-sm-12">
                                    <div class="inner">
                                        <div class="count-outer count-box">
                                            <span class="count-text" data-speed="2000" data-stop="15">0</span>
                                        </div>
                                        <h4 class="counter-title">Years Experience</h4>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
                <!--Image Column-->
                <div class="image-column col-lg-4 col-md-12 col-sm-12">
                	<div class="image">
                    	<img src="images/counter.png" style="height: 230px;" alt="" />
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--End Counter Section-->

    <!--Contact Info Section-->
    <section class="contact-info-section">
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
                                        <input type="text" name="username" placeholder="Your Name" required>
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
    
    <!--Project Page Section-->
    <section class="project-page-section" style="margin-bottom: 60px; margin-top: 1.5rem;">
    	<div class="auto-container">
            <div class="sec-title centered">
            	<h2>Our Projects</h2>
                <div class="separater"></div>
            </div>
        	<!--MixitUp Galery-->
            <div class="mixitup-gallery">
                <!--Filter-->
                <div class="filters clearfix">
                    <ul class="filter-tabs filter-btns clearfix">
                        <li class="active filter" data-role="button" data-filter="all">VIEW ALL</li>
                        <li class="filter" data-role="button" data-filter=".completed">Completed</li>
                        <li class="filter" data-role="button" data-filter=".ongoing">Ongoing</li>
                        <li class="filter" data-role="button" data-filter=".upcoming">Upcoming</li>
                    </ul>
                </div>
                
                <div class="filter-list row clearfix">
                
                    <!--Default Portfolio Item-->
                    <!-- Completed -->
                    <?php if(mysqli_num_rows($result_completed) > 0):?>
                    <?php while($row = mysqli_fetch_array($result_completed)):?>
                    <div class="default-portfolio-item mix all completed col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
                            <figure class="image-box">
                                <img src="<?php if(isset($row["photo_file"])) { echo $base_url.$row['photo_file'];} else {echo "img/dummy.jpg";} ?>" style="height: 235px;" alt="">
                            </figure>
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="projects-detail.php?key=<?php echo $row['id']; ?>" class="link"><span class="fa fa-link"></span></a>
                                        <a href="<?php if(isset($row["photo_file"])) { echo $base_url.$row['photo_file'];} else {echo "img/dummy.jpg";} ?>" class="lightbox-image link" data-fancybox="images" data-caption="" title=""><span class="icon fa fa-search"></span></a>
                                        <h3><a href="projects-detail.php?key=<?php echo $row['id']; ?>"><?php echo $row["title_en"]; ?></a></h3>
                                        <div class="tags"><?php echo $row["location"]; ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; endif; ?>
                    
                    <?php if(mysqli_num_rows($result_ongoing) > 0):?>
                    <?php while($row = mysqli_fetch_array($result_ongoing)):?>
                    <!-- Ongoing -->
                    <div class="default-portfolio-item mix all ongoing col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
                            <figure class="image-box">
                                <img src="<?php if(isset($row["photo_file"])) { echo $base_url.$row['photo_file'];} else {echo "img/dummy.jpg";} ?>" style="height: 235px;" alt="">
                            </figure>
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="projects-detail.php?key=<?php echo $row['id']; ?>" class="link"><span class="fa fa-link"></span></a>
                                        <a href="<?php if(isset($row["photo_file"])) { echo $base_url.$row['photo_file'];} else {echo "img/dummy.jpg";} ?>" class="lightbox-image link" data-fancybox="images" data-caption="" title=""><span class="icon fa fa-search"></span></a>
                                        <h3><a href="projects-detail.php?key=<?php echo $row['id']; ?>"><?php echo $row["title_en"]; ?></a></h3>
                                        <div class="tags"><?php echo $row["location"]; ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; endif; ?>
                    
                    <?php if(mysqli_num_rows($result_upcoming) > 0):?>
                    <?php while($row = mysqli_fetch_array($result_upcoming)):?>
                    <!-- Upcoming -->
                    <div class="default-portfolio-item mix all upcoming col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
                            <figure class="image-box">
                                <img src="<?php if(isset($row["photo_file"])) { echo $base_url.$row['photo_file'];} else {echo "img/dummy.jpg";} ?>" style="height: 235px;" alt="">
                            </figure>
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="projects-detail.php?key=<?php echo $row['id']; ?>" class="link"><span class="fa fa-link"></span></a>
                                        <a href="<?php if(isset($row["photo_file"])) { echo $base_url.$row['photo_file'];} else {echo "img/dummy.jpg";} ?>" class="lightbox-image link" data-fancybox="images" data-caption="" title=""><span class="icon fa fa-search"></span></a>
                                        <h3><a href="projects-detail.php?key=<?php echo $row['id']; ?>"><?php echo $row["title_en"]; ?></a></h3>
                                        <div class="tags"><?php echo $row["location"]; ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; endif; ?>
                </div>
            </div>
        </div>
    </section>
    <!--End Project Page Section-->
    
    <!--Main Footer-->
    <?php include "footer.php" ?>
</body>

</html>