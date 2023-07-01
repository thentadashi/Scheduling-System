<div class="modal fade" id="addRoom" tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><i class="fa fa-tasks"></i> Add Room</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form  method="post" enctype="multipart/form-data">
                    <div class="control-group">
                        <label class="control-label" for="room_code">Room</label>
                        <input type="text" name="room_name" class = "form-control" >    
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="description">Description</label>
                        <div class="controls">
                            <input type="text" name="description" class = "form-control"  >
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="location">Location</label>
                        <div class="controls">
                            <input type="text" name="location"  class = "form-control" >
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="department">Department:</label>
                        <div class="controls">
                            <input type="text" name="department" class = "form-control">
                        </div>
                    </div>
                    <div class = "modal-footer">
                        <button name = "go" class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
			    </form>  
            </div>
                        <?php 
                            if (isset($_POST['go'])) 
                            {
                                $room_name = $_POST['room_name'];
                                $description = $_POST['description'];
                                $location = $_POST['location'];
								$department = $_POST['department'];
                                


                                
                                mysqli_query($con,"insert into room (room_name,description,location,department)
                            	values ('$room_name','$description','$location','$department')
                                ") or die("Cannot Connect to Database".mysqli_connect_error());
                                echo "<script type='text/javascript'>".
                                "location.replace('room.php?url=room.php');".
                                "</script>";
                                
                            }
                        ?>
        </div>
    </div>
</div>