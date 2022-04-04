<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin');
}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>View Event</h1>
	</div>
	<div class="content-header-right">
		<a href="<?php echo base_url(); ?>admin/event/add" class="btn btn-primary btn-sm">Add New</a>
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
								<th>Title</th>
								<th>Photo</th>
								<th style="width:60px;">Starts & Ends</th>
								<th>Status</th>
								<th style="width:50px;">Sessions</th>
								<th style="width:50px;">Sponsors</th>
								<th style="width:100px;">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$i=0;
							foreach ($event as $row) {
								$i++;
								?>
								<tr>
									<td><?php echo $i; ?></td>
									<td><?php echo $row['event_title']; ?></td>
									<td>
										<img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>" alt="<?php echo $row['event_title']; ?>" style="width:100px;">
									</td>
									<?php /*<td>
										<img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['banner']; ?>" alt="<?php echo $row['event_title']; ?>" style="width:180px;"> 
									</td>*/ ?>
									<td>
										<?php echo $row['event_start_date']; ?><br> -to- <br>
										<?php echo $row['event_end_date']; ?>
									</td>
									<td>
										<?php
										$today = date('Y-m-d');
										if($today>=$row['event_start_date'] && $today<=$row['event_end_date']) {
											echo 'Current Event';
										}
										if($today<$row['event_start_date']) {
											echo 'Upcoming Event';
										}
										if($today>$row['event_end_date']) {
											echo 'Past Event';
										}
										?>
									</td>
									<td>										
										<a href="<?php echo base_url(); ?>admin/event/index_event_sessions/<?php echo $row['event_id']; ?>" class="btn btn-info btn-xs">Sessions</a>  
									</td>
									<td>			
										<a href="<?php echo base_url(); ?>admin/event-sponsor/<?php echo $row['event_id']; ?>" class="btn btn-info btn-xs">Sponsors</a>
									</td>
									<td>										
										<a href="<?php echo base_url(); ?>admin/event/edit/<?php echo $row['event_id']; ?>" class="btn btn-primary btn-xs">Edit</a>
										<a href="<?php echo base_url(); ?>admin/event/delete/<?php echo $row['event_id']; ?>" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure?');">Delete</a>  
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