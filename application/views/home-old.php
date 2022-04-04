
<?php 
    require_once('home/home_header.php');
?>

<!--rev slider-->
<section id="home" class="p-0">
    <div id="rev_slider_19_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="wexim_slider_01" data-source="gallery" style="background:transparent;padding:0px;">
        <!-- START REVOLUTION SLIDER 5.4.8.1 fullscreen mode -->
        <div id="rev_slider_19_1" class="rev_slider fullscreenbanner  lower-curve" style="display:none;" data-version="5.4.8.1">
            <ul>
                <?php foreach ($sliders as $slider) {  
                    if ($slider['position'] == "Left") {  //to be loaded conditionally basing on direction 
                        require_once 'home/sliders/slider_left.php';
                        
                    }else if($slider['position'] == "Center") {
                        
                         require_once 'home/sliders/slider_center.php';
                    }else {
                        require_once 'home/sliders/slider_right.php';
                    } 
                } ?>
            </ul>
        </div>
        <!-- END REVOLUTION SLIDER -->
    </div>

</section>
<!--rev slider end-->

<!--about section-->
<?php
    
    //require_once 'home/advert.php';
//about
    require_once 'home/about_section.php';
    
    //print_r( $career_pages);
    
//counter
    require_once 'home/counter_section.php';
//video
    require_once 'home/video_section.php';
//pricing
    require_once 'home/pricing_tables.php'
?>
<!--Pricing End Start-->

<!-- partners -->
<section class="our-client">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="headline">
                    <center><h3>OUR PARTNERS</h3></center>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 ">
                <div class="row client-container">

                <?php foreach ($clients as $row){
                    
                    if (!empty($row['url'])){ ?>

                        <a href="<?php echo $row['url']; ?>" target="_blank" class="col-lg-2 col-md-6 col-sm-6 item client-item" style="background-image: url(<?php echo base_url(); ?>public/uploads/partners/<?php echo $row['photo']; ?>);" alt="<?php echo $row['name']; ?>">
                        </a>
                         <?php  }else{ ?>

                        <div class="col-lg-2 col-md-6 col-sm-6 item client-item" style="background-image: url(<?php echo base_url(); ?>public/uploads/partners/<?php echo $row['photo']; ?>);" alt="<?php echo $row['name']; ?>">
                        </div>
                <?php  } } ?>

                </div>
            </div>
        </div>
    </div>
</section> 


<!-- our client end -->



<!--Footer Start-->

    <!--Footer-Area Start-->
    <div class="footer-area pt_10 pb_10">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-item" id="newsletter">
                        <h3><?php echo $setting['footer_col1_title']; ?></h3>
                            
                            <?php //echo nl2br($setting['newsletter_text']); ?>
                            <a class="twitter-timeline" data-height="250" href="https://twitter.com/FitspaUG?ref_src=twsrc%5Etfw">Tweets by FitspaUG</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="footer-item">
                        <h3><?php echo $setting['footer_col2_title']; ?></h3>
                        <ul>
                            <style type="text/css">
                                .map-area iframe {
                                    width: 100%;
                                    height: 260px;
                                    margin-bottom: -5px;
                                }
                            </style>
                            <div class="map-area"><?php echo $page_contact['contact_map']; ?></div>
                      
                        </ul>
                    </div>
                </div>
               
                <div class="col-lg-3 col-md-6">
                    <div class="footer-item">
                        <h3><?php echo $setting['footer_col3_title']; ?></h3>
                        <div class="footer-address-item">
                           <i class="fas fa-map-marker"></i> 
                                <?php echo nl2br($setting['footer_address']); ?>
                        </div>
                        <div class="footer-address-item">
                            <i class="fas fa-phone"></i>
                                <?php echo nl2br($setting['footer_phone']); ?>
                        </div>
                        <div class="footer-address-item">
                            <i class="fas fa-envelope"></i> 
                                <?php echo nl2br($setting['footer_email']); ?>
                        </div>
                        <ul class="footer-social">
                            <?php
                            foreach ($social as $row)
                            {
                                if($row['social_url']!='')
                                {
                                    $dt = strtolower(str_replace('fa ', 'fab ', $row['social_icon']));
                                    
                                    echo '<li><a href="'.$row['social_url'].'"><i class="'.$dt.'"></i></a></li>';
                                }
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom pt_15 pb_15">
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

<script src="<?php echo base_url(); ?>public/js/jquery.meanmenu.js"></script>

<script type="text/javascript">
        // mobile menu
    $('.main-menu').meanmenu({
        meanScreenWidth: 991
    });

    // StickyHeader
    function stickyHeader() {
        var strickyScrollPos = $('#strickymenu').next().offset().top;
        if ($('#strickymenu').length) {
            if ($(window).scrollTop() > strickyScrollPos) {
                $('#strickymenu').addClass('sticky');
                $('body').addClass('sticky');
            } else if ($(window).scrollTop() <= strickyScrollPos) {
                $('#strickymenu').removeClass('sticky');
                $('body').removeClass('sticky');
            }
        };
    }
    $(window).on('scroll', function () {
        stickyHeader();
    });
</script>

</body>
</html>