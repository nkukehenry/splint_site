<!--Banner Start-->
<div class="banner-slider" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner_service']; ?>)">
    <div class="bg"></div>
    <div class="bannder-table">
        <div class="banner-text wow fadeInUp">
            <h1><?php //echo $page_service['service_heading']; ?> CAREERS & JOBS</h1>
        </div>
    </div>
</div>
<!--Banner End-->

<!--Service-Area Start-->
<div class="service-page pt_20 pb_20">
    <div class="container">
        <div class="row">
            <?php
            foreach ($services as $row) {
                ?>
                <div class="col-lg-3 col-md-6 wow fadeInDown">
                    <div class="services-item effect-item">
                        <a href="<?php echo base_url(); ?>jobs-oppenings/<?php echo $row['name_slag']; ?>" class="image-effect">
                            <div class="services-photo" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>)"></div>
                        </a>
                        <div class="services-text" style="background-color: #ffff!important;">
                            <h4 style="text-color:#24C1DD!important"><b><a style="color:#24C1DD!important" href="<?php echo base_url(); ?>jobs-oppenings/<?php echo $row['name_slag']; ?>"><?php echo $row['name']; ?></a></b></h4>
                            <p>
                               <small> <?php echo nl2br(character_limiter($row['short_description'],200)); ?></small>
                            </p>
                            <div class="button-bn">
                                <a href="<?php echo base_url(); ?>jobs-oppenings/<?php echo $row['name_slag']; ?>"><?php echo READ_MORE; ?> <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>
<!--Service-Area End-->