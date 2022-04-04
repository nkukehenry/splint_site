<!--Banner Start-->
<div class="banner-slider" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner_about']; ?>)">
    <div class="bg"></div>
    <div class="bannder-table">
        <div class="banner-text">
            <h1>Sign Up</h1>
        </div>
    </div>
</div>
<!--Banner End-->

<style>
.checkboxes {
  display: flex;
  justify-content: flex-start;
  align-items: center;
  vertical-align: center;
  word-wrap: break-word;
}
</style>

<!--Contact Start-->
<div class="contact-area pt_10 pb_10 ">
    <div class="container">
        <div class="row">
            
        </div>
        <div class="row sidebar">
            <div class="col-12 sidebar-item">
                <div class="contact-form headstyle pt_10">
                    <?php
                    if($this->session->flashdata('error')) {
                        echo '<div class="error-class">'.$this->session->flashdata('error').'</div>';
                    }
                    if($this->session->flashdata('success')) {
                        echo '<div class="success-class">'.$this->session->flashdata('success').'</div>';
                    }
                    ?>
                    <?php echo form_open_multipart(base_url().'save-registration',array('class' => '')); ?>
                        <div class="form-row row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" placeholder="Your Company Name" name="company" required>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" placeholder="Your email" name="email" required>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" placeholder="Designation" name="designation" required>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" placeholder="<?php echo PHONE_NUMBER; ?>" name="phone" required>
                            </div>
                        </div>
                        <div class="form-group row">

                            <div class="form-group col-md-12 ">
                              <div><b>Category</b></div>
                              
                                <div class="form-row row form-data">
                                    <div class="form-group col-md-3 col-xs-6">
                                      <label  class="checkboxes"><input type="checkbox" class="checkboxes" name="blockchain" value="1">&nbsp&nbsp Blockchain</label>
                                    </div>
                                    <div class="form-group col-md-3 col-xs-6">
                                      <label  class="checkboxes"><input type="checkbox" class="checkboxes" name="cybersec" value="1">&nbsp&nbsp Cybersecurity</label>
                                    </div>
                                    
                                    <div class="form-group form-check col-md-3 col-xs-6">
                                        <label  class="checkboxes"><input type="checkbox" class="checkboxes" name="digital_pymt_sln" value="1"/> &nbsp&nbsp Digital Payment Solutions</label>
                                     </div>
                                     
                                    <div class="form-group col-md-3 col-xs-6">
                                      <label  class="checkboxes"><input type="checkbox" class="checkboxes" name="cross_bdr_mymts" value="1"/>&nbsp&nbsp Cross Border Payments
                                      </label>
                                    </div>
                                    <div class="form-group col-md-3 col-xs-6">
                                      <label  class="checkboxes"><input type="checkbox" class="checkboxes" name="big_data_analytics" value="1"/>&nbsp&nbsp Big Data Analytics
                                      </label>
                                    </div>
                                    <div class="form-group col-md-3 col-xs-6">
                                      <label  class="checkboxes"><input type="checkbox" class="checkboxes" name="insur_tech" value="1"/>&nbsp&nbsp InsurTech
                                      </label>
                                    </div>
                                    <div class="form-group col-md-3 col-xs-6">
                                      <label  class="checkboxes"><input type="checkbox" class="checkboxes" name="e_commerce" value="1">&nbsp&nbsp E-commerce
                                      </label>
                                    </div>
                                    <div class="form-group col-md-3 col-xs-6">
                                      <label  class="checkboxes"><input type="checkbox" class="checkboxes" name="artifical_int" value="1"/>&nbsp&nbsp Artificial Intelligence
                                      </label>
                                    </div>
                                    <div class="form-group col-md-3 col-xs-6">
                                      <label  class="checkboxes"><input type="checkbox" class="checkboxes" name="mobile_banking" value="1"/>&nbsp&nbsp Mobile Banking
                                      </label>
                                    </div>
                                    <div class="form-group col-md-3 col-xs-6">
                                      <label  class="checkboxes"><input type="checkbox" class="checkboxes" name="micro_credit" value="1"/>&nbsp&nbsp Microcredit </label>
                                    </div>
                                    <div class="form-group col-md-3 col-xs-6">
                                      <label  class="checkboxes"><input type="checkbox" class="checkboxes" name="regulation" value="1"/>&nbsp&nbsp Regulation</label>
                                    </div>
                                    <div class="form-group col-md-3 col-xs-6">
                                      <label  class="checkboxes"><input type="checkbox" class="checkboxes" name="digital_economy" value="1"/>&nbsp&nbsp  Digital Economy</label>
                                    </div>
                                    <div class="form-group col-md-3 col-xs-6">
                                      <label  class="checkboxes"><input type="checkbox" class="checkboxes" name="financial_literacy" value="1"/>&nbsp&nbsp Financial Literacy</label>
                                    </div>
                                    <div class="form-group col-md-3 col-xs-6">
                                      <label  class="checkboxes"><input type="checkbox" class="checkboxes" name="digital_identification" value="1"/>&nbsp&nbsp Digital Identification</label>
                                    </div>
                                    <div class="form-group col-md-3 col-xs-6">
                                      <label  class="checkboxes"><input type="checkbox" class="checkboxes" name="wealth_management" value="1"/>&nbsp&nbsp Wealth Management</label>
                                    </div>
                                    <div class="form-group col-md-3 col-xs-6">
                                      <label  class="checkboxes"><input type="checkbox" class="checkboxes"  name="digital_savings" value="1"/>&nbsp&nbsp Digital Savings</label>
                                    </div>
                                    <div class="form-group col-md-3 col-xs-6">
                                      <label  class="checkboxes"><input type="checkbox" class="checkboxes" name="women_in_fintech" value="1"/>&nbsp&nbsp Women in FinTech</label>
                                    </div>
                                    <div class="form-group col-md-3 col-xs-6">
                                      <label  class="checkboxes"><input type="checkbox" class="checkboxes" name="banking" value="1"/>&nbsp&nbsp Banking</label>
                                    </div>
                                    <div class="form-group col-md-3 col-xs-6">
                                      <label  class="checkboxes"><input type="checkbox" class="checkboxes" name="fintech_enthusiast" value="1"/>&nbsp&nbsp Fintech enthusiast</label>
                                    </div>
                              </div>
                            </div>
                            </div>
                            <div class="form-row row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" readonly value="Your desired plan is: <?php echo $title; ?>" required>

                                    <input type="hidden" class="form-control" name="package_name" readonly value="<?php echo $title; ?>">
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control" placeholder="First Name" name="fist_name" required>
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control" placeholder="Last Name" name="last_name" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <select type="text" class="form-control" name="busines_type" required>
                                        <option>What kind of Business are you? *</option>
                                        <option value="Startup">Startup</option>
                                        <option value="SME">SME</option>
                                        <option value="Individual">Individual</option>
                                        <option value="Bank">Bank</option>
                                        <option value="Telecom">Telecom</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" placeholder="What your monthly turn over? *" name="monthly_turn_over" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="number" class="form-control" placeholder="Number of Female Employees *" name="female_employee_no" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="file" class="form-control" name="attachment" required>
                                </div>

                                <div class="form-group col-md-12 ">
                                    <div><b>What are you interested in? *</b></div>

                                    <div class="form-row row">
                                        <div class="form-group col-md-3 col-xs-6">
                                          <label  class="checkboxes"><input type="checkbox" class="checkboxes" name="programmes_and_vents" value="1"/>&nbsp&nbsp Programmes and Events</label>
                                        </div>
                                        <div class="form-group col-md-3 col-xs-6">
                                          <label  class="checkboxes"><input type="checkbox" class="checkboxes" name="promotion_and_advocacy" value="1"/>&nbsp&nbsp Promotion and Advocacy
                                          </label>
                                        </div>
                                        <div class="form-group col-md-3 col-xs-6">
                                          <label  class="checkboxes"><input type="checkbox" class="checkboxes" name="policy_and_regulation" value="1"/>&nbsp&nbsp Policy and Regulation
                                            </label>
                                         </div>
                                        <div class="form-group col-md-3 col-xs-6">
                                          <label  class="checkboxes"><input type="checkbox" class="checkboxes" name="capital_and_funding" value="1"/>&nbsp&nbsp Capital and Funding
                                          </label>
                                        </div>
                                        <div class="form-group col-md-3 col-xs-6">
                                          <label  class="checkboxes"><input type="checkbox" class="checkboxes" name="scaling_and_international" value="1"/>&nbsp&nbsp Scaling and International
                                          </label>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group col-12">
                                    <textarea class="form-control" placeholder="<?php echo MESSAGE; ?>" name="message" required></textarea>
                                </div>
                                
                                <div class="form-group col-12">
                                        <div class="g-recaptcha" data-sitekey="6LcqpjcdAAAAAAlI1CNun7ndpl64Oev6fDg_03mF">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group col-12">
                                <button type="submit" class="btn" name="form_register"><?php echo SEND_MESSAGE; ?></button>
                            </div>
                            <?php echo form_close(); ?>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!--Contact End-->
