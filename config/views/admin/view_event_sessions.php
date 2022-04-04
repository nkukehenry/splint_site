<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin');
}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>View Event Sessions</h1>
	</div>
	<div class="content-header-right">
		<a href="#AddSession" data-toggle="modal" class="btn btn-primary btn-sm">Add Session</a>
	
		<?php if (!empty($sessions)) { ?>
		
			<a href="#AddSpeakers" data-toggle="modal" class="btn btn-primary btn-sm">Add a  Speaker</a>
			
	   <?php } ?>

	   <a href="<?php echo base_url(); ?>admin/event" class="btn btn-primary btn-sm">View Events List</a>
	   
   </div>
</section>


<section class="content">

<?php if($this->session->flashdata('error') || $this->session->flashdata('success')) { ?>
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
		</div>
	</div>

<?php } ?>


<?php if (!empty($sessions)) {  foreach ($sessions as $row) { ?>
	<div class="row">
		<div class="col-md-12">
			

			<div class="box box-info">
				<div class="box">
					<div class="rTable">
	                    <div class="rTableRow">
	                        <div class="rTableHead">
	                        	<strong>Modorator</strong>
	                        </div>
	                        <div class="rTableCell">
	                        	<strong>Title: </strong> <?php echo $row['session_title']; ?><br>
	                        	<strong>Start - End:</strong> <?php echo $row['start_at']. " ".$row['end_at']; ?><br>
	                        	<strong>Speaker's Name:</strong> <?php echo $row['modorator_name']; ?><br>
	                        	<?php if (!empty($row['photo'])) { ?>
										
								<strong>Speaker's Photo:</strong> <img src="<?php echo base_url(); ?>public/uploads/event_session/<?php echo $row['photo']; ?>" alt="<?php echo $row['session_title']; ?>" style="width:60px;">
								<?php } ?>

	                        </div>
	                        <div class="rTableCell">
	                        	<small>Action on Session </small><br>
	                        	<a href="#EditSession<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
								<a href="<?php echo base_url(); ?>admin/event/delete_event_session/<?php echo $row['id']; ?>" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure?');"><i class="fa fa-trash"></i></a>
	                        </div>
	                    </div>

	                    <?php
							$id = $row['id'];

							$sql = "SELECT * FROM event_session_speakers 
										WHERE session_id='$id' 
										ORDER BY created_at DESC";
        					$query = $this->db->query($sql)->result_array();

        				if (!empty($query)) {   ?>
	                    
	                	<div class="rTableRow">
		                    <div class="rTableHead"><strong>Speakers</strong></div>
		                    <div class="rTableCell">

		                <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Name</th>
								<th>Title</th>
								<th>Photo</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>

							<?php foreach ($query as $rw) {
								 
								?>
								<tr>
									<td><?php echo $rw['part_name']; ?></td>
									<td><?php echo $rw['title']; ?></td>
									
									<td>
										<?php if (!empty($rw['photo'])) { ?>
										
										<img src="<?php echo base_url(); ?>public/uploads/event_session/<?php echo $rw['photo']; ?>" alt="<?php echo $rw['title']; ?>" style="width:60px;">
										<?php } ?>
									</td>
									<td>										
										<a href="#EditSp<?php echo $rw['part_id']; ?>" data-toggle="modal" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
										<a href="<?php echo base_url(); ?>admin/event/delete_session_speaker/<?php echo $rw['part_id']; ?>" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure?');"><i class="fa fa-trash"></i></a>  
									</td>
								</tr>

								<div class="modal fade" id="EditSp<?php echo $rw['part_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							    <div class="modal-dialog" role="document">
							        <div class="modal-content">
							            <div class="modal-header">
							                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							                <h4 class="modal-title" id="myModalLabel">Edit Speaker: <?php echo $rw['part_name']; ?> </h4>
							            </div>

							            <?php echo form_open_multipart(base_url().'admin/event/edit_sessions_speaker',array('class' => 'form-horizontal')); ?>
							            <div class="modal-body">
							                <div class="rTable">

							                <div class="rTableRow">
							                    <div class="rTableHead"><strong>Panel Session</strong></div>
							                    <div class="rTableCell">
							                    	<select type="text" class="form-control" name="session_id">
							                    		<?php
															if (!empty($sessions)) { foreach ($sessions as $row) { 
														?>
															<option 
															<?php if($row['id']==$rw['session_id']){ echo "selected"; }  ?> 
															 value="<?php echo $row['id']; ?>">
																<?php echo $row['session_title']; ?>
															<option>

														<?php } } ?>
							                    	</select>
							                    	
							                    </div>
							                    
							                </div>
							                   
							                <div class="rTableRow">
							                    <div class="rTableHead"><strong>Name</strong></div>
							                    <div class="rTableCell">
							                        <input type="text" class="form-control" name="part_name" value="<?php echo $rw['part_name']; ?>">

							                        <input type="hidden" name="event_id" value="<?php echo $event_id; ?>">

							                        <input type="hidden" name="part_id" value="<?php echo $rw['part_id']; ?>">
							                    </div>
							                </div>
							                <div class="rTableRow">
							                    <div class="rTableHead"><strong>Title</strong></div>
							                    <div class="rTableCell">
							                        <input type="text" class="form-control" name="title" value="<?php echo $rw['title']; ?>">
							                    </div>
							                </div>
							                <div class="rTableRow">
							                    <div class="rTableHead"><strong>Photo</strong></div>
							                    <div class="rTableCell">
							                    	<?php if (!empty($rw['photo'])) { ?>
																	
													<img src="<?php echo base_url(); ?>public/uploads/event_session/<?php echo $rw['photo']; ?>" style="width:60px;">
													<?php } ?>

							                        <input type="file" class="form-control" name="photo" value="<?php echo $rw['photo']; ?>">
							                    </div>
							                </div>
							                <div class="rTableRow">
							                    <div class="rTableHead"><strong>Profile/Details</strong></div>
							                    <div class="rTableCell">
							                        <textarea type="text" rows="4" class="form-control" name="description">
							                        	<?php echo $rw['description']; ?>
							                        </textarea> 
							                    </div>
							                </div>
							                </div>
							            </div>
							            <div class="modal-footer">
							                <button type="submit" class="btn btn-primary" name="form1_q">Save</button>
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
	                <?php } ?>
	                </div>
            	</div>
		</div>
	</div>
</div>

<div class="modal fade" id="EditSession<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Edit Session: <?php echo $row['session_title']; ?></h4>
            </div>

            <?php echo form_open_multipart(base_url().'admin/event/edit_event_sessions',array('class' => 'form-horizontal')); ?>
            <div class="modal-body">
                <div class="rTable">
                    <div class="rTableRow">
                        <div class="rTableHead"><strong>Session title</strong></div>
                        <div class="rTableCell">
                        	<input type="text" class="form-control" name="session_title" value="<?php echo $row['session_title']; ?>">
                        </div>
                    </div>
                    <input type="text" name="event_id" value="<?php echo $event_id; ?>">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                    <div class="rTableRow">
                    <div class="rTableHead"><strong>Start At</strong></div>
                    <div class="rTableCell">
                    	<input type="time" class="form-control" name="start_at" value="<?php echo $row['start_at']; ?>">
                    </div>
                </div>
                <div class="rTableRow">
                    <div class="rTableHead"><strong>End At</strong></div>
                    <div class="rTableCell">
                    	<input type="time" class="form-control" name="end_at" value="<?php echo $row['end_at']; ?>">
                        
                    </div>
                </div>
                <div class="rTableRow">
                    <div class="rTableHead"><strong>Modorator</strong></div>
                    <div class="rTableCell">
                        <input type="text" class="form-control" name="modorator_name" value="<?php echo $row['modorator_name']; ?>">
                    </div>
                </div>
                <div class="rTableRow">
                    <div class="rTableHead"><strong>Modorator Photo</strong></div>
                    <div class="rTableCell">
                    	<?php if (!empty($row['photo'])) { ?>
																	
						<img src="<?php echo base_url(); ?>public/uploads/event_session/<?php echo $row['photo']; ?>" style="width:60px;"><br>
						<?php } ?>
                        <input type="file" class="form-control" name="photo" value="<?php echo $row['photo']; ?>">
                    </div>
                </div>
                <div class="rTableRow">
                    <div class="rTableHead"><strong>Modorator Profile/Details</strong></div>
                    <div class="rTableCell">
                        <textarea type="text" rows="4" class="form-control" name="modorator_details"><?php echo $row['modorator_details']; ?></textarea> 
                    </div>
                </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" name="form1_q">Save</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>


<?php } } else{ ?>
	<div>
		<center>
		<span>No sessions created for this event!</span>
	    </center>
	</div>
<?php } ?>

</section>



<div class="modal fade" id="AddSession" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add Session</h4>
            </div>

            <?php echo form_open_multipart(base_url().'admin/event/save_event_sessions',array('class' => 'form-horizontal')); ?>
            <div class="modal-body">
                <div class="rTable">
                    <div class="rTableRow">
                        <div class="rTableHead"><strong>Session title</strong></div>
                        <div class="rTableCell">
                        	<input type="text" class="form-control" name="session_title">
                        </div>
                    </div>
                    
                    <input type="hidden" name="event_id" value="<?php echo $event_id; ?>">

                    <div class="rTableRow">
                    <div class="rTableHead"><strong>Start At</strong></div>
                    <div class="rTableCell">
                    	<input type="time" class="form-control" name="start_at">
                    </div>
                </div>
                <div class="rTableRow">
                    <div class="rTableHead"><strong>End At</strong></div>
                    <div class="rTableCell">
                    	<input type="time" class="form-control" name="end_at">
                        
                    </div>
                </div>
                <div class="rTableRow">
                    <div class="rTableHead"><strong>Modorator</strong></div>
                    <div class="rTableCell">
                        <input type="text" class="form-control" name="modorator_name">
                    </div>
                </div>
                <div class="rTableRow">
                    <div class="rTableHead"><strong>Modorator Photo</strong></div>
                    <div class="rTableCell">
                        <input type="file" class="form-control" name="photo">
                    </div>
                </div>
                <div class="rTableRow">
                    <div class="rTableHead"><strong>Modorator Profile/Details</strong></div>
                    <div class="rTableCell">
                        <textarea type="text" rows="4" class="form-control" name="modorator_details"></textarea> 
                    </div>
                </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" name="form1_q">Save</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>


<div class="modal fade" id="AddSpeakers" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add Session Speakers</h4>
            </div>

            <?php echo form_open_multipart(base_url().'admin/event/save_sessions_speaker',array('class' => 'form-horizontal')); ?>
            <div class="modal-body">
                <div class="rTable">

                <div class="rTableRow">
                    <div class="rTableHead"><strong>Panel Session</strong></div>
                    <div class="rTableCell">
                    	<select type="text" class="form-control" name="session_id">
                    		<option>Select Section</option>
                    		<?php
								if (!empty($sessions)) { foreach ($sessions as $row) { 
							?>
								<option value="<?php echo $row['id']; ?>">
									<?php echo $row['session_title']; ?>
								<option>

							<?php } } ?>
                    	</select>
                    	
                    </div>
                    
                </div>
                   
                <div class="rTableRow">
                    <div class="rTableHead"><strong>Name</strong></div>
                    <div class="rTableCell">
                        <input type="text" class="form-control" name="part_name">
                        <input type="hidden" name="event_id" value="<?php echo $event_id; ?>">
                    </div>
                </div>
                <div class="rTableRow">
                    <div class="rTableHead"><strong>Title</strong></div>
                    <div class="rTableCell">
                        <input type="text" class="form-control" name="title">
                    </div>
                </div>
                <div class="rTableRow">
                    <div class="rTableHead"><strong>Photo</strong></div>
                    <div class="rTableCell">
                        <input type="file" class="form-control" name="photo">
                    </div>
                </div>
                <div class="rTableRow">
                    <div class="rTableHead"><strong>Profile/Details</strong></div>
                    <div class="rTableCell">
                        <textarea type="text" rows="4" class="form-control" name="description"></textarea> 
                    </div>
                </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" name="form1_q">Save</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>