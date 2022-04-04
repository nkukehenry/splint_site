<!-- Modal -->
<div class="modal fade" id="counter<?=(@$counter->id)?@$counter->id:''?>" tabindex="-1" role="dialog" aria-labelledby="counterTitle" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="counterTitle"><?=(@$counter->id)?'Update Stat':'Add Stat'?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?=base_url()?>counters/add" method="post">
      <div class="modal-body">

           <input type="hidden" name="id" value="<?=(@$counter->id)?@$counter->id:''?>" /> 

        <div class="form-group">
            <label>Stat Label</label>
            <input class="form-control" name="label" type="text" placeholder="Counter Label" value="<?=(@$counter->counter_label)?@$counter->counter_label:''?>" />
        </div>

        <div class="form-group">
             <label>Stat Value</label>
            <input class="form-control" name="value" type="number" placeholder="Counter Value" value="<?=(@$counter->counter_value)?@$counter->counter_value:''?>" />
        </div>

        <div class="form-group">
            <label>Icon</label>
            <input class="form-control" name="icon" type="text" placeholder="Counter Icon e.g icon-book" value="<?=(@$counter->icon)?@$counter->icon:''?>" />
             <small><a href="https://icomoon.io/preview-free.html" target="_blank" >Icons Reference</a></small>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">
           <?=(@$counter->id)?'Update Counter':'Save Counter'?>
        </button>
      </div>
      </form>
    </div>
  </div>
</div>
