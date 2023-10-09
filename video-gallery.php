<?php
include 'config.php';

// Create connection
$conn = new mysqli($servername, $DB_USERNAME, $DB_PASSWORD, $DB_DATABASE);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$query2 = "SELECT COUNT(id) as total_record FROM smartend_topics where webmaster_id = 5 and status =1 ";
$result2 =mysqli_query($conn, $query2);
$title="";
while($row2 = mysqli_fetch_array($result2)){
    $totalRecords = $row2["total_record"];
}



// $totalRecords = 50; // Total number of records in your dataset
$pageSize = 5; // Number of records to display per page

// Determine the current page number
$currentpage = isset($_GET['page']) ? $_GET['page'] : 1;

// Calculate the offset
$offset = ($currentpage - 1) * $pageSize;




 // $query = "SELECT * FROM smartend_topics where webmaster_id = 2 and status =1 and project_type='Up Coming' and id != 150 order by id desc LIMIT $offset, $pageSize";

$query = "SELECT * FROM smartend_topics where webmaster_id = 5 and status =1 order by id desc ";
$result=mysqli_query($conn, $query);
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
            <h1>Video Gallery</h1>
            <ul class="page-breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li>Video Gallery</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    
    <!--Services Section-->
    <section class="services-section-two" style="margin: 2rem 0;">
        <div class="auto-container">
            <div class="sec-title centered">
                <h2>Video Gallery</h2>
                <div class="separater"></div>
            </div>
            <div class="inner-container" style="margin-top: 3rem;">
                <div class="row">
                    <?php if(mysqli_num_rows($result) > 0):?>
                    <?php while($row = mysqli_fetch_array($result)):?>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <iframe height="215" src="<?php echo $row["video_file"]; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </figure>
                        </div>
                    </div>
                    <?php endwhile; endif; ?>
                    <!-- <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <iframe height="215" src="https://www.youtube.com/embed/g-TYUdM0rjk?si=8npitF0Ysw_dRzsC" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </figure>
                        </div>
                    </div> -->
                    <!-- <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <iframe height="215" src="https://www.youtube.com/embed/g-TYUdM0rjk?si=8npitF0Ysw_dRzsC" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </figure>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!--End Services Section-->
    
    <!--Main Footer-->
    <?php include "footer.php" ?>
</body>

</html>