<?php
include('../../includes/connect.php');
include('../../includes/essentials.php');
adminLogin();
$get_id=$_GET['id'];

mysqli_query($con,"delete from subject where subjectid='$get_id'")or die("Cannot Connect to Database".mysqli_connect_error());
header('location:../../subject.php');
?>
