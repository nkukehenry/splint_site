<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php 
$error_message = '';
$success_message = '';
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

    <?php require_once 'meta_headers.php'; ?>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>public/uploads/<?php echo $setting['favicon']; ?>">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/jquery-ui.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/style-main.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/meanmenu.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/spacing.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/responsive.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/fitspa/css/owl.carousel.min.css">

    <style>
        .header-area,
        ul.nav-menu li ul li a,
        .searchbar .input-search,
        .text-animated li a,
        .slider-one .owl-nav .owl-prev, 
        .slider-one .owl-nav .owl-next,
        .about-tab:before,
        .progress-gallery .bar-container .progress .progress-bar-custom,
        .choose-item:before,
        .feature-icon i,
        .feature-item:hover .feature-text,
        .bg-counterup,
        .portfolio-bg,
        .faq-header button.faq-button,
        .faq-header button.faq-button.collapsed:hover,
        .booking-area:before,
        .bg-booking,
        .team-carousel .owl-nav .owl-prev, 
        .team-carousel .owl-nav .owl-next,
        .team-text,
        .team-social li a:hover,
        .price-header i,
        .button-df a,
        .bg-testimonial,
        .testimonial-carousel .owl-dots .owl-dot,
        .blog-carousel .owl-nav .owl-prev, 
        .blog-carousel .owl-nav .owl-next,
        .blog-author li.blog-button a,
        .call-us:before,
        .footer-item h3:before,
        .footer-item h3:after,
        .footer-item .btn,
        .footer-item ul.footer-social li a,
        .scroll-top,
        .headstyle h4:before,
        .headstyle h4:after,
        .team-detail-text ul li a,
        .sidebar-item h3:before,
        .sidebar-item h3:after,
        .event-contact-item,
        .gallery-bg,
        .testimonial-grid .testimonial-description p:before, 
        .testimonial-two-carousel .testimonial-description p:before,
        .form-button .btn,
        .project-carousel .owl-nav .owl-prev, 
        .project-carousel .owl-nav .owl-next,
        .sidebar-item button,
       /* .contact-item:hover .contact-icon,*/
        .contact-form .btn {
            background: #<?php echo $setting['front_end_color']; ?>!important;
        }

      /*  ul.nav-menu li:hover > a,*/
        .searchbar .search-button:hover,
        .text-animated li a:hover,
        .text-animated li:last-child a:hover,
        .slider-one .owl-nav .owl-prev:hover, 
        .slider-one .owl-nav .owl-next:hover,
        .feature-item:hover .feature-icon i,
        .services-text a:hover,
        .portfolio-menu li.filtr-active,
        .portfolio-menu li:hover,
        .portfolio-text h3 a:hover,
        .form-button .btn2:hover,
        .blog-item h3 a:hover,
        .blog-item span i,
        .blog-author li a i,
        .blog-author li a:hover,
        .call-us .button a:hover,
        .footer-item ul li a:hover,
        .team-info ul li span,
        li.event-header-left i,
        .recent-text a:hover,
        .event-contact-item:hover .event-contact-icon,
        .service-sidebar-item ul li a:hover,
        .portfolio-details ul li span,
        .sidebar-item ul li a:hover,
        .blog-one-text h3 a:hover,
        .blog-one-text ul li i,
        .single-blog ul li i,
        .contact-icon {
            color: #<?php echo $setting['front_end_color']; ?>!important;   
        }

        .text-animated li a,
        .slider-one .owl-nav .owl-prev, 
        .slider-one .owl-nav .owl-next,
        .feature-icon i,
        .feature-item:hover .feature-text,
        .footer-item .form-control,
        .footer-item .btn,
        .footer-item ul.footer-social li a,
        .event-contact-item:hover .event-contact-icon,
        .form-control:focus,
        .sidebar-item button,
        /*.contact-item:hover .contact-icon,*/
        .contact-form .btn {
            border-color: #<?php echo $setting['front_end_color']; ?>!important;      
        }

        .video-button span {
            border-left-color: #<?php echo $setting['front_end_color']; ?>!important;         
        }

        .portfolio-menu li.filtr-active,
        .team-social li a:hover {
            border-bottom-color: #<?php echo $setting['front_end_color']; ?>!important;            
        }

        .portfolio-menu li.filtr-active:before,
        .team-social li a:hover {
            border-top-color: #<?php echo $setting['front_end_color']; ?>!important;               
        }


        .text-animated li a:hover,
        .text-animated li:last-child a:hover,
        .slider-one .owl-nav .owl-prev:hover, 
        .slider-one .owl-nav .owl-next:hover {
            background: #fff!important;
            border-color: #fff!important;
        }
        .text-animated li:last-child a {
            background: #313131!important;
            border-color: #313131!important;
        }
        .blog-author li.blog-button a,
        .blog-author li.blog-button i,
        .footer-item ul.footer-social li a:hover,
        .contact-item:hover .contact-icon {
            color: #fff!important;
        }
        .feature-item:hover .feature-icon i,
        .faq-header button.faq-button.collapsed {
            background: #fff!important;
        }
        .team-carousel .owl-nav .owl-prev:hover, 
        .team-carousel .owl-nav .owl-next:hover,
        .blog-carousel .owl-nav .owl-prev:hover, 
        .blog-carousel .owl-nav .owl-next:hover,
        .button-df a:hover,
        .testimonial-carousel .owl-dots .owl-dot.active,
        .blog-author li.blog-button a:hover,
        .footer-item ul.footer-social li a:hover,
        .team-detail-text ul li a:hover,
        .form-button .btn:hover,
        .project-carousel .owl-nav .owl-prev:hover, 
        .project-carousel .owl-nav .owl-next:hover,
        .contact-form .btn:hover {
            background: #313131!important;
        }
        .footer-item ul.footer-social li a:hover,
        .contact-form .btn:hover {
            border-color: #313131!important;
        }
        .event-contact-item:hover,
        .faq-body,
        .feature-item:hover .feature-icon i, .faq-header button.faq-button.collapsed {
            background: #f5f5f5!important;
        }

        .booking-form input:focus,
        .booking-form textarea:focus {
            border-color: #fff!important;
        }

        .booking-form button[type="submit"] {
            background: #313131!important;
            color: #fff!important;
        }

        .booking-form button[type="submit"]:hover {
            background: #fff!important;
            color: #313131!important;
        }

        .contact-icon {
            color: #24C1DD!important;   
        }
        .contact-item:hover .contact-icon {
           /* border-color: #<?php echo $setting['front_end_color']; ?>!important;  */
            background: #24C1DD!important; 
            border-color:#24C1DD!important; 
        }
        .contact-item:hover .contact-icon {
            color: #fff!important;
        }
        #preloader{
            background-color: <?php echo $setting['front_end_color']; ?>;
        }
        ul.nav-menu li:hover > a{
            color: #ffff;
        }
        ul.nav-menu li ul li:hover > a {
            background: #f1f1f1!important;
            color: #333!important;
        }

    </style>

