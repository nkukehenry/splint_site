<!--Banner Start-->
<div class="banner-slider" style="background-image: url(<?php echo base_url(); ?>public/uploads/banner/publications.png)">
    <div class="bannder-table">
        <div class="banner-text wow fadeInUp" >
            <h1> Fintech Regulations & Toolkits </h1>
        </div>
    </div>
</div>
<!--Banner End-->

<!--Event-Area Start-->
<div class="contact-area pt_20 pb_20">
    <div class="container">
        <div class="row">
                <?php
                foreach($publications as $row) {
                    ?> 
                    <div class="col-xl-4 col-md-6 wow fadeInDown">
                        <div class="contact-item flex">
                            <a href="<?php echo base_url(); ?>public/uploads/directory/<?php echo $row['attachment']; ?>" target="_blank" style="text-decoration: none;">
                                <div class="contact-icon">
                                    <i class="<?php echo $row['icon']; ?>" aria-hidden="true"></i>
                                </div>
                                <div class="contact-text">
                                    <h4><?php echo $row['name']; ?></h4>
                                    <p>
                                        <?php echo $row['content']; ?> 
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>   
                    <?php }
                ?>
        </div>    
    </div>
</div>
