<section class="about" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 pr-5 wow fadeInLeft">
                <div class="rare-box"></div>
                <img src="<?php echo base_url(); ?>public/uploads/<?php echo $page_home['home_about_photo']; ?>" class="image-about position-relative w-100" alt="">
            </div>
            <div class="col-lg-6 pl-6 center-about">
                <h3 class="wow fadeInUp" data-wow-delay="400ms"><?php echo $page_home['about_txt_1']; ?>
                <span class="green"><?php echo $page_home['about_txt_2']; ?></span> 
                <?php echo $page_home['about_txt_3']; ?></h3>
                <p class="pt-3 wow fadeInUp" data-wow-delay="500ms">
                    <?php echo $page_home['about_body']; ?>
                </p>
                <ul class="pl-0 pt-3 left-about wow fadeInUp" data-wow-delay="600ms">
                    <li><?php echo $page_home['highlight_1']; ?></li>
                    <li><?php echo $page_home['highlight_2']; ?></li>
                   
                </ul>
                <a class="white clr-b hvr-shutter-out-horizontal-blk btn btn-large btn-rounded btn btn-medium btn-white-blue mt-20 text-capitalize" href="<?php echo base_url(); ?>about">Learn More</a>
            </div>

        </div>
    </div>
</section>