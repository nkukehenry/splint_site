<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>FITSPA - Uganda</title>
    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/fitspa/revolution/css/settings.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/fitspa/revolution/css/navigation.css">
    <!-- Style Sheet -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/fitspa/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/fitspa/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/fitspa/fonts/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/fitspa/css/cubeportfolio.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/fitspa/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/fitspa/css/owl.theme.default.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/fitspa/css/jquery.fancybox.min.css">
    <link rel="icon" href="<?php echo base_url(); ?>public/fitspa/images/favicon.png">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/fitspa/css/style.css">


<style type="text/css">
    

/*
-------------------------------
Logo and Menu
-------------------------------
*/
.logo {
    min-height: 80px;
}

.logo img {
    width: auto;
    height: 65px;
}

.main-menu-item {
    float: right;
    margin-right: 25px;
}

ul.nav-menu {
    list-style: none;
    margin: 0;
    padding: 0;
}

ul.nav-menu li {
    position: relative;
    float: left;
}

ul.nav-menu li a {
    font-size: 15px;
    font-weight: 400;
   /* font-weight: 700;*/
    text-transform: capitalize;
    /*color: var(--menuTextColor);*/
     color: #ffff!important;
    text-decoration: none;
    padding: 0 16px;
    min-height: 87px;
    display: -webkit-flex;
    display: flex;
    -webkit-justify-content: center;
    justify-content: center;
    -webkit-flex-direction: column;
    flex-direction: column;
}

ul.nav-menu li ul {
    position: absolute;
    width: 250px;
    top: 100%;
    left: 0;
    z-index: 999;
}

ul.nav-menu li ul > li {
    float: none;
    display: none;
    opacity: 0;
}

ul.nav-menu li ul li a {
    font-size: 13px;
    font-weight: 500;
    letter-spacing: 0.5px;
    font-family: 'Roboto Condensed', sans-serif;
    padding: 14px 20px;
    background: var(--mainColor);
    color: #fff;
    border-bottom: 1px solid rgba(255,255,255,0.20);
    min-height: 49px;
}

ul.nav-menu li ul li ul {
    top: 0;
    left: 100%;
}

ul.nav-menu li:hover ul > li > ul > li > a{
    border-left: 1px solid rgba(255,255,255,0.20);
}

ul.nav-menu li:hover > a {
    color: var(--mainColor);
}
ul.nav-menu li ul li:hover > a{
    background: #f1f1f1;
    color: var(--mainColor);
    border-bottom:  1px solid #f1f1f1;
}

ul.nav-menu li:focus > ul > li,
ul.nav-menu li:hover > ul > li {
    display: block;
    -webkit-transform: translateX(100%);
    transform: translateX(100%);
    -webkit-animation: fade 0.4s forwards;
    animation: fade 0.4s forwards;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
}

@-webkit-keyframes fade {
    0% {
        -webkit-transform: translateY(0px);
        ;
    }
    100% {
        -webkit-transform: translateY(0px);
        ;
    }
    0% {
        -webkit-transform: translateY(0px);
        ;
    }
}

@keyframes fade {
    0% {
        transform: translateY(0px);
    }
    100% {
        transform: translateY(0px);
        opacity: 1;
    }
    0% {
        transform: translateY(0px);
    }
}

ul.nav-menu li ul li:first-child {
    animation-delay: 0.1s;
}

ul.nav-menu li ul li:nth-child(2) {
    animation-delay: 0.2s;
}

ul.nav-menu li ul li:nth-child(3) {
    animation-delay: 0.3s;
}

ul.nav-menu li ul li:nth-child(4) {
    animation-delay: 0.4s;
}

ul.nav-menu li ul li:nth-child(5) {
    animation-delay: 0.5s;
}

ul.nav-menu li ul li:nth-child(6) {
    animation-delay: 0.6s;
}

ul.nav-menu li ul li:nth-child(7) {
    animation-delay: 0.7s;
}

ul.nav-menu li ul li:nth-child(8) {
    animation-delay: 0.8s;
}

ul.nav-menu li ul li:nth-child(9) {
    animation-delay: 0.9s;
}

ul.nav-menu li ul li:nth-child(10) {
    animation-delay: 1s;
}

.mean-container .mean-nav ul {
    position: static;
    display: block;
}

.mean-container .mean-nav ul li a {
    background: var(--mainColor);
    border-left: 0;
    padding: 13px 5%;
}

.mean-container .mean-nav ul li:hover {
    background: none;
}

