<div class="modal fade" id="schedModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
                <h4 class="modal-title"><i class="fa fa-calendar"></i> Add Schedule</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        	<div class="modal-body">
            <form id="scheduleForm" method="POST" action="../process_schedule.php">
                <hr>
					<div class="control-group">
                        <label class="control-label" for="inputEmail">
							Select Day
						</label>
						<br/>
						<div id="day">
                            <div class="checkbox-group">
                                <label for="checkbox-1">Monday</label>
                                <input type="checkbox" name="Monday" value="Monday" id="checkbox-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                
                                <label for="checkbox-2">Tuesday</label>
                                <input type="checkbox" name="Tuesday" value="Tuesday" id="checkbox-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                
                                <label for="checkbox-3">Wednesday</label>
                                <input type="checkbox" name="Wednesday" value="Wednesday" id="checkbox-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                
                                <label for="checkbox-4">Thursday</label>
                                <input type="checkbox" name="Thursday" value="Thursday" id="checkbox-4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                
                                <label for="checkbox-5">Friday</label>
                                <input type="checkbox" name="Friday" value="Friday" id="checkbox-5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                
                            </div>
                        </div> 
                    <hr>
                    <div class="row col-12">
                        <div class="control-group col-4">
                            <label class="control-label" for="time1">
                                Time Start:
                            </label>
                            <div class="controls">

                                <input type="time" id="appt" name="time_start" class="form-control" value="08:00:00" min="08:00" max="16:00" required>
                            </div>
                        </div>
                                
                        <div class="control-group col-4">
                            <label class="control-label">
                                Time End:
                            </label>
                            <div class="controls">

                                <input type="time" id="time2"  name="time_end2" class="form-control" disabled>
                                <input type="time" id="time2"  name="time_end" class="form-control" hidden>
                            </div> 
                        </div>
                        <div class="control-group col-4">
                            <label class="control-label" for="inputPassword">School Year:</label>
                            <div class="controls">
								<select type="text" name="sy" class = "form-control" required>
                                    <option>Select</option>
                                            <?php $sy_query=mysqli_query($con,"select * from sy")or die("Cannot Connect to Database".mysqli_connect_error());
                                             while($sy_row=mysqli_fetch_array($sy_query)){
                                            ?>
                                                <option><?php echo $sy_row['sy']; ?></option>
                                             <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>
					<div class="control-group">
                        <label class="control-label" for="inputPassword">
							Teacher:
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
                        <label class="control-label" for="inputPassword">
							Subject:
						</label>
                        <div class="controls">
							<select type="text" name="subject_code" class = "form-control"  required>
                                <option>--Select--</option>
									<?php 
										$subject_query=mysqli_query($con,"select * from subject ORDER BY subject_title ASC;")
										or die("Cannot Connect to Database".mysqli_connect_error());
										while($subject_row=mysqli_fetch_array($subject_query))
										{
 										?>
 										<option>(<?php echo $subject_row['subject_code']; ?>)&nbsp;<?php echo $subject_row['subject_title']; ?></option>
 									<?php } ?>
							</select>
                        </div>
                    </div>	
                <div class="row col-12">    
					<div class="control-group col-4">
                        <label class="control-label" for="inputPassword">
							Room:
						</label>
                        <div class="controls">
							<select type="text" name="room_name" class = "form-control"  required>
                                <option>Select</option>
									<?php 
										$room_query=mysqli_query($con,"select * from room")
										or die("Cannot Connect to Database".mysqli_connect_error());
                                        while($room_row=mysqli_fetch_array($room_query))
										{
										?>
										<option><?php echo $room_row['room_name']; ?></option>
									<?php } ?>
							</select>
                		</div>
                    </div>
								
					<div class="control-group col-4">
                        <label class="control-label" for="inputPassword">Course:</label>
                        <div class="controls">
							<select type="text" name="course_year_section" class = "form-control" required>
                                <option>Select</option>
                                    <?php 
                                        $query = mysqli_query($con,"SELECT * FROM users WHERE userid=".$_SESSION['adminId']) or die("Cannot Connect to Database".mysqli_connect_error());
                                        $row = mysqli_fetch_array($query);
                                        if($row['name']=='Administrator'){
                                            $CYS_query=mysqli_query($con,"select * from course")
                                            or die("Cannot Connect to Database".mysqli_connect_error());
                                            while($CYS_row=mysqli_fetch_array($CYS_query))
                                            {
                                            ?>
                                                <option><?php echo $CYS_row['course']; ?>-<?php echo $CYS_row['year_section']; ?></option>
                                            <?php 
                                            } 
                                        }else{
                                            $adminId=$_SESSION['adminId'];
                                            $query = mysqli_query($con,"SELECT * FROM users WHERE userid='$adminId'") or die("Cannot Connect to Database".mysqli_connect_error());
                                            $row = mysqli_fetch_array($query);

                                            $departmentParts = explode("-", $row['department']);

                                            $dept = $departmentParts[0]; 
                                            $chair = $departmentParts[1];
                                            $course = $departmentParts[2];

                                            $CYS_query=mysqli_query($con,"select * from course where course='$course'")
                                            or die("Cannot Connect to Database".mysqli_connect_error());
                                            while($CYS_row=mysqli_fetch_array($CYS_query))
                                            {
                                            ?>
                                                <option><?php echo $CYS_row['course']; ?>-<?php echo $CYS_row['year_section']; ?></option>
                                            <?php 
                                            } 
                                        }
                                    ?>
                            </select>
                        </div>
                    </div>
								
					<div class="control-group col-4">
                        <label class="control-label" for="inputPassword">semester:</label>
                        <div class="controls">
							<select type="text" name="semester" class = "form-control"  required>
                                <option>Select</option>
									  <?php 
									  	$sem_query=mysqli_query($con,"select * from semester")or die("Cannot Connect to Database".mysqli_connect_error());
										while($sem_row=mysqli_fetch_array($sem_query)){
									  ?>
										<option><?php echo $sem_row['semester']; ?></option>
									<?php } ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="inputPassword">College:</label>
                    <div class="controls">
                    <select type="text" name="department" class = "form-control" placeholder="Category" required>
                        <option value="">Select</option>
                        <?php 
                            $CYS_query=mysqli_query($con,"select * from department")
                            or die("Cannot Connect to Database".mysqli_connect_error());
                            while($CYS_row=mysqli_fetch_array($CYS_query))
                            {
                            ?>
                                <option><?php echo $CYS_row['department']; ?></option>
                            <?php } ?>

                    </select>
                    </div>
                </div>

                              
                <div class = "modal-footer">
                    <input type="hidden" name = "go" class="btn btn-primary">
                    <input type="submit" name = "" class="btn btn-primary">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
    </div>
									

									  
						<?php 
									   
                            // if (isset($_POST['go'])) 
                            // {
							//     $Monday=isset($_POST['Monday']) ? $_POST['Monday'] : '';
                            //     $Tuesday=isset($_POST['Tuesday']) ? $_POST['Tuesday'] : '';
                            //     $Wednesday=isset($_POST['Wednesday']) ? $_POST['Wednesday'] : '';
                            //     $Thursday=isset($_POST['Thursday']) ? $_POST['Thursday'] : '';
                            //     $Friday=isset($_POST['Friday']) ? $_POST['Friday'] : '';
                            //     $Saturday=isset($_POST['Saturday']) ? $_POST['Saturday'] : '';

                            //     $day=$Monday." ".$Tuesday." ".$Wednesday." ".$Thursday." ".$Friday." ".$Saturday;
                            //     $time_start= $_POST['time_start'] ;					
                            //     $time_end=$_POST['time_end'] ;
                            //     $fname=$_POST['fname'] ;
                            //     $subject_code=$_POST['subject_code'] ;
                            //     $room_name=$_POST['room_name'] ;
                            //     $course_year_section=$_POST['course_year_section'] ;
                            //     $semester=$_POST['semester'] ;
                            //     $sy=$_POST['sy'] ;
                            //     $department=$_POST['department'] ;

                            //     $query1= mysqli_query($con,"SELECT * FROM classsched WHERE day='$day' and time_start='$time_start' and time_end='$time_end' and fname='$fname'") or die("Cannot Connect to Database".mysqli_connect_error());
                            //     $query2 = mysqli_query($con,"SELECT * FROM classsched WHERE day='$day' and time_start='$time_start' and time_end='$time_end' and room_name='$room_name'") or die("Cannot Connect to Database".mysqli_connect_error());
                            //     $query3 = mysqli_query($con,"SELECT * FROM classsched WHERE day='$day' and time_start='$time_start' and time_end='$time_end' and course_year_section='$course_year_section'") or die("Cannot Connect to Database".mysqli_connect_error());
                            //     $query4 = mysqli_query($con,"SELECT * FROM classsched WHERE day='$day' and time_start='$time_start' and time_end='$time_end' ") or die("Cannot Connect to Database".mysqli_connect_error());
                               
                            //     $query5 = mysqli_query($con,"SELECT * FROM classsched WHERE m='1' AND time_start='$time_start' and time_end='$time_end' and course_year_section ='$course_year_section' and semester='$semester' and sy='$sy'") or die("Cannot Connect to Database".mysqli_connect_error());
                            //     $query6 = mysqli_query($con,"SELECT * FROM classsched WHERE t='1' AND time_start='$time_start' and time_end='$time_end' and course_year_section ='$course_year_section' and semester='$semester' and sy='$sy'") or die("Cannot Connect to Database".mysqli_connect_error());
                            //     $query7 = mysqli_query($con,"SELECT * FROM classsched WHERE w='1' AND time_start='$time_start' and time_end='$time_end' and course_year_section ='$course_year_section' and semester='$semester' and sy='$sy'") or die("Cannot Connect to Database".mysqli_connect_error());
                            //     $query8 = mysqli_query($con,"SELECT * FROM classsched WHERE th='1' AND time_start='$time_start' and time_end='$time_end' and course_year_section ='$course_year_section' and semester='$semester' and sy='$sy'") or die("Cannot Connect to Database".mysqli_connect_error());
                            //     $query9 = mysqli_query($con,"SELECT * FROM classsched WHERE f='1' AND time_start='$time_start' and time_end='$time_end' and course_year_section ='$course_year_section' and semester='$semester' and sy='$sy'") or die("Cannot Connect to Database".mysqli_connect_error());

                            //     $query10 = mysqli_query($con,"SELECT * FROM classsched WHERE m='1' AND time_start='$time_start' and time_end='$time_end' and room_name='$room_name' and semester='$semester' and sy='$sy'") or die("Cannot Connect to Database".mysqli_connect_error());
                            //     $query11 = mysqli_query($con,"SELECT * FROM classsched WHERE t='1' AND time_start='$time_start' and time_end='$time_end' and room_name='$room_name' and semester='$semester' and sy='$sy'") or die("Cannot Connect to Database".mysqli_connect_error());
                            //     $query12 = mysqli_query($con,"SELECT * FROM classsched WHERE w='1' AND time_start='$time_start' and time_end='$time_end' and room_name='$room_name' and semester='$semester' and sy='$sy'") or die("Cannot Connect to Database".mysqli_connect_error());
                            //     $query13 = mysqli_query($con,"SELECT * FROM classsched WHERE th='1' AND time_start='$time_start' and time_end='$time_end' and room_name='$room_name' and semester='$semester' and sy='$sy'") or die("Cannot Connect to Database".mysqli_connect_error());
                            //     $query14 = mysqli_query($con,"SELECT * FROM classsched WHERE f='1' AND time_start='$time_start' and time_end='$time_end' and room_name='$room_name' and semester='$semester' and sy='$sy'") or die("Cannot Connect to Database".mysqli_connect_error());

                            //     $query15 = mysqli_query($con,"SELECT * FROM classsched WHERE m='1' AND time_start='$time_start' and time_end='$time_end' and fname='$fname' and semester='$semester' and sy='$sy'") or die("Cannot Connect to Database".mysqli_connect_error());
                            //     $query16 = mysqli_query($con,"SELECT * FROM classsched WHERE t='1' AND time_start='$time_start' and time_end='$time_end' and fname='$fname' and semester='$semester' and sy='$sy'") or die("Cannot Connect to Database".mysqli_connect_error());
                            //     $query17 = mysqli_query($con,"SELECT * FROM classsched WHERE w='1' AND time_start='$time_start' and time_end='$time_end' and fname='$fname' and semester='$semester' and sy='$sy'") or die("Cannot Connect to Database".mysqli_connect_error());
                            //     $query18 = mysqli_query($con,"SELECT * FROM classsched WHERE th='1' AND time_start='$time_start' and time_end='$time_end' and fname='$fname' and semester='$semester' and sy='$sy'") or die("Cannot Connect to Database".mysqli_connect_error());
                            //     $query19 = mysqli_query($con,"SELECT * FROM classsched WHERE f='1' AND time_start='$time_start' and time_end='$time_end' and fname='$fname' and semester='$semester' and sy='$sy'") or die("Cannot Connect to Database".mysqli_connect_error());
                                
                            //     $count1=mysqli_num_rows($query1);
                            //     $count2=mysqli_num_rows($query2);
                            //     $count3=mysqli_num_rows($query3);
                            //     $count4=mysqli_num_rows($query4);

                            //     $count5=mysqli_num_rows($query5);
                            //     $count6=mysqli_num_rows($query6);
                            //     $count7=mysqli_num_rows($query7);
                            //     $count8=mysqli_num_rows($query8);
                            //     $count9=mysqli_num_rows($query9);

                            //     $count10=mysqli_num_rows($query10);
                            //     $count11=mysqli_num_rows($query11);
                            //     $count12=mysqli_num_rows($query12);
                            //     $count13=mysqli_num_rows($query13);
                            //     $count14=mysqli_num_rows($query14);

                            //     $count15=mysqli_num_rows($query15);
                            //     $count16=mysqli_num_rows($query16);
                            //     $count17=mysqli_num_rows($query17);
                            //     $count18=mysqli_num_rows($query18);
                            //     $count19=mysqli_num_rows($query19);
                                

                            //     if($count1 > 0){
                            //     echo "<script>alert ('Instructor $fname Schedule is busy at this time;  ' );</script>";
                            //     }
                            //         elseif($count2> 0){
                            //         echo "<script>alert('Room $room_name Schedule is busy at this time ;');</script>";
                            //         }
                            //             elseif($count3 > 0){
                            //             echo "<script>alert('$course_year_section Schedule is busy at this time');</script>";
                            //             }
                            //                 elseif($count5 > 0){
                            //                 echo "<script>alert('Conflict on day schedule please review the schedules');</script>";
                            //                 }
                            //                 elseif($count6 > 0){
                            //                     echo "<script>alert('Conflict on day schedule please review the schedules');</script>";
                            //                     }
                            //                     elseif($count7 > 0){
                            //                         echo "<script>alert('Conflict on day schedule please review the schedules');</script>";
                            //                         }
                            //                         elseif($count8 > 0){
                            //                             echo "<script>alert('Conflict on day schedule please review the schedules');</script>";
                            //                             }
                            //                             elseif($count9 > 0){
                            //                                 echo "<script>alert('Conflict on day schedule please review the schedules');</script>";
                            //                                 }
                            //                                 elseif($count10 > 0){
                            //                                     echo "<script>alert('Conflict on $room_name schedule please review the schedules');</script>";
                            //                                     }
                            //                                     elseif($count11 > 0){
                            //                                         echo "<script>alert('Conflict on $room_name schedule please review the schedules');</script>";
                            //                                         }
                            //                                         elseif($count12 > 0){
                            //                                             echo "<script>alert('Conflict on $room_name schedule please review the schedules');</script>";
                            //                                             }
                            //                                             elseif($count13 > 0){
                            //                                                 echo "<script>alert('Conflict on $room_name schedule please review the schedules');</script>";
                            //                                                 }
                            //                                                 elseif($count14 > 0){
                            //                                                     echo "<script>alert('Conflict on $room_name schedule please review the schedules');</script>";
                            //                                                     }
                            //                                                     elseif($count15 > 0){
                            //                                                         echo "<script>alert('Conflict on Mr./Mrs $fname schedule please review the schedules');</script>";
                            //                                                         }
                            //                                                         elseif($count16 > 0){
                            //                                                             echo "<script>alert('Conflict Mr./Mrs $fname schedule please review the schedules');</script>";
                            //                                                             }
                            //                                                             elseif($count17 > 0){
                            //                                                                 echo "<script>alert('Conflict Mr./Mrs $fname schedule please review the schedules');</script>";
                            //                                                                 }
                            //                                                                 elseif($count18 > 0){
                            //                                                                     echo "<script>alert('Conflict Mr./Mrs $fname schedule please review the schedules');</script>";
                            //                                                                     }
                            //                                                                     elseif($count19 > 0){
                            //                                                                         echo "<script>alert('Conflict Mr./Mrs $fname schedule please review the schedules');</script>";
                            //                                                                         }
                            
                            //                                     else{

                                        
                            //                                         $currentTime = time() + 3600;
                            //                                         $time_start;
                            //                                         $time_end;

                            //                                         if (checkTime($time_start, $time_end)) {
                            //                                             echo "<script>alert('Conflict In time! Avoid time End Greater than or Equal to time start!');</script>";
                            //                                             } 
                            //                                             elseif(desiredTime($time_start,$time_end)){
                            //                                                 echo "<script>alert('Conflict In time! School Classes Around 8:00am - 5:00pm');</script>";
                            //                                             }
                            //                                             elseif(checkLunch_time($time_start,$time_end)){
                            //                                                 echo "<script>alert('Conflict In time! That is lunch time po madam ko');</script>";
                            //                                             }
                            //                                             else 
                            //                                             {
                            //                                                 $a = new DateTime($time_start);
                            //                                                 $b = new DateTime($time_end);
                            //                                                 $interval = $a->diff($b);

                            //                                                     if($interval->format("%H")>01)
                            //                                                     {
                            //                                                         echo "<script>alert('Enter Schedule 1hr at a time!');</script>";
                            //                                                         } else {

                            //                                                             mysqli_query($con, "insert into classsched (classid,day,time_start,time_end,fname,subject_code,room_name,course_year_section,semester,sy,department,status)
                            //                                                                         values ('','$day','$time_start','$time_end','$fname','$subject_code','$room_name','$course_year_section','$semester','$sy','$department','checked')
                            //                                                                         ") or die("Cannot Connect to Database" . mysqli_connect_error());

                            //                                                             $addval1 = mysqli_query($con, "Update classsched set m='1' where day like '%Monday%'");
                            //                                                             $addval2 = mysqli_query($con, "Update classsched set t='1' where day like '%Tuesday%'");
                            //                                                             $addval3 = mysqli_query($con, "Update classsched set w='1' where day like '%Wednesday%'");
                            //                                                             $addval4 = mysqli_query($con, "Update classsched set th='1' where day like '%Thursday%'");
                            //                                                             $addval5 = mysqli_query($con, "Update classsched set f='1' where day like '%Friday%'");
                            //                                                             echo "<script>alert ('Successfully Added!' );</script>";
                            //                                             }
                            //                                         }
                            //                                     }
                            // }
                            ?>
									  
									  
									  
									  
                                </div>
<script>
                                    
  let checkboxes = document.querySelectorAll('.checkbox-group input[type="checkbox"]');
  let submitButton = document.querySelector('input[type="submit"]');
  submitButton.setAttribute('disabled', true);
  checkboxes.forEach((checkbox) => {
    checkbox.addEventListener('change', () => {
      if(checkbox.checked) {
        submitButton.removeAttribute('disabled');
      } else {
        let checkboxChecked = Array.from(checkboxes).some(checkbox => checkbox.checked);
        if (!checkboxChecked) {
          submitButton.setAttribute('disabled', true);
        }
      }
    });
  });
</script>
<script>
  // Get the time start and time end input elements
  let timeStartInput = document.querySelector('input[name="time_start"]');
  let timeEndInput = document.querySelector('input[name="time_end"]');
  let timeEndInput2 = document.querySelector('input[name="time_end2"]');

  // Add an event listener to the time start input element
  timeStartInput.addEventListener('change', function() {
    // Get the time start value
    let timeStart = timeStartInput.value;
    // check if timeStart is valid time
    if(timeStart){
        //convert time start string to date object
        let timeStartDate = new Date("1970-01-01T" + timeStart + "Z");
        //add 1 hr in ms
        timeStartDate.setTime(timeStartDate.getTime() - (7 * 60 * 60 * 1000));
        // set the time end input value 
        timeEndInput.value = timeStartDate.toTimeString().slice(0,5);
        timeEndInput2.value = timeStartDate.toTimeString().slice(0,5)
    }
  });
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
  $('#scheduleForm').submit(function(e) {
    e.preventDefault(); // Prevent the form from submitting normally
    $.ajax({
      url: 'process_schedule.php',
      type: 'POST',
      data: $(this).serialize(), // Send the form data
      success: function(response) {

        alert(response);
        if (response.trim() === 'Success: Schedule added successfully') {
        console.log('Inside if block'); // Check if this message is printed in the console
        location.reload();
        setTimeout(function() {
            console.log('Redirecting to schedule.php'); // Check if this message is printed in the console
            window.location.href = 'schedule.php';
        }, 3000); 
        }



      },
      error: function(xhr, status, error) {
        // Handle the AJAX request error
        alert('An error occurred during the AJAX request: ' + error);
        console.log(error);
      }
    });
  });
});
</script>


                                
                            </div>

<?php


?>