<?php
// Include the database connection file
include 'includes/connect.php';
include 'includes/essentials.php';
adminLogin();
// print_r($_POST);

// Check if the form is submitted
if (isset($_POST['go'])) {
    // Retrieve the form data
    $days = array();
    if (isset($_POST['Monday'])) {
        $days[] = $_POST['Monday'];
    }
    if (isset($_POST['Tuesday'])) {
        $days[] = $_POST['Tuesday'];
    }
    if (isset($_POST['Wednesday'])) {
        $days[] = $_POST['Wednesday'];
    }
    if (isset($_POST['Thursday'])) {
        $days[] = $_POST['Thursday'];
    }
    if (isset($_POST['Friday'])) {
        $days[] = $_POST['Friday'];
    }
    if (isset($_POST['Saturday'])) {
        $days[] = $_POST['Saturday'];
    }
    $day = implode(" ", $days);

    $time_start = $_POST['time_start'];
    $time_end = $_POST['time_end'];
    $fname = $_POST['fname'];
    $subject_code = $_POST['subject_code'];
    $room_name = $_POST['room_name'];
    $course_year_section = $_POST['course_year_section'];
    $semester = $_POST['semester'];
    $sy = $_POST['sy'];
    $department = $_POST['department'];
    $status = "checked";

                                $query1= mysqli_query($con,"SELECT * FROM classsched WHERE day='$day' and time_start='$time_start' and time_end='$time_end' and fname='$fname'") or die("Cannot Connect to Database".mysqli_connect_error());
                                $query2 = mysqli_query($con,"SELECT * FROM classsched WHERE day='$day' and time_start='$time_start' and time_end='$time_end' and room_name='$room_name'") or die("Cannot Connect to Database".mysqli_connect_error());
                                $query3 = mysqli_query($con,"SELECT * FROM classsched WHERE day='$day' and time_start='$time_start' and time_end='$time_end' and course_year_section='$course_year_section'") or die("Cannot Connect to Database".mysqli_connect_error());
                                $query4 = mysqli_query($con,"SELECT * FROM classsched WHERE day='$day' and time_start='$time_start' and time_end='$time_end' ") or die("Cannot Connect to Database".mysqli_connect_error());
                               
                                $query5 = mysqli_query($con,"SELECT * FROM classsched WHERE m='1' AND time_start='$time_start' and time_end='$time_end' and course_year_section ='$course_year_section' and semester='$semester' and sy='$sy'") or die("Cannot Connect to Database".mysqli_connect_error());
                                $query6 = mysqli_query($con,"SELECT * FROM classsched WHERE t='1' AND time_start='$time_start' and time_end='$time_end' and course_year_section ='$course_year_section' and semester='$semester' and sy='$sy'") or die("Cannot Connect to Database".mysqli_connect_error());
                                $query7 = mysqli_query($con,"SELECT * FROM classsched WHERE w='1' AND time_start='$time_start' and time_end='$time_end' and course_year_section ='$course_year_section' and semester='$semester' and sy='$sy'") or die("Cannot Connect to Database".mysqli_connect_error());
                                $query8 = mysqli_query($con,"SELECT * FROM classsched WHERE th='1' AND time_start='$time_start' and time_end='$time_end' and course_year_section ='$course_year_section' and semester='$semester' and sy='$sy'") or die("Cannot Connect to Database".mysqli_connect_error());
                                $query9 = mysqli_query($con,"SELECT * FROM classsched WHERE f='1' AND time_start='$time_start' and time_end='$time_end' and course_year_section ='$course_year_section' and semester='$semester' and sy='$sy'") or die("Cannot Connect to Database".mysqli_connect_error());

                                $query10 = mysqli_query($con,"SELECT * FROM classsched WHERE m='1' AND time_start='$time_start' and time_end='$time_end' and room_name='$room_name' and semester='$semester' and sy='$sy'") or die("Cannot Connect to Database".mysqli_connect_error());
                                $query11 = mysqli_query($con,"SELECT * FROM classsched WHERE t='1' AND time_start='$time_start' and time_end='$time_end' and room_name='$room_name' and semester='$semester' and sy='$sy'") or die("Cannot Connect to Database".mysqli_connect_error());
                                $query12 = mysqli_query($con,"SELECT * FROM classsched WHERE w='1' AND time_start='$time_start' and time_end='$time_end' and room_name='$room_name' and semester='$semester' and sy='$sy'") or die("Cannot Connect to Database".mysqli_connect_error());
                                $query13 = mysqli_query($con,"SELECT * FROM classsched WHERE th='1' AND time_start='$time_start' and time_end='$time_end' and room_name='$room_name' and semester='$semester' and sy='$sy'") or die("Cannot Connect to Database".mysqli_connect_error());
                                $query14 = mysqli_query($con,"SELECT * FROM classsched WHERE f='1' AND time_start='$time_start' and time_end='$time_end' and room_name='$room_name' and semester='$semester' and sy='$sy'") or die("Cannot Connect to Database".mysqli_connect_error());

                                $query15 = mysqli_query($con,"SELECT * FROM classsched WHERE m='1' AND time_start='$time_start' and time_end='$time_end' and fname='$fname' and semester='$semester' and sy='$sy'") or die("Cannot Connect to Database".mysqli_connect_error());
                                $query16 = mysqli_query($con,"SELECT * FROM classsched WHERE t='1' AND time_start='$time_start' and time_end='$time_end' and fname='$fname' and semester='$semester' and sy='$sy'") or die("Cannot Connect to Database".mysqli_connect_error());
                                $query17 = mysqli_query($con,"SELECT * FROM classsched WHERE w='1' AND time_start='$time_start' and time_end='$time_end' and fname='$fname' and semester='$semester' and sy='$sy'") or die("Cannot Connect to Database".mysqli_connect_error());
                                $query18 = mysqli_query($con,"SELECT * FROM classsched WHERE th='1' AND time_start='$time_start' and time_end='$time_end' and fname='$fname' and semester='$semester' and sy='$sy'") or die("Cannot Connect to Database".mysqli_connect_error());
                                $query19 = mysqli_query($con,"SELECT * FROM classsched WHERE f='1' AND time_start='$time_start' and time_end='$time_end' and fname='$fname' and semester='$semester' and sy='$sy'") or die("Cannot Connect to Database".mysqli_connect_error());
                                
                                $count1=mysqli_num_rows($query1);
                                $count2=mysqli_num_rows($query2);
                                $count3=mysqli_num_rows($query3);
                                $count4=mysqli_num_rows($query4);

                                $count5=mysqli_num_rows($query5);
                                $count6=mysqli_num_rows($query6);
                                $count7=mysqli_num_rows($query7);
                                $count8=mysqli_num_rows($query8);
                                $count9=mysqli_num_rows($query9);

                                $count10=mysqli_num_rows($query10);
                                $count11=mysqli_num_rows($query11);
                                $count12=mysqli_num_rows($query12);
                                $count13=mysqli_num_rows($query13);
                                $count14=mysqli_num_rows($query14);

                                $count15=mysqli_num_rows($query15);
                                $count16=mysqli_num_rows($query16);
                                $count17=mysqli_num_rows($query17);
                                $count18=mysqli_num_rows($query18);
                                $count19=mysqli_num_rows($query19);
                                

                                if($count1 > 0){
                                    $response = "Instructor " . $fname . " Schedule is busy at this time";
                                }
                                    elseif($count2> 0){
                                        $response = "Room " . $room_name . " Schedule is busy at this time";
                                    }
                                        elseif($count3 > 0){
                                            $response = "" . $course_year_section . " Schedule is busy at this time";
                                        }
                                            elseif($count5 > 0){
                                                $response = "Conflict on day schedule please review the schedules";
                                            }
                                            elseif($count6 > 0){
                                                $response = "Conflict on day schedule please review the schedules";
                                                }
                                                elseif($count7 > 0){
                                                     $response = "Conflict on day schedule please review the schedules";
                                                    }
                                                    elseif($count8 > 0){
                                                            $response = "Conflict on day schedule please review the schedules";
                                                        }
                                                        elseif($count9 > 0){
                                                                $response = "Conflict on day schedule please review the schedules";
                                                            }
                                                            elseif($count10 > 0){
                                                                $response = "Conflict in " . $room_name . " schedule please review the schedules";
                                                                }
                                                                elseif($count11 > 0){
                                                                    $response = "Conflict in " . $room_name . " schedule please review the schedules";
                                                                    }
                                                                    elseif($count12 > 0){
                                                                        $response = "Conflict in " . $room_name . " schedule please review the schedules";
                                                                        }
                                                                        elseif($count13 > 0){
                                                                            $response = "Conflict in " . $room_name . " schedule please review the schedules";
                                                                            }
                                                                            elseif($count14 > 0){
                                                                                $response = "Conflict in " . $room_name . " schedule please review the schedules";
                                                                                }
                                                                                elseif($count15 > 0){
                                                                                    $response = "Conflict on Mr./Mrs " . $fname . " schedule please review the schedules";
                                                                                    }
                                                                                    elseif($count16 > 0){
                                                                                        $response = "Conflict on Mr./Mrs " . $fname . " schedule please review the schedules";
                                                                                        }
                                                                                        elseif($count17 > 0){
                                                                                            $response = "Conflict on Mr./Mrs " . $fname . " schedule please review the schedules";
                                                                                            }
                                                                                            elseif($count18 > 0){
                                                                                                $response = "Conflict on Mr./Mrs " . $fname . " schedule please review the schedules";
                                                                                                }
                                                                                                elseif($count19 > 0){
                                                                                                    $response = "Conflict on Mr./Mrs " . $fname . " schedule please review the schedules";
                                                                                                    }
                            else {
            // Insert the schedule into the database using a prepared statement
            $insert_query = "INSERT INTO classsched (day, time_start, time_end, fname, subject_code, room_name, course_year_section, semester, sy, department, status)
                             VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

            $stmt = mysqli_prepare($con, $insert_query);
            mysqli_stmt_bind_param($stmt, "sssssssssss", $day, $time_start, $time_end, $fname, $subject_code, $room_name, $course_year_section, $semester, $sy, $department, $status);

            // Check if the insertion was successful
            if (mysqli_stmt_execute($stmt)) {
                // Update the days with the corresponding values
                if (isset($_POST['Monday'])) {
                    mysqli_query($con, "UPDATE classsched SET m='1' WHERE day LIKE '%Monday%'");
                }
                if (isset($_POST['Tuesday'])) {
                    mysqli_query($con, "UPDATE classsched SET t='1' WHERE day LIKE '%Tuesday%'");
                }
                if (isset($_POST['Wednesday'])) {
                    mysqli_query($con, "UPDATE classsched SET w='1' WHERE day LIKE '%Wednesday%'");
                }
                if (isset($_POST['Thursday'])) {
                    mysqli_query($con, "UPDATE classsched SET th='1' WHERE day LIKE '%Thursday%'");
                }
                if (isset($_POST['Friday'])) {
                    mysqli_query($con, "UPDATE classsched SET f='1' WHERE day LIKE '%Friday%'");
                }
                // Return a success response
                $response = "Success: Schedule added successfully";
                
            } else {
                // Return an error response with the MySQL error
                echo 'Error: ' . mysqli_error($con);

            }
        }
    }echo $response;
?>

