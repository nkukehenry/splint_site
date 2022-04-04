<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin');
}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>View Sliders</h1>
	</div>
	<div class="content-header-right">
	<a href="<?php echo base_url(); ?>admin/slider/add" class="btn btn-primary btn-sm">Add Slider</a> 
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
								<!-- <th>#</th> -->
								<th>Image</th>
								<th>Text 01</th>
								<th>Text 02</th>
								<th>Text 03</th>
								<th>Text 04</th>
								<th>Button Text</th>
								<th>Button URL</th>
								<th width="90">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$i=0;							
							foreach ($slider as $row) {
								$i++;
								?>

								<tr>
									<!-- <td><?php echo $i; ?></td> -->
									<td style="width:150px;"><img src="<?php echo base_url(); ?>public/uploads/slider/<?php echo $row['photo']; ?>" alt="Image" style="width:140px;"></td>
									<td><?php echo $row['text_01']; ?></td>
									<td><?php echo $row['text_02']; ?></td>
									<td><?php echo $row['text_03']; ?></td>
									<td><?php echo $row['text_04']; ?></td>
									<td><?php echo $row['btn_text']; ?></td>
									<td><?php echo $row['btn_url']; ?></td>
									<td>										
										<a href="<?php echo base_url(); ?>admin/slider/edit/<?php echo $row['id']; ?>" class="btn btn-primary btn-xs">Edit</a>
										<a href="<?php echo base_url(); ?>admin/slider/delete/<?php echo $row['id']; ?>" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure?');">Delete</a>
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