</head>

<body>
    
    <?php echo $comment['code_body']; ?>


    <!--Preloader-->
            <div class="loader" id="loader-fade">
            <div class="loading-wrapper">
            <img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['logo']; ?>" width="100px">
            <h4>Loading...</h4>
            </div>
            </div>
   <!--End Preloader-->

    <!--Menu Start-->
    <div id="strickymenu" class="menu-area" style="background-color: #153057; color:#ffff;">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="logo flex">
                        <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['logo']; ?>" alt="Logo" style="max-height: 60px!important; max-width: 140px!important;"></a>
                    </div>
                </div>
                <div class="col-lg-10  main-menu">
                    <div class="main-menu-item">
                        <ul class="nav-menu">
                            <li><a href="<?php echo base_url(); ?>" >Home</a></li>
                            <li class="menu-item-has-children"><a href="#" >About</a>
                                <ul>
                                    <li><a href="<?php echo base_url(); ?>about">Overview</a></li>
                                    <li><a href="<?php echo base_url(); ?>team">Our team</a></li>
                                    <li><a href="<?php echo base_url(); ?>faq">
                                        Frequently asked questions
                                    </a></li>
                                      <?php 
                                         $about_pages = menu_pages(1);
                                         foreach($about_pages as $apage):  
                                       ?>

                                        <li><a href="<?php echo base_url(); ?>pages/<?=$apage->page_slag?>">
                                            <?=$apage->page_title?>
                                        </a></li>

                                     <?php endforeach; ?>
                                    
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="#" >Membership</a>
                                <ul>
                                    <li><a href="<?php echo base_url(); ?>our-community">Our Community</a></li>
                                    <li><a href="<?php echo base_url(); ?>membership-packages">Become a member</a></li> 

                                      <?php 
                                         $about_pages = menu_pages(3);
                                         foreach($about_pages as $apage):  
                                       ?>

                                        <li><a href="<?php echo base_url(); ?>pages/<?=$apage->page_slag?>">
                                            <?=$apage->page_title?>
                                        </a></li>

                                     <?php endforeach; ?>
                                </ul>
                            </li>
                            <li><a href="<?php echo base_url(); ?>events" >Events</a></li>
                            <li><a href="<?php echo base_url(); ?>publications" >Directory</a></li>
                            
                            <li class="menu-item-has-children"><a href="#" >Careers & Opportunities</a>
                                <ul>
                                    <li><a href="<?php echo base_url(); ?>jobs-oppenings">Job Openings</a></li>
                                    <li><a href="<?php echo base_url(); ?>opportunities">Opportunities</a></li>

                                     <?php 
                                         $career_pages = menu_pages(2);
                                         foreach($career_pages as $apage):  
                                       ?>

                                        <li><a href="<?php echo base_url(); ?>pages/<?=$apage->page_slag?>">
                                            <?=$apage->page_title?>
                                        </a></li>

                                     <?php endforeach; ?>
                                </ul>
                            </li>
                            
                            <li class="menu-item-has-children"><a href="#" >Blog</a>
                                <ul>
                                    <li><a href="<?php echo base_url(); ?>blog-post" class="menu-word">FITSPA Blog</a></li>
                                    <li><a href="<?php echo base_url(); ?>member_blogs">Member Blogs</a></li>
                                    
                                    <li>
                                        <a href="<?php echo base_url(); ?>photo-gallery">Photo Gallery</a>
                                    </li>
                                     <?php 
                                         $blog_pages = menu_pages(3);
                                         foreach($blog_pages as $apage):  
                                       ?>

                                        <li><a href="<?php echo base_url(); ?>pages/<?=$apage->page_slag?>">
                                            <?=$apage->page_title?>
                                        </a></li>

                                     <?php endforeach; ?>
                                </ul>
                            </li>
                            
                            <li><a href="<?php echo base_url(); ?>contact" >Contact Us</a></li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!--Menu End-->
