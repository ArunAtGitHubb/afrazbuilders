<!DOCTYPE html>
<html>

<head>
    <?php include "top-includes.php" ?>
    <style>

        .prj-phase-box .project_box_in  { 
            position: relative; 
            display: block; 
            background-color: #fff; 
            border-radius: 10px; 
            -webkit-border-radius: 10px; 
            -moz-border-radius: 10px; 
            -ms-border-radius: 10px; 
            -o-border-radius: 10px; 
            box-shadow: 0 0 15px -2px rgba(0,0,0,.2); 
            margin-bottom: 30px;
        } 

        .prj-phase-box .imgbox  { 
            position: relative;
        } 
        /* 
        .clearfix { 
            zoom: 1;
        }  */

        .prj-phase-box .txt-content  { 
            position: relative; 
            padding: 30px 36px;
        } 

        @media screen and (max-width: 1450px){ 
            .prj-phase-box .txt-content  { 
                padding: 25px;
            } 
        }     

        /* .clearfix:before,.clearfix:after { 
            content: "."; 
            display: block; 
            height: 0; 
            overflow: hidden;
        } 

        .clearfix:after { 
            clear: both;
        } 

        .clearfix:after { 
            display: block; 
            clear: both; 
            content: "";
        }  */

        .bd-share-holder { 
            position: absolute; 
            right: 0; 
            top: 0;
        } 

        .prj-phase-label-1 { 
            position: absolute; 
            right: 10px; 
            top: 10px; 
            background: 0 0; 
            border-radius: 0 10px 0 18px; 
            background-size: 20px;
        } 

        .prj-phase-box .txt-content h4  { 
            color: #394048; 
            font-size: 18px; 
            overflow: hidden; 
            margin: 0 0 22px; 
            font-family: open sans,sans-serif;
        } 

        .prj-phase-box .txt-content span  { 
            color: #3a4048; 
            font-size: 14px; 
            overflow: hidden; 
            margin: 0 0 15px; 
            display: block; 
            padding: 0 0 0 40px; 
            line-height: 30px; 
            font-family: open sans,sans-serif;
        } 

        .prj-phase-box .txt-content .ft-lk  { 
            background: url(./images/location-icon.png) no-repeat left center; 
            background-image: url("./images/location-icon.png"); 
            background-position-x: left; 
            background-position-y: center; 
            background-size: initial; 
            background-repeat-x: no-repeat; 
            background-repeat-y: no-repeat; 
            background-attachment: initial; 
            background-origin: initial; 
            background-clip: initial; 
            background-color: initial;
        } 

        .prj-phase-box .txt-content .ft-bhk  { 
            background: url(./images/bed-icon.png) no-repeat left center; 
            background-image: url("./images/bed-icon.png"); 
            background-position-x: left; 
            background-position-y: center; 
            background-size: initial; 
            background-repeat-x: no-repeat; 
            background-repeat-y: no-repeat; 
            background-attachment: initial; 
            background-origin: initial; 
            background-clip: initial; 
            background-color: initial;
        } 

        .view_more_arr { 
            display: inline-block; 
            vertical-align: middle; 
            font-size: 16px; 
            color: #ff9c00; 
            line-height: 20px; 
            padding: 13px 32px 13px 0; 
            position: relative; 
            font-family: open sans,sans-serif; 
            font-weight: 600; 
            border: 0!important; 
            background: 0 0; 
            outline: none!important;
        } 

        .view_more_arr { 
            padding: 8px 32px 8px 0; 
            float: left;
        } 

        @media screen and (max-width: 1450px){ 
            .view_more_arr { 
                padding-right: 24px; 
                font-size: 14px;
            } 
        }     

        .project_box_in .txt-content a.view_more_arr  { 
            margin-top: 0px; 
            margin-right: 16px;
        } 

        .arrow-btn:before,.view_more_arr:before { 
            position: absolute; 
            content: ''; 
            right: 0; 
            top: 50%; 
            width: 23px; 
            height: 23px; 
            margin-top: -12px; 
            background: url(./images/orange-circular-arrow.png); 
            animation-duration: 2s;
        } 

        .arrow-btn:before,.view_more_arr:before,.view_all_proj_btn:before,.download_btn_arr:before { 
            background-repeat: no-repeat; 
            background-position: center; 
            -moz-transition: all .3s ease-in; 
            -webkit-transition: all .3s ease-in; 
            -o-transition: all .3s ease-in; 
            transition: all .3s ease-in; 
            background-repeat-x: no-repeat; 
            background-repeat-y: no-repeat;
        } 

        @media screen and (max-width: 1450px){ 
            .arrow-btn:before,.view_more_arr:before,.download_btn_arr:before { 
                width: 18px; 
                height: 18px; 
                margin-top: -9px; 
                background-size: 100%;
            } 
        }     

        .view_more_arr:hover { 
            color: #ff9c00;
        } 

        .view_all_proj_btn:hover:before,.arrow-btn:hover:before,.view_more_arr:hover:before { 
            animation-name: hrFloating; 
            animation-iteration-count: infinite; 
            animation-timing-function: ease-in-out;
        } 

        .hm-broch-down-block { 
            float: right; 
            position: relative;
        } 

        img { 
            vertical-align: middle; 
            border-style: none;
        } 

        img { 
            max-width: 100%;
        } 

        .img-responsive { 
            width: 100%; 
            height: auto; 
            display: block;
        } 

        .prj-phase-box .imgbox img  { 
            border-radius: 10px 12px 0 0; 
            width: 100%; 
            height: auto;
        } 

        [class^="icon-"] { 
            font-family: icomoon!important; 
            speak: never; 
            font-style: normal; 
            font-weight: 400; 
            font-variant: normal; 
            text-transform: none; 
            line-height: 1; 
            -webkit-font-smoothing: antialiased; 
            -moz-osx-font-smoothing: grayscale;
        } 

        .prod-share-project-cta { 
            position: relative; 
            float: left; 
            width: 24px; 
            height: 24px;
        } 

        .icon-social-media { 
            height: 34px; 
            width: 34px; 
            border-radius: 50%; 
            box-shadow: 0 2px 5px rgba(0,0,0,.3); 
            color: #fff; 
            font-size: 20px; 
            position: absolute; 
            line-height: 33px; 
            text-align: center; 
            margin: 0 0 10px; 
            transition: .3s; 
            -webkit-animation: .3s down forwards; 
            animation: .3s down forwards; 
            opacity: 0; 
            will-change: animation; 
            top: 0; 
            left: 0; 
            background: #fff!important;
        } 

        .icon-social-media { 
            opacity: 1; 
            background-color: transparent; 
            cursor: pointer; 
            position: relative;
        } 

        .icon-share-alt:before { 
            content: "\f1e0";
        } 

        .prod-share-project-cta:before { 
            position: absolute; 
            left: 0; 
            top: 0; 
            width: 100%; 
            height: 100%; 
            font-size: 20px; 
            color: #febb53; 
            font-family: fontawesome!important; 
            font-weight: 400; 
            line-height: 35px;
        } 

        .hm-broch-down-cta:after { 
            content: ''; 
            position: absolute; 
            right: 0; 
            top: 16px; 
            width: 0; 
            height: 0; 
            border-style: solid; 
            border-width: 6px 5px 0; 
            border-color: #3a4048 transparent transparent transparent; 
            transform: rotate(0); 
            transition: all .2s ease-in;
        } 

        .mul_broch_list { 
            position: absolute; 
            left: 0; 
            top: 100%; 
            width: 100%; 
            list-style: none; 
            margin: 0; 
            padding: 0; 
            z-index: 5; 
            display: none;
        } 

        ul.mul_broch_list  { 
            width: 270px; 
            left: auto; 
            right: 0;
        } 

        .fab { 
            height: 34px; 
            width: 34px; 
            border-radius: 50%; 
            box-shadow: 0 2px 5px rgba(0,0,0,.3); 
            color: #fff!important; 
            font-size: 20px; 
            position: absolute; 
            line-height: 33px; 
            text-align: center; 
            margin: 0 0 10px; 
            transition: .3s; 
            -webkit-animation: .3s down forwards; 
            animation: .3s down forwards; 
            opacity: 0; 
            will-change: animation; 
            top: 0; 
            left: 0;
        } 

        .fab:nth-child(1) { 
            background-color: #ef3b4c;
        } 

        .icon-social-media a:hover { 
            color: #fff!important;
        } 

        .fab:nth-child(2) { 
            background-color: #57ba63;
        } 

        .fab:nth-child(3) { 
            background-color: #54aced;
        } 

        .fab:nth-child(4) { 
            background-color: #3a5897;
        } 

        .mul_broch_list li  { 
            float: left; 
            clear: both; 
            width: 100%;
        } 

        .house-type-tab li::after { 
            height: 15px; 
            width: 2px; 
            content: ' '; 
            background: #444; 
            position: absolute; 
            top: 12px; 
            right: 0;
        } 

        #new_home_projects .house-type-tab li::after { 
            width: 1px; 
            background-color: #303030; 
            top: 50%; 
            margin-top: -7px; 
            height: 14px;
        } 

        #new_home_projects .house-type-tab .mul_broch_list li::after { 
            display: none;
        } 

        .house-type-tab li:last-child::after { 
            height: 0; 
            width: 0;
        } 

        #new_home_projects .house-type-tab li:last-child::after { 
            height: 0; 
            width: 0;
        } 

        .icon-copy:before { 
            content: "\f0c5";
        } 

        .icon-fab:before { 
            position: absolute; 
            left: 50%; 
            top: 50%; 
            transform: translate(-50%,-50%);
        } 

        .icon-whatsapp:before { 
            content: "\f232";
        } 

        .icon-twitter:before { 
            content: "\f099";
        } 

        .icon-facebook:before { 
            content: "\f09a";
        } 

        .mul_broch_list li a  { 
            display: block; 
            font-size: 16px; 
            line-height: 20px; 
            padding: 8px 10px; 
            background-color: #fff; 
            color: #37393e; 
            border: 0; 
            width: 100%; 
            max-width: 100%; 
            border-radius: 0; 
            margin: 0!important;
        } 

        @media screen and (max-width: 1280px){ 
            .mul_broch_list li a  { 
                font-size: 14px;
            } 
        }     

        .mul_broch_list li a  { 
            padding: 12px 15px;
        } 
    </style>
