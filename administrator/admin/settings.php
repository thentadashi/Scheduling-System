
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
                                        <h1><i class="fa fa-cogs"></i> Settings</h1>
                                    </div>
                                    <div class="ml-auto d-flex align-items-center">
                                        <nav>
                                            <ol class="breadcrumb p-0 m-b-0">
                                                <li class="breadcrumb-item">
                                                    <a href="index.html"><i class="ti ti-home"></i></a>
                                                </li>
                                                <li class="breadcrumb-item active text-primary" aria-current="page">Setting</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                                <!-- end page title -->
                            </div>
                        </div>
                        <!-- end row -->
                        <!-- begin row -->
                        <?php
                            $query = mysqli_query($con,"select * from settings") 
                            or die("Cannot Connect to Database".mysqli_connect_error());
                            $row = mysqli_fetch_array($query);
                        ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-statistics">
                                    <div class="card-header">
                                        <div class="card-heading">
                                            <h4 class="card-title"><i class="fa fa-cog"></i> Setting Configuration label for printing schedule</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                    <form  method="post" enctype="multipart/form-data">
                                            <div class="form-row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="validationCustom01">Scheduler 1</label>
                                                    <input type="text" class="form-control" name="prep" id="validationCustom01" value="<?php echo $row['prep']?>" required>
                                                    
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="validationCustom01">Scheduler 2</label>
                                                    <input type="text" class="form-control" name="prep2" id="validationCustom01" value="<?php echo $row['prep2']?>" required>
                                                    
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="validationCustom02">College dean of technology and business</label>
                                                    <input type="text" class="form-control" name="dean1" id="validationCustom02" value="<?php echo $row['dean1']?>" required>
                                                    
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="validationCustom01">college dean of education</label>
                                                    <input type="text" class="form-control" name="dean2" id="validationCustom01" value="<?php echo $row['dean2']?>" required>
                                                    
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="validationCustom02">campus executive director</label>
                                                    <input type="text" class="form-control" name="ced" id="validationCustom02" value="<?php echo $row['ced']?>" required>
                                                    
                                                </div>
                                            </div>
                                            <button class="btn btn-primary" type="submit" name="update">Update</button>
                                        </form>
                                        <?php 
                                                        if (isset($_POST['update'])) 
                                                        {
                                                            $prep = $_POST['prep'];
                                                            $prep2 = $_POST['prep2'];
                                                            $dean1 = $_POST['dean1'];
                                                            $dean2 = $_POST['dean2'];
                                                            $ced = $_POST['ced'];
                                                            


                                                            
                                                            mysqli_query($con,"update settings set prep='$prep',prep='$prep2',dean1='$dean1',dean2='$dean2', ced='$ced' where set_id='1'") 
                                                            or die("Cannot Connect to Database".mysqli_connect_error());
                                                            echo "<script type='text/javascript'>".
                                                                    "alert('Update Successful, Please Reload!');
                                                                    location.replace('settings.php?id=1');".
                                                                    "</script>";
                                                            
                                                        }
                                                    ?>
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


</html>