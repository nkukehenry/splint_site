<!--Banner Start-->
<div class="banner-slider" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner_service']; ?>)">
    <div class="bg"></div>
    <div class="bannder-table">
        <div class="banner-text">
            <h1><?php echo $service['name']; ?></h1>
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
                        <div class="event-photo-item">
                            <img src="<?php echo base_url(); ?>public/uploads/<?php echo $service['photo']; ?>" alt="Service Photo">
                        </div>
                    </div>
                    <h2><?php echo $service['name']; ?></h2>
                    <?php echo $service['description']; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Single-Service End-->