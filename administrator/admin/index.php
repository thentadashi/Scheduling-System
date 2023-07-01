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
                                        <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
                                    </div>
                                    <div class="ml-auto d-flex align-items-center">
                                        <nav>
                                            <ol class="breadcrumb p-0 m-b-0">
                                                <li class="breadcrumb-item">
                                                    <a href="index.php"><i class="ti ti-home"></i></a>
                                                </li>
                                                <li class="breadcrumb-item active text-primary" aria-current="page">Home</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                                <!-- end page title -->
                            </div>
                        </div>
                        <!-- end row -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card card-statistics">
                                    <div class="row no-gutters">
                                        <div class="col-xxl-3 col-lg-6">
                                            <div class="p-20 border-lg-right border-bottom border-xxl-bottom-0">
                                                <div class="d-flex m-b-10">
                                                <?php $query = mysqli_query($con,"select count(classid) as COUNT from classsched") 
                                                    or die("Cannot Connect to Database".mysqli_connect_error());
                                                    $row = mysqli_fetch_array($query);?>
                                                    <p class="mb-0 font-regular text-muted font-weight-bold">Schedules</p>
                                                    <a class="mb-0 ml-auto font-weight-bold" href="#"><i class="ti ti-more-alt"></i> </a>
                                                </div>
                                                <div class="d-block d-sm-flex h-100 align-items-center">
                                                    <div class="apexchart-wrapper">
                                                        <div id="analytics7"></div>
                                                    </div>
                                                    <div class="statistics mt-3 mt-sm-0 ml-sm-auto text-center text-sm-right">
                                                        <h3 class="mb-0"><i class="icon-arrow-up-circle"></i><?php echo $row['COUNT'];?></h3>
                                                        <p>Active Schedules</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-lg-6">
                                            <div class="p-20 border-xxl-right border-bottom border-xxl-bottom-0">
                                                <div class="d-flex m-b-10">
                                                <?php $query1 = mysqli_query($con,"select count(classid) as COUNT from classsched where status='unchecked'") 
                                                    or die("Cannot Connect to Database".mysqli_connect_error());
                                                    $row2 = mysqli_fetch_array($query1);?>
                                                    <p class="mb-0 font-regular text-muted font-weight-bold">Archive Schedules</p>
                                                    <a class="mb-0 ml-auto font-weight-bold" href="#"><i class="ti ti-more-alt"></i> </a>
                                                </div>
                                                <div class="d-block d-sm-flex h-100 align-items-center">
                                                    <div class="apexchart-wrapper">
                                                        <div id="analytics8"></div>
                                                    </div>
                                                    <div class="statistics mt-3 mt-sm-0 ml-sm-auto text-center text-sm-right">
                                                        <h3 class="mb-0"><i class="icon-arrow-up-circle"></i><?php echo $row2['COUNT'];?></h3>
                                                        <p>Inactive Schedules</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-lg-6">
                                            <div class="p-20 border-lg-right border-bottom border-lg-bottom-0">
                                                <div class="d-flex m-b-10">
                                                <?php $query3 = mysqli_query($con,"select count(teachid) as COUNT from teachers") 
                                                    or die("Cannot Connect to Database".mysqli_connect_error());
                                                    $row3 = mysqli_fetch_array($query3);?>
                                                    <p class="mb-0 font-regular text-muted font-weight-bold">Faculty</p>
                                                    <a class="mb-0 ml-auto font-weight-bold" href="#"><i class="ti ti-more-alt"></i> </a>
                                                </div>
                                                <div class="d-block d-sm-flex h-100 align-items-center">
                                                    <div class="apexchart-wrapper">
                                                        <div id="analytics9"></div>
                                                    </div>
                                                    <div class="statistics mt-3 mt-sm-0 ml-sm-auto text-center text-sm-right">
                                                        <h3 class="mb-0"><i class="icon-arrow-up-circle"></i><?php echo $row3['COUNT'];?></h3>
                                                        <p>Number of Faculty</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php $query4 = mysqli_query($con,"select count(course) as COUNT from course where course like '%BSIT%'") 
                                        or die("Cannot Connect to Database".mysqli_connect_error());
                                        $row4 = mysqli_fetch_array($query4);?>

                                        <?php $query5 = mysqli_query($con,"select count(course) as COUNT from course where course like '%BSBA%'") 
                                        or die("Cannot Connect to Database".mysqli_connect_error());
                                        $row5 = mysqli_fetch_array($query5);?>

                                        <?php $query6 = mysqli_query($con,"select count(course) as COUNT from course where course like '%BSED%'") 
                                        or die("Cannot Connect to Database".mysqli_connect_error());
                                        $row6 = mysqli_fetch_array($query6);?>

                                        <?php $query7 = mysqli_query($con,"select count(course) as COUNT from course where course like '%BIT%'") 
                                        or die("Cannot Connect to Database".mysqli_connect_error());
                                        $row7 = mysqli_fetch_array($query7);?>

                                        <?php $query8 = mysqli_query($con,"select count(course) as COUNT from course where course like '%BTLED%'") 
                                        or die("Cannot Connect to Database".mysqli_connect_error());
                                        $row8 = mysqli_fetch_array($query8);?>

                                        <?php $query9 = mysqli_query($con,"select count(course) as COUNT from course where course like '%BEED%'") 
                                        or die("Cannot Connect to Database".mysqli_connect_error());
                                        $row9 = mysqli_fetch_array($query9);?>
                                        <div class="col-xxl-3 col-lg-3">
                                            <div class="p-20">
                                                
                                                <div class="d-block d-sm-flex h-100 align-items-center">
                                                    <ul class="list-style-none p-0">
                                                            <li class="d-flex py-1"><span><i class="fa fa-circle text-success pr-2"></i> BTLED</span> <span class="pl-2 font-weight-bold"><?php echo $row8['COUNT'];?></span></li>
                                                            <li class="d-flex py-1"><span><i class="fa fa-circle text-secondary pr-2"></i> BEED</span> <span class="pl-2 font-weight-bold"><?php echo $row9['COUNT'];?></span></li>
                                                            <li class="d-flex py-1"><span><i class="fa fa-circle pr-2" style="color:#fb0792"></i> BIT</span> <span class="pl-2 font-weight-bold"><?php echo $row7['COUNT'];?></span></li>
                                                    </ul>
                                                    <div class="apexchart-wrapper">
                                                        <div id="analytics10"></div>
                                                    </div>
                                                    <div class="statistics ml-sm-auto mt-4 mt-sm-0 pr-sm-5">
                                                        <ul class="list-style-none p-0">
                                                            <li class="d-flex py-1"><span><i class="fa fa-circle text-primary pr-2"></i> BSIT</span> <span class="pl-2 font-weight-bold"><?php echo $row4['COUNT'];?></span></li>
                                                            <li class="d-flex py-1"><span><i class="fa fa-circle text-warning pr-2"></i> BSBA</span> <span class="pl-2 font-weight-bold"><?php echo $row5['COUNT'];?></span></li>
                                                            <li class="d-flex py-1"><span><i class="fa fa-circle text-info pr-2"></i> BSED</span> <span class="pl-2 font-weight-bold"><?php echo $row6['COUNT'];?></span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            
                        <div class="col-lg-6">
                                <div class="card card-statistics">
                                    <div class="card-header">
                                        <div class="card-heading">
                                            <h4 class="card-title">Main page Visitor Statistics bar graph</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                    <canvas id="bargraph" height="210"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card card-statistics">
                                    <div class="card-header">
                                        <div class="card-heading">
                                            <h4 class="card-title">Visitor Statistics wave graph</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                    <canvas id="line" height="210"></canvas>
                                    </div>
                                </div>
                            </div>
