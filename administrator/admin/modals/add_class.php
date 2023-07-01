<div class="modal fade" id="classModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
     <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div>
                    <strong>
                            <h4>
                                <b><i class="bi bi-file-earmark-plus-fill"></i> Add Course</b>
                            </h4>
                    </strong>
                </div>
            </div>
            
            <div class="modal-body">
                <form  method="post" enctype="multipart/form-data">
                    <div class="control-group">
                        <!-- <label class="control-label" for="inputEmail">Course:</label>
                        <input type="text" name="course" class = "form-control" > -->
                        <div id="drop-down" name="drop-down">
                            <label for="course">Course</label>
                            <select name="course" id="course" onChange=showHide() class="form-control" required>
                                <option value="0" selected>Select Course</option>
                                <option value="BSIT">BSIT</option>
                                <option value="BSBA">BSBA</option>
                                <option value="BIT">BIT</option>
                                <option value="BSED">BSED</option>
                                <option value="BEED">BEED</option>
                                <option value="BTLED">BTLED</option>
                            </select>
                            <div name="hidden-panel" id="hidden-panel">
                                <label for="major">Major in</label>
                                <select name="major" id="major" onChange=showHide() class="form-control" required>
                                    <option value="This subject has no major class" selected>Select Course</option>
                                    <option value="Major in Web and Mobile Technologies" id="BSIT1">Major in Web and Mobile Technologies</option>
                                    <option value="Financial Management" id="BSBA1">Financial Management</option>
                                    <option value="Marketing Management" id="BSBA2">Marketing Management</option> 
                                    <option value="Automotive Technology" id="BIT1">Automotive Technology</option>
                                    <option value="Electrical Technology" id="BIT2">Electrical Technology</option>
                                    <option value="Electronics and Communication Technology" id="BIT3">Electronics and Communication Technology</option>
                                    <option value="Food Services Management" id="BIT4">Food Services Management</option>
                                    <option value="Mechanical Technology" id="BIT5">Mechanical Technology</option>
                                    <option value="English" id="BSED1">English</option>
                                    <option value="Mathematics" id="BSED2">Mathematics</option>
                                    <option value="Science" id="BSED3">Science</option>
                                    <option value="BEED" id="BEED">BEED</option>
                                    <option value="BTLED" id="BTLED">BTLED</option>
                                </select>
                            </div>
                        </div>        
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="inputPassword">Year/Section: (e.g 1a or 2b or 3c)</label>
                        <div class="controls">
                            <input type="text" class = "form-control"  name="year_section" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="inputPassword">
							Advicer
						</label>
						<div class="controls">
							<select type="text" name="fname" class = "form-control"  required>
								<option>Select</option>
									<?php 
										$teacher_query=mysqli_query($con,"select * from teachers ORDER BY fname ASC;")
										or die("Cannot Connect to Database".mysqli_connect_error());
										while($teacher_row=mysqli_fetch_array($teacher_query))
										{
									?>
										<option><?php echo $teacher_row['fname']; ?>&nbsp;<?php echo $teacher_row['lname']; ?></option>
									<?php } ?>
							</select>
						</div>
					</div>
                            
                    <div class="control-group">
                        <label class="control-label" for="inputPassword">Department:</label>
                        <div class="controls">
                            <input type="text" name="department" id="department" class = "form-control" required/>
                                        <!-- <select name="department" class="form-control">
                                            <option value="0" selected>Select Department</option>
                                            <option value="BSIT">BSIT</option>
                                            <option value="BSBA">BSBA</option>
                                            <option value="BIT">BIT</option>
                                            <option value="BSED">BSED</option>
                                            <option value="BEED">BEED</option>
                                            <option value="BTLED">BTLED</option>
                                        </select> -->
                        </div>
                    </div>

                            
                    <div class = "modal-footer">
                        <button name = "go" class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>           
            </div>
        </div>
									
        
									  
            <?php 
                    if (isset($_POST['go']))
                    {

                        $course = $_POST['course'];
                        $year_section = $_POST['year_section'];
                        $department = $_POST['department'];
                        $major = $_POST['major'];
                        $advicer = $_POST['fname'];

                        $result = mysqli_query($con,"SELECT * FROM course WHERE course = '$course' and year_section ='$year_section' and major ='$major'") or die("Cannot Connect to Database".mysqli_connect_error());
						$row = mysqli_fetch_array($result);
						$numberOfRows = mysqli_num_rows($result);


                        if ($numberOfRows == 0) 
                        {
                            mysqli_query($con,"insert into course (course,year_section,advicer,department,major)
                            values ('$course','$year_section','$advicer','$department','$major')
                            ") or die("Cannot Connect to Database".mysqli_connect_error());
                        }else{
                            echo '<script>alert("Opps! Course, Section, Major Already Added!")</script>';
                        }
        


                        // header('location:forCYS.php');
                    }
            ?>
									  
									  
									  
									  
    </div>
</div>
                            