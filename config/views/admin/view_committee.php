<?php
if(!$this->session->userdata('id')) {
    redirect(base_url().'admin');
}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>View Committees</h1>
	</div>
	<div class="content-header-right">
		<a href="#AddComm" data-toggle="modal" class="btn btn-primary btn-sm">Add New</a>
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
			        <th>Committe Name</th>
                    <th>Details</th>
			        <th width="100px">Action</th>
			    </tr>
			</thead>
            <tbody>
            	<?php
            	$i=0;
            	foreach ($committees as $row) {
            		$i++;
            		?>
					<tr>
	                    <td><?php echo $i; ?></td>
	                    <td><?php echo $row['category_name']; ?></td>
                        <td><?php echo $row['description']; ?></td>
	                    <td>
	                        <a href="#EditComm<?php echo $row['com_id']; ?>" class="btn btn-primary btn-xs" data-toggle="modal">Edit</a>
	                        <a href="<?php echo base_url(); ?>admin/team_member/delete_committee/<?php echo $row['com_id']; ?>" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure?');">Delete</a>
	                    </td>
	                </tr>

                    <div class="modal fade" id="EditComm<?php echo $row['com_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">Add Committee</h4>
                                </div>
                                <?php echo form_open_multipart(base_url().'admin/team_member/edit_committee',array('class' => 'form-horizontal')); ?>
                                    <div class="modal-body">
                                        <div class="row">
                                        <div class="form-group col-md-12">
                                            <label for="" class="col-sm-2 control-label">Title <span>*</span></label>
                                            <div class="col-sm-10">
                                                <input type="text" autocomplete="off" class="form-control" name="category_name" value="<?php echo $row['category_name']; ?>">

                                                <input type="hidden" autocomplete="off" class="form-control" name="com_id" value="<?php echo $row['com_id']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="" class="col-sm-2 control-label">Description </label>
                                            <div class="col-sm-10">
                                                <textarea type="text" rows="6"  class="form-control editor" name="description"><?php echo $row['description']; ?></textarea>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-success pull-right" name="form1">Save</button>
                                    </div>
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>

            		<?php } ?>
            </tbody>
          </table>
        </div>
      </div>
</section>


<div class="modal fade" id="AddComm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Add Committee</h4>
            </div>
            <?php echo form_open_multipart(base_url().'admin/team_member/add_committee',array('class' => 'form-horizontal')); ?>
                <div class="modal-body">
                    <div class="row">
                    <div class="form-group col-md-12">
                        <label for="" class="col-sm-2 control-label">Title <span>*</span></label>
                        <div class="col-sm-10">
                            <input type="text" autocomplete="off" class="form-control" name="category_name" value="">
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="" class="col-sm-2 control-label">Description </label>
                        <div class="col-sm-10">
                            <textarea type="text" class="form-control editor" name="description"></textarea>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success pull-right" name="form1">Save</button>
                </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>