</div>
                        
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

    <?php include 'includes/footer.php'?><script src="../assets/js/chart.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var barChartData = {
                labels: ["January","February","March","April","May","June","July","August","September","October","November","December"],
                datasets: [{
                    label: 'Visitors',
                    backgroundColor: 'rgb(79,129,189)',
                    borderColor: 'rgba(0, 158, 251, 1)',
                    borderWidth: 1,
                    data: [150,200,300,150,100,200,150,300,200,150,100,150]
                }]
            };

            var ctx = document.getElementById('bargraph').getContext('2d');
            window.myBar = new Chart(ctx, {
                type: 'bar',
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
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var barChartData = {
                labels: ["January","February","March","April","May","June","July","August","September","October","November","December"],
                datasets: [{
                    label: 'Visitors',
                    backgroundColor: 'rgb(79,129,189)',
                    borderColor: 'rgba(0, 158, 251, 1)',
                    borderWidth: 1,
                    data: [150,200,300,150,100,200,150,300,200,150,100,150]
                }]
            };

            var ctx = document.getElementById('line').getContext('2d');
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

    <script>
            var analytics10 = jQuery('#analytics10')
            if (analytics10.length > 0) {

               var optionsDonutTop = {
                      chart: {
                        height: 115,
                        width: 140,
                        type: 'donut',
                      },
                      colors: ['#8E54E9', '#f7b731', '#45aaf2','#fb0792','#28a745','#6c757d'],
                      labels: ['BSIT', 'BSBA', 'BSED','BIT','BTLED','BEED'],
                      series: [<?php echo $row4['COUNT'];?>, <?php echo $row5['COUNT'];?>, <?php echo $row6['COUNT'];?>,<?php echo $row7['COUNT'];?>,<?php echo $row8['COUNT'];?>,<?php echo $row9['COUNT'];?>],
                      legend: {
                        show: false
                      },
                      dataLabels: {
                        enabled: false
                      },
                      plotOptions: {
                        pie: {
                          size: 35,
                          donut: {
                            size: '72%',
                          },
                          offsetX: 10,
                          offsetY: -10,
                          dataLabels: {
                            enabled: false
                          },
                        }
                      },
                      responsive: [{
                        breakpoint: 480,
                        options: {
                            chart: {
                                width:250,
                                height:250
                            },
                            plotOptions: {
                                pie: {
                                  size: 70,
                                  donut: {
                                    size: '72%',
                                  },
                                  offsetX: 0,
                                  offsetY: -20,
                                  dataLabels: {
                                    enabled: false
                                  },
                                }
                              },
                        },
                      }]
                    }
                    var chartDonut2 = new ApexCharts(document.querySelector('#analytics10'), optionsDonutTop);
                    chartDonut2.render().then(function () {
                    });
                    }
    </script>

</body>


</html>