
 <!-- Start Bottom Header -->
        <div class="page-area" style="background-image: url(<?php echo base_url(); ?>public/uploads/banner/<?php echo $setting['banner_about']; ?>)!important;">
            <div class="container" >
            <div class="breadcumb-overlay" ></div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb text-center">
                            <div class="section-headline white-headline text-center">
                                <h3><?php echo $page_about['about_heading']; ?></h3>
                            </div>
                            <ul>
                                <li class="home-bread">Home</li>
                                <li><?php echo $page_about['about_heading']; ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Header -->
       
        <!-- Start Brand Area -->
        <div class="overview-area bg-color area-padding">
            <div class="container">
                <div class="row">
                   <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="overview-text">
                            <h3>About Splint Investments</h3>
                            <div style="font-size: 1.3em;">
                                <?php echo $page_about['about_content']; ?>
                            </div>
                         </div>
                    </div> 
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="overview-content flexed">
                            <img src="<?php echo base_url(); ?>public/uploads/<?php echo $page_about['image']; ?>"   alt="">
                        </div>
                    </div>   
                </div>
            </div>
        </div>
        <!-- End Banner Area -->

        <?php $this->load->view('faqs'); ?>

         <!-- Start Banner Area -->
        <div class="banner-area area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="banner-all area-80 text-center">
                            <div class="banner-content">
                                <h3 style="font-size: 2em;">We offer a wide range of fintech and other technological products. Contact us today for details.</h3>
                                <a class="banner-btn" href="<?=base_url()?>contact">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner Area -->