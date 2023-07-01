<?php include 'includes/header.php'?>
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
                                        <h1><i class="fa fa-line-chart"></i> Visitor Statistics </h1>
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
                                            <table id="export-table" class="table table-bordered">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>Month</th>
                                                        <th>Visits</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>January</td>
                                                        <td>150</td>
                                                    </tr>
                                                    <tr>
                                                        <td>February</td>
                                                        <td>200</td>
                                                    </tr>
                                                    <tr>
                                                        <td>March</td>
                                                        <td>100</td>
                                                    </tr>
                                                    <tr>
                                                        <td>April</td>
                                                        <td>150</td>
                                                    </tr>
                                                    <tr>
                                                        <td>May</td>
                                                        <td>300</td>
                                                    </tr>
                                                    <tr>
                                                        <td>June</td>
                                                        <td>150</td>
                                                    </tr>
                                                    <tr>
                                                        <td>July</td>
                                                        <td>200</td>
                                                    </tr>
                                                    <tr>
                                                        <td>August</td>
                                                        <td>100</td>
                                                    </tr>
                                                    <tr>
                                                        <td>September</td>
                                                        <td>150</td>
                                                    </tr>
                                                    <tr>
                                                        <td>October</td>
                                                        <td>300</td>
                                                    </tr>
                                                    <tr>
                                                        <td>November</td>
                                                        <td>150</td>
                                                    </tr>
                                                    <tr>
                                                        <td>December</td>
                                                        <td>200</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Total</strong></td>
                                                        <td><strong>2150</strong></td>
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
                                    <canvas id="bargraph" height="300"></canvas>
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
    <script src="../assets/js/chart.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {

            // Bar Chart

            var barChartData = {
                labels: ["January","February","March","April","May","June","July","August","September","October","November","December"],
                datasets: [{
                    label: 'Visitors',
                    borderColor: 'rgba(0, 158, 251, 1)',
                    borderWidth: 1,
                    data: [150,200,300,150,100,200,150,300,200,150,100,150]
                }]
            };

            var ctx = document.getElementById('bargraph').getContext('2d');
            window.myBar = new Chart(ctx, {
                type: 'line',
                data: barChartData,
                options: {
                    responsive: true,
                    legend: {
                        display: false,
                    }
                }
            });

        });
    </script>
</body>


</html>