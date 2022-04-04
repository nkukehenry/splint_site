<div class="banner-slider" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $event_detail['banner']; ?>)">
    <div class="bg"></div>
    <div class="bannder-table">
        <div class="banner-text">
            <h1><?php echo $event_detail['event_title']; ?></h1>
        </div>
    </div>
</div>
<!--Banner End-->

<!--Event-Details Start-->
<div class="event-detail pt_10 pb_10">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="event-detail-content">
                    <div class="event-carousel owl-carousel wow fadeInDown">
                        <div class="event-photo-item">
                            <img src="<?php echo base_url(); ?>public/uploads/<?php echo $event_detail['photo']; ?>" alt="Event Photo">
                        </div>
                    </div>
                    <div class="row wow fadeInUp">
                        <div class="col-md-4 col-sm-6">
                            <div class="event-contact-item">
                                <div class="event-contact-icon">
                                    <i class="fa fa-play" aria-hidden="true"></i>
                                </div>
                                <div class="event-contact-text">
                                    <h4><?php echo EVENT_START_DATE; ?></h4>
                                    <p>
                                        <?php 
                                        $dt = explode('-',$event_detail['event_start_date']);
                                        if($dt[1] == '01') {$month = 'January';}
                                        if($dt[1] == '02') {$month = 'February';}
                                        if($dt[1] == '03') {$month = 'March';}
                                        if($dt[1] == '04') {$month = 'April';}
                                        if($dt[1] == '05') {$month = 'May';}
                                        if($dt[1] == '06') {$month = 'June';}
                                        if($dt[1] == '07') {$month = 'July';}
                                        if($dt[1] == '08') {$month = 'August';}
                                        if($dt[1] == '09') {$month = 'September';}
                                        if($dt[1] == '10') {$month = 'October';}
                                        if($dt[1] == '11') {$month = 'November';}
                                        if($dt[1] == '12') {$month = 'December';}
                                        echo $month . ' ' . $dt[2] . ', ' . $dt[0];
                                        ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="event-contact-item">
                                <div class="event-contact-icon">
                                    <i class="fa fa-flag" aria-hidden="true"></i>
                                </div>
                                <div class="event-contact-text">
                                    <h4><?php echo EVENT_END_DATE; ?></h4>
                                    <p>
                                        <?php 
                                        $dt = explode('-',$event_detail['event_end_date']);
                                        if($dt[1] == '01') {$month = 'January';}
                                        if($dt[1] == '02') {$month = 'February';}
                                        if($dt[1] == '03') {$month = 'March';}
                                        if($dt[1] == '04') {$month = 'April';}
                                        if($dt[1] == '05') {$month = 'May';}
                                        if($dt[1] == '06') {$month = 'June';}
                                        if($dt[1] == '07') {$month = 'July';}
                                        if($dt[1] == '08') {$month = 'August';}
                                        if($dt[1] == '09') {$month = 'September';}
                                        if($dt[1] == '10') {$month = 'October';}
                                        if($dt[1] == '11') {$month = 'November';}
                                        if($dt[1] == '12') {$month = 'December';}
                                        echo $month . ' ' . $dt[2] . ', ' . $dt[0];
                                        ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="offset-md-0 col-md-4 offset-sm-3 col-sm-6 offset-sm-3">
                            <div class="event-contact-item">
                                <div class="event-contact-icon">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                </div>
                                <div class="event-contact-text">
                                    <h4><?php echo ADDRESS; ?></h4>
                                    <p>
                                        <?php echo nl2br($event_detail['event_location']); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12">
                        <div class="event-detail-text">
                            <h3><?php //echo $event_detail['event_title']; ?></h3>
                            <?php echo $event_detail['event_content']; ?>
                        </div>
                    </div>

                <?php if (!empty($sessions)) { 

                     foreach ($sessions as $row) { ?>
                    <div class="container">

                    <div class="event-map headstyle">
                        <center>
                            <h5><b><?php echo $row['session_title']; ?></b></h5><hr>
                        </center>
                    </div>

                    <div class="row wow fadeInDown"> 

                            <div class="col-lg-3">
                                <div class="team-item">
                                    <div class="team-photo">
                                        <?php if (!empty($row['photo'])) { ?>
                                            <a href="#Modorator<?php echo $row['id']; ?>" data-toggle="modal"><img src="<?php echo base_url(); ?>public/uploads/event_session/<?php echo $row['photo']; ?>" alt="<?php echo $row['session_title']; ?>" style="width:100%;"></a>
                                        <?php } ?>
                                    </div>
                                    <div class="team-text">
                                        <a href="#Modorator<?php echo $row['id']; ?>" data-toggle="modal"><?php echo $row['modorator_name']; ?>
                                            <br>
                                            <small>Moderator</small>
                                        </a>
                                        <p><?php //echo nl2br($row['modorator_details']); ?></p>
                                    </div>
                                </div>

                                <div class="modal fade" id="Modorator<?php echo $row['id']; ?>" tabindex="-1" role="dialog" >
                                    <div class="modal-dialog" role="document" style="margin-top: 40px!important">
                                        <div class="modal-content">
                                            <div class="modal-header" style="z-index:1000">
                                                <button type="button" style="position:right" class="close pull-right" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title"></h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">

                                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-6 wow">
                                                        <img src="<?php echo base_url(); ?>public/uploads/event_session/<?php echo $row['photo']; ?>" alt="Team Member">
                                                    </div>
                                                    <div class="col-xl-9 col-lg-6 col-md-6 col-sm-6 col-xs-6 wow fadeInDown">
                                                       <b><?php echo $row['modorator_name']; ?></b><br>
                                                        <div style="overflow-y: auto; max-height: 330px;">
                                                             <?php  echo nl2br($row['modorator_details']); ?>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            

                            <?php
                                $id = $row['id'];
                                $sql = "SELECT * FROM event_session_speakers 
                                                WHERE session_id='$id' 
                                                ORDER BY created_at DESC";
                                $query = $this->db->query($sql)->result_array();

                                if (!empty($query)) { ?>

                               <div class="col-lg-9 col-sm-12 col-md-12 col-xs-12">

                                <div class="row" style="display:flex; justify-content: center; align-items: center;">
                                    <div class="col-lg-12">
                                        <center>
                                           <h5>Speakers</h5>
                                        </center>
                                    </div>
                                    <?php   foreach ($query as $rw) {  ?>
                                        
                                    <div class="col-lg-3 col-xl-3 col-md-6 col-sm-6 wow fadeInLeft">
                                        <div class="team-item">
                                            <div class="team-photo" style="">
                                                <?php if (!empty($rw['photo'])) { ?>
                                                    <a href="#speaker<?php echo $rw['part_id']; ?>" data-toggle="modal"><img src="<?php echo base_url(); ?>public/uploads/event_session/<?php echo $rw['photo']; ?>" style="width:100%;"></a>
                                                <?php } ?>

                                            </div>
                                            <div class="team-text">
                                                <a href="#speaker<?php echo $rw['part_id']; ?>" data-toggle="modal"><?php echo $rw['part_name']; ?></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" id="speaker<?php echo $rw['part_id']; ?>" tabindex="-1" role="dialog" >
                                        <div class="modal-dialog" role="document" style="margin-top: 40px!important">
                                            <div class="modal-content">
                                                <div class="modal-header" style="z-index:1000">
                                                    <button type="button" style="position:right" class="close pull-right" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title"></h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">

                                                        <div class="col-xl-3 col-md-6 col-lg-6 col-sm-6 col-xs-6 wow">
                                                            <img src="<?php echo base_url(); ?>public/uploads/event_session/<?php echo $rw['photo']; ?>" alt="Speaker">
                                                        </div>
                                                        <div class="col-xl-9 col-md-6 col-lg-6 col-sm-6 col-xs-6 wow fadeInDown">
                                                           <h3><?php echo $rw['part_name']; ?></h3>
                                                           <p><?php echo $rw['title']; ?></p><br>
                                                            <div style="overflow-y: auto; max-height: 330px;">
                                                                 <?php  echo nl2br($rw['description']); ?>
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
                             <?php } ?>

                    </div>
                            
                </div>
                <?php } ?>
                <?php } ?>
                
                <?php if(!empty($sponsors)) { ?>

                    <br><br>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-sm-6">
                                <br>
                                <center><h4>Sponsors</h4><hr></center>
                            </div>
                        </div>
                        <div class="row client-container">
                            <?php   foreach ($sponsors as $row) {
                                
                                if (!empty($row['url'])) { ?>

                                    <a href="<?php echo $row['url']; ?>" target="_blank" class="col-lg-2 col-md-6 col-sm-6 member" style="background-image: url(<?php echo base_url(); ?>public/uploads/event_sponsors/<?php echo $row['photo']; ?>);">
                                    </a>
                                     <?php  }else{ ?>

                                    <div class="col-lg-2 col-md-6 col-sm-6 member" style="background-image: url(<?php echo base_url(); ?>public/uploads/event_sponsors/<?php echo $row['photo']; ?>);">
                                    </div>

                            <?php  } } ?>
                        </div>
                    </div>
                    <br><br>
                <?php } ?>

                <?php if (!empty($event_detail['event_map'])) { ?>
                    <div class="event-map headstyle">
                        <h4><?php echo EVENT_LOCATION_MAP; ?></h4>
                        <?php echo $event_detail['event_map']; ?>
                    </div>
                    <div class="comment-form headstyle mt_50">
                        <h4><?php echo SHARE_THIS_EVENT; ?></h4>
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
                <?php } ?>
            </div>

        </div>
    </div>
</div>
</div>

<!--Event-Details End