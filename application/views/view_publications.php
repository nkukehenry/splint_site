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

        foreach($types as $type):
        
            $pubs = array_filter($publications, function($row) use($type){
                return $row['type_id'] == $type->id;
             });

             if(count($pubs)>0): ?>
            <div class="col-md-12 mt-2">
                <br>
                <h3><?php echo $type->type_name; ?></h3>
                <hr>
            </div>

                <?php
                foreach($pubs as $row) {

                    require('partials/publication_download_dialog.php');

                    ?> 
                    <div class="col-xl-4 col-md-6 wow fadeInDown">
                        <div class="contact-item flex">
                            <a href="#resource<?=$row['ids']+100?>" data-toggle="modal" style="text-decoration: none;">
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
                endif;
                 endforeach;
                ?>
        </div>    
    </div>
</div>
