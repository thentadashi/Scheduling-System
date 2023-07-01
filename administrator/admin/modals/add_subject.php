<div class="modal fade" id="addSubject" tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><i class="fa fa-tasks"></i> Add Subject</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form  method="post" enctype="multipart/form-data">
                    <div class="control-group">
                        <label class="control-label" for="inputEmail">Subject</label>
                        <input type="text" name="subject_code" class = "form-control" >    
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="inputPassword">Subject Title</label>
                        <div class="controls">
                            <input type="text" class = "form-control"  name="subject_title">
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="inputPassword">Category</label>
                        <div class="controls">
                            <input type="text" name="subject_category" class = "form-control" >
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="inputPassword">Semester</label>
                        <div class="controls">
                            <input type="text" name="semester"  class = "form-control" >
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="inputPassword">Department:</label>
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
                                $subject = $_POST['subject_code'];
                                $subject_title = $_POST['subject_title'];
                                $subject_category = $_POST['subject_category'];
								$semester = $_POST['semester'];
								$department = $_POST['department'];
                                



                                mysqli_query($con,"insert into subject (subject_code,subject_title,subject_category,semester,department)
                            	values ('$subject','$subject_title','$subject_category','$semester','$department')
                                ") or die("Cannot Connect to Database".mysqli_connect_error());
                                echo "<script type='text/javascript'>".
                                "location.replace('subject.php?url=subject.php');".
                                "</script>";
                            }
                        ?>
        </div>
    </div>
</div>