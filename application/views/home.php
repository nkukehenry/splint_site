<?php $this->load->view('partials/header.php'); ?>

        <!-- Start Slider Area -->
		<div class="slide-area fix" data-stellar-background-ratio="0.6" style="background-image: url(public/uploads/slider/slider-1.webp);">
            <div class="display-table">
                <div class="display-table-cell">
					<div class="container">
						<div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">

                                <?php foreach($sliders as $slider):

                                 ?>
                                <!-- Start Slider content -->
                                <div class="slide-content">
                                    <h2 class="title2">  <?php echo nl2br($slider['text_01']); ?></h2>
                                    <p>  <?php echo nl2br($slider['text_02']); ?></p>
                                    <div class="layer-1-3">

                                        <?php  if(!empty($slider['btn_url'])): ?>
                                        <a href="<?=$slider['btn_url']?>" class="ready-btn left-btn" >
                                            <?php echo $slider['btn_text']; ?></a>
                                        <?php endif; ?>

                                        <!-- <div class="video-content">
                                            <a href="https://www.youtube.com/watch?v=O33uuBh6nXA" class="video-play vid-zone">
                                                <i class="fa fa-play"></i>
                                                <span>watch video</span>
                                            </a>
                                        </div> -->
                                    </div>
                                </div>
                                <!-- End Slider content -->

                                <?php endforeach; ?>
						    </div>
						</div>
					</div>
				</div>
            </div>
		</div>
		<!-- End Slider Area -->

        <?php
          require_once 'home/about_section.php';
          require_once 'home/counter_section.php';
        ?>

        <!-- Start Download area -->
		<div class="download-area area-padding">
			<div class="container">
				<div class="row">
                    <!-- Start Column -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="download-image flexed">
                            <img src="<?= base_url(); ?>public/splint/img/cashawo.png" width="300px" alt="download-image" class="elevated">
                        </div>
                    </div>
                    <!-- End Column --> 
                    <!-- Start Column -->
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="download-text">
						    <h3>Start earning with CASHAWO</h3>
						    <p>Cash Awo is an agent powered bill payments and mobile money transactions app. We allow our agents to transact on services like mobile money, YAKA, Water bills, Data, Airtime, Pay TV, URA and so much more while you earn commission.
                            Cash Awo was designed to make transactions Instant, so you don't have to worry.</p>
                            <h4>How to get started:</h4>
                            <ul>
                                <li>Download and install the  app.</li>
                                <li>Open the app and complete the registration process.</li>
                                <li>Wait for an approval SMS.</li>
                                <li>Login and set your password/credntials.</li>
                                <li>Load float and start making money.</li>
                            </ul>
						    <div class="down-btn" data-wow-delay="0.7s">
                                <a href="https://play.google.com/store/apps/details?id=com.cashawo.agent&hl=en&gl=US"  target="_blank" class="app-btn left-btn">Download from Google Play</a>
                                <!-- <a href="#" class="app-btn right-btn">App store</a> -->
                            </div>
						</div>
				    </div>   
				</div>
			</div>
		</div>
		<!-- End Download area -->
        <!-- Start Banner Area -->
        <div class="banner-area area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="banner-all area-80 text-center">
                            <div class="banner-content">
                                <h3 style="font-size: 2em;">We offer a wide range of fintech and other technological products. Contact us today for details.</h3>
                                <a class="banner-btn" href="<?=base_url()?>contact">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner Area -->

<?php $this->load->view('partials/footer.php'); ?>
