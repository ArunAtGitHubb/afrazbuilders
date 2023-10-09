<?php
include 'config.php';

// Create connection
$conn = new mysqli($servername, $DB_USERNAME, $DB_PASSWORD, $DB_DATABASE);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$query2 = "SELECT COUNT(id) as total_record FROM smartend_photos  where topic_id = 150 ";
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

$query = "SELECT * FROM smartend_photos where topic_id = 150 order by id desc ";
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
        	<h1>Photo Gallery</h1>
            <ul class="page-breadcrumb">
            	<li><a href="index.php">Home</a></li>
                <li>Photo Gallery</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    
    <!--Services Section-->
    <section class="services-section-two" style="margin: 2rem 0;">
    	<div class="auto-container">
            <div class="sec-title centered">
            	<h2>Photo Gallery</h2>
                <div class="separater"></div>
            </div>
        	<div class="inner-container" style="margin-top: 3rem;">
                <div class="row">
                    <?php if(mysqli_num_rows($result) > 0):?>
                    <?php while($row = mysqli_fetch_array($result)):?>
                    <div class="col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
                            <figure class="image-box">
                                <img src="<?php if(isset($row["file"])) { echo $base_url.$row['file'];} else {echo "img/dummy.jpg";} ?>" style="height: 235px; width: 315px;" alt="">
                            </figure>
                        </div>
                    </div>
                    <?php endwhile; endif; ?>
                    
                    
                    
                </div>
            </div>
        </div>
    </section>
    <!--End Services Section-->
    
    <!--Main Footer-->
    <?php include "footer.php" ?>
</body>

</html>