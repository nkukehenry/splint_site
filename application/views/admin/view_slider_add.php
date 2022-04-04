<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin');
}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>Add Slider</h1>
	</div>
	<div class="content-header-right">
		<a href="<?php echo base_url(); ?>admin/slider" class="btn btn-primary btn-sm">View All</a>
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

			<?php echo form_open_multipart(base_url().'admin/slider/add',array('class' => 'form-horizontal'));?>
				<div class="box box-info">
					<div class="box-body">
						
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Image </label>
							<div class="col-sm-9" style="padding-top:5px">
								<input type="file" name="photo">(Only jpg, jpeg, gif, png and webp are allowed)
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Text 01 </label>
							<div class="col-sm-9">
								<input type="text" autocomplete="off" class="form-control" name="text_01">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Text 02 </label>
							<div class="col-sm-9">
								<textarea class="form-control" name="text_02" style="height:60px;"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Text 03 </label>
							<div class="col-sm-9">
								<textarea class="form-control" name="text_03" style="height:60px;"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Text 04 </label>
							<div class="col-sm-9">
								<textarea class="form-control" name="text_04" style="height:60px;"></textarea>
							</div>
						</div>
						
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Button Text </label>
							<div class="col-sm-9">
								<input type="text" autocomplete="off" class="form-control" name="btn_text">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Button URL </label>
							<div class="col-sm-9">
								<input type="text" autocomplete="off" class="form-control" name="btn_url">
							</div>
						</div>
						
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Text Position </label>
							<div class="col-sm-2">
								<select name="position" class="form-control select2">
									<option value="Left">Left</option>
									<option value="Center">Center</option>
									<option value="Right">Right</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label"></label>
							<div class="col-sm-9">
								<button type="submit" class="btn btn-success pull-left" name="form1">Submit</button>
							</div>
						</div>
					</div>
				</div>
			<?php echo form_close(); ?>
		</div>
	</div>

</section>