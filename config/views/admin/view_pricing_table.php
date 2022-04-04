<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin');
}
?>
<section class="content-header">
	<div class="content-header-left">
		<h1>View Packages Table</h1>
	</div>
	<div class="content-header-right">
		<?php /*<a href="#EditSp" data-toggle="modal" class="btn btn-primary btn-sm">Add Item</a>
		<a href="<?php echo base_url(); ?>admin/pricing_table/add" class="btn btn-primary btn-sm">Add New</a> */ ?>
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
								<th>Title</th>
								<th>Price</th>
								<th>Period</th>
								<th width="140">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$i=0;							
							foreach ($pricing_table as $row) {
								$i++;
								?>
								<tr>
									<!-- <td><i class="<?php //echo $row['icon']; ?>" style="color:#333;font-size:40px;"></i></td> -->
									<td><?php echo $row['title']; ?></td>
									<td><?php echo $row['price']; ?></td>
									<td><?php echo $row['subtitle']; ?></td>
									<td>
										<a href="<?php echo base_url(); ?>admin/pricing_table/edit/<?php echo $row['id']; ?>" class="btn btn-primary btn-xs">Edit</a>
										<a href="#Edit<?php echo $row['id']; ?>" class="btn btn-danger btn-xs" data-toggle="modal">Items</a>
									</td>
								</tr>

								<div class="modal fade" id="Edit<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									<div class="modal-dialog modal-md" role="document">
									    <div class="modal-content">
									        <div class="modal-header">
									            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									            <h4 class="modal-title" id="myModalLabel">Add Item</h4>
									        </div>

									        <?php echo form_open_multipart(base_url().'admin/pricing_table/add_pricing_category_item',array('class' => 'form-horizontal')); ?>
									        	
									        	 <input type="hidden" name="pc_id" value="<?php echo $row['id']; ?>">
									        <?php
												$i=0;							
												foreach ($pricing_items as $row) {
												$i++;
											?>
										        <div class="modal-body">
										            <div class="rTable">
										  
										            <div class="rTableRow">
										                <div class="rTableCell">
										                	<?php echo $row['item_name']; ?>
										                </div>
										                <div class="rTableHead">
										                	Is Available<br>

										                	<input type="hidden" value="<?php echo $row['item_id']; ?>"  name="pi_id[]">

										                	<select type="text" class="form-control" name="status[]">
										                		<option value="0">NO<option>
								                				<option value="1">YES<option>
								                			</select>
										                </div>
										            </div>
										            
										            </div>
										        </div>
									        <?php } ?>	
									        <div class="modal-footer">
									            <button type="submit" class="btn btn-primary" name="form_form24">Save</button>
									            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									        </div>
									        <?php echo form_close(); ?>
									    </div>
									</div>
									</div>

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

<section class="content-header">
	<div class="content-header-left">
		<h1>Member Benefit Items</h1>
	</div>
	<div class="content-header-right">
		<a href="#EditSp" data-toggle="modal" class="btn btn-primary btn-sm">Add Item</a>
		<?php /*<a href="<?php echo base_url(); ?>admin/pricing_table/add" class="btn btn-primary btn-sm">Add New</a> */ ?>
	</div>
</section>


<?php if(!empty($pricing_items)) { ?>
<section class="content">
	<div class="row">
		<div class="col-md-12">

			<div class="box box-info">
				<div class="box-body table-responsive">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>#</th>
								<th>Item Name</th>
								<!-- <th>Details</th> -->
								<th>Is Active</th>
								<th width="140">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$i=0;							
							foreach ($pricing_items as $row) {
								$i++;
								?>
								<tr>
									<td><?php echo $i; ?></td>
									<td><?php echo $row['item_name']; ?></td>
									<!-- <td><?php echo $row['discription']; ?></td> -->
									<td><?php if($row['is_active'] ==1){ echo "YES";}else{echo "NO"; } ?></td>
									<td>
									
										<a href="#dset<?php echo $row['item_id']; ?>" data-toggle="modal" class="btn btn-primary btn-xs">Edit</a>
										<a href="<?php echo base_url(); ?>admin/pricing_table/delete_pricing_item/<?php echo $row['item_id']; ?>" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure?');">Delete</a>
									</td>
								</tr>

								<div class="modal fade" id="dset<?php echo $row['item_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
								<div class="modal-dialog modal-md" role="document">
								    <div class="modal-content">
								        <div class="modal-header">
								            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								            <h4 class="modal-title" id="myModalLabel">Add Item</h4>
								        </div>

								        <?php echo form_open_multipart(base_url().'admin/pricing_table/update_pricing_item',array('class' => 'form-horizontal')); ?>
								        <div class="modal-body">
								            <div class="rTable">
								  
								            <div class="rTableRow">
								                <div class="rTableHead"><strong>Item Name</strong></div>
								                <div class="rTableCell">
								                    <input type="text" class="form-control" name="item_name" value="<?php echo $row['item_name']; ?>">
								                </div>
								            </div>
								            <div class="rTableRow">
								                <div class="rTableHead"><strong>Details</strong></div>
								                <div class="rTableCell">
								                    <input type="text" class="form-control" name="discription" value="<?php echo $row['discription']; ?>" readonly>
								                </div>
								            </div>
								            <div class="rTableRow">
								                <div class="rTableHead"><strong>Status</strong></div>
								                <div class="rTableCell">
								                	<select type="text" class="form-control" name="is_active">
								                		<option 
															<?php echo ($row['is_active']=="1")?"selected":"";  ?>
															value="1">ON<option>
															<option 
															<?php echo ($row['is_active']=="0")?"selected":"";  ?>
															value="0">OFF<option>

								                	</select>
								                	
								                </div>
								                
								            </div>
								            </div>
								        </div>
								        <div class="modal-footer">
								            <button type="submit" class="btn btn-primary" name="form_price">Save</button>
								            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
		</div>
	</div>
</section>
<?php } ?>


<section class="content-header">
	<div class="content-header-left">
		<h1>Parnter's Benefit Items</h1>
	</div>
	<div class="content-header-right">
		<a href="#ParnerItem" data-toggle="modal" class="btn btn-primary btn-sm">Add Item</a>
	</div>
</section>

<?php if(!empty($partner_items)) { ?>
<section class="content">
	<div class="row">
		<div class="col-md-12">

			<div class="box box-info">
				<div class="box-body table-responsive">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>#</th>
								<th>Item Name</th>
								<th>Is Active</th>
								<th width="140">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$i=0;							
							foreach ($partner_items as $row) {
								$i++;
								?>
								<tr>
									<td><?php echo $i; ?></td>
									<td><?php echo $row['item_name']; ?></td>
									<td><?php if($row['is_active'] ==1){ echo "YES";}else{echo "NO"; } ?></td>
									<td>
									
										<a href="#Parner<?php echo $row['item_id']; ?>" data-toggle="modal" class="btn btn-primary btn-xs">Edit</a>
										<a href="<?php echo base_url(); ?>admin/pricing_table/delete_pricing_item/<?php echo $row['item_id']; ?>" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure?');">Delete</a>
									</td>
								</tr>

								<div class="modal fade" id="Parner<?php echo $row['item_id']; ?>" tabindex="-1" role="dialog" >
									<div class="modal-dialog modal-sm">
									    <div class="modal-content">
									        <div class="modal-header">
									            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									            <h4 class="modal-title">Edit Partner Benefit Item</h4>
									        </div>

									        <?php echo form_open_multipart(base_url().'admin/pricing_table/update_pricing_item',array('class' => 'form-horizontal')); ?>
									        <div class="modal-body">
									        	<div class="row">
									        		<div class="col-md-12">
											        	<div class="form-group">
											                <strong>Item Name</strong>
											                <input type="text" class="form-control" name="item_name" value="<?php echo $row['item_name']; ?>">
											            </div>
											            <div class="form-group">
											                <strong>Status</strong>
										                	<select type="text" class="form-control" name="is_active">
									                		<option 
																<?php echo ($row['is_active']=="1")?"selected":"";  ?>
																value="1">ON</option>
																<option 
																<?php echo ($row['is_active']=="0")?"selected":"";  ?>
																value="0">OFF</option>

								                	</select>
											            </div>
											            <div class="form-group">
											                <strong>Discription</strong>
											                <input type="text" class="form-control" name="discription" value="Partner Benefit Item" readonly>
											            </div>
									        		</div>
									        	</div>
									        </div>
									        <div class="modal-footer">
									            <button type="submit" class="btn btn-primary" name="form_price">Save</button>
									            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
		</div>
	</div>
</section>
<?php } ?>



<div class="modal fade" id="EditSp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Add Item</h4>
        </div>

        <?php echo form_open_multipart(base_url().'admin/pricing_table/pricing_item',array('class' => 'form-horizontal')); ?>
        <div class="modal-body">
            <div class="rTable">
  
            <div class="rTableRow">
                <div class="rTableHead"><strong>Item Name</strong></div>
                <div class="rTableCell">
                    <input type="text" class="form-control" name="item_name">
                </div>
            </div>
            <div class="rTableRow">
                <div class="rTableHead"><strong>Details</strong></div>
                <div class="rTableCell">
                    <input type="text" class="form-control" name="discription" value="Member Benefit Item" readonly>
                </div>
            </div>
            <div class="rTableRow">
                <div class="rTableHead"><strong>Status</strong></div>
                <div class="rTableCell">
                	<select type="text" class="form-control" name="is_active">
							<option value="1">ON<option>
							<option value="0">OFF<option>
                	</select>
                	
                </div>
                
            </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary" name="form_price">Save</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        <?php echo form_close(); ?>
    </div>
</div>
</div>



<div class="modal fade" id="ParnerItem" tabindex="-1" role="dialog" >
	<div class="modal-dialog modal-sm">
	    <div class="modal-content">
	        <div class="modal-header">
	            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	            <h4 class="modal-title">Add Partner Benefit Item</h4>
	        </div>

	        <?php echo form_open_multipart(base_url().'admin/pricing_table/pricing_item',array('class' => 'form-horizontal')); ?>
	        <div class="modal-body">
	        	<div class="row">
	        		<div class="col-md-12">
			        	<div class="form-group">
			                <strong>Item Name</strong>
			                <input type="text" class="form-control" name="item_name">
			            </div>
			            <div class="form-group">
			                <strong>Status</strong>
		                	<select type="text" class="form-control" name="is_active">
		                		<option value="1">ON</option>
								<option  value="0">OFF</option>
                			</select>
			            </div>
			            <div class="form-group">
			                <strong>Discription</strong>
			                <input type="text" class="form-control" name="discription" value="Partner Benefit Item" readonly>
			            </div>
	        		</div>
	        	</div>
	        </div>
	        <div class="modal-footer">
	            <button type="submit" class="btn btn-primary" name="form_price">Save</button>
	            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        </div>
	        <?php echo form_close(); ?>
	    </div>
	</div>
	</div>
