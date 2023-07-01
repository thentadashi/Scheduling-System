
<form>
  <label for="time_start">Start Time:</label>
  <input type="time" name="time_start" id="time_start">
  <br>
  <label for="time_end">End Time:</label>
  <input type="time" name="time_end" id="time_end" hidden>
  <input type="time" name="time_end2" id="time_end" disabled>
</form>


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








<?php include 'includes/connect.php'?>
<?php include 'includes/essentials.php';?>

<?php


// $days_array = explode(' ', $days);

// // Check for conflicts in the schedule
// $conflict = false;
// foreach($days_array as $day) {
//     $sql = "SELECT * FROM classsched WHERE (course_year_section = '$course_year_section' OR fname = '$fname' OR room_name = '$room_name') AND day = '$day' AND 
//             (('$time_start' BETWEEN time_start AND time_end) OR ('$time_end' BETWEEN time_start AND time_end)) 
//             AND id != $id";
//     $result = $conn->query($sql);
//     if ($result->num_rows > 0) {
//         // There is a conflict, do not update the schedule
//         $conflict = true;
//         break;
//     }
// }
// if ($conflict) {
//     echo "Error: Schedule conflict";
// } else {
//     // No conflicts, update the schedule in the database
//     $sql = "UPDATE classsched SET course_year_section='$course_year_section', fname='$fname', room='$room',days='$days', start_time='$start_time', end_time='$end_time' WHERE id='$id'";
//     $conn->query($sql);
//     echo "Schedule updated successfully";
// }
// $conn->close();
// 












// $time_start = "1:00pm";
// $time_end = "2:00pm";

// if(checkLunch_time($time_start,$time_end)){
//     echo 'lunchtime';
// }else{
//     echo 'true';
// }



































//  $q = mysqli_query($con, "SELECT * FROM classsched where classid ='191'") or die();

//  $res = mysqli_fetch_array($q);

// // $days = $res['day'];


// $conflict = true;
// $days = $res['m'] . ',' . $res['t'] . ',' . $res['w'] . ',' . $res['th'] . ',' . $res['f'];
// $days_array = explode(',',$days);
// foreach ($days_array as $day) {
//     if ($day == 1) {
//         echo 'true <br>';
//         $conflict = true;
        
//     }else{
//         echo 'false <br>';
//     }
// }


// $days_array = explode(' ',$days);

// foreach ($days_array as $day) {
//     echo $day."<br>";

//     $total = $res['time_start'];
// }


// $time1 = new DateTime('9:00:00');
// $time2 = new DateTime('9:00:00');
// $start = $time1->modify('-1 minutes');
// $end = $time2->modify('+1 minutes');
//     echo  $t = $start->format('H:i:s');
//     echo  $e = $end->format('H:i:s');

// $days = $res['day'];
// $days_array = explode(' ', $days);

// // AND classid != '173

