<?php
include 'config.php';

// Create connection
$conn = new mysqli($servername, $DB_USERNAME, $DB_PASSWORD, $DB_DATABASE);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



// $query2 = "SELECT COUNT(id) as total_record FROM smartend_topics where webmaster_id = 2 and status =1 and project_type='For Sale' and id != 150 ";
// $result2 =mysqli_query($conn, $query2);
// $title="";
// while($row2 = mysqli_fetch_array($result2)){
//     $totalRecords = $row2["total_record"];
// }



// // $totalRecords = 50; // Total number of records in your dataset
// $pageSize = 10000; // Number of records to display per page

// // Determine the current page number
// $currentpage = isset($_GET['page']) ? $_GET['page'] : 1;

// // Calculate the offset
// $offset = ($currentpage - 1) * $pageSize;




$query_completed = "SELECT * FROM smartend_topics where webmaster_id = 2 and status =1 and project_type='Completed' and id != 150 order by id desc ";

// $query = "SELECT * FROM smartend_topics where webmaster_id = 2 and status =1 and project_type='Completed' and id != 150 order by id desc ";
$result_completed=mysqli_query($conn, $query_completed);


$query_ongoing = "SELECT * FROM smartend_topics where webmaster_id = 2 and status =1 and project_type='On Going' and id != 150 order by id desc ";
$result_ongoing=mysqli_query($conn, $query_ongoing);


$query_upcoming = "SELECT * FROM smartend_topics where webmaster_id = 2 and status =1 and project_type='Up Coming' and id != 150 order by id desc ";
$result_upcoming=mysqli_query($conn, $query_upcoming);

?>
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

                    <!-- Ongoing -->
                    <?php if(mysqli_num_rows($result_ongoing) > 0):?>
                    <?php while($row = mysqli_fetch_array($result_ongoing)):?>
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


                    <!-- Upcoming -->
                    <?php if(mysqli_num_rows($result_upcoming) > 0):?>
                    <?php while($row = mysqli_fetch_array($result_upcoming)):?>
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