.mean-container .mean-nav ul li a:hover {
    background-color: rgba(255, 255, 255, 0.1)!important;
}

.mean-container .mean-nav ul li a.mean-expand {
    height: 24px!important;
}

#strickymenu.sticky {
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    background-color: var(--menuBackground);
    border-bottom: 1px solid var(--menuBorder);
    z-index: 999;
    -webkit-transition: height 0.3s;
    transition: all 0.3s;
}

#strickymenu.sticky .logo {
    min-height: 60px;
}

#strickymenu.sticky .logo img {
    height: 50px;
}

#strickymenu.sticky ul.nav-menu li a {
    min-height: 60px;
}

#strickymenu.sticky ul.nav-menu li ul li a {
    min-height: 49px;
}


@media only screen and (max-width:991px) {
    .header-area {
        text-align: center;
    }
    .header-info {
        text-align: center;
        margin-top: 12px;
    }

    /* Menu */
    #strickymenu.sticky {
        display: none;
    }
    .logo {
        text-align: center;
    }
    .main-menu-item {
        float: none;
    }
    ul.nav-menu li a {
        display: block;
        min-height: 0px;
        font-size: 14px;
    }
    ul.nav-menu li.menu-item-has-children:before {
        display: none;
    }
    ul.nav-menu li ul > li {
        display: block;
        opacity: 1;
    }
    ul.nav-menu li ul li a {
        border-bottom: 0px;
        min-height: 0;
    }
    ul.nav-menu li:hover ul > li > ul > li {
        border-left: 0px;
    }
    ul.nav-menu li:focus > ul > li,
    ul.nav-menu li:hover > ul > li {
        -moz-transform: translateX(0%);
        -webkit-transform: translateX(0%);
        transform: translateX(0%);
        -moz-animation: none;
        -webkit-animation: none;
        animation: none;
        -webkit-transition: all 0s;
        -o-transition: all 0s;
        transition: all 0s;
    }
    ul.nav-menu li:hover > a{
        color: #fff;
        padding: 13px 5%;
    }
    .mean-container .mean-nav ul li li a.mean-expand{
        height: 18px !important;
    }
    .mean-container .mean-nav ul li li a{
        padding: 11px 10%;
    }
    ul.nav-menu li ul li:hover > a{
        background-color: transparent;
        color: #fff;
        border-bottom: 0;
        padding: 11px 10%;
    }
    .mean-container .mean-nav ul li li li a{
        padding: 11px 15%;
    }
    ul.nav-menu li ul li li:hover > a{
        padding: 11px 15%;
    }

    .menu-area .main-menu .main-menu-item .nav-menu .menu-word{
        color: #ffff!important;
        text-transform: capitalize;
    }
   /* .menu-word: hover{
        color: #ffff !important;
    }*/
}

</style>

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="90">

<!--Preloader-->
<div class="loader" id="loader-fade">
   <div class="loading-wrapper">
   <img src="<?php echo base_url(); ?>public/fitspa/images/fitspa-logo-white.png" width="100px">
   <h4>Loading...</h4>
   </div>
</div>

<!--End Preloader-->

