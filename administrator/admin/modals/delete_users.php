<div class="modal fade" id="delete_users<?php echo $id ;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"><center>Delete Teacher </center></h4>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger">Are you Sure you Want to <strong>Remove &nbsp;</strong> <?php echo $row['name']; ?> as <strong><?php echo $row['department']; ?></strong>?</div>
            </div>
            <div class="modal-footer">
                <a class="btn btn-danger" href="modals/delete/delete_users.php<?php echo '?id=' . $id; ?>" ><i class="icon-check"></i>&nbsp;Yes</a>
                <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i>&nbsp;No</button>
            </div>
        </div>
    </div>
</div>
                