<!-- Modal -->
<div class="modal fade" id="resource<?=$row['ids']+100?>" tabindex="-1" role="dialog" >
  <div class="modal-dialog modal-dialog-centered" style="margin-top:10%!important;" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Download Resource</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?=site_url('publications/download')?>" method='post'>
      <div class="modal-body">
          <div class="form-group">
            <label>Provide your email to download</label>
            <input class="form-control" type="email" name="email" placeholder="Email adress" required autocomplete="email">
          </div>

            <input type="hidden" name="resource" value="<?=$row['ids']?>">
            <input type="hidden" name="r" value="public/uploads/directory/<?php echo $row['attachment']; ?>">
      </div>
      <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         <button type="submit" class="btn btn-primary" onclick="$('#resource<?=$row['ids']+100?>').modal('hide');">Download</button>
      </div>
    </form>
    </div>
  </div>
</div>