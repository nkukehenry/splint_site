<style type="text/css">
    .owl-stage-outer{
        z-index: 1000!important;
        padding-bottom: 50px!important;
    }
</style>
<!--Banner Start-->
<div class="banner-slider" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner_team']; ?>)">
    <div class="bg"></div>
    <div class="bannder-table">
        <div class="banner-text">
            <h1>Become a <u>FITSPA</u> Member</h1>
        </div>
    </div>
</div>
<!--Banner End-->

<div class="about-page pt_30 pb_0 price-sec">
    <div class="container">
        <!--Heading-->
        <div class="row">
            <div class="col-md-12 text-center wow fadeIn">
                <div class="title d-inline-block">
                    <h3 class="margin-30 text-width">Choose your plan to get started</h3>
                    <br>
                </div>
            </div>
        </div>

        <div class="row" style="overflow: auto;">
            <table class="col-md-12 fadeInUp table table-bordered" style="background-color:#e4f8fb; overflow: auto;">
                <thead>
                    <th style="text-align: left!important;">Item</th>
                    <?php foreach($pricing as $item){  ?>
                        <th style="min-width: 150px!important;">
                            <?php echo $item['title']; ?><br>
                            
                            <div class="price-tag d-flex align-items-center">
                                <div class="price alt-font text-dark-gray">
                                    <h3 class="currency"><span class="sign"><?php echo $item['currency'] ?></span><?php echo $item['price'] ?></h3>
                                    <span class="month text-capitalize"><?php echo $item['subtitle'] ?></span>
                                </div>
                            </div>
                        </th>
                    <?php }; ?>
                </thead>
                <tbody>
                <?php foreach($items as $item){ $id =$item['item_id']; ?>

                    <tr>
                        <td style="text-align: left!important;"><?php echo $item['item_name']; ?></td>
                        <td style="text-align:center;">
                            <small><i class="<?php echo (in_array($id, $ones))?'fa fa-check':'fa fa-close'; ?>"></i></small>
                        </td>
                        <td style="text-align:center; background-color:#f7f4ec">
                            <small><i class="<?php echo (in_array($id, $twos))?'fa fa-check':'fa fa-close'; ?>"></i></small>
                        </td>
                        <td style="text-align:center;">
                           <small><i class="<?php echo (in_array($id, $fours))?'fa fa-check':'fa fa-close'; ?>"></i></small>
                        </td>
                        <td style="text-align:center; background-color:#f7f4ec">
                            <small><i class="<?php echo (in_array($id, $threes))?'fa fa-check':'fa fa-close'; ?>"></i></small>
                        </td>
                    </tr>
                    
                <?php } ?>

                    <tr>
                        <td></td>
                        <td style="text-align:center;">
                            <?php $title = $pr_one['title']; $pr_one = str_replace(" ","-",$title);  ?>

                            <a style="text-decoration: none;" href="<?php echo base_url(); ?>membership-registration/<?php echo $pr_one; ?>" class="custom-btn d-blue white-blue hvr-shutter-out-horizontal-blk btn-a btn-small btn-gradient btn-rounded w-100 dark-blue-background text-capitalize">Get Started</a> 
                        </td>
                        <td style="text-align:center; background-color:#f7f4ec;">
                            <?php $title = $pr_two['title']; $pr_two = str_replace(" ","-",$title);  ?>
                            <a style="text-decoration: none;" href="<?php echo base_url(); ?>membership-registration/<?php echo $pr_two; ?>" class="custom-btn d-blue white-blue hvr-shutter-out-horizontal-blk btn-a btn-small btn-gradient btn-rounded w-100 dark-blue-background text-capitalize">Get Started</a>
                        </td>
                        <td style="text-align:center; text-decoration: none;">
                            <?php $title = $pr_three['title']; $pr_three = str_replace(" ","-",$title);  ?>
                           <a style="text-decoration: none;" href="<?php echo base_url(); ?>membership-registration/<?php echo $pr_three; ?>" class="custom-btn d-blue white-blue hvr-shutter-out-horizontal-blk btn-a btn-small btn-gradient btn-rounded w-100 dark-blue-background text-capitalize">Get Started</a>
                        </td>
                        <td style="text-align:center; background-color:#f7f4ec;">
                            <?php $title = $pr_four['title']; $pr_four = str_replace(" ","-",$title);  ?>
                            <a style="text-decoration: none;" href="<?php echo base_url(); ?>membership-registration/<?php echo $pr_four; ?>" class="custom-btn d-blue white-blue hvr-shutter-out-horizontal-blk btn-a btn-small btn-gradient btn-rounded w-100 dark-blue-background text-capitalize">Get Started</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>


        <?php if(!empty($partner_items)){  ?>
        <div class="row pt_30 pb_40">
            <div class="col-md-12">
                 <div class="row">
                    <div class="col-lg-12 choose-itm-rad" data-aos="zoom-in">
                        <div  class="choose-item-" >
                          
                            <div class="choose-text-">
                                <h4>Become Partner</h4>
                               
                                    <?php foreach($partner_items as $one){  ?>
                                        <p>
                                            <?php echo $one['item_name']; ?>
                                        </p>
                                    <?php } ?>
                                
                                <br><br>

                                <a style="text-decoration: none;" href="<?php echo base_url(); ?>membership-registration/Partner" class="custom-btn d-blue white-blue hvr-shutter-out-horizontal-blk btn-a btn-small btn-gradient btn-rounded w-40 dark-blue-background text-capitalize">Get Started Now</a>
                                  <br><br>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>

    </div>

 <?php if(!empty($encouraging_items)){  ?>
<div class="feature-area feature-two bg-area pt_40 pb_20">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="headline">
                    <h3>Don't be afraid to give up the good to go for the great</h3>
                </div>
            </div>
        </div>
        <div class="row">
            
            <?php foreach($encouraging_items as $data){  ?>
                <div class="col-lg-4 col-md-4 col-sm-12" data-aos="zoom-in-down">
                    <div class="feature-item" >
                        <div class="feature-text">
                            <h4><?php echo $data['name']; ?></h4>
                            <p>
                                <?php echo $data['content']; ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</div>
<?php } ?>

</div>
<!-- </section> -->