<!--Header Section-->

    <!--Menu Start-->

    <div id="strickymenu" class="menu-area navbar-top-default bg-transparent navbar-default navbar-fixed-top nav-padding20" style="background-color: #153057; color:#ffff;">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="logo flex">
                      <!--   <img src="<?php //echo base_url(); ?>public/fitspa/images/fitspa-logo-white.png" class="logo-dark" alt="logo" > -->
                        <!-- <a href="<?php //echo base_url(); ?>"><img src="<?php //echo base_url(); ?>public/uploads/<?php //echo $setting['logo']; ?>" alt="Logo" style="max-height: 60px!important; max-width: 140px!important;"></a> -->
                    </div>
                </div>
                <div class="side-nav-btn hidden-lg" id="sidemenu_toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="col-lg-10  main-menu" id="bizwa">
                    <div class="main-menu-item">
                        <ul class="nav-menu">
                            <li><a href="<?php echo base_url(); ?>" class="menu-word">Home</a></li>
                            <li class="menu-item-has-children"><a href="#" class="menu-word">About</a>
                                <ul>
                                    <li><a href="<?php echo base_url(); ?>about">Overview</a></li>
                                    <li><a href="<?php echo base_url(); ?>team">Our team</a></li>
                                     <li><a href="<?php echo base_url(); ?>photo-gallery">Photo Gallery</a></li>
                                    <li><a href="<?php echo base_url(); ?>faq">
                                        Frequently asked questions
                                    </a></li>
                                    
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="#" class="menu-word">Membership</a>
                                <ul>
                                    <li><a href="<?php echo base_url(); ?>our-community">Our Community</a></li>
                                     <li><a href="<?php echo base_url(); ?>membership-packages">Become a member</a></li>
                                     <!-- <li><a href="<?php echo base_url(); ?>pricing"><?php echo PRICING_TABLE; ?></a></li> -->  
                                </ul>
                            </li>
                            <li><a href="<?php echo base_url(); ?>events" class="menu-word">Events</a></li>
                            <li><a href="<?php echo base_url(); ?>publications" class="menu-word">Directory</a></li>
                            
                            <li class="menu-item-has-children"><a href="#" class="menu-word">Careers & Opportunities</a>
                                <ul>
                                    <li><a href="<?php echo base_url(); ?>jobs-oppenings">Job Openings</a></li>
                                    <li><a href="<?php echo base_url(); ?>opportunities">Opportunities</a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo base_url(); ?>blog-post" class="menu-word">Blog</a></li>
                            <li><a href="<?php echo base_url(); ?>contact" class="menu-word">Contact Us</a></li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <!--Menu End-->
<?php /*
<header>
    <!--Navigation-->
    <nav class="navbar navbar-expand-lg navbar-top-default bg-transparent navbar-default navbar-fixed-top nav-padding20 nav-icon black-bg fixed-black">
        <div class="container">
            <a href="#." title="Logo" class="logo scroll">
                <img src="<?php echo base_url(); ?>public/fitspa/images/fitspa-logo-white.png" class="logo-dark" alt="logo">
                <img src="<?php echo base_url(); ?>public/fitspa/images/fitspa-logo-white.png" alt="logo" class="logo-light default">
            </a>

            <div class="side-nav-btn hidden-lg" id="sidemenu_toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>

       <!--Nav Links-->
            <div class="collapse navbar-collapse" id="bizwa">
                <ul class="navbar-nav ml-auto nav-color">
                    <li class="nav-item">
                        <a class="nav-link scroll" href="<?php echo base_url(); ?>">Home</a>
                    </li>
                    <li class="menu-item-has-children"><a href="#" class="menu-word">About</a>
                        <ul>
                            <li><a href="<?php echo base_url(); ?>about">Overview</a></li>
                            <li><a href="<?php echo base_url(); ?>team">Our team</a></li>
                             <li><a href="<?php echo base_url(); ?>photo-gallery">Photo Gallery</a></li>
                            <li><a href="<?php echo base_url(); ?>faq">
                                Frequently asked questions
                            </a></li>
                            
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#" class="menu-word">Membership</a>
                        <ul>
                            <li><a href="<?php echo base_url(); ?>our-community">Our Community</a></li>
                             <li><a href="<?php echo base_url(); ?>membership-packages">Become a member</a></li>
                             <!-- <li><a href="<?php echo base_url(); ?>pricing"><?php echo PRICING_TABLE; ?></a></li> -->  
                        </ul>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link scroll" href="<?php echo base_url(); ?>events">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="<?php echo base_url(); ?>publications">Directory</a>
                    </li>

                    <li class="menu-item-has-children"><a href="#" class="menu-word">
                    Careers & Opportunities</a>
                        <ul>
                            <li><a href="<?php echo base_url(); ?>jobs-oppenings">Job Openings</a></li>
                            <li><a href="<?php echo base_url(); ?>opportunities">Opportunities</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link scroll" href="<?php echo base_url(); ?>about">Events</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link scroll" href="<?php echo base_url(); ?>blog-post">


                        7ygBlog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="<?php echo base_url(); ?>contact">Contact Us</a>
                    </li>
                </ul>
            </div>

            <div class="md-pl-0 pl-3 d-none d-lg-inline-block header-social">
                <a class="facebook-hover-effect" href="javascript:void(0)"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                <a class="twitter-hover-effect" href="javascript:void(0)"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                <a class="youtube-hover-effect" href="javascript:void(0)"><i class="fab fa-youtube" aria-hidden="true"></i></a>
            </div>
        </div><!--end container-->
    </nav>

    <!-- side menu -->
    <div class="side-menu">
        <div class="inner-wrapper">
            <span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
            <nav class="side-nav">
                <ul class="navbar-nav">
                   <li class="nav-item">
                        <a class="nav-link scroll" href="<?php echo base_url(); ?>about">About</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link scroll" href="<?php echo base_url(); ?>about">Membership</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="<?php echo base_url(); ?>about">Events</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link scroll" href="<?php echo base_url(); ?>about">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="<?php echo base_url(); ?>about">Contact Us</a>
                    </li>
                </ul>
            </nav>


            <div class="side-footer text-white w-100">
                <ul class="social-icons-simple">
                    <li><a href="#." class="facebook-text-hvr"><i class="fab fa-facebook" aria-hidden="true"></i></a> </li>
                    <li><a href="#." class="twitter-text-hvr"><i class="fab fa-twitter" aria-hidden="true"></i></a> </li>
                    <li><a href="#." class="linkedin-text-hvr"><i class="fab fa-linkedin" aria-hidden="true"></i></a> </li>
                    <li><a href="#." class="google-text-hvr"><i class="fab fa-google-plus" aria-hidden="true"></i></a> </li>
                </ul>
                <p class="whitecolor">&copy; 2021 Fitspa</p>
            </div>


        </div>
    </div>
    <!-- End side menu -->

</header>

*/ ?>

