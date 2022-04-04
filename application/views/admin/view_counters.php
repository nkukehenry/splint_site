<?php
if(!$this->session->userdata('id')) {
    redirect(base_url().'admin');
}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>Counter Stats</h1>
	</div>
	<div class="content-header-right">
		<a href="#counter" data-toggle="modal" class="btn btn-primary btn-sm">Add Counter</a>
	</div>
</section>

<?php require_once('view_add_counter.php'); ?>

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
								<th width="30">#</th>
								<th>Label</th>
								<th width="100">Value</th>
								<th width="100">Icon</th>
								<th width="80">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$i=0;							
							foreach (get_counters() as $counter) {
								$i++;
                                 require('view_add_counter.php');
								?>
								<tr>
									<td><?php echo $i; ?></td>
									<td style="width:130px;"><?=$counter->counter_label?></td>
									<td><?=$counter->counter_value?></td>
									<td><i class="<?=$counter->icon?>"></i> &nbsp; <?=$counter->icon?></td>
									<td>										
                                    <a href="#counter<?php echo $counter->id; ?>" data-toggle="modal" class="btn btn-primary btn-xs">Edit</a>
										<a href="<?php echo base_url(); ?>counters/delete/<?php echo $counter->id; ?>" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure?');">Delete</a>
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