<?php
  $hname = 'localhost';
  $uname = 'root';
  $pass = '';
  $db = 'psuscd';

  $con = mysqli_connect($hname,$uname,$pass,$db);


  if(!$con){
    die("Cannot Connect to Database".mysqli_connect_error());
  }



  function select($sql,$values,$datatypes)
  {
    $con = $GLOBALS['con'];
    if($stmt = mysqli_prepare($con,$sql))
    {
      mysqli_stmt_bind_param($stmt,$datatypes,...$values);
      if(mysqli_stmt_execute($stmt)){
        $res = mysqli_stmt_get_result($stmt);
        mysqli_stmt_close($stmt);
        return $res;
      }
      else{
        mysqli_stmt_close($stmt);
        die("Query cannot be executed - Select");
      }
    }
    else{
      die("Query cannot be prepared - Select");
    }
  }

  function filteration($data){
    foreach($data as $key => $value){
      $value = trim($value);
      $value = stripslashes($value);
      $value = strip_tags($value);
      $value = htmlspecialchars($value);
      $data[$key] = $value;
    }
    return $data;
  }

  function desiredTime($time_start,$time_end){
    $start = "07:59:00";
    $end = "17:01:00";
    
    $time1 = strtotime($time_start);
    $time2 = strtotime($time_end);
    
    $start = strtotime($start);
    $end = strtotime($end);
    
    if ($time2 >= $start && $time1 <= $end) {
        // time is within the desired ranges
        return 0;
    } else {
        // time is not within the desired ranges
        return 1;
    }

}


function checkLunch_time($time_start,$time_end){
  $start = "11:59:00";
  $end = "12:59:00";
  
  $time1 = strtotime($time_start);
  $time2 = strtotime($time_end);
  
  $start = strtotime($start);
  $end = strtotime($end);
  
  if ($time2 >= $start && $time1 <= $end) {
      // time is within the desired ranges
      return 1;
  } else {
      // time is not within the desired ranges
      return 0;
  }

}

function checkTime($time_start,$time_end)
{
$start = strtotime($time_start);
$end = strtotime($time_end);
if ($start-$end >= 0)
    return 1;
else
return 0;
}
?>
