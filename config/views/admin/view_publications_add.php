<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin');
}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>Add Publication/Directory</h1>
	</div>
	<div class="content-header-right">
		<a href="<?php echo base_url(); ?>admin/publications" class="btn btn-primary btn-sm">View All</a>
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

			<?php echo form_open_multipart(base_url().'admin/publications/add',array('class' => 'form-horizontal')); ?>
				<div class="box box-info">
					<div class="box-body">						
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">File Name *</label>
							<div class="col-sm-8">
								<input type="text" autocomplete="off" class="form-control" name="name">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Description *</label>
							<div class="col-sm-8">
								<textarea class="form-control" name="content" style="height:120px;"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">File/Atachment*</label>
							<div class="col-sm-8">
								<input type="file" class="form-control" name="attachment">
							</div>
						</div>
						
						<div class="form-group">
							<label for="" class="col-sm-2 control-label"></label>
							<div class="col-sm-6">
								<button type="submit" class="btn btn-success pull-left" name="form12">Submit</button>
							</div>
						</div>

					</div>
				</div>
			<?php echo form_close(); ?>
		</div>
	</div>

</section>