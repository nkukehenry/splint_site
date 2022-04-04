<section class="half-section p-0">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-6 col-sm-12 bg-yellow p-0 equalheight col-video">
                <div class="video-content-setting center-block text-left text-xs-center equalheight half-center">
                    <h3 class="color-black font-weight-500 text-capitalize mb-2rem mb-xxs-3 text-white"><?php echo $page_home['home_welcome_title']; ?></h3>
                    <p class="color-black text-white" style="margin-left: 20px; text-align: center;">
                      <?php echo $page_home['home_welcome_subtitle']; ?>
                    </p>
                </div>
                <a data-fancybox="" href="<?php echo $page_home['home_welcome_video']; ?>?modestbranding=1?modestbranding=1&showinfo=0&fs=0" class="video-play-button position-absolute">
                    <i class="fas fa-play"></i>
                </a>
            </div>
            <div class="col-md-6 col-sm-12 p-0 equalheight col-video video-bg">
                <div class="video-image split-blog-scale">
                    <img alt="stats" src="<?php echo base_url(); ?>public/uploads/<?php echo $page_home['home_welcome_video_bg']; ?>" class="equalheight video-img-setting">
                </div>
            </div>
        </div>
    </div>
</section>