        <div class="faq-area area-padding-2">
            <div class="container">
             <div class="row">
    					<div class="col-md-12 col-sm-12 col-xs-12">
    						<div class="section-headline text-center">
                      <h3>Frequently Asked Questions</h3>
                      <p>Below are some of the questions we are often asked, if yours are  not covered here, please contacts us.</p>
    						</div>
    					</div>
    				</div>
                <div class="row">

                      <?php
                        $i=0;
                        foreach ($faqs as $row):
                            $i++; ?>

                            <div class="single-faq col-md-6 col-sm-6 col-xs-12">
                               <h4><span class="number"><?=$i?>.</span> <span class="q-text"><?php echo $row['faq_title']; ?></span></h4>
                               <p><?php echo $row['faq_content']; ?></p>
                            </div>

                          <?php endforeach; ?>
                            
                           
                </div>
            </div>
        </div>
        <!-- End FAQ area -->