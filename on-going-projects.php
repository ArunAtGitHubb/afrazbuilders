<?php
include 'config.php';

// Create connection
$conn = new mysqli($servername, $DB_USERNAME, $DB_PASSWORD, $DB_DATABASE);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$query2 = "SELECT COUNT(id) as total_record FROM smartend_topics where webmaster_id = 2 and status =1 and project_type='On Going' and id != 150 ";
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




 // $query = "SELECT * FROM smartend_topics where webmaster_id = 2 and status =1 and project_type='On Going' and id != 150 order by id desc LIMIT $offset, $pageSize";

$query = "SELECT * FROM smartend_topics where webmaster_id = 2 and status =1 and project_type='On Going' and id != 150 order by id desc ";
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
            <h1>Ongoing Projects</h1>
            <ul class="page-breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li>Ongoing Projects</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    
    
    <!--Project Page Section-->
    <section class="project-page-section" style="margin-bottom: 60px; margin-top: 1.5rem;">
        <div class="auto-container">
            <div class="sec-title centered">
                <h2>Our Ongoing Projects</h2>
                <div class="separater"></div>
            </div>
            <!--MixitUp Galery-->
            <div class="mixitup-gallery">
                
                <div class="filter-list row clearfix">
                
                    <!--Default Portfolio Item-->
                    <!-- Ongoing -->
                    <?php if(mysqli_num_rows($result) > 0):?>
                    <?php while($row = mysqli_fetch_array($result)):?>
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
                </div>
                 <?php   // Generate pagination links
    // $totalPages = ceil($totalRecords / $pageSize);

    // echo "<ul class='custom-pagination' style='display: flex;justify-content: center;color:#000000 !important;    padding-top: 20px;'>";

    // // Display the previous page link
    // if ($currentpage > 1) {
    //     echo "<li><a style='color:#000000 !important;' href=?page=".($currentpage - 1).">Previous</a></li>";
    // }

    // // Display the page numbers with custom styling
    // for ($i = 1; $i <= $totalPages; $i++) {
    //     if ($i == $currentpage) {
    //         echo "<li class = 'active'><span style='color:#000000 !important;back#e49926;background-color:#3b56ad;line-height:180%;' class='current-page'>$i</span></li>";
    //     } else {
    //         echo "<li><a style='color:#000000 !important;' href=?page=$i>$i</a></li>";
    //     }
    // }

    // // Display the next page link
    // if ($currentpage < $totalPages) {
    //     echo "<li><a style='color:#000000 !important;' href=?page=".($currentpage + 1).">Next</a></li>";
    // }

    // echo "</ul>";
?>
            </div>
        </div>
    </section>
    <!--End Project Page Section-->

    <!--Main Footer-->
    <?php include "footer.php" ?>
</body>

</html>