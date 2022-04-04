<!--Banner Start-->
<div class="banner-slider" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner_service']; ?>)">
    <div class="bg"></div>
    <div class="bannder-table">
        <div class="banner-text wow fadeInUp">
            <h1><?php echo $opportunity['name']; ?></h1>
        </div>
    </div>
</div>
<!--Banner End-->

<!--Single-Service Start-->
<div class="single-service-area pt_0 pb_10">
    <div class="container ">
        <div class="row ">
            <div class="col-lg-12 sidebar">
                <div class="service-info sidebar-item">
                    <div class="single-ser-carousel owl-carousel">
                        <div class="event-photo-item wow fadeInDown">
                            <img src="<?php echo base_url(); ?>public/uploads/<?php echo $opportunity['photo']; ?>" alt="Opportunity Photo">
                        </div>
                    </div>
                    <h2 class="wow fadeInDown"><?php echo $opportunity['name']; ?></h2>
                    <?php echo $opportunity['description']; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Single-Service End-->