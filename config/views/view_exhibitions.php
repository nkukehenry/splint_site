<!--Banner Start-->
<div class="banner-slider" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner_service']; ?>)">
    <div class="bg"></div>
    <div class="bannder-table">
        <div class="banner-text wow fadeInUp">
            <h1><?php echo $page_exhibition['exhibition_heading']; ?></h1>
        </div>
    </div>
</div>
<!--Banner End-->

<!-- Start-->
<div class="service-page pt_10 pb_10">
    <div class="container">
        <div class="row">
            <?php
            foreach ($exhibitions as $row) {
                ?>
                <div class="col-lg-4 col-md-6 wow fadeInDown">
                    <div class="services-item effect-item">
                        <a href="<?php echo base_url(); ?>exhibitions/<?php echo $row['name_slag']; ?>" class="image-effect">
                            <div class="services-photo" style="background-image: url(<?php echo base_url(); ?>public/uploads/exhibition/<?php echo $row['photo']; ?>)"></div>
                        </a>
                        <div class="services-text">
                            <h3><a href="<?php echo base_url(); ?>exhibitions/<?php echo $row['name_slag']; ?>"><?php echo $row['name']; ?></a></h3>
                            <p>
                                <?php if(!empty($row['wc_id'])){ ?>
                                <hr>
                                <img width="100px" src="<?php echo base_url(); ?>public/uploads/comnty-member/<?php echo $row['wc_photo']; ?>"> <br>
                                <?php } ?>
                                
                                <?php echo nl2br(character_limiter($row['short_description'],300)); ?>
                            </p>
                            <div class="button-bn">
                                <a href="<?php echo base_url(); ?>exhibitions/<?php echo $row['name_slag']; ?>"><?php echo READ_MORE; ?> <i class="fa fa-chevron-circle-right"></i></a>
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