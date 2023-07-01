<?php
include('../../includes/connect.php');
include('../../includes/essentials.php');
adminLogin();
$get_id=$_GET['id'];

mysqli_query($con,"delete from teachers where teachid='$get_id'")or die("Cannot Connect to Database".mysqli_connect_error());
header('location:../../teachers.php');
?>
