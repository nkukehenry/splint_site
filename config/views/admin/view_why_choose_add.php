<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin');
}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>Add Our Community Memember</h1>
	</div>
	<div class="content-header-right">
		<a href="<?php echo base_url(); ?>admin/our-community" class="btn btn-primary btn-sm">View All</a>
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

			<?php echo form_open_multipart(base_url().'admin/our-community/new',array('class' => 'form-horizontal')); ?>
				<div class="box box-info">
					<div class="box-body">

						<div class="form-group">
				            <label for="" class="col-sm-2 control-label">Member Category <span>*</span></label>
				            <div class="col-sm-6">
				            	<select class="form-control select2" name="category_id" required >
				            		<option>Select a category</option>

				            		<?php  foreach ($pricing_items as $row) {  ?>
										<option value="<?php echo $row['id']; ?>"><?php echo $row['title']; ?></option>
						            <?php  }  ?>
				            	</select>
				            </div>
				        </div>
						
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Name *</label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="name" value="">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Details</label>
							<div class="col-sm-6">
								<textarea class="form-control" name="content" style="height:120px;"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">URL</label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="icon">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Logo *</label>
							<div class="col-sm-9" style="padding-top:5px">
								<input type="file" name="photo">(Only jpg, jpeg, gif, png and webp are allowed)
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label"></label>
							<div class="col-sm-6">
								<button type="submit" class="btn btn-success pull-left" name="form1">Submit</button>
							</div>
						</div>

					</div>
				</div>
			<?php echo form_close(); ?>
		</div>
	</div>

</section>