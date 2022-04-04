<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin');
}
?>
<section class="content-header">
	<div class="content-header-left">
		<h1>View Publications/Directory</h1>
	</div>
	<div class="content-header-right">
		<a href="<?php echo base_url(); ?>admin/publications/add" class="btn btn-primary btn-sm">Add New</a>
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
								<th>Published</th>
								<th>Type</th>
								<th>Attachment</th>
								<th>Description</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$i=0;							
							foreach ($publications as $row) {
								$i++;
								?>
								<tr>
									<td><?php echo $i; ?></td>
									<td>
										<?php echo date('d-m-Y',strtotime($row['publised_on'])); ?>
									</td>
									
									<td><?php echo $row['type_name']; ?></td>
									<td>
										<a href="<?php echo base_url(); ?>public/uploads/<?php echo $row['attachment']; ?>" target="_blank" style="text-decoration: none;">
											<?php echo $row['name']; ?>							
										</a>
									</td>

									<td><?php echo $row['content']; ?></td>										
									<td>
										<a href="<?php echo base_url(); ?>admin/publications/edit/<?php echo $row['ids']; ?>" class="btn-primary btn-xs"><i class="fa fa-edit"></i></a>
										<a href="<?php echo base_url(); ?>admin/publications/delete/<?php echo $row['ids']; ?>" class="btn-danger btn-xs" onClick="return confirm('Are you sure?');"><i class="fa fa-trash"></i></a> 
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