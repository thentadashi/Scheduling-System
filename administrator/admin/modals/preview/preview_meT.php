<?php include('../../includes/connect.php') ?>
<?php include('../../includes/essentials.php') ?>
		
		<?php 
 if (isset($_POST['preview']))



 
$fname = $_POST['fname'];
$semester=$_POST['semester'];
$sy=$_POST['sy'];

$search_query_all=mysqli_query($con,"select * from classsched where fname like '%$fname%' and semester like '%$semester%' and sy like '%$sy%'")or die("Cannot Connect to Database".mysqli_connect_error());
$search_query=mysqli_query($con,"select * from classsched where fname like '%$fname%' and day='MWF'  and semester like '%$semester%' and sy like '%$sy%'")or die("Cannot Connect to Database".mysqli_connect_error());
$search_query2=mysqli_query($con,"select * from classsched where fname like '%$fname%' and day='TTh'  and semester like '%$semester%' and sy like '%$sy%'")or die("Cannot Connect to Database".mysqli_connect_error());
$search_query1=mysqli_query($con,"select * from classsched where fname like '%$fname%' and semester like '%$semester%' and sy like '%$sy%'")or die("Cannot Connect to Database".mysqli_connect_error());
$count=mysqli_num_rows($search_query);
$count2=mysqli_num_rows($search_query2);
$row=mysqli_fetch_assoc($search_query1);
$row_all=mysqli_fetch_assoc($search_query_all);


$id=isset($row_all['classid']) ? ($row_all['classid']) : '';
?>

<header>
<link rel="stylesheet" type="text/css" href="link1.css">
<link rel="stylesheet" type="text/css" href="link2.css">
<link rel="stylesheet" type="text/css" href="link3.css">
<link rel="stylesheet" type="text/css" href="link4.css">
<link rel="stylesheet" type="text/css" href="link5.css">
<link rel="stylesheet" type="text/css" href="link6.css">
<link rel="stylesheet" type="text/css" href="link7.css">

<style>
/* #foot{
margin-left:100px;
}
#btn{
background-color:#f5f5f5;
}

#btn1{
background-color:#65ff94;
} */


</style>
</header>

            <!-- <div class="row col-12" style="padding-left:20px;margin-bottom:5px;width:100%;">
                <div>
                    <img src="../../../assets/img/Pangasinan_State_University_logo.png" style="height:40px; margin:2px;" alt="logo" /> 
                </div>
                <div col-6>
                    <p style="font-size: small;margin-top:5px;margin-left:5px;">Pangasinan State University</p>
                    <p style="font-size: small;margin-top:-4px;margin-left:8px;">Asingan Campus</p>
                </div>
            </div> -->


                
            
    <!-- <div style="position:absolute;opacity:.1;">
        <img src="../../../assets/img/Pangasinan_State_University_logo.png"  style="padding-left:610px;padding-top:150px; height:450px;">
    </div> -->
    <div class="table100 ver1 m-b-20">
        <table ata-vertable="ver1" border="1" height="500">
            <thead>
                <th style="background-color:white;" width="10%">
                    <div>
                        <center><img src="../../../assets/img/Pangasinan_State_University_logo.png" style="height:40px; margin:2px;" alt="logo" />  <center>
                    </div>
                    <td colspan="6"> 
                        <center><h3 style="margin: 0 0 0 -110px;">Class Schedule</h3></center>
                        <center> <p style="margin: 0 0 0 -110px;">Pangasinan State University</p></center>
                    </td>
                </th>
                <tr class="row100 head" height="20">
                    <th class="" colspan="7"  style="background-color:white;color:black;text-transform: none;margin-top:0px"><p><center>Faculty Name :&nbsp;&nbsp;&nbsp;&nbsp; <b><?php echo $fname?></b> , &nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $semester?></b>&nbsp; Semester,&nbsp;&nbsp;&nbsp;&nbsp; S.Y &nbsp;<b><?php echo $sy?>,&nbsp;&nbsp;&nbsp;&nbsp;</b> Asingan Campus</p></center></th>
                </tr>
                <tr class="row100 head">
                <th class="column50 column2">time_start</th>
                <th class="column100 column2">Monday</th>
                <th class="column100 column3">Tuesday</th>
                <th class="column100 column4">Wednesday</th>
                <th class="column100 column5">Thursday</th>
                <th class="column100 column6">Friday</th>
                <th class="column100 column6">Saturday</th>
                </tr>
            </thead>
            <tbody>
  <?php
$search_rows=mysqli_fetch_array($search_query);

