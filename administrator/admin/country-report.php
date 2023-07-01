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
                                        <h1><i class="fa fa-pie-chart"></i> Visitor Statistics by Course</h1>
                                    </div>
                                    <div class="ml-auto d-flex align-items-center">
                                        <nav>
                                            <ol class="breadcrumb p-0 m-b-0">
                                                <li class="breadcrumb-item">
                                                    <a href="index.html"><i class="ti ti-home"></i></a>
                                                </li>
                                                <li class="breadcrumb-item active text-primary" aria-current="page">Reports</li>
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
                            <div class="col-lg-5">
                                <div class="card card-statistics">
                                    <div class="card-body">
                                        <div class="export-table-wrapper table-responsive">
                                            <table class="table table-bordered">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>Course</th>
                                                        <th>Schedule</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Country1</td>
                                                        <td>150</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Course 2</td>
                                                        <td>200</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Course 3</td>
                                                        <td>100</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Course 4</td>
                                                        <td>150</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Course 5</td>
                                                        <td>300</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Course 6</td>
                                                        <td>150</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Course 7</td>
                                                        <td>200</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Course 8</td>
                                                        <td>100</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Course 9</td>
                                                        <td>150</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Course 10</td>
                                                        <td>300</td>
                                                    </tr>
                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="card card-statistics">
                                    <div class="card-body">
                                    <div class="chartjs-wrapper">
                                            <canvas id="chartjsdemo3" width="800"></canvas>
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