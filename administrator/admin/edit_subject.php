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
                                        <h1><i class="fa fa-tasks"></i> Edit Subject</h1>
                                    </div>
                                    <div class="ml-auto d-flex align-items-center">
                                        <nav>
                                            <ol class="breadcrumb p-0 m-b-0">
                                                <li class="breadcrumb-item">
                                                    <a href="index.html"><i class="ti ti-home"></i></a>
                                                </li>
                                                <li class="breadcrumb-item">
                                                    Class
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
                                            $query = mysqli_query($con,"select * from subject where subjectid='$get_id'") or die("Cannot Connect to Database".mysqli_connect_error());
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
                                                        <h5 class="mb-0 py-2">Edit Subject</h5>
                                                    </div>
                                                    <div class="p-4">
                                                        <form class="form-horizontal" method="post" enctype="multipart/form-data">
                                                            <div class="form-row"><h5 class="mb-0 py-2"><i class="fa fa-tasks"></i> Subject Information</h5>
                                                                <div class="form-group col-md-12">
                                                                    <label for="subject_code">Subject Code</label>
                                                                    <input type="text" class="form-control" id="subject_code" name="subject_code" value="<?php echo $row['subject_code']; ?>">
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label for="subject_title">Subject Title</label>
                                                                    <input type="text" class="form-control" id="subject_title" name="subject_title" value="<?php echo $row['subject_title']; ?>">
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label for="subject_category">Subject Category</label>
                                                                    <input type="text" class="form-control" id="subject_category" name="subject_category" value="<?php echo $row['subject_category']; ?>" maxlength="11">
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label for="semester">Semester</label>
                                                                    <input type="text" class="form-control" id="semester" name="semester" value="<?php echo $row['semester']; ?>">
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label for="email1">Department</label>
                                                                    <input type="text" class="form-control" id="department" name="department" value="<?php echo $row['department']; ?>">
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
                                                            <a href="subject.php" class="btn btn-danger">Back</a>
                                                        </form>
                                                        <?php
                                                            if (isset($_POST['update'])) 
                                                            {

                                                                $subject_code = $_POST['subject_code'];
                                                                $subject_title = $_POST['subject_title'];
                                                                $subject_category = $_POST['subject_category'];
                                                                $semester = $_POST['semester'];
                                                                $department = $_POST['department'];
                                                            

                                                                mysqli_query($con,"update subject set subject_code='$subject_code',subject_title='$subject_title',subject_category='$subject_category', semester='$semester',department='$department' where subjectid='$get_id'") 
                                                                or die("Cannot Connect to Database".mysqli_connect_error());
                                                                echo "<script type='text/javascript'>".
                                                                        "alert('Update Successful, Please Reload!');
                                                                        location.replace('edit_subject.php?id=$get_id');".
                                                                        "</script>";
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