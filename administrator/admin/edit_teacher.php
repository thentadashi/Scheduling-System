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
                                        <h1><i class="fa fa-user"></i> Edit Teacher</h1>
                                    </div>
                                    <div class="ml-auto d-flex align-items-center">
                                        <nav>
                                            <ol class="breadcrumb p-0 m-b-0">
                                                <li class="breadcrumb-item">
                                                    <a href="index.html"><i class="ti ti-home"></i></a>
                                                </li>
                                                <li class="breadcrumb-item">
                                                    Teacher
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
                                            $query = mysqli_query($con,"select * from teachers where teachid='$get_id'") or die("Cannot Connect to Database".mysqli_connect_error());
                                            $row = mysqli_fetch_array($query);
                                        ?>


                                            <div class="col-xl-3 pb-xl-0 pb-5 border-right">
                                                <div class="page-account-profil pt-5">
                                                    <div class="profile-img text-center rounded-circle">
                                                        <div class="pt-5">
                                                            <div class="bg-img m-auto">
                                                                <img src="../assets/img/avtar/np.jpg" class="img-fluid" alt="users-avatar">
                                                            </div>
                                                            <div class="profile pt-4">
                                                                <h4 class="mb-1"><?php echo $row['fname']; ?> <?php echo $row['lname']; ?></h4>
                                                                <p><?php echo $row['arank']; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="profile-btn text-center">
                                                        <div><button class="btn btn-light text-primary mb-2">Upload New Avatar</button></div>
                                                        <a href="#" role="button" class="btn btn-danger" data-target = "#"data-toggle="modal"><i class="fa fa-info" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"></i> View</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-8 col-md-8 col-12 border-t border-right">
                                                <div class="page-account-form">
                                                    <div class="form-titel border-bottom p-3">
                                                        <h5 class="mb-0 py-2">Edit Personal Settings</h5>
                                                    </div>
                                                    <div class="p-4">
                                                        <form class="form-horizontal" method="post" enctype="multipart/form-data">
                                                            <div class="form-row"><h5 class="mb-0 py-2"><i class="fa fa-user"></i> Instructor Information</h5>
                                                                <div class="form-group col-md-12">
                                                                    <label for="name1">First Name</label>
                                                                    <input type="text" class="form-control" id="name1" name="name1" value="<?php echo $row['fname']; ?>" required>
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label for="name2">Last Name</label>
                                                                    <input type="text" class="form-control" id="name2" name="name2" value="<?php echo $row['lname']; ?>" required>
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label for="phone1">Phone Number</label>
                                                                    <input type="number" class="form-control" id="phone1" name="phone1" value="<?php echo $row['phone']; ?>" maxlength="11" required>
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label for="email1">Email</label>
                                                                    <input type="email" class="form-control" id="email1" name="email1" value="<?php echo $row['email']; ?>" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="add1">Address</label>
                                                                <input type="text" class="form-control" id="add1" name="add1" value="<?php echo $row['address']; ?>" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="rank1">Rank</label>
                                                                <input type="text" class="form-control" id="rank1" name="rank1" value="<?php echo $row['arank']; ?>" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="Designation1">Designation</label>
                                                                <input type="text" class="form-control" id="Designation1" name="Designation1" value="<?php echo $row['designation']; ?>" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="department1">Department</label>
                                                                <input type="text" class="form-control" id="department1" name="department1" value="<?php echo $row['department']; ?>" required>
                                                            </div>

                                                            <div class="form-row"><h5 class="mb-0 py-2"><i class="fa fa-lock"></i> Account Information (not working)</h5>
                                                                <div class="form-group col-md-12">
                                                                    <label for="name1">Userame</label>
                                                                    <input type="text" class="form-control" value="<?php echo $row['email']; ?>" disabled>
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label for="phone1">Password</label>
                                                                    <input type="password" name="password" class="form-control" value="<?php echo $row['password']; ?>"required>
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
                                                            <a href="teachers.php" class="btn btn-danger">Back</a>
                                                        </form>
                                                        <?php
                                                            if (isset($_POST['update'])) 
                                                            {

                                                                $name1 = $_POST['name1'];
                                                                $name2 = $_POST['name2'];
                                                                $phone1 = $_POST['phone1'];
                                                                $add1 = $_POST['add1'];
                                                                $email1 = $_POST['email1'];
                                                                $rank1 = $_POST['rank1'];
                                                                $Designation1 = $_POST['Designation1'];
                                                                $department1 = $_POST['department1'];
                                                                $arank = $_POST['phone1'];
                                                                $password = $_POST['password'];
                                                            

                                                                mysqli_query($con,"update teachers set fname='$name1',lname='$name2', email='$email1', password='$password', address='$add1', phone='$phone1',arank='$rank1',designation='$Designation1',department='$department1' where teachid='$get_id'") 
                                                                or die("Cannot Connect to Database".mysqli_connect_error());
                                                                echo "<script type='text/javascript'>".
                                                                        "alert('Update Successful, Please Reload!');
                                                                        location.replace('edit_teacher.php?id=$get_id');".
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