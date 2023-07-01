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
                                        <h1><i class="fa fa-map-marker"></i> List of Virtual Tours</h1>
                                    </div>
                                    <div class="ml-auto d-flex align-items-center">
                                        <nav>
                                            <ol class="breadcrumb p-0 m-b-0">
                                                <li class="breadcrumb-item">
                                                    <a href="index.php"><i class="ti ti-home"></i></a>
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
                            <div class="col-lg-12">
                                <div class="card card-statistics">
                                    <div class="card-body"><td><button class="btn btn-primary" data-toggle="modal" data-target="#addTour"><i class="fa fa-plus"></i> Add Tour</button>
                                        <div class="datatable-wrapper table-responsive">
                                            <table id="datatable" class="display compact table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Virtual Tour Name</th>
                                                        <th>Description</th>
                                                        <th>360 Video</th>
                                                        <th>Link</th>
                                                        <th>Background Music</th>
                                                        <th>Gallery</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Virtual Tour Name 1</td>
                                                        <td>Ut enim ad minim veniam, quis <br>nostrud exercitation ullamco laboris<br> nisi ut aliquip ex ea commodo consequat.</td>
                                                        <td>video</td>
                                                        <td><a href="">https://videolink.com/tour</a></td>
                                                        <td>music</td>
                                                        <td><a href="" class="btn btn-sm btn-primary"><i class="fa fa-image"></i> gallery</a></td>
                                                        <td><a href="javascript:void(0)" class="mr-2"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"></i></a>
                                                            <a href="javascript:void(0)"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Virtual Tour Name 2</td>
                                                        <td>Ut enim ad minim veniam, quis <br>nostrud exercitation ullamco laboris<br> nisi ut aliquip ex ea commodo consequat.</td>
                                                        <td>video</td>
                                                        <td><a href="">https://videolink.com/tour</a></td>
                                                        <td>music</td>
                                                        <td><a href="" class="btn btn-sm btn-primary"><i class="fa fa-image"></i> gallery</a></td>
                                                        <td><a href="javascript:void(0)" class="mr-2"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"></i></a>
                                                            <a href="javascript:void(0)"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Virtual Tour Name 3</td>
                                                        <td>Ut enim ad minim veniam, quis <br>nostrud exercitation ullamco laboris<br> nisi ut aliquip ex ea commodo consequat.</td>
                                                        <td>video</td>
                                                        <td><a href="">https://videolink.com/tour</a></td>
                                                        <td>music</td>
                                                        <td><a href="" class="btn btn-sm btn-primary"><i class="fa fa-image"></i> gallery</a></td>
                                                        <td><a href="javascript:void(0)" class="mr-2"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"></i></a>
                                                            <a href="javascript:void(0)"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"></i></a></td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>Virtual Tour Name</th>
                                                        <th>Description</th>
                                                        <th>360 Video</th>
                                                        <th>Link</th>
                                                        <th>Background Music</th>
                                                        <th>Gallery</th>
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
    <div class="modal fade" id="addTour" tabindex="-1" role="dialog" aria-labelledby="addTour" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title"><i class="fa fa-map-marker"></i> Add Virtual Tour</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="form-group">
                                                <label for="modelemail">Virtual Tour Name</label>
                                                <input type="text" class="form-control" id="modelemail">
                                            </div>
                                            <div class="form-group">
                                                <label for="modelpass">Description</label>
                                                <textarea class="form-control"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="modelemail">Upload 360deg video</label>
                                                <input type="file" class="form-control" id="modelemail">
                                            </div>
                                            <div class="form-group">
                                                <label for="modelemail">Link</label>
                                                <input type="text" class="form-control" id="modelemail">
                                            </div>
                                            <div class="form-group">
                                                <label for="modelemail">Background Music</label>
                                                <input type="file" class="form-control" id="modelemail">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
    <?php include 'includes/footer.php'?>
</body>


</html>