<!--Banner Start-->
<div class="banner-slider" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner_team']; ?>)">
    <div class="bg"></div>
    <div class="bannder-table">
        <div class="banner-text wow slideInLeft" data-wow-duration="1s">
            <h1 ><?php echo $page_about['about_heading']; ?></h1>
        </div>
    </div>
</div>
<!--Banner End-->

<style>

.headline {
    color: #313131;
    margin-top: 30px;
}

.headline h3 {
    display: inline-block;
    position: relative;
    font-size: 22px;
    font-weight: 700;
    text-transform: uppercase;
    color: #313131;
    padding-bottom: 12px;
    margin-bottom: 36px;
}

.headline h3:before {
    position: absolute;
    content: '';
    width: 70%;
    height: 1px;
    background: var(--mainColor);
    left: 0;
    bottom: 0;
}

.headline h3:after {
    position: absolute;
    content: '';
    width: 100%;
    height: 1px;
    background: var(--mainColor);
    left: 0;
    bottom: -5px;
}

.headline_ {
    color: #fff;
    margin-top: 30px;
}

.headline_ h3 {
    display: inline-block;
    position: relative;
    font-size: 22px;
    font-weight: 700;
    text-transform: uppercase;
    color: #fff;
    padding-bottom: 12px;
    margin-bottom: 36px;
}

.headline_ h3:before {
    position: absolute;
    content: '';
    width: 70%;
    background: #fff;
    height: 1px;
    left: 0;
    bottom: 0;
}

.headline_ h3:after {
    position: absolute;
    content: '';
    width: 100%;
    background: #fff;
    height: 1px;
    left: 0;
    bottom: -5px;
}

</style>

<!--About Start-->
<div class="about-page pt_10 pb_0">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mt_30 pb_20" >
                <div class="about-content" >
                    <img style="border-radius: 15px 50px;" src="<?php echo base_url(); ?>public/uploads/<?php echo $page_about['image']; ?>"  >
                </div>
            </div>
            <div class="col-lg-4 mt_30">
                <div class="headline-left headline text-animated" data-aos="zoom-in-right" data-aos-duration="500">
                    <h3>History</h3>
                </div>
                    <?php echo $page_about['about_content']; ?>
            </div>
        </div>
    </div>

<div class="choose-area pt_30 pb_30" data-aos="zoom-in" style="background-color: #dcebfa;">
    <div class="container">
        
        <div class="row">
        <div class="col-md-12">
             <div class="row">
                <div class="col-lg-6 choose-itm-rad" data-aos="zoom-in">
                    <div  class="choose-item-about flex-data" >
                      
                        <div class="choose-text-about ">
                            <span class="headline_"><h3>Mission</h3></span>
                            <p>
                                <?php echo $page_about['mission']; ?>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 choose-itm-rad" data-aos="zoom-in">
                    <div  class="choose-item-about flex-data" >
                        <div class="choose-text-about "  >
                            <span class="headline_"><h3>Vision</h3></span>
                            <p>
                               <?php echo $page_about['vision']; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </div>
</div>


<div class="feature-area feature-two bg-area pt_20 pb_20">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="headline">
                    <h3>GOALS</h3>
                    <p>
                        FITSPA Aims To Support Uganda’s Bid To Become A Leading Fintech Destination By Increasing Access To Affordable Financial Services Through ICT And Promoting Financial Inclusion.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            
            <div class="col-lg-4 col-md-4 col-sm-12" data-aos="zoom-in-down">
                <div class="feature-item" >
                    <!-- <div class="feature-icon">
                        <i class="fa fa-search-plus" aria-hidden="true"></i>
                    </div> -->
                    <div class="feature-text">
                        <h4><?php echo $page_about['goal_title2']; ?></h4>
                        <p>
                            <?php echo $page_about['goal_value2']; ?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12" data-aos="zoom-in-down">
                <div class="feature-item" >
                    
                    <div class="feature-text">
                        <!-- <div class="feature-icon">
                        <i class="fa fa-search-plus" aria-hidden="true"></i>
                        </div> -->
                        <h4><?php echo $page_about['goal_title1']; ?></h4>
                        <p>
                            <?php echo $page_about['goal_value1']; ?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12" data-aos="zoom-in-down">
                <div class="feature-item" >
                    <!-- <div class="feature-icon">
                        <i class="fa fa-search-plus" aria-hidden="true"></i>
                    </div> -->
                    <div class="feature-text" >
                        <h4><?php echo $page_about['goal_title3']; ?></h4>
                        <p>
                            <?php echo $page_about['goal_value2']; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="services-area pt_20 pb_90" style="background-color: #ffff;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="headline">
                    <h3>FITSPA's Objectives</h3>
                </div>
            </div>
        </div>
        <div class="row">
            
            <div class="col-lg-4 col-md-6" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="400" style="background-color: #ffff;">
                <div class="services-itm effect-item">
                    
                    <div class="services-itm-text" data-aos="fade-up">
                        <h4><?php echo $page_about['obj_title1']; ?></h4>
                        <p>
                            <?php echo $page_about['obj_value1']; ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="400" style="background-color: #ffff;">
                <div class="services-itm effect-item">
                    
                    <div class="services-itm-text" data-aos="fade-up">
                        <h4><?php echo $page_about['obj_title2']; ?></h4>
                        <p>
                            <?php echo $page_about['obj_value2']; ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="400" style="background-color: #ffff;">
                <div class="services-itm effect-item">
                    
                    <div class="services-itm-text" data-aos="fade-up">
                        <h4><?php echo $page_about['obj_title3']; ?></h4>
                        <p>
                            <?php echo $page_about['obj_value3']; ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="400" style="background-color: #ffff;">
                <div class="services-itm effect-item">
                    
                    <div class="services-itm-text" data-aos="fade-up">
                        <h4><?php echo $page_about['obj_title4']; ?></h4>
                        <p>
                            <?php echo $page_about['obj_value4']; ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="400" style="background-color: #ffff!important;">
                <div class="services-itm effect-item">
                    
                    <div class="services-itm-text" data-aos="fade-up" >
                        <h4><?php echo $page_about['obj_title5']; ?></h4>
                        <p>
                            <?php echo $page_about['obj_value5']; ?>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="choose-area pt_30 pb_30" data-aos="zoom-in" style="background-color: #dcebfa;">
    <div class="container">
        
        <div class="row">
            <div class="col-md-12">
                <center><span class="headline">
                    <h3>FITSPA Activities</h3></span></center>
            </div>
        </div>
        
        <div class="row">
        <div class="col-md-12">
             <div class="row">
                 
                <?php 	foreach ($activity as $row) { ?>
			    <div class="col-lg-6 choose-itm-rad" data-aos="zoom-in">
                    <div  class="choose-item-about flex-data" >
                        <div class="choose-text-about ">
                            <span class="headline_"><h3><?php echo $row['title']; ?></h3></span>
                            <p>
                                <?php echo $row['description']; ?>
                            </p>
                        </div>
                    </div>
                </div>
			    <?php } ?>
			    
            </div>
        </div>

        </div>
    </div>
</div>

</div>
<!--About End-->
