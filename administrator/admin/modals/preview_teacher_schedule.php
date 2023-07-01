<div class="modal fade" id="preview_teacher_schedule" tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><i class="fa fa-tasks"></i> Preview Schedule</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form  method="post" id="preview_class" action="modals/preview/preview_teacher.php">
                    <div class="control-group">
                        <label class="control-label" for="input01">Instructor Name</label>
                        <div class="controls">
                            <select name="teacher" class="form-control">
                                <option>--Select--</option>
                                    <?php $teachers_query=mysqli_query($con,"select * from teachers")or die("Cannot Connect to Database".mysqli_connect_error());
                                    while($teachers_row=mysqli_fetch_array($teachers_query)){
                                    ?>
                                        <option><?php echo $teachers_row['fname']; ?>&nbsp;<?php echo $teachers_row['lname']; ?></option>
                                    <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="input01">Semester</label>
                        <div class="controls">
                            <select name="semester" class="form-control">
                                <option>--Select--</option>
                                    <?php $room_query=mysqli_query($con,"select * from semester")or die("Cannot Connect to Database".mysqli_connect_error());
                                    while($room_row=mysqli_fetch_array($room_query)){
                                    ?>
                                        <option><?php echo $room_row['semester']; ?></option>
                                    <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="input01">School Year</label>
                        <div class="controls">
                            <select name="sy" class="form-control">
                                <option>--Select--</option>
                                    <?php $room_query=mysqli_query($con,"select * from sy")or die("Cannot Connect to Database".mysqli_connect_error());
                                    while($room_row=mysqli_fetch_array($room_query)){
                                    ?>
                                        <option><?php echo $room_row['sy']; ?></option>
                                    <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class = "modal-footer">
                        <button name = "preview" class="btn btn-primary">Preview</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
			    </form>  
            </div>
        </div>
    </div>
</div>