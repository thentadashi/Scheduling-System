<div class="modal fade" id="delete_schedule<?php echo $id ;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"><center>Archive Schedule</center></h4>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger">Are you Sure you Want to <strong>Archive &nbsp;</strong> This Schedule?</div>
            </div>
            <div class="modal-footer">
                <a class="btn btn-danger" href="modals/delete/delete_schedule.php<?php echo '?id=' . $id; ?>" ><i class="icon-check"></i>&nbsp;Yes</a>
                <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i>&nbsp;No</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="archive_all" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"><center>Archive Schedule</center></h4>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger">Are you Sure you Want to <strong>Archive &nbsp;</strong>All This Schedule?</div>
            </div>
            <div class="modal-footer">
                <a class="btn btn-danger" href="modals/delete/archive_all.php<?php echo '?id=' . $id; ?>" ><i class="icon-check"></i>&nbsp;Yes</a>
                <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i>&nbsp;No</button>
            </div>
        </div>
    </div>
</div>
                