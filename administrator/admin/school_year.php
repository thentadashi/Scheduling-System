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
                                            <h1><i class="fa fa-graduation-cap"></i> School Year</h1>
                                        </div>
                                        <div class="ml-auto d-flex align-items-center">
                                            <nav>
                                                <ol class="breadcrumb p-0 m-b-0">
                                                    <li class="breadcrumb-item">
                                                        <a href="index.php"><i class="ti ti-home"></i></a>
                                                    </li>
                                                    <li class="breadcrumb-item active text-primary" aria-current="page">School Year</li>
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
                                        <div class="card-body"><button class="btn btn-primary mb-2" data-toggle="modal" data-target="#addSy"><i class="fa fa-plus"></i> Add School Year</button>
                                            <div class="datatable-wrapper table-responsive">
                                                <!-- <input type="text" id="myInput" class="form-control col-md-4 col-lg-4" style="margin-left:66.7%;" onkeyup="myFunction()" placeholder="Search for names.."> -->
                                                <table id="datatable2" class="display compact table table-striped table-bordered" style="font-size:1rem;color:#666;">
                                                    <thead>
                                                        <tr>
                                                            <th>School Year</th>
                                                            <th>Action</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <?php
                                                            $query = mysqli_query($con,"select * from sy") 
                                                            or die("Cannot Connect to Database".mysqli_connect_error());

                                                            while ($row = mysqli_fetch_array($query)) 
                                                            {
                                                                $id = $row['syid'];
                                                                $query1 = mysqli_query($con, "SELECT * FROM sy");
                                                        ?>

                                                        <tr>
                                                            <td><?php echo $row['sy']; ?></td> 

                                                            <td><a href="edit_school_year.php<?php echo '?id=' . $id; ?>" class="mr-2"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"></i></a>
                                                                <a href="#delete_school_year<?php echo $id; ?>" role="button"  data-target = "#delete_school_year<?php echo $id;?>"data-toggle="modal"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"></i></a></td>
                                                        </tr>
                                                            <?php include 'modals/delete_school_year.php'?>
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
        <?php include 'modals/add_school_year.php'?>
        <?php include 'includes/footer.php'?>
    </body>
</html>