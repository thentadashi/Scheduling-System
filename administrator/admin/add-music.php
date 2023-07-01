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
                                        <h1><i class="fa fa-music"></i> Add Music</h1>
                                    </div>
                                    <div class="ml-auto d-flex align-items-center">
                                        <nav>
                                            <ol class="breadcrumb p-0 m-b-0">
                                                <li class="breadcrumb-item">
                                                    <a href="index.html"><i class="ti ti-home"></i></a>
                                                </li>
                                                <li class="breadcrumb-item active text-primary" aria-current="page">Music</li>
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
                                            <h4 class="card-title"><i class="fa fa-plus"></i> Music Information</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                    <form class="needs-validation" novalidate>
                                            <div class="form-row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="validationCustom01">Image Allowed</label>
                                                    <input type="text" class="form-control" id="validationCustom01" placeholder=".jpeg, .png" required>
                                                    
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="validationCustom02">Max size per image</label>
                                                    <input type="text" class="form-control" id="validationCustom02" placeholder="2mb" required>
                                                    
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="validationCustom01">Audio Allowed</label>
                                                    <input type="text" class="form-control" id="validationCustom01" placeholder=".mp3" required>
                                                    
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="validationCustom02">Max size per audio</label>
                                                    <input type="text" class="form-control" id="validationCustom02" placeholder="2mb" required>
                                                    
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="validationCustom01">Vide Allowed</label>
                                                    <input type="text" class="form-control" id="validationCustom01" placeholder=".avi, .mp4" required>
                                                    
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="validationCustom02">Max size per video</label>
                                                    <input type="text" class="form-control" id="validationCustom02" placeholder="2mb" required>
                                                    
                                                </div>
                                            </div>
                                            <button class="btn btn-primary" type="submit">Update</button>
                                        </form>
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