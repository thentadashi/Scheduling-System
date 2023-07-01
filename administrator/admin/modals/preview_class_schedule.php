<div class="modal fade" id="preview_class_schedule" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><i class="fa fa-tasks"></i> Preview Schedule</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form  method="post" id="preview_class" action="modals/preview/preview_class.php">
                    <div class="control-group">
                        <label class="control-label" for="input01">Course, Year and Section</label>
                        <div class="controls">
                            <select name="course_year_section" class="form-control">
                                <option>--Select--</option>
                                    <?php $room_query=mysqli_query($con,"select * from course")or die("Cannot Connect to Database".mysqli_connect_error());
                                    while($room_row=mysqli_fetch_array($room_query)){
                                    ?>
                                        <option><?php echo $room_row['course']; ?>-<?php echo $room_row['year_section']; ?></option>
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