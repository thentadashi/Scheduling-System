<?php
include('../../includes/connect.php');
include('../../includes/essentials.php');

$get_id=$_GET['id'];

mysqli_query($con,"delete from classsched where semester like '%archive%'")or die("Cannot Connect to Database".mysqli_connect_error());
header('location:../../archive.php');
?>