<!--Banner Start-->
<div class="banner-slider" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner_service']; ?>)">
    <div class="bg"></div>
    <div class="bannder-table">
        <div class="banner-text wow fadeInUp">
            <h1><?php echo $exhibition['name']; ?></h1>
        </div>
    </div>
</div>
<!--Banner End-->

<!--Single- Start-->
<div class="single-service-area pt_0 pb_10">
    <div class="container ">
        <div class="row ">
            <div class="col-lg-12 sidebar">
                <div class="service-info sidebar-item">
                    <div class="single-ser-carousel owl-carousel">
                        <div class="event-photo-item wow fadeInDown">
                            <img src="<?php echo base_url(); ?>public/uploads/exhibition/<?php echo $exhibition['photo']; ?>" alt="Exhibition Photo">
                        </div>
                    </div>
                    <h2 class="wow fadeInDown"><?php echo $exhibition['name']; ?></h2>
                    <?php if(!empty($exhibition['wc_id'])){ ?>
                    <hr>
                    <img width="200px" src="<?php echo base_url(); ?>public/uploads/comnty-member/<?php echo $exhibition['wc_photo']; ?>"> <br>
                    <?php } ?>
                    <?php echo $exhibition['description']; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Single-Service End-->