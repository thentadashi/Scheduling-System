<?php include 'includes/header.php'?>
<?php include 'includes/connect.php'?>
<?php include 'includes/essentials.php';
adminLogin();
?>
<!DOCTYPE html>
<html lang="en">



    <body>
        <!-- begin app -->
        <div class="app">
            <!-- begin app-wrap -->
            <div class="app-wrap">
                <!-- begin pre-loader -->
                <div class="loader">
                    <div class="h-100 d-flex justify-content-center">
                        <div class="align-self-center">

                            <img src="../assets/img/Pangasinan_State_University_logo.png" style="height:250px;" alt="logo" />
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
                                            <h1><i class="fa fa-calendar"></i> Schedule</h1>
                                        </div>
                                        <div class="ml-auto d-flex align-items-center">
                                            <nav>
                                                <ol class="breadcrumb p-0 m-b-0">
                                                    <li class="breadcrumb-item">
                                                        <a href="index.php"><i class="ti ti-home"></i></a>
                                                    </li>
                                                    <li class="breadcrumb-item active text-primary" aria-current="page">Schedule</li>
                                                </ol>
                                            </nav>
                                        </div>
                                    </div>
                                    <!-- end page title -->
                                </div>
                            </div>
                            <!-- end row -->
                            <!-- begin row -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card card-statistics">
                                    <?php include 'modals/preview_class_schedule.php'?>
                                    <?php include 'modals/preview_teacher_schedule.php'?>
                                    <?php include 'modals/preview_room.php'?>
                                        <div class="card-body">
                                        <?php
                                                        $query = mysqli_query($con,"SELECT * FROM users WHERE userid=".$_SESSION['adminId']) or die("Cannot Connect to Database".mysqli_connect_error());
                                                        $row = mysqli_fetch_array($query);
                                                        if($row['name']!='Administrator'){
                                        ?>          
                                           
                                                                <button class="btn btn-primary mb-2 mr-2 col-2" data-toggle="modal" data-target="#schedModal"><i class="fa fa-plus"></i> Add Class</button>
                                        <?php } ?>
                                                                <button class="btn btn-danger mb-2 mr-2" data-toggle="modal" data-target="#preview_class_schedule"><i class="fa fa-calendar"></i> Preview Class Schedule</button>
                                                                <button class="btn btn-danger mb-2 mr-2" data-toggle="modal" data-target="#preview_teacher_schedule"><i class="fa fa-calendar"></i> Preview Teacher Schedule</button>
                                                                <button class="btn btn-danger mb-2 mr-2" data-toggle="modal" data-target="#preview_room_schedule"><i class="fa fa-calendar"></i> Preview Room Schedule</button>
                                                                <button class="btn btn-danger mb-2" data-toggle="modal" data-target="#archive_all"><i class="fa fa-trash"></i> Archive All Data</button>
                                            <div class="datatable-wrapper">
                                                <!-- <input type="text" id="myInput" class="form-control col-md-4 col-lg-4" style="margin-left:66.7%;" onkeyup="myFunction()" placeholder="Search for names.."> -->
                                                <table id="datatable2" class="display compact table table-striped table-bordered" style="font-size:1rem;color:#666;">
                                                    <thead>
                                                        <tr>
                                                        <th>Day</th>
                                                        <th>Time Start</th>
                                                        <th>Time End</th>
                                                        <th>Teacher</th>
                                                        <th>Subject</th>
                                                        <th>Room</th>
                                                        <th>Course/Year/Section</th>
                                                        <th>Semester</th>
                                                        <th>School Year</th>
                                                        <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php 
                                                        $query = mysqli_query($con,"SELECT * FROM classsched WHERE status='checked'")
                                                            or die("Cannot Connect to Database".mysqli_connect_error());
                                                        while ($row = mysqli_fetch_array($query)) {
                                                            $id = $row['classid'];
                                                            
                                                                                    
                                                            $query1 = mysqli_query($con,"SELECT *FROM classsched");
                                                            

                                                        ?>
                                                        <tr class="warning">
                                                        <td><?php echo $row['day']; ?></td> 
                                                        <td><?php $a = new DateTime($row['time_start']); echo $a->format("h:i:a"); ?></td> 
                                                        <td><?php $b = new DateTime($row['time_end']); echo $b->format("h:i:a"); ?></td> 
                                                        <td><?php echo $row['fname']; ?> ( <?php echo $row['lname']; ?>)</td> 
                                                        <td><?php echo $row['subject_code']; ?> ( <?php echo $row['subject_title']; ?>)</td> 
                                                        <td><?php echo $row['room_name']; ?></td> 
                                                        <td><?php echo $row['course_year_section']; ?></td> 
                                                        <td><?php echo $row['semester']; ?></td> 
                                                        <td><?php echo $row['sy']; ?></td> 
                                                            
                                                            

                                                            <td><a href="edit_schedule.php<?php echo '?id=' . $id; ?>" class="mr-2"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"></i></a>
                                                                <a href="#delete_schedule<?php echo $id; ?>" role="button"  data-target = "#delete_schedule<?php echo $id;?>"data-toggle="modal"><i class="fa fa-archive" data-toggle="tooltip" data-placement="top" title="" data-original-title="Archive"></i></a></td>
                                                        </tr>
                                                            <?php include 'modals/delete_schedule.php'?>
                                                        <?php
                                                            }
                                                        ?>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Music Name</th>
                                                            <th>Duration</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
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
        <?php include 'modals/add_schedule.php'?>

</html>