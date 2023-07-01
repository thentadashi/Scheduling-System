<div class="modal fade" id="delete_archive<?php echo $id ;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"><center>Delete Archive Schedule</center></h4>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger">Are you Sure you Want to <strong>Delete &nbsp;</strong> This Archives?</div>
            </div>
            <div class="modal-footer">
                <a class="btn btn-danger" href="modals/delete/delete_archive.php<?php echo '?id=' . $id; ?>" ><i class="icon-check"></i>&nbsp;Yes</a>
                <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i>&nbsp;No</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="archiveall" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"><center>Archive Schedule</center></h4>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger">Are you Sure you Want to <strong>Delete &nbsp;</strong>all This Archives?</div>
            </div>
            <div class="modal-footer">
                <a class="btn btn-danger" href="modals/delete/delete_all_archive.php<?php echo '?id=' . $id; ?>" ><i class="icon-check"></i>&nbsp;Yes</a>
                <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i>&nbsp;No</button>
            </div>
        </div>
    </div>
</div>