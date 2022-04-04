<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin');
}
?>
<section class="content-header">
	<div class="content-header-left">
		<h1>Edit Publication/Directory</h1>
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

			<?php echo form_open_multipart(base_url().'admin/publications/edit/'.$publications['ids'],array('class' => 'form-horizontal'));?>
				<div class="box box-info">
					<div class="box-body">	

					   <div class="form-group">
							<label for="" class="col-sm-2 control-label">Publication Type</label>
							<div class="col-sm-8">
								
								<select name="type_id" class="form-control">
									
									<?php foreach($pub_types as $type): ?>
										 <option 
										 <?=($type->id==$publications['type_id'])?'selected':''?> 
										  value="<?=$type->id?>">
										  	<?=$type->type_name?>
										  </option>
									<?php endforeach; ?>
									
								</select>
							</div>
						</div>

					
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">File Name *</label>
							<div class="col-sm-8">
								<input type="text" autocomplete="off" class="form-control" name="name" value="<?php echo $publications['name']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Description *</label>
							<div class="col-sm-8">
								<textarea class="form-control" name="content" style="height:120px;"><?php echo $publications['content']; ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">File/Attachment *</label>
							<div class="col-sm-6">
								<input type="file" class="form-control" name="attachment" value="<?php echo $publications['attachment']; ?>">
							</div>

							<div class="col-sm-2">
								<?php if(($publications['attachment'])!==""){ ?>
									<a href="<?php echo base_url(); ?>public/uploads/directory/<?php echo $publications['attachment']; ?>" target="_blank" style="text-decoration: none;">
										Attachment
									</a>
								<?php } ?>
							</div>

						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label"></label>
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