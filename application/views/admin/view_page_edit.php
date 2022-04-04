<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin');
}
?>

<style type="text/css">
	label{
		padding: 10px;
		font-weight: bold;
	}
</style>

<section class="content-header">
	<div class="content-header-left">
		<h1>Edit Page</h1>
	</div>
	<div class="content-header-right">
		<a target="_blank" href="<?php echo base_url(); ?>pages/<?=$page['page_slag']?>" class="btn btn-primary btn-sm">Preview Page</a>
		<a href="<?php echo base_url(); ?>admin/pages" class="btn btn-primary btn-sm">View All</a>
	</div>
</section>

<section class="content">

	<div class="row" style="padding:20px; background-color: #ffffff;">
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

			<?php echo form_open_multipart(base_url().'admin/pages/edit/'.$page['page_id'],array('class' => 'form-horizontal')); ?>
				<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class=" control-label">Page Title <span>*</span></label>
								<input type="text" class="form-control" name="page_title" value="<?php echo $page['page_title']; ?>">
						</div>
						<div class="form-group">
							<label for="" class=" control-label">Page Content <span>*</span></label>
								<textarea rows="30" class="form-control editor-lg" name="page_content"><?php echo $page['page_content']; ?></textarea>
						</div>

						<div class="col-md-6 padded">

						<div class="form-group hidden" >
							<label for="" class=" control-label">Pages Publish Date <span>*</span></label>
								<input type="text" class="form-control" name="publication_date" id="datepicker" value="<?php echo $page['publication_date']; ?>">(Format: yy-mm-dd)
						</div>
						
						<div class="form-group">
				            <label for="" class=" control-label">
				            Parent Menu <span>*</span></label>
				            	<select class="form-control select2" name="category_id">
								<?php
				            	$i=0;
				            	foreach ($all_category as $row) {
									?>
									<option value="<?php echo $row['category_id']; ?>" <?php if($row['category_id']==$page['page_category_id']){echo 'selected';} ?>><?php echo $row['category_name']; ?></option>
	                                <?php
								}
								?>
								</select>
				        </div>

				        <div class="form-group col-md-6" >
				            <label for="" class=" control-label">Published <span>*</span></label>
				            	<select class="form-control select2" name="is_published">
									<option value="1" <?php if($page['is_published'] == 1) {echo 'selected';} ?>>Published</option>
									<option value="0" <?php if($page['is_published'] == 0) {echo 'selected';} ?>>Unpublished</option>
								</select>
				        </div>

				        <div class="form-group">
				            <label>Banner Image</label>
				            <div style="padding-top:6px;">
				            	<?php
				            	if($page['banner'] == '') {
				            		echo 'No photo found';
				            	} else {
				            		?><img src="<?php echo base_url(); ?>public/uploads/<?php echo $page['banner']; ?>" alt="<?php echo $page['page_title']; ?>" class="existing-photo" style="width:300px;"><?php
				            	}
				            	?>
				            </div>
				            <br>

				            <label for="" class=" control-label">Change Banner</label>
				             <input type="file" name="banner">
				        </div>

				        </div>
				        <div class="col-md-1"></div>

				        <div class="col-md-5 padded">

						<div class="form-group">
							<label for="" class=" control-label">Meta Title </label>
								<input type="text" class="form-control" name="meta_title" value="<?php echo $page['meta_title']; ?>">
						</div>

						<div class="form-group">
							<label for="" class=" control-label">Meta Description (SEO) <span>*</span></label>
								<textarea class="form-control" name="meta_description" style="height:80px;"><?php echo $page['meta_description']; ?></textarea>
						</div>

						<div class="form-group">
							<label for="" class=" control-label">Meta Keywords </label>
								<input type="text" class="form-control" name="meta_keyword" value="<?php echo $page['meta_keyword']; ?>">
						</div>

					</div>

						<!-- <div class="form-group">
							<label for="" class=" control-label">Meta Description </label>
								<textarea class="form-control" name="meta_description" style="height:200px;"><?php echo $page['meta_description']; ?></textarea>
						</div> -->
						<div class="form-group">
							<label for="col-sm-6" class=" control-label"></label>
							<div class="col-sm-6">
								<button type="submit" class="btn btn-success pull-left" name="form1">Update</button>
							</div>
						</div>
					</div>
				</div>
			<?php echo form_close(); ?>
		</div>
	</div>

</section>

<script type="text/javascript">
	
	var node = document.createElement('hr');

// @param {Node} node
 $('.editor-lg').summernote('insertNode', node);

</script>