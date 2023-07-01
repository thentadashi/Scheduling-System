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
                                        <h1><i class="fa fa-comments"></i> Comments</h1>
                                    </div>
                                    <div class="ml-auto d-flex align-items-center">
                                        <nav>
                                            <ol class="breadcrumb p-0 m-b-0">
                                                <li class="breadcrumb-item">
                                                    <a href="index.php"><i class="ti ti-home"></i></a>
                                                </li>
                                                <li class="breadcrumb-item active text-primary" aria-current="page">Comment</li>
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
                                    <div class="card-body">
                                        <div class="datatable-wrapper table-responsive">
                                            <table id="datatable" class="display compact table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Virtual Tour Name</th>
                                                        <th>Comment</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Virtual Tour 1</td>
                                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br> sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br> Ut enim ad minim veniam, quis nostrud exercitation ullamco <br>laboris nisi ut aliquip ex ea commodo consequat.</td>
                                                        <td><span class="badge bg-primary text-white">published</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Virtual Tour 2</td>
                                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br> sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br> Ut enim ad minim veniam, quis nostrud exercitation ullamco <br>laboris nisi ut aliquip ex ea commodo consequat.</td>
                                                        <td><span class="badge bg-warning text-white">unpublished</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Virtual Tour 3</td>
                                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br> sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br> Ut enim ad minim veniam, quis nostrud exercitation ullamco <br>laboris nisi ut aliquip ex ea commodo consequat.</td>
                                                        <td><span class="badge bg-primary text-white">published</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Virtual Tour 4</td>
                                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br> sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br> Ut enim ad minim veniam, quis nostrud exercitation ullamco <br>laboris nisi ut aliquip ex ea commodo consequat.</td>
                                                        <td><span class="badge bg-primary text-white">published</span></td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>Virtual Tour Name</th>
                                                        <th>Comment</th>
                                                        <th>Status</th>
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


</html>