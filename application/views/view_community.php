<!--Banner Start-->
<div class="banner-slider" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner_photo_gallery']; ?>)">
    <div class="bg"></div>
    <div class="bannder-table">
        <div class="banner-text wow slideInLeft" data-wow-duration="1s">
            <h1>OUR COMMUNITY</h1>
        </div>
    </div>
</div> 
<!--Banner End-->

<div class="pt_0 pb_10" >
    <?php if(!empty($cty_gold)) { ?>
        <div class="container" style=" padding:20px;">
            <div class="row">
                <div class="col-lg-12">
                    <br>
                    <center><h3>Gold Category</h3><hr></center>
                </div>
            </div>
            <div class="row wow slideInUp"  style="justify-content:center;" >

                <?php foreach ($cty_gold as $row) { 

                    if (!empty($row['link'])) { ?>

                        <a href="<?php echo $row['link']; ?>" target="_blank" class="col-lg-2 col-md-6 col-sm-6 member" style="background-image: url(<?php echo base_url(); ?>public/uploads/comnty-member/<?php echo $row['photo']; ?>);">
                        </a>
                         <?php  }else{ ?>

                        <div class="col-lg-2 col-md-6 col-sm-6 member" style="background-image: url(<?php echo base_url(); ?>public/uploads/comnty-member/<?php echo $row['photo']; ?>);">
                        </div>

                <?php  } } ?>
            </div>
        </div>
    <?php } ?>

    <br>

    <?php if(!empty($cty_silver)) { ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-6">
                    <br>
                    <center><h3>Silver Category</h3><hr></center>
                </div>
            </div>
           
            <div class="row wow slideInUp"  style="justify-content:center;" >

                <?php foreach ($cty_silver as $row) {

                    if (!empty($row['link'])) { ?>

                        <a href="<?php echo $row['link']; ?>" target="_blank" class="col-lg-2 col-md-6 col-sm-6 member" style="background-image: url(<?php echo base_url(); ?>public/uploads/comnty-member/<?php echo $row['photo']; ?>);">
                        </a>
                         <?php  }else{ ?>

                        <div class="col-lg-2 col-md-6 col-sm-6 member" style="background-image: url(<?php echo base_url(); ?>public/uploads/comnty-member/<?php echo $row['photo']; ?>);">
                        </div>

                <?php  } } ?>
            </div>
        </div>
    <?php } ?>

    <br><br>

    <?php if(!empty($cty_bronze)) { ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-6">
                    <br>
                    <center><h3>Bronze Category</h3><hr></center>
                </div>
            </div>
            <div class="row wow slideInUp"  style="justify-content:center;" >
                <?php  foreach ($cty_bronze as $row) {
                
                    if (!empty($row['link'])) { ?>

                        <a href="<?php echo $row['link']; ?>" target="_blank" class="col-lg-2 col-md-6 col-sm-6 member" style="background-image: url(<?php echo base_url(); ?>public/uploads/comnty-member/<?php echo $row['photo']; ?>);">
                        </a>
                         <?php  }else{ ?>

                        <div class="col-lg-2 col-md-6 col-sm-6 member" style="background-image: url(<?php echo base_url(); ?>public/uploads/comnty-member/<?php echo $row['photo']; ?>);">
                        </div>

                <?php  } } ?>
            </div>
        </div>
    <?php } ?>

    <br><br>

    <?php if(!empty($cty_basic)) { ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-6">
                    <br>
                    <center><h4>Basic/Free Category</h4><hr></center>
                </div>
            </div>
            <div class="row">
                <?php  foreach ($cty_basic as $row) {
                    
                    if (!empty($row['link'])) { ?>

                        <a href="<?php echo $row['link']; ?>" target="_blank" class="col-lg-2 col-md-6 col-sm-6 member" style="background-image: url(<?php echo base_url(); ?>public/uploads/comnty-member/<?php echo $row['photo']; ?>);">
                        </a>
                         <?php  }else{ ?>

                        <div class="col-lg-2 col-md-6 col-sm-6 member" style="background-image: url(<?php echo base_url(); ?>public/uploads/comnty-member/<?php echo $row['photo']; ?>);">
                        </div>

                <?php  } } ?>
            </div>
        </div>
    <?php } ?>

    <br><br>
    <?php if(!empty($partners)) { ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-6">
                    <br>
                    <center><h4>Our Partners</h4><hr></center>
                </div>
            </div>
            <div class="row client-container">
                <?php   foreach ($partners as $row) {
                    
                    if (!empty($row['url'])) { ?>

                        <a href="<?php echo $row['url']; ?>" target="_blank" class="col-lg-2 col-md-6 col-sm-6 member" style="background-image: url(<?php echo base_url(); ?>public/uploads/partners/<?php echo $row['photo']; ?>);">
                        </a>
                         <?php  }else{ ?>

                        <div class="col-lg-2 col-md-6 col-sm-6 member" style="background-image: url(<?php echo base_url(); ?>public/uploads/partners/<?php echo $row['photo']; ?>);">
                        </div>

                <?php  } } ?>
            </div>
        </div>
    <?php } ?>
</div>

<!--Gallery End-->


 