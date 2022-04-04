<!--Banner Start-->
<div class="banner-slider" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $page_detail['banner']; ?>)">
    <div class="bg"></div>
    <div class="bannder-table">
        <div class="banner-text">
            <h3 class="text-white"><?php echo $page_detail['page_title']; ?></h3>
        </div>
    </div>
</div>
<!--Banner End-->

<!--Blog-One Start-->
<div class="blog-one-area pt_10 pb_10">
    <div class="container sidebar">
        <div class="row  sidebar-item">
            <div class="col-lg-12">
                <div class="single-blog">
                   <!--  <img class="col-md-12" src="<?php echo base_url(); ?>public/uploads/<?php echo $page_detail['photo']; ?>" alt="<?php echo $page_detail['page_title']; ?>"/>
                     -->
                    <!-- <h3><?php echo $page_detail['page_title']; ?></h3>
                     -->
                    <?php echo $page_detail['page_content']; ?>
                </div>
                
                <div class="comment-form headstyle mt_50">
                    <h4>SHARE THIS</h4>
                    <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                    <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                    <a class="a2a_button_facebook"></a>
                    <a class="a2a_button_twitter"></a>
                    <a class="a2a_button_google_plus"></a>
                    <a class="a2a_button_pinterest"></a>
                    <a class="a2a_button_linkedin"></a>
                    <a class="a2a_button_digg"></a>
                    <a class="a2a_button_tumblr"></a>
                    <a class="a2a_button_reddit"></a>
                    <a class="a2a_button_stumbleupon"></a>
                    </div>
                    <script async src="https://static.addtoany.com/menu/page.js"></script>
                </div>
            </div>

        </div>
    </div>
</div>
<!--Blog-One End-->