?>

    
        <!-- first row by tosh-->

    <tr class="row100">
        
        <td class="column50 column9">
            
                <b>8:00am-9:00am</b>
            
	    </td>
        
        <!-- first row Monday 8:00 - 9:00 by tosh-->
        <td class="column100 column9">
	        
            <?php 
                $result=mysqli_query($con,"select * from classsched where fname like '%$fname%' and semester like '%$semester%' and sy like '%$sy%' and day like '%Monday%'  and CAST(time_start as time) >= '7:59:00' AND CAST(time_end as time) < '09:01:00';")
                or die("Cannot Connect to Database".mysqli_connect_error());
                $row=mysqli_fetch_array($result);
                    if($row > 0)
                    {
                        if ($row['status'] != 'unchecked') {
                            echo "<div class='text-dark font-10'><small>" . $row['subject_code'] . "</small></div>";
                            echo "<div class='text-info'><small>Ins. - " . $row['fname'] . "</small>&nbsp;&nbsp;&nbsp;<small class='text-primary'>( " . $row['room_name'] . " )</small></div>";
                        }
                    }
             ?>
	        
	    </td>
        <!-- first row tuesday 8:00 - 9:00 by tosh-->
	    <td class="column100 column3">
	  	   
	       <?php 
                $result1=mysqli_query($con,"select * from classsched where fname like '%$fname%' and semester like '%$semester%' and sy like '%$sy%'  and day like '%Tuesday%' and CAST(time_start as time) >= '7:59:00' AND CAST(time_end as time) < '09:01:00'")or die("Cannot Connect to Database".mysqli_connect_error());
                $row=mysqli_fetch_array($result1);
                    if($row > 0)
                    {
                        if ($row['status'] != 'unchecked') {
                            echo "<div class='text-dark font-10'><small>" . $row['subject_code'] . "</small></div>";
                            echo "<div class='text-info'><small>Ins. - " . $row['fname'] . "</small>&nbsp;&nbsp;&nbsp;<small class='text-primary'>( " . $row['room_name'] . " )</small></div>";
                        }
                    }
            ?>
	        
	    </td>
        <!-- first row wednesday 8:00 - 9:00 by tosh-->
	    <td class="column100 column4">
	  	   
		  <?php 
                $result1=mysqli_query($con,"select * from classsched where fname like '%$fname%' and semester like '%$semester%' and sy like '%$sy%'  and day like '%Wednesday%' and CAST(time_start as time) >= '7:59:00' AND CAST(time_end as time) < '09:01:00'")or die("Cannot Connect to Database".mysqli_connect_error());
                $row=mysqli_fetch_array($result1);
                    if($row > 0)
                    {
                        if ($row['status'] != 'unchecked') {
                            echo "<div class='text-dark font-10'><small>" . $row['subject_code'] . "</small></div>";
                            echo "<div class='text-info'><small>Ins. - " . $row['fname'] . "</small>&nbsp;&nbsp;&nbsp;<small class='text-primary'>( " . $row['room_name'] . " )</small></div>";
                        }
                    }
                ?>
        
        </td>
	    <!-- first row thursday 8:00 - 9:00 by tosh-->
        <td class="column100 column9">
                <?php 
                    $result1=mysqli_query($con,"select * from classsched where fname like '%$fname%' and semester like '%$semester%' and sy like '%$sy%'  and day like '%Thursday%' and CAST(time_start as time) >= '7:59:00' AND CAST(time_end as time) < '09:01:00'")or die("Cannot Connect to Database".mysqli_connect_error());
                    $row=mysqli_fetch_array($result1);
                    if($row > 0)
                    {
                        if ($row['status'] != 'unchecked') {
                            echo "<div class='text-dark font-10'><small>" . $row['subject_code'] . "</small></div>";
                            echo "<div class='text-info'><small>Ins. - " . $row['fname'] . "</small>&nbsp;&nbsp;&nbsp;<small class='text-primary'>( " . $row['room_name'] . " )</small></div>";
                        }
                    }
                    ?>
		    
		</td>
	    <!-- first row friday 8:00 - 9:00 by tosh-->
        <td class="column100 column6">
		    
                <?php 
                    $result=mysqli_query($con,"select * from classsched where fname like '%$fname%' and semester like '%$semester%' and sy like '%$sy%'  and day like '%Friday%' and CAST(time_start as time) >= '7:59:00' AND CAST(time_end as time) < '09:01:00'")or die("Cannot Connect to Database".mysqli_connect_error());
                    $row=mysqli_fetch_array($result);
                    if($row > 0)
                    {
                        if ($row['status'] != 'unchecked') {
                            echo "<div class='text-dark font-10'><small>" . $row['subject_code'] . "</small></div>";
                            echo "<div class='text-info'><small>Ins. - " . $row['fname'] . "</small>&nbsp;&nbsp;&nbsp;<small class='text-primary'>( " . $row['room_name'] . " )</small></div>";
                        }
                    }
                ?>
	        
		</td>
        <td class="column100 column9">
        
        </td>

	</tr>
	  
        <!-- second row by tosh-->
	<tr class="row100">
        <td class="column50 column9">
            
                <b>9:00am - 10:00am</b>
            
        </td>
        <!-- 2 row Monday 9:00am - 10:00am by tosh-->
        <td class="column100 column5">
	        
            <?php 
                $result=mysqli_query($con,"select * from classsched where fname like '%$fname%' and semester like '%$semester%' and sy like '%$sy%' and day like '%Monday%' and CAST(time_start as time) >= '8:59:00'  AND CAST(time_end as time) < '10:01:00'")
                or die("Cannot Connect to Database".mysqli_connect_error());
                $row=mysqli_fetch_array($result);
                    if($row > 0)
                    {
                        if ($row['status'] != 'unchecked') {
                            echo "<div class='text-dark font-10'><small>" . $row['subject_code'] . "</small></div>";
                            echo "<div class='text-info'><small>Ins. - " . $row['fname'] . "</small>&nbsp;&nbsp;&nbsp;<small class='text-primary'>( " . $row['room_name'] . " )</small></div>";
                        }
                    }
             ?>
	        
	    </td>
        <!-- 2 row tuesday 9:00am - 10:00am by tosh-->
	    <td class="column100 column5">
	  	   
	       <?php 
                $result1=mysqli_query($con,"select * from classsched where fname like '%$fname%' and semester like '%$semester%' and sy like '%$sy%'  and day like '%Tuesday%' and CAST(time_start as time) >= '8:59:00'  AND CAST(time_end as time) < '10:01:00'")or die("Cannot Connect to Database".mysqli_connect_error());
                $row=mysqli_fetch_array($result1);
                    if($row > 0)
                    {
                        if ($row['status'] != 'unchecked') {
                            echo "<div class='text-dark font-10'><small>" . $row['subject_code'] . "</small></div>";
                            echo "<div class='text-info'><small>Ins. - " . $row['fname'] . "</small>&nbsp;&nbsp;&nbsp;<small class='text-primary'>( " . $row['room_name'] . " )</small></div>";
                        }
                    }
            ?>
	        
	    </td>
        <!-- 2 row wednesday 9:00am - 10:00am by tosh-->
	    <td class="column100 column5">
	  	   
		  <?php 
                $result1=mysqli_query($con,"select * from classsched where fname like '%$fname%' and semester like '%$semester%' and sy like '%$sy%'  and day like '%Wednesday%' and CAST(time_start as time) >= '8:59:00'  AND CAST(time_end as time) < '10:01:00'")or die("Cannot Connect to Database".mysqli_connect_error());
                $row=mysqli_fetch_array($result1);
                    if($row > 0)
                    {
                        if ($row['status'] != 'unchecked') {
                            echo "<div class='text-dark font-10'><small>" . $row['subject_code'] . "</small></div>";
                            echo "<div class='text-info'><small>Ins. - " . $row['fname'] . "</small>&nbsp;&nbsp;&nbsp;<small class='text-primary'>( " . $row['room_name'] . " )</small></div>";
                        }
                    }
                ?>
        
        </td>
	    <!-- 2 row thursday 9:00am - 10:00am by tosh-->
        <td class="column100 column9">
		    
                <?php 
                    $result1=mysqli_query($con,"select * from classsched where fname like '%$fname%' and semester like '%$semester%' and sy like '%$sy%'  and day like '%Thursday%' and CAST(time_start as time) >= '8:59:00'  AND CAST(time_end as time) < '10:01:00'")or die("Cannot Connect to Database".mysqli_connect_error());
                    $row=mysqli_fetch_array($result1);
                    if($row > 0)
                    {
                        if ($row['status'] != 'unchecked') {
                            echo "<div class='text-dark font-10'><small>" . $row['subject_code'] . "</small></div>";
                            echo "<div class='text-info'><small>Ins. - " . $row['fname'] . "</small>&nbsp;&nbsp;&nbsp;<small class='text-primary'>( " . $row['room_name'] . " )</small></div>";
                        }
                    }
                    ?>
		    
		</td>
	    <!-- 2 row friday 9:00am - 10:00am by tosh-->
        <td class="column100 column5">
		    
                <?php 
                    $result=mysqli_query($con,"select * from classsched where fname like '%$fname%' and semester like '%$semester%' and sy like '%$sy%'  and day like '%Friday%' and CAST(time_start as time) >= '8:59:00'  AND CAST(time_end as time) < '10:01:00'")or die("Cannot Connect to Database".mysqli_connect_error());
                    $row=mysqli_fetch_array($result);
                    if($row > 0)
                    {
                        if ($row['status'] != 'unchecked') {
                            echo "<div class='text-dark font-10'><small>" . $row['subject_code'] . "</small></div>";
                            echo "<div class='text-info'><small>Ins. - " . $row['fname'] . "</small>&nbsp;&nbsp;&nbsp;<small class='text-primary'>( " . $row['room_name'] . " )</small></div>";
                        }
                    }
                ?>
	        
		</td>
        <td class="column100 column9">
        
        </td>


	  </tr>
	  
	  
        <!-- 3rd row by tosh-->
        <tr class="row100">
        <td class="column50 column9">
            
                <b>10:00am - 11:00am</b>
            
        </td>
        <!-- 3rd row Monday 10:00am - 11:00am by tosh-->
        <td class="column100 column5">
	        
            <?php 
                $result=mysqli_query($con,"select * from classsched where fname like '%$fname%' and semester like '%$semester%' and sy like '%$sy%' and day like '%Monday%'  and CAST(time_start as time) >= '9:59:00' AND CAST(time_end as time) < '011:01:00'")
                or die("Cannot Connect to Database".mysqli_connect_error());
                $row=mysqli_fetch_array($result);
                    if($row > 0)
                    {
                        if ($row['status'] != 'unchecked') {
                            echo "<div class='text-dark font-10'><small>" . $row['subject_code'] . "</small></div>";
                            echo "<div class='text-info'><small>Ins. - " . $row['fname'] . "</small>&nbsp;&nbsp;&nbsp;<small class='text-primary'>( " . $row['room_name'] . " )</small></div>";
                        }
                    }
             ?>
	        
	    </td>
        <!-- 3rd row tuesday 10:00am - 11:00am by tosh-->
	    <td class="column100 column5">
	  	   
	       <?php 
                $result1=mysqli_query($con,"select * from classsched where fname like '%$fname%' and semester like '%$semester%' and sy like '%$sy%'  and day like '%Tuesday%' and CAST(time_start as time) >= '9:59:00' AND CAST(time_end as time) < '011:01:00'")or die("Cannot Connect to Database".mysqli_connect_error());
                $row=mysqli_fetch_array($result1);
                    if($row > 0)
                    {
                        if ($row['status'] != 'unchecked') {
                            echo "<div class='text-dark font-10'><small>" . $row['subject_code'] . "</small></div>";
                            echo "<div class='text-info'><small>Ins. - " . $row['fname'] . "</small>&nbsp;&nbsp;&nbsp;<small class='text-primary'>( " . $row['room_name'] . " )</small></div>";
                        }
                    }
            ?>
	        
	    </td>
        <!-- 3rd row wednesday 10:00am - 11:00am by tosh-->
	    <td class="column100 column5">
	  	   
		  <?php 
                $result1=mysqli_query($con,"select * from classsched where fname like '%$fname%' and semester like '%$semester%' and sy like '%$sy%'  and day like '%Wednesday%' and CAST(time_start as time) >= '9:59:00' AND CAST(time_end as time) < '011:01:00'")or die("Cannot Connect to Database".mysqli_connect_error());
                $row=mysqli_fetch_array($result1);
                    if($row > 0)
                    {
                        if ($row['status'] != 'unchecked') {
                            echo "<div class='text-dark font-10'><small>" . $row['subject_code'] . "</small></div>";
                            echo "<div class='text-info'><small>Ins. - " . $row['fname'] . "</small>&nbsp;&nbsp;&nbsp;<small class='text-primary'>( " . $row['room_name'] . " )</small></div>";
                        }
                    }
                ?>
        
        </td>
	    <!-- 3rd row thursday 10:00am - 11:00am by tosh-->
        <td class="column100 column9">
		    
                <?php 
                    $result1=mysqli_query($con,"select * from classsched where fname like '%$fname%' and semester like '%$semester%' and sy like '%$sy%'  and day like '%Thursday%' and CAST(time_start as time) >= '9:59:00' AND CAST(time_end as time) < '011:01:00'")or die("Cannot Connect to Database".mysqli_connect_error());
                    $row=mysqli_fetch_array($result1);
                    if($row > 0)
                    {
                        if ($row['status'] != 'unchecked') {
                            echo "<div class='text-dark font-10'><small>" . $row['subject_code'] . "</small></div>";
                            echo "<div class='text-info'><small>Ins. - " . $row['fname'] . "</small>&nbsp;&nbsp;&nbsp;<small class='text-primary'>( " . $row['room_name'] . " )</small></div>";
                        }
                    }
                    ?>
		    
		</td>
	    <!-- first row friday 10:00am - 11:00am by tosh-->
        <td class="column100 column5">
		    
                <?php 
                    $result=mysqli_query($con,"select * from classsched where fname like '%$fname%' and semester like '%$semester%' and sy like '%$sy%'  and day like '%Friday%' and CAST(time_start as time) >= '9:59:00' AND CAST(time_end as time) < '011:01:00'")or die("Cannot Connect to Database".mysqli_connect_error());
                    $row=mysqli_fetch_array($result);
                    if($row > 0)
                    {
                        if ($row['status'] != 'unchecked') {
                            echo "<div class='text-dark font-10'><small>" . $row['subject_code'] . "</small></div>";
                            echo "<div class='text-info'><small>Ins. - " . $row['fname'] . "</small>&nbsp;&nbsp;&nbsp;<small class='text-primary'>( " . $row['room_name'] . " )</small></div>";
                        }
                    }
                ?>
	        
		</td>
        <td class="column100 column9">
        
        </td>


	  </tr>
	  
	  
        <!-- 4th row by 11:00 - 12:00 tosh-->
        <tr class="row100">
        <td class="column50 column9">
            
                <b>11:00am - 12:00am</b>
            
        </td>
        <!-- 4th row by 11:00 - 12:00 by tosh-->
        <td class="column100 column5">
	        
            <?php 
                $result=mysqli_query($con,"select * from classsched where fname like '%$fname%' and semester like '%$semester%' and sy like '%$sy%' and day like '%Monday%'  and CAST(time_start as time) >= '10:59:00' AND CAST(time_end as time) < '012:01:00'")
                or die("Cannot Connect to Database".mysqli_connect_error());
                $row=mysqli_fetch_array($result);
                    if($row > 0)
                    {
                        if ($row['status'] != 'unchecked') {
                            echo "<div class='text-dark font-10'><small>" . $row['subject_code'] . "</small></div>";
                            echo "<div class='text-info'><small>Ins. - " . $row['fname'] . "</small>&nbsp;&nbsp;&nbsp;<small class='text-primary'>( " . $row['room_name'] . " )</small></div>";
                        }
                    }
             ?>
	        
	    </td>
        <!-- 4th row by 11:00 - 12:00  by tosh-->
	    <td class="column100 column5">
	  	   
	       <?php 
                $result1=mysqli_query($con,"select * from classsched where fname like '%$fname%' and semester like '%$semester%' and sy like '%$sy%'  and day like '%Tuesday%' and CAST(time_start as time) >= '10:59:00' AND CAST(time_end as time) < '012:01:00'")or die("Cannot Connect to Database".mysqli_connect_error());
                $row=mysqli_fetch_array($result1);
                    if($row > 0)
                    {
                        if ($row['status'] != 'unchecked') {
                            echo "<div class='text-dark font-10'><small>" . $row['subject_code'] . "</small></div>";
                            echo "<div class='text-info'><small>Ins. - " . $row['fname'] . "</small>&nbsp;&nbsp;&nbsp;<small class='text-primary'>( " . $row['room_name'] . " )</small></div>";
                        }
                    }
            ?>
	        
	    </td>
        <!-- 4th row by 11:00 - 12:00 by tosh-->
	    <td class="column100 column5">
	  	   
		  <?php 
                $result1=mysqli_query($con,"select * from classsched where fname like '%$fname%' and semester like '%$semester%' and sy like '%$sy%'  and day like '%Wednesday%' and CAST(time_start as time) >= '10:59:00' AND CAST(time_end as time) < '012:01:00'")or die("Cannot Connect to Database".mysqli_connect_error());
                $row=mysqli_fetch_array($result1);
                    if($row > 0)
                    {
                        if ($row['status'] != 'unchecked') {
                            echo "<div class='text-dark font-10'><small>" . $row['subject_code'] . "</small></div>";
                            echo "<div class='text-info'><small>Ins. - " . $row['fname'] . "</small>&nbsp;&nbsp;&nbsp;<small class='text-primary'>( " . $row['room_name'] . " )</small></div>";
                        }
                    }
                ?>
        
        </td>
	    <!-- 4th row by 11:00 - 12:00  by tosh-->
        <td class="column100 column9">
		    
                <?php 
                    $result1=mysqli_query($con,"select * from classsched where fname like '%$fname%' and semester like '%$semester%' and sy like '%$sy%'  and day like '%Thursday%' and CAST(time_start as time) >= '10:59:00' AND CAST(time_end as time) < '012:01:00'")or die("Cannot Connect to Database".mysqli_connect_error());
                    $row=mysqli_fetch_array($result1);
                    if($row > 0)
                    {
                        if ($row['status'] != 'unchecked') {
                            echo "<div class='text-dark font-10'><small>" . $row['subject_code'] . "</small></div>";
                            echo "<div class='text-info'><small>Ins. - " . $row['fname'] . "</small>&nbsp;&nbsp;&nbsp;<small class='text-primary'>( " . $row['room_name'] . " )</small></div>";
                        }
                    }
                    ?>
		    
		</td>
	    <!-- 4th row by 11:00 - 12:00  by tosh-->
        <td class="column100 column5">
		    
                <?php 
                    $result=mysqli_query($con,"select * from classsched where fname like '%$fname%' and semester like '%$semester%' and sy like '%$sy%'  and day like '%Friday%' and CAST(time_start as time) >= '10:59:00' AND CAST(time_end as time) < '012:01:00'")or die("Cannot Connect to Database".mysqli_connect_error());
                    $row=mysqli_fetch_array($result);
                    if($row > 0)
                    {
                        if ($row['status'] != 'unchecked') {
                            echo "<div class='text-dark font-10'><small>" . $row['subject_code'] . "</small></div>";
                            echo "<div class='text-info'><small>Ins. - " . $row['fname'] . "</small>&nbsp;&nbsp;&nbsp;<small class='text-primary'>( " . $row['room_name'] . " )</small></div>";
                        }
                    }
                ?>
	        
		</td>
        <td class="column100 column9">
        
        </td>


	  </tr> 
        
	  <!-- lunch -->
	  <tr class="row100" style="background-color:#ffe7a8;">
            <td class="column50 column9">
                        <b>12:00am - 1:00pm</b>
            </td>
            <td class="column50 column9">
            <b>L</b>
            </td>
            <td class="column50 column9">
            <b>U</b>
            </td>
            <td class="column50 column9">
            <b>N</b>
            </td>
            <td class="column50 column9">
            <b>C</b>
            </td>
            <td class="column50 column9">
            <b>H</b>
            </td>
            <td class="column100 column9">
            <b>BREAK</b>
        </td>
      </tr>
	  
	  
        <!-- 5ft row 1:00pm - 2:00pm by tosh-->
        <tr class="row100">
        <td class="column50 column9">
            
                <b>1:00pm - 2:00pm</b>
            
        </td>
        <!-- 5ft row 1:00pm - 2:00pm by tosh-->
        <td class="column100 column5">
	        
            <?php 
                $result=mysqli_query($con,"select * from classsched where fname like '%$fname%' and semester like '%$semester%' and sy like '%$sy%' and day like '%Monday%'  and CAST(time_start as time) >= '12:59:00' AND CAST(time_end as time) < '14:01:00'")
                or die("Cannot Connect to Database".mysqli_connect_error());
                $row=mysqli_fetch_array($result);
                    if($row > 0)
                    {
                        if ($row['status'] != 'unchecked') {
                            echo "<div class='text-dark font-10'><small>" . $row['subject_code'] . "</small></div>";
                            echo "<div class='text-info'><small>Ins. - " . $row['fname'] . "</small>&nbsp;&nbsp;&nbsp;<small class='text-primary'>( " . $row['room_name'] . " )</small></div>";
                        }
                    }
             ?>
	        
	    </td>
        <!-- 5ft row 1:00pm - 2:00pm by tosh-->
	    <td class="column100 column5">
	  	   
	       <?php 
                $result1=mysqli_query($con,"select * from classsched where fname like '%$fname%' and semester like '%$semester%' and sy like '%$sy%'  and day like '%Tuesday%' and CAST(time_start as time) >= '12:59:00' AND CAST(time_end as time) < '14:01:00'")or die("Cannot Connect to Database".mysqli_connect_error());
                $row=mysqli_fetch_array($result1);
                    if($row > 0)
                    {
                        if ($row['status'] != 'unchecked') {
                            echo "<div class='text-dark font-10'><small>" . $row['subject_code'] . "</small></div>";
                            echo "<div class='text-info'><small>Ins. - " . $row['fname'] . "</small>&nbsp;&nbsp;&nbsp;<small class='text-primary'>( " . $row['room_name'] . " )</small></div>";
                        }
                    }
            ?>
	        
	    </td>
        <!-- 5ft row 1:00pm - 2:00pm by tosh-->
	    <td class="column100 column5">
	  	   
		  <?php 
                $result1=mysqli_query($con,"select * from classsched where fname like '%$fname%' and semester like '%$semester%' and sy like '%$sy%'  and day like '%Wednesday%' and CAST(time_start as time) >= '12:59:00' AND CAST(time_end as time) < '14:01:00'")or die("Cannot Connect to Database".mysqli_connect_error());
                $row=mysqli_fetch_array($result1);
                    if($row > 0)
                    {
                        if ($row['status'] != 'unchecked') {
                            echo "<div class='text-dark font-10'><small>" . $row['subject_code'] . "</small></div>";
                            echo "<div class='text-info'><small>Ins. - " . $row['fname'] . "</small>&nbsp;&nbsp;&nbsp;<small class='text-primary'>( " . $row['room_name'] . " )</small></div>";
                        }
                    }
                ?>
        
        </td>
	    <!-- 5ft row 1:00pm - 2:00pm by tosh-->
        <td class="column100 column9">
		    
                <?php 
                    $result1=mysqli_query($con,"select * from classsched where fname like '%$fname%' and semester like '%$semester%' and sy like '%$sy%'  and day like '%Thursday%' and CAST(time_start as time) >= '12:59:00' AND CAST(time_end as time) < '14:01:00'")or die("Cannot Connect to Database".mysqli_connect_error());
                    $row=mysqli_fetch_array($result1);
                    if($row > 0)
                    {
                        if ($row['status'] != 'unchecked') {
                            echo "<div class='text-dark font-10'><small>" . $row['subject_code'] . "</small></div>";
                            echo "<div class='text-info'><small>Ins. - " . $row['fname'] . "</small>&nbsp;&nbsp;&nbsp;<small class='text-primary'>( " . $row['room_name'] . " )</small></div>";
                        }
                    }
                    ?>
		    
		</td>
	    <!-- 5ft row 1:00pm - 2:00pm by tosh-->
        <td class="column100 column5">
		    
                <?php 
                    $result=mysqli_query($con,"select * from classsched where fname like '%$fname%' and semester like '%$semester%' and sy like '%$sy%'  and day like '%Friday%' and CAST(time_start as time) >= '12:59:00' AND CAST(time_end as time) < '14:01:00'")or die("Cannot Connect to Database".mysqli_connect_error());
                    $row=mysqli_fetch_array($result);
                    if($row > 0)
                    {
                        if ($row['status'] != 'unchecked') {
                            echo "<div class='text-dark font-10'><small>" . $row['subject_code'] . "</small></div>";
                            echo "<div class='text-info'><small>Ins. - " . $row['fname'] . "</small>&nbsp;&nbsp;&nbsp;<small class='text-primary'>( " . $row['room_name'] . " )</small></div>";
                        }
                    }
                ?>
	        
		</td>
        <td class="column100 column9">
        
        </td>


	  </tr>
	  
        <!-- 6th row 2:00pm - 3:00pm by tosh-->
        <tr class="row100">
        <td class="column50 column9">
            
                <b>2:00pm - 3:00pm</b>
            
        </td>
        <!-- 6th row 2:00pm - 3:00pm by tosh-->
        <td class="column100 column5">
	        
            <?php 
                $result=mysqli_query($con,"select * from classsched where fname like '%$fname%' and semester like '%$semester%' and sy like '%$sy%' and day like '%Monday%'  and CAST(time_start as time) >= '13:59:00' AND CAST(time_end as time) < '15:01:00'")
                or die("Cannot Connect to Database".mysqli_connect_error());
                $row=mysqli_fetch_array($result);
                    if($row > 0)
                    {
                        if ($row['status'] != 'unchecked') {
                            echo "<div class='text-dark font-10'><small>" . $row['subject_code'] . "</small></div>";
                            echo "<div class='text-info'><small>Ins. - " . $row['fname'] . "</small>&nbsp;&nbsp;&nbsp;<small class='text-primary'>( " . $row['room_name'] . " )</small></div>";
                        }
                    }
             ?>
	        
	    </td>
        <!-- 6th row 2:00pm - 3:00pm by tosh-->
	    <td class="column100 column5">
	  	   
	       <?php 
                $result1=mysqli_query($con,"select * from classsched where fname like '%$fname%' and semester like '%$semester%' and sy like '%$sy%'  and day like '%Tuesday%' and CAST(time_start as time) >= '13:59:00' AND CAST(time_end as time) < '15:01:00'")or die("Cannot Connect to Database".mysqli_connect_error());
                $row=mysqli_fetch_array($result1);
                    if($row > 0)
                    {
                        if ($row['status'] != 'unchecked') {
                            echo "<div class='text-dark font-10'><small>" . $row['subject_code'] . "</small></div>";
                            echo "<div class='text-info'><small>Ins. - " . $row['fname'] . "</small>&nbsp;&nbsp;&nbsp;<small class='text-primary'>( " . $row['room_name'] . " )</small></div>";
                        }
                    }
            ?>
	        
	    </td>
        <!-- 6th row 2:00pm - 3:00pm by tosh-->
	    <td class="column100 column5">
	  	   
		  <?php 
                $result1=mysqli_query($con,"select * from classsched where fname like '%$fname%' and semester like '%$semester%' and sy like '%$sy%'  and day like '%Wednesday%' and CAST(time_start as time) >= '13:59:00' AND CAST(time_end as time) < '15:01:00'")or die("Cannot Connect to Database".mysqli_connect_error());
                $row=mysqli_fetch_array($result1);
                    if($row > 0)
                    {
                        if ($row['status'] != 'unchecked') {
                            echo "<div class='text-dark font-10'><small>" . $row['subject_code'] . "</small></div>";
                            echo "<div class='text-info'><small>Ins. - " . $row['fname'] . "</small>&nbsp;&nbsp;&nbsp;<small class='text-primary'>( " . $row['room_name'] . " )</small></div>";
                        }
                    }
                ?>
        
        </td>
	    <!-- 6th row 2:00pm - 3:00pm by tosh-->
        <td class="column100 column9">
		    
                <?php 
                    $result1=mysqli_query($con,"select * from classsched where fname like '%$fname%' and semester like '%$semester%' and sy like '%$sy%'  and day like '%Thursday%' and CAST(time_start as time) >= '13:59:00' AND CAST(time_end as time) < '15:01:00'")or die("Cannot Connect to Database".mysqli_connect_error());
                    $row=mysqli_fetch_array($result1);
                    if($row > 0)
                    {
                        if ($row['status'] != 'unchecked') {
                            echo "<div class='text-dark font-10'><small>" . $row['subject_code'] . "</small></div>";
                            echo "<div class='text-info'><small>Ins. - " . $row['fname'] . "</small>&nbsp;&nbsp;&nbsp;<small class='text-primary'>( " . $row['room_name'] . " )</small></div>";
                        }
                    }
                    ?>
		    
		</td>
	    <!-- 6th row 2:00pm - 3:00pm by tosh-->
        <td class="column100 column5">
		    
                <?php 
                    $result=mysqli_query($con,"select * from classsched where fname like '%$fname%' and semester like '%$semester%' and sy like '%$sy%'  and day like '%Friday%' and CAST(time_start as time) >= '13:59:00' AND CAST(time_end as time) < '15:01:00'")or die("Cannot Connect to Database".mysqli_connect_error());
                    $row=mysqli_fetch_array($result);
                    if($row > 0)
                    {
                        if ($row['status'] != 'unchecked') {
                            echo "<div class='text-dark font-10'><small>" . $row['subject_code'] . "</small></div>";
                            echo "<div class='text-info'><small>Ins. - " . $row['fname'] . "</small>&nbsp;&nbsp;&nbsp;<small class='text-primary'>( " . $row['room_name'] . " )</small></div>";
                        }
                    }
                ?>
	        
		</td>
        <td class="column100 column9">
        
        </td>


	  </tr>
	  
        <!-- 7th row 3:00 - 4:00 by tosh-->
        <tr class="row100">
        <td class="column50 column9">
            
                <b>3:00pm - 4:00pm</b>
            
        </td>
        <!-- 7th row 3:00 - 4:00 by tosh-->
        <td class="column100 column5">
	        
            <?php 
                $result=mysqli_query($con,"select * from classsched where fname like '%$fname%' and semester like '%$semester%' and sy like '%$sy%' and day like '%Monday%'  and CAST(time_start as time) >= '14:59:00' AND CAST(time_end as time) < '16:01:00'")
                or die("Cannot Connect to Database".mysqli_connect_error());
                $row=mysqli_fetch_array($result);
                    if($row > 0)
                    {
                        if ($row['status'] != 'unchecked') {
                            echo "<div class='text-dark font-10'><small>" . $row['subject_code'] . "</small></div>";
                            echo "<div class='text-info'><small>Ins. - " . $row['fname'] . "</small>&nbsp;&nbsp;&nbsp;<small class='text-primary'>( " . $row['room_name'] . " )</small></div>";
                        }
                    }
             ?>
	        
	    </td>
        <!-- 7th row 3:00 - 4:00by tosh-->
	    <td class="column100 column5">
	  	   
	       <?php 
                $result1=mysqli_query($con,"select * from classsched where fname like '%$fname%' and semester like '%$semester%' and sy like '%$sy%'  and day like '%Tuesday%' and CAST(time_start as time) >= '14:59:00' AND CAST(time_end as time) < '16:01:00'")or die("Cannot Connect to Database".mysqli_connect_error());
                $row=mysqli_fetch_array($result1);
                    if($row > 0)
                    {
                        if ($row['status'] != 'unchecked') {
                            echo "<div class='text-dark font-10'><small>" . $row['subject_code'] . "</small></div>";
                            echo "<div class='text-info'><small>Ins. - " . $row['fname'] . "</small>&nbsp;&nbsp;&nbsp;<small class='text-primary'>( " . $row['room_name'] . " )</small></div>";
                        }
                    }
            ?>
	        
	    </td>
        <!-- 7th row 3:00 - 4:000 by tosh-->
	    <td class="column100 column5">
	  	   
		  <?php 
                $result1=mysqli_query($con,"select * from classsched where fname like '%$fname%' and semester like '%$semester%' and sy like '%$sy%'  and day like '%Wednesday%' and CAST(time_start as time) >= '14:59:00' AND CAST(time_end as time) < '16:01:00'")or die("Cannot Connect to Database".mysqli_connect_error());
                $row=mysqli_fetch_array($result1);
                    if($row > 0)
                    {
                        if ($row['status'] != 'unchecked') {
                            echo "<div class='text-dark font-10'><small>" . $row['subject_code'] . "</small></div>";
                            echo "<div class='text-info'><small>Ins. - " . $row['fname'] . "</small>&nbsp;&nbsp;&nbsp;<small class='text-primary'>( " . $row['room_name'] . " )</small></div>";
                        }
                    }
                ?>
        
        </td>
	    <!-- 7th row 3:00 - 4:00 by tosh-->
        <td class="column100 column9">
		    
                <?php 
                    $result1=mysqli_query($con,"select * from classsched where fname like '%$fname%' and semester like '%$semester%' and sy like '%$sy%'  and day like '%Thursday%' and CAST(time_start as time) >= '14:59:00' AND CAST(time_end as time) < '16:01:00'")or die("Cannot Connect to Database".mysqli_connect_error());
                    $row=mysqli_fetch_array($result1);
                    if($row > 0)
                    {
                        if ($row['status'] != 'unchecked') {
                            echo "<div class='text-dark font-10'><small>" . $row['subject_code'] . "</small></div>";
                            echo "<div class='text-info'><small>Ins. - " . $row['fname'] . "</small>&nbsp;&nbsp;&nbsp;<small class='text-primary'>( " . $row['room_name'] . " )</small></div>";
                        }
                    }
                    ?>
		    
		</td>
	    <!-- 7th row 3:00 - 4:00 by tosh-->
        <td class="column100 column5">
		    
                <?php 
                    $result=mysqli_query($con,"select * from classsched where fname like '%$fname%' and semester like '%$semester%' and sy like '%$sy%'  and day like '%Friday%' and CAST(time_start as time) >= '14:59:00' AND CAST(time_end as time) < '16:01:00'")or die("Cannot Connect to Database".mysqli_connect_error());
                    $row=mysqli_fetch_array($result);
                    if($row > 0)
                    {
                        if ($row['status'] != 'unchecked') {
                            echo "<div class='text-dark font-10'><small>" . $row['subject_code'] . "</small></div>";
                            echo "<div class='text-info'><small>Ins. - " . $row['fname'] . "</small>&nbsp;&nbsp;&nbsp;<small class='text-primary'>( " . $row['room_name'] . " )</small></div>";
                        }
                    }
                ?>
	        
		</td>
        <td class="column100 column9">
        
        </td>


	  </tr>  
	  	  
        <!-- 8th row 4:00pm - 5:00pm  by tosh-->
        <tr class="row100">
        <td class="column50 column9">
            
                <b>4:00pm - 5:00pm</b>
            
        </td>
        <!-- 8th row 4:00pm - 5:00pm by tosh-->
        <td class="column100 column5">
	        
            <?php 
                $result=mysqli_query($con,"select * from classsched where fname like '%$fname%' and semester like '%$semester%' and sy like '%$sy%' and day like '%Monday%'  and CAST(time_start as time) >= '15:59:00' AND CAST(time_end as time) < '17:01:00'")
                or die("Cannot Connect to Database".mysqli_connect_error());
                $row=mysqli_fetch_array($result);
                    if($row > 0)
                    {
                        if ($row['status'] != 'unchecked') {
                            echo "<div class='text-dark font-10'><small>" . $row['subject_code'] . "</small></div>";
                            echo "<div class='text-info'><small>Ins. - " . $row['fname'] . "</small>&nbsp;&nbsp;&nbsp;<small class='text-primary'>( " . $row['room_name'] . " )</small></div>";
                        }
                    }
             ?>
	        
	    </td>
        <!-- 8th row 4:00pm - 5:00pm by tosh-->
	    <td class="column100 column5">
	  	   
	       <?php 
                $result1=mysqli_query($con,"select * from classsched where fname like '%$fname%' and semester like '%$semester%' and sy like '%$sy%'  and day like '%Tuesday%' and CAST(time_start as time) >= '15:59:00' AND CAST(time_end as time) < '17:01:00'")or die("Cannot Connect to Database".mysqli_connect_error());
                $row=mysqli_fetch_array($result1);
                    if($row > 0)
                    {
                        if ($row['status'] != 'unchecked') {
                            echo "<div class='text-dark font-10'><small>" . $row['subject_code'] . "</small></div>";
                            echo "<div class='text-info'><small>Ins. - " . $row['fname'] . "</small>&nbsp;&nbsp;&nbsp;<small class='text-primary'>( " . $row['room_name'] . " )</small></div>";
                        }
                    }
            ?>
	        
	    </td>
        <!-- 8th row 4:00pm - 5:00pm by tosh-->
	    <td class="column100 column5">
	  	   
		  <?php 
                $result1=mysqli_query($con,"select * from classsched where fname like '%$fname%' and semester like '%$semester%' and sy like '%$sy%'  and day like '%Wednesday%' and CAST(time_start as time) >= '15:59:00' AND CAST(time_end as time) < '17:01:00'")or die("Cannot Connect to Database".mysqli_connect_error());
                $row=mysqli_fetch_array($result1);
                    if($row > 0)
                    {
                        if ($row['status'] != 'unchecked') {
                            echo "<div class='text-dark font-10'><small>" . $row['subject_code'] . "</small></div>";
                            echo "<div class='text-info'><small>Ins. - " . $row['fname'] . "</small>&nbsp;&nbsp;&nbsp;<small class='text-primary'>( " . $row['room_name'] . " )</small></div>";
                        }
                    }
                ?>
        
        </td>
	    <!-- 8th row 4:00pm - 5:00pm by tosh-->
        <td class="column100 column9">
		    
                <?php 
                    $result1=mysqli_query($con,"select * from classsched where fname like '%$fname%' and semester like '%$semester%' and sy like '%$sy%'  and day like '%Thursday%' and CAST(time_start as time) >= '15:59:00' AND CAST(time_end as time) < '17:01:00'")or die("Cannot Connect to Database".mysqli_connect_error());
                    $row=mysqli_fetch_array($result1);
                    if($row > 0)
                    {
                        if ($row['status'] != 'unchecked') {
                            echo "<div class='text-dark font-10'><small>" . $row['subject_code'] . "</small></div>";
                            echo "<div class='text-info'><small>Ins. - " . $row['fname'] . "</small>&nbsp;&nbsp;&nbsp;<small class='text-primary'>( " . $row['room_name'] . " )</small></div>";
                        }
                    }
                    ?>
		    
		</td>
	    <!-- 8th row 4:00pm - 5:00pm by tosh-->
        <td class="column100 column5">
		    
                <?php 
                    $result=mysqli_query($con,"select * from classsched where fname like '%$fname%' and semester like '%$semester%' and sy like '%$sy%'  and day like '%Friday%' and CAST(time_start as time) >= '15:59:00' AND CAST(time_end as time) < '17:01:00'")or die("Cannot Connect to Database".mysqli_connect_error());
                    $row=mysqli_fetch_array($result);
                    if($row > 0)
                    {
                        if ($row['status'] != 'unchecked') {
                            echo "<div class='text-dark font-10'><small>" . $row['subject_code'] . "</small></div>";
                            echo "<div class='text-info'><small>Ins. - " . $row['fname'] . "</small>&nbsp;&nbsp;&nbsp;<small class='text-primary'>( " . $row['room_name'] . " )</small></div>";
                        }
                    }
                ?>
	        
		</td>
        <td class="column100 column9">
        
        </td>


	  </tr>  
      <tr class="row100">
                    <th class="column50 column2" colspan="7"  style="background-color:white;color:black;text-transform: none;margin-top:0px">
                        <p>

                            <!-- <?php 

                            $array = explode("-", $fname);
                            $course = $array[0]; // Outputs "one"
                            $year_section = $array[1]; // Outputs "two"

                            $query = mysqli_query($con,"select * from course where course='$course' and year_section='$year_section'") 
                            or die("Cannot Connect to Database".mysqli_connect_error());
                            $row = mysqli_fetch_array($query);

                            echo "<b>Advicer : {$row['advicer']}</b>";
                            
                            ?> -->

                            

                        </p>
                    </th>
                </tr>
                <tr class="row100">     
                <th class="column50 column2" colspan="3"  style="background-color:white;color:black;text-transform: none;margin-top:0px">
                        <p>

                            <?php 

                                    $query = mysqli_query($con,"select * from settings") 
                                    or die("Cannot Connect to Database".mysqli_connect_error());
                                    $row = mysqli_fetch_array($query);

                                    echo "<p>Prepared by:</p>";
                                    echo "{$row['prep']}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 
                                    echo $row['prep2']."<hr style='margin:0;'>"; 
                                    echo "<p>Registrar &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Chair. Information Technology Dept.</p>"; 
                            
                            ?>

                            

                        </p>
                    </th>
                    <th class="column50 column2" colspan="2"  style="background-color:white;color:black;text-transform: none;margin-top:0px">
                        <p>

                            <?php 


                                $query = mysqli_query($con,"select * from settings") 
                                or die("Cannot Connect to Database".mysqli_connect_error());
                                $row = mysqli_fetch_array($query);

                                echo "<p>Recommending Approval:</p>";
                                $query2 = mysqli_query($con,"select * from classsched where fname='$fname'") 
                                or die("Cannot Connect to Database".mysqli_connect_error());
                                $row2 = mysqli_fetch_array($query2);
                                if ($row2['department'] == 'COLLEGE OF TECHNOLOGY AND BUSINESS') {
                                    echo "{$row['dean1']}<hr style='margin:0;'>";
                                    echo "<p>College Dean of Technology and Business</p>"; 
                                }else{
                                    echo "{$row['dean2']}<hr style='margin:0;'>";
                                    echo "<p>College Dean of Education</p>"; 
                                }

                            
                            ?>

                            

                        </p>
                    </th>
                    <th class="column50 column2" colspan="2"  style="background-color:white;color:black;text-transform: none;margin-top:0px">
                        <p>

                            <?php 

                            $query = mysqli_query($con,"select * from settings") 
                            or die("Cannot Connect to Database".mysqli_connect_error());
                            $row = mysqli_fetch_array($query);

                            echo "<p>Approved:</p>"; 
                            echo "{$row['ced']}<hr style='margin:0;'>";
                            echo "<p>Campus Executive Director</p>"; 
                            
                            ?>

                            

                        </p>
                    </th>
                </tr>
	  

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
  </center>
  <?php                     $query = mysqli_query($con,"select * from settings") 
                            or die("Cannot Connect to Database".mysqli_connect_error());
                            $row = mysqli_fetch_array($query);?>
