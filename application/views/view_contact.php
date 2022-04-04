
<!-- Start Bottom Header -->
<div class="page-area" style="background-image: url(<?php echo base_url(); ?>public/uploads/banner/<?php echo $setting['banner_contact']; ?>)">
    <div class="breadcumb-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="breadcrumb text-center">
                    <div class="section-headline white-headline text-center">
                        <h3><?php echo $page_contact['contact_heading']; ?></h3>
                    </div>
                    <ul>
                        <li class="home-bread">Home</li>
                        <li><?php echo $page_contact['contact_heading']; ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Header -->
<!-- Start contact Area -->
<div class="contact-area area-padding">
    <div class="container">
        <div class="row">
            <div class="contact-inner">
                <!-- Start contact icon column -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="contact-icon text-center">
                        <div class="single-icon">
                            <i class="fa fa-mobile"></i>
                            <p>
                                Call : <?php echo nl2br($page_contact['contact_phone']); ?>
                                <br>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Start contact icon column -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="contact-icon text-center">
                        <div class="single-icon">
                            <i class="fa fa-envelope-o"></i>
                            <p>
                                Email : <?php echo nl2br($page_contact['contact_email']); ?><br>
                                <span>Web: splintinvestments.com</span>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Start contact icon column -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="contact-icon text-center">
                        <div class="single-icon">
                            <i class="fa fa-map-marker"></i>
                            <p>
                                Location : <?php echo nl2br($page_contact['contact_address']); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Start Left contact -->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="contact-form">
                    <div class="row">
                              <h4><?php echo CONTACT_FORM; ?></h4>
                                <?php
                                if($this->session->flashdata('error')) {
                                    echo '<div class="error-class">'.$this->session->flashdata('error').'</div>';
                                }
                                if($this->session->flashdata('success')) {
                                    echo '<div class="success-class">'.$this->session->flashdata('success').'</div>';
                                }
                                ?>
                                <?php echo form_open(base_url().'contact/send_email',array('class' => '')); ?>
                            <div class="form-row row">
                                <div class="form-group col-md-12">
                                    <input type="text" class="form-control" placeholder="<?php echo NAME; ?>" name="name" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="text" class="form-control" placeholder="<?php echo PHONE_NUMBER; ?>" name="phone" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="text" class="form-control" placeholder="<?php echo EMAIL_ADDRESS; ?>" name="email" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="text" class="form-control" placeholder="<?php echo SUBJECT; ?>" name="subject" required>
                                </div>
                                <div class="form-group col-12">
                                    <textarea id="message" class="form-control" placeholder="<?php echo MESSAGE; ?>" name="message" required></textarea>
                                </div>
                                <div class="form-group col-12">
                                    <div class="g-recaptcha" data-sitekey="6LcqpjcdAAAAAAlI1CNun7ndpl64Oev6fDg_03mF">
                                    </div>
                                </div>
                                <!-- <div class="form-group col-12">
                                    <button type="submit" class="btn" name="form_contact"><?php echo SEND_MESSAGE; ?></button>
                                </div -->
                           
                            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                <button type="submit" id="submit"  name="form_contact" class="add-btn contact-btn">Send Message</button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div> 
                                <div class="clearfix"></div>
                            </div>  

                             </div> 

                            <?php echo form_close(); ?>
                    </div>
                </div>
            </div>


             <div class="col-md-6 col-sm-6 col-xs-12">
                 <!-- Start Map -->
                <div class="map-area">
                    <!-- <div id="googleMap" style="width:100%;height:360px;"></div> -->
                    <?php echo $page_contact['contact_map']; ?>
                </div>
                <!-- End Map -->
            </div>

            <!-- End Left contact -->
        </div>
    </div>
</div>
<!-- End Contact Area -->