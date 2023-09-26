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
        	<h1>Our Services</h1>
            <ul class="page-breadcrumb">
            	<li><a href="index.php">Home</a></li>
                <li>Our Services</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    
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
                        <li class="filter" data-role="button" data-filter=".ongoing">On Going</li>
                        <li class="filter" data-role="button" data-filter=".upcoming">Up Coming</li>
                    </ul>
                </div>
                
                <div class="filter-list row clearfix">
                
                    <!--Default Portfolio Item-->
                    <!-- Completed -->
                    <div class="default-portfolio-item mix all completed col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
                            <figure class="image-box">
                                <img src="images/projects/gallery/completed/image-1.jpg" style="height: 235px;" alt="">
                            </figure>
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="projects-detail.php" class="link"><span class="fa fa-link"></span></a>
                                        <a href="images/projects/gallery/completed/image-1.jpg" class="lightbox-image link" data-fancybox="images" data-caption="" title=""><span class="icon fa fa-search"></span></a>
                                        <h3><a href="projects-detail.php">Residency</a></h3>
                                        <div class="tags">Trichy</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- On Going -->
                    <div class="default-portfolio-item mix all ongoing col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
                            <figure class="image-box">
                                <img src="images/projects/gallery/ongoing/image-9.jpg" style="height: 235px;" alt="">
                            </figure>
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="projects-detail.php" class="link"><span class="fa fa-link"></span></a>
                                        <a href="images/projects/gallery/ongoing/image-9.jpg" class="lightbox-image link" data-fancybox="images" data-caption="" title=""><span class="icon fa fa-search"></span></a>
                                        <h3><a href="projects-detail.php">Residency</a></h3>
                                        <div class="tags">Trichy</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Up Coming -->
                    <div class="default-portfolio-item mix all upcoming col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
                            <figure class="image-box">
                                <img src="images/projects/gallery/upcoming/image-4.jpg" style="height: 235px;" alt="">
                            </figure>
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="projects-detail.php" class="link"><span class="fa fa-link"></span></a>
                                        <a href="images/projects/gallery/upcoming/image-4.jpg" class="lightbox-image link" data-fancybox="images" data-caption="" title=""><span class="icon fa fa-search"></span></a>
                                        <h3><a href="projects-detail.php">Residency</a></h3>
                                        <div class="tags">Trichy</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Project Page Section-->
    
    <!--Main Footer-->
    <?php include "footer.php" ?>
</body>

</html>