<?php
include('../../includes/connect.php');
include('../../includes/essentials.php');
adminLogin();

$get_id=$_GET['id'];

$query = mysqli_query($con,"SELECT * FROM classsched")
or die("Cannot Connect to Database".mysqli_connect_error());
$row = mysqli_fetch_array($query);

$sem = $row['semester'];

mysqli_query($con,"update classsched set status='unchecked', semester='$sem (Archived)'")or die("Cannot Connect to Database".mysqli_connect_error());
header('location:../../schedule.php');
?>