<div class="banner-slider" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner_team']; ?>)">
    <div class="bg"></div>
    <div class="bannder-table">
        <div class="banner-text wow fadeInUp">
            <h1><?php echo $page_team['team_heading']; ?></h1>
        </div>
    </div>
</div>
<!--Banner End-->

<!--Team Start-->
<div class="team-page pt_10 pb_10">
    <div class="container">
        <div class="row">

            <?php
            foreach ($team_members as $row) {
                ?>
                <div class="col-xl-2 col-lg-4 col-sm-6 col-xs-6 wow fadeInDown">
                    <div class="team-item">
                        <div class="team-photo">
                            <a href="#team-member<?php echo $row['name_slag']; ?>" data-toggle="modal">
                                <img src="<?php echo base_url(); ?>public/uploads/team/<?php echo $row['photo']; ?>" alt="Team Member">
                            </a>
                        </div>
                        <div class="team-text">
                            <a href="#team-member<?php echo $row['name_slag']; ?>" data-toggle="modal"><?php echo $row['name']; ?></a>
                            <p><?php echo $row['designation']; ?></p>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="team-member<?php echo $row['name_slag']; ?>" tabindex="-1" role="dialog" >
                    <div class="modal-dialog" role="document" style="margin-top: 40px!important">
                        <div class="modal-content">
                            <div class="modal-header" style="z-index:1000">
                                <h4 class="modal-title"></h4>
                                <button type="button" style="position:right" class="close pull-right" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                
                            </div>
                            <div class="modal-body">
                                <div class="row">

                                    <div class="col-xl-3 col-lg-6 col-sm-6 col-xs-6 wow">
                                        <img src="<?php echo base_url(); ?>public/uploads/team/<?php echo $row['photo']; ?>" alt="Team Member">
                                        <div>
                                        <?php if($row['category_name']!=="NULL"){ ?>
                                            <br>
                                            <div style="font-family: inherit!important;">
                                                <u><h6>Committee</h6></u>
                                                <p><?php echo $row['category_name']; ?></p>
                                            </div>
                                        <?php } ?>
                                    </div>
                                    </div>
                                    <div class="col-xl-9 col-lg-6 col-sm-6 col-xs-6 wow fadeInDown">
                                       <b><?php echo $row['name']; ?></b><br>
                                        <p><?php echo $row['designation']; ?></p>
                                        <div style="overflow-y: auto; max-height: 330px;">
                                             <?php  echo nl2br($row['detail']); ?>

                                             <?php  if (!empty($row['phone'])) { ?>
                                                <br> Phone: <?php  echo nl2br($row['phone']); ?> 
                                             <?php } ?>
                                             <?php  if (!empty($row['email'])) { ?>
                                                <br> Email: <?php  echo nl2br($row['email']); ?>
                                             <?php } ?> <br>
                                            <?php if($row['category_name']!=="NULL"){ ?>
                                                <br>
                                                <div style="font-family: inherit!important;">
                                                    <u><h6>Committee Roles</h6></u>
                                                    <p style="font-family: inherit!important;"><?php echo $row['description']; ?></p>
                                                </div>
                                            <?php } ?>
                                        
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php } ?>
        </div>
    </div>
</div>
<!--Team End