
  <!-- counter area start -->
        <div class="services-area area-padding-2">
            <div class="container">
               <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
                            <h3><?php echo $page_home['home_welcome_pbar4_text']; ?></h3>
                            <p><?php echo $page_home['home_welcome_text']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="all-services">

                        <!-- single-well end-->
                        <?php foreach(get_counters() as $counter): ?>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="single-service ">
                                    <div class="service-img">
                                        <a class="service-icon" href="#"><i class="<?php echo $counter->icon; ?>"></i></a>
                                    </div>
                                    <div class="main-service">
                                        <div class="service-content">
                                            <h4><?php echo $counter->counter_label; ?></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         <?php endforeach; ?>
                      
                       
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- End counter area End -->
