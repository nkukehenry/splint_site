<?php
if(!$this->session->userdata('id')) {
    redirect(base_url().'admin');
}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>View Event Sponsors</h1>
	</div>
	<div class="content-header-right">
		<a href="<?php echo base_url(); ?>admin/event-sponsor/new/<?php echo $eventid; ?>" class="btn btn-primary btn-sm">Add Sponsors</a>

		<a href="<?php echo base_url(); ?>admin/event" class="btn btn-primary btn-sm">Go to Events List</a>
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
								<th width="6">#</th>
								<th>Photo</th>
								<th width="100">Name</th>
								<th width="100">URL</th>
								<th width="80">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$i=0;							
							foreach ($sponsors as $row) {
								$i++;
								?>
								<tr>
									<td><?php echo $i; ?></td>
									<td style="width:130px;"><img src="<?php echo base_url(); ?>public/uploads/event_sponsors/<?php echo $row['photo']; ?>" alt="<?php echo $row['name']; ?>" style="width:120px;"></td>
									<td><?php echo $row['name']; ?></td>
									<td><?php echo $row['url']; ?></td>
									<td>										
										<a href="<?php echo base_url(); ?>admin/event-sponsor/edit/<?php echo $eventid; ?>/<?php echo $row['id']; ?>" class="btn btn-primary btn-xs">Edit</a>
										<a href="<?php echo base_url(); ?>admin/event-sponsor/delete/<?php echo $eventid; ?>/<?php echo $row['id']; ?>" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure?');">Delete</a>
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