</head>

<body>

<div class="page-wrapper">
 	
    <!-- Main Header / Header Style Two-->
    <?php include "header.php" ?>
    <!--End Main Header -->
	
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/9.jpg)">
    	<div class="auto-container">
        	<h1>For Sale</h1>
            <ul class="page-breadcrumb">
            	<li><a href="index.php">Home</a></li>
                <li>For Sale</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    
    <!--Blog Modern Section-->
    <section class="blog-modern-section">
    	<div class="auto-container">
            <!--News Block Three-->
            <div class="news-block-three">
            	<div class="clearfix">
                    <!-- Column 1 -->
                    <div class="row">

                        <div class="col-md-4 col-sm-6 project_item all apartment snipcss0-0-0-1 snipcss-aBIdo">
                            <div class="prj-phase-box snipcss0-1-1-2">
                                <div class="project_box_in snipcss0-2-2-3">
                                    <div class="imgbox snipcss0-3-3-4">
                                        <a href="#" class="snipcss0-4-4-5">
                                            <img data-lazyimg="images/for-sale1.jpg" 
                                                alt="Casagrand Cloud9" 
                                                class="img-responsive snipcss0-5-5-6"
                                                style="height: 250px;"
                                                src="images/for-sale1.jpg">
                                            </img>
                                        </a>
                                    </div>
                                    <div class="txt-content clearfix snipcss0-3-3-17">
                                        <h4 class="snipcss0-4-17-18"> Casagrand Cloud9 </h4>
                                        <span class="ft-lk snipcss0-4-17-19"> Sholinganallur, OMR </span>
                                        <span class="ft-bhk snipcss0-4-17-20">
                                            2, 3 &amp; 4 BHK Apts - Rs.90 L Onwards* | 4 BHK Floor Villa - Rs. 2.4 Cr Onwards* 
                                        </span>
                                        <span class="ft-amt snipcss0-4-17-21"></span>
                                        <div class="clearfix snipcss0-4-17-22"></div>
                                        <a href="contact.php" 
                                            style="color: white; display: flex; justify-content: center;" 
                                            class="theme-btn btn-style-one">Contact Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 project_item all apartment snipcss0-0-0-1 snipcss-aBIdo">
                            <div class="prj-phase-box snipcss0-1-1-2">
                                <div class="project_box_in snipcss0-2-2-3">
                                    <div class="imgbox snipcss0-3-3-4">
                                        <a href="#" class="snipcss0-4-4-5">
                                            <img data-lazyimg="images/for-sale1.jpg" 
                                                alt="Casagrand Cloud9" 
                                                class="img-responsive snipcss0-5-5-6"
                                                style="height: 250px;"
                                                src="images/for-sale1.jpg">
                                            </img>
                                        </a>
                                    </div>
                                    <div class="txt-content clearfix snipcss0-3-3-17">
                                        <h4 class="snipcss0-4-17-18"> Casagrand Cloud9 </h4>
                                        <span class="ft-lk snipcss0-4-17-19"> Sholinganallur, OMR </span>
                                        <span class="ft-bhk snipcss0-4-17-20">
                                            2, 3 &amp; 4 BHK Apts - Rs.90 L Onwards* | 4 BHK Floor Villa - Rs. 2.4 Cr Onwards* 
                                        </span>
                                        <span class="ft-amt snipcss0-4-17-21"></span>
                                        <div class="clearfix snipcss0-4-17-22"></div>
                                        <a href="contact.php" 
                                            style="color: white; display: flex; justify-content: center;" 
                                            class="theme-btn btn-style-one">Contact Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 project_item all apartment snipcss0-0-0-1 snipcss-aBIdo">
                            <div class="prj-phase-box snipcss0-1-1-2">
                                <div class="project_box_in snipcss0-2-2-3">
                                    <div class="imgbox snipcss0-3-3-4">
                                        <a href="#" class="snipcss0-4-4-5">
                                            <img data-lazyimg="images/for-sale1.jpg" 
                                                alt="Casagrand Cloud9" 
                                                class="img-responsive snipcss0-5-5-6"
                                                style="height: 250px;"
                                                src="images/for-sale1.jpg">
                                            </img>
                                        </a>
                                    </div>
                                    <div class="txt-content clearfix snipcss0-3-3-17">
                                        <h4 class="snipcss0-4-17-18"> Casagrand Cloud9 </h4>
                                        <span class="ft-lk snipcss0-4-17-19"> Sholinganallur, OMR </span>
                                        <span class="ft-bhk snipcss0-4-17-20">
                                            2, 3 &amp; 4 BHK Apts - Rs.90 L Onwards* | 4 BHK Floor Villa - Rs. 2.4 Cr Onwards* 
                                        </span>
                                        <span class="ft-amt snipcss0-4-17-21"></span>
                                        <div class="clearfix snipcss0-4-17-22"></div>
                                        <a href="contact.php" 
                                            style="color: white; display: flex; justify-content: center;" 
                                            class="theme-btn btn-style-one">Contact Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            
        </div>
    </section>
    <!--End Modern Section Section-->

    <!--Main Footer-->
    <?php include "footer.php" ?>
</body>

</html>