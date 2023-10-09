 <?php
include 'config.php';
$id= $_GET["key"];

// Create connection
$conn = new mysqli($servername, $DB_USERNAME, $DB_PASSWORD, $DB_DATABASE);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query2 = "SELECT COUNT(id) as total_record FROM smartend_photos where topic_id = ".$id;
$result2 =mysqli_query($conn, $query2);
$title="";
while($row2 = mysqli_fetch_array($result2)){
    $totalRecords = $row2["total_record"];
}



// $totalRecords = 50; // Total number of records in your dataset
$pageSize = 3; // Number of records to display per page

// Determine the current page number
$currentpage = isset($_GET['page']) ? $_GET['page'] : 1;

// Calculate the offset
$offset = ($currentpage - 1) * $pageSize;



$query = "SELECT * FROM smartend_photos where topic_id = ".$id." order by id desc";
// $query = "SELECT * FROM smartend_photos where topic_id = ".$id." order by row_no LIMIT $offset, $pageSize";
$result=mysqli_query($conn, $query);

$query1 = "SELECT title_en FROM smartend_topics where id = ".$id." order by row_no";
$result1 =mysqli_query($conn, $query1);
$title="";
while($row1 = mysqli_fetch_array($result1)){
    $title=$row1["title_en"];
}
?>
<!DOCTYPE html>
<html>

<head>
    <?php include "top-includes.php" ?>
<body>

<div class="page-wrapper">

    <!-- Main Header / Header Style Two-->
    <?php include "header.php" ?>
    <!--End Main Header -->
	
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/9.jpg)">
    	<div class="auto-container">
        	<h1>Project Details</h1>
            <ul class="page-breadcrumb">
            	<li><a href="index.php">Home</a></li>
                <li>Project Details</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    
    <!--Blog Page Section-->
    <section class="blog-page-section">
    	<div class="auto-container">
        	<div class="row clearfix">
                <!--News Block Three-->
                <div class="mixitup-gallery">
                    <div class="filter-list row clearfix">

                        <?php if(mysqli_num_rows($result) > 0): while($row = mysqli_fetch_array($result)):?> 
                        <div class="default-portfolio-item mix all completed col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="<?php if(isset($row["file"])) { echo $base_url.$row['file'];} else {echo "img/dummy.jpg";} ?>" style="height: 235px;width: 450px;" alt="">
                                </figure>
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a 
                                                href="<?php if(isset($row["file"])) { echo $base_url.$row['file'];} else {echo "img/dummy.jpg";} ?>" 
                                                class="lightbox-image link" data-fancybox="images" 
                                                data-caption="" title="">
                                                <span class="icon fa fa-search"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; endif; ?> 
                        <!-- <div class="default-portfolio-item mix all completed col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="images/projects/gallery/ongoing/image-9.jpg" style="height: 235px;" alt="">
                                </figure>
                                
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a 
                                                href="images/projects/gallery/ongoing/image-9.jpg" 
                                                class="lightbox-image link" data-fancybox="images" 
                                                data-caption="" title="">
                                                <span class="icon fa fa-search"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="default-portfolio-item mix all completed col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="images/projects/gallery/upcoming/image-4.jpg" style="height: 235px;" alt="">
                                </figure>
                        
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a 
                                                href="images/projects/gallery/upcoming/image-4.jpg" 
                                                class="lightbox-image link" data-fancybox="images" 
                                                data-caption="" title="">
                                                <span class="icon fa fa-search"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
                <!-- <a href="contact.php" style="color: white;" class="theme-btn btn-style-one">Back to Home</a>  -->
            </div>
            
            <!--Styled Pagination-->
            <!-- <ul class="styled-pagination text-center">
                <li class="prev"><a href="#"><span class="fa fa-angle-left"></span></a></li>
                <li><a href="#">1</a></li>
                <li><a href="#" class="active">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li class="next"><a href="#"><span class="fa fa-angle-right"></span></a></li>
            </ul>  -->               
            <!--End Styled Pagination-->
            <?php   // Generate pagination links
// $totalPages = ceil($totalRecords / $pageSize);

// echo "<ul class='custom-pagination' style='display:flex;justify-content: center;color:#000000 !important;'>";

// // Display the previous page link
// if ($currentpage > 1) {
//     echo "<li><a style='color:#000000 !important;' href=?key=$id&page=".($currentpage - 1).">Previous</a></li>";
// }

// // Display the page numbers with custom styling
// for ($i = 1; $i <= $totalPages; $i++) {
//     if ($i == $currentpage) {
//         echo "<li class = 'active'><span style='color:#000000 !important;back#e49926;line-height:180%;' class='current-page'>$i</span></li>";
//     } else {
//         echo "<li><a style='color:#000000 !important;' href=?key=$id&page=$i>$i</a></li>";
//     }
// }

// // Display the next page link
// if ($currentpage < $totalPages) {
//     echo "<li><a style='color:#000000 !important;' href=?key=$id&page=".($currentpage + 1).">Next</a></li>";
// }

// echo "</ul>";
?>  
        </div>
    </section>
    <!--End Blog Page Section-->
    
    <!--Main Footer-->
    <?php include "footer.php" ?>
</body>

</html>