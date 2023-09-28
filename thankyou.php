<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'top-includes.php' ?>
</head>

<body>

<div class="boxed_wrapper ltr">

<!-- Main header-->
<header class="main-header header-style-one">
    <?php include 'header.php' ?>
</header>


    <section class="error-section" style="margin:50px; padding-bottom: 3rem;">
        <div class="container clearfix">
            <div class="error-text text-center">
                <img style="height: 180px; width:auto;" src="images/success.png" alt="">
                <h2>Thankyou</h2>
                <p>Your Submission has been sent!</p>
                <div class="link-btn">
                    <a href="index.php">GO TO HOME</a>
                </div>
            </div>
        </div>
    </section>


<?php include 'footer.php' ?>

<style>
    .error-section .link-btn a {
        font-size: 14px;
        line-height: 26px;
        font-weight: 400;
        color: #fff;
        font-family: 'Open Sans', sans-serif;
        background: #72a01d;
        padding: 13px 19px;
        border-radius: 25px;
        font-weight: 600;
        border: 1px solid #058837;
        transition: all 500ms ease;
    }
</style>

</body>

</html>