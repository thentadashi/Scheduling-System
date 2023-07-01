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
                                        <h1><i class="fa fa-image"></i> Gallery</h1>
                                    </div>
                                    <div class="ml-auto d-flex align-items-center">
                                        <nav>
                                            <ol class="breadcrumb p-0 m-b-0">
                                                <li class="breadcrumb-item">
                                                    <a href="index.html"><i class="ti ti-home"></i></a>
                                                </li>
                                                <li class="breadcrumb-item active text-primary" aria-current="page">Gallery</li>
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
                            <div class="col-md-12">
                                <div class="card card-statistics">
                                    <div class="card-header">
                                        <div class="card-heading">
                                            <h4 class="card-title"><i class="fa fa-image"></i> Upload Image</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <form action="http://themes.potenzaglobalsolutions.com/file-upload" class="dropzone" id="my-awesome-dropzone"></form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                        <!-- begin row -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-statistics">
                                    <div class="card-header">
                                        <div class="card-heading">
                                            <h4 class="card-title"><i class="fa fa-image"></i> Images List</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <!--start gallery -->
                                        <div class="row magnific-wrapper">
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <div class="card card-statistics text-center">
                                                    <div class="card-body p-0">
                                                        <div class="portfolio-item">
                                                            <img src="../assets/img/widget/02.jpg" alt="gallery-img">
                                                            <div class="portfolio-overlay">
                                                                <h4 class="text-white"><a href="javascript:void(0)">Your title here</a></h4>
                                                            </div>
                                                            <a class="popup portfolio-img view" href="../assets/img/widget/02.jpg"><i class="fa fa-arrows-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <div class="card card-statistics text-center">
                                                    <div class="card-body p-0">
                                                        <div class="portfolio-item">
                                                            <img src="../assets/img/widget/03.jpg" alt="gallery-img">
                                                            <div class="portfolio-overlay">
                                                                <h4 class="text-white"> <a href="javascript:void(0)"> Your title here </a> </h4>
                                                            </div>
                                                            <a class=" view popup portfolio-img" href="../assets/img/widget/03.jpg"><i class="fa fa-arrows-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <div class="card card-statistics text-center">
                                                    <div class="card-body p-0">
                                                        <div class="portfolio-item">
                                                            <img src="../assets/img/widget/04.jpg" alt="gallery-img">
                                                            <div class="portfolio-overlay">
                                                                <h4 class="text-white"> <a href="javascript:void(0)"> Your title here </a> </h4>
                                                            </div>
                                                            <a class=" view popup portfolio-img" href="../assets/img/widget/04.jpg"><i class="fa fa-arrows-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <div class="card card-statistics text-center">
                                                    <div class="card-body p-0">
                                                        <div class="portfolio-item">
                                                            <img src="../assets/img/widget/05.jpg" alt="gallery-img">
                                                            <div class="portfolio-overlay">
                                                                <h4 class="text-white"> <a href="javascript:void(0)"> Your title here </a> </h4>
                                                            </div>
                                                            <a class=" view popup portfolio-img" href="../assets/img/widget/05.jpg"><i class="fa fa-arrows-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <div class="card card-statistics text-center">
                                                    <div class="card-body p-0">
                                                        <div class="portfolio-item">
                                                            <img src="../assets/img/widget/06.jpg" alt="gallery-img">
                                                            <div class="portfolio-overlay">
                                                                <h4 class="text-white"> <a href="javascript:void(0)"> Your title here </a> </h4>
                                                            </div>
                                                            <a class=" view popup portfolio-img" href="../assets/img/widget/06.jpg"><i class="fa fa-arrows-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <div class="card card-statistics text-center">
                                                    <div class="card-body p-0">
                                                        <div class="portfolio-item">
                                                            <img src="../assets/img/widget/07.jpg" alt="gallery-img">
                                                            <div class="portfolio-overlay">
                                                                <h4 class="text-white"> <a href="javascript:void(0)"> Your title here </a> </h4>
                                                            </div>
                                                            <a class=" view popup portfolio-img" href="../assets/img/widget/07.jpg"><i class="fa fa-arrows-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <div class="card card-statistics text-center">
                                                    <div class="card-body p-0">
                                                        <div class="portfolio-item">
                                                            <img src="../assets/img/widget/08.jpg" alt="gallery-img">
                                                            <div class="portfolio-overlay">
                                                                <h4 class="text-white"> <a href="javascript:void(0)"> Your title here </a> </h4>
                                                            </div>
                                                            <a class=" view popup portfolio-img" href="../assets/img/widget/08.jpg"><i class="fa fa-arrows-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <div class="card card-statistics text-center">
                                                    <div class="card-body p-0">
                                                        <div class="portfolio-item">
                                                            <img src="../assets/img/widget/09.jpg" alt="gallery-img">
                                                            <div class="portfolio-overlay">
                                                                <h4 class="text-white"> <a href="javascript:void(0)"> Your title here </a> </h4>
                                                            </div>
                                                            <a class="popup portfolio-img view" href="../assets/img/widget/09.jpg"><i class="fa fa-arrows-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end gallery-->
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