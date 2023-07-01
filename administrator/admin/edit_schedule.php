<!DOCTYPE html>
<html lang="en">


<?php
    include 'includes/header.php';
    include 'includes/connect.php';
    include 'includes/essentials.php';
adminLogin();

    $get_id = $_GET['id'];
?>

<body>
    <!-- begin app -->
    <div class="app">
        <!-- begin app-wrap -->
        <div class="app-wrap">
            <!-- begin pre-loader -->
            <div class="loader">
                <div class="h-100 d-flex justify-content-center">
                    <div class="align-self-center">
                        <img src="../assets/img/loader/loader.svg" alt="loader">
                    </div>
                </div>
            </div>
            <!-- end pre-loader -->

            <?php include 'includes/topbar.php'?>
            <!-- begin app-container -->
            <div class="app-container">

            <?php include 'includes/sidebar.php'?>

                <!-- begin app-main -->
                <div class="app-main" id="main">
                    <!-- begin container-fluid -->
                    <div class="container-fluid">
                        <!-- begin row -->
                        <div class="row">
                            <div class="col-md-12 m-b-30">
                                <!-- begin page title -->
                                <div class="d-block d-sm-flex flex-nowrap align-items-center">
                                    <div class="page-title mb-2 mb-sm-0">
                                        <h1><i class="fa fa-graduation-cap"></i> Edit Schedule</h1>
                                    </div>
                                    <div class="ml-auto d-flex align-items-center">
                                        <nav>
                                            <ol class="breadcrumb p-0 m-b-0">
                                                <li class="breadcrumb-item">
                                                    <a href="index.html"><i class="ti ti-home"></i></a>
                                                </li>
                                                <li class="breadcrumb-item">
                                                    Schedule
                                                </li>
                                                <li class="breadcrumb-item active text-primary" aria-current="page">Edit Settings</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                                <!-- end page title -->
                            </div>
                        </div>
                        <!-- end row -->

                        <!--mail-Compose-contant-start-->
                        <div class="row account-contant">
                            <div class="col-12">
                                <div class="card card-statistics">
                                    <div class="card-body p-0">
                                        <div class="row no-gutters">
                                        
                                        <?php
                                            $query = mysqli_query($con,"select * from classsched where classid='$get_id'") or die("Cannot Connect to Database".mysqli_connect_error());
                                            $row = mysqli_fetch_array($query);
                                        ?>


                                            <div class="col-xl-3 pb-xl-0 pb-5 border-right">
                                                <div class="page-account-profil pt-5">
                                                    <div class="profile-img text-center rounded-circle">
                                                        <div class="pt-5">
                                                            <div class="bg-img m-auto">
                                                                <img src="../assets/img/Pangasinan_State_University_logo.png" class="img-fluid" alt="users-avatar">
                                                            </div>
                                                            <div class="profile pt-4">
                                                                <h4 class="mb-1">Pangasinan State University</h4>
                                                                <p>Scheduling System</p>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <!-- <div class="profile-btn text-center">
                                                        <div><button class="btn btn-light text-primary mb-2">Upload New Avatar</button></div>
                                                        <a href="#" role="button" class="btn btn-danger" data-target = "#"data-toggle="modal"><i class="fa fa-info" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"></i> View</a>
                                                    </div> -->
                                                </div>
                                            </div>
                                            <div class="col-xl-9 col-md-8 col-12 border-t border-right">
                                                <div class="page-account-form">
                                                    <div class="form-titel border-bottom p-3">
                                                        <h5 class="mb-0 py-2">Edit Schedule</h5>
                                                    </div>
                                                    <div class="p-4">
                                                        <form class="form-horizontal" method="post" enctype="multipart/form-data">
                                                        <hr>
					<div class="control-group">
                        <label class="control-label" for="inputEmail">
							Select Day
						</label>
						<br/>
						<div id="day">
                            <label class="control-label">
                                Monday:
                            </label>
                                    <input 
                                    type="checkbox" 
                                    value="Monday" 
                                    name="Monday" 
                                    id="day" 
                                    <?php
                                    if($row['m'] == '1'){
                                        echo "checked";
                                    }
                                    ?>
                                    >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label class="control-label">
                                   Tuesday:
                            </label>
							        <input type="checkbox" value="Tuesday" name="Tuesday" id="day"
                                    <?php
                                    if($row['t'] == '1'){
                                        echo "checked";
                                    }
                                    ?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label class="control-label">
                                Wednesday:
                            </label>
							        <input type="checkbox" value="Wednesday" name="Wednesday" id="day"
                                    <?php
                                    if($row['w'] == '1'){
                                        echo "checked";
                                    }
                                    ?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label class="control-label">
                            Thursday:
                            </label>
							        <input type="checkbox" value="Thursday" name="Thursday" id="day"
                                    <?php
                                    if($row['th'] == '1'){
                                        echo "checked";
                                    }
                                    ?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <label class="control-label">
                                    Friday:
                            </label>
							        <input type="checkbox" value="Friday" name="Friday" id="day"
                                    <?php
                                    if($row['f'] == '1'){
                                        echo "checked";
                                    }
                                    ?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						</div>
                    </div> 
                    <hr>
                    <div class="row col-12">
                        <div class="control-group col-4">
                            <label class="control-label" for="time1">
                                Time Start:
                            </label>
                            <div class="controls">

                                <input type="time" id="appt" name="time_start" class="form-control" value="<?php echo $row['time_start'];?>" required>
                            </div>
                        </div>
                                
                        <div class="control-group col-4">
                            <label class="control-label">
                                Time End:
                            </label>
                            <div class="controls">

                                <input type="time" id="time2"  name="time_end" class="form-control" value="<?php echo $row['time_end'];?>" required>
                            </div> 
                        </div>
                        <div class="control-group col-4">
                            <label class="control-label" for="inputPassword">School Year:</label>
                            <div class="controls">
								<select type="text" name="sy" class = "form-control" >
                                    <option><?php echo $row['sy'];?></option>
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
						<div class="controls col-12">
							<select type="text" name="fname" class = "form-control"  >
								<option><?php echo $row['fname'];?></option>
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
                        <div class="controls col-12">
							<select type="text" name="subject_code" class = "form-control"  >
                                <option><?php echo $row['subject_code'];?></option>
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
							<select type="text" name="room_name" class = "form-control"  >
                                <option><?php echo $row['room_name'];?></option>
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
							<select type="text" name="course_year_section" class = "form-control" >
                                <option><?php echo $row['course_year_section'];?></option>
                                    <?php 
                                        $CYS_query=mysqli_query($con,"select * from course")
                                        or die("Cannot Connect to Database".mysqli_connect_error());
                                        while($CYS_row=mysqli_fetch_array($CYS_query))
                                        {
                                        ?>
                                            <option><?php echo $CYS_row['course']; ?>-<?php echo $CYS_row['year_section']; ?></option>
                                        <?php } ?>
                            </select>
                        </div>
                    </div>
								
					<div class="control-group col-4">
                        <label class="control-label" for="inputPassword">semester:</label>
                        <div class="controls">
							<select type="text" name="semester" class = "form-control"  >
                                <option><?php echo $row['semester'];?></option>
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

								<div class="control-group col-12">
                                    <label class="control-label" for="inputPassword">College:</label>
                                    <div class="controls">
									<select type="text" name="department" class = "form-control" placeholder="Category" >
                                      <option><?php echo $row['department']; ?></option>
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
                                                            <div class="form-group">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                                                    <label class="form-check-label" for="gridCheck">
                                                                        Permision
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <button type="submit" name ="update" class="btn btn-primary">Update Information</button>
                                                            <a href="schedule.php" class="btn btn-danger">Back</a>
                                                        </form>
                                                        <?php
                                                    if (isset($_POST['update'])) 
                                                    {
                                                                $Monday=isset($_POST['Monday']) ? $_POST['Monday'] : '';
                                                                $Tuesday=isset($_POST['Tuesday']) ? $_POST['Tuesday'] : '';
                                                                $Wednesday=isset($_POST['Wednesday']) ? $_POST['Wednesday'] : '';
                                                                $Thursday=isset($_POST['Thursday']) ? $_POST['Thursday'] : '';
                                                                $Friday=isset($_POST['Friday']) ? $_POST['Friday'] : '';
                                                                $Saturday=isset($_POST['Saturday']) ? $_POST['Saturday'] : '';
                                
                                                                $day=$Monday." ".$Tuesday." ".$Wednesday." ".$Thursday." ".$Friday." ".$Saturday;
                                                                $time_start= $_POST['time_start'] ;					
                                                                $time_end=$_POST['time_end'] ;
                                                                $fname=$_POST['fname'] ;
                                                                $subject_code=$_POST['subject_code'] ;
                                                                $room_name=$_POST['room_name'] ;
                                                                $course_year_section=$_POST['course_year_section'] ;
                                                                $semester=$_POST['semester'] ;
                                                                $sy=$_POST['sy'] ;
                                                                $department=$_POST['department'] ;
                                                                
                                                                $days_array = explode(' ', $day);

                                                                // Check for conflicts in the schedule
                                                                
                                                                
                                                                $time1 = new DateTime($time_start);
                                                                $time2 = new DateTime($time_end);
                                                                $start = $time1->modify('-1 minutes');
                                                                $end = $time2->modify('+1 minutes');
                                                                $t = $start->format('H:i:s');
                                                                $e = $end->format('H:i:s');

                                                                 $conflict = false;
                                                            // check for conflict in course
                                                            foreach($days_array as $days) {
                                                                $checkq = mysqli_query($con, "SELECT * FROM classsched WHERE course_year_section = '$course_year_section' AND day like '%$days%' AND semester ='$semester' and sy='$sy' and CAST(time_start as time) >= '$t' AND CAST(time_end as time) < '$e' AND classid != '$get_id'")or die("Cannot Connect to Database".mysqli_connect_error());

                                                                    // There is a conflict, do not update the schedule
                                                                    $row_cnt = mysqli_num_rows($checkq);
                                                                    if($row_cnt > 0){
                                                                        $conflict = true;
                                                                    }
                                                                break;

                                                                }
                                                            
                                                                if ($conflict) {
                                                                        echo "<script type='text/javascript'>".
                                                                        "alert('conflict Schedule on {$days} in {$course_year_section}');
                                                                        location.replace('edit_schedule.php?id=$get_id');" .
                                                                        "</script>";

                                                                } 
                                                                    else 
                                                                    {   // check for conflict in teachers
                                                                        foreach($days_array as $days) {
                                                                            $checkq = mysqli_query($con, "SELECT * FROM classsched WHERE fname = '$fname' AND day like '%$days%' AND semester ='$semester' and sy='$sy' and CAST(time_start as time) >= '$t' AND CAST(time_end as time) < '$e' AND classid != '$get_id'")or die("Cannot Connect to Database".mysqli_connect_error());
            
                                                                                // There is a conflict, do not update the schedule
                                                                                $row_cnt = mysqli_num_rows($checkq);
                                                                                if($row_cnt > 0){
                                                                                    $conflict = true;
                                                                                }
                                                                            break;
            
                                                                            }

                                                                            if ($conflict) {
                                                                                echo "<script type='text/javascript'>".
                                                                                "alert('conflict Schedule on {$days} in {$fname}');
                                                                                location.replace('edit_schedule.php?id=$get_id');" .
                                                                                "</script>";
        
                                                                            } 
                                                                                else
                                                                                {// check for conflict in rooms
                                                                                    foreach($days_array as $days) {
                                                                                        $checkq = mysqli_query($con, "SELECT * FROM classsched WHERE room_name = '$room_name' AND day like '%$days%' AND semester ='$semester' and sy='$sy' and CAST(time_start as time) >= '$t' AND CAST(time_end as time) < '$e' AND classid != '$get_id'")or die("Cannot Connect to Database".mysqli_connect_error());
                        
                                                                                            // There is a conflict, do not update the schedule
                                                                                            $row_cnt = mysqli_num_rows($checkq);
                                                                                            if($row_cnt > 0){
                                                                                                $conflict = true;
                                                                                            }
                                                                                        break;
                        
                                                                                        }
            
                                                                                        if ($conflict) {
                                                                                            echo "<script type='text/javascript'>".
                                                                                            "alert('conflict Schedule on {$days} in {$room_name}');
                                                                                            location.replace('edit_schedule.php?id=$get_id');" .
                                                                                            "</script>";

                                                                                        } else 
                                                                                            {// check if time end is earlier than time start

                                                                                                $currentTime = time() + 3600;
                                                                                                $time_start;
                                                                                                $time_end;

                                                                                                // check if time end is earlier than time start if earlier do not update
                                                                                                if (checkTime($time_start, $time_end)) {
                                                                                                    echo "<script>alert('Conflict In time! Avoid time end Earlier than or same time with time start!');</script>";
                                                                                                } else {
                                                                                                    $a = new DateTime($time_start);
                                                                                                    $b = new DateTime($time_end);
                                                                                                    $interval = $a->diff($b);

                                                                                                    if ($interval->format("%H") > 01) {
                                                                                                        echo "<script>alert('Enter Schedule 1hr at a time!');</script>";
                                                                                                    } else {



                                                                                                        mysqli_query($con, "update classsched set day ='$day', time_start ='$time_start',
                                                                                                        time_end ='$time_end', fname ='$fname', subject_code ='$subject_code', room_name='$room_name', course_year_section ='$course_year_section', semester ='$semester', sy ='$sy', department=' $department' where classid = '$get_id'") or die("Cannot Connect to Database" . mysqli_connect_error());
                                                                                
                                                                                                        $addval1 = mysqli_query($con, "Update classsched set m='1' where day like '%Monday%'");
                                                                                                        $addval2 = mysqli_query($con, "Update classsched set t='1' where day like '%Tuesday%'");
                                                                                                        $addval3 = mysqli_query($con, "Update classsched set w='1' where day like '%Wednesday%'");
                                                                                                        $addval4 = mysqli_query($con, "Update classsched set th='1' where day like '%Thursday%'");
                                                                                                        $addval5 = mysqli_query($con, "Update classsched set f='1' where day like '%Friday%'");
                                                                                
                                                                                                        $addval11 = mysqli_query($con, "Update classsched set m='0' where day NOT like '%Monday%'");
                                                                                                        $addval22 = mysqli_query($con, "Update classsched set t='0' where day NOT like '%Tuesday%'");
                                                                                                        $addval33 = mysqli_query($con, "Update classsched set w='0' where day NOT like '%Wednesday%'");
                                                                                                        $addval44 = mysqli_query($con, "Update classsched set th='0' where day NOT like '%Thursday%'");
                                                                                                        $addval55 = mysqli_query($con, "Update classsched set f='0' where day NOT like '%Friday%'");
                                                                                                        echo "<script type='text/javascript'>" .
                                                                                                            "alert('Update Successful, Please Reload!');
                                                                                                            location.replace('edit_schedule.php?id=$get_id');" .
                                                                                                            "</script>";
                                                                                                    }
                                                                                                }
                                                                                            }

                                                                                }        
                                                                    }
                                                        }
                                                                                                                    
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--mail-Compose-contant-end-->
                    </div>
                    <!-- end container-fluid -->
                </div>
                <!-- end app-main -->
            </div>
            <!-- end app-container -->
        </div>
        <!-- end app-wrap -->
    </div>
    <!-- end app -->

    <?php include 'includes/footer.php'?>
</body>


</html>