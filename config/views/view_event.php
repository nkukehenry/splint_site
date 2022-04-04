<!--Banner Start-->
<div class="banner-slider" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner_event']; ?>)">
    <div class="bg"></div>
    <div class="bannder-table">
        <div class="banner-text wow fadeInDown">
            <h1><?php echo $page_event['event_heading']; ?></h1>
        </div>
    </div>
</div>
<!--Banner End-->


<!--Event-Area Start-->
<div class="service-page pt_10 pb_10">
    <div class="container">
        <div class="row">

                <?php
                foreach($event_fetched as $row) {
                    ?>

                    <div class="col-lg-3 col-md-6 wow fadeInUp">
                        <div class="services-item effect-item" >
                            <a href="<?php echo base_url(); ?>events/<?php echo $row->name_slag; ?>">
                                <div class="services-photo" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $row->photo; ?>)"></div>
                            </a>
                            <div class="services-text" style="background-color:#ffff!important;">
                                <div class="event-header">
                                        <ul>
                                            <li class="event-header-left">
                                                <h4><?php echo $row->event_title; ?></h4>
                                                <small><i class="fa fa-clock-o"></i> Start: 
                                                <?php 
                                                $dt = explode('-',$row->event_start_date);
                                                if($dt[1] == '01') {$month = 'Jan';}
                                                if($dt[1] == '02') {$month = 'Feb';}
                                                if($dt[1] == '03') {$month = 'Mar';}
                                                if($dt[1] == '04') {$month = 'Apr';}
                                                if($dt[1] == '05') {$month = 'May';}
                                                if($dt[1] == '06') {$month = 'Jun';}
                                                if($dt[1] == '07') {$month = 'Jul';}
                                                if($dt[1] == '08') {$month = 'Aug';}
                                                if($dt[1] == '09') {$month = 'Sept';}
                                                if($dt[1] == '10') {$month = 'Oct';}
                                                if($dt[1] == '11') {$month = 'Nov';}
                                                if($dt[1] == '12') {$month = 'Dec';}
                                                echo $month . ' ' . $dt[2] . ', ' . $dt[0];
                                                ?>
                                                </small><br>
                                                <small><i class="fa fa-clock-o"></i> End: 
                                                <?php 
                                                $dt = explode('-',$row->event_end_date);
                                                if($dt[1] == '01') {$month = 'Jan';}
                                                if($dt[1] == '02') {$month = 'Feb';}
                                                if($dt[1] == '03') {$month = 'Mar';}
                                                if($dt[1] == '04') {$month = 'Apr';}
                                                if($dt[1] == '05') {$month = 'May';}
                                                if($dt[1] == '06') {$month = 'Jun';}
                                                if($dt[1] == '07') {$month = 'Jul';}
                                                if($dt[1] == '08') {$month = 'Aug';}
                                                if($dt[1] == '09') {$month = 'Sept';}
                                                if($dt[1] == '10') {$month = 'Oct';}
                                                if($dt[1] == '11') {$month = 'Nov';}
                                                if($dt[1] == '12') {$month = 'Dec';} 
                                                echo $month . ' ' . $dt[2] . ', ' . $dt[0];
                                                ?>
                                                </small>
                                                
                                            </li>
                                            <li class="event-header-left">
                                                <small><i class="fa fa-map-marker"></i> <?php echo ADDRESS ?>: <?php echo nl2br($row->event_location); ?></small>
                                            </li>
                                        </ul>
                                    </div><hr>
                                <p>
                                     <?php // echo  character_limiter($row->event_content_short,100); ?>
                                </p>
                                <div class="button-bn">
                                    <a href="<?php echo base_url(); ?>events/<?php echo $row->name_slag; ?>"><?php echo READ_MORE; ?> <i class="fa fa-chevron-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
        </div>
        <div class="row">
            <div class="col-md-12" style="margin-top:30px;text-align: center;">
                <?php echo $links; ?>
            </div>
        </div>
    </div>
</div>
<!--Event-Area End