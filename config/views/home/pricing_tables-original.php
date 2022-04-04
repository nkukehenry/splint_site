        <?php /*
        <div class="row">
            <div id="price-slider" class="owl-carousel owl-item wow fadeInUp">

                <div class="price-item item text-left">
                     <h4 class="alt-font gradient-text1 d-inline-block font-weight-500 mb-4 blue"><?php echo $pr_one['title'] ?></h4>
                    <div class="price-tag d-flex align-items-center">
                        <div class="price alt-font text-dark-gray">
                            <h3 class="currency"><span class="sign"><?php echo $pr_one['currency'] ?></span><?php echo $pr_one['price'] ?></h3>
                            <span class="month text-capitalize"><?php echo $pr_one['subtitle'] ?></span>
                        </div>
                    </div>
                        <ul class="packages">
                        <?php 

                        $title = $pr_one['title'];
                        $pr_one = str_replace(" ","-",$title);

                        foreach($pricing_one as $one){  ?>

                            <li>
                                <i class="<?php if($one['status']==1){ echo "fas fa-check"; }else{echo "fas fa-close"; } ?>" aria-hidden="true"></i>
                                <?php echo $one['item_name'] ?>
                            </li>
                        <?php }  ?>
                    </ul>
                   <a href="<?php echo base_url(); ?>membership-registration/<?php echo $pr_one; ?>" class="custom-btn d-blue white-blue hvr-shutter-out-horizontal-blk btn btn-large btn-gradient btn-rounded w-100 dark-blue-background text-capitalize">Get Started Now</a>  
                </div>

                <div class="price-item item text-left">
                    <h4 class="alt-font gradient-text1 d-inline-block font-weight-500 mb-4 blue"><?php echo $pr_two['title'] ?></h4>
                    <div class="price-tag d-flex align-items-center">
                        <div class="price alt-font text-dark-gray">
                            <h3 class="currency"><span class="sign"><?php echo $pr_two['currency'] ?></span><?php echo $pr_two['price'] ?></h3>
                            <span class="month text-capitalize"><?php echo $pr_two['subtitle'] ?></span>
                        </div>
                    </div>
                    <ul class="packages">
                        <?php

                        $title = $pr_two['title'];
                        $pr_two = str_replace(" ","-",$title); 

                        foreach($pricing_two as $one){  ?>

                            <li>
                                <i class="<?php if($one['status']==1){ echo "fas fa-check"; }else{echo "fas fa-close"; } ?>" aria-hidden="true"></i>
                                <?php echo $one['item_name'] ?>
                            </li>
                        <?php } ?>
                  </ul>
                    <a href="<?php echo base_url(); ?>membership-registration/<?php echo $pr_two; ?>" class="custom-btn d-blue white-blue hvr-shutter-out-horizontal-blk btn btn-large btn-gradient btn-rounded w-100 dark-blue-background text-capitalize">Get Started Now</a>
                </div>
                <!--price item-->

                <div class="price-item text-left">
                    <h4 class="alt-font gradient-text1 d-inline-block font-weight-500 mb-4 blue"><?php echo $pr_three['title'] ?></h4>
                    <div class="price-tag d-flex align-items-center">
                        <div class="price alt-font text-dark-gray">
                            <h3 class="currency"><span class="sign"><?php echo $pr_three['currency'] ?></span><?php echo $pr_three['price'] ?></h3>
                            <span class="month text-capitalize"><?php echo $pr_three['subtitle'] ?></span>
                        </div>
                    </div>
                    <ul class="packages">
                        <?php

                        $title = $pr_three['title'];
                        $pr_three = str_replace(" ","-",$title);

                        foreach($pricing_four as $one){  ?>

                            <li>
                                <i class="<?php if($one['status']==1){ echo "fas fa-check"; }else{echo "fas fa-close"; } ?>" aria-hidden="true"></i>
                                <?php echo $one['item_name'] ?>
                            </li>
                        <?php } ?>
                   </ul>
                   <a href="<?php echo base_url(); ?>membership-registration/<?php echo $pr_three; ?>" class="custom-btn d-blue white-blue hvr-shutter-out-horizontal-blk btn btn-large btn-gradient btn-rounded w-100 dark-blue-background text-capitalize">Get Started Now</a>
                </div>
                <!--price item-->
                <div class="price-item text-left">
                    <h4 class="alt-font gradient-text1 d-inline-block font-weight-500 mb-4 blue"><?php echo $pr_four['title'] ?></h4>
                    <div class="price-tag d-flex align-items-center">
                        <div class="price alt-font text-dark-gray">
                            <h3 class="currency"><span class="sign"><?php echo $pr_four['currency'] ?></span><?php echo $pr_four['price'] ?></h3>
                            <span class="month text-capitalize"><?php echo $pr_four['subtitle'] ?></span>
                        </div>
                    </div>
                    <ul class="packages">
                        <?php 

                        $title = $pr_four['title'];
                        $pr_four = str_replace(" ","-",$title);
                        
                        foreach($pricing_three as $one){  ?>

                            <li>
                                <i class="<?php if($one['status']==1){ echo "fas fa-check"; }else{echo "fas fa-close"; } ?>" aria-hidden="true"></i>
                                <?php echo $one['item_name'] ?>
                            </li>
                        <?php } ?>
                   </ul>
                   <a href="<?php echo base_url(); ?>membership-registration/<?php echo $pr_four; ?>" class="custom-btn d-blue white-blue hvr-shutter-out-horizontal-blk btn btn-large btn-gradient btn-rounded w-100 dark-blue-background text-capitalize">Get Started Now</a>
                </div>
            </div>
        </div> */ ?>



        <!--Team-->
        <?php /*
        <div class="row price-row">
            <div id="price-slider" class="owl-carousel owl-item wow fadeInUp">

                <div class="price-item item text-left">
                     <h4 class="alt-font gradient-text1 d-inline-block font-weight-500 mb-4 blue"><?php echo $pr_one['title'] ?></h4>
                    <div class="price-tag d-flex align-items-center">
                        <div class="price alt-font text-dark-gray">
                            <h3 class="currency"><span class="sign"><?php echo $pr_one['currency'] ?></span><?php echo $pr_one['price'] ?></h3>
                            <span class="month text-capitalize"><?php echo $pr_one['subtitle'] ?></span>
                        </div>
                    </div>
                        <ul class="packages">
   
                        <?php 
                            $title = $pr_one['title'];
                            $pr_one = str_replace(" ","-",$title);

                        foreach($pricing_one as $one){  ?>

                            <li>
                                <i class="<?php if($one['status']==1){ echo "fa fa-check"; }else{echo "fa fa-close"; } ?>" aria-hidden="true"></i>
                                <?php echo $one['item_name'] ?>
                            </li>
                        <?php } ?>
                    </ul>
                    <a href="<?php echo base_url(); ?>membership-registration/<?php echo $pr_one; ?>" class="custom-btn d-blue white-blue hvr-shutter-out-horizontal-blk btn btn-large btn-gradient btn-rounded w-100 dark-blue-background text-capitalize">Get Started Now</a>
                </div>
                <!--price item-->


                <div class="price-item item text-left">
                    <h4 class="alt-font gradient-text1 d-inline-block font-weight-500 mb-4 blue"><?php echo $pr_two['title'] ?></h4>
                    <div class="price-tag d-flex align-items-center">
                        <div class="price alt-font text-dark-gray">
                            <h3 class="currency"><span class="sign"><?php echo $pr_two['currency'] ?></span><?php echo $pr_two['price'] ?></h3>
                            <span class="month text-capitalize"><?php echo $pr_two['subtitle'] ?></span>
                        </div>
                    </div>
                    <ul class="packages">
                        <?php 

                        $title = $pr_two['title'];
                        $pr_two = str_replace(" ","-",$title);

                        foreach($pricing_two as $one){  ?>

                            <li>
                                <i class="<?php if($one['status']==1){ echo "fa fa-check"; }else{echo "fa fa-close"; } ?>" aria-hidden="true"></i>
                                <?php echo $one['item_name'] ?>
                            </li>
                        <?php } ?>
                  </ul>
                    <a href="<?php echo base_url(); ?>membership-registration/<?php echo $pr_two; ?>" class="custom-btn d-blue white-blue hvr-shutter-out-horizontal-blk btn btn-large btn-gradient btn-rounded w-100 dark-blue-background text-capitalize">Get Started Now</a>
                </div>
                <!--price item-->

                <div class="price-item text-left">
                    <h4 class="alt-font gradient-text1 d-inline-block font-weight-500 mb-4 blue"><?php echo $pr_three['title'] ?></h4>
                    <div class="price-tag d-flex align-items-center">
                        <div class="price alt-font text-dark-gray">
                            <h3 class="currency"><span class="sign"><?php echo $pr_three['currency'] ?></span><?php echo $pr_three['price'] ?></h3>
                            <span class="month text-capitalize"><?php echo $pr_three['subtitle'] ?></span>
                        </div>
                    </div>
                    <ul class="packages">
                        <?php

                        $title = $pr_three['title'];
                        $pr_three = str_replace(" ","-",$title);

                         foreach($pricing_four as $one){  ?>

                            <li>
                                <i class="<?php if($one['status']==1){ echo "fa fa-check"; }else{echo "fa fa-close"; } ?>" aria-hidden="true"></i>
                                <?php echo $one['item_name'] ?>
                            </li>
                        <?php } ?>
                   </ul>
                   <a href="<?php echo base_url(); ?>membership-registration/<?php echo $pr_three; ?>" class="custom-btn d-blue white-blue hvr-shutter-out-horizontal-blk btn btn-large btn-gradient btn-rounded w-100 dark-blue-background text-capitalize">Get Started Now</a>
                </div>
                <!--price item-->
                <div class="price-item text-left">
                    <h4 class="alt-font gradient-text1 d-inline-block font-weight-500 mb-4 blue"><?php echo $pr_four['title'] ?></h4>
                    <div class="price-tag d-flex align-items-center">
                        <div class="price alt-font text-dark-gray">
                            <h3 class="currency"><span class="sign"><?php echo $pr_four['currency'] ?></span><?php echo $pr_four['price'] ?></h3>
                            <span class="month text-capitalize"><?php echo $pr_four['subtitle'] ?></span>
                        </div>
                    </div>
                    <ul class="packages">
                        <?php

                        $title = $pr_four['title'];
                        $pr_four = str_replace(" ","-",$title);

                         foreach($pricing_three as $one){  ?>

                            <li>
                                <i class="<?php if($one['status']==1){ echo "fa fa-check"; }else{echo "fa fa-close"; } ?>" aria-hidden="true"></i>
                                <?php echo $one['item_name'] ?>
                            </li>
                        <?php } ?>
                   </ul>
                   <a href="<?php echo base_url(); ?>membership-registration/<?php echo $pr_four; ?>" class="custom-btn d-blue white-blue hvr-shutter-out-horizontal-blk btn btn-large btn-gradient btn-rounded w-100 dark-blue-background text-capitalize">Get Started Now</a>
                </div>
            </div>
        </div> */ ?>