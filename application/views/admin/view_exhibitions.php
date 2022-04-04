<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin');
}
?>
<section class="content-header">
	<div class="content-header-left">
		<h1>View Member Exhibitions</h1>
	</div>
	<div class="content-header-right">
		<a href="<?php echo base_url(); ?>admin/exhibitions/new" class="btn btn-primary btn-sm">Add New</a>
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
								<th>#</th>
								<th>Member</th>
								<th>Title</th>
								<th>Overview</th>
								<th width="140">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$i=0;							
							foreach ($exhibitions as $row) {
								$i++;
								?>
								<tr>
									<td><?php echo $i; ?></td>
									<td>
									    <?php if(!empty($row['wc_id'])){ ?>
									    <img width="100px" src="<?php echo base_url(); ?>public/uploads/comnty-member/<?php echo $row['wc_photo']; ?>">
									    <?php //echo $row['wc_hame']; ?>
									    <?php } ?>
									</td>
									<td><?php echo $row['ex_hame']; ?></td>
									<td>
									    <?php echo $row['short_description']; ?>
									</td>
									<?php /*<td style="width:200px;"><img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>" alt="<?php echo $row['name']; ?>" style="width:200px;"></td> */ ?>									
									<td>
										<a href="<?php echo base_url(); ?>admin/exhibitions/edit/<?php echo $row['id']; ?>" class="btn btn-primary btn-xs">Edit</a>
										<a href="<?php echo base_url(); ?>admin/exhibitions/delete/<?php echo $row['id']; ?>" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure?');">Delete</a> 
									</td>
								</tr>
								<?php
							}
							?>							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>