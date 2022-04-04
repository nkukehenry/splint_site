<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin');
}
?>
<section class="content-header">
	<div class="content-header-left">
		<h1>View FITSPA Activities</h1>
	</div>
	<div class="content-header-right">
		<a href="<?php echo base_url(); ?>admin/activities/add" class="btn btn-primary btn-sm">Add New</a>
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
			        <th width="50">#</th>
			        <th>Title</th>
			        <th>Details</th>
			        <th width="80">Action</th>
			    </tr>
			</thead>
            <tbody>
	            <?php
	            	$i=0;
	            	foreach ($activity as $row) {
	            		$i++;
		            	?>
			            <tr>
			                <td><?php echo $i; ?></td>
			                <td><?php echo $row['title']; ?></td>
			                <td><?php echo $row['description']; ?></td>
			                <td>
			                    <a href="<?php echo base_url(); ?>admin/activities/edit/<?php echo $row['id']; ?>" class="btn btn-primary btn-xs">Edit</a>
			                    <a href="<?php echo base_url(); ?>admin/activities/delete/<?php echo $row['id']; ?>" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure?');">Delete</a> 
			                </td>
			            </tr>
			            <?php
	            	}
	            ?>
            </tbody>
          </table>
        </div>
      </div>
</section>