<?php /*
<header>
    <!--Navigation-->
    <nav class="navbar navbar-expand-lg navbar-top-default bg-transparent navbar-default navbar-fixed-top nav-padding20 nav-icon black-bg fixed-black">
        <div class="container">
            <a href="#." title="Logo" class="logo scroll">
                <img src="<?php echo base_url(); ?>public/fitspa/images/fitspa-logo-white.png" class="logo-dark" alt="logo">
                <img src="<?php echo base_url(); ?>public/fitspa/images/fitspa-logo-white.png" alt="logo" class="logo-light default">
            </a>

            <div class="side-nav-btn hidden-lg" id="sidemenu_toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>

       <!--Nav Links-->
            <div class="collapse navbar-collapse" id="bizwa">
                <ul class="navbar-nav ml-auto nav-color">
                    <li class="nav-item">
                        <a class="nav-link scroll" href="<?php echo base_url(); ?>">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">Dropdown</a>
                        <div class="dropdown-menu" style="background-color: #3333; z-index:1000;">
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Action</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Another action</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Something else here</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="<?php echo base_url(); ?>about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="<?php echo base_url(); ?>about">Membership</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="<?php echo base_url(); ?>about">Events</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link scroll" href="<?php echo base_url(); ?>about">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="<?php echo base_url(); ?>about">Contact Us</a>
                    </li>
                </ul>
            </div>

            <div class="md-pl-0 pl-3 d-none d-lg-inline-block header-social">
                <a class="facebook-hover-effect" href="javascript:void(0)"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                <a class="twitter-hover-effect" href="javascript:void(0)"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                <a class="youtube-hover-effect" href="javascript:void(0)"><i class="fab fa-youtube" aria-hidden="true"></i></a>
            </div>
        </div><!--end container-->
    </nav>

    <!-- side menu -->
    <div class="side-menu">
        <div class="inner-wrapper">
            <span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
            <nav class="side-nav">
                <ul class="navbar-nav">
                   <li class="nav-item">
                        <a class="nav-link scroll" href="<?php echo base_url(); ?>about">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">Dropdown</a>
                        <div class="dropdown-menu" style="background-color: #3333; z-index:1000;">
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Action</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Another action</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Something else here</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="<?php echo base_url(); ?>about">Membership</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="<?php echo base_url(); ?>about">Events</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link scroll" href="<?php echo base_url(); ?>about">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="<?php echo base_url(); ?>about">Contact Us</a>
                    </li>
                </ul>
            </nav>


            <div class="side-footer text-white w-100">
                <ul class="social-icons-simple">
                    <li><a href="#." class="facebook-text-hvr"><i class="fab fa-facebook" aria-hidden="true"></i></a> </li>
                    <li><a href="#." class="twitter-text-hvr"><i class="fab fa-twitter" aria-hidden="true"></i></a> </li>
                    <li><a href="#." class="linkedin-text-hvr"><i class="fab fa-linkedin" aria-hidden="true"></i></a> </li>
                    <li><a href="#." class="google-text-hvr"><i class="fab fa-google-plus" aria-hidden="true"></i></a> </li>
                </ul>
                <p class="whitecolor">&copy; 2021 Fitspa</p>
            </div>


        </div>
    </div>
    <!-- End side menu -->

</header>

*/ ?>
<!--End Header Section-->