//     // Check for conflicts in the schedule
//     $conflict = false;
//     foreach($days_array as $day) {
//         $sql = mysqli_query($con,"SELECT * FROM classsched WHERE (course_year_section like '%BSIT-4a%' OR fname Like '%jester%' OR room_name like '%room1%') AND day like '%day%' AND CAST(time_start as time) >= '7:59:00' AND CAST(time_end as time) < '9:01:00' and classid !='173'");
//         $result2 = mysqli_num_rows($sql);
//         if ( $result2 > 0) {
//             // There is a conflict, do not update the schedule
//             $conflict = true;
//             break;
//         }
//     }
//     if ($conflict) {
//         echo "Error: Schedule conflict";
//     } else {
//         echo "true";
// }


                                                                // $query5 = mysqli_query($con,"SELECT * FROM classsched WHERE m='1' AND course_year_section ='$course_year_section' and semester='$semester' and sy='$sy'") or die("Cannot Connect to Database".mysqli_connect_error());
                                                                // $query6 = mysqli_query($con,"SELECT * FROM classsched WHERE t='1' AND course_year_section ='$course_year_section' and semester='$semester' and sy='$sy'") or die("Cannot Connect to Database".mysqli_connect_error());
                                                                // $query7 = mysqli_query($con,"SELECT * FROM classsched WHERE w='1' AND  course_year_section ='$course_year_section' and semester='$semester' and sy='$sy'") or die("Cannot Connect to Database".mysqli_connect_error());
                                                                // $query8 = mysqli_query($con,"SELECT * FROM classsched WHERE th='1' AND course_year_section ='$course_year_section' and semester='$semester' and sy='$sy'") or die("Cannot Connect to Database".mysqli_connect_error());
                                                                // $query9 = mysqli_query($con,"SELECT * FROM classsched WHERE f='1' AND  course_year_section ='$course_year_section' and semester='$semester' and sy='$sy'") or die("Cannot Connect to Database".mysqli_connect_error());
                                
                                                                // $query10 = mysqli_query($con,"SELECT * FROM classsched WHERE m='1' AND  room_name='$room_name' and semester='$semester' and sy='$sy'") or die("Cannot Connect to Database".mysqli_connect_error());
                                                                // $query11 = mysqli_query($con,"SELECT * FROM classsched WHERE t='1' AND room_name='$room_name' and semester='$semester' and sy='$sy'") or die("Cannot Connect to Database".mysqli_connect_error());
                                                                // $query12 = mysqli_query($con,"SELECT * FROM classsched WHERE w='1' AND room_name='$room_name' and semester='$semester' and sy='$sy'") or die("Cannot Connect to Database".mysqli_connect_error());
                                                                // $query13 = mysqli_query($con,"SELECT * FROM classsched WHERE th='1' AND room_name='$room_name' and semester='$semester' and sy='$sy'") or die("Cannot Connect to Database".mysqli_connect_error());
                                                                // $query14 = mysqli_query($con,"SELECT * FROM classsched WHERE f='1' AND  room_name='$room_name' and semester='$semester' and sy='$sy'") or die("Cannot Connect to Database".mysqli_connect_error());
                                
                                                                // $query15 = mysqli_query($con,"SELECT * FROM classsched WHERE m='1' AND fname like '%$fname%' and semester='$semester' and sy='$sy'") or die("Cannot Connect to Database".mysqli_connect_error());
                                                                // $query16 = mysqli_query($con,"SELECT * FROM classsched WHERE t='1' AND fname like '%$fname%' and semester='$semester' and sy='$sy'") or die("Cannot Connect to Database".mysqli_connect_error());
                                                                // $query17 = mysqli_query($con,"SELECT * FROM classsched WHERE w='1' AND fname like '%$fname%' and semester='$semester' and sy='$sy'") or die("Cannot Connect to Database".mysqli_connect_error());
                                                                // $query18 = mysqli_query($con,"SELECT * FROM classsched WHERE th='1' AND fname like '%$fname%' and semester='$semester' and sy='$sy'") or die("Cannot Connect to Database".mysqli_connect_error());
                                                                // $query19 = mysqli_query($con,"SELECT * FROM classsched WHERE f='1' AND fname like '%$fname%' and semester='$semester' and sy='$sy'") or die("Cannot Connect to Database".mysqli_connect_error());
                                                                
                                
                                                                // $count5=mysqli_fetch_array($query5);
                                                                // $count6=mysqli_fetch_array($query6);
                                                                // $count7=mysqli_fetch_array($query7);
                                                                // $count8=mysqli_fetch_array($query8);
                                                                // $count9=mysqli_fetch_array($query9);
                                
                                                                // $count10=mysqli_fetch_array($query10);
                                                                // $count11=mysqli_fetch_array($query11);
                                                                // $count12=mysqli_fetch_array($query12);
                                                                // $count13=mysqli_fetch_array($query13);
                                                                // $count14=mysqli_fetch_array($query14);
                                
                                                                // $count15=mysqli_fetch_array($query15);
                                                                // $count16=mysqli_fetch_array($query16);
                                                                // $count17=mysqli_fetch_array($query17);
                                                                // $count18=mysqli_fetch_array($query18);
                                                                // $count19=mysqli_fetch_array($query19);
                                                                
                                

                                                                
                                                                //         if($count5['time_start'] = $time_start){
                                                                //             echo "<script>alert('Conflict on Monday schedule of $course_year_section please review the schedules');</script>";
                                                                //             }
                                                                //             elseif($count6['time_start'] = $time_start){
                                                                //                 echo "<script>alert('Conflict on Tuesday schedule $course_year_section please review the schedules');</script>";
                                                                //                 }
                                                                //                 elseif($count7['time_start'] = $time_start){
                                                                //                     echo "<script>alert('Conflict on Wednesday day schedule $course_year_section  please review the schedules');</script>";
                                                                //                     }
                                                                //                     elseif($count8['time_start'] = $time_start){
                                                                //                         echo "<script>alert('Conflict on Thursday day schedule $course_year_section  please review the schedules');</script>";
                                                                //                         }
                                                                //                         elseif($count9['time_start'] = $time_start){
                                                                //                             echo "<script>alert('Conflict on Friday schedule $course_year_section  please review the schedules');</script>";
                                                                //                             }
                                                                //                             elseif($count10['time_start'] = $time_start){
                                                                //                                 echo "<script>alert('Conflict on Tuesday schedule $room_name please review the schedules');</script>";
                                                                //                                 }
                                                                //                                 elseif($count11['time_start'] = $time_start){
                                                                //                                     echo "<script>alert('Conflict on Wednesday day schedule $room_name  please review the schedules');</script>";
                                                                //                                     }
                                                                //                                     elseif($count12['time_start'] = $time_start){
                                                                //                                         echo "<script>alert('Conflict on Thursday day schedule $room_name  please review the schedules');</script>";
                                                                //                                         }
                                                                //                                         elseif($count13['time_start'] = $time_start){
                                                                //                                             echo "<script>alert('Conflict on Friday schedule $room_name  please review the schedules');</script>";
                                                                //                                             }
                                                                //                                             elseif($count14['time_start'] = $time_start){
                                                                //                                                 echo "<script>alert('Conflict on Friday schedule $room_name  please review the schedules');</script>";
                                                                //                                                 }
                                                                //                                                 elseif($count15['time_start'] = $time_start){
                                                                //                                                     echo "<script>alert('Conflict on Friday schedule $fname  please review the schedules');</script>";
                                                                //                                                     }
                                                                //                                                     elseif($count16['time_start'] = $time_start){
                                                                //                                                         echo "<script>alert('Conflict on Tuesday schedule $fname please review the schedules');</script>";
                                                                //                                                         }
                                                                //                                                         elseif($count17['time_start'] = $time_start){
                                                                //                                                             echo "<script>alert('Conflict on Wednesday day schedule $fname  please review the schedules');</script>";
                                                                //                                                             }
                                                                //                                                             elseif($count18['time_start'] = $time_start){
                                                                //                                                                 echo "<script>alert('Conflict on Thursday day schedule $fname  please review the schedules');</script>";
                                                                //                                                                 }
                                                                //                                                                 elseif($count19['time_start'] = $time_start){
                                                                //                                                                     echo "<script>alert('Conflict on Friday schedule $fname  please review the schedules');</script>";
                                                                //                                                                     }




?>