<!-- <div class="row">
    <div class="m-r-40">
        <div>
            <p style="font-size:12px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prepared by:</p>
        </div>
        <div>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['prep']?></p>
        </div>
    </div>
    <div class="m-r-40 p-l-40">
        <div>
            <p style="font-size:12px;" class="m-b-10">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Recommending Approval</p>
        </div>
        <div class="p-l-40">
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['dean1']?></p>
        </div>
        <div>
            <p style="font-size:12px;" class="p-l-30">&nbsp;&nbsp;&nbsp;College Dean of Technology and Business</p>
        </div>
    </div>
    <div class="m-r-40 p-l-40">
        <div>
            <p style="font-size:12px;" class="m-b-10">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Recommending Approval</p>
        </div>
        <div>
            <p>&nbsp;<?php echo $row['dean2']?></p>
        </div>
        <div>
            <p style="font-size:12px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;College Dean of Education</p>
        </div>
    </div>
    <div>
        <div>
            <p style="font-size:12px;" class="m-b-10">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Approved by</p>
        </div>
        <div>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['ced']?></p>
        </div>
        <div>
            <p style="font-size:12px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PSU Campus Executive Director</p>
        </div>
    </div>
    
</div> -->
  </div>
  </div>
  <div>
    <style>
        #print-button {
  display: block;
  margin-right: 20px;
}

@media print {
  #print-button {
    display: none;
  }
  #back {
    display: none;
  }
}

    </style>
        <div  class="row justify-content-center">
            <div>

                <button id="print-button" class="btn btn-danger" onclick="printPage();">Print</button>
            </div>
            <div>
            <a href="../../ins_dash.php" id="back" class="btn btn-danger">Back</a>
            </div>
          </div>

  

<script>
function printPage() {
    window.print();
}

</script>



  </html>