<!--rev slider-->
<section id="home" class="p-0">
    <div id="rev_slider_19_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="wexim_slider_01" data-source="gallery" style="background:transparent;padding:0px;">
        <!-- START REVOLUTION SLIDER 5.4.8.1 fullscreen mode -->
        <div id="rev_slider_19_1" class="rev_slider fullscreenbanner  lower-curve" style="display:none;" data-version="5.4.8.1">
            <ul>
                <!-- SLIDE  -->
                 <?php 
                    //to be loaded conditionally basing on direction of slider
                    require_once 'home/sliders/slider_left.php';
                    require_once 'home/sliders/slider_center.php';
                    require_once 'home/sliders/slider_right.php';
                 ?>
            </ul>
        </div>
        <!-- END REVOLUTION SLIDER -->
    </div>

</section>
<!--rev slider end-->

<!--about section-->
<?php
//about
    require_once 'home/about_section.php';
//counter
    require_once 'home/counter_section.php';
//video
    require_once 'home/video_section.php';
//pricing
    require_once 'home/pricing_tables.php'
?>
<!--Pricing End Start-->

<!-- our client -->
<section class="our-client">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="owl-carousel partners-slider">

                    <?php
                    foreach($clients as $row) { ?>
                    <?php if($row['url']!=''): ?>
                        <div class="item brand-item">
                            <div class="logo-item"  > 
                                <a href="<?php echo $row['url']; ?>" target="_blank">
                                    <img alt="image" src="<?php echo base_url(); ?>public/uploads/partners/<?php echo $row['photo']; ?>" alt="<?php echo $row['name']; ?>"></a>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="item">
                            <div class="logo-item"> <img alt="image" src="<?php echo base_url(); ?>public/uploads/partners/<?php echo $row['photo']; ?>" alt="<?php echo $row['name']; ?>"></div>
                        </div>
                    <?php endif; ?>

                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- our client end -->



<!--Footer Start-->
<?php /*
<section class="text-center dark-blue-background">
    <h2 class="d-none">hidden</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="footer-social">
                    <ul class="list-unstyled text-white">
                        <li><a class="wow fadeInUp facebook-bg-hvr" href="javascript:void(0);"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a class="wow fadeInDown twitter-bg-hvr" href="javascript:void(0);"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a class="wow fadeInUp google-bg-hvr" href="javascript:void(0);"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a class="wow fadeInDown linkedin-bg-hvr" href="javascript:void(0);"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a class="wow fadeInUp instagram-bg-hvr" href="javascript:void(0);"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a class="wow fadeInDown mail-bg-hvr" href="javascript:void(0);"><i class="fab fa-envelope-o" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <p class="company-about fadeIn grey-text text-capitalize">© 2021 FiTSPA <a href="javascript:void(0);">...</a></p>
            </div>
        </div>
    </div>
</section> */ ?>
<!--Footer End-->

    <!--Footer-Area Start-->
    <section class="footer-area pt_60 pb_90">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-item" id="newsletter">
                        <h3><?php echo $setting['footer_col1_title']; ?></h3>
                        <p>
                            <?php echo nl2br($setting['newsletter_text']); ?>
                        </p>
                        <?php
                        if($this->session->flashdata('error')) {
                            echo '<div class="error-class">'.$this->session->flashdata('error').'</div>';
                        }
                        if($this->session->flashdata('success')) {
                            echo '<div class="success-class">'.$this->session->flashdata('success').'</div>';
                        }
                        ?>
                        <?php echo form_open(base_url().'newsletter/send',array('class' => '')); ?>
                        <div class="input-group">                            
                            <input type="email" class="form-control" placeholder="<?php echo EMAIL_ADDRESS; ?>" name="email_subscribe" required>
                            <span class="input-group-btn">
                                <button class="btn" type="submit" name="form_subscribe"><i class="fa fa-location-arrow"></i></button>
                            </span>                            
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-item">
                        <h3><?php echo $setting['footer_col2_title']; ?></h3>
                        <ul>
                            <?php
                            $i=0;
                            foreach ($all_news as $news) {
                                $i++;
                                if($i > $setting['footer_recent_news_item']) {
                                    break;
                                }
                                ?>
                                <li><a href="<?php echo base_url(); ?>news/view/<?php echo $news['news_id']; ?>"><?php echo $news['news_title']; ?></a></li>    
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-item">
                        <h3><?php echo $setting['footer_col3_title']; ?></h3>
                        <div class="row pl-10 pr-10">                            
                            <?php
                            $i=0;
                            foreach($portfolio_footer as $row) {
                                $i++;
                                if($i > $setting['footer_recent_portfolio_item']) {
                                    break;
                                }
                                ?>
                                <div class="col-4 footer-project">
                                    <a href="<?php echo base_url(); ?>portfolio/view/<?php echo $row['id']; ?>"><img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>" alt="Project Photo"></a>
                                </div>
                                <?php
                            }
                            ?>                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-item">
                        <h3><?php echo $setting['footer_col4_title']; ?></h3>
                        <div class="footer-address-item">
                            <div class="icon"><i class="fa fa-map-marker"></i></div>
                            <div class="text">
                                <span>
                                    <?php echo nl2br($setting['footer_address']); ?>
                                </span>
                            </div>
                        </div>
                        <div class="footer-address-item">
                            <div class="icon"><i class="fa fa-phone"></i></div>
                            <div class="text">
                                <span>
                                    <?php echo nl2br($setting['footer_phone']); ?>
                                </span>
                            </div>
                        </div>
                        <div class="footer-address-item">
                            <div class="icon"><i class="fa fa-envelope-o"></i></div>
                            <div class="text">
                                <span>
                                    <?php echo nl2br($setting['footer_email']); ?>
                                </span>
                            </div>
                        </div>
                        <ul class="footer-social">
                            <?php
                            foreach ($social as $row)
                            {
                                if($row['social_url']!='')
                                {
                                    echo '<li><a href="'.$row['social_url'].'"><i class="'.$row['social_icon'].'"></i></a></li>';
                                }
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom pt_50 pb_50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="copy-text">
                        <p>
                            <?php echo $setting['footer_copyright']; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Footer-Area End-->

    <!--Scroll-Top-->
    <div class="scroll-top">
        <i class="fa fa-angle-up"></i>
    </div>
    <!--Scroll-Top-->


<!-- Optional JavaScript -->
<script src="<?php echo base_url(); ?>public/fitspa/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url(); ?>public/fitspa/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>public/fitspa/js/parallaxie.min.js"></script>
<!--Appear JS-->
<script src="<?php echo base_url(); ?>public/fitspa/js/jquery.appear.js"></script>
<!--Jquery-countTo JS-->
<script src="<?php echo base_url(); ?>public/fitspa/js/jquery-countTo.js"></script>
<!--Parallaxie JS-->
<script src="<?php echo base_url(); ?>public/fitspa/js/parallaxie.min.js"></script>
<!--Fancy Box JS-->
<script src="<?php echo base_url(); ?>public/fitspa/js/jquery.fancybox.min.js"></script>
<!--Cube Portfolio JS-->
<script src="<?php echo base_url(); ?>public/fitspa/js/jquery.cubeportfolio.min.js"></script>
<!--owl carousel JS-->
<script src="<?php echo base_url(); ?>public/fitspa/js/owl.carousel.min.js"></script>
<!--Wow JS-->
<script src="<?php echo base_url(); ?>public/fitspa/js/wow.min.js"></script>
<!--Equil Height-->
<script src="<?php echo base_url(); ?>public/fitspa/js/jquery.matchHeight-min.js"></script>


<!-- REVOLUTION JS FILES -->
<script src="<?php echo base_url(); ?>public/fitspa/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php echo base_url(); ?>public/fitspa/revolution/js/jquery.themepunch.revolution.min.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS -->
<script src="<?php echo base_url(); ?>public/fitspa/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="<?php echo base_url(); ?>public/fitspa/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="<?php echo base_url(); ?>public/fitspa/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="<?php echo base_url(); ?>public/fitspa/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="<?php echo base_url(); ?>public/fitspa/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="<?php echo base_url(); ?>public/fitspa/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="<?php echo base_url(); ?>public/fitspa/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="<?php echo base_url(); ?>public/fitspa/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="<?php echo base_url(); ?>public/fitspa/revolution/js/extensions/revolution.extension.video.min.js"></script>
<!-- map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCs4APPDpT3CRGCgk3Cmv9xBvEK5Lq3HGo"></script>
<!-- <script src="<?php //echo base_url(); ?>public/fitspa/js/maps.min.js"></script> -->
<!-- custom script -->
<script src="<?php echo base_url(); ?>public/fitspa/js/script.js"></script>


</body>
</html>