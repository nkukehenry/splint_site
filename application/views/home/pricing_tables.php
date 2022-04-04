
<section id="price" class="price-sec">
    <div class="container">
        <!--Heading-->
        <div class="row">
            <div class="col-md-12 text-center wow fadeIn">
                <div class="title d-inline-block">
                    <h2 class="gradient-text1 mb-3 mb-20 text-capitalize">Become a FITSPA Member</h2>
                    <p class="margin-30 text-width">Choose your plan to get started</p>
                </div>
            </div>
        </div>

        <div class="row" style="overflow: auto;">
            <table class="col-md-12 fadeInUp table table-bordered" style="background-color:#e4f8fb; overflow: auto;">
                <thead>
                    <th >Item</th>
                    <?php foreach($pricing as $item){  ?>
                        <th width="70px">
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
                        <td><?php echo $item['item_name']; ?></td>
                        <td style="text-align:center;">
                            <i class="<?php echo (in_array($id, $ones))?'fas fa-check':'fas fa-close'; ?>" aria-hidden="true"></i>
                        </td>
                        <td style="text-align:center; background-color:#f7f4ec">
                            <i class="<?php echo (in_array($id, $twos))?'fas fa-check':'fas fa-close'; ?>" aria-hidden="true"></i>
                        </td>
                        <td style="text-align:center;">
                           <i class="<?php echo (in_array($id, $fours))?'fas fa-check':'fas fa-close'; ?>" aria-hidden="true"></i>
                        </td>
                        <td style="text-align:center; background-color:#f7f4ec">
                            <i class="<?php echo (in_array($id, $threes))?'fas fa-check':'fas fa-close'; ?>" aria-hidden="true"></i>
                        </td>
                    </tr>
                    
                <?php } ?>

                    <tr>
                        <td></td>
                        <td style="text-align:center;">
                            <?php $title = $pr_one['title']; $pr_one = str_replace(" ","-",$title);  ?>

                            <a href="<?php echo base_url(); ?>membership-registration/<?php echo $pr_one; ?>" class="custom-btn d-blue white-blue hvr-shutter-out-horizontal-blk btn btn-small btn-gradient btn-rounded w-100 dark-blue-background text-capitalize">Get Started</a> 
                        </td>
                        <td style="text-align:center; background-color:#f7f4ec">
                            <?php $title = $pr_two['title']; $pr_two = str_replace(" ","-",$title);  ?>
                            <a href="<?php echo base_url(); ?>membership-registration/<?php echo $pr_two; ?>" class="custom-btn d-blue white-blue hvr-shutter-out-horizontal-blk btn btn-small btn-gradient btn-rounded w-100 dark-blue-background text-capitalize">Get Started</a>
                        </td>
                        <td style="text-align:center;">
                            <?php $title = $pr_three['title']; $pr_three = str_replace(" ","-",$title);  ?>
                           <a href="<?php echo base_url(); ?>membership-registration/<?php echo $pr_three; ?>" class="custom-btn d-blue white-blue hvr-shutter-out-horizontal-blk btn btn-small btn-gradient btn-rounded w-100 dark-blue-background text-capitalize">Get Started</a>
                        </td>
                        <td style="text-align:center; background-color:#f7f4ec">
                            <?php $title = $pr_four['title']; $pr_four = str_replace(" ","-",$title);  ?>
                            <a href="<?php echo base_url(); ?>membership-registration/<?php echo $pr_four; ?>" class="custom-btn d-blue white-blue hvr-shutter-out-horizontal-blk btn btn-small btn-gradient btn-rounded w-100 dark-blue-background text-capitalize">Get Started</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>