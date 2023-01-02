<!DOCTYPE html>

<!--
	Template:   Nui - Creative Portfolio Showcase HTML Website Template
	Author:     Themetorium
	URL:        https://themetorium.net/
-->

<html lang="en">
	<head>
        
		<!-- Title -->
		<title>Macbox Media - <?php the_title() ?> </title>
        
		<!-- Meta -->
		<meta charset="utf-8">
		<meta name="description" content="Download Nui - Creative Portfolio Showcase HTML Website Template that comes with rich features and well-commented code. Made by Themetorium.">
		<meta name="author" content="themetorium.net">
        <?php wp_head()?>
		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
		<!-- Favicon (http://www.favicon-generator.org/) -->
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<link rel="icon" href="favicon.ico" type="image/x-icon">

		<!-- Google Analytics -->
		<!-- Paste your Google Analytics code here (go to http://www.google.com/analytics/ for more information). -->
        
		<!-- Google fonts (https://www.google.com/fonts) -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet"> <!-- Body font -->
		<link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&display=swap" rel="stylesheet"> <!-- Secondary/Alter font -->
        
		<!-- Libs and Plugins CSS -->
		<link rel="stylesheet" href=" <?php echo get_template_directory_uri(); ?>/assets/vendor/normalize/normalize.min.css"> <!-- Normalize CSS (https://necolas.github.io/normalize.css/) -->
		<link rel="stylesheet" href=" <?php echo get_template_directory_uri(); ?>/assets/vendor/fontawesome/css/fontawesome-all.min.css"> <!-- Font Icons CSS (https://fontawesome.com) Free version! -->
		<link rel="stylesheet" href=" <?php echo get_template_directory_uri(); ?>/assets/vendor/swiper/css/swiper-bundle.min.css"> <!-- Swiper CSS (https://swiperjs.com/) -->
		<link rel="stylesheet" href=" <?php echo get_template_directory_uri(); ?>/assets/vendor/lightgallery/css/lightgallery.min.css"> <!-- lightGallery CSS (http://sachinchoolur.github.io/lightGallery) -->
        
		<!-- Template master CSS -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/helper.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/theme.css">
        
	</head>
    <!-- ===========
	///// Body /////
	================
	* Use class "tt-boxed" to enable page boxed layout globally (affects all elements containing class "tt-wrap").
	* Use class "tt-smooth-scroll" to enable page smooth scrolling.
	* Use class "tt-transition" to enable page transitions.
	* Use class "tt-magic-cursor" to enable magic cursor.
	* Note: there may be classes that are specific to this page only!
-->
<body id="body" class="tt-transition tt-boxed tt-smooth-scroll tt-magic-cursor">
    
    
    <!-- *************************************
    *********** Begin body inner ************* 
    ************************************** -->
    <main id="body-inner">
        
        <!-- Begin page transition (do not remove!!!) 
        =========================== -->
        <div id="page-transition">
            <div class="ptr-overlay"></div>
            <div class="ptr-preloader">
                <div class="ptr-prel-content">
                    <!-- Hint: You may need to change the img height and opacity to match your logo type. You can do this from the "theme.css" file (find: ".ptr-prel-image"). -->
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-light.png" class="ptr-prel-image tt-logo-light" alt="Logo">
            </div> <!-- /.ptr-prel-content -->
        </div> <!-- /.ptr-preloader -->
    </div>
    <!-- End page transition -->
    
    <!-- Begin magic cursor 
    ======================== -->
    <div id="magic-cursor">
        <div id="ball"></div>
    </div>
    <!-- End magic cursor --> 
    
    
    <!-- *****************************************
    *********** Begin scroll container *********** 
    ****************************************** -->
    <div id="scroll-container"> 
        
        <!-- ===================
        ///// Begin header /////
        ========================
        * Use class "tt-header-fixed" to set header to fixed position.
    -->
    <header id="tt-header">
        <div class="tt-header-inner"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag!). Note: additionally you can use prepared helper class "max-width-*" to add custom width to "tt-wrap". Example: "max-width-1500" (class "tt-wrap" is still required!). More info about helper classes can be found in the file "helper.css". -->
            
            <div class="tt-header-col">
                
                    <!-- Begin logo 
                    ================ -->
                    <div class="tt-logo"> 
                        <a href="<?php echo site_url() ?>">
                            <!-- Hint: You may need to change the img height to match your logo type. You can do this from the "theme.css" file (find: ".tt-logo img"). -->
                            <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-light.png"     class="tt-logo-dark magnetic-item"       class="tt-logo-light magnetic-item" alt="Logo"> logo light -->
                            <?php
                                 $logoimg=get_header_image() 
                            ?>
                            <img src="<?php echo $logoimg;?>" >
                        </a>
                    </div>
                    <!-- End logo -->
                    
                </div> <!-- /.tt-header-col -->
                
                <div class="tt-header-col">
                    
                    <!-- Begin overlay menu toggle button -->
                    <div id="tt-ol-menu-toggle-btn-wrap">
                        <div class="tt-ol-menu-toggle-btn-text-wrap hide-cursor">
                            <div class="tt-ol-menu-toggle-btn-text">
                                <span class="text-menu" data-hover="Open">Menu</span>
                                <span class="text-close">Close</span>
                            </div> <!-- /.tt-ol-menu-toggle-btn-text -->
                        </div> <!-- /.tt-ol-menu-toggle-btn-text-wrap -->
                        <div class="tt-ol-menu-toggle-btn-holder">
                            <a href="#" class="tt-ol-menu-toggle-btn magnetic-item"><span></span></a>
                        </div> <!-- /.tt-ol-menu-toggle-btn-holder -->
                    </div>
                    <!-- End overlay menu toggle button -->
                    
                    <!-- Begin overlay menu 
                    ======================== 
                    * Use class "tt-ol-menu-count" to enable menu counter.
                -->
                <nav class="tt-overlay-menu tt-ol-menu-count">
                    <div class="tt-ol-menu-ghost">Explore</div>
                        <div class="tt-ol-menu-holder">
                            <div class="tt-ol-menu-inner tt-wrap">
                                <div class="tt-ol-menu-content">
                                    
                                    <!-- Begin menu list -->
                                    <ul class="tt-ol-menu-list">
                                        
                                        <!-- <li class="active"> -->
                                            <!-- <a href="/">Home</a></li> -->
                                        
                                        <!-- Begin submenu (submenu master)
                                        ==================================== -->
                                        <li class="tt-ol-submenu-wrap">
                                            <div class="tt-ol-submenu-trigger">
                                                <a href="#">
                                                         <?php
                                                         wp_nav_menu(array('theme_location' => 'primary-menu', 'menu_class' => 'nav' ))
                                                      ?>
            
                                                </a>
                                                <!-- <div class="tt-ol-submenu-caret-wrap">
                                                    <div class="tt-ol-submenu-caret magnetic-item"></div>
                                                </div> /.tt-ol-submenu-caret-wrap 
                                            </div> /.tt-ol-submenu-trigger -->
                                       
                                        <!-- </li> -->
                                        <!-- End submenu (sub-master) -->
                                        
                                        <!-- Begin submenu (submenu master)
                                        ==================================== -->
                                        <!-- <li class="tt-ol-submenu-wrap">
                                            <div class="tt-ol-submenu-trigger">
                                                 <a href="#">About</a>                                                                                        -->
                                            <!-- </div> /.tt-ol-submenu 
                                        </li> -->
                                        <!-- End submenu (sub-master) -->
                                        
                                        <!-- Begin submenu (submenu master)
                                        ==================================== -->
                                        <!-- <li class="tt-ol-submenu-wrap">
                                            <div class="tt-ol-submenu-trigger"> -->
                                                <!-- <a href="#">Blog</a> -->
                                                <!-- <div class="tt-ol-submenu-caret-wrap"> -->
                                                    <!-- <div class="tt-ol-submenu-caret magnetic-item"></div> -->
                                                    <!-- </div> -->
                                                    <!-- /.tt-ol-submenu-caret-wrap -->
                                                    <!-- </div> -->
                                             <!-- /.tt-ol-submenu-trigger -->
                                        <!-- </li> -->
                                        <!-- End submenu (sub-master) -->
                                        
                                        <!-- Begin submenu (submenu master)
                                        ==================================== -->
                                        <!-- <li class="tt-ol-submenu-wrap">
                                            <div class="tt-ol-submenu-trigger"> -->
                                                <!-- <a href="#">Contact</a> -->
                                                <!-- <div class="tt-ol-submenu-caret-wrap">
                                                    <div class="tt-ol-submenu-caret magnetic-item"></div>
                                                </div> /.tt-ol-submenu-caret-wrap 
                                            </div> /.tt-ol-submenu-trigger -->
                                    
                                        <!-- </li> -->
                                        <!-- End submenu (sub-master) -->
                                        
                                    </ul>
                                    <!-- End menu list -->

                                    <!-- Begin overlay menu social links 
                                    ===================================== -->
                                    <ul class="tt-ol-menu-social">
                                        <li><h6 class="tt-ol-menu-social-heading">Social Links:</h6></li>
                                        <li><a href="https://www.facebook.com/themetorium" target="_blank" rel="noopener">Facebook</a></li>
                                        <li><a href="https://twitter.com/Themetorium" target="_blank" rel="noopener">Twitter</a></li>
                                        <li><a href="https://www.youtube.com/" target="_blank" rel="noopener">Youtube</a></li>
                                        <li><a href="https://dribbble.com/Themetorium" target="_blank" rel="noopener">Dribbble</a></li>
                                        <li><a href="https://www.behance.net/Themetorium" target="_blank" rel="noopener">Behance</a></li>
                                    </ul>
                                    <!-- End overlay menu social links -->
                                    
                                </div> <!-- /.tt-ol-menu-content -->
                            </div> <!-- /.tt-ol-menu-inner -->
                        </div> <!-- /.tt-ol-menu-holder -->
                    </nav> 
                    <!-- End overlay menu -->
                    
                </div> <!-- /.header-col -->
            </div> <!-- /.header-inner -->
            
        </header>
        <!-- End header -->
        
        
        
        
      