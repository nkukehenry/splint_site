<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin');
}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>Applications/Subscribers</h1>
	</div>
	<div class="content-header-right">
		<?php /*<a href="<?php echo base_url(); ?>admin/subscriber/delete_pending" class="btn btn-primary btn-sm" onClick="return confirm('Are you sure?');">Remove Pending Subscribers</a> */ ?>
		<a href="<?php echo base_url(); ?>admin/subscriber/export_csv" class="btn btn-primary btn-sm" onClick="return confirm('Are you sure?');">Export as CSV</a>
		<a href="<?php echo base_url(); ?>admin/subscriber/send_email" class="btn btn-primary btn-sm">Send Email to All</a>
	</div>
</section>


<section class="content">
	<div class="row">
		<div class="col-md-12">

			<?php
			if($this->session->flashdata('error')) {
				?>
				<div class="callout callout-danger">
					<p><?php echo $this->session->flashdata('error'); ?></p>
				</div>
				<?php
			}
			if($this->session->flashdata('success')) {
				?>
				<div class="callout callout-success">
					<p><?php echo $this->session->flashdata('success'); ?></p>
				</div>
				<?php
			}
			?>

			<div class="box box-info">        
				<div class="box-body table-responsive">
					<table id="example1" class="table table-bordered table-striped">
					<thead>
					<tr>
					    <th width="5px">#</th>
					    <th>Company</th>
					    <th>Phone</th>
					    <th>Email</th>
					    <th>Package</th>
					    <th>Applied at</th>
					    <th>Action</th>
					</tr>
					</thead>
					<tbody>
					<?php
					$i=0;
					foreach ($active_subscribers as $row) {
						$i++;
						?>
						<tr>
					        <td><?php echo $i; ?></td>
					        <td><?php echo $row['company']; ?></td>
					        <td><?php echo $row['phone']; ?></td>
					        <td><?php echo $row['email']; ?></td>
					        <td><?php echo $row['package_name']; ?></td>
					        <td><?php echo $row['created_at']; ?></td>
					        <td>
					        	<a href="#Edit<?php echo $row['subs_id']; ?>" data-toggle="modal"  class="btn btn-info btn-xs">Details</a> 

					          <?php /*  <a href="<?php echo base_url(); ?>admin/subscriber/delete/<?php echo $row['subs_id']; ?>" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure?');">Delete</a> */ ?>
					        </td>
					    </tr>

					    <div class="modal fade" id="Edit<?php echo $row['subs_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Company:  <?php echo $row['company']; ?>  :: Package: <?php echo $row['package_name']; ?></h4>
                                </div>
                                <div class="modal-body">
                                    <div class="rTable">
                                        <div class="rTableRow">
                                            <div class="rTableHead"><strong>Company Details</strong></div>
                                            <div class="rTableCell">
                                                <b>Company:</b> <?php echo $row['company'];?> <br>
                                                <b>Business Type:</b> <?php echo $row['busines_type']; ?><br>
                                                <b>Monthly Turnover:</b> <?php echo $row['monthly_turn_over']; ?><br>
                                                <b>No. of Female Employees:</b> <?php echo $row['female_employee_no']; ?><br>

                                                <b>Representative:</b> <?php echo $row['fist_name']. " ".$row['last_name']; ?><br>
                                                <b>Designation:</b> <?php echo $row['designation']; ?> <br>
                                                <b>Email:</b> <?php echo $row['email']; ?><br>
                                                <b>Phone:</b> <?php echo $row['phone']; ?>
                                            </div>
                                        </div>
                                        <div class="rTableRow">
                                            <div class="rTableHead"><strong>Application Date</strong></div>
                                            <div class="rTableCell">
                                                <?php echo $row['subs_date']; ?>
                                            </div>
                                        </div>
                                        <div class="rTableRow">
                                            <div class="rTableHead"><strong>Category</strong></div>
                                            <div class="rTableCell">
                                            	<ul>
                                            		<?php if($row['blockchain'] ==1){ ?>
                                            		<li><?php echo "Blockchain"; ?></li>
                                            		<?php } ?>
                                            		<?php if($row['cybersec'] ==1){ ?>
                                            		<li><?php echo "Cybersecurity"; ?></li>
                                            		<?php } ?>
                                            		<?php if($row['digital_pymt_sln'] ==1){ ?>
                                            		<li><?php echo "Digital Payment Solutions"; ?></li>
                                            		<?php } ?>
                                            		<?php if($row['cross_bdr_mymts'] ==1){ ?>
                                            		<li><?php echo "Cross Border Payments"; ?></li>
                                            		<?php } ?>
                                            		<?php if($row['big_data_analytics'] ==1){ ?>
                                            		<li><?php echo "Big Data Analytics"; ?></li>
                                            		<?php } ?>
                                            		<?php if($row['insur_tech'] ==1){ ?>
                                            		<li><?php echo "InsurTech"; ?></li>
                                            		<?php } ?>
                                            		<?php if($row['e_commerce'] ==1){ ?>
                                            		<li><?php echo "E-commerce"; ?></li>
                                            		<?php } ?>
                                            		<?php if($row['artifical_int'] ==1){ ?>
                                            		<li><?php echo "Artificial Intelligence"; ?></li>
                                            		<?php } ?>
                                            		<?php if($row['mobile_banking'] ==1){ ?>
                                            		<li><?php echo "Mobile Banking"; ?></li>
                                            		<?php } ?>
                                            		<?php if($row['micro_credit'] ==1){ ?>
                                            		<li><?php echo "Microcredit"; ?></li>
                                            		<?php } ?>
                                            		<?php if($row['regulation'] ==1){ ?>
                                            		<li><?php echo "Regulation"; ?></li>
                                            		<?php } ?>
                                            		<?php if($row['digital_economy'] ==1){ ?>
                                            		<li><?php echo "Digital Economy"; ?></li>
                                            		<?php } ?>
                                            		<?php if($row['financial_literacy'] ==1){ ?>
                                            		<li><?php echo "Financial Literacy"; ?></li>
                                            		<?php } ?>
                                            		<?php if($row['digital_identification'] ==1){ ?>
                                            		<li><?php echo "Digital Identification"; ?></li>
                                            		<?php } ?>
                                            		<?php if($row['wealth_management'] ==1){ ?>
                                            		<li><?php echo "Wealth Management"; ?></li>
                                            		<?php } ?>
                                            		<?php if($row['digital_savings'] ==1){ ?>
                                            		<li><?php echo "Digital Savings"; ?></li>
                                            		<?php } ?>
                                            		<?php if($row['women_in_fintech'] ==1){ ?>
                                            		<li><?php echo "Women in FinTech"; ?></li>
                                            		<?php } ?>
                                            		<?php if($row['banking'] ==1){ ?>
                                            		<li><?php echo "Banking"; ?></li>
                                            		<?php } ?>
                                            		<?php if($row['fintech_enthusiast'] ==1){ ?>
                                            		<li><?php echo "Fintech enthusiast"; ?></li>
                                            		<?php } ?>

                                            	</ul>
                                            </div>
                                        </div>
                                        <div class="rTableRow">
                                            <div class="rTableHead"><strong>What are you interested in?</strong></div>
                                            <div class="rTableCell">
                                                <ul>
                                            		<?php if($row['programmes_and_vents'] ==1){ ?>
                                            		<li><?php echo "Programmes and Events"; ?></li>
                                            		<?php } ?>
                                            		<?php if($row['promotion_and_advocacy'] ==1){ ?>
                                            		<li><?php echo "Promotion and Advocacy"; ?></li>
                                            		<?php } ?>
                                            		<?php if($row['policy_and_regulation'] ==1){ ?>
                                            		<li><?php echo "Policy and Regulation"; ?></li>
                                            		<?php } ?>
                                            		<?php if($row['capital_and_funding'] ==1){ ?>
                                            		<li><?php echo "Capital and Funding"; ?></li>
                                            		<?php } ?>
                                            		<?php if($row['scaling_and_international'] ==1){ ?>
                                            		<li><?php echo "Scaling and International"; ?></li>
                                            		<?php } ?>

                                            	</ul>
                                            </div>
                                        </div>

                                        <div class="rTableRow">
                                            <div class="rTableHead"><strong>Message</strong></div>
                                            <div class="rTableCell">
                                                <?php echo $row['message']; ?>
                                            </div>
                                        </div>
                                        <div class="rTableRow">
                                            <div class="rTableHead"><strong>File/Attachment</strong></div>
                                            <div class="rTableCell">
                                            <?php if (!empty($row['attachment'])) { ?>
                                                <a href="<?php echo base_url(); ?>public/uploads/registration/<?php echo $row['attachment']; ?>" target="_blank"><?php echo $row['attachment']; ?></a>
                                            <?php }else{ ?>
                                            	<span>No file was attached </span>
                                            <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
					<?php } ?>
					</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>





