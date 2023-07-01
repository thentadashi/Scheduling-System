<?php include 'includes/connect.php'?>
<?php include 'includes/essentials.php';
adminLogin();


?>


<!DOCTYPE html>
<html lang="en">


<?php include 'includes/header.php'?>

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
                                        <h1><i class="fa fa-user"></i> My Profile</h1>
                                    </div>
                                    <div class="ml-auto d-flex align-items-center">
                                        <nav>
                                            <ol class="breadcrumb p-0 m-b-0">
                                                <li class="breadcrumb-item">
                                                    <a href="index.html"><i class="ti ti-home"></i></a>
                                                </li>
                                                <li class="breadcrumb-item">
                                                    Pages
                                                </li>
                                                <li class="breadcrumb-item active text-primary" aria-current="page">Account Settings</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                                <!-- end page title -->
                            </div>
                        </div>
                        <!-- end row -->
                            <?php
                                $query = mysqli_query($con,"SELECT * FROM users") or die("Cannot Connect to Database".mysqli_connect_error());
                                $row = mysqli_fetch_array($query);
                            ?>
                        <!--mail-Compose-contant-start-->
                        <div class="row account-contant">
                            <div class="col-12">
                                <div class="card card-statistics">
                                    <div class="card-body p-0">
                                        <div class="row no-gutters">
                                            <div class="col-xl-3 pb-xl-0 pb-5 border-right">
                                                <div class="page-account-profil pt-5">
                                                    <div class="profile-img text-center rounded-circle">
                                                        <div class="pt-5">
                                                            <div class="bg-img m-auto">
                                                                <img src="../assets/img/avtar/np.jpg" class="img-fluid" alt="users-avatar">
                                                            </div>
                                                            <div class="profile pt-4">
                                                                <h4 class="mb-1"><?php echo $row['name']?></h4>
                                                                <p>Administrator</p>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="profile-btn text-center">
                                                        <div><button class="btn btn-danger">View</button></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-8 col-md-8 col-12 border-t border-right">
                                                <div class="page-account-form">
                                                    <div class="form-titel border-bottom p-3">
                                                        <h5 class="mb-0 py-2">Edit Your Personal Settings</h5>
                                                    </div>
                                                    <div class="p-4">
                                                        <form>
                                                            <div class="form-row"><h5 class="mb-0 py-2"><i class="fa fa-user"></i> User Information</h5>
                                                                <div class="form-group col-md-12">
                                                                    <label for="name1">Name</label>
                                                                    <input type="text" class="form-control" id="name1" value="<?php echo $row['name']?>">
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label for="phone1">Phone Number</label>
                                                                    <input type="text" class="form-control" id="phone1" value="<?php echo $row['phone']?>">
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label for="email1">Email</label>
                                                                    <input type="email" class="form-control" id="email1" value="<?php echo $row['email']?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="add1">Address</label>
                                                                <input type="text" class="form-control" id="add1" value="<?php echo $row['address']?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="add2">Address 2</label>
                                                                <input type="text" class="form-control" id="add2" value="somewhere">
                                                            </div>

                                                            <div class="form-row"><h5 class="mb-0 py-2"><i class="fa fa-lock"></i> Account Information</h5>
                                                                <div class="form-group col-md-12">
                                                                    <label for="name1">Userame</label>
                                                                    <input type="text" class="form-control" value="<?php echo $row['username']?>">
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label for="phone1">Password</label>
                                                                    <input type="password" class="form-control" value="<?php echo $row['password']?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                                                    <label class="form-check-label" for="gridCheck">
                                                                        I agree to receive email notification.
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary">Update Information</button>
                